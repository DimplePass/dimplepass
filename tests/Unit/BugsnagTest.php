<?php

use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
// use RuntimeException;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class BugsnagTest extends TestCase
{
    /** @test */
    function test_bugsnag_error_reporting()
    {
		Bugsnag::notifyException(new RuntimeException("Test error"));
		$this->assertNull(Bugsnag::notifyException(new RuntimeException("Test error")));        
    }
}