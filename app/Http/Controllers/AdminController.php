<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Menu;

use App\Models\Category;

use App\Models\Cart;

use App\Models\Order;

class AdminController extends Controller
{
    public function account() {
        $data = user::all();
        return view("admin.account", compact("data"));
    }

    public function deleteaccount($id) {
        $data = user::find($id);
        $data->delete();
        $data = cart::where('userid', $id);
        $data->delete();
        $data = order::where('userid', $id)->where('status', '0');
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu() {
        $data = menu::all()->sortBy('category');
        // $data2 = category::all();
        return view("admin.foodmenu", compact("data"));
    }

    public function addfoodpage() {
        $data = user::all();
        return view("admin.addfood", compact("data"));
    }

    public function uploadfood(Request $request) {
        $data = new menu;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        
        $data->category=$request->category;
        $data->save();

        $data2 = new category;
        $data2->category=$request->category;
        $data2->foodid=$data->id;
        $data2->save();
        
        $data = menu::all();
        // $data2 = category::all();
        return view("admin.foodmenu", compact("data"));

        // return redirect()->back();
    }

    public function deletefood($id) {
        $data = menu::find($id);
        $data->delete();
        return redirect()->back();
    }
    
    public function editfoodpage($id) {
        $data = menu::find($id);
        // $foodid = $data->$id;
        // $data2 = category::find($foodid);
        return view("admin.editfoodpage", compact("data"));
    }

    public function editfood(Request $request, $id) {
        $data = menu::find($id);
        $image = $request->image;
        if ($image != NULL) {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage', $imagename);
            $data->image=$imagename;
        }
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->category=$request->category;
        $data->save();

        $data2 = new category;
        $data2->category=$request->category;
        $data2->foodid=$data->id;
        $data2->save();

        $data = menu::all()->sortBy('category');
        // $data2 = category::all();
        return view("admin.foodmenu", compact("data"));
        // return redirect()->back();
    }

    public function admincart() {
        $data = cart::all();
        return view("admin.admincart", compact("data"));
    }

    public function activeorderpage() {
        $data = order::where('status', '0')->get();
        $data2 = order::where('status', '1')->orderBy('updated_at', 'desc')->get();
        return view('admin.activeorderpage', compact('data', 'data2'));
    }

    public function changestatusorder($id) {
        $data = order::find($id);
        $data->status='1';
        $data->save();
        return redirect()->back();
    }
}
