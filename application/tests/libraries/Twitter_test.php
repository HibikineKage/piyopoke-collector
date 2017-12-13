<?php

class Twitter_test extends TestCase
{
	public function setUp()
	{
		$this->resetInstance();
		$this->CI->load->library('Twitter');
		$this->obj = $this->CI->twitter;
	}
	
	public function test_search_piyopoke_tag_tweets()
	{
		$tweets = $this->obj->search_piyopoke_tag_tweets();
		
		$this->assertCount(100, $tweets);
	}
	
	public function test_get_all()
	{
		$this->markTestIncomplete();
	}
}