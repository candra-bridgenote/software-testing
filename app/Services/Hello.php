<?php

namespace App\Services;

class Hello
{
	/**
	 * Showing text hello world.
	 *
	 * @return string
	 */
	public function world(): string
	{
		return 'Hello World';
	}
	
	/**
	 * Showing text hello $name.
	 *
	 * @param  string $name
	 * @return string
	 */
	public function person(string $name): string
	{
		return "Hello {$name}";
	}
}