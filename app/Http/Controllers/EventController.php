<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Cart;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all();

        return response()->json([
            'event' => $event
        ], 200);
    }


    public function show($id)
    {
        $event = Event::find($id);

        if(!$event){
            return response()->json([
                'massage' => 'Event not found'
            ], 404);
        }
        return response()->json([
            'event' => $event
        ], 200);
    }

    public function orderTicket(Request $request, $id){

        $event = Event::find($id);

        if(!$event){
            return response()->json([
                'massage' => 'Event not found'
            ], 404);
        }

        $user = auth()->user();


        $cart = Cart::create([
            'amount' => $request->amount,
            'user_id' => $user->id,
            'event_id' => $event->id
        ]);

        return response()->json(['message' => 'Ticket ordered'], 201);
    }


    public function destroy($id)
    {

    }
}