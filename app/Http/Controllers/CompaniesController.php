<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $companies = User::all()->where('role','company');
        return \view('admin.companies.companies',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('companies.create_company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|Factory|View
     */
    public function store(Request $request)
    {
        $file = $request->photo;
        $new_file = time().$file->getClientOriginalName();
        $file->move('assets/img/companies', $new_file);
        $pathOf = 'assets/img/companies/'.$new_file;
        $company = new User();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->photo =$pathOf ;
        $company->password = Hash::make($request->password);
        $company->role = 'company';
        $company->major = $request->major;
        $company->location = $request->location;
        $company->user_id = $request->user_id;
        $company->description = $request->description;
        $company->website = $request->website;
        $company->phone = $request->phone;
        $company->save();
        return view ('companies.dash');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
