<?php

class Api_test extends TestCase
{
	public function setUp()
	{
		$this->obj = $this->newConrtoller('Api');
	}
	public function test_get_page()
	{
		$actual = [];
		$result = $this->get_page(100);
		$this->markTestIncomplete('todo: write db initialize and actual case');
		$this->assertEquals($actual, $result);
	}
}