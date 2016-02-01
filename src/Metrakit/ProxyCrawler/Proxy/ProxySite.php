<?php

namespace Metrakit\ProxyCrawler\Proxy;

use VDB\Spider\Spider;

/*

 */
class ProxySite
{
	/**
	 * URL à crawler
	 * @var string
	 */
	protected $url = "";

	/**
	 * Crawler
	 * @var Object \VDB\Spider\Spider;
	 */
	protected $crawler;

	public function initCrawler()
	{
		$this->crawler = new Spider($this->url);
	}

}