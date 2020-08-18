<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function country()
    {
        //
        return response()->json(Country::get(), 200);
    }
    
    // show
    public function countryById($id)
    {
        // find id
        $country = Country::find($id);
        // check null
        if(is_null($country)){
            return response()->json(["message" => "Record not found!"], 404);
        }else{
            return response()->json($country, 200);
        }
    }
    
    //create
    public function countrySave(Request $request)
    {
        //validate
        $validator = Validator::make($request->all(), [
            'city' => 'required',
            'firstName' => 'required',
            'lastName'  => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        //save
        $country = Country::create($request->all());
        return response()->json($country, 201);
    }
    
    //update
    public function countryUpdate(Request $request, $id)
    {
        //
        $country = Country::find($id);
        if(is_null($country)){
            return response()->json(["message" => "Record not found!"], 404);
        }else{
            $country->update($request->all());
            return response()->json($country, 200);
        }
    }

    //delete
    public function countryDelete($id)
    {
        //
        $country = Country::find($id);
        if(is_null($country)) {
            return response()->json(["message" => "Record not found!"], 404);
        }else{
            $country->delete();
            return response()->json(null, 204);
        }
    }
}
