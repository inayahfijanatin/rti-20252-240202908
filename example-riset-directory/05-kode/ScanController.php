<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Absensi;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function index()
    {
        return view('scan.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'qr_code' => 'required'
        ]);

        // QR Code berisi: guru:2
        $qr = explode(':', $request->qr_code);

        if (count($qr) != 2 || $qr[0] != 'guru') {
            return response()->json([
                'success' => false,
                'message' => 'QR Code tidak valid.'
            ]);
        }

        $guru = Guru::find($qr[1]);

        if (!$guru) {
            return response()->json([
                'success' => false,
                'message' => 'Guru tidak ditemukan.'
            ]);
        }

        // Cek absensi hari ini
        $absensi = Absensi::where('guru_id', $guru->id)
            ->whereDate('tanggal', now()->toDateString())
            ->first();

        // ===========================
        // ABSEN MASUK
        // ===========================
        if (!$absensi) {

            Absensi::create([
                'guru_id'    => $guru->id,
                'tanggal'    => now()->toDateString(),
                'jam_masuk'  => now()->format('H:i:s'),
                'jam_pulang' => null,
                'status'     => 'Hadir',
                'keterangan' => 'Scan QR Code',
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Absensi masuk berhasil.',
                'guru'    => $guru->nama_guru
            ]);
        }

        // ===========================
        // ABSEN PULANG
        // ===========================
        if (is_null($absensi->jam_pulang)) {

            $absensi->update([
                'jam_pulang' => now()->format('H:i:s')
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Absensi pulang berhasil.',
                'guru'    => $guru->nama_guru
            ]);
        }

        // ===========================
        // SUDAH ABSEN
        // ===========================
        return response()->json([
            'success' => false,
            'message' => $guru->nama_guru . ' sudah melakukan absensi masuk dan pulang hari ini.'
        ]);
    }
}