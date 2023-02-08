<?php
namespace App\Http\Controllers\masterdata_management;
use App\Models\client_group_master;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\activity;
use Auth;
use App\Imports\Groupimport;
use App\Exports\Groupexport;
use DB;
use App\Models\User;
//use App\Models\activity;
use Maatwebsite\Excel\Facades\Excel;
class client_Groupcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['group'] = client_group_master::all();
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.masterdata.clientgroup.index',$data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.masterdata.clientgroup.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         request()->validate([
            'client_group'=> 'required',
            'contect_person'=> 'required',
            'contect_phone'=> 'required',
            'designation'=> 'required',
            'email'=> 'required',
            'responsibility'=> 'required',
        ],
        [
            'client_group.required'=> 'client_group is mandatory',
            'contect_person.required'=> 'Contect Person is mandatory',
            'contect_phone.required'=> 'Contect Phone is mandatory',
            'designation.required'=> 'designation is mandatory',
            'email.required'=> 'Email is mandatory',
            'responsibility.required'=> 'responsibility is mandatory',
        ]
     );
        $exist = client_group_master::where('client_group', request()->get('client_group'))->first();

        if ($exist) 
        {
            return back()->with('status', 'This Client Group Already Exist');
        } 
        else 
        {

        //  $user = Auth::user()->id;
        $data = client_group_master::create([
            
            'client_group'=>request()->get('client_group'),
            'contect_person'=>request()->get('contect_person'),
            'contect_phone'=>request()->get('contect_phone'),
            'designation'=>request()->get('designation'),
            'email'=>request()->get('email'),
            'designation2'=>request()->get('designation2'),
            'email2'=>request()->get('email2'),
            'phone2'=>request()->get('phone2'),
            'person2'=>request()->get('person2'),
            'responsibility'=>request()->get('responsibility'),
            'responsibility2'=>request()->get('responsibility2'),
            
            // 'created_by'=> $user,
            'created' => Auth::id(),
  
        ]);
    }
   
    //dd($data);
        $group = request()->get('client_group');
        $activity = activity::create([
            
            'client_group'=>request()->get('client_group'),
            'contect_person'=>request()->get('contect_person'),
            'contect_phone'=>request()->get('contect_phone'),
            'designation'=>request()->get('designation'),
            'email'=>request()->get('email'),
            // 'created_by'=> $user,
            'created' => Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Client Group" .$group. "Added Successfully",
             
  
        ]);
       
        return redirect('client_group')->with('status','Client Group Added Successfully');
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
        $data['group'] = client_group_master::find($id);
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['entity'] = client_group_master::where('client_group_masters.id',$id)->join('client_entity_masters', 'client_entity_masters.client_group', '=', 'client_group_masters.id')->Select('client_group_masters.*','client_entity_masters.*')->get();
        //dd($data['entity']);

         //$data['entity']= client_group_master::where('client_group_masters.id',$id)->join('client_entity_masters', 'client_entity_masters.client_group', '=', 'client_group_masters.id')->select('client_group_master.*')->get();
        return view('backend.masterdata.clientgroup.edit',$data);
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
       
        $data = client_group_master::find($id);
        $data->client_group = $request->input('client_group');
        $data->email = $request->input('email');
        $data->contect_phone = $request->input('contect_phone');
        $data->status = $request->input('status');
        $data->contect_person = $request->input('contect_person');
        $data->designation = $request->input('designation');
         $data->phone2 = $request->input('phone2');
          $data->email2 = $request->input('email2');
           $data->designation2 = $request->input('designation2');
            $data->person2 = $request->input('person2');
              $data->responsibility = $request->input('responsibility');
              $data->responsibility2 = $request->input('responsibility2');
        $data->updated = $request->input('updated');
        
        //client_group_master::where('id',$request->id)->update($data);
         //DB::table('activities')::where('created',Auth::id())->insert($activity);
        $data->update();
        
        $group = $request->input('client_group');
        //dd($group);
          $activitylog = [
            'created' => Auth::id(),
           'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'client_group' => $request->input('client_group'),
            'activity' => "Client Group" .$group. "Updated Successfully",
            ];
        DB::table('activities')->insert($activitylog);
        
        return redirect('client_group')->with('status', 'Client Group Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /** $activitylog = [
            'created' => Auth::id(),
           'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Client Group Deleted Successfully",
            ];
        DB::table('activities')->insert($activitylog);**/
         $data = client_group_master::find($id);
         $data->delete();
         return redirect('client_group')->with('status', 'Client Group deleted Successfully');
    }

    public function creategroup()
    {
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.masterdata.clientgroup.csv.add',$data);
    }

    public function importgroup(Request $request)
    {
        Excel::Import(new Groupimport, request()->file('file'));

        return redirect('client_group')->with('status','Client Group Imported Successfully');
        
    }


    public function expertgroup()
    {
        //return Excel::download(new Groupexport, 'group.xlsx');
        $headers = [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
        ,   'Content-type'        => 'text/xlsx'
        ,   'Content-Disposition' => 'attachment; filename=group.xlsx'
        ,   'Expires'             => '0'
        ,   'Pragma'              => 'public'
    ];

    $lists = client_group_master::all();

    //dd($lists);

    foreach ($lists as $key=> $list) {
        $check = User::where('id', $list->created)->first();
    //dd($check);
    $data[] = array(
       
        
        "client_group" => empty($list->client_group)? "" :$list->client_group,
        "contect_person" => empty($list->contect_person)? "" : $list->contect_person,
        "contect_phone" => empty($list->contect_phone) ? "" : $list->contect_phone,
        "designation Name" => empty($check->designation_name) ? "" : $check->designation_name,
        "email" => empty($check->email) ? "" : $check->email,
        "person2" => empty($list->person2)? "" : $list->person2,
        "phone2" => empty($list->phone2) ? "" : $list->phone2, 
         "designation2" => empty($list->designation2) ? "" : $list->designation2, 
          "email2" => empty($list->email2) ? "" : $list->email2, 
           "responsibility" => empty($list->responsibility) ? "" : $list->responsibility,
           "responsibility2" => empty($list->responsibility2) ? "" : $list->responsibility2, 
            "created" => empty($check->name)? "" :$check->name,
             "updated" => empty($check->name)? "" :$check->name,
       
      );
    
    }



    header("Content-Disposition: attachment; filename=\"group.xls\"");
    header("Content-Type: application/vnd.ms-excel;");
    header("Pragma: no-cache");
    header("Expires: 0");

    array_unshift($data, array_keys($data[0]));
    
    $out = fopen("php://output", 'w');
    foreach ($data as $data)
    {
        fputcsv($out, $data,"\t");
    }
    fclose($out);
    }
}
