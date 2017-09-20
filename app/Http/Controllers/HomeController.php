<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Guest;
use App\Starter;
use App\Main;
use App\ChildrensMain;
use App\ChildrensSide;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attending = Guest::where('attending', 1)->get();
        $notAttending = Guest::where('attending', 0)->get();

        $attendingGuests = [];

        foreach ($attending as $guest) {
            $attendingGuests[$guest->id]['type'] = $guest->type;
            $attendingGuests[$guest->id]['name'] = $guest->name;
            $attendingGuests[$guest->id]['starter'] = Starter::where('id', $guest->starter)->get();

            if ($guest->type == 'adult') {
                $attendingGuests[$guest->id]['main'] = Main::where('id', $guest->main)->get();
            } else {
                $attendingGuests[$guest->id]['main'] = ChildrensMain::where('id', $guest->main)->get();
            }

            $attendingGuests[$guest->id]['side'] = ChildrensSide::where('id', $guest->side)->get();
            $attendingGuests[$guest->id]['requirements'] = $guest->requirements;
            $attendingGuests[$guest->id]['date'] = $guest->created_at;
        }

        return view('home',
            ['attending' => $attendingGuests, 'notAttending' =>  $notAttending]);
    }
}
