<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\Categories;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $reserves = Reservation::all();

        return view('component.reserve.index', compact('reserves', 'events'));
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
        $categories = Categories::all();

        $reserves = new Reservation();
        $reserves->name =  $request->name;
        $reserves->phone = $request->phone;
        $reserves->email =  $request->email;
        $reserves->number_ticket =  $request->number_ticket;
        $reserves->event_id =  $request->event_id;
        $reserves->save();
        return view('component.front end.homepage', compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

      $reserves = Reservation::findorfail($id);
       $reserves->approve = $request->approve;
       $reserves->save();
       return redirect()->route('reserve.index');
          
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
