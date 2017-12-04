<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase {
    
    public function testGet(){
        $response = $this->call('GET', '/api/users');
        $this->assertEquals(200, $response->status());
    }
    
    public function testPost(){
        $response = $this->call('POST', '/api/users', array(
            '_token' => csrf_token(),
            'name' => "jackytest"
        ));
        $this->assertEquals(200, $response->status());
    }
    
    public function testPut(){
        $response = $this->call('PUT', '/api/users/12', array(
            '_token' => csrf_token(),
            'name' => "jackytest11",
        ));
        $this->assertEquals(200, $response->status());
    }
    
    public function testDelete(){
        $response = $this->call('DELETE', '/api/users/12', ['_token' => csrf_token()]);
        $this->assertEquals(200, $response->status());
    }
    
}
