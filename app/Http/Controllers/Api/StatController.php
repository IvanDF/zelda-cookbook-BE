<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Stat;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Searcging ingredients from DB
        $stats = DB::table('stats')
            ->select('stats.id', 'stats.type', 'stats.points', 'stats.duration')->get()->toArray();
 
        return response()->json($stats); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        /************************************************
         * DA AGGIUNGERE IL CHECK "ESISTE GIÀ"
        ************************************************/

        $data = $request->all();

        // Initialize Stat model & set table cells
        $newStat = new Stat;
        $newStat->type = $data['type'];
        $newStat->duration = $data['duration'];
        $newStat->points = $data['points'];
        $newStat->hearts = $data['hearts'];
        
        // Sae to DB
        $newStat->save();

        return "success";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Searcging stats from DB
        $stat = DB::table('stats')
            ->select('stats.id', 'stats.type', 'stats.points', 'stats.duration')
            ->where('stats.id', $id)
            ->get();
 
        return response()->json($stat); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $stat_id)
    {
        $data = $request->all();

        $stat = Stat::find($stat_id);
        $stat->update($data);

        return "success";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($stat_id)
    {
        $stat = Stat::find($stat_id);
        $stat->delete();

        return "success";
    }
}