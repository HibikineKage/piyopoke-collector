<?php

class Utility {
	public function get_datetime($time = null)
	{
		if (is_null($time)) {
			return date('Y-m-d H:i:s');
		}
		return date('Y-m-d H:i:s', $time);
	}
}