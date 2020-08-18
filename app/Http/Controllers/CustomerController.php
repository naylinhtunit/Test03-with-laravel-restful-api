<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        //
        return response()->json(Customer::get(), 200);
    }
    
    public function create()
    {
        //
    }
    
    //Create
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'description'   => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        //save
        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }
    
    public function show($id)
    {
        //
        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(["message" => "Record not found"], 404);
        }else{
            return response()->json($customer, 200);
        }
    }
    
    public function edit(Customer $customer)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(["message" => "Record not found"], 404);
        }else{
            $customer->update($request->all());
            return response()->json($customer, 200);
        }
    }
    
    public function destroy($id)
    {
        //
        $customer = Customer::find($id);
        if(is_null($customer)){
            return response()->json(["message" => "Record not found"], 404);
        }else{
            $customer->delete();
            return response()->json(null, 204);
        }
    }
}
