<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\crud1;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  /////////////View here///////////////////
    public function signupform()
    {
        return view('admin.childpage.form');
    }
    public function Info()
    {
        return view('admin.childpage.crud1form');
    }
    public function create()
    {
        return view('admin.childpage.crud1form');
    }
    
    public function loginform()
    {
        return view('admin.childpage.form');
    }
    
    
   ////////////signup function to samve data//////////
    public function signup(Request $req){
      $new = new User();
      $new->name = $req->name;
      $new->email = $req->email;
      $new->password = Hash::make($req->password);
      $new->save();
	return redirect('/Addddata')->with('message','Item created successfully!');
  }
    //////////////update function/////////////////
    public function edit(Request $req,$id){
        $new = User::find($id);
        $new->name = $req->name;
        $new->update();
      return redirect('/admin/table')->with('message','Item update successfully!');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/admin/abc')->with('message', 'Login Successfully');
        }else{
            return redirect('/')->with('error','Data not match');
        }

    }
    /////////////////crud1 create ka function//////////////
    public function data(Request $req){
      $req->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title' => 'required',
        'heading'=> 'required',
     
    ]);
    

      
      $imageName = time().'.'.$req->image->extension();  
        $new = new crud1();
        $new->title = $req->title;
        $new->heading = $req->heading;
        $new->image =   $imageName;
        $new->save();
        $req->image->move(public_path('images'), $imageName);
      return redirect('/admin/table2')->with('success','Item created successfully!');
    }
    public function reg(Request $req){
      $new = new crud1();
      $new->text = $req->text;
      $new->passage = $req->passage;
      $new->save();
    return redirect('/admin/table3')->with('success','Item created successfully!');
  }
    /////////////// crud 1 ka update ka function//////////////////
    public function modify(Request $req,$id){
        $new = crud1::find($id);
        $new->title = $req->title;
        $new->heading = $req->heading;
        $new->update();
      return redirect('/admin/table2')->with('success','Item update successfully!');
    }
    public function modification(Request $req,$id){
      $new = crud1::find($id);
      $new->text = $req->text;
      $new->passage = $req->passage;
      $new->update();
    return redirect('/admin/table3')->with('success','Item update successfully!');
  }
  

    }

  
  