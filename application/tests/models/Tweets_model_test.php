<?php
class Tweets_model_test extends TestCase
{
	public function setUp()
	{
		$this->obj = $this->newModel('Tweets_model');
	}
	
	public function test_add_tweets()
	{
		$add_tweets = [[
			'tweet_id' => 100,
			'text' => 'イーブイだよ🎵',
			'user_id' => 100,
			'published_at' => '2017-10-10 10:10:10',
		],
		[
			'tweet_id' => 200,
			'text' => 'ふりゃ！',
			'user_id' => 200,
			'published_at' => '2017-10-20 10:10:10',
		]];
		
		$add_tweet_ids = array_column($add_tweets, 'tweet_id');
		
		$this->obj->add_tweets($add_tweets);
		$tweets = $this->obj->get_tweets($add_tweet_ids);
		$this->assertEquals($add_tweets, $tweets);
	}
}