<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: lmh <lmh@weiyian.com>
 * Date: 2020/12/2
 * Time: 下午4:24
 */

namespace Lmh\OpenPaySDK;


use EasyWeChat\Kernel\Support\XML;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class Request
{
    /**
     * @var \GuzzleHttp\ClientInterface
     */
    protected $httpClient;
    /**
     * @var string
     */
    public $baseUri = '';


    protected $config = [];
    /**
     * @var array
     */
    protected static $defaults = [
        'curl' => [
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ],
    ];

    /**
     * Request constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $defaultConfig = [
            'headers' => [
                'content-type' => 'application/json'
            ],
        ];
        $this->config = array_merge($defaultConfig, $config);
    }

    /**
     * @param string $url
     * @param string $method
     * @param array $options
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request(string $url, $method = 'POST', $options = []): string
    {
        $method = strtoupper($method);
        $options = array_merge(self::$defaults, $options);
        $options = $this->fixJsonIssue($options);
        $response = $this->getHttpClient()->request($method, $url, $options);
        $response->getBody()->rewind();
        return $response->getBody()->getContents();
    }

    /**
     * @param array $options
     *
     * @return array
     */
    protected function fixJsonIssue(array $options): array
    {
        if (isset($options['json']) && is_array($options['json'])) {
            $options['headers'] = array_merge($options['headers'] ?? [], ['Content-Type' => 'application/json']);
            if (empty($options['json'])) {
                $options['body'] = \GuzzleHttp\json_encode($options['json'], JSON_FORCE_OBJECT);
            } else {
                $options['body'] = \GuzzleHttp\json_encode($options['json'], JSON_UNESCAPED_UNICODE);
            }
            unset($options['json']);
        }
        return $options;
    }

    /**
     * @return ClientInterface
     */
    public function getHttpClient(): ClientInterface
    {
        $this->httpClient = new Client($this->config);
        return $this->httpClient;
    }
}