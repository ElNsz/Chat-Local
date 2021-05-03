<?php
session_start();
if(isset($_SESSION['name'])){
     
    $text_message = "";
    file_put_contents("log.html", $text_message, LOCK_EX);
}
