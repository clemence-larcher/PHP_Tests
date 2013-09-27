<?php
/**
 * Created at 2 sept. 2013
 * @package
 */

/**
 * Atelier
 * @package
 * @author c.larcher
 * @copyright (c) 2013
 * @version 1.0
 */
namespace Neoxia\Atelier;

use Whoops\Example\Exception;
class Atelier
{
    protected static $participants = array('Alexandre', 'Ramuntxo');

    public function greeting($prenom = null)
    {
        if ('Clemence' === $prenom) {
            throw new \Exception('Oh non pas elle');
        }
        if (null === $prenom) {
            return 'Bonjour';
        } else {
            return 'Bonjour ' . $prenom;
        }
    }

    public static function setParticipants(array $participants)
    {
        self::$participants = $participants;
    }

    public static function getParticipants()
    {
        return self::$participants;
    }

    public function getPresentation()
    {
        return $this->presentation;
    }

    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }

    public function getTotalTime()
    {
        return $this->getPresentation()->getNbSlides() * 2;
    }

}