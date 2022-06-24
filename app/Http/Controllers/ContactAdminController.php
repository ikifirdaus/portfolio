<?php

namespace App\Http\Controllers;

use App\Models\ContactAdmin;
// use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Notifications\UserContactForm;
use DB;

class ContactAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $contactAdmin = DB::table('contact')->get();
        return view('pages.admin.contact.index', compact('contactAdmin'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactAdmin = $request->all();
        $contactAdmin['gambar'] = uploadImage($request->file('gambar'), 'contact', 40, 40);
        ContactAdmin::create($contactAdmin);
        return redirect()->route('contactAdmin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactAdmin  $contactAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(ContactAdmin $contactAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactAdmin  $contactAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ContactAdmin::find($id);
        return view('pages.admin.contact.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactAdmin  $contactAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contactAdmin = $request->all();
        if ($request->hasFile('gambar')) {
            $contactAdmin['gambar'] = uploadImage($request->file('gambar'), 'contact', 40, 40 );
        } else {
            $contactAdmin = $request->except(['gambar']);
        }
        ContactAdmin::find($id)->update($contactAdmin);
        return redirect()->route('contactAdmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactAdmin  $contactAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactAdmin = ContactAdmin::find($id);
        try {
            unlink('uploads/contact/'.$contactAdmin->gambar);
        } catch (\Throwable $th) {
            // throw $th;
        }
        $contactAdmin->delete();
        return redirect()->route('contactAdmin.index');
    }
}
