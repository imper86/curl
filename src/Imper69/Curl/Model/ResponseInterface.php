<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 22.06.17
 * Time: 16:15
 */

namespace Imper69\Curl\Model;


interface ResponseInterface
{
    /**
     * Returns raw response which can be stdClass object, array or HTML content
     *
     * @return mixed
     */
    public function getRawResponse();

    /**
     * Returns request array
     *
     * @return array
     */
    public function getRequest(): array;

    /**
     * Returns requested URL
     *
     * @return string
     */
    public function getRequestUrl(): string;
}