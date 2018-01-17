<?php namespace Harmonic\WPMDBProInstaller\Test\Exceptions;

use Harmonic\WPMDBProInstaller\Exceptions\MissingSiteUrlException;

class MissingSiteUrlExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testMessage()
    {
        $message = 'FIELD';
        $e = new MissingSiteUrlException($message);
        $this->assertEquals(
            'Could not find a site URL for WP Migrate DB Pro. ' .
            'Please make it available via the environment variable ' .
            $message,
            $e->getMessage()
        );
    }
}
