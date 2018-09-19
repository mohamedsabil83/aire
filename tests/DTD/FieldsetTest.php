<?php

/**
 * Portions of this code have been generated using Atom autocompletion data.
 *
 * @see https://github.com/atom/autocomplete-html
 *
 * Copyright (c) 2015 GitHub Inc.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 */

namespace Galahad\Aire\Tests\DTD;

use Galahad\Aire\Elements\FormElement;
use Galahad\Aire\DTD\Fieldset;
use Galahad\Aire\Tests\TestCase;

class FieldsetTest extends TestCase
{
	public function test_disabled_flag_can_be_set_on_and_off() : void
	{
		$form = $this->aire()->form();
		
		$fieldset = is_subclass_of(Fieldset::class, FormElement::class)
			? new Fieldset($this->aire(), $form)
			: new Fieldset($this->aire());
		
		$fieldset->disabled();
		$this->assertSelectorAttribute($fieldset, 'fieldset', 'disabled');
		
		$fieldset->disabled(false);
		$this->assertSelectorAttributeMissing($fieldset, 'fieldset', 'disabled');
	}
	
	public function test_form_attribute_can_be_set_and_unset() : void
	{
		$form = $this->aire()->form();
		
		$fieldset = is_subclass_of(Fieldset::class, FormElement::class)
			? new Fieldset($this->aire(), $form)
			: new Fieldset($this->aire());
		
		$value = str_random();
		
		$fieldset->form($value);
		$this->assertSelectorAttribute($fieldset, 'fieldset', 'form', $value);
		
		$fieldset->form(null);
		$this->assertSelectorAttributeMissing($fieldset, 'fieldset', 'form');
	}
	
	public function test_name_attribute_can_be_set_and_unset() : void
	{
		$form = $this->aire()->form();
		
		$fieldset = is_subclass_of(Fieldset::class, FormElement::class)
			? new Fieldset($this->aire(), $form)
			: new Fieldset($this->aire());
		
		$value = str_random();
		
		$fieldset->name($value);
		$this->assertSelectorAttribute($fieldset, 'fieldset', 'name', $value);
		
		$fieldset->name(null);
		$this->assertSelectorAttributeMissing($fieldset, 'fieldset', 'name');
	}
	
}