<?php

namespace App\Http\Controllers;

use App\Models\Baby;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BabyController extends Controller
{
    public function index(): View
    {
        $babies = Baby::latest()->paginate(10);
        return view('babies.index', compact('babies'));
    }

    public function create(): View
    {
        return view('babies.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama'          => 'required',
            'nama_ibu'      => 'required',
            'nama_ayah'     => 'required',
            'tanggal_lahir' => 'required'
        ]);

        Baby::create([
            'nama'      => $request->nama,
            'nama_ibu'  => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        return redirect()->route('babies.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

}
