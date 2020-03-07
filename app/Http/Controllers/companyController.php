<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Session;
use Hash;
use App\Companies;
use Validator;
class companyController extends Controller
{
    //
    function getCompanyLoginPage()
    {
        return view('icamp19.companyPages.companyLoginPage');
    }

    function login(Request $request)
    { 
        $data = $request->all();

        $rule=array(
            'name' => 'required',
            'password' => 'required',
        );
        $validator=Validator::make($data,$rule);
        if($validator->fails())
              return Redirect::back()->withErrors($validator);
        else
        {
            $company = Companies::where('company_username',$data['name'])->first();
            if(!$company || $company->count()==0)
                return Redirect::back()->with('error','This Username  is not registered');
            else
            {
                if($company && !Hash::check($data['password'],$company->company_password))
                    return Redirect::back()->with('error','Password is incorrect');
                else
                {
                    Session::put('companyId',$data['name']);
                    if(Session::has('companyId'))
                        return Redirect::to('/company/dashboard');
                   else 
                    return Redirect::back()->with('error','This does not match with our credentials');
                }
            }
        }
        
    }

    function getCompanyDashboard()
    {
        $company = Companies::where('company_username',Session::get('companyId'))->first();
        $data = $company->candidate_list;
        
        return view('icamp19.companyPages.companyDashboardPage')->with('company',$company)->with('data',$data);
    }

    function logout()
    {
        Session::forget('companyId');
        return Redirect::to('company/login');
    }

    function downloadResume($resume)
    {
        return response()->download(storage_path('app/public/resumes/'.$resume));
        //return Redirect::back();
    }
} 
