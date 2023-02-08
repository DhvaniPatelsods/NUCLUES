<?php

namespace App\Http\Controllers\user;
use App\Models\role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\module;
use App\Models\User;
use App\Models\activity;
use Auth;
use DB;
use App\Models\role_permission;
class rolecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['role'] = role::all();
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.user.role.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.user.role.roladd',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = role::create([
       
             'role'=>request()->get('role'),
            'created' => Auth::id(),
        ]);
        
        $group = request()->get('role');
         $activity = activity::create([
            
            'created'=> Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Role Added" .$group. "Successfully",
  
        ]);
        
        $insertedId = $data->id;

        $modules = module::all();


        foreach ($modules as $module) {
            if(!empty($module))
                  {
                        $role_permission = role_permission::create([             
                            'role_id' => $insertedId,
                            'module_id' => $module->id,
                        ]);
                  }
        }
        
        return redirect('role')->with('status',"Role Added Successfully");
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
        $data['role'] = role::find($id);
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.user.role.edit',$data);
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
        $data = role::find($id);
        $data->role = $request->input('role');
        $data->status = $request->input('status');
        $data->updated = $request->input('updated');
        $data->update();
        $group = $request->input('role');
         $activitylog = [
            'created' => Auth::id(),
           'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Role Updated" .$group. "Successfully",
            ];
        DB::table('activities')->insert($activitylog);
        return redirect('role')->with('status',"Role Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $activitylog = [
            'created' => Auth::id(),
           'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Role Deleted Successfully",
            ];
        DB::table('activities')->insert($activitylog);
        $data = role::find($id);
        $data->delete();
        return redirect('role')->with('status',"Role Deleted Successfully");
    }
    
     public function destroy2($id)
    {
         $activitylog = [
            'created' => Auth::id(),
           'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Users Deleted Successfully",
            ];
        DB::table('activities')->insert($activitylog);
        $data = User::find($id);
        $data->delete();
        return redirect('user')->with('status',"User Deleted Successfully");
    }
   

    public function managerole()
    {
        $data['role'] = role::all();
        $data['module'] = module::all();
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.user.role.add',$data);
    }

    public function role_permission2(Request $request, $id){

       $request->session()->forget('role_id');
        $request->session()->put('role_id', $id);

        $roles = role::all();
        $permissions = role_permission::where('role_id', $id)->get();
        $notification = activity::latest()->limit(15)->get();
        return view('backend.user.role.modules', [
            'roles' => $roles,
            'permissions' => $permissions,
            'notification' => $notification,
        ]);

    }

    public function role_permission_update(Request $request, $id){

        
$permission =  role_permission::where('id', $id)->first();

  
        // Create
          

            if($request->input('create') == null){

               
            
            } else {
                
                if($request->input('create') == 0){
        
                    $permission->create = 1;
        
            
                    } else{
                        $permission->create = 0;
                    }

            }


            if($request->input('read') == null){

               
            
            } else {
                if($request->input('read') == 0){
        
                    $permission->read = 1;
        
            
                    } else{
                        $permission->read = 0;
                    }

            }


            if($request->input('update') == null){

               
            
            } else {
                if($request->input('update') == 0){
        
                    $permission->update = 1;
        
            
                    } else{
                        $permission->update = 0;
                    }

            }


            if($request->input('delete') == null){

               
            
            } else {
                if($request->input('delete') == 0){
        
                    $permission->delete = 1;
        
            
                    } else{
                        $permission->delete = 0;
                    }

            }

        
        // Read

        $permission->update();

        return back()->with('success', 'Permission Granted Successfully');


    }

   /** public function sidebar()
    {
        $data = role_permission::where
         return view('import.sidebar');
    }**/

   /** public function createpermission(Request $request)
    {
        $data = array(
            'role_id' => $request->role_id,
            'permission' => $request->permission,
            'module_id' => $request->module_id,
        );
        dd($data);
        create::role_permission($data);
        return redirect('managerole');
    }**/
}
