<?php

namespace Metrakit\ProxyCrawler;

use Metrakit\ProxyCrawler\Proxy\FreeProxyLists;

/*

 */
class ProxyCrawler
{

	public function __construct($options = null)
	{

	}

	public function get()
	{
		$data = [];

		$freeProxyLists = new FreeProxyLists;

		var_dump($freeProxyLists->get());

		if (is_array($freeProxyLists = $freeProxyLists->get())) {
			$data = array_merge($data, $freeProxyLists);
		}

		return $data;
	}

}