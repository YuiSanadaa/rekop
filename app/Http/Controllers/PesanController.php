<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;

class PesanController extends Controller
{



    public function index()
    {
     $data['pesans'] = Pesan::all();
     return view('admin.pesan.index')->with($data);
 }

 public function store(Request $r)
 {
    $add = new Pesan;
    $add->name = $r->input('nama');
    $add->phone = $r->input('notelp');
    $add->email = $r->input('email');
    $add->pesan = $r->input('pesan');
    $add->Save();
    return back();
}

public function update(Request $r, $id)
{
    $update = Pesan::find($id);
    $update->name = $r->input('nama');
    $update->phone = $r->input('notelp');
    $update->email = $r->input('email');
    $update->pesan = $r->input('pesan');
    $update->Save();
    return back();
}

public function destroy($id)
{
    $table = Pesan::find($id);        
        $table->delete();//delete table
        return back();
    }
}
