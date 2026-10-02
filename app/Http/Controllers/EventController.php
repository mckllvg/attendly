<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
{
    $events = \App\Models\Event::orderBy('starts_at')->get();

    return view('events.index', ['events' => $events]);
}
}
