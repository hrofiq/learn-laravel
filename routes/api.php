<?php

use App\Item;
use Illuminate\Http\Request;


Route::get('items', function () {
    return Item::all();
}); 

Route::get('items/{item}', function (Item $item){
    return $item;
});

Route::post('items', function (){
    return Item::create(Request()->all());
});

Route::delete('items/{item}', function (Item $item){
    $item->delete();
    return 'Sucessfully deleted item.';
});


Route::post('items/{id}/update', function (Request $request, $id) {
    //$item = Item::findOrFail($id);
    //$item->update($request->all());
    ////return Item::where(['id'=>$id])->update($request->all());
    $item = Item::find($id);
    $item->update($request->all());
    return 'Successfully updated item';
});