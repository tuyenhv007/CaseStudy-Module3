<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Customer;
use App\Product;
use App\Services\BillService;

class BillController extends Controller
{
    protected $billService;

    public function __construct(BillService $billService)
    {
        $this->billService = $billService;
    }

    public function index()
    {
        $bills = $this->billService->getAll();

        return view('admin.list-bill', compact('bills'));
    }

    public function billDetail($billId)
    {
        $bill = $this->billService->findById($billId);
        return view('admin.bill-detail', compact('bill'));
    }

    public function updateStatusBill(Request $request, $id)
    {
        $bill = Bill::findOrFail($id);
        $bill->status = $request->status;
        $bill->save();

        return redirect()->route('bills.index');
    }


}
