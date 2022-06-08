<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdata= DB::select(DB::raw('select * from medicines'));

        $listdata=DB::table('medicines')->get();

        // //Eloquent
        $listdata= Medicine::all();
        //dd($listdata);

        return view('medicine.index',compact('listdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("medicine.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Medicine();
        $data->name=$request->get('name');
        $data->form=$request->get('form');
        $data->restriction_formula->get('restriction_formula');

        $data->save();
        return redirect()->route('supplier.index')->with('status','Supplier is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show($medicine)
    {
        $res = Medicine::find($medicine);
        $message="";
        if ($res){
            $message = $res;
        }
        else {
            $message=NULL;
        }
        return view('medicine.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

    public function front_index()
    {
        $medicine = Medicine::all();
        return view('frontend.product', compact('medicine'));
    }
    
    public function addToCart($id)
    {
        $m=Medicine::find($id);
        $cart=session()->get('cart');
        if(!isset($cart[$id]))
        {
            $cart[$id]=[
                "name"=>$m->generic_name,
                "quantity"=>1,
                "price"=>$m->price,
                "photo"=>$m->img
            ];
        }else{
            $cart[$id]['quantity']++;
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Product added to cart succesfully!');
    }

    public function cart()
    {
        return view('frontend.cart');
    }
}
