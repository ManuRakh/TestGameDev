<?php

namespace Tests\Feature;
use Tests\Feature\MemberRegTest; 
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MemberRegTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
       $response = $this->get('/addmember');
       $response = $this->post('/addmember');

    }
}
