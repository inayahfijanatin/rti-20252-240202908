<?php

namespace App\Http\Controllers;

use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::with('guru')
            ->orderBy('tanggal', 'desc')
            ->orderBy('jam_masuk', 'desc')
            ->get();

        return view('absensi.index', compact('absensis'));
    }
}