<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class M4Controller extends Controller
{
    public function m4_identitas()
    {
        $nama = 'I Kadek Hendrawan';
        $alamat = 'Jl. Gunung Batukaru';
        return view('m4.identitas', compact('nama', 'alamat'));
    }
    public function m4_pendidikan()
    {
        return view('m4.pendidikan');
    }

    public function m4_skill()
    {
        $nama = 'I Kadek Hendrawan';
        $skill = ['HTML', 'CSS', 'PHP' ];
        return view('m4.skill', compact('nama', 'skill'));
    }
}
