<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function GetMessage()
    {
        return response()->json([
            'message'=> 'hello wrld',
        ]);
    }
}
