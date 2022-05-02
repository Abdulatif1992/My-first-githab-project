<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function Index() {
        //$companies = ['Very food', 'Odoya'];
        $companies  = Company::all();
        return view("company\index",compact('companies')); 
     }

     public function View($id) {
        //$companies = ['Very food', 'Odoya'];
        $company  = Company::find($id);
        return view("company\index",compact('company')); 
     }
}
