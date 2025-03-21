<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index () {
        $today = Carbon::today();

        // Recuperiamo i treni con partenza dalla data odierna in avanti, ordinati per orario di partenza
        $trains = Train::where('orario_partenza', '>=', $today)
                        ->orderBy('orario_partenza', 'asc')
                        ->get();

        return view('home', compact('trains'));
    }
}
