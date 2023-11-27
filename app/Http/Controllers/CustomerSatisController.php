<?php

namespace App\Http\Controllers;

use App\Models\CustomerSatisfactionDetail;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\CustomerSatisfaction;
use App\Models\User;

class CustomerSatisController extends Controller
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
    public function create(string $id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id)
    {
        $score_avg = ($request->score1 + $request->score2 + $request->score3 + $request->score4) / 4;

        $customer_satis = CustomerSatisfaction::create([
            'ticket_id' => $id,
            'title' => "test",
            'score' => $score_avg
        ]);

        $main_id = $customer_satis->id;

        for ($i = 1; $i < 6; $i++) {
            $key_topic = 'topic' . $i;
            $key_score = 'score' . $i;

            $detail = new CustomerSatisfactionDetail();

            $detail->customer_satis_id = $main_id;
            $detail->title = $request->$key_topic;
            if ($i == 5) {
                $detail->score = 0;
                $detail->remark = $request->note;
            } else {
                $detail->score = $request->$key_score;
            }
            $detail->save();
        }

        return response()->redirectTo(route('customer_satis.show', $id));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataAll = Ticket::select('id', 'technician', 'service_date', 'done_date')->find($id);
        $satic = CustomerSatisfaction::select()->where('ticket_id', $dataAll->id)->first();

        $d = CustomerSatisfactionDetail::select('*')->where('customer_satis_id', $satic->id)->get();
        return view('customer_satis.dashboard', compact('dataAll', 'satic', 'd'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        return view('customer_satis.add', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
