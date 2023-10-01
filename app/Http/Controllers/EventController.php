<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\Categories;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evant = Event::all();
        return view('component.evant.index',compact('evant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Categories::all();
        return view('component.evant.create', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evant = new Event();
        $evant->name =  $request->name ;
        $evant-> description = $request-> description;
        $evant->date =  $request->date;
        $evant->price =  $request->price;
        $evant->ticket =  $request->ticket;
        $evant->save();
        return redirect()->route('evant.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        // $evant = Event::find($id);
        // return view('component.evant.edit', compact('evant'));

        {
             $evant = Event::find($id);
            $categories = Categories::all();
       
            return view("component.evant.edit",compact('evant','categories'));
           }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request,$id)
    {
          // dd($request);
          $evant = Event::find($id);
          $evant->name = $request->input('name');
          $evant->description = $request->input('description');
          $evant->date = $request->input('date');
          $evant->price = $request->input('price');
          $evant->ticket = $request->input('ticket');
          $evant->update();
          return redirect()->route('evant.index')->with(' Updated Successfully');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $evant = Event::find($id)->delete();
        return redirect()->route('evant.index')->with(' Deleted Successfully');
 
    }

    public function reserve()
    {
        // return view('component.front end.ticket');
 
        $events = Event::all();
        $reserves = Reservation::all();

        return view('component.front end.ticket', compact('reserves', 'events'));
    }
}
