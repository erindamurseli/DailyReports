<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaportetDitore;

class RaportetDitoreController extends Controller
{



    public function index()
    {
        $raportet = RaportetDitore::all();

        return $raportet;
        

    }

    
    // public function comment_aw_zo_task(Request $request)
    // {
    //     DB::connection('vendo')->table('confirmed_aw_zo_tasks')->where('aw_nr', $request->aw)->where('task', $request->task)->update([
    //         'comment' => $request->html,
    //     ]);
    // }

    

    // public function nr_obcy_home()
    // {
        
    //     $data = DB::connection('vendo')->select("SELECT *, ROW_NUMBER () OVER (ORDER BY id )  from ko_pz ");

    //     return view('aw_confirm.nr_obcy_home', [
    //         'data' => $data,
    //     ]);
    // }



    // public function RDPrioriteti(Request $request)
    // {

        

    //   $RDPritoriteti = RaportetDitore::where('Prioriteti' = $request->Prioriteti)->get();

    //   return $RDPritoriteti;

    // }





    public function isolate($raportet)
    {
        // $data = trim($data);
        //  $data = $this->strip_tags_content($data);
        // $data = htmlspecialchars($data);
        // $data = strip_tags($data);
    
        
       
        //     return $raportet;
        // strip_tags(htmlspecialchars_decode($raportet));
        // regex (/(<([^>]+)>)/ig);


        
    
        // $raportet =preg_replace('/\s\s+/', ' ', $raportet);
        // $data = strtolower($data);
        // return $raportet;
    }
        // public static function fixStr($rvalue)
        // {
        //     $rvalue = empty($rvalue) && !is_numeric($rvalue) ? NULL : trim(strip_tags($rvalue));
        //     return $rvalue;
        // }
    

   
        





}
