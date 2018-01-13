<?php namespace Harmonic\WPMDBProInstaller\Exceptions;

/**
 * Exception thrown if the WP Migrate DB PRO key is not available in the environment
 */
class MissingSiteUrlException extends \Exception
{
    public function __construct(
        $message = '',
        $code = 0,
        \Exception $previous = null
    ) {
        parent::__construct(
            'Could not find a site URL for WP Migrate DB Pro. ' .
            'Please make it available via the environment variable ' .
            $message,
            $code,
            $previous
        );
    }
}
