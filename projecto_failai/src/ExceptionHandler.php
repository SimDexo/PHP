<?php

namespace Simas;

use Simas\Exceptions\MissingVariableException;
use Simas\Exceptions\PageNotFoundException;
use Simas\Exceptions\UnauthorizedException;
use Exception;
use Monolog\Logger;

class ExceptionHandler
{
    public function __construct(private Output $output, private Logger $log)
    {
    }

    public function handle(Exception $e)
    {
        match (get_class($e)) {
            PageNotFoundException::class => $this->handlePageNotFoundException($e),
            UnauthorizedException::class => $this->handleUnauthenticatedException($e),
            MissingVariableException::class => $this->handleMissingVariableException($e),
            \PDOException::class => $this->handlePDOException($e),
            default => $this->handleDefaultException($e),
        };
    }

    private function handleDefaultException(Exception $e): void
    {
        $this->output->store('Whoops. Looks like we have a problem. Please try again later.');
        $this->log->error($e->getMessage());
    }

    private function handlePageNotFoundException(PageNotFoundException $e): void
    {
        $this->log->warning($e->getMessage());
        header('Location: /?message=Page not found');

    }

    private function handleUnauthenticatedException(UnauthorizedException $e): void
    {
        $this->log->notice($e->getMessage());
        header('Location: /?message=Neteisingi prisijungimo duomenys');
    }

    private function handleMissingVariableException(MissingVariableException $e): void
    {
        $this->output->store('Kilo klaida templeite.');
        $this->log->notice($e->getMessage());
    }

    private function handlePDOException(\PDOException $e)
    {
        $this->output->store('Kilo klaida duombazeje.');
        $this->log->error($e->getMessage());
    }
}