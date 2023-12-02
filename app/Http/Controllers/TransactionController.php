<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeTransaction($id, $package)
    {
        $user = Auth::user();

        // Your code to perform the transaction goes here
        // Example:
        $user->transaction()->create([
            'quantity' => 1,
            'status' => "pending",
            'package' => $package,
            'user_id' => $user->id,
            'service_id' => $id,
        ]);

        return response()->json(['message' => 'Transaction successfully completed']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
