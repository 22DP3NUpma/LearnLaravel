<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kurss;
use Illuminate\Http\Request;

class KurssController extends Controller
{
    public function index()
    {
        return response()->json(Kurss::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:table',
            'about' => 'string',
            'banner_addresses' => 'string',
            'people_count' => 'required|integer'
        ]);

        $kurss = Kurss::create($validated);

        return response()->json($kurss);
    }
}
