<?php
  session_start();

 
  function userIsLoggedIn(){
    if(isset($_SESSION['user_id'])){
      return true;
    } else {
      return false;
    }
  }

 
