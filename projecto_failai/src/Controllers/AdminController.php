<?php

namespace Simas\Controllers;

use Simas\Authenticator;
use Simas\Exceptions\UnauthorizedException;
use Simas\HtmlRender;
use Simas\Request;
use Simas\Response;

class AdminController extends BaseController
{
    private Authenticator $authenticator;
    // BAD PRACTICE: DI metu priskirti numatytasias (Default) reiksmes
    public function __construct(Authenticator $authenticator = null)
    {
        $this->authenticator = $authenticator ?? new Authenticator();
        parent::__construct();
    }

    /**
     * @throws UnauthorizedException
     */
    public function index(Request $request): Response
    {
        if (!$this->authenticator->isLoggedIn()) {
            throw new UnauthorizedException();
        }

        return $this->response([
            'message' => $request->get('message'),
            'content' => 'Admin puslapis! ' . $_SESSION['username'],
        ]);
    }

    /**
     * @throws UnauthorizedException
     */
    public function login(Request $request): Response
    {
        $userName = $request->get('username');
        $password = $request->get('password');

        if(!empty($userName) && !empty($password)) {
            $this->authenticator->login($userName, $password);
        }

        return $this->redirect('/admin', ['message' => 'Sveikiname prisijungus']);
    }


    public function logout(): Response
    {
        $this->authenticator->logout();
        return $this->redirect('/', ['message' => 'Sveikiname atsijungus']);
    }
}