<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Recharge;
use Auth;
Use Session;

class RechargeController extends Controller
{
    public function __construct() {
            $this->middleware(['auth', 'clearance'])->except('index', 'show');
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recharges = Recharge::latest()->get();
        return view ('recharges.index', compact('recharges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('recharges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(), [
            'recharge_date' => 'required|date',
            'last_recharge_days' => 'required',
            'last_months_KWh' => 'required',
            'amount_paid' => 'required',

        ]);

        //
        Recharge::create([
            'recharge_date' => request('recharge_date'),
            'last_recharge_days' => request('last_recharge_days'),
            'last_months_KWh' => request('last_months_KWh'),
            'amount_paid' => request('amount_paid')
        ]);

        //
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $recharge = Recharge::findOrFail($id); //Find recharge of id = $id

        //
        return view ('recharges.show', compact('recharge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $recharge = Recharge::findOrFail($id);
        
        //
        return view('recharges.edit', compact('recharge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate(request(), [
            'recharge_date' => 'required|date',
            'last_recharge_days' => 'required',
            'last_months_KWh' => 'required',
            'amount_paid' => 'required',

        ]);

        $recharge = Recharge::findOrFail($id);
        $recharge->recharge_date = $request->input('recharge_date');
        $recharge->last_recharge_days = $request->input('last_recharge_days');
        $recharge->last_months_KWh = $request->input('last_months_KWh');
        $recharge->amount_paid = $request->input('amount_paid');
        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $recharge = Recharge::findOrFail($id);
        $recharge->delete();
    }
}
