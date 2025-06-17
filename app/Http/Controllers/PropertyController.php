<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Booking;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            $properties = Property::with('user')->latest()->get();
            return view('admin.admin-properties', compact('properties'));
    }
    public function userIndex()
    {
        // Get all property IDs that have been booked
        $bookedPropertyIds = Booking::pluck('property_id')->toArray();

        // Fetch properties that have NOT been booked
        $properties = Property::whereNotIn('id', $bookedPropertyIds)->get();
        // $properties = Property::where('status', 'Available')->latest()->paginate(10);
        return view('property-list', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
             $property = \App\Models\Property::findOrFail($id);
            return view('properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
