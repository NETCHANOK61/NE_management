<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceCost;
use App\Models\Ticket;
use Illuminate\Http\Request;

class MAController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $ticket_id)
    {
        //
        $repairCostAll = MaintenanceCost::all()->where('ticket_id', $ticket_id)->where('title', 'ค่าซ่อม')->sum('cost');
        $elementCostAll = MaintenanceCost::all()->where('ticket_id', $ticket_id)->where('title', 'ค่าอะไหล่')->sum('cost');
        $travelCostAll = MaintenanceCost::all()->where('ticket_id', $ticket_id)->where('title', 'ค่าเดินทาง')->sum('cost');
        $deviceCostAll = MaintenanceCost::all()->where('ticket_id', $ticket_id)->where('title', 'ค่าอุปกรณ์')->sum('cost');

        return view('cost.create', compact('ticket_id', 'repairCostAll', 'elementCostAll', 'travelCostAll', 'deviceCostAll'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        if($request->repairCost != null){
            $cost = MaintenanceCost::create([
                "ticket_id" => $id,
                "title" => "ค่าซ่อม",
                "cost" => intval($request->repairCost)
            ]);
        }
        if($request->elementCost != null){
            $cost = MaintenanceCost::create([
                "ticket_id" => $id,
                "title" => "ค่าอะไหล่",
                "cost" => intval($request->elementCost)
            ]);
        }
        if($request->travelCost != null){
            $cost = MaintenanceCost::create([
                "ticket_id" => $id,
                "title" => "ค่าเดินทาง",
                "cost" => intval($request->travelCost)
            ]);
        }
        if($request->deviceCost != null){
            $cost = MaintenanceCost::create([
                "ticket_id" => $id,
                "title" => "ค่าอุปกรณ์",
                "cost" => intval($request->deviceCost)
            ]);
        }
        return redirect()->route("ticket.edit", $id);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
