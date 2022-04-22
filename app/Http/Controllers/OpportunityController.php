<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use App\Models\Requested;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $opportunities = Opportunity::with('company')->latest()->paginate(3);
        $request = Requested::all()->where('user_id',auth()->user()->id)->whereIn('status', [0, 2, 4,5])->toArray();
        return view('users.dash', compact('opportunities','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create_opportunity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $file = $request->photo;
        $new_file = time() . $file->getClientOriginalName();
        $file->move('assets/img/opportunities', $new_file);
        $pathOf = 'assets/img/opportunities/' . $new_file;
        $opportunity = new Opportunity();
        $opportunity->user_id     = auth()->user()->id;
        $opportunity->starting_date = $request->starting_date;
        $opportunity->details = $request->details;
        $opportunity->name = $request->name;
        $opportunity->major = strtolower($request->major);
        $opportunity->supervisor_name = $request->supervisor_name;
        $opportunity->supervisor_email = $request->supervisor_email;
        $opportunity->supervisor_phone = $request->supervisor_phone;
        $opportunity->seats = $request->seats;
        $opportunity->photo = $pathOf;
        $opportunity->save();
        Alert::success('Opportunity', 'The Opportunity Added Successfully');
        return redirect()->route('show_opp', auth()->user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $opportunities = Opportunity::all()->where('user_id', $id);
        return view('companies.opportunities', compact('opportunities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Opportunity $opportunity
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $opportunity = Opportunity::find($id);
        return \view('companies.edit_opportunity', compact('opportunity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {


        $opportunity =  Opportunity::find($id);
        $opportunity->starting_date = $request->starting_date;
        $opportunity->details = $request->details;
        $opportunity->name = $request->name;
        $opportunity->major = $request->major;
        $opportunity->supervisor_name = $request->supervisor_name;
        $opportunity->supervisor_email = $request->supervisor_email;
        $opportunity->supervisor_phone = $request->supervisor_phone;
        $opportunity->seats = $request->seats;
        $opportunity->status = $request->status;
        if ($request->hasFile('photo')) {
            $file = $request->photo;
            $new_file = time() . $file->getClientOriginalName();
            $file->move('assets/img/opportunities', $new_file);
            $pathOf = 'assets/img/opportunities/' . $new_file;
            $opportunity->photo = $pathOf;
        }
        $opportunity->save();
        Alert::success('Opportunity', 'The Opportunity edited Successfully');
        return redirect()->route('show_opp', auth()->user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @uses  \App\Models\Request
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $req = DB::table('requests')->where('opportunity_id', $id)->get();
        if (count($req) > 0) {
            Alert::error('Opportunity', 'You Cant Delete This Opportunity');
            return back();
        }
        $opp = Opportunity::find($id);
        $opp->delete();
        Alert::error('Opportunity', 'You  Delete This Opportunity');
        return back();
    }
    public function showToUser($id)
    {
        $opportunities = Opportunity::with('company')->where('id',$id)->get();
        Alert::success('Request', 'The Request sent Successfully , stay near to know the result after admin and company review');

        return view('users.dash', compact('opportunities'));
    }
    public function filterOpportunities (Request $request){
        if($request->filter=='all'){

            return redirect('showAllOpp');
        }
        $search = $request->filter;
        $opportunities = Opportunity::with('company')->where('major', 'LIKE', "%{$search}%")->paginate(3);
        return view('users.dash', compact('opportunities'));
    }
}
