<?php

use Abraham\TwitterOAuth\TwitterOAuth;

class Twitter {
	public function __construct()
	{
		$this->connect = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
	}
	
	public function search_piyopoke_tag_tweets($since=null, $until=null)
	{
		
	}
}