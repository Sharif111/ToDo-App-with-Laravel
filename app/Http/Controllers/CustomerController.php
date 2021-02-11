<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select('select * from customers');
        return view('welcome',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'name' => 'required|max:255|regex:/^[A-Za-z0-9\-\&! ,\'\"\/@\.:\(\)]+$/',
            'address' => 'required|max:255|regex:/^[A-Za-z0-9\-\&! ,\'\"\/@\.:\(\)]+$/',
            'mobile' => 'required|max:255|regex:/^[A-Za-z0-9\-\&! ,\'\"\/@\.:\(\)]+$/',

               ]);

             $td=new Customer();
             $td->name=$request->name;
             $td->address=$request->address;
             $td->email=$request->email;
             $td->mobile=$request->mobile;
             $save=$td->save();
             if($save){
                 return redirect('/');
             }

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

        $td = Customer::find($id);
        return view('edit',compact('td'));
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
        $validateData=$request->validate([
            'name' => 'required|max:255|regex:/^[A-Za-z0-9\-\&! ,\'\"\/@\.:\(\)]+$/',
            'address' => 'required|max:255|regex:/^[A-Za-z0-9\-\&! ,\'\"\/@\.:\(\)]+$/',
            'mobile' => 'required|max:255|regex:/^[A-Za-z0-9\-\&! ,\'\"\/@\.:\(\)]+$/',

               ]);

             $td=Customer::find($id);
             $td->name=$request->name;
             $td->address=$request->address;
             $td->email=$request->email;
             $td->mobile=$request->mobile;
             $td->save();

             return redirect('/')->with('successmsg','Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $Customer=Customer::find($id);
        if($Customer)
            $Customer->delete();
        return redirect('/')->with('successmsg','Delete');
    }




}
