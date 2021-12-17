<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\crud1;
use App\Models\crud2;
use Illuminate\Support\Facades\Auth;


class FrontController extends Controller
{
    public function loginform()
    {
        return view('admin.childpage.form');
    }
    public function page()
    {
        return view('admin.childpage.home');
    }
    public function frontend()
    {
        return view('front.pages.homee'); 
    }
   
   
    public function dld($id)
    {
       
        $new = User::find($id);
        $new->delete();
        return redirect()->back()->with('delete','deleted successfully');
            
            
    }
    public function delete($id)
    {
       
        $new = crud1::find($id);
        $new->delete();
        return response()->json(['status'=>true ,'delete','deleted successfully'],200);
            
            
    }
    public function deletee($id)
    {
       
        $new = crud1::find($id);
        $new->delete();
        return redirect()->back()->with('delete','deleted successfully');
            
            
    }
    
    public function change($id)
    { $data = User::find($id);
        return view('admin.childpage.updateform',compact('data'));
    }
    public function update($id)
    { $data = crud1::find($id);
        return view('admin.childpage.newform',compact('data'));
    }
    public function updation($id)
    { $data = crud2::find($id);
        return view('admin.childpage.crudform',compact('data'));
    }
    public function index()
    {
        $post = User::all();
        return view('admin.childpage.Tables', compact('post'));
    }
    //////////////table ka view ka function or crud1 mein sy data bhi comact krwana hai jesy user ka krwaya hua dosry table mein///////
    public function index2()
    {
        $post = crud1::all();
        return view('admin.childpage.crud1', compact('post'));
    }
    
    public function index3()
    {
        $post = crud1::all();
        return view('admin.childpage.crud2', compact('post'));
    }
    
        public function distroy(Request $req){
            Auth::logout();
            return redirect('/Addinfo');
        }
        }
    


