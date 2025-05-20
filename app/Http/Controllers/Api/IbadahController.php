<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\dataibadah;
use Illuminate\Http\Request;

class IbadahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(dataibadah::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'name' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
        ]);

         $dataibadah = dataibadah::create($request->all());
        return response()->json($dataibadah, 201);    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $dataibadah = dataibadah::find($id);
        if (!$dataibadah) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        return response()->json($dataibadah);   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
        ]);

        $dataibadah = dataibadah::find($id);
        if (!$dataibadah) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        
        $dataibadah->update($request->all());
        return response()->json($dataibadah);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataibadah = dataibadah::find($id);
        if (!$dataibadah) {
            return response()->json(['message' => 'Data not found'], 404);
        }
        $dataibadah->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }
}
