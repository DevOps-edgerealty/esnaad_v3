<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function render($request, Throwable $exception)
    {
        // Redirect 404 errors to a custom URL
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
            return redirect()->to('https://esnaad.com/en');
        }

        // Handle other exceptions as needed

        return parent::render($request, $exception);
    }
}
