<?php

namespace App\Services;

class UserService {
    /**
     * @param string $email
     * @param string $password
     * @return string
     */
    public function attemptLogin(string $email, string $password): string
    {
        return 'token';
    }
}