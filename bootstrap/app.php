<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

/* Single Middleware */
use App\Http\Middleware\ageCheck;

/* Register Group middleware */
use App\Http\Middleware\ageCheckGroupMiddleware;
use App\Http\Middleware\countryGroupMiddleware;

/* Dynamic language Select */
use App\Http\Middleware\SetLang;



return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        //$middleware->append(ageCheck::class);

        // Make a group middleware
        //$middleware->appendToGroup('check1', [ageCheckGroupMiddleware::class, countryGroupMiddleware::class]);
        $middleware->appendToGroup('setLang',SetLang::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
