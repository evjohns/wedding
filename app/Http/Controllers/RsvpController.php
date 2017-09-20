<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Starter;

use App\ChildrensMain;

use App\ChildrensSide;

use App\Main;

use App\Guest;

class RsvpController extends Controller
{
	public function index()
	{
    	return view('rsvp',
    		['starters' => Starter::all(),
    		'childrens_mains' => ChildrensMain::all(),
				'childrens_sides' => ChildrensSide::all(),
    		'mains' => Main::all() ]);
    }

    public function actionSubmit(Request $request)
    {
    	$guest = new Guest;
    	$guest->type = $request->input('type');
    	$guest->name = $request->input('name');

    	if ($request->input('starter')) {
    		$guest->starter = $request->input('starter');
    	}

			print_r($request->input('side'));

			if ($request->input('side')) {
    		$guest->side = $request->input('side');
    	}

    	$guest->main = $request->input('main');
    	$guest->requirements = $request->input('requirements');
      $guest->attending = '1';
    	$guest->save();
    }

    public function actionSubmitNotAttending(Request $request)
    {
        $guest = new Guest;
        $guest->type = $request->input('type');
        $guest->name = $request->input('name');
        $guest->attending = '0';
        $guest->save();
    }

}
