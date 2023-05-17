<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adminData = Account::all();
        return view('customer_index',compact('adminData'));
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
    public function store(Request $request)
    {
        $customer = new Account;
        $customer->name = $request->name_i;
        $customer->address = $request->address_i;
        $customer->accountId = $request->customerId_i;
        $customer->contractDate = $request->contractDate_i;
        $customer->save();

        $adminData = Account::all();
        return redirect()->route('account.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $customer = Account::find($request->id);
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->accountId = $request->customerId;
        $customer->contractDate = $request->contractDate;
        $customer->save();

        $adminData = Account::all();
        return redirect()->route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
