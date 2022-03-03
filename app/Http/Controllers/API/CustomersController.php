<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->all());
        
        $create = Customer::create([

            // 'company_agent' => $request->company_agent,
            // 'name' => $request->name,
            // 'customer_type' => $request->customer_type,
            // 'name2' => $request->name2,
            // 'contact_no1' => $request->contact_no1,
            // 'contact_no2' => $request->contact_no2,
            // 'contact_no3' =>$request->contact_no3,
            'company_agent' => ($request->company_agent) ? $request->company_agent : '',
            'name' => ($request->name) ? $request->name : '',
            'account_id' => $request->account_id,
            'customer_type' => ($request->customer_type) ? $request->customer_type : '',
            'name2' => ($request->name2) ? $request->name2 : '',
            'contact_no1' => ($request->contact_no1) ? $request->contact_no1 : '',
            'contact_no2' => ($request->contact_no2) ? $request->contact_no2 : '',
            'contact_no3' => ($request->contact_no3) ? $request->contact_no3 : '',
            'email_address' => ($request->email_address) ? $request->email_address : '',
            'mail_address' => ($request->mail_address) ? $request->mail_address : '',
            'unit_no' => ($request->unit_no) ? $request->unit_no : '',
            'postal_code' => ($request->postal_code) ? $request->postal_code : '',
            'building' => ($request->building) ? $request->building : '',
            'lift_lobby' => ($request->lift_lobby) ? $request->lift_lobby : '',
            'region' => ($request->region) ? $request->region : '',
            'credit_amount' => ($request->credit_amount) ? $request->credit_amount : '',
            'note' => ($request->note) ? $request->note : '',
            'joined_date' => now(),
            'last_used' => now(),
            'password' => '',
            // 'updated_by' => Auth::user()->name,
            'updated_by' => $request->updated_by,
            'updated_on' => now()
        ]);

        return response()->json([
            'data' => $create,
            'id' => $create->id
        ]);

        // if($create) {
        //     $ret = array("result" => 'success' , 'id' => $create->id);
        //     return response([
        //         'data' => $ret
        //     ]);
        // }else {
        //     $ret = array("result" => 'failed');
        //     return response([
        //         'data' => $ret
        //     ]);
        // }
    }
}
