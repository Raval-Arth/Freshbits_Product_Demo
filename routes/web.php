<?php

use App\Http\Controllers\ProductsController;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('home', ProductsController::class)->middleware('auth');
Route::post('product_update/{id}', function ($id, Request $request) {
    try {
        // get product by id

        $image = $request->file('image');
        $imageName = $request->product_upc . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        // get product by id
        $product = Products::find($id);
        // dd($product);

        // Update product
        //get csrf token
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->image = 'images/' .  $imageName;
        $product->status = $request->product_status == 'Active' ? 1 : 0;
        $product->save();

        return response()->json(['products' => $product]);
    } catch (\Exception $e) {
        //return error message with error line
        return response()->json($e->getMessage() . ' in ' . $e->getLine(), 400);
    }
});

Auth::routes();
