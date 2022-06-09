<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            // Get all products
            $products = Products::all();
            return view('home', ['products' => $products]);
        } catch (\Exception $e) {
            //return error message with error line
            return response()->json($e->getMessage() . ' in ' . $e->getLine(), 400);
        }
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
        try {
            // generate random string for upc
            $pool = '0123456789';
            $upc = substr(str_shuffle(str_repeat($pool, 5)), 0, 9);
            
            // image upload from client
            $image = $request->file('image');
            $imageName = $upc . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            // create new product
            $product = new Products();
            $product->name = $request->product_name;
            $product->price = $request->product_price;
            $product->upc = $upc;
            // $product->image = $imageName;
            $product->image = 'images/' . $imageName;
            $product->status = $request->product_status == 'Active' ? 1 : 0;
            $product->save();

            return redirect('home')->with(['products' => $product]);
        } catch (\Exception $e) {
            //return error message with error line
            return response()->json($e->getMessage() . ' in ' . $e->getLine(), 400);
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
        //
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
        try {
            // get product by id

            dd($request->product_name);

            $image = $request->file('image');
            $imageName = 123 . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            dd($image);
            // get product by id
            $product = Products::find($id);

            // Update product
            $product->name = $request->product_name;
            $product->price = $request->product_price;
            $product->image = $image;
            $product->status = $request->product_status == 'Active' ? 1 : 0;
            $product->save();

            return response()->json(['products' => $product]);
        } catch (\Exception $e) {
            //return error message with error line
            return response()->json($e->getMessage() . ' in ' . $e->getLine(), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Get product by id
            $product = Products::where('upc', $id)->first();
            // Delete product
            $product->delete();

            return response()->json(['products' => $product]);
        } catch (\Exception $e) {
            //return error message with error line
            return response()->json($e->getMessage() . ' in ' . $e->getLine(), 400);
        }
    }
}
