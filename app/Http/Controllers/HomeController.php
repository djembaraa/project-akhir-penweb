<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('created_at', 'desc')->get(); // Ambil semua mobil terbaru
        return view('user.home', compact('cars'));
    }

    // Jika Anda ingin halaman detail mobil sebelum redirect ke WA
    /*
    public function show(Car $car)
    {
        return view('user.car_detail', compact('car'));
    }
    */
}