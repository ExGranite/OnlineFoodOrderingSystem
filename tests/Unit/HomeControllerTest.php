<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use \App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;

class HomeControllerTest extends TestCase {

    public function test_index() {
        $this->data = new HomeController;
        $response = $this->data->index();
        $this->assertTrue(true);
    }
    
    public function test_addtocart() {
        $this->data = new HomeController;
        $request = new Request(['quantity' => '10',]);
        $d = menu::where('category', 'Breakfast')->inRandomOrder()->limit(1)->get();
        $response = $this->data->addtocart($request, $d[0]->id);
        $this->assertTrue(true);
    }

    public function test_showcart() {
        $this->data = new HomeController;
        $d = user::where('usertype', '0')->inRandomOrder()->limit(1)->get();
        $response = $this->data->showcart($d[0]->id);
        $this->assertTrue(true);
    }

    public function test_showmenu() {
        $this->data = new HomeController;
        $response = $this->data->showmenu();
        $this->assertTrue(true);
    }

    public function test_removefromcart() {
        $this->data = new HomeController;
        $d = user::where('usertype', '0')->inRandomOrder()->limit(1)->get();
        $e = menu::where('category', 'Breakfast')->inRandomOrder()->limit(1)->get();
        $response = $this->data->removefromcart($e[0]->id, $d[0]->id);
        $this->assertTrue(true);
    }

    public function test_showorderpage() {
        $this->data = new HomeController;
        $d = user::where('usertype', '0')->inRandomOrder()->limit(1)->get();
        $response = $this->data->showorderpage($d[0]->id);
        $this->assertTrue(true);
    }
}
