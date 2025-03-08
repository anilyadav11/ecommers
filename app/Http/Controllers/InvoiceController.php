<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function downloadInvoice($id)
    {
        $orderdetail = Order::with('user', 'items.product')->findOrFail($id);
        $settings = \App\Models\Setting::first();

        $pdf = Pdf::loadView('invoice.pdf', compact('orderdetail', 'settings'));

        return $pdf->download('invoice_' . $orderdetail->id . '.pdf');
    }
}
