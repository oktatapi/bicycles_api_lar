<?php

namespace App\Http\Controllers;

use App\Models\Bicycle;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bicycles = Bicycle::all();
        return response()->json([
            'success' => true,
            'data' => $bicycles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bicycle = Bicycle::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $bicycle
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bicycle $bicycle)
    {
        $employee = Bicycle::find($bicycle->id);
        return response()->json([
            'success' => true,
            'data' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bicycle $bicycle)
    {
        $bicycle->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $bicycle
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bicycle $bicycle)
    {
        $bicycle = Bicycle::find($bicycle->id);
        if (!$bicycle) {
            return response()->json([
                'success' => false,
                'message' => 'Bicycle not found'
            ], 404);
        }else {
            $bicycle->delete();
            return response()->json([
                'success' => true,
                'message' => 'Bicycle deleted successfully',
                'data' => $bicycle
            ]);
        }
        
        
    }
}
