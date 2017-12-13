<?php

use Abraham\TwitterOAuth\TwitterOAuth;

class Twitter {
	public function __construct()
	{
		$this->connect = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
		if (is_null($this->connect)) {
			throw Exception('cannot login twitter');
		}
	}
	
	public function search_piyopoke_tag_tweets($since_id=null, $max_id=null)
	{
		$query = [
			'q' => '#ぴよポケワンドロ',
			'result_type' => 'recent',
			'count' => 100,
		];
		if (!is_null($max_id)) {
			$query['max_id'] = $max_id;
		}
		if (!is_null($since_id)) {
			$query['since_id'] = $since_id;
		}
		return null;
	}
	
	/**
     * 再帰的に、ダウンロードできなくなるまでgetを行う。
     * @param $user_token
     * @param $user_secret
     * @param $path
     * @param $parameters
     * @return array
     */
    private function get_all($path, $parameters) {
        $data = [];
        do {
            $gotten_data = $this->connect->get($path, $parameters);
            if (count($gotten_data) === 0) {
                break;
            }
            $data = array_merge_recursive($data, $gotten_data);
            $parameters['max_id'] = end($data)->id - 1;
        } while(count($gotten_data) !== 0);
        return $data;
    }
}