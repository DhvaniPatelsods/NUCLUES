<?php
use App\Http\Controllers\masterdata_management\entity_typecontroller;
use App\Http\Controllers\masterdata_management\client_entitycontroller;
use App\Http\Controllers\masterdata_management\client_Groupcontroller;
use App\Http\Controllers\masterdata_management\country_compliencecontroller;
use App\Http\Controllers\report\reportscontroller;
use App\Http\Controllers\user\usercontroller;
use App\Http\Controllers\user\rolecontroller;
use App\Http\Controllers\backup\backupcontroller;
use App\Http\Controllers\activity\activitycontroller;
use App\Http\Controllers\report\ticketcontroller;
use App\Models\role_permission;
use App\Http\Controllers\homecontroller;
use App\Models\manage_complience_information;
use Carbon\Carbon;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   Route::get('otp',[homecontroller::class,'otp']);
   Route::get('dashboad',[homecontroller::class,'dashboad'])->name('dashboad');

   Route::resource('entity_type',entity_typecontroller::class);
   Route::resource('client_entity',client_entitycontroller::class);
   Route::resource('client_group',client_Groupcontroller::class);
   Route::resource('country_complience',country_compliencecontroller::class);
   Route::resource('user',usercontroller::class);
   Route::resource('role',rolecontroller::class);
   Route::resource('backup',backupcontroller::class);
   Route::resource('activity',activitycontroller::class);
   Route::resource('ticket',ticketcontroller::class);
   Route::get('view/{entity_type}/{id}',[client_entitycontroller::class,'view']);
   Route::get('/activecountry/{id}',[country_compliencecontroller::class,'activecomplience']);
   Route::get('/inactivecountry/{id}',[country_compliencecontroller::class,'inactivecomplience']);
   Route::get('/delete-role/{id}',[rolecontroller::class,'destroy']);
   Route::get('/delete-user/{id}',[rolecontroller::class,'destroy2']);
   Route::get('/delete-client-group/{id}',[client_Groupcontroller::class,'destroy']);
   Route::get('/delete-complience/{id}',[country_compliencecontroller::class,'destroy']);
   Route::get('/delete-entity/{id}',[client_entitycontroller::class,'destroy']);
   //Route::get('/delete-country_complience/{id}',[country_compliencecontroller::class,'destroy']);

   Route::get('/backup-entity/{entity_entity_name}/{id}',[client_entitycontroller::class,'backup'])->name('backup');

   
   Route::post('infomation/create',[client_entitycontroller::class,'informationstore'])->name('Information.store');
   Route::get('reports',[homecontroller::class,'reports']);
   Route::get('clientgroup',[reportscontroller::class,'clientgroup']);
   Route::get('viewid',[client_entitycontroller::class,'viewid']);
   Route::get('cliententity',[reportscontroller::class,'cliententity']);
   Route::get('upcominggroup',[reportscontroller::class,'upcominggroup']);
   Route::get('upcomingentity',[reportscontroller::class,'upcomingentity']);
   Route::get('overdue1',[reportscontroller::class,'overdue1']);
   Route::get('overdue2',[reportscontroller::class,'overdue2']);
   Route::get('overdue3',[reportscontroller::class,'overdue3']);
   Route::get('overdue4',[reportscontroller::class,'overdue4']);
   Route::get('/delete-ticket/{id}',[ticketcontroller::class,'destroy']);
   Route::get('searchupcoming',[reportscontroller::class,'searchupcoming']);
Route::get('searchupcomingentity',[reportscontroller::class,'searchupcomingentity']);
Route::get('searchoverdue1',[reportscontroller::class,'searchoverdue1']);
Route::get('searchoverdue2',[reportscontroller::class,'searchoverdue2']);
Route::get('searchoverdue3',[reportscontroller::class,'searchoverdue3']);
Route::get('searchoverdue4',[reportscontroller::class,'searchoverdue4']);
Route::get('searchcliententity',[reportscontroller::class,'searchcliententity']);
Route::get('searchclientgroup',[reportscontroller::class,'searchclientgroup']);
Route::get('userprofile',[homecontroller::class,'userprofile']);
Route::get('security',[homecontroller::class,'security']);
   Route::get('edit-information/{id}',[client_entitycontroller::class,'edit1'])->name('information.edit');
Route::put('/update-information/{id}',[client_entitycontroller::class,'update1'])->name('information.update');
Route::get('/delete-information/{id}',[client_entitycontroller::class,'destroy1']);
Route::get('/activities/{id}',[activitycontroller::class,'view'])->name('activities');
Route::put('/userprofileupdate/{id}',[homecontroller::class,'userprofileupdate'])->name('information.update');
Route::put('/userpassword/{id}',[homecontroller::class,'userpassword']);
Route::get('deletemanage/{id}',[client_entitycontroller::class,'deletemanage']);

Route::put('/cancelentity/{id}',[client_entitycontroller::class,'cancelentity']);
Route::get('searchactivity',[activitycontroller::class,'searchactivity']);

//import

Route::get('creategroup',[client_Groupcontroller::class,'creategroup']);
Route::get('createentity',[client_entitycontroller::class,'createentity']);
Route::get('createcompliences',[country_compliencecontroller::class,'createcompliences']);

Route::post('importgroup',[client_Groupcontroller::class,'importgroup']);
Route::post('importcompliences',[country_compliencecontroller::class,'importcompliences']);
Route::post('importentity',[client_entitycontroller::class,'importentity']);


//expert

Route::get('expertgroup',[client_Groupcontroller::class,'expertgroup']);
Route::get('expertcompliences',[country_compliencecontroller::class,'expertcompliences']);
Route::get('expertentity',[client_entitycontroller::class,'expertentity']);

//Route::get('expertrepoergroup',[reportscontroller::class,'expertrepoergroup']);
Route::get('expertrepoergroup',[reportscontroller::class,'expertrepoergroup']);
Route::get('expertreportentity',[reportscontroller::class,'expertreportentity']);
Route::get('exportoverdue1',[reportscontroller::class,'exportoverdue1']);
Route::get('exportoverdue2',[reportscontroller::class,'exportoverdue2']);
Route::get('exportoverdue3',[reportscontroller::class,'exportoverdue3']);
Route::get('exportoverdue4',[reportscontroller::class,'exportoverdue4']);
Route::get('exportupcominggroup',[reportscontroller::class,'exportupcominggroup']);
Route::get('exportupcomingentity',[reportscontroller::class,'exportupcomingentity']);
//search
Route::get('searchcountry',[country_compliencecontroller::class,'searchcountry']);
Route::get('searchreportgroup',[reportscontroller::class,'searchreportgroup']);
Route::get('selectyear',[homecontroller::class,'selectyear']);
Route::get('selectentity',[homecontroller::class,'selectentity']);

});
Route::get('userlogout',[homecontroller::class,'userlogout']);
Route::get('/',[AuthenticatedSessionController::class,"create"]);
//Route::get('sidebar',[homecontroller::class,'sidebar']);
Route::get('forgotpassword',[homecontroller::class,'forgotpassword']);
Route::get('managerole',[rolecontroller::class,'managerole']);
Route::any('managerole/{id}', [RoleController::class, 'role_permission2'])->name('admin.role_permission2');
Route::any('managerole/update/{id}', [RoleController::class, 'role_permission_update'])->name('admin.role_permission_update');

Route::post('createpermission',[rolecontroller::class,'createpermission']);


Route::any('filters', [homecontroller::class, 'filter'])->name('filter');

// Route::get('/temp2', function() {

//    $startDate = Carbon::today();
//    $endDate = Carbon::today()->addDays(7);
      
//    $criminals = manage_complience_information::whereBetween('periodend',  [$startDate, $endDate])
//    ->get();

//    return $criminals;
   
// })->name('filter');
