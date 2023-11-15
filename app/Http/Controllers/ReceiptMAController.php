<?php

namespace App\Http\Controllers;

use App\Models\ReceiptMA;
use App\Models\ReceiptMAList;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ReceiptMAController extends Controller
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
    public function store(Request $request, $ticket_id)
    {
        $repairCostAll = floatval($request->repairCost);
        $elementCostAll = floatval($request->elementCost);
        $travelCostAll = floatval($request->travelCost);
        $deviceCostAll = floatval($request->deviceCost);
        $totalCost = $repairCostAll + $elementCostAll + $travelCostAll + $deviceCostAll;

        // สร้างบันทึกค่าใช้จ่าย
        $receiptMA = ReceiptMA::create([
            "ticket_id" => $ticket_id,
            "total_cost" => $totalCost,
            "createdBy" => "1"
        ]);

        $newlyCreatedId = $receiptMA->id;

        // สร้างบันทึกค่าใช้จ่ายตามหัวห้อ
        if ($request->repairCost != 0) {
            $cost = ReceiptMAList::create([
                "receiptMA_id" => $newlyCreatedId,
                "title" => "ค่าซ่อม",
                "cost" => intval($request->repairCost)
            ]);
        }
        if ($request->elementCost != 0) {
            $cost = ReceiptMAList::create([
                "receiptMA_id" => $newlyCreatedId,
                "title" => "ค่าอะไหล่",
                "cost" => intval($request->elementCost)
            ]);
        }
        if ($request->travelCost != 0) {
            $cost = ReceiptMAList::create([
                "receiptMA_id" => $newlyCreatedId,
                "title" => "ค่าเดินทาง",
                "cost" => intval($request->travelCost)
            ]);
        }
        if ($request->deviceCost != 0) {
            $cost = ReceiptMAList::create([
                "receiptMA_id" => $newlyCreatedId,
                "title" => "ค่าอุปกรณ์",
                "cost" => intval($request->deviceCost)
            ]);
        }
        return redirect()->route("ticket.edit", $ticket_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $ticket_id)
    {
        //
        return view("cost.create", compact("ticket_id"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $receiptMA_id)
    {
        //
        $receiptList = ReceiptMAList::all()->where("receiptMA_id", $receiptMA_id);
        $cost_repair = ReceiptMAList::all()->where("receiptMA_id", $receiptMA_id)->where("title", "ค่าซ่อม")->first();
        $cost_element = ReceiptMAList::all()->where("receiptMA_id", $receiptMA_id)->where("title", "ค่าอะไหล่")->first();
        $cost_travel = ReceiptMAList::all()->where("receiptMA_id", $receiptMA_id)->where("title", "ค่าเดินทาง")->first();
        $cost_device = ReceiptMAList::all()->where("receiptMA_id", $receiptMA_id)->where("title", "ค่าอุปกรณ์")->first();
        return view("cost.edit", compact("receiptList", "receiptMA_id", "cost_repair", "cost_element", "cost_travel", "cost_device"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $receiptMA_id, ReceiptMAList $receiptMAList)
    {
        //
        $totalCost = 0;
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'rowID_') === 0) {
                $id = substr($key, strlen('rowID_'));

                // Find the CostRepair model by ID
                $costRepair = ReceiptMAList::findOrFail($id);

                // Update the cost value
                $costRepair->cost = $value;
                $costRepair->save();

                $totalCost += $costRepair->cost;
            }
        }

        $receiptMA = ReceiptMA::findOrFail($receiptMA_id);
        $receiptMA->total_cost = $totalCost;
        $receiptMA->save();

        return redirect()->route("ticket.edit", $receiptMA->ticket_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReceiptMAList $receiptMAList)
    {
        //
    }
}
