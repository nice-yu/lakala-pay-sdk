<?php
/**
 * 通用接口调用 -> 查询交易
 */

require_once '../vendor/autoload.php';

$config = new \Lakala\OpenAPISDK\V3\Configuration();
$api = new \Lakala\OpenAPISDK\V3\Api\LakalaApi($config);

$request = new \Lakala\OpenAPISDK\V3\Model\ModelRequest();
// 请求字段
$request->setReqData([
    'merchant_no' => '822291234111135',
    'term_no' => '29123705',
    'out_trade_no' => date('YmdHis', time()),
    'trade_no' => '',
]);


try {
    $response = $api->tradeApi('/api/v3/labs/query/tradequery', $request);
    dump($response->getRespData());
    dump($response->getCode());

    # 响应头信息
    dump($response->getHeaders());

    # 响应原文
    dump($response->getOriginalText());
    dump('end');
} catch (\Lakala\OpenAPISDK\V3\ApiException $e) {
    echo $e->getMessage();
}
