<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['pesans'] = Pesan::all();
       return view('admin.pesan.index')->with($data);
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
        $add = new Pesan;
        $add->name = $r->input('nama');
        $add->phone = $r->input('notelp');
        $add->email = $r->input('email');
        $add->pesan = $r->input('pesan');
        $add = Save();
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
        $update = Pesan::find($id);
        $update->name = $r->input('nama');
        $update->phone = $r->input('notelp');
        $update->email = $r->input('email');
        $update->pesan = $r->input('pesan');
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
        $table = Pesan::find($id);        
        $table->delete();//delete table
        return back();
    }
}
