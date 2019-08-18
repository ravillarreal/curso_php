<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;
use Zend\Diactoros\Response\RedirectResponse;

class AuthController extends BaseController {
    public function getLogin($request) {

        return $this->renderHTML('login.twig');
    }

    public function postLogin($request) {

        $responseMessage = null;

        $postData = $request->getParsedBody();
        $user = User::where('email', $postData['email'])->first();
        if($user) {
            if (\password_verify($postData['password'], $user->password)) {
                $_SESSION['userId'] = $user->id;
                return new RedirectResponse('/admin');
            } else {
                $responseMessage = 'Tu ere marico?';
            }
        } else {
            $responseMessage = 'Tu ere marico?';
        }

        return $this->renderHTML('login.twig', [
            'responseMessage' => $responseMessage
        ]);
    }

    public function getLogout($request) {

        unset($_SESSION['userId']);
        return new RedirectResponse('/login');
    }
}