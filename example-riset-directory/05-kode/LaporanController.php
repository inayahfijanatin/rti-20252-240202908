<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Guru;
use Illuminate\Http\Request;

// Tambahkan ini
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $query = Absensi::with('guru');

        if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
            $query->whereBetween('tanggal', [
                $request->tanggal_awal,
                $request->tanggal_akhir
            ]);
        }

        if ($request->filled('guru_id')) {
            $query->where('guru_id', $request->guru_id);
        }

        $laporan = $query
            ->orderBy('tanggal', 'desc')
            ->orderBy('jam_masuk', 'desc')
            ->get();

        $guru = Guru::orderBy('nama_guru')->get();

        return view('laporan.index', compact('laporan', 'guru'));
    }

    // ===========================
    // Cetak PDF
    // ===========================
    public function pdf()
    {
        $laporan = Absensi::with('guru')
            ->orderBy('tanggal', 'desc')
            ->get();

        $pdf = Pdf::loadView('laporan.pdf', compact('laporan'));

        return $pdf->download('Laporan_Absensi.pdf');
    }

    // ===========================
    // Export Excel
    // ===========================
    public function excel()
    {
        return Excel::download(new LaporanExport, 'Laporan_Absensi.xlsx');
    }
}