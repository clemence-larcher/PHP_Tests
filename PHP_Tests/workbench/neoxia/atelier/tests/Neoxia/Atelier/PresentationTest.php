<?php
/**
 * Created at 22 sept. 2013
 */

/**
 * PresentationTest
 * @author c.larcher
 * @copyright (c) 2013
 * @version 1.0
 */
use Neoxia\Atelier\Presentation;

class PresentationTest extends \PHPUnit_Framework_TestCase
{
    public function testGetNbSlidesWorks()
    {
        $presentation = new Presentation();
        $this->assertGreaterThanOrEqual(2, $presentation->getNbSlides());
    }
}
