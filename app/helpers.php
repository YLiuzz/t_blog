<?php

function get_db_config()
{
    if(getenv('IS_IN_HEROKU')){
        $url = parse_url(getenv("DATABASE_URL"));
        return $db_config = [
            'connection' => 'pgsql',
            'host' => 'ec2-18-215-44-132.compute-1.amazonaws.com',
            'database'  => 'dbhjv1jnnfgvk0',
            'username'  => 'qdmcawllqdwmax',
            'password'  => 'e84e7c10c6316fc6f0a62aba1012041e7cae75c24cf00721dead0f964cff00e9',
        ];
    }else{
        return $db_config = [
            'connection' => env('DB_CONNECTION','mysql'),
            'host'       => env('DB_HOST','localhost'),
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
        ];
    }
}
