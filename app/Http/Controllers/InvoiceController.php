<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice.index')->with([
            'invoices' => Invoice::with('client')->latest()->paginate(10),
        ]);
    }

    public function create()
    {
        return view('invoice.create');
    }

    public function edit()
    {
        # code...
    }

    public function update(Request $request, Invoice $invoice)
    {
        # code...
    }

    public function store(Request $request)
    {
        # code...
    }

    public function show(Invoice $invoice)
    {
        # code...
    }

    public function destroy(Invoice $invoice)
    {
        # code...
    }
}
