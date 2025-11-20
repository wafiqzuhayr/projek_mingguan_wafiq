<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();


        return view('mahasiswa', compact('data'), [
            "title" => "Data Mahasiswa",
            ///"datas" => '$data',
        ]);

    }

    public function tambahmahasiswa()
    {
        return view('tambahmahasiswa',
        [
            "title" => "Tambah Data Mahasiswa",
        ]);
    }

    public function insertdata(Request $request)
    {
        /// insert data to database
       Mahasiswa::create($request ->all());

       return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Ditambahkan!');

    }

     public function tampildata($id)
     {
        $data = Mahasiswa::find($id);

        return view("edit", [
            "title" =>"Edit Data Mahasiswa",
            "data" => $data,
        ]);
     }

     public function editdata(Request $request, $id)
     {
        $data = Mahasiswa::find($id);

        $data->update($request->all());

        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Diedit!');
     }


}
