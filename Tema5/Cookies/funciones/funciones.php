<?php

function insertarCookies(){
    setcookie('id',$_GET['id'],time()+(3600*24));
}