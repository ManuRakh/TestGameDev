<?php


use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EditCompTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->visit('/')->see('Laravel');
        $response = $this->action('GET','CompanyController@editcompany',array('id' => 1));
 
    }
}
