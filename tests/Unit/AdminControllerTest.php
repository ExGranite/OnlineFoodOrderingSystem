<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use \App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;

class AdminControllerTest extends TestCase {

    public function test_account() {
        $this->data = new AdminController;
        $response = $this->data->account();
        $data = user::all();
        $this->assertEquals($response , view("admin.account", compact('data')));
    }

    public function test_deleteaccount() {
        $this->data = new AdminController;
        $d = user::where('usertype', '0')->inRandomOrder()->limit(1)->get();
        $response = $this->data->deleteaccount($d[0]->id);
        $this->assertTrue(true);
    }
    
    public function test_foodmenu() {
        $this->data = new AdminController;
        $response = $this->data->foodmenu();
        $data = menu::all()->sortBy('category');
        $this->assertEquals($response , view("admin.foodmenu", compact("data")));
    }
    
    public function test_addfoodpage() {
        $this->data = new AdminController;
        $response = $this->data->addfoodpage();
        $data = user::all();
        $this->assertEquals($response , view("admin.addfood", compact("data")));
    }

    public function test_uploadfood() {
        $this->data = new AdminController;
        $request = new Request(['title' => 'Sample Title',
        'price' => '111',
        'description' => 'Sample Description',
        'image' => NULL,
        'category' => 'Sample Category',]);
        $response = $this->data->uploadfood($request);
        $this->assertTrue(true);
    }

    public function test_editfoodpage() {
        $this->data = new AdminController;
        $response = $this->data->editfoodpage(32);
        $data = menu::find(32);
        $this->assertEquals($response , view("admin.editfoodpage", compact("data")));
    }

    public function test_admincart() {
        $this->data = new AdminController;
        $response = $this->data->admincart();
        $data = cart::all();
        $this->assertEquals($response , view("admin.admincart", compact("data")));
    }

    public function test_activeorderpage() {
        $this->data = new AdminController;
        $response = $this->data->activeorderpage();
        $data = order::where('status', '0')->get();
        $data2 = order::where('status', '1')->orderBy('updated_at', 'desc')->get();
        $this->assertEquals($response , view('admin.activeorderpage', compact('data', 'data2')));
    }

    public function test_editfood() {
        $this->data = new AdminController;
        $request = new Request(['title' => 'Sample Title',
        'price' => '111',
        'description' => 'Sample Description',
        'image' => NULL,
        'category' => 'Sample Category',]);
        $d = menu::where('category', 'Breakfast')->inRandomOrder()->limit(1)->get();
        $response = $this->data->editfood($request, $d[0]->id);
        $this->assertTrue(true);
    }

    public function test_deletefood() {
        $this->data = new AdminController;
        $d = menu::where('category', 'Breakfast')->inRandomOrder()->limit(1)->get();
        $response = $this->data->deletefood($d[0]->id);
        $this->assertTrue(true);
    }

    public function test_changestatusorder() {
        $this->data = new AdminController;
        $d = order::where('status', '0')->inRandomOrder()->limit(1)->get();
        $response = $this->data->changestatusorder($d[0]->id);
        $this->assertTrue(true);
    }
}
