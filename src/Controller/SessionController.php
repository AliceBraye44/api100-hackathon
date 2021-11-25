<?php


class SessionController
{

    public function start()
    {
        session_start();
        $_SESSION['roundsWon'] = 0;

        if (!isset($_SESSION['loginname'])) {
            $username = "Michel";
        } else {
            $username = $_SESSION['loginname'];
        }
    }
}
