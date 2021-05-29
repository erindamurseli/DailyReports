<?php

use App\Exports\v;
use App\Exports\KNP;
use App\Exports\Kryer;
use App\Exports\LlDoc;
use App\Exports\Sektori;
use App\Exports\Titulli;
use App\Exports\LlojiDet;
use App\Exports\Prog_adm;
use App\Exports\Prog_PNT;
use App\Exports\DataKryer;
use App\Exports\Detyruesi;
use App\Exports\RaportiRD;
use App\Exports\iDetyruari;
use App\Exports\DataCaktuar;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('home');
// });

// Auth::routes();
Route::get('/download', function(){

    return Excel::download(new UsersExport, 'Excel.xlsx');

});





// Route::get('/test/{Prioriteti}', function(Request $prioriteti){
    
    Route::get('/test/{prioriteti}', function (Request $request){
    
     return Excel::download(new RaportiRD($request->prioriteti), 'Excel.xlsx');

 
});

Route::get('/lldoc/{LlDoc}', function (Request $request){
    
    return Excel::download(new LlDoc($request->LlDoc), 'Excel.xlsx');


});




Route::get('/llojidet/{LlojiDet}', function (Request $request){
    
    return Excel::download(new LlojiDet($request->LlojiDet), 'Excel.xlsx');


});



Route::get('/detyruesi/{Detyruesi}', function (Request $request){
    
    return Excel::download(new Detyruesi($request->Detyruesi), 'Excel.xlsx');


});



Route::get('/idetyruari/{iDetyruari}', function (Request $request){
    
    return Excel::download(new iDetyruari($request->iDetyruari), 'Excel.xlsx');


});



Route::get('/knp/{KNP}', function (Request $request){
    
    return Excel::download(new KNP($request->KNP), 'Excel.xlsx');


});


Route::get('/titulli/{Titulli}', function (Request $request){
    
    return Excel::download(new Titulli($request->Titulli), 'Excel.xlsx');


});


Route::get('/v/{v}', function (Request $request){
    
    return Excel::download(new v($request->v), 'Excel.xlsx');


});



Route::get('/prog_pnt/{Prog_PNT}', function (Request $request){
    
    return Excel::download(new Prog_PNT($request->Prog_PNT), 'Excel.xlsx');


});

Route::get('/prog_adm/{Prog_adm}', function (Request $request){
    
    return Excel::download(new Prog_adm($request->Prog_adm), 'Excel.xlsx');


});


Route::get('/kryer/{Kryer}', function (Request $request){
    
    return Excel::download(new Kryer($request->Kryer), 'Excel.xlsx');


});


Route::get('/datakryer/{DataKryer}', function (Request $request){
    
    return Excel::download(new DataKryer($request->DataKryer), 'Excel.xlsx');


});


Route::get('/datacaktuar/{DataCaktuar}', function (Request $request){
    
    return Excel::download(new DataCaktuar($request->DataCaktuar), 'Excel.xlsx');


});

Route::get('/sektori/{Sektori}', function (Request $request){
    
    return Excel::download(new Sektori($request->Sektori), 'Excel.xlsx');


});











Route::get('/{any}', [HomeController::class, 'index'])->where('any','.*');

// Route::get('/', function(){
//     return View('welcome');

// });

