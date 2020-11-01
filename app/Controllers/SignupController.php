<?php
require_once CORE.'/Controller.php';
require_once CORE.'/Session.php';
require_once MODELS.'/User.php';
require_once CORE.'/Auth.php';

class SignupController extends Controller{

   private $costs =[
       'cost' => 12
   ];
   private $logged_in = false;
   private $email;
   private $user_id;

   private $error = null;
   private $message = null;
   private $user = null;
   private $cookie_prefix = '';

   public function signUpForm()
   {
      $this->view->render('signup/index', ['title'=> 'Sign Up'], 'app');
   }

      public function signup()
    {
        $request = new Request();
        $password = $request->password;
        $confirmpassword = $request->confirmpassword;
        
        if (self::is_valid_passwords($password, $confirmpassword)){
            list($first_name, $last_name, $domain) = explode('@', $request->email);
            $hash = password_hash($password, PASSWORD_BCRYPT, $this->costs);
            (new User())::save([    
               "first_name"=>$request->first_name,  
               "last_name"=>$request->last_name,
               "email"=>$request->email,
               "password"=>$hash,
               "email"=>$request->email,
               "phone_number"=>$request->phone_number]);
            header('Location: /sigin');
        } else {
            $this->error = "Your passwords do not match. Please type carefully.";
            Session::set('error', $this->error);
            header('Location: /signup');
        }
    }

 
    static private function is_valid_passwords($password, $confirmpassword) 
    {
       
        if ($password != $confirmpassword) {
            return false;
        }
    
        return true;
    }
    function logout()
    {
     
         if( isset($_COOKIE[$this->cookie_prefix.'ID']) )
       {	
          
          setcookie( $this->cookie_prefix.'ID', '', TIME_NOW - 3600 );	
          setcookie( $this->cookie_prefix.'UserEmail', '', TIME_NOW - 3600 ); 
             setcookie($this->cookie_prefix.'Logged', '', TIME_NOW - 3600); 
       }
         Session::destroy('userId');
         $this->logged_in = FALSE;
         setcookie($this->cookie_prefix.'Logged', $this->logged_in, TIME_NOW - 3600); 
       Helper::redirect('/');
     }

   

}

