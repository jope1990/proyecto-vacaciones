<?php

namespace App\Http\Controllers;

use App\Assign;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class AssignController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

	public function create()
	    {
	        return view('assign.create');
	    }
        public function store(Request $request)
    {
       $this->validate($request, [
            
            'days_assigned' => 'required',
        ]);

        
        $days_assigned = $request['days_assigned'];


        $assign = new Assign();
        $assign->days_assigned = $request['days_assigned'];
        $assign->save();

        return redirect('/home');
        
        //return "Estoy en el store"; 
    }
}
