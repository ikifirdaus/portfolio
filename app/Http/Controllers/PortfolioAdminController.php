<?php

namespace App\Http\Controllers;

use App\Models\PortfolioAdmin;
use Illuminate\Http\Request;
use DB;

class PortfolioAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = DB::table('portfolio')->get();
        return view('pages.admin.portfolio.index', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portfolio = $request->all();
        $portfolio['gambar'] = uploadImage($request->file('gambar'), 'portfolio', 448, 226);
        PortfolioAdmin::create($portfolio);
        return redirect()->route('portfolioAdmin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioAdmin  $portfolioAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioAdmin $portfolioAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioAdmin  $portfolioAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PortfolioAdmin::find($id);
        return view('pages.admin.portfolio.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioAdmin  $portfolioAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $portfolio = $request->all();
        if ($request->hasFile('gambar')) {
            $portfolio['gambar'] = uploadImage($request->file('gambar'), 'portfolio', 448, 226);
        } else {
            $portfolio = $request->except(['gambar']);
        }
        PortfolioAdmin::find($id)->update($portfolio);
        return redirect()->route('portfolioAdmin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioAdmin  $portfolioAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = PortfolioAdmin::find($id);
        try {
            unlink('uploads/portfolio/'.$portfolio->gambar);
        } catch (\Throwable $th) {
            // throw $th;
        }
        $portfolio->delete();
        return redirect()->route('portfolioAdmin.index');
    }
}
