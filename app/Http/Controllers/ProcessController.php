<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;


class ProcessController extends Controller
{
    public function gitpull() {
        $process = new Process(['git', 'pull']);
        $process->setWorkingDirectory('/var/www/html/ksrv2');
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
      }

    public function optimize() {
        $process = new Process(['php artisan optimize']);
        $process->setWorkingDirectory('/var/www/html/ksrv2');
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
      }
}
