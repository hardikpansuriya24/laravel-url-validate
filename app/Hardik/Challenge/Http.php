<?php

namespace App\Hardik\Challenge;

class Http {
     /**
     * Retry an operation a given number of times send request.
     *
     * @param  string  $url
     * @param  int|  $maxRetries
     * @return mixed
     *
     * @throws \Exception
     */
    public static function retry(string $url, int $maxRetries = 1)
    {
        beginning:
        $maxRetries--;
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_exec($ch);
            $response = curl_getinfo($ch);
            curl_close($ch);
            if (in_array($response['http_code'], array(200, 404))) {
                return $response;
            } else {
                dump($maxRetries. 'try remain');
                if($maxRetries == 0){
                    return false;
                }
                goto beginning;
            }
        } catch (Throwable $e) {
            throw $e;
        }
    }
}
