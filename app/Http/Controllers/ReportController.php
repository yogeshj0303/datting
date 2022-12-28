<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use DB;

class ReportController extends Controller

{

  /**

   * Create a new controller instance.

   *

   * @return void

   */

  public function __construct()
  {

    // $this->middleware('auth');
  }

  public function index()

  {
      $data = DB::table('reports')
      ->leftJoin('clients','clients.id','=','reports.user_id')
      ->select('clients.*','reports.*')
 
      ->get();
   
    return view('admin.report.index',compact('data'));

  }
  public function status(Request $request, $status, $id)
    {
        $model = Report::find($id);
        $model->status = $status;
        $model->save();

        return redirect()->back()->with('msg', 'Payment status updated');
    }


}

