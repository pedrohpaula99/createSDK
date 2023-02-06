<?php

class call{ 

    public function execute_get() {

        $url = "http://www.google.com.br";

        $opts = array('http' =>
            array(
                'method' => 'GET',
                'max_redirects' => '0',
                'ignore_errors' => '1'
            )
        );

        $context = stream_context_create($opts);
        $stream = fopen($url, 'r', true, $context);

        $response = stream_get_contents($stream);

        echo $response;
        fclose($stream);
    }

    public function execute_post() {

        $url = 'http://www.example.org';

        $postdata = http_build_query(
            array(
                'var1' => 'some content',
                'var2' => 'doh'
            )
        );
        
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        
        $context = stream_context_create($opts);
        
        $result = file_get_contents($url, true, $context);
    }

}   
?>