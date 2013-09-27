<?php

/**
 * Created at 9 sept. 2013
 * @package test
 */

/**
 * AtelierTest
 * @package test
 * @author c.larcher
 * @copyright (c) 2013
 * @version 1.0
 */
use Neoxia\Atelier\Atelier;
use Neoxia\Atelier\Presentation;

class AtelierTest extends \PHPUnit_Framework_TestCase
{

    protected $atelier;

    public function setUp()
    {
        $this->atelier = new Atelier();
    }

    public function tearDown()
    {
        $this->atelier->setParticipants(array('Alexandre', 'Ramuntxo'));
    }

    public function testGreetingReturnsBonjour()
    {
        $this->assertEquals('Bonjour', $this->atelier->greeting());
    }

    public function testGreetingWithParameterReturnBonjourWithParams()
    {
        $this->assertEquals('Bonjour Farah', $this->atelier->greeting('Farah'));
    }

    public function testSetParticipantsWorks()
    {
        $this->atelier->setParticipants(array('Aurelien'));
        $this->assertInternalType('array', $this->atelier->getParticipants());
        $this->assertCount(1, $this->atelier->getParticipants());
        $this->assertEquals(array('Aurelien'), $this->atelier->getParticipants());
    }

    public function testGetParticipantsWorks()
    {
        $this->assertEquals(array('Alexandre', 'Ramuntxo'), $this->atelier->getParticipants());
    }

    public function testGreetingWithClemenceThrowsException()
    {
        $this->setExpectedException('Exception', 'Oh non');
        $this->atelier->greeting('Clemence');
    }

    public function testGetTotalTimeWorks()
    {
        $mock = $this->getMock('Neoxia\Atelier\Presentation');
        $mock->expects(self::any())
             ->method('getNbSlides')
             ->will(self::onConsecutiveCalls(3, 4, 5));
        $this->atelier->setPresentation($mock);
        $this->assertEquals(6, $this->atelier->getTotalTime());
        $this->assertEquals(8, $this->atelier->getTotalTime());
        $this->assertEquals(10, $this->atelier->getTotalTime());
    }

    public function testMarkIncomplete()
    {
//        echo $bobo->baba();
    }

    public function testMarkSlipped()
    {
        $this->markTestSkipped('J ai la flemme');
    }
}