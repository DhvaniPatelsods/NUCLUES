<?php
namespace App\Http\Controllers\report;
use App\Models\client_entity_master;
use App\Models\manage_complience_information;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Excel;
use App\Exports\clientgroupreport;
use App\Exports\cliententityreport;
use App\Exports\overdue1report;
use App\Exports\overdue2report;
use App\Exports\overdue3report;
use App\Exports\overdue4report;
use App\Exports\upcomingentityreport;
use App\Exports\upcominggroupreport;
use Carbon\Carbon;
use App\Models\activity;
class reportscontroller extends Controller
{
    
    public function clientgroup()
    {
        $data['group'] = manage_complience_information::where('status',"1")->get();
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.report.clientgroup',$data);
    }

    public function cliententity()
    {
       $data['cliententity'] = manage_complience_information::where('status',"1")->get();
       $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.report.cliententity',$data);
    }

    public function upcominggroup()
    {
        //$data['day7'] = Carbon::now()->addDays(7);
        //$data['day15'] = Carbon::now()->addDays(15);
        //$data['day30'] = Carbon::now()->addDays(30);
        //$data['day3'] = Carbon::now()->addMonth(3);
        //$data['day6'] = Carbon::now()->addMonth(6);
        $data['upcominggroup'] = manage_complience_information::where('status',"1")->get();
        $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.report.upcominggroup',$data);
    }

    public function upcomingentity()
    {
       $data['upcomingentity'] = manage_complience_information::where('status',"1")->get();
       $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.report.upcomingentity',$data);
    }

    public function overdue1()
    {
       $data['overdue1'] = manage_complience_information::where('status',"1")->get();
       $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.report.overdue1',$data);
    }

    public function overdue2()
    {
       $data['overdue2'] = manage_complience_information::where('status',"1")->get();
       $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.report.overdue2',$data);
    }

    public function overdue3()
    {
       $data['overdue3'] = manage_complience_information::where('status',"1")->get();
       $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.report.overdue3',$data);
    }

    public function overdue4()
    {
       $data['overdue4'] = manage_complience_information::where('status',"1")->get();
       $data['notification'] = activity::latest()->limit(15)->get();
        return view('backend.report.overdue4',$data);
    }

    public function searchreportgroup(Request $request)
    {
        /**$entity_type = $request->entity_type;
        $group = $request->group_name;
        
        //$data['country123'] = country::all();
        //$data['type'] = entitytype::all();
        $data = DB::table('manage_complience_informations')
                  ->where('entity_type', $entity_type)
                  ->Orwhere('group_name', $group)
                  ->get();**/
//$data['notification'] = activity::latest()->limit(15)->get();
                  $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data= manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
       
        
        return view('backend.report.clientgroup',compact('data'));
    }

    public function expertrepoergroup(Request $request)
    {
      /**$data = app(manage_complience_information::class)->newQuery();

        if ( request()->has('search') && !empty(request()->get('search')) ) {
            $search = request()->query('search');
            $data->where(function ($query) use($search) {
                $query->whereBetween('due_date', 'LIKE', "%{$search}%");
            });
        }
          return Excel::download(new Expertreportgroup($data), 'reportgroup.xlsx');**/

          return Excel::download(new clientgroupreport, 'reportgroup.xlsx');
    }

    /**public function searchupcomingentity(Request $request)
    {
        //$month = Carbon::now()->submonth(1)
        $data['day7'] = Carbon::now()->addDays(7);
        $data['day15'] = Carbon::now()->addDays(15);
        $data['day30'] = Carbon::now()->addDays(30);
        $data['day3'] = Carbon::now()->addMonth(3);
        $data['day6'] = Carbon::now()->addMonth(6);

        $day7 = Carbon::now()->addDays(7);
        $day15 = Carbon::now()->addDays(15);
        $day30 = Carbon::now()->addDays(30);
        $day3 = Carbon::now()->addMonth(3);
        $day6 = Carbon::now()->addMonth(6);
        //print_r($day6);
        //exit();
        $data['upcominggroup'] = manage_complience_information::whereDate('due_date','>=', $day7)->
                                    whereDate('due_date', '<=', $day15)
                                    ->whereDate('due_date','<=', $day30)
                                    ->where('due_date',">", $day3)
                                    ->where('due_date',">", $day6)->get();
                                    //print_r($daymo12);
                                    //exit();                               

        return view('backend.report.upcominggroup',$data);
    }**/

    public function searchupcoming(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['upcominggroup'] = manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
        return view('backend.report.upcominggroup',$data);
    }

    public function searchupcomingentity(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['upcomingentity'] = manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
        return view('backend.report.upcomingentity',$data);
    }

    public function searchoverdue1(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['overdue1'] = manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
        return view('backend.report.overdue1',$data);
    }

    public function searchoverdue2(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['overdue2'] = manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
        return view('backend.report.overdue2',$data);
    }

    public function searchoverdue3(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['overdue3'] = manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
        return view('backend.report.overdue3',$data);
    }

    public function searchoverdue4(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['overdue4'] = manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
        return view('backend.report.overdue4',$data);
    }

    public function searchcliententity(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['cliententity'] = manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
        return view('backend.report.cliententity',$data);
    }

     public function searchclientgroup(Request $request)
    {
        $fromto = $request->fromDate;
        $todate = $request->toDate;
        $data['notification'] = activity::latest()->limit(15)->get();
        $data['group'] = manage_complience_information::whereBetween('due_date',[$fromto,$todate])->get();
        return view('backend.report.clientgroup',$data);
    }

    public function expertreportentity(Request $request)
    {
        return Excel::download(new cliententityreport, 'reportentity.xlsx');
    }

     public function exportoverdue1(Request $request)
    {
        return Excel::download(new overdue1report, 'reportoverdue1.xlsx');
    }

     public function exportoverdue2(Request $request)
    {
        return Excel::download(new overdue2report, 'reportoverdue2.xlsx');
    }

     public function exportoverdue3(Request $request)
    {
        return Excel::download(new overdue3report, 'reportoverdue3.xlsx');
    }

     public function exportoverdue4(Request $request)
    {
        return Excel::download(new overdue4report, 'reportoverdue4.xlsx');
    }

     public function exportupcominggroup(Request $request)
    {
        return Excel::download(new upcominggroupreport, 'reportupcominggroup.xlsx');
    }

    public function exportupcomingentity(Request $request)
    {
        return Excel::download(new upcomingentityreport, 'reportupcomingentity.xlsx');
    }
}
