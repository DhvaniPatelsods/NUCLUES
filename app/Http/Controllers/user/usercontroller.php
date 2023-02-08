<?php

namespace App\Http\Controllers\user;
use App\Models\role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\userdetails;
use App\Models\country;
use Auth;
use DB;
use App\Models\activity;
use Illuminate\Support\Facades\Hash;
class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['adduser'] = User::all();
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.user.adduser.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['role'] = role::all();
         $data['country'] = country::all();
         $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.user.adduser.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
       $data = User::create([
            
            'name'=>request()->get('name'),
            // 'country'=>request()->get('country'),

            'country' => 0,

            'phone'=>request()->get('phone'),
            'role'=>request()->get('role'),
            'email'=>request()->get('email'),
            'designation'=>request()->get('designation'),
            'password' => Hash::make($request['password']),
            'real_password' => request()->get('password'),
            // 'created_by'=> $user,
            'created' => Auth::id(),
  
        ]);
        $group = request()->get('name');
         $data = activity::create([
            
            
             'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "User Added" .$group. "Successfully",
            'created' => Auth::id(),
  
        ]);
        
        
        return redirect('/user')->with('status','User Added successfully');
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
       
          //$data['user'] = User::where('users.id',$id)->join('userdetails', 'userdetails.user_id', '=', 'users.id')->Select('users.*','userdetails.*')->first();
//dd($data['user']);
        $data['role'] = role::all();
        $data['user'] = User::find($id);
         $data['country'] = country::all();
         $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.user.adduser.edit',$data);
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
        //$data = User::where('users.id',$id)->join('userdetails', 'userdetails.user_id', '=', 'users.id')->Select('users.*','userdetails.*')->first();
        $data = User::find($id);
        $data->role = $request->input('role');
        $data->name = $request->input('name');
        $data->password = $request->input('password');
        $data->email = $request->input('email');
        $data->country = $request->input('country'); 
        $data->phone = $request->input('phone');
        $data->status = $request->input('status');
        $data->designation = $request->input('designation');
        $data->updated = $request->input('updated');
        $data->update();
        $group = $request->input('name');
         $activitylog = [
            'created' => Auth::id(),
           'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "User Updated" .$group. "Successfully",
            ];
        DB::table('activities')->insert($activitylog);
        return redirect('/user')->with('status','User Updated successfully');
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
