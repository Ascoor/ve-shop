<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function index()
    {
        return Shipment::all();
    }

    public function store(Request $request)
    {
        $shipment = Shipment::create($request->all());
        return response()->json($shipment, 201);
    }

    public function show(Shipment $shipment)
    {
        return $shipment;
    }

    public function update(Request $request, Shipment $shipment)
    {
        $shipment->update($request->all());
        return response()->json($shipment, 200);
    }

    public function destroy(Shipment $shipment)
    {
        $shipment->delete();
        return response()->json(null, 204);
    }
}