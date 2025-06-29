<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Database\Eloquent\Collection;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard')->with('files', $this->getAllFileItems()->toArray());
    }

    private function getAllFileItems(): Collection
    {
        return File::all();
    }
}