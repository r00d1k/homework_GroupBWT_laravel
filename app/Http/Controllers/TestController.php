<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return Country::where('name', 'Канада')->with('companies')->get();
    }
}
