<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function incrementCounter()
    {
        $counter = DB::table('pagecounter')->first();

        if ($counter) {
            DB::table('pagecounter')
                ->where('id', $counter->id)
                ->increment('count');
        } else {
            DB::table('pagecounter')->insert([
                'count' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $updatedCounter = DB::table('pagecounter')->first();

        return view('pagecounter', ['count' => $updatedCounter->count]);
}
}