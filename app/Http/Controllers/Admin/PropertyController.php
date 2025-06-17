<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PropertyController extends Controller
{
    //
        public function index()
    {
        $properties = Property::all();
        return view('admin.admin-properties', compact('properties'));
    }
    public function create()
    {
        return view('admin.admin-form');
    }

public function store(Request $request)
{
    Log::info('Store method hit');
    Log::info('Request data:', $request->all());
    Log::info('Image file: ', [$request->file('image')]);

    $request->merge([
        'price' => str_replace([',', '$'], '', $request->price),
    ]);

    $validated = $request->validate([
        'title' => 'required|string',
        'address' => 'nullable|string',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'status' => 'required|in:Available,Sold,Rented',
        'type' => 'required|in:Apartment,Duplex,Land,Villa,Home,Office,Building,Townhouse,Shop,Garage',
        'area' => 'required|string',
        'beds' => 'required|integer',
        'baths' => 'required|integer',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    Log::info('Validation passed');

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = 'property_' . time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('uploads/img', $imageName, 'public');
        $validated['image'] = $path;
    }

    // Create property
    $property = Property::create([
        'title' => $validated['title'],
        'address' => $validated['address'],
        'description' => $validated['description'],
        'price' => $validated['price'],
        'status' => $validated['status'],
        'type' => $validated['type'],
        'area' => $validated['area'],
        'beds' => $validated['beds'],
        'baths' => $validated['baths'],
        'image' => $validated['image'] ?? null,
    ]);

    Log::info('Property created: ' . $property->id);

    return redirect()->route('admin.admin-form')->with('success', 'Property added successfully.');
}

}
