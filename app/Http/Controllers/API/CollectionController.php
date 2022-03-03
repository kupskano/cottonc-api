<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //

    public function store(Request $request) {
        $create = Collection::create([
            'customer_id' => $request->customer_id,
            'collect_unit_no' => $request->collect_unit_no,
            'collect_address' => $request->collect_address,
            'collect_building' => ($request->collect_building != null) ? $request->collect_building : '',
            'collect_time' => $request->collect_time,
            'collect_postal_code' => $request->collect_postal_code,
            'status' => $request->status,
            'collect_region' => $request->collect_region,
            'driver_id' => $request->driver_id,
            'collect_type' => $request->collect_type,
            'collect_note' => ($request->collect_note != null) ? $request->collect_note : '',
            'collect_pax' => ($request->collect_pax != null) ? $request->collect_pax : '',
            'return_date' => ($request->return_date) ? date('Y-m-d', strtotime($request->return_date)) : NULL,
            'return_time' => ($request->return_time) ? $request->return_time : NULL,
            'collect_date' => ($request->collect_date) ? date('Y-m-d', strtotime($request->collect_date)) : '',
            // 'created_by' => Auth::user()->name,
            'created_by' => $request->created_by,
            'created_on' => now(),
            // 'updated_by' => Auth::user()->name,
            'updated_by' => $request->updated_by,
            'updated_on' => now(),
            'saved_on' => now()
        ]);

        if($create){
            // $ret = array("result" => 'success');
            // echo json_encode($ret);
            return response()->json([
                'data' => $create,
                'id' => $create->id
            ]);
    
        }else{
            $ret = array("result" => 'failed');
            echo json_encode($ret);
        }
    }
}
