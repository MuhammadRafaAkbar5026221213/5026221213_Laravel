<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BluerayController extends Controller
{
    // Display a paginated list of Blu-rays
    public function index()
    {
        $blueray = DB::table('blueray')->paginate(10);
        return view('index2', ['blueray' => $blueray]);
    }

    // Show the form to add a new Blu-ray
    public function tambah()
    {
        // Retrieve the latest kodeblueray and increment it
        $latestBlueray = DB::table('blueray')->orderBy('kodeblueray', 'desc')->first();
        $newKode = $latestBlueray ? $latestBlueray->kodeblueray + 1 : 1;  // Increment or start from 1

        // Pass the new code to the view
        return view('tambah2', ['kodeblueray' => $newKode]);
    }

    // Insert a new Blu-ray into the database
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'kodeblueray' => 'required|integer',
            'merkblueray' => 'required|string|max:30',
            'stokblueray' => 'required|integer|min:0',
            'tersedia' => 'nullable|in:y,n', // Optional and only accepts 'y' or 'n'
        ]);

        // Determine the 'tersedia' value based on stock and user input
        $tersedia = $request->stokblueray == 0 
                    ? 'n' 
                    : ($request->tersedia ?? 'y'); // If stock > 0, use user input or default to 'y'

        // Insert data into the database
        DB::table('blueray')->insert([
            'kodeblueray' => $request->kodeblueray,
            'merkblueray' => $request->merkblueray,
            'stokblueray' => $request->stokblueray,
            'tersedia' => $tersedia,
        ]);

        return redirect('/blueray')->with('success', 'Data berhasil disimpan!');
    }

    // Show the form to edit an existing Blu-ray
    public function edit($id)
    {
        $blueray = DB::table('blueray')->where('kodeblueray', $id)->first();
        return view('edit2', ['blueray' => $blueray]);
    }

    // Update Blu-ray data
    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'kodeblueray' => 'required|integer',
            'merkblueray' => 'required|string|max:30',
            'stokblueray' => 'required|integer|min:0',
            'tersedia' => 'required|in:y,n',
        ]);

        // Determine 'tersedia' based on stock and user input
        $tersedia = $request->stokblueray > 0 ? $request->tersedia : 'n';

        // Update the database record
        DB::table('blueray')->where('kodeblueray', $request->kodeblueray)->update([
            'merkblueray' => $request->merkblueray,
            'stokblueray' => $request->stokblueray,
            'tersedia' => $tersedia,
        ]);

        return redirect('/blueray')->with('success', 'Data berhasil diperbarui!');
    }

    // Delete a Blu-ray
    public function hapus($id)
    {
        DB::table('blueray')->where('kodeblueray', $id)->delete();
        return redirect('/blueray')->with('success', 'Data berhasil dihapus!');
    }

    // Search for Blu-rays by brand
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $blueray = DB::table('blueray')
            ->where('merkblueray', 'like', "%" . $cari . "%")
            ->paginate(10);
        return view('index2', ['blueray' => $blueray]);
    }
}
