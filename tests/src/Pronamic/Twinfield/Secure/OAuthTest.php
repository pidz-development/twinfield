<?php
namespace Pronamic\Twinfield\Secure;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-08-20 at 09:00:06.
 */
class OAuthTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Config
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $options = array();
        $options['clientToken'] = 'testClientToken';
        $options['clientSecret'] = 'testClientSecret';
        $options['redirectURL'] = 'testRedirectURL';
        $this->object = new OAuth($options);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }


    /**
     * @covers Pronamic\Twinfield\Secure\OAuth\Parameters
     */
    public function testGetParameters()
    {
        $this->assertSame($this->object->needToRedirect(), true);
        $this->assertSame($this->object->willAutoRedirect(), false);
        $this->assertSame($this->object->getRedirectScript(), 'sorry, temp_token not set');
    }
}
