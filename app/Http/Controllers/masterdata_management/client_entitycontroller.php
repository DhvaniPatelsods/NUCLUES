<?php

namespace App\Http\Controllers\masterdata_management;
use App\Models\client_group_master;
use App\Models\country;
use App\Models\frequency;
use App\Models\User;
use App\Models\activity;
use App\Models\entitytype;
use App\Models\role_permission;
use App\Models\client_entity_master;
use App\Http\Controllers\Controller;
use App\Models\country_compliance__master;
use Illuminate\Http\Request;
use App\Models\manage_complience_information;
use App\Models\userdetails;
use App\Imports\entityimport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\entityexport;
use App\Models\BackupRestore;
use App\Models\EntityStatus;
//use Maatwebsite\Excel\Facades\Excel;
use Auth;
use DB;
use App\Models\role;
class client_entitycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = client_entity_master::all();
        $data['master'] = client_entity_master::where('hold', 1)->get();
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.masterdata.cliententity.index',$data);
    }
    public function ed()
    {
        return view('backend.masterdata.cliententity.edit');
    }


    public function backup($entity_entity_name , $id)
    {

        $backup = client_entity_master::find($id);

        // dd($backup);

        $store = BackupRestore::create([
            'client_group' => $backup->client_group,
            'entity_name' => $backup->client_entity_name,
            // 'job_title' => request()->get('job_title'),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'restored_by' => Auth::user()->id, 
            'status' => 1, 
            
            // 'updated_by' => 0,
        ]);

       
       

        $data = client_entity_master::find($id);
        $data->Delete();

        $find = client_entity_master::where('client_entity_name', $entity_entity_name)->latest('updated_at')->first();

        $find->hold = 1;

        $find->update();

       




        return redirect('client_entity')->with('status', 'Client Entity Backup Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['group'] = client_group_master::where('status',1)->get();
        $data['country'] = country::all();
        $data['frequency'] = frequency::all();
        $data['entitytype'] = entitytype::all();
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['mat'] = User::where('role',"5")->get();
        $data['csd'] = User::where('role',"3")->get();
        $data['spv'] = User::where('role',"6")->get();
        //$data['user'] = User::where('role',"0")->get();
        $data['manager'] = User::where('role',"7")->get();
        return view('backend.masterdata.cliententity.add',$data);
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
            'client_entity_name'=> 'required',
            'country'=> 'required',
            'entity_type'=> 'required',
            'year_end'=> 'required',
            'date'=> 'required',
            'csd'=> 'required',
            'mat_manager'=> 'required',
            'mat_spv'=> 'required',
            'affiliate_name'=> 'required',
            'affiliate_email'=> 'required',
            'affiliate_phone'=> 'required',
            
        ],
        [
            'client_group.required' => 'client_group is mandatory',
            'client_entity_name.required' => 'client_entity_name is mandatory',
            'country.required' => 'country is mandatory',
            'entity_type.required' => 'entity_type is mandatory',
            'year_end.required' => 'year_end is mandatory',
            'date.required' => 'date is mandatory',
            'csd.required' => 'csd is mandatory',
            'mat_manager.required' => 'mat_manager is mandatory',
            'mat_spv.required' => 'mat_spv is mandatory',
            'affiliate_name.required' => 'affiliate_name is mandatory',
            'affiliate_email.required' => 'affiliate_email is mandatory',
            'affiliate_phone.required' => 'affiliate_phone is mandatory',
            
        ]
    );

         $exist = client_entity_master::where('client_entity_name', request()->get('client_entity_name'))->first();

        if ($exist) {
         return back()->with('status', 'This Client Entity Name Already Exist');
        } else {

        $data = client_entity_master::create([
            
            'client_group'=>request()->get('client_group'),
            'client_entity_name'=>request()->get('client_entity_name'),
            'country'=>request()->get('country'),
            'entity_type'=>request()->get('entity_type'),
            'year_end'=>request()->get('year_end'),
            'status'=>request()->get('status'),
            'date'=>request()->get('date'),
            'company_rg_no'=>request()->get('company_rg_no'),
            'tax_rg_no'=>request()->get('tax_rg_no'),
            'gst_no'=>request()->get('gst_no'),
            'withholding_tax_rg_no'=>request()->get('withholding_tax_rg_no'),
            'social_security_no'=>request()->get('social_security_no'),
            'anyother_no'=>request()->get('anyother_no'),
            'csd'=>request()->get('csd'),
            'mat_manager'=>request()->get('mat_manager'),
            'mat_spv'=>request()->get('mat_spv'),
            'affiliate_name'=>request()->get('affiliate_name'),
            'affiliate_email'=>request()->get('affiliate_email'),
            'affiliate_phone'=>request()->get('affiliate_phone'),
            'responsibility'=>request()->get('responsibility'),
            'responsibility2'=>request()->get('responsibility2'),
            'other_user'=>request()->get('other_user'),
            'affilate_name2'=>request()->get('affilate_name2'),
            'affilate_phone2'=>request()->get('affilate_phone2'),
            'affilate_email2'=>request()->get('affilate_email2'),
            'scope_work'=>request()->get('scope_work'),
             'created' => Auth::id(),
        ]);
    }
    $group = request()->get('client_entity_name');
        //dd($data);
         $activity = activity::create([
            
            'client_entity_name'=>request()->get('client_entity_name'),
            'client_group'=>request()->get('client_group'),
            'contect_person'=>request()->get('contect_person'),
            'contect_phone'=>request()->get('contect_phone'),
            // 'created_by'=> $user,
            'created' => Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Client Entity" .$group. "Added Successfully",
  
        ]);
        return redirect('client_entity')->with('status', 'Client Entity Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['master'] = client_entity_master::find($id);
        $data['group'] = client_group_master::all();
        $data['country'] = country::all();
        $data['frequency'] = frequency::all();
        $data['entitytype'] = entitytype::all();
         $data['mat'] = User::where('role',"5")->get();
        $data['csd'] = User::where('role',"3")->get();
        $data['spv'] = User::where('role',"6")->get();
        $data['manager'] = User::where('role',"7")->get();
        $data['notification'] = activity::latest()->limit(15)->get();
         return view('backend.masterdata.cliententity.edit',$data);
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
        $data = client_entity_master::find($id);
        $data->client_group = $request->input('client_group');
            $data->client_entity_name = $request->input('client_entity_name');
            $data->country = $request->input('country');
            $data->entity_type = $request->input('entity_type');
            $data->year_end = $request->input('year_end');
            $data->status = $request->input('status');
            $data->date = $request->input('date');
            $data->company_rg_no = $request->input('company_rg_no');
            $data->tax_rg_no = $request->input('tax_rg_no');
            $data->gst_no = $request->input('gst_no');
            $data->withholding_tax_rg_no = $request->input('withholding_tax_rg_no');
            $data->social_security_no = $request->input('social_security_no');
            $data->anyother_no = $request->input('anyother_no');
            $data->csd = $request->input('csd');
            $data->mat_manager = $request->input('mat_manager');
            $data->mat_spv = $request->input('mat_spv');
            $data->affiliate_name = $request->input('affiliate_name');
            $data->affiliate_email = $request->input('affiliate_email');
            $data->affiliate_phone = $request->input('affiliate_phone');
            $data->affilate_name2 = $request->input('affilate_name2');
            $data->affilate_phone2 = $request->input('affilate_phone2');
            $data->affilate_email2 = $request->input('affilate_email2');
            $data->other_user = $request->input('other_user');
            $data->scope_work = $request->input('scope_work');
            $data->responsibility = $request->input('responsibility');
            $data->updated = $request->input('updated');
            $data->update();
            
             $group = $request->input('client_entity_name');
         $activitylog = [
            
            'client_entity_name'=>request()->get('client_entity_name'),
            'client_group'=>request()->get('client_group'),
            'contect_person'=>request()->get('contect_person'),
            'contect_phone'=>request()->get('contect_phone'),
            // 'created_by'=> $user,
            'created' => Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Client Entity" .$group. "Updated Successfully",
  
        ];
        
        DB::table('activities')->insert($activitylog);
        return redirect('client_entity')->with('status', 'Client Entity Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         /**$activitylog = [
            
            'client_group'=>request()->get('client_group'),
            'contect_person'=>request()->get('contect_person'),
            'contect_phone'=>request()->get('contect_phone'),
            // 'created_by'=> $user,
            'created' => Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Client Entity Deleted Successfully",
  
        ];
        
        DB::table('activities')->insert($activitylog); **/
        
        $data = client_entity_master::find($id);
        $data->Delete();
        return redirect('client_entity')->with('status', 'Client Entity Deleted Successfully');
    }

    public function view(Request $request,$id,$id2)
    {

        // dd($id);

        //$candidates = client_entity_master::where('client_entity_masters.entity_type',$request->entity_type)->join('country_compliance__masters', 'country_compliance__masters.entity_type', '=', 'client_entity_masters.entity_type')->Select('country_compliance__masters.*')->get();
        //$candidates = client_entity_master::where('entity_type',$request->entity_type)->first();

       //$data['candidate'] = client_entity_master::find($candidates)->with($id);

        $data['entity'] = client_entity_master::where('client_entity_masters.entity_type',$request->entity_type)->join('country_compliance__masters', 'country_compliance__masters.entity_type', '=', 'client_entity_masters.entity_type')->get();
 
        $data['check'] = manage_complience_information::where('entity_type', '=', $id)->get();

       $data['group'] = client_entity_master::where('client_entity_masters.entity_type',$request->entity_type)->join('country_compliance__masters', 'country_compliance__masters.entity_type', '=', 'client_entity_masters.entity_type')->Select('client_entity_masters.*')->join('manage_complience_informations', 'manage_complience_informations.entity_type', '=', 'country_compliance__masters.entity_type')->Select('manage_complience_informations.status')->first();

       //$data['datastore'] = client_entity_master::where('client_entity_masters.id',$request->)->join('manage_complience_informations', 'manage_complience_informations.entity_type', '=', 'client_entity_masters.entity_type')->Select('manage_complience_informations.status,')->first();
//dd($data['datastore']);

    //    $data['datastore'] = manage_complience_information::where('manage_complience_informations.entity_type',$request->entity_type)->join('country_compliance__masters', 'country_compliance__masters.entity_type', '=', 'manage_complience_informations.entity_type')->Select('manage_complience_informations.*','country_compliance__masters.id')->first();

        $datas3= client_entity_master::find($id2);

        $data['notification'] = activity::latest()->limit(15)->get();


        //$data = client_entity_master::where('client_entity_masters.entity_type',$request->entity_type)->orWhere('client_entity_masters.country',$request->country)->join('country_compliance__masters', 'country_compliance__masters.entity_type', '=', 'client_entity_masters.entity_type')->join('country_compliance__masters','country_compliance__masters.country', '=', 'client_entity_masters.country')->Select('client_entity_masters.*','country_compliance__masters.*')->get();
        //$data = client_entity_master::where('client_entity_masters.entity_type',$request->entity_type)->join('country_compliance__masters', 'country_compliance__masters.entity_type', '=', 'client_entity_masters.entity_type')->where('country_compliance__masters.country',$request->country)->Select('country_compliance__masters.*','client_entity_masters.*')->get();
        //dd($data);


        return view('backend.masterdata.cliententity.view',['datas3' => $datas3],$data);
    }


    


    public function informationstore(Request $request)
    {
        $input = array(
           'frequency' => $request->frequency,
            'entity_type' => $request->entity_type,
            'entity_id' => $request->entity_id,
            'due_date' => $request->due_date,
            // 'country_compliance_id' => $request->country_compliance_id, 
            
            'country_compliance_id' => 0, 

            'complaince_name' => $request->complaince_name,
             'periodend' => $request->periodend,
              'form' => $request->form,
              'notes' => $request->notes,
            'status' => 1,
            'group_name' =>$request->group_name,
            'country' => $request->country,
             'csd' => $request->csd,
              'mat_spv' => $request->mat_spv,
               'mat_manager' => $request->mat_manager,
               'created_by' =>  Auth::id(),
        );
        
        
       
        manage_complience_information::create($input);
        
        $activity = activity::create([
            
            
            // 'created_by'=> $user,
            'created' => Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Country Complaince  Added Successfully",
  
        ]);
        
        return redirect()->back()->with('status', 'Manage Compliences Added Successfully');;
}


    public function edit1($id)
    {
        $data['editinfo'] = manage_complience_information::find($id);
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.masterdata.cliententity.editinfo',$data);

    }

     public function update1(Request $request, $id)
    {
        $data = manage_complience_information::find($id);
        $data->extended_date = $request->input('extended_date');
            $data->complation_date = $request->input('complation_date');
            $data->completion_delay = $request->input('completion_delay');
            $data->due_date = $request->input('due_date');
            $data->status = $request->input('status');
            // $data->updated_by = $request->input('updated_by');

            if ($request->hasFile('attacment')) 
        {
            $destination_path = 'public/entity/Attchment'.$data->attacment;
            $attacment = $request->file('attacment');
            $attacmentname = $attacment->getClientOriginalName();
            $path = $request->file('attacment')->storeAs($destination_path,$attacmentname);

            $data['attacment'] = $attacmentname;
        }
        $activitylog = [
            
            
            // 'created_by'=> $user,
            'created' => Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Complience Manage  Updated Successfully",
  
        ];
        DB::table('activities')->insert($activitylog); 
        
       $data->updated_by = Auth::id();

            $data->update();
            return redirect('dashboad');
    }

    public function createentity()
    {
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.masterdata.cliententity.csv.add',$data);
    }

    public function importentity(Request $request)
    {
        $request->validate([
            'file' => 'required',
         
        ]);


        $fileName = time().'.'.request()->file->extension();  
    
        request()->file->move(public_path('entity'), $fileName);


        $file = public_path('entity/'.$fileName);

        $content = file_get_contents('entity/'.$fileName); 
        $lines = array_map("rtrim", explode("\n", $content));


        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);
      
        if('csv' == $extension) {     
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
          } else if('xls' == $extension) {     
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
          } else     
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

        // $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $spreadsheet = $reader->load($file);
        $d=$spreadsheet->getSheet(0)->toArray();

         $datas = array_slice($d, 1);
             foreach($datas as $firstarray)
             {
                $exist = client_entity_master::where('client_entity_name', $firstarray[1])->first();

                if(!$exist) 
                {
                $cliententity = new client_entity_master();

                $checkgroup = client_group_master::where('client_group',  $firstarray[0])->get();
                //dd($firstarray[0]);
                $cliententity->client_group = $checkgroup[0]->id;

                $cliententity->client_entity_name = $firstarray[1];

                $check = country::where('country',  $firstarray[2])->get();
                //dd($firstarray[2]);
                $cliententity->country = $check[0]->id;
               
                $checkentity = entitytype::where('type',  $firstarray[3])->get();
                $cliententity->entity_type = $checkentity[0]->id;

                $cliententity->year_end = $firstarray[4];
                $cliententity->date = $firstarray[5];

                $checkcsd = User::where('name',  $firstarray[6])->get();
                $cliententity->csd = $checkcsd[0]->id;

                $checkmat = User::where('name',  $firstarray[7])->get();
                $cliententity->mat_manager = $checkmat[0]->id;

                $mat_spv = User::where('name',  $firstarray[8])->get();
                $cliententity->mat_spv = $mat_spv[0]->id;

                $cliententity->affiliate_name = $firstarray[9];
                $cliententity->affiliate_email = $firstarray[10];
                $cliententity->affiliate_phone = $firstarray[11];
                $cliententity->responsibility = $firstarray[12];
                $cliententity->created = Auth::user()->id;
                $cliententity->save();
                 
            return redirect('client_entity')->with('status', 'Excel File Uploaded Successfully'); 
        }
        if($exist)
        {
            return back()->with('status', 'This Client Entity name Already Exist');
        }
        }

       $group = request()->get('client_entity_name');
        //dd($data);
         $activity = activity::create([
            
            'client_entity_name'=>request()->get('client_entity_name'),
            'client_group'=>request()->get('client_group'),
            'contect_person'=>request()->get('contect_person'),
            'contect_phone'=>request()->get('contect_phone'),
            // 'created_by'=> $user,
            'created' => Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Client Entity" .$group. "Added Successfully",
  
        ]);
    }

    public function expertentity()
    {
        $headers = [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
        ,   'Content-type'        => 'text/xlsx'
        ,   'Content-Disposition' => 'attachment; filename=entity.xlsx'
        ,   'Expires'             => '0'
        ,   'Pragma'              => 'public'
    ];

    $lists = client_entity_master::all();

    //dd($lists);

    foreach ($lists as $key=> $list) {
        $check = User::where('id', $list->created)->first();
        $checkupdate = User::where('id', $list->updated)->first();
        $checkcsd = role::where('id', $list->csd)->first();
        $checkmat = role::where('id', $list->mat_manager)->first();
        $checkspv = role::where('id', $list->mat_spv)->first();
        $checkgrp = client_group_master::where('id', $list->client_group)->first();
        $checkentity = entitytype::where('id', $list->entity_type)->first();
        $checkcountry = country::where('id', $list->country)->first();
    //dd($check);
    $data[] = array(
       
        
        "client_group" => empty($checkgrp->client_group)? "" :$checkgrp->client_group,
        "client_entity_name" => empty($list->client_entity_name)? "" : $list->client_entity_name,
        "year_end" => empty($list->year_end) ? "" : $list->year_end,
        "date" => empty($list->date) ? "" : $list->date,
        "entity_type" => empty($checkentity->type) ? "" : $checkentity->type,
        "country" => empty($checkcountry->country) ? "" : $checkcountry->country,
        "company_rg_no" => empty($list->company_rg_no) ? "" : $list->company_rg_no,
        "tax_rg_no" => empty($list->tax_rg_no)? "" : $list->tax_rg_no,
        "gst_no" => empty($list->gst_no) ? "" : $list->gst_no, 
         "withholding_tax_rg_no" => empty($list->withholding_tax_rg_no) ? "" : $list->withholding_tax_rg_no, 
          "social_security_no" => empty($list->social_security_no) ? "" : $list->social_security_no, 
           "anyother_no" => empty($list->anyother_no) ? "" : $list->anyother_no,
           "csd" => empty($checkcsd->role) ? "" : $checkcsd->role, 
           "mat_manager" => empty($checkmat->role) ? "" : $checkmat->role, 
           "mat_spv" => empty($checkspv->role) ? "" : $checkspv->role, 
           "affiliate_name" => empty($list->affiliate_name) ? "" : $list->affiliate_name, 
           "affiliate_email" => empty($list->affiliate_email) ? "" : $list->affiliate_email, 
           "affiliate_phone" => empty($list->affiliate_phone) ? "" : $list->affiliate_phone, 
           "responsibility" => empty($list->responsibility) ? "" : $list->responsibility, 

            "created" => empty($check->name)? "" :$check->name,
             "updated" => empty($checkupdate->name)? "" :$checkupdate->name,
       
      );
    
    }



    header("Content-Disposition: attachment; filename=\"entity.xls\"");
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
    
    public function deletemanage($id)
    {
        $activitylog = [
            
            
            // 'created_by'=> $user,
            'created' => Auth::id(),
            'date' => date('Y-m-d'),
            'time' => date('H:i:s'),
            'activity' => "Complience Manage  Deleted Successfully",
  
        ];
        DB::table('activities')->insert($activitylog); 
        $data = manage_complience_information::find($id);
        $data->delete();
        return redirect()->back();
    }

    /** public function updatestatus(Request $request,$id,$id2)
    {
        $entity_type = $request->entity_type;
        $id = $request->

        $data = 
        return view('backend.masterdata.cliententity.view',['datas3' => $datas3],$data);
    }**/


    public function cancelentity(Request $request, $country_compliance_id)
    {

        // dd($country_compliance_id);

          $id = $country_compliance_id;

          $check = manage_complience_information::find($id);

        //   dd($check);

        if($check){

            $status = manage_complience_information::find($id);


            if($status->status == 0){

                $status->status = 1;

            } else {

                $status->status = 0;
            }

            $status->update();

    
        } 

    
      

        // $data = manage_complience_information::where('country_compliance_id',$country_compliance_id)->first();
        // $data->status = $request->input('status');
        // //dd($data);
        // $data->save();
        return redirect()->back();
    }

}
