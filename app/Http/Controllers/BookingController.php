<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();

        // return view('show')->with('citzien',$citzien);
        return view('dashboard_view.index_booking', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create_booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'booking_name' => 'required',
            'booking_email' => 'required',
            'booking_mobile' => 'required',
            'booking_passenger' => 'required',

        ]);

        Booking::create($request->all());

        //return redirect()->route('visitors.index')
        return redirect('jurny/booking');
        // ->with('success', 'Post created successfully.');
    }
    public function storee(Request $request)
    {
        $request->validate([

            'booking_name' => 'required',
            'booking_email' => 'required',
            'booking_mobile' => 'required',
            'booking_passenger' => 'required',

        ]);

        Booking::create($request->all());

        //return redirect()->route('visitors.index')
        return redirect('/dashboard/bookings');
        // ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('dashboard_view.edit_booking', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([

            'booking_name' =>

            'required',
            'booking_email' => 'required',
            'booking_mobile'    => 'required',
            'booking_passenger'    => 'required'
        ]);
        $booking->update($request->all());

        return redirect('/dashboard/bookings');
        // ->route('dashboard_view.index_visitor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect('/dashboard/bookings');
        // ->route('visitors.dashboard_view.index_visitor');
    }
    public function hello(){
        $booking=Booking::with( 'getpartnars')->get();
        dd( $booking);
    }
}
