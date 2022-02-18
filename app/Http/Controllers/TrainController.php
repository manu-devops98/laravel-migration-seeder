<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $train = Train::orderBy('departure_time', 'asc')->get();
        $data = ['train' => $train];
        return view('home', $data);
    }

    public function createTrain()
    {
        $train = new Train();
        $train->fill([
            'agency' => 'Getras Srl',
            'departure' => 'Ragusa',
            'arrival' => 'Scicli',
            'departure_time' => '18.30',
            'arrival_time' => '20.00',
            'code' => 'POEWRT35481S',
            'carriage' => 3,
            'in_time' => true,
            'deleted' => false,
        ]);

        $result = $train->save();
        dd($train, $result);
    }
}
