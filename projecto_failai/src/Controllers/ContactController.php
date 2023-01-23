<?php

namespace Simas\Controllers;

use Simas\FS;
use Simas\Response;
use Monolog\Logger;

class ContactController extends BaseController
{
    private Logger $log;

    public function __construct(Logger $log)
    {
        $this->log = $log;
        parent::__construct();
    }

    public function index(): Response
    {
        {
            // Nuskaitomas HTML failas ir siunciam jo teksta i Output klase
            $failoSistema = new FS('../src/html/kontaktai.html');
            $failoTurinys = $failoSistema->getFailoTurinys();
            $this->log->info('Kontaktai atidaryti');

            return $this->response($failoTurinys);
        }
    }
}