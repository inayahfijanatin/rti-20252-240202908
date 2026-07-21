<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Absensi;

class DashboardController extends Controller
{
    public function index()
    {
        // Total Guru
        $totalGuru = Guru::count();

        // Total Guru Hadir Hari Ini
        $hadir = Absensi::whereDate('tanggal', today())
                    ->where('status', 'Hadir')
                    ->count();

        // Total Guru Izin Hari Ini
        $izin = Absensi::whereDate('tanggal', today())
                    ->where('status', 'Izin')
                    ->count();

        // Total Guru Alpha Hari Ini
        $alpha = $totalGuru - ($hadir + $izin);

        if ($alpha < 0) {
            $alpha = 0;
        }

        // Total seluruh data absensi
        $totalAbsensi = Absensi::count();

        // Data absensi hari ini
        $absensiHariIni = Absensi::with('guru')
                            ->whereDate('tanggal', today())
                            ->latest()
                            ->get();

        return view('dashboard', compact(
            'totalGuru',
            'hadir',
            'izin',
            'alpha',
            'totalAbsensi',
            'absensiHariIni'
        ));
    }
}