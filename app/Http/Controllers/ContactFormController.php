<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Notifications\UserContactForm;
use DB;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $notification = auth()->user();

        $contactForm = DB::table('contact_form')->get();
        return view('pages.admin.contact-form.index', compact('contactForm'));
    }


    // public function notify()
    // {
    //     if (auth()->user())
    //     {
    //         $user = ContactForm::first();

    //         auth()->user()->notify(new UserContactForm($user));
    //     }
    //     dd('done');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

            'name' => 'required', 

            'email' => 'required|email', 

            'phone' => 'required|digits:12|numeric', 

            'subject' => 'required', 

            'message' => 'required', 

        ]);

        $contactForm = $request->all(); 

        ContactForm::create($contactForm); 

        //  Send mail to admin 
        // \Mail::send('pages.admin.contact-form.index', array( 

        //     'name' => $input['name'], 

        //     'email' => $input['email'], 

        //     'phone' => $input['phone'], 

        //     'subject' => $input['subject'], 

        //     'message' => $input['message'], 

        // ), function($message) use ($request){ 

        //     $message->from($request->email); 

        //     $message->to('ikifirdaus@gmail', 'Admin')->subject($request->get('subject')); 

        // }); 

        notify()->success('Laravel Notify is awesome!');

        return redirect('/contact')->with(['success' => 'Contact Form Submit Successfully']); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactForm = ContactForm::find($id);
        $contactForm->delete();
        return redirect()->route('contactForm.index');
    }
}
