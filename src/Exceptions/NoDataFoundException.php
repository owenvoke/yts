<?php

namespace pxgamer\YTS\Exceptions;

class NoDataFoundException extends \Exception
{
    /** @var string */
    protected $message = 'No data was found from the API.';
}
