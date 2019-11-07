<?php

namespace App\Http\Controllers;

use App\Activitie;
use Illuminate\Http\Request;

class ActivitieController extends Controller
{
    public function index()
    {
        $activities = \App\Activitie::active()->orderBy('date')->paginate(10);

        return view('agenda', ["activities" => $activities]);
    }
}
