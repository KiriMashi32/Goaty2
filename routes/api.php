<?php

use App\Models\Goat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/goats', function(){
    return Goat::all();
});

Route::get('goats/{id}', function($id) {
    return Goat::find($id);

});

Route::post('/goats', function (Request $request){
    $validator = Validator::make(request()->all(),[
        'price' => 'required',
        'name' => 'required',
        'color' => 'required',
        'birthday' => 'required',
    ]);

    if($validator->fails()) {
        return response()->json([
            'message' => 'Error at validation'
        ], 422);
    }

    $goat = new Goat();
    $goat->sex = request()->sex == 'on' ? true : false;
    $goat->name = request()->name;
    $goat->price = request()->price;
    $goat->color = request()->color;
    $goat->birthday = request()->birthday;
    $goat->user_id = request()->user_id;
    $goat->save();

    return response()->json([
        'message' => 'Goat created'
    ], 201);
});


