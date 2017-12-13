<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Initalize_database extends CI_Migration
{
	public function up()
	{
		$result = $this->dbforge->create_database($db['default']['database']);	
		if (!$result) {
			throw Exception('cannot create database');
		}
		
		$result = $this->dbforge->add_field([
			'user_id' => [
				'type' => 'BIGINT',
				'null' => FALSE,
				'unique' => TRUE,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'display_name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => FALSE,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
			'destroyed_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
		]);
		
		$users_result = $this->dbforge->create_table('users');
		if (!$users_result) {
			throw Exception('cannot create users table');
		}
		
		$this->dbforge->add_field([
			'tweet_id' => [
				'type' => 'BIGINT',
				'null' => FALSE,
				'unique' => TRUE,
			],
			'text' => [
				'type' => 'VARCHAR',
				'null' => FALSE,
				'constraint' => 240,
			],
			'user_id' => [
				'type' => 'BIGINT',
				'null' => FALSE,
			],
			'published_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
			'destroyed_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
		]);
		$tweets_result = $this->dbforge->create_table('tweets');
		if (!$tweets_result) {
			throw Exception('cannot create tweets table');
		}
		
		$this->dbforge->add_field([
			'media_id' => [
				'type' => 'BIGINT',
				'null' => FALSE,
				'unique' => TRUE,
			],
			'tweet_id' => [
				'type' => 'BIGINT',
				'null' => FALSE,
			],
			'thumb_url' => [
				'type' => 'VARCHAR',
				'null' => FALSE,
				'constraint' => '512',
			],
			'image_url' => [
				'type' => 'VARCHAR',
				'null' => FALSE,
				'constraint' => '512',
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
			'destroyed_at' => [
				'type' => 'DATETIME',
				'null' => FALSE,
			],
		]);
		$media_result = $this->dbforge->create_table('media');
		if (!$media_result) {
			throw Exception('cannot create media table');
		}
	}
	
	public function down()
	{
		$this->dbforge->drop_database()
	}
}
