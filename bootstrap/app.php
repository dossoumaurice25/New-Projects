<?php

// bootstrap/app.php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Log;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })
    ->withSchedule(function (Schedule $schedule) {
        // Calculer les profits quotidiens tous les jours à 00:01
        $schedule->command('investments:calculate-profits')
            ->dailyAt('00:30')
            ->withoutOverlapping()
            ->onSuccess(function () {
                Log::info('Calcul des profits journaliers terminé avec succès');
            })
            ->onFailure(function () {
                Log::error('Échec du calcul des profits journaliers');
            });

        // Commandes additionnelles optionnelles
        $schedule->command('log:clear')
            ->weekly()
            ->sundays()
            ->at('02:00');
    })
    ->create();