<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Database\Eloquent\Collection;

class ResearchingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('researching');
    }
}