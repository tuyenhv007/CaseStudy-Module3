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

    public function getBillById($billId)
    {
        $bill = $this->billService->findById($billId);
        return view('admin.bill-detail', compact('bill'));
    }

    public function billDetail()
    {
        return view('admin.bill-detail');
    }


}
