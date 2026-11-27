<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Armada;

class ArmadaController extends Controller
{
    // READ & SEARCH (Method index yang dicari Laravel)
    public function index(Request $request)
    {
        $search = $request->search;
        $armadas = Armada::where('nomor_seri', 'like', "%$search%")
                         ->orWhere('merk', 'like', "%$search%")
                         ->get();

        return view('armada.index', compact('armada', 'search'));
    }

    // CREATE
    public function store(Request $request)
    {
        Armada::create($request->all());
        return redirect()->route('armada.index')->with('success', 'Data armada berhasil ditambah!');
    }

    // DELETE
    public function destroy($id)
    {
        Armada::where('nomor_seri', $id)->delete();
        return redirect()->route('armada.index')->with('success', 'Data armada berhasil dihapus!');
    }
}