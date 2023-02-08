<?php

namespace App\Http\Controllers\activity;
use App\Models\activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class activitycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['activity'] = activity::latest('date')->get();
        $data['notification'] = activity::latest()->limit(15)->get();

        //$id = activity::where($data['activity'->('activity'))->first();
        //dd($id);
        //$data['activity12'] = activity::where('activity', '=', $data['activity'])->first();
        return view('backend.activity.index',$data);
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

    public function index12($id)
    {
        $user = activity::find($id);
        return response()->json($user);
    }

    public function view($id)
    {
        $user['activity'] = activity::find($id);
        $user['notification'] = activity::latest()->limit(15)->get();
        //return response()->json($user);
        return view('backend.activity.view',$user);
    }

     public function searchactivity(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['activity'] = activity::whereBetween('date',[$fromto,$todate])->get();
        return view::make('backend.activity.index',$data);
    }
}
