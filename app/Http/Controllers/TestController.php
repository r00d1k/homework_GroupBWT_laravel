<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
//        DB::connection()->enableQueryLog();
        return User::whereHas('companies.country', function (Builder $query) {
            $query->where('name','Канада');
        })->get(['id', 'name']);
//        dd(DB::getQueryLog());
    }
}
