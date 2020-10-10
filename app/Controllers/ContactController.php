<?php
$errors = [];
$feedback_msg = '';
$title = 'Contact us';
$comments = [];
function validate(){
    $errors = [];
    if($_POST['firstName'] != ''){
        $firstName = htmlspecialchars(filter_var($_POST['firstName'],FILTER_SANITIZE_STRING));
        if($firstName == ''){
            array_push($errors, 'First name is not valid');
        }
    }else{
        array_push($errors, 'First name is required');
    }
    if($_POST['lastName'] != ''){
        $lastName = htmlspecialchars(filter_var($_POST['lastName'],FILTER_SANITIZE_STRING));
        if($lastName == ''){
            array_push($errors, 'Last name is not valid');
        }
    }else{
        array_push($errors, 'Last name is required');
    }
    if($_POST['email'] != ''){
        $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
         
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            array_push($errors, 'Email is not valid');
        }
    }else{
        array_push($errors, 'Email is required');
    }
         
    // if($_POST['subject'] != ''){
    //     $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
    //     if($subject == ''){
    //         $errors[] = 'Subject is not valid';
    //     }
    // }else{
    //     $errors[] = 'Subject is required';
    // }
         
    if($_POST['message'] != ''){
        $message = htmlentities(filter_var($_POST['message'],FILTER_SANITIZE_STRING));
        if($message == ''){
            array_push($errors, 'Message is not valid');
        }
    }else{
        array_push($errors, 'Message is required');
    }
    $contact_copy = $_POST['contact-copy'] ?? false;
    $contact_copy = filter_var($contact_copy, FILTER_VALIDATE_BOOLEAN) ?? false;
    $feedback_msg = ($contact_copy) ? 'We are send You a copy of this message':'';
    return [$errors,  $feedback_msg, $firstName, $lastName, $email, $message] ;
}

if ($_POST) {
    list ($errors,  $feedback_msg, $firstName, $lastName, $email, $message) = validate();
    try{
        $link = mysqli_connect('localhost', 'root', '', 'store');
        $sql = "INSERT INTO feedback (firstName, lastName, email, message) VALUES ('$firstName', 
        '$lastName', '$email', '$message')" ;
        mysqli_query($link, $sql);        
            }catch (Exception $ex){
                $errors = mysqli_error($link);
            } finally {
        mysqli_close($link);
    }
}


try{
    $link = mysqli_connect('localhost', 'root', '', 'store');
    $sql = "SELECT * FROM feedback";
    $res = mysqli_query($link, $sql);
    
    if(mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_assoc($res)){
            array_push($comments, $row);
        }
    }
        }catch (Exception $ex){
            $errors = mysqli_error($link);
        } finally {
    mysqli_close($link);
}

$address = conf('contacts');



render('contact/index',compact('errors', 'title', 'feedback_msg', 'address', 'comments'));

