<?php

namespace App\Http\Controllers\report;
use App\Models\ticket;
use App\Models\client_group_master;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\activity;
class ticketcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ticket'] = ticket::all();
         $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.ticket.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['group'] = client_group_master::all();
         $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.ticket.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         $data = ticket::create([
            
            'subject'=>request()->get('subject'),
            'group'=>request()->get('group'),
            'type'=>request()->get('type'),
            'message'=>request()->get('message'),
           
            'created'=> Auth::id(),
  
        ]);
        $group = request()->get('subject');
      $activity = activity::create([
            
          
            'created'=> Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Ticket Created" .$group. "Successfully",
  
        ]);
  
        
        return redirect('/ticket')->with('status','Ticket Added successfully');
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
        $data['group'] = client_group_master::all();
        $data['ticket'] = ticket::find($id);
         $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.ticket.edit',$data);
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
        $data = ticket::find($id);
       //$data->subject =  $request->input('subject');
         //    $data->group =  $request->input('group');
           //   $data->type =  $request->input('type');
            //   $data->message =  $request->input('message');
               $data->updated =  $request->input('updated');
               $data->status =  $request->input('status');
               $data->update();
               $group = $request->input('subject');
                $activitylog = [
            'created' => Auth::id(),
           'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            
            'activity' => "Ticket Updated" .$group. "Successfully",
            ];
        DB::table('activities')->insert($activitylog);
               return redirect('/ticket')->with('status','Ticket Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$dt = Carbon::now();
        //$todayDate = $dt->toDayDateTimeString();
        
        /**$activitylog = [
            'created' => Auth::id(),
           'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Ticket Deleted Successfully",
            ];
        DB::table('activities')->insert($activitylog);
        $data = ticket::find($id);**/
        $data->delete();
        return redirect('/ticket')->with('status','Ticket Updated successfully');
    }
}
