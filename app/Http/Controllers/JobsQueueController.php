<?php

namespace App\Http\Controllers;

use App\Jobs\MeraJob;
use Illuminate\Http\Request;

class JobsQueueController extends Controller
{
    //

    public function index(){
    MeraJob::dispatch();
    return 'Job dispatched!';
    }

}
