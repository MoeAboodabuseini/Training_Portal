<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Agreed;
use App\Models\Opportunity;
use App\Models\Requested;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
            $requests = DB::table('requests')->where('company_id',$id)->where('status',2)->get();
            return view('companies.requests',compact('requests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Requested $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $req = Requested::find($id);
        $req->status = $request->status;
        $req->save();
        if($request->status==4){
            $agreed = new Agreed();
            $agreed->user_id = $req->user_id;
            $agreed->opportunity_id = $req->opportunity_id;
            $agreed->company_id = $req->company_id;
            $agreed->finished_at = Carbon::now()->addMonths(2);
            $agreed->admin_id = 1;
            $agreed->supervisor_id = 1;
            $agreed->save();
        }
         return redirect('show/requests/{auth()->user()->id}');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function showAccepted(){
        $requests = DB::table('requests')->where('company_id',auth()->user()->id)->where('status',4)->get();
        return view('companies.requests',compact('requests'));
    }
    public function showRejected(){
        $requests = DB::table('requests')->where('company_id',auth()->user()->id)->where('status',3)->get();
        return view('companies.requests',compact('requests'));
    }
    public function clickRequest($id)
    {
        $opportunity = Opportunity::with('company')->where('id',$id)->get()->first();
        $request = new Requested();
        $request->user_id = auth()->user()->id;
        $request->opportunity_id = $opportunity->id;
        $request->company_id = $opportunity->company->id;
        $request->status = 0;
        $request->save();
        session('alert','yes');
        return \view('users.note');
    }
    public function showUserRequest(){
        $id = auth()->user()->id;
        $inProcess = Requested::all()->where('user_id',$id)->whereIn('status', [0, 2]);
        $rejected = Requested::all()->where('user_id',$id)->whereIn('status',[1,3]);
        $accepted = Requested::all()->where('user_id',$id)->where('status',4);
        return \view('users.requests',compact('inProcess','rejected','accepted'));
    }
}
