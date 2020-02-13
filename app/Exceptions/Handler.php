<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    //public function render($request, Exception $exception)
    public function render($request, Exception $e)
    {
       // return parent::render($request, $exception);


        if($this->isHttpException($e))
        {
            switch (intval($e->getStatusCode())) {
                // not found
                case 404:
                    return redirect()->route('home');
                    break;
                // internal error
                case 500:
                    return redirect()->route('home');
                    break;

                default:
                    return $this->renderHttpException($e);
                    //return redirect()->route('home');
                    break;
            }
        }
        else
        {
            return parent::render($request, $e);
        }

    }
}
