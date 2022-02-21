<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // $train = Train::orderBy('departure_time', 'asc')->get();
        $train = Train::paginate(10);
        $data = ['train' => $train];
        return view('home', $data);
    }

    public function createTrain()
    {
        $train = new Train();
        $train->fill([
            'agency' => '	Trenitalia SpA',
            'departure' => 'Bari Centrale',
            'arrival' => 'Roma Termini',
            'departure_time' => '16.40',
            'arrival_time' => '18.00',
            'code' => 'HDTEY257OP98 ',
            'carriage' => 6,
            'date' => '2022/02/18',
            'in_time' => true,
            'deleted' => false,
        ]);

        $result = $train->save();
        dd($train, $result);
    }

    public function show(Train $train)
    {
        return view('show', compact('train'));
    }
}
