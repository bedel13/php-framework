<?php

namespace Somecode\Framework\Http;

class Request
{
    public function __construct(
        private readonly array $getParams,
        private readonly array $postDate,
        private readonly array $cookies,
        private readonly array $files,
        public readonly array $server,
    )
    {

    }

    public static function createFromGlobals(): static {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }

    public function getParam(string $key) {

    }
}