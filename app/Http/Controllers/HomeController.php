<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //home poppulate with date 
    public function home(){

        $userType= Auth::user()->userType;
        $userId=Auth::user()->id;
        $id=0;
        if($userType=="2"){
            //this is service provider related stuffs
            $selectedSetData = DB::table('servicerequest')
            ->join('servicetype', 'servicerequest.requestID', '=', 'servicetype.id')
            ->join('users', 'servicerequest.user_id', '=', 'users.id')
            ->select('servicerequest.*', 'servicetype.serviceCode','users.name')
            ->where('status', [2])
            ->where('accept_by', $userId)
            ->get();
        }else{
            //this is senior related 
            $selectedSetData = DB::table('servicerequest')
            ->join('servicetype', 'servicerequest.requestID', '=', 'servicetype.id')
            ->join('users', 'servicerequest.user_id', '=', 'users.id')
            ->select('servicerequest.*', 'servicetype.serviceCode','users.name')
            ->whereIn('status', [1, 2, 3])
            ->get();
        }
        return view("home",compact('selectedSetData','id'));
    }

    //return the view with data 
    public function serviceRequestView(){
        $serviceTypes = DB::table('servicetype')->get();
        return view("service_request",compact('serviceTypes'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function serviceRequestSubmit(Request $request)
    {
        /*
              "stype" => "2"
      "address" => "Jalan 15 some shit"
      "when_come" => "2018-10-12"
      "time" => "14:12"
      "note" => "This is argent"
      */
        $reqDate =Carbon::now()->format('Y-m-d H:i:s');
        $userId=Auth::user()->id;
        $stype=$request->stype;
        $note=$request->note;
        DB::table('servicerequest')->insert(
            ['requestID' => $stype, 'requestDate' => $reqDate,
            'notes' => $note, 
            'status' => 1,
            'user_id' =>  $userId, 
            'time_completion'=>$request->time,
            'location'=>$request->address,
            'when_date'=>$request->when_come
            ]
        );
        return redirect("/home")->with('success', 'Your Request has been saved successfully!');
    }

    //make view request 
    public function viewRequests(){
        $requestsData = DB::table('servicerequest')
            ->join('servicetype', 'servicerequest.requestID', '=', 'servicetype.id')
            ->join('users', 'servicerequest.user_id', '=', 'users.id')
            ->select('servicerequest.*', 'servicetype.serviceCode','users.name')
            ->whereIn('servicerequest.status', [4])
            ->get();
        return view("view_service_re",compact('requestsData'));
    }

    //review 
    public function showReview($id){
        $id=$id;
        //the request service being reviewd
        return view("s_review",compact('id'));
    }

    //submited review 
    public function submitReview(Request $request){
        $reqDate =Carbon::now()->format('Y-m-d H:i:s');
        $userId=Auth::user()->id;
        $requested_id = $request->review_id;
        $comment = $request->comment;
        $requested_id = $request->review_id;
        $rating = $request->rating;
        $review_by=$request->review_by;
        DB::table('review')->insert(
            ['date' => $reqDate, 'rating' => $rating,
            'comment' => $comment, 
            'user_id' => $userId,
            'status' => 1, 
            'request_id' =>$requested_id , 
            'review_user'=>$review_by,
            ]
        );
        return redirect("/viewRequests")->with('success', 'Your Review has been saved successfully!');
    }

    //for user view request modal 
    function getUserRequesData($id){
        $requestsData = DB::table('servicerequest')
        ->join('servicetype', 'servicerequest.requestID', '=', 'servicetype.id')
        ->select('servicerequest.*', 'servicetype.serviceCode')
        ->where('servicerequest.id',$id)
        ->get()->toJson();
        return $requestsData;
    }


    //for review modal
    function getDataReview($id){
        $requestsData = DB::table('servicerequest')
        ->join('servicetype', 'servicerequest.requestID', '=', 'servicetype.id')
        ->join('users', 'servicerequest.accept_by', '=', 'users.id')
        ->select('servicerequest.*', 'servicetype.serviceCode','users.name')
        ->where('servicerequest.id',$id)
        ->get()->toJson();
        return $requestsData;
    }

    //Accept Request view
    function acceptRequestView(){
        $userType= Auth::user()->userType;
        $userId=Auth::user()->id;
        $id=0;
        //this is service provider related stuffs
        $selectedSetData = DB::table('servicerequest')
        ->join('servicetype', 'servicerequest.requestID', '=', 'servicetype.id')
        ->join('users', 'servicerequest.user_id', '=', 'users.id')
        ->select('servicerequest.*', 'servicetype.serviceCode','users.name')
        ->whereIn('status', [1,3])
        ->get();
        return view("accept_request",compact('selectedSetData','id'));
    }

    //submitRequest request 
    public function submitRequest(Request $request){
        $userId=Auth::user()->id;
        $request_id =$request->request_id;
        DB::table('servicerequest')
        ->where('id', $request_id)
        ->update(['accept_by' => $userId,'status' => 2]);
        return redirect("/acceptrequest")->with('success', 'Your Request has been accepted successfully!');
    }
    /**
     * Registration function
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        echo "for registration view";

    }
}
