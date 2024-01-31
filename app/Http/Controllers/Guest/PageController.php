<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Ottieni la data odierna
        $today = Carbon::now()->toDateString();

        // Ottieni tutti i treni in partenza dalla data odierna
        $trains = Train::where('data_partenza', '>=', $today)
            ->orderBy('data_partenza')
            ->orderBy('orario_partenza')
            ->get();

        return view('welcome', compact('trains'));
    }
}
