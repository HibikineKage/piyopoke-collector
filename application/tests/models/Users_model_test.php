<?php
class UsersModel extends TestCase
{
	public function setUp()
	{
		$this->obj = $this->newModel('Users_model');
	}
	
	public function test_add_users()
	{
		$add_users = [[
			'user_id' => '100',
			'name' => 'Hibikine Kage',
			'display_name' => 'Hibikine_Kage',
		],
		[
			'user_id' => '200',
			'name' => 'キャンディ🎵',
			'display_name' => 'candy_candy_bot',
		]];
		
		$add_user_ids = array_column($add_user_ids, 'user_id');
		
		$this->obj->add_users($add_users);
		$users = $this->obj->get_users($add_user_ids);
		
		$this->assertEquals($add_users, $users);
	}
}	