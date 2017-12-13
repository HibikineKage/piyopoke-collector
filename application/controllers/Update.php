<?php
class Update extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Tweets_model');
		$this->load->model('Users_model');
		$this->load->model('Media_model');
		$this->load->library('twitter');
	}
	public function search_piyopoke_tweets()
	{
		$since_id = null;
		
		$tweets = $this->obj->search_piyopoke_tag_tweets();
		if (count($tweets) > 0) {
			$since_id = $tweets[0]['id'];
		}
		
		$tweets = $this->twitter->search_piyopoke_tag_tweets($since_id);
	}
	
	/**
	 * DBに入れるための形にする。
	 */
	private function split_tweets($tweets)
	{
		$users = null;
		$tweets = null;
		$media = null;
		$splited_tweets = [
			'users' => $users,
			'tweets' => $tweets,
			'media' => $media,
		];
		return $splited_tweets;
	}
}