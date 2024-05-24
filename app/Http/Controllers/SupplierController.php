<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();
        return view('proveedores',compact('suppliers'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->codigo = $request->codigo;
        $supplier->save();
        return to_route('supplier.index');
    }

    public function edit($id){
        $supplier = Supplier::find($id);
        return view('edit',compact('supplier'));
    }

    public function update(Request $request, $id){
        $supplier = Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->codigo = $request->codigo;
        $supplier->save();
        return to_route('supplier.index');
    }

    public function destroy($id){
        Supplier::destroy($id);
        return to_route('supplier.index');
    }
}
