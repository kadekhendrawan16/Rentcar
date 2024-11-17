<?php

namespace App\Http\Controllers;

use App\Models\Rentcar;
use App\Models\Sewa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Data Penyewaan';
        $q = $request->query('q');
        $sewas = Sewa::where('nama_mobil', 'like', '%' . $q . '%')
            ->leftJoin('tb_mobil', 'tb_mobil.id_mobil', 'tb_sewa.id_mobil')
            ->paginate(10)
            ->withQueryString();
        $no = $sewas->firstItem();
        return view('sewa.index', compact('title', 'sewas', 'q', 'no'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Penyewaan';
        $users = User::orderBy('id_user')->get();
        $rentcars = Rentcar::orderBy('id_mobil')->get();
        return view('sewa.create', compact('title', 'rentcars', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_mobil' => 'required',
            'plat_mobil' => 'required',
            'harga_sewa' => 'required',
            'tanggal_sewa' => 'required',
            'tanggal_kembali' => 'required',
            'lama_sewa' => 'required',
            'total' => 'required',
            'nama_user' => 'required',
            'status_sewa' => 'required',
            'telp' => 'required',
            'email' => 'required',
        ]);

        $sewa = new Sewa($request->all());
        $sewa->id_user = Auth::id();
        $sewa->save();

        return redirect()->route('sewa.index')->with('message', 'Data sewa berhasil disimpan.');
    }
    /**
     * Display the specified resource.
     */
    public function show(Sewa $sewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sewa $sewa)
    {
        $title = 'Ubah Penyewaan';
        return view('sewa.edit', compact('title', 'sewa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sewa $sewa)
    {
        $sewa->update($request->all());
        return redirect()->route('sewa.index')->with(['message' => 'Status berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sewa $sewa)
    {
        $sewa->delete();
        return redirect()->route('sewa.index')->with(['message' => 'Data berhasil dihapus!']);
    }
}