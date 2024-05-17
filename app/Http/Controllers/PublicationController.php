<?php

namespace App\Http\Controllers;
use App\Models\Publication;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {

        dd('here');
        $publications = publication::all();
        return view('publications.index', compact('publications'));
    }
}
