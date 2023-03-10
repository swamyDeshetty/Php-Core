<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//this is the class of the db..

class RetrieveController extends Controller
{
    public function class()
    {
        return DB::select("select * from users");//retreving the data from the data from DB with this query...
    }
}
