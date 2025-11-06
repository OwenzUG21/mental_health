<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Notifications\ContactUs;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;


class ContactController extends Controller
{

        public function cont(Request $request){
            $incoming= $request->validate([
                'name'=>'required',
                'email'=>'required',
                'message'=>'required',

            ]);

            Notification::route('Mail','nsubugaemma164@gmail.com')->notify(new ContactUs($incoming['name'],$incoming['email'],$incoming['message']));

            try{
            Mail::send([],[],function($message)use($incoming)  {
                $message->to('nsubugaemma164@gmail.com')->subject('New Message Form Submission')->text(

                    "You have a new Contact Form Submission:\n\n"."Name:  {$incoming['name']}\n"."Email:  {$incoming['email']}\n\n"."Message:******  {$incoming['message']}\n*******"
                );
                
            });
            Contact::create($incoming);
            return redirect('/Contact')->with('success','you');

        }catch(\Exception $e){
            Log::error('Email failed: ' .$e->getMessage());
            Contact::create($incoming);
            return redirect('/Contact')->with('success','you');

        }

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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
