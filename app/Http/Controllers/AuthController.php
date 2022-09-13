<?php
    namespace app\Http\Controllers;

    use app\Http\Controllers\Controller;

    class AuthController extends Controller {

        public function signin($username, $password) {
            return "You just signed in to $username. Your password you have typed in is $password";
        }
    }
?>
