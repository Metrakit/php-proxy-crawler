<?php

namespace Metrakit\ProxyCrawler\Proxy;

use VDB\Spider\Discoverer\XPathExpressionDiscoverer;

use Metrakit\ProxyCrawler\Proxy\ProxySite;

/*

 */
class FreeProxyLists extends ProxySite
{

	protected $url = "http://www.freeproxylists.net/fr/";

	public function __construct()
	{
		$this->initCrawler();
	}

	public function get()
	{
		$this->crawler->getDiscovererSet()->set(new XPathExpressionDiscoverer("//tr[@class='Odd']//a"));
		$data = $this->crawler->crawl();
		// foreach ($this->crawler->getDownloader()->getPersistenceHandler() as $resource) {
		//     echo "\n - " . $resource->getCrawler()->filterXpath('//title')->text();
		// }
		return $data;
	}

}