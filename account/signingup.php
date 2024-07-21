<?php
session_start();
include 'user.php';
$user = new User();
if(isset($_POST['su_ubmit'])){
    if(!empty($_POST['full_name']) && !empty($_POST['gender']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
        if($_POST['password'] !== $_POST['confirm_password']){
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'The passwords you typed in did not match to each other'; 
        }else{
            $prevCon['where'] = array('email'=>$_POST['email']);
            $prevCon['return_type'] = 'count';
            $prevUser = $user->getRows($prevCon);
            if($prevUser > 0){
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Email already exists, please use another email.';
            }else{
                $userData = array(
                    'first_name' => $_POST['first_name'],
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'gender' => $_POST['gender'],
                    'country' => $_POST['country'],
                    'city' => $_POST['city'],
                );
                $insert = $user->insert($userData);
                if($insert){
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg'] = 'You have successfully registered your account, log in with your credentials.';
                }else{
                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg'] = 'Oops! Something went wrong!';
                }
            }
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'You did not fill all the fields '; 
    }
    $_SESSION['sessData'] = $sessData;
    $redirectURL = ($sessData['status']['type'] == 'success')?'index.php':'registration.php';
    header("Location:".$redirectURL);
}elseif(isset($_POST['loginSubmit'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $conditions['where'] = array(
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'status' => '1'
        );
        $conditions['return_type'] = 'single';
        $userData = $user->getRows($conditions);
        if($userData){
            $sessData['userLoggedIn'] = TRUE;
            $sessData['userID'] = $userData['id'];
            $sessData['status']['type'] = 'success';
            $sessData['status']['msg'] = 'Welcome '.$userData['first_name'].'!';
        }else{
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Wrong email or password, please try again.'; 
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Enter email and password.'; 
    }
    $_SESSION['sessData'] = $sessData;
    header("Location:index.php");
}elseif(!empty($_REQUEST['logoutSubmit'])){
    unset($_SESSION['sessData']);
    session_destroy();
    $sessData['status']['type'] = 'success';
    $sessData['status']['msg'] = 'You have logout successfully from your account.';
    $_SESSION['sessData'] = $sessData;
    header("Location:index.php");
}else{
    header("Location:index.php");
}