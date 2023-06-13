<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function getTrains()
    {
        $trains = Train::all();

        return view('pages.home', compact('trains'));
    }
}
