<?php

namespace Galahad\Aire\Tests\Unit;

use Galahad\Aire\Tests\TestCase;

class GroupTest extends TestCase
{
	public function test_an_input_can_be_grouped()
	{
		$input = $this->aire()->input();
		
		$this->assertSelectorExists($input, 'div > input[type="text"]');
		$this->assertSelectorClassNames($input, 'div', ['p-2', 'm-2']);
	}
	
	public function test_a_group_can_have_a_label() : void
	{
		$input = $this->aire()
			->input('foo')
			->id('bar')
			->label('Foo Input');
		
		$this->assertSelectorText($input, 'div > label', 'Foo Input');
		$this->assertSelectorAttribute($input, 'div > label', 'for', 'bar');
	}
	
	public function test_a_labelled_group_generates_an_element_id() : void
	{
		$input = $this->aire()
			->input('foo')
			->label('Foo Input');
		
		$this->assertSelectorAttribute($input, 'div > label', 'for');
		$this->assertSelectorAttribute($input, 'div > input', 'id');
	}
}