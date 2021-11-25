<?php


class SessionController{

    public function start(){
        session_start();

        if(!isset($_SESSION['loginname'])){
            $username="Michel";
        } else {
            $username=$_SESSION['loginname'];
        }
    }
}
