<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Property::create([
            'title' => 'Golden Urban House For Sell',
            'type' => 'Apartment',
            'status' => 'available',
            'price' => '12345',
            'address' => '123 Street, New York, USA',
            'area' => 1000,
            'beds' => 3,
            'baths' => 2,
            'image' => 'uploads/img/property-1.jpg',
    ]);

        Property::create([
        'title' => 'Modern Glass Villa',
        'type' => 'Villa',
        'status' => 'sold',
        'price' => '45000',
        'address' => '456 Sunset Blvd, Los Angeles, USA',
        'area' => 2500,
        'beds' => 5,
        'baths' => 4,
        'image' => 'uploads/img/property-2.jpg',
    ]);

    Property::create([
        'title' => 'Downtown Smart Condo',
        'type' => 'Townhouse',
        'status' => 'available',
        'price' => '30200',
        'address' => '789 Broadway Ave, Chicago, USA',
        'area' => 1200,
        'beds' => 2,
        'baths' => 2,
        'image' => 'uploads/img/property-3.jpg',
    ]);

    Property::create([
        'title' => 'Cozy Suburban Bungalow',
        'type' => 'Home',
        'status' => 'available',
        'price' => '25000',
        'address' => '14 Maple Street, Houston, USA',
        'area' => 1500,
        'beds' => 4,
        'baths' => 3,
        'image' => 'uploads/img/property-4.jpg',
    ]);

    Property::create([
        'title' => 'Beachfront Dream Home',
        'type' => 'Villa',
        'status' => 'rented',
        'price' => '75000',
        'address' => 'Ocean Drive, Miami, USA',
        'area' => 3000,
        'beds' => 6,
        'baths' => 5,
        'image' => 'uploads/img/property-5.jpg',
    ]);

    Property::create([
        'title' => 'Minimalist City Studio',
        'type' => 'Building',
        'status' => 'available',
        'price' => '18000',
        'address' => '77 Tech Lane, San Francisco, USA',
        'area' => 650,
        'beds' => 1,
        'baths' => 1,
        'image' => 'uploads/img/property-6.jpg',
    ]);

    }

}
