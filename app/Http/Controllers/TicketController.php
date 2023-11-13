<?php

namespace App\Http\Controllers;

use App\Enums\IssueType;
use App\Enums\Quipment;
use App\Enums\RepairType;
use App\Enums\TicketStatus;
use App\Enums\TicketUrgency;
use App\Models\Equipment;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userAll = User::all();
        $dataAll = Ticket::all();
        // dd($dataAll);
        return view('ticket.dashboard', compact('dataAll', 'userAll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $userAll = User::all();
        $equipments = Equipment::all();
        // dd($equipments);
        $repairCases = RepairType::cases();
        $repair_type = array_map(function ($case, $index) {
            return (object) [
                'index' => (string) $index,
                'value' => $case->value
            ];
        }, $repairCases, array_keys($repairCases));

        $issueCases = IssueType::cases();
        $issue_type = array_map(function ($case, $index) {
            return (object) [
                'index' => (string) $index,
                'value' => $case->value
            ];
        }, $issueCases, array_keys($issueCases));

        $urgencyCases = TicketUrgency::cases();
        $urgency_type = array_map(function ($case, $index) {
            return (object) [
                'index' => (string) $index,
                'value' => $case->value
            ];
        }, $urgencyCases, array_keys($urgencyCases));

        $statusCases = TicketStatus::cases();
        $status = array_map(function ($case, $index) {
            return (object) [
                'index' => (string) $index,
                'value' => $case->value
            ];
        }, $statusCases, array_keys($statusCases));

        return view('ticket.create', compact('userAll', 'repair_type', 'issue_type', 'urgency_type', 'equipments', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $ticket = Ticket::create([
            'repair_type' => $request->repairType,
            'issue_type' => $request->issueType,
            'equipment_id' => $request->equipment,
            'urgency' => $request->urgency,
            'issue' => $request->issueDetail
            // 'technician' => $request->servicedBy,
            // 'status' => $request->status,
            // 'service_date' => $request->serviceDate,
            // 'done_date' => $request->done_date,
            // 'remark' => $request->solvedDetail
        ]);
        // return response($ticket);
        return response()->redirectTo(route('ticket.index'));
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
    public function edit(Ticket $ticket)
    {
        //
        $userAll = User::all();
        $statusCases = TicketStatus::cases();
        $status = array_map(function ($case, $index) {
            return (object) [
                'index' => (string) $index,
                'value' => $case->value
            ];
        }, $statusCases, array_keys($statusCases));
        return view('ticket.edit', compact('ticket', 'userAll', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
        $ticket->update([
            'remark' => $request->solvedDetail,
            'technician' => $request->servicedBy,
            'status' => $request->status,
            'service_date' => $request->serviceDate,
            'done_date' => $request->compleatedDate
        ]);
        return redirect(route('ticket.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
