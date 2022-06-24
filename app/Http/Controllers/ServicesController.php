<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use DB;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = DB::table('services')->get();
        return view('pages.admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services = $request->all();
        $services['gambar_icon'] = uploadImage($request->file('gambar_icon'), 'services', 60, 60);
        Services::create($services);
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Services::find($id);
        return view('pages.admin.services.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services = $request->all();
        if ($request->hasFile('gambar_icon')) {
            $services['gambar_icon'] = uploadImage($request->file('gambar_icon'), 'services', 1920, 903);
        } else {
            $services = $request->except(['gambar_icon']);
        }
        Services::find($id)->update($services);
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::find($id);
        try {
            unlink('uploads/services/'.$services->gambar_icon);
        } catch (\Throwable $th) {
            // throw $th;
        }
        $services->delete();
        return redirect()->route('services.index');
    }
}
