<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BiodataController extends Controller
{
    public function index()
    {
        $biodatas = Biodata::all();
        return view('biodata.index', compact('biodatas'));
    }

    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|max:2048',
            'tinggi_badan' => 'nullable|numeric',
            'berat_badan' => 'nullable|numeric',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('foto', 'public');
            $validated['foto'] = $path;
        }

        Biodata::create($validated);

        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil ditambahkan');
    }

    public function show(Biodata $biodata)
    {
        return view('biodata.show', compact('biodata'));
    }

    public function edit(Biodata $biodata)
    {
        return view('biodata.edit', compact('biodata'));
    }

    public function update(Request $request, Biodata $biodata)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|max:2048',
            'tinggi_badan' => 'nullable|numeric',
            'berat_badan' => 'nullable|numeric',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($biodata->foto) {
                Storage::disk('public')->delete($biodata->foto);
            }
            $path = $request->file('foto')->store('foto', 'public');
            $validated['foto'] = $path;
        }

        $biodata->update($validated);

        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil diupdate');
    }

    public function destroy(Biodata $biodata)
    {
        if ($biodata->foto) {
            Storage::disk('public')->delete($biodata->foto);
        }
        $biodata->delete();

        return redirect()->route('biodata.index')->with('success', 'Biodata berhasil dihapus');
    }
}

