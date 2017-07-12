<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Request;
use Illuminate\Support\Facades\DB;


class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function appReceived()
    {
      
        $applications_received=DB::select(DB::raw("SELECT COUNT(*) count, DATE(created_at) as date FROM requests GROUP BY DATE(created_at)"));
        $applications_received = json_decode(json_encode((array) $applications_received), true);
        $data=[];
        $label=[];
        foreach ($applications_received as $item){
            array_push($data,$item['count']);
            array_push($label,$item['date']);
        }



        return view('chartjs')
            ->with('data',json_encode($data))
            ->with('label',json_encode($label));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
