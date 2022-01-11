<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Menu;

use App\Models\Category;

use App\Models\Cart;

use App\Models\Order;

class HomeController extends Controller
{
    public function index() {
        $dataB = menu::where('category', 'Breakfast')->inRandomOrder()->limit(6)->get();
        $dataL = menu::where('category', 'Lunch')->inRandomOrder()->limit(6)->get();
        $dataD = menu::where('category', 'Dinner')->inRandomOrder()->limit(6)->get();
        $userid = Auth::id();
        $count = cart::where('userid', $userid)->count();
        return view("home", compact("dataB", "dataL", "dataD", "count"));
    }

    public function redirectslogin() {
        $data = menu::all();
        if (Auth::user()) {
            $type = Auth::user()->usertype;
            if ($type=='1') {
                $ucount = User::all()->count();
                $mcount = Menu::all()->count();
                $ccount = Cart::all()->count();
                $aocount = Order::where('status', '0')->count();
                $cocount = Order::where('status', '1')->count();
                return view('admin.admindashboard', compact('ucount', 'mcount', 'ccount', 'aocount', 'cocount'));
            } else {
                $userid = Auth::id();
                $dataB = menu::where('category', 'Breakfast')->inRandomOrder()->limit(6)->get();
                $dataL = menu::where('category', 'Lunch')->inRandomOrder()->limit(6)->get();
                $dataD = menu::where('category', 'Dinner')->inRandomOrder()->limit(6)->get();
                $count = cart::where('userid', $userid)->count();
                return view("home", compact("dataB", "dataL", "dataD", "count"));
            }
        } else {
            return redirect('/login');
        }
    }

    public function addtocart(Request $request, $id) {
        $data = menu::all();
        if (Auth::id()) {
            $userid = Auth::id();
            $carta = cart::where('foodid', '=', $id)->where('userid', '=', $userid)->count();
            if ($carta == 0) {
                $foodid = $id;
                $quantity = $request->quantity;
                $food = menu::find($id);
                $price = $food->price;
                $totalprice = $price * $quantity;
                $cart = new cart;
                $cart->userid = $userid;
                $cart->foodid = $foodid;
                $cart->quantity = $quantity;
                $cart->price = $price;
                $cart->totalprice = $totalprice;
                $cart->save();
            } else {
                $cart = cart::where('foodid', '=', $id)->where('userid', '=', $userid)->get()[0];
                $foodid = $id;
                $quantity = $request->quantity;
                $food = menu::find($id);
                $price = $food->price;
                $totalprice = $price * $quantity;
                $cart->quantity = $cart->quantity + $quantity;
                $cart->totalprice = $cart->totalprice + $totalprice;
                $cart->save();
            }
            $data = menu::all();
            $userid = Auth::id();
            $count = cart::where('userid', $userid)->count();
            $datacart = cart::where('userid', $userid)->join('menus', 'carts.foodid', '=', 'menus.id')->get();
            return view('/showcart', compact('data', 'count', 'datacart', 'userid'));
        } else {
            return redirect('/login');
        }
    }

    public function showcart($id) {
        $data = menu::all();
        $userid = Auth::id();
        $count = cart::where('userid', $userid)->count();
        $datacart = cart::where('userid', $id)->join('menus', 'carts.foodid', '=', 'menus.id')->get();
        return view('/showcart', compact('data', 'count', 'datacart', 'userid'));
    }

    public function showmenu() {
        $data = menu::all();
        $userid = Auth::id();
        $count = cart::where('userid', $userid)->count();
        return view('/showmenu', compact('data', 'count'));
    }

    public function removefromcart($id, $userid) {
        $data = cart::where('foodid', '=', $id)->where('userid', '=', $userid)->delete();
        return redirect()->back();
    }

    public function orderconfirm(Request $request, $id) {
        $userid = Auth::id();
        $food = "";
        $price = 0;
        foreach($request->foodname as $key=>$foodname) {
            $q=strval($request->quantity[$key]);
            $food .= $foodname." x ".$q.";\n";
            $price=$price+$request->price[$key];
        }
        $data = new order;
        $data->contents=$food;
        $data->price=$price;
        $data->fname=$request->fname;
        $data->lname=$request->lname;
        $data->card=$request->card;
        $data->date=$request->date;
        $data->ccv=$request->ccv;
        $data->address=$request->address;
        $data->city=$request->city;
        $data->zip=$request->zip;
        $data->email=$request->email;
        $data->userid=$userid;
        $data->status=0;
        $data->save();
        $cartremove = cart::where('userid', '=', $id)->delete();
        $userid = Auth::id();
        $data = user::where('id', $id);
        $count = cart::where('userid', $userid)->count();
        $flag = 1;
        $c = order::where('userid', $id)->count();
        $dataorder = order::where('userid', $id)->orderBy('id', 'desc')->get();
        return view('/showorderpage', compact('data', 'count', 'userid', 'dataorder', 'flag', 'c'));
    }
    public function showorderpage($id) {
        $userid = Auth::id();
        $count = cart::where('userid', $userid)->count();
        $flag = 0;
        $c = order::where('userid', $id)->count();
        $dataorder = order::where('userid', $id)->orderBy('id', 'desc')->get();
        return view('/showorderpage', compact('count', 'userid', 'dataorder', 'flag', 'c'));
    }
}