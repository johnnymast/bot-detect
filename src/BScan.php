<?php
namespace Redbox\BScan;

class BScan
{
    /**
     * @var array
     */
    private $crawlers = array(
        'Google' => 'Google',
        'MSN' => 'msnbot',
        'Rambler' => 'Rambler',
        'Yahoo' => 'Yahoo',
        'AbachoBOT' => 'AbachoBOT',
        'accoona' => 'Accoona',
        'AcoiRobot' => 'AcoiRobot',
        'ASPSeek' => 'ASPSeek',
        'CrocCrawler' => 'CrocCrawler',
        'Dumbot' => 'Dumbot',
        'FAST-WebCrawler' => 'FAST-WebCrawler',
        'GeonaBot' => 'GeonaBot',
        'Gigabot' => 'Gigabot',
        'Lycos spider' => 'Lycos',
        'MSRBOT' => 'MSRBOT',
        'Altavista robot' => 'Scooter',
        'AltaVista robot' => 'Altavista',
        'ID-Search Bot' => 'IDBot',
        'eStyle Bot' => 'eStyle',
        'Scrubby robot' => 'Scrubby',
        'Facebook' => 'facebookexternalhit',
    );

    /**
     * @param string $name
     * @param string $identifier
     * @return $this
     */
    public function addBot($name = '', $identifier = '') {
        $this->bots[$identifier] = $name;
        return $this;
    }

    public function getBot() {



        return false;
    }

    /**
     * @param string $userAgent
     * @return bool
     */
    public function isBot($userAgent = '') {
        if (strpos(self::$this->crawlers, $userAgent) === false)
            return false;
        else {
            return TRUE;
        }
    }


}