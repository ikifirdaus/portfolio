<?php

namespace App\Http\Controllers;

use App\Models\HomeDashboard;
use Illuminate\Http\Request;
use DB;

class HomeDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeDashboard = DB::table('home')->get();
        return view('pages.admin.home.index', compact('homeDashboard'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $homeDashboard = $request->all();
        $homeDashboard['gambar_home'] = uploadImage($request->file('gambar_home'), 'home', 550, 723);
        HomeDashboard::create($homeDashboard);
        return redirect()->route('home-dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeDashboard  $homeDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(HomeDashboard $homeDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeDashboard  $homeDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = HomeDashboard::find($id);
        return view('pages.admin.home.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeDashboard  $homeDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $homeDashboard = $request->all();
        if ($request->hasFile('gambar_home')) {
            $homeDashboard['gambar_home'] = uploadImage($request->file('gambar_home'), 'home', 550, 723);
        } else {
            $homeDashboard = $request->except(['gambar_home']);
        }
        HomeDashboard::find($id)->update($homeDashboard);
        return redirect()->route('home-dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeDashboard  $homeDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeDashboard = HomeDashboard::find($id);
        try {
            unlink('uploads/home/'.$homeDashboard->gambar_home);
        } catch (\Throwable $th) {
            // throw $th;
        }
        $homeDashboard->delete();
        return redirect()->route('home-dashboard.index');
    }
}
