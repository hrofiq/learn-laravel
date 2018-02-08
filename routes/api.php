<?php

use App\Item;
use Illuminate\Http\Request;


Route::get('items', function () {
    return Item::all();
}); 

Route::get('items/{id}', function (Item $id){
    return $id;
});

Route::post('items', function (){
    return Item::create(Request()->all());
});

Route::delete('items/{id}', function (Item $id){
    $id->delete();
    return 'Sucessfully deleted item.';
});

Route::post('items/{id}/update', function (Request $request, $id) {
    $item = Item::find($id);
    $item->update($request->all());
    return 'Successfully updated item';
});