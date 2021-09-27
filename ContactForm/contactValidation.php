<?php
//INITIALIZE THE VARIABLES
$errors = "";
$fullName = "";
$email = "";
$subject = "";
$message = "";
//FUNCTION TO VALIDATE THE FORM
function validateContactForm($fullname,$email,$subject, $message, $errors)
{
    //IF FIRST NAME EMPTY, THROW AN ERROR
    if (empty($fullname)) {
        $errors .= "Please enter your Full Name<br/>";
    } else {

        $errors .= "";     }


//IF EMAIL EMPTY OR NOT A VALID FORMAT, THROW AN ERROR
    if (empty($email)) {
        $errors .= "";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors .= "Please enter valid email format<br/>";
        }
        $errors .= "";
    }


//IF ENQURY SELECTION ID EMPTY, THROW AN ERROR
    if (empty($subject ) ) {
        $errors .= "Please Enter a Subject<br/>";
    }

    //IF MESSAGE TEXT BOX IS EMPTY, THROW AN ERROR
    if (empty($message)) {
        $errors .= "Please enter a message<br/>";
    }else{
        $errors .= "";
    }
    return $errors;




}