<?php
class Main_test extends TestCase
{
	public function test_index()
	{
		$output = $this->request('GET', 'main/index');
		$this->assertContains('<>', $output);
	}
}