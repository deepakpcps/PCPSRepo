<?php
    function call_api($method, $url, $data = false,$api_key=null)
    {
        $curl = curl_init();

        switch ($method)
        {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        $headers = [
        'Content-Type: application/json'
        ];
        if ( !empty($api_key))
        $headers[] = 'X-JokesOne-Api-Secret: '. $api_key;

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }

    $jod_result = call_api("GET","https://api.jokes.one/jod?category=jod",false,null);

    print_r($jod_result);

?>