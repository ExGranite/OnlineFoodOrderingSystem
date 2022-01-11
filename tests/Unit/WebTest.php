<?php

namespace Tests\Unit;

use Tests\TestCase;

class WebTest extends TestCase {
    public function test_index() {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    
    public function test_redirectslogin() {
        $response = $this->get('/redirectslogin');
        $response->assertStatus(302);
    }

    public function test_account() {
        $response = $this->get('/account');
        $response->assertStatus(500);
    }

    public function test_deleteaccount() {
        $response = $this->get('/deleteaccount/{id}');
        $response->assertStatus(500);
    }

    public function test_foodmenu() {
        $response = $this->get('/foodmenu');
        $response->assertStatus(500);
    }

    public function test_addfoodpage() {
        $response = $this->get('/addfoodpage');
        $response->assertStatus(500);
    }

    public function test_uploadfood() {
        $response = $this->get('/uploadfood');
        $response->assertStatus(405);
    }

    public function test_deletefood() {
        $response = $this->get('/deletefood/{id}');
        $response->assertStatus(500);
    }

    public function test_editfoodpage() {
        $response = $this->get('/editfoodpage/{id}');
        $response->assertStatus(500);
    }

    public function test_editfood() {
        $response = $this->get('/editfood/{id}');
        $response->assertStatus(405);
    }

    public function test_activeorderpage() {
        $response = $this->get('/activeorderpage');
        $response->assertStatus(500);
    }

    public function test_admincart() {
        $response = $this->get('/admincart');
        $response->assertStatus(500);
    }

    public function test_changestatusorder() {
        $response = $this->get('/changestatusorder/{id}');
        $response->assertStatus(500);
    }

    public function test_addtocart() {
        $response = $this->get('/addtocart/{id}');
        $response->assertStatus(405);
    }

    public function test_showcart() {
        $response = $this->get('/showcart/{id}');
        $response->assertStatus(500);
    }

    public function test_showorderpage() {
        $response = $this->get('/showorderpage/{id}');
        $response->assertStatus(500);
    }

    public function test_removefromcart() {
        $response = $this->get('/removefromcart/{id}/{userid}');
        $response->assertStatus(302);
    }

    public function test_orderconfirm() {
        $response = $this->get('/orderconfirm/{id}');
        $response->assertStatus(405);
    }

    public function test_showmenu() {
        $response = $this->get('/showmenu');
        $response->assertStatus(200);
    }

    public function test_dashboard() {
        $response = $this->get('/dashboard');
        $response->assertStatus(302);
    }
}
