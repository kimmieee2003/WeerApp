<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeerController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.tomorrow.io/v4/timelines?location=-73.98529171943665,40.75872069597532&f[…]steps=1h&units=metric&apikey=65W7qEjsqGm69G2o97zz1ZkU2MlQb12u
');
        dd($response);
    }
}
