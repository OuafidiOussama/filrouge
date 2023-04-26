<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Admin;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function bookEvent($id){
        $data = [
            'title' => 'Booking',
            'LoggedUser' => User::where('id', '=', session('LoggedUser'))->first(),
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'event' => Event::find($id),
            'nbr' => Cart::count(),
        ];
        
        return view('pages.book', $data);
    }
    public function events(){
        $data = [
            'title' => 'Events',
            'events' => Event::all(),
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
        ];
        return view('admin.events', $data);
    }

    public function addEvent(){
        $data = [
            'title' => 'Events',
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
        ];
        return view('admin.add.addevent', $data);
    }
    
    public function saveEvent(Request $req){
        // return $req->file('product_img')->getClientOriginalName();
        $req->validate([
            'event_img' => 'required',
            'event_name' => 'required',
            'event_date' => 'required',
            'location' => 'required',
        ]);

        $event = new Event;

        $img_destination = "images/events";
        $image = $req->file('event_img')->getClientOriginalName();
        $req->event_img->move(public_path($img_destination), $image);

        $event->event_img = $image;
        $event->event_name = $req->event_name;
        $event->event_date = $req->event_date;
        $event->location = $req->location;
        $event->event_desc = $req->event_desc;
        $save = $event->save();

        if($save){
            return redirect('admin/events')->with('success', 'Event Added !!');
        }else{
            return back()->with('fail', 'Something went Wrong, Please try again later');
        }

    }

    public function editEvent($id){
        $data = [
            'title' => 'Events',
            'LoggedAdm' => Admin::where('id', '=', session('LoggedAdm'))->first(),
            'event' => Event::find($id),
        ];
        return view('admin.edit.editevent', $data);
    }

    public function updateEvent(Request $req, Event $event){
        // return $req->input();
        $mods = $req->validate([
            'event_img' => 'required',
            'event_name' => 'required',
            'event_date' => 'required',
            'location' => 'required',
        ]);
        $img_destination = "images/events";
        if($req->has('event_img')){
            $image = $mods['event_img'] = $req->file('event_img')->getClientOriginalName();
            $req->event_img->move(public_path($img_destination), $image);
        }

        $event->update($mods);

        return redirect('admin/events')->with('success', 'Event Updated !!');
    }

    public function deleteEvent($id){
        $event= Event::find($id);
        $res = $event->delete();
        if($res){
            return redirect('admin/events')->with('success', 'Event deleted Successfully');
        }else{
            return back()->with('fail', 'Something Went Wrong');
        }
    }
}
