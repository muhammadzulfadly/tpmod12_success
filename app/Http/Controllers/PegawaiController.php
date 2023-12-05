<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view("pegawai", ['pegawaiList' => $pegawai]);
    }

    public function create(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'posisi' => 'required',
            'gaji' => 'required'
        ]);

        Pegawai::create([
            'name' => $request->input('name'),
            'posisi' => $request->input('posisi'),
            'gaji' => $request->input('gaji'),
        ]);

        return redirect("/");
    }
}
