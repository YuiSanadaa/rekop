<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['artikels'] = Artikel::all();
        return view('admin.artikel.index')->with($data);
    }

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
    public function store(Request $r)
    {
        $add = new Artikel();
        $add->judul = $r->input('judul');
        $add->isi = $r->input('isi');        
        if ($r->hasFile('image')) {
            $image = $r->file('image');
            // $imagedata = file_get_contents($image);
            // $base64 = base64_encode($imagedata);
            // $table->image = $base64;
            $name = str_random().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/artikel');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $add->image = $name;
        }        
        $add->Save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $update = Artikel::find($id);
        $update = new Artikel();
        $update->judul = $r->input('judul');
        $update->isi = $r->input('isi');        
        if ($r->hasFile('image')) {
            $image = $r->file('image');
            // $imagedata = file_get_contents($image);
            // $base64 = base64_encode($imagedata);
            // $table->image = $base64;
            $name = str_random().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/artikel');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $update->image = $name;
        }        
        $update->Save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Artikel::find($id);        
        $table->delete();//delete table
        return back();
    }
    public function artikeluser()
    {
        $data['artikel'] = Artikel::All();
        return view('artikel')->with($data);
    }
}
