<?php
$action=isset($_GET['action']) ? $_GET['action'] : "";
switch ($action) {
    case 'login':login();
    break;
    case'home':home();
    break;
    case'about':about();
    break;
    case'gallery':gallery();
    break;
    case'contact':contact();
    break;
    case'registration':registration();
    break;
    case'logout':logout();
    break;
    default:home();
}
function home(){
  require('home.php');
}
function about(){
  require('about.php');
}
function gallery(){
  require('gallery.php');
}
function contact(){
  require('contact.php');
}
function login(){
  require('login.php');
}
function registration(){
  require('registration.php');
}
function logout(){
  require('logout.php');
}



?>
