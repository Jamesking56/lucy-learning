<?php
/**
 * Created by PhpStorm.
 * User: jamesking56
 * Date: 23/08/18
 * Time: 18:43
 */

class LogoutController
{
    use RedirectToHome;

    public function logout() {
        // end the session

        $this->toHome();
    }
}