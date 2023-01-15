<?php

namespace JoanRamirez\Currency;

use Goutte\Client;

class Currency
{
    private $price;

    private $client;

    function __construct()
    {
        $this->client = new Client();
    }

    private function tractor(string $url)
    {
        $crawler = $this->client->request('GET', $url);

        return $crawler->filter('#yDmH0d > c-wiz > div > div.e1AOyf > div > main > div.Gfxi4 > div.VfPpkd-WsjYwc.VfPpkd-WsjYwc-OWXEXe-INsAgc.KC1dQ.Usd1Ac.AaN0Dd.QZMA8b > c-wiz > div > div:nth-child(1) > div > div.rPF6Lc > div > div:nth-child(1) > div > span > div > div')->text();
    }

    public function change(string $from, string $to)
    {
        $url = "https://www.google.com/finance/quote/$from-$to";

        $this->price = $this->tractor($url);

        return $this;
    }

    public function amount(int $amount)
    {
        $this->price = $this->price * $amount;

        return $this;
    }

    public function get()
    {
        return $this->price;
    }
}
