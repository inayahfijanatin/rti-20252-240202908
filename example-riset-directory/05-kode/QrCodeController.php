<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
    public function index()
    {
        $guru = Guru::orderBy('nama_guru')->get();

        return view('qrcode.index', compact('guru'));
    }

    public function generate($id)
    {
        $guru = Guru::findOrFail($id);

        // Membuat folder qrcode jika belum ada
        if (!Storage::disk('public')->exists('qrcode')) {
            Storage::disk('public')->makeDirectory('qrcode');
        }

        // Nama file
        $fileName = 'guru_' . $guru->id . '.svg';

        // Isi QR Code (sementara menggunakan ID Guru)
        $qrCode = QrCode::format('svg')
            ->size(300)
            ->generate('guru:' . $guru->id);

        // Simpan file
        Storage::disk('public')->put('qrcode/' . $fileName, $qrCode);

        // Simpan nama file ke database
        $guru->update([
            'qr_code' => $fileName
        ]);

        return back()->with('success', 'QR Code berhasil dibuat.');
    }
}