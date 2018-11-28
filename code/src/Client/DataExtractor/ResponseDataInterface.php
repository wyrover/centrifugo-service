<?php

namespace Dykyi\Client\DataExtractor;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface ResponseData
 * @package Dykyi
 */
interface ResponseDataInterface
{
    /**
     * @param ResponseInterface $response
     *
     * @return mixed
     */
    public function extract(ResponseInterface $response);
}
