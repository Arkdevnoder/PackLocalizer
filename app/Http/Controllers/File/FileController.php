<?php

namespace App\Http\Controllers\File;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        if($request->hasFile('fileSelector'))
        {
            return $this->saveFileAndRedirectToDashboard($request);
        }
        return redirect("dashboard")->with("error", __("File not found"));
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        //
    }

    private function saveFileAndRedirectToDashboard(Request $request): RedirectResponse
    {
        $file = $request->file('fileSelector');
        $path = $file->store('localizations', 'public');
        File::create(["user_id" => $request->user()->id, "path" => $path, "name" => $file->getClientOriginalName()]);
        return redirect("dashboard")->with("success", __("File uploaded"));
    }
}