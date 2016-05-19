<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RoutesTest extends TestCase
{
    /**
     * Test the response code for the Landing page.
     *
     * @return void
     */
    public function testLandingPageResponseCode()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }

    /**
     * Test the Blog Index Page.
     *
     * @return void
     */
    public function testBlogIndexPage()
    {
        // $response = $this->call('GET', '/blog');
        // $this->assertEquals(200, $response->status());
        $this->visit('/blog')->see(config('blog.title'));
    }

    /**
     * Test the response code for the Login page.
     *
     * @return void
     */
    public function testLoginPageResponseCode()
    {
        $response = $this->call('GET', '/auth/login');
        $this->assertEquals(200, $response->status());
    }

    /**
     * Test the response code for the 404 Error Page.
     *
     * @return void
     */
    public function test404ErrorPageResponseCode()
    {
        $response = $this->call('GET', '/404ErrorPage');
        $this->assertEquals(404, $response->status());
    }
}
