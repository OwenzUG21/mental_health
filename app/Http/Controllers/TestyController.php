<?php

namespace App\Http\Controllers;

use App\Models\Testy;
use Illuminate\Http\Request;

class TestyController extends Controller
{
      public function tes(Request $request){
            $incomingd= $request->validate([
                'name'=>'required',
                'email'=>'required',
                'test'=>'required',

            ]);
            $incomingd['name']=strip_tags(  $incomingd['name']);
            $incomingd['email']=strip_tags(  $incomingd['email']);
            $incomingd['test']=strip_tags(  $incomingd['test']);
            Testy::create($incomingd);
            return redirect('/Story');

        }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testy $testy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testy $testy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testy $testy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testy $testy)
    {
        //
    }
}
