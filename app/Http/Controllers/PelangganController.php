<?php
namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string',
        ]);

        $no_hp = $this->formatNoHp($request->no_hp);

        Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $no_hp,
        ]);

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil ditambahkan!');
    }

    public function show(Pelanggan $pelanggan)
    {
        return view('pelanggan.show', compact('pelanggan'));
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string|max:255',
            'no_hp' => 'nullable|string',
        ]);

        $no_hp = $this->formatNoHp($request->no_hp);

        $pelanggan->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $no_hp,
        ]);

        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil diupdate!');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pelanggan.index')->with('success', 'Pelanggan berhasil dihapus!');
    }

    // Fungsi format nomor HP menjadi +62
    private function formatNoHp($no_hp)
    {
        if (!$no_hp) return null;

        // Hapus semua spasi atau karakter non-digit kecuali +
        $no_hp = preg_replace('/[^\d+]/', '', $no_hp);

        // Jika nomor diawali 0, ganti menjadi +62
        if (substr($no_hp, 0, 1) === '0') {
            $no_hp = '+62' . substr($no_hp, 1);
        }

        // Jika nomor diawali +62, biarkan
        if (substr($no_hp, 0, 3) === '+62') {
            return $no_hp;
        }

        // Default: tambahkan +62 jika tidak ada awalan
        return '+62' . $no_hp;
    }
}
