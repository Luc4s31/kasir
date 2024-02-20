<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Services\Staff\TransactionService;

class TransactionController extends Controller
{
    protected $transactionService;

    public function __construct(TransactionService $transactionService)
    {
        $this->transactionService = $transactionService;
    }

    public function index()
    {
        $transactions = $this->transactionService->index(1);

        return view('staff.transaction', compact('transactions'));
    }

    public function show($transactionId)
    {
        $transactions = $this->transactionService->showDetailTransaction($transactionId);

        return view('', compact('transactions'));
    }
}
