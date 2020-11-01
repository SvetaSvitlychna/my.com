<?php

require_once MODELS.'/User.php';
require_once CORE.'/Session.php';
require_once CORE.'/Controller.php';
require_once CORE.'/Auth.php';


class LoginController extends Controller
{
    private $logged_in = false;
    private $email;
    private $user_id;

    private $costs = [
        'cost' => 12,
    ];
   
    private $error = NULL;
    private $message = NULL;
    public $user = NULL;
  	private $cookie_prefix = '';
	    
    public function __construct()
	{
        parent::__construct();
        $session_id = Session::init();
		
        if($userId=Session::get('userId')){
            $this->user = User::getByID($userId);
            if( $this->user != NULL )
                $this->logged_in = true;
                $this->user_id = $userId;
		}
		
				if($this->logged_in === false && isset($_COOKIE[$this->cookie_prefix.'ID'])){
			$id = intval($_COOKIE[$this->cookie_prefix.'ID']);
			$email = strval($_COOKIE[ $this->cookie_prefix.'UserEmail']);
							
			if($id && $email)
                $this->signin();
		}
	}


    public function signInForm()
    {
        $this->view->render('login/index', ['title'=> 'Login'], 'app');
    }

    
    function signin()
	{
        if ($this->logged_in === true) {
            header('Location: /profile'); 
        }
        $request = new Request();
        $userId = (new User())::checkUser($request->email, $request->password);
        if ($userId === false) {
            $this->error = "Пользователя с таким email или паролем не существует";
            Session::set('error', $this->error);
            header('Location: /');
        } else {
            $this->user = User::getByID($userId);
            $this->logged_in = true;
            $this->message = "You Are Logged";
            Session::set('success', $this->message);
            Session::set('userId', $this->user->id);
            setcookie($this->cookie_prefix.'Logged', $this->logged_in); 
 
            $remember_me = $request->remember_me ? 1:0;
            if($remember_me && !isset($_COOKIE[$this->cookie_prefix.'ID'])){
                setcookie($this->cookie_prefix.'ID', $this->user->id, TIME_NOW + COOKIE_TIMEOUT, ''); 
                setcookie($this->cookie_prefix.'UserEmail', $this->user->email, TIME_NOW + COOKIE_TIMEOUT, ''); 
            }
            header('Location: /profile'); 
        }
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