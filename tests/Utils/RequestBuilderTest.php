<?php

namespace LasseRafn\Dinero\Tests\Utils;

use LasseRafn\Dinero\Builders\Builder;
use LasseRafn\Dinero\Tests\TestCase;
use LasseRafn\Dinero\Utils\Request;
use LasseRafn\Dinero\Utils\RequestBuilder;

class RequestBuilderTest extends TestCase
{
	/** @var RequestBuilder */
	private $builder;

	public function setUp()
	{
		$this->builder = new RequestBuilder(new Builder(new Request()));

		parent::setUp(); // TODO: Change the autogenerated stub
	}

	/** @test */
	public function can_set_page() {
		$this->assertEquals(0, $this->builder->getPage());

		$this->builder->page(2);

		$this->assertEquals(2, $this->builder->getPage());
	}

	/** @test */
	public function can_set_perPage() {
		$this->assertEquals(100, $this->builder->getPerPage());

		$this->builder->perPage(50);

		$this->assertEquals(50, $this->builder->getPerPage());
	}

	/** @test */
	public function can_select_specific_field() {
		$this->assertEquals(null, $this->builder->getSelectedFields());

		$this->builder->select('id');

		$this->assertEquals(['id'], $this->builder->getSelectedFields());
	}

	/** @test */
	public function can_select_many_fields() {
		$this->assertEquals(null, $this->builder->getSelectedFields());

		$this->builder->select(['id', 'name']);

		$this->assertEquals(['id', 'name'], $this->builder->getSelectedFields());
	}
}