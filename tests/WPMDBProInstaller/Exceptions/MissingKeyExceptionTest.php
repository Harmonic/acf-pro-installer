<?php namespace Harmonic\WPMDBProInstaller\Test\Exceptions;

use Harmonic\WPMDBProInstaller\Exceptions\MissingKeyException;

class MissingKeyExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testMessage()
    {
        $message = 'FIELD';
        $e = new MissingKeyException($message);
        $this->assertEquals(
            'Could not find a key for ACF PRO. ' .
            'Please make it available via the environment variable ' .
            $message,
            $e->getMessage()
        );
    }
}
