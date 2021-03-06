<?php
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


use App\Mail\ContactMail;
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


Route::post('/sendemail',function(Request $request){

    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'document' => 'required'
    ]);

    $data = array(
        'name' => request()->name,
        'email' => request()->email,
        'phone' => request()->phone,
        'sujet' => request()->sujet,
        'message' => request()->message,
        'document' => request()->document,
    );

    Mail::to('startup@moostadam.dz')->send(new ContactMail($data));

     $notification = array(
        'message' =>'Votre demande est envoyé avec succès' ,
        'alert-type' =>'success'
    );
    return redirect()->back()->with($notification);
 
})->name('sendemail');

