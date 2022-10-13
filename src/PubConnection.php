<?php

declare(strict_types=1);

namespace PixelFederation\OpenSwooleZMQ;

use ZMQ;

final class PubConnection extends WriteConnection
{
    public function __construct(string $dsn)
    {
        parent::__construct($dsn, ZMQ::SOCKET_PUB);
    }
}