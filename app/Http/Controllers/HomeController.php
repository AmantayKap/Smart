<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;

class HomeController extends Controller{
   public function redirect(){
       $usertype=Auth::user()->usertype;
       if ($usertype=="1"){
           return view('admin.home');
       } else{
           $data = product::paginate(2);
           $user=auth()->user();
           $count=cart::where('phone',$user->phone)->count();
           return view('graphicCard', compact('data','count'));

       }
   }

   public function index(){
       $data = product::paginate(2);
       return view('graphicCard', compact('data'));
   }

    public function search(Request $request){
        $search = $request->search;
        $data = product::where('title','Like','%'.$search.'%')->get();
        return view('graphicCard', compact('data'));
    }

    public function addcart(Request $request, $id){
        if (Auth::id()){
            $user = auth()->user();
            $product = product::find($id);
            $cart = new cart;

            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity = 1;
            $cart->save();
            return redirect()->back();
        } else{
            return redirect('login');
        }

    }
    public function showcart(){
       $user=auth()->user();
       $cart=cart::where('phone', $user->phone)->get();

       return view('user.showcart', compact('cart'));
    }
    public function deletecart($id){
        $data =cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function confirmorder(Request $request){
       $user=auth()->user();
       $name=$user->name;
       $phone=$user->phone;
       $address=$user->address;
       if ($request->productname == null) {
           return redirect()->back();
       }
       foreach ($request->productname as $key=>$productname){
           $order=new order;
           $order->product_name=$request->productname[$key];
            $order->price=$request->price[$key];
            $order->quantity=$request->quantity[$key];

            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;
            $order->status="not delivered";

            $order->save();
        }
       DB::table('carts')->where('phone', $phone)->delete();
       return redirect()->back();
    }
}
