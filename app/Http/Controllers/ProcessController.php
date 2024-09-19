<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

class ProcessController extends Controller
{
    public function gitpull() {
        $result = Process::run('git pull');
        return $result->output();
      }
}
