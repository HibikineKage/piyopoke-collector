<?php

class Utility_test extends TestCase
{
	public function setUp()
	{
		$this->resetInstance();
		$this->CI->load->library('Utility');
		$this->obj = $this->CI->utility;
	}
	
	public function test_get_datetime()
	{
		$datetime = $this->obj->get_datetime(1513160729);
		$this->assertEquals('2017-12-13 10:25:29', $datetime);
	}
}