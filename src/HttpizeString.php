<?php

namespace ibrahimtuzlak0295\HttpizeString;

class HttpizeString
{
    private $httpizedString;

    /**
    * Filter a value in a way that it always must be prepended with either http:// or https://.
    * Useful when we must be sure a string will be treated as a URL.
    * @param  string $string Value to filter
    * @return string         Value prefixed with http:// or https://
    */
    public function __construct(string $string)
    {
        $this->httpizedString = preg_match('{https?://}', $string) ? $string : 'http://' . $string;
    }

    public function __toString() : string
    {
        return $this->httpizedString;
    }
}
