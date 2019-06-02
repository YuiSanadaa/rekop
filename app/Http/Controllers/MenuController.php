<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['Menus'] = Menu::all();
       return view('admin.menu.index')->with($data);
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
    public function store(Request $request)
    {
        $add = new Menu();
        $add->nama = $r->input('nama');
        $add->beans = $r->input('beans');
        $add->price = $r->input('price');
        if ($r->hasFile('image')) {
            $image = $r->file('image');
            // $imagedata = file_get_contents($image);
            // $base64 = base64_encode($imagedata);
            // $table->image = $base64;
            $name = str_random().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/menu');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $add->image = $name;
        }
        $add = Save();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $update = Menu::find($id);
     $update->nama = $r->input('nama');
     $update->beans = $r->input('beans');
     $update->price = $r->input('price');
     if ($r->hasFile('image')) {
        $image = $r->file('image');
            // $imagedata = file_get_contents($image);
            // $base64 = base64_encode($imagedata);
            // $table->image = $base64;
        $name = str_random().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/menu');
        $imagePath = $destinationPath. "/".  $name;
        $image->move($destinationPath, $name);
        $table->image = $name;
    }
    $update = Save();
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
        $table = Menu::find($id);        
        $table->delete();//delete table
        return back();
    }
}
