<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'Index';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store $request->name";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Show $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Update $id: $request->name";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Destroy $id";
    }
}
