<?php


namespace App\Repositories;

use App\Bill;

class BillRepository
{
    protected $bill;

    public function __construct(Bill $bill)
    {
        $this->bill = $bill;
    }

    public function getAllBill()
    {
        return $this->bill->all();
    }

    public function find($id)
    {
        return $this->bill->findOrFail($id);
    }
}
