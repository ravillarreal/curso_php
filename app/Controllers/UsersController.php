<?php

namespace App\Controllers;

use App\Models\User;
use Respect\Validation\Validator as v;

class UsersController extends BaseController {
    public function getAddUser($request) {

        $responseMessage = null;

        return $this->renderHTML('addUser.twig', [
            'responseMessage' => $responseMessage
        ]);
    }

    public function postAddUser($request) {
        $postData = $request->getParsedBody();
        $userValidator = v::key('email', v::stringType()->notEmpty())
        ->key('password', v::stringType()->notEmpty());
        
        try {
            $userValidator->assert($postData);
            
            $user = User::where('email', $postData['email'])->exists();
            if ($user) {
                $responseMessage = 'The user already exists!';
            } else {
                $user = new User();
                $user->email = $postData['email'];
                $user->password = password_hash($postData['password'], PASSWORD_DEFAULT);
                $user->save();
                $responseMessage = 'Saved';
            }
            
        } catch (\Exception $e) {
            $responseMessage = $e->getMessage();
        }

        return $this->renderHTML('addUser.twig', [
            'responseMessage' => $responseMessage
        ]);
        
    }
}