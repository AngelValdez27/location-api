<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Models\Coords;
use App\Http\Controllers\v1\ResponseController;
use Illuminate\Http\Request;

class CoordsController extends ResponseController
{
    public function getCoords()
    {
        $coords = Coords::where('status', 1)->orderBy('id')->get();
        return $this->successResponse(['Coords' => $coords]);
    }

    public function create(Request $request)
    {
        $coords = Coords::create([
            'place_name' => $request->place_name,
            'type' => $request->type,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'description' => $request->description,
        ]);
        return $this->successResponse(data: [], message: 'Successfully created');
    }
}
