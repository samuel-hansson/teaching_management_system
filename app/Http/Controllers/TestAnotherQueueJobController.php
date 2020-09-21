<?php

namespace App\Http\Controllers;

use App\Jobs\TestAnotherQueueJob;
use Illuminate\Http\Request;

class TestAnotherQueueJobController extends Controller
{
    //
    public function testAnotherQueueJob($data){
        TestAnotherQueueJob::dispatch($data)->delay(5)->onQueue('test_another_queue');
    }
}
