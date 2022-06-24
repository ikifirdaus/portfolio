<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = DB::table('profile')->get();
        return view('pages.admin.profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = $request->all();
        $profile['gambar_profile'] = uploadImage($request->file('gambar_profile'), 'profile', 200, 200);
        Profile::create($profile);
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Profile::find($id);
        return view('pages.admin.profile.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = $request->all();
        if ($request->hasFile('gambar_profile')) {
            $profile['gambar_profile'] = uploadImage($request->file('gambar_profile'), 'profile', 200, 200);
        } else {
            $profile = $request->except(['gambar_profile']);
        }
        Profile::find($id)->update($profile);
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = Profile::find($id);
        try {
            unlink('uploads/profile/'.$profile->gambar_profile);
        } catch (\Throwable $th) {
            // throw $th;
        }
        $profile->delete();
        return redirect()->route('profile.index');
    }
}
