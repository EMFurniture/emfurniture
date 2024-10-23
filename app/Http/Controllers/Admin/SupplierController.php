<?php

namespace App\Http\Controllers\Admin;

use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view("admin.supplier.index", compact("suppliers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.supplier.create");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "supplier_name" => "required|string|max:255|regex:/^[a-zA-Z\s]+$/|unique:suppliers,supplier_name",
            "contact_person" => "required|string|max:255|regex:/^[a-zA-Z\s]+$/|unique:suppliers,contact_person",
            "phone" => "required|digits:11|unique:suppliers,phone",
            "email" => "required|email|unique:suppliers,email",
            "address" => "required|min:10|max:255"
        ]);
        
        Supplier::create($request->all());
        return redirect()->route("suppliers.index")->with("success", "Supplier added successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view("admin.supplier.edit", compact("supplier"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "supplier_name" => "required|string|max:255|regex:/^[a-zA-Z\s]+$/|unique:suppliers,supplier_name,{$id}",
            "contact_person" => "required|string|max:255|regex:/^[a-zA-Z\s]+$/|unique:suppliers,contact_person,{$id}",
            "phone" => "required|digits:11|unique:suppliers,phone,{$id}",
            "email" => "required|email|unique:suppliers,email,{$id}",
            "address" => "required|min:10|max:255"
        ]);
        
        Supplier::find($id)->update($request->all());
        return redirect()->route("suppliers.index")->with("success", "Supplier updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->back()->with('danger', 'Supplier deleted successfully!');
    }
}
