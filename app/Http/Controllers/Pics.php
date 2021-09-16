<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class Pics extends Controller
{
  public function create()
  {
    $photos = Photo::all();
    return view('admin', compact('photos'));
  }

  function store(Request $request)
  {
    $price = $request->price;
    $pname = $request->pname;
    // $origname=$request->file('pic')->getClientOriginalName();
    $size = $request->file('pic')->getSize();
    $request->file('pic')->storeAs('public/images/', $pname);
    $name = $request->file('pic')->store('');
    $photo = new Photo();
    $photo->name = $pname;
    $photo->size = $size;
    $photo->price = $price;
    $photo->save();
    return redirect()->back();
  }

  public function destroy(Photo $product)
  {
    $product->delete();
    return redirect()->back();
  }
}
