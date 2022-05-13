<?php

namespace Tests\Unit\Services;

use App\Services\Hello;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
	public function test_hello_person()
	{
		$service = new Hello();
		
		$personOne = $service->person('Foo');
		$personTwo = $service->person('Bar');
		
		$this->assertEquals('Hello Foo', $personOne);
		$this->assertEquals('Hello Bar', $personTwo);
	}
	
	public function test_hello_world()
	{
		$service = new Hello();
		
		$this->assertEquals('Hello World', $service->world());
	}
}
