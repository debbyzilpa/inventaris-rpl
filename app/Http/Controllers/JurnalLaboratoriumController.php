<?php

namespace App\Http\Controllers;

use App\Models\JurnalLaboratorium;
use Illuminate\Http\Request;

class JurnalLaboratoriumController extends Controller
{
    public function index()
    {
        $jurnalLaboratorium = JurnalLaboratorium::all();
        return view('jurnal_laboratorium.index', compact('jurnalLaboratorium'));
    }

    public function create()
    {
        return view('jurnal_laboratorium.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hari' => 'required|string|max:15',
            'tgl' => 'required|date',
            'mapel' => 'required|string|max:100',
            'kelas' => 'required|string|max:50',
            'guru' => 'required|string|max:100',
        ]);

        JurnalLaboratorium::create($request->all());
        return redirect()->route('jurnal_laboratorium.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jurnalLaboratorium = JurnalLaboratorium::find($id);
        return view('jurnal_laboratorium.edit', compact('jurnalLaboratorium'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hari' => 'required|string|max:15',
            'tgl' => 'required|date',
            'mapel' => 'required|string|max:100',
            'kelas' => 'required|string|max:50',
            'guru' => 'required|string|max:100',
        ]);

        $jurnalLaboratorium = JurnalLaboratorium::find($id);
        $jurnalLaboratorium->update($request->all());
        return redirect()->route('jurnal_laboratorium.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        JurnalLaboratorium::destroy($id);
        return redirect()->route('jurnal_laboratorium.index')->with('success', 'Data berhasil dihapus.');
    }
}
