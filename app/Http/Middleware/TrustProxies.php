<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array
     */
     protected $proxies = '*';

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    //protected $headers = Request::HEADER_X_FORWARDED_ALL;
    protected $headers  = [
                       Request::HEADER_X_FORWARDED_ALL,
      // \Illuminate\Http\Request::HEADER_CLIENT_IP    => 'X_FORWARDED_FOR',
      // \Illuminate\Http\Request::HEADER_CLIENT_HOST  => 'X_FORWARDED_HOST',
      // \Illuminate\Http\Request::HEADER_CLIENT_PROTO => 'X_FORWARDED_PROTO',
      // \Illuminate\Http\Request::HEADER_CLIENT_PORT  => 'X_FORWARDED_PORT',
    ];
}
