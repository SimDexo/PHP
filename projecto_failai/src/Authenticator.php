<?php

namespace Simas;

use Simas\Exceptions\UnauthorizedException;

class Authenticator
{
    /**
     * @throws UnauthorizedException
     */
    public function authenticate(): void
    {
        if ($this->isLoggedIn()) {
            return;
        }
    }

    /**
     * @return bool
     */
    public function isLoggedIn(): bool
    {
        return isset($_SESSION['logged']) && $_SESSION['logged'] === true;
    }

    /**
     * @param string $checkUser
     * @param string $checkPass
     * @return bool
     * @throws UnauthorizedException
     */
    public function login(string $checkUser, string $checkPass): bool
    {

        $loginsMas = [
            'admin' => 'slapta',
            'tautiz' => 'pass',
        ];

        foreach ($loginsMas as $username => $pass) {
            if ($checkUser === $username && $checkPass === $pass) {
                $_SESSION['logged'] = true;
                $_SESSION['username'] = $checkUser ?? $_SESSION['username'];
                return true;
            }
        }

        throw new UnauthorizedException();
    }

    public function logout(): void
    {
        // Vieta kur atjungiam lakytoja ir sunaikinam jo sesija
        if ($_GET['logout'] ?? false) {
            $_SESSION['logged'] = false;
            $_SESSION['username'] = null;
            session_destroy();
            header('Location: /');
            exit();
        }
    }
}