<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\InvoiceItem;
use Illuminate\Http\Request;

class InvoiceItemController extends Controller
{
    //

    public function index(Request $request) {
        $invoiceItems = InvoiceItem::where('invoice_id', $request->invoice_id)->get();

        return response([
            'data' => $invoiceItems
        ]);
    }
}
