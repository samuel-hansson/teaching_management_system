<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Http\Request;

class TestJobController extends Controller
{
    //
    public function testJob($data){
        TestJob::dispatch($data)->delay(5)->onQueue('test_queue');
    }
}
