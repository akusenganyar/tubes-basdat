<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesanan\data_penumpang;
use App\Models\pemesanan\pembayaran;
use App\Models\pemesanan\pemesanan;
use App\Models\pemesanan\penerbangan;
use App\Models\pemesanan\perhotelan;
use App\Models\pemesanan\tiket;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $data_penumpang = data_penumpang::count();
        $pembayaran = pembayaran::count();
        $pemesanan = pemesanan::count();
        $penerbangan = penerbangan::count();
        $perhotelan = perhotelan::count();
        $tiket = tiket::count();

        return view('auth.dashboard.index', compact([
            'user',
            'data_penumpang',
            'pembayaran',
            'pemesanan',
            'penerbangan',
            'perhotelan',
            'tiket',
        ]));
    }

    public function akun()
    {
        $users = User::get();
        return view('auth.dashboard.akun', compact([
            'users'
        ]));
    }

    public function data_penumpang()
    {
        $data_penumpang = data_penumpang::get();
        return view('auth.dashboard.data_penumpang', compact([
            'data_penumpang'
        ]));
    }

    public function pemesanan()
    {
        $pemesanan = pemesanan::get();
        return view('auth.dashboard.pemesanan', compact([
            'pemesanan'
        ]));
    }

    public function penerbangan()
    {
        $penerbangan = penerbangan::get();
        return view('auth.dashboard.penerbangan', compact(
            'penerbangan'
        ));
    }

    public function perhotelan()
    {
        $perhotelan = perhotelan::get();
        return view('auth.dashboard.perhotelan', compact(
            'perhotelan'
        ));
    }

    public function tiket()
    {
        $tiket = tiket::get();
        return view('auth.dashboard.tiket', compact(
            'tiket'
        ));
    }

    public function pembayaran()
    {
        $pembayaran = pembayaran::get();
        return view('auth.dashboard.pembayaran', compact(
            'pembayaran'
        ));
    }
}
