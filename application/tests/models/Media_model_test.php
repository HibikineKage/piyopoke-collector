<?php

class Media_model_test extends TestCase
{
	public function setUp()
	{
		$this->obj = $this->newModel('Media_model');
	}
	
	public function test_add_media()
	{
		$add_media = [[
			'media_id' => 15,
			'tweet_id' => 100,
			'thumb_url' => 'https://example.com/thumb15.png',
			'image_url' => 'https://example.com/image15.png',
		],
		[
			'media_id' => 16,
			'tweet_id' => 100,
			'thumb_url' => 'https://example.com/thumb16.png',
			'image_url' => 'https://example.com/image16.png',
		],
		[
			'media_id' => 20,
			'tweet_id' => 200,
			'thumb_url' => 'https://example.com/thumb20.png',
			'image_url' => 'https://example.com/image20.png',
		]];
		
		$media_ids = array_column($add_media, 'media_id');
		
		$this->obj->add_media($add_media);
		
		$media = $this->obj->get_media($media_id);
		
		$this->assertEquals($add_media, $media);
	}
}