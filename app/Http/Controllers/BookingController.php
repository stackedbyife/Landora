<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
        ]);

        $booking = new \App\Models\Booking();
        $booking->user_id = auth()->id();
        $booking->property_id = $request->property_id;
        $booking->status = 'pending';
        $booking->save();

        return view('bookings.store', [
            'booking' => $booking,
            'property' => $booking->property // assuming relation exists
        ]);
    }
}
