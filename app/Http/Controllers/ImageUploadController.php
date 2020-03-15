<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use JavaScript;
use App\upload;
use DB;
class ImageUploadController extends Controller
{
  /**

  * Display a listing of the resource.

  *

  * @return \Illuminate\Http\Response

  */

 public function imageUpload()

 {
   if(Auth::check()){
     return view('imageUpload');
   }
    return Redirect::to("login")->withSuccess('Opps! You do not have access');
 }



 /**

  * Display a listing of the resource.

  *

  * @return \Illuminate\Http\Response

  */

 public function imageUploadPost(Request $request)

 {
     $request->validate([

         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

     ]);

     $imageName = time().'.'.$request->image->extension();
     $request->image->move(public_path('images'), $imageName);

     $upload = new upload;
     $upload->title=$request->title;
     $upload->content=$request->content;
     $upload->type=$request->type;
     $upload->img=$imageName;
     $upload->youtube=$request->youtube;
     $upload->save();

     return view('imageUpload');
 }
}
