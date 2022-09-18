<?php

namespace common\openprocurement;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use function GuzzleHttp\Promise\each_limit_all;

class TenderingAPI
{
    const SERVICE_NAME = 'tenderingAPI';
    const ORDER_ASC = 0;
    const ORDER_DESC = 1;

    private ClientInterface $client;
    private string $host = 'https://public.api.openprocurement.org/api/0/tenders?';


    /**
     * @param ClientInterface|null $client
     */
    public function __construct(
        ClientInterface $client = null,
    ) {
        $this->client = $client ?: new Client();
    }

    /**
     * Fetch tenders by page from the earliest/latest
     * @param $page
     * @param $limit
     * @param $order
     * @return void
     * @throws GuzzleException
     */
    public function fetchTenders(int $page, int $limit, int $order = self::ORDER_ASC) {

        $queryParams = http_build_query(
            [
                ($order === self::ORDER_ASC ? 'ascending' : 'descending') => 1,
                'limit' => $limit,
                'offset' => ($page - 1) * $limit,
            ]
        );
        $res = $this->client->request('GET', $this->host . $queryParams);
        // todo
    }


}

//use GuzzleHttp\Psr7\RequestException
