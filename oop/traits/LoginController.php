<?php

class LoginController
{
    use RedirectToHome;

    public function login() {
        // do some login gubbins

        if (true) { // if they are already logged in
            $this->toHome();
        }

        // respond with the login form
    }

    public function doLogin() {
        // take the form response and try and create a session

        if (true) { // if they are already logged in
            $this->toHome();
        }
    }
}