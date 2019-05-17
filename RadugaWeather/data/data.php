<?php

    include_once ('curl.php');

    $headers=array('Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
        'Accept-Encoding: gzip, deflate',
        'Accept-Language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
        'Cache-Control: max-age=0',
        'Connection: keep-alive',
        'Cookie: PHPSESSID=koqrf2ei4q3b63cetttv374b20',
        'DNT: 1',
        'Host: 62.213.36.254',
        'Referer: http://62.213.36.254/all_main.php?list_par=200-0-0-0.8377705893429184',
        'Upgrade-Insecure-Requests: 1',
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36',
        'X-Compress: null');

    $c = curl::app('http://62.213.36.254/')
                            ->set(CURLOPT_HEADER, 1)
                            ->set(CURLOPT_HEADER, $headers)
                            ->ssl(0);