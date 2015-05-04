<?php
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2014, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

namespace Hybridauth\Logger;

/**
 * Logger interface
 */
interface LoggerInterface
{
    /**
    * Info
    *
    * @param string $message
    *
    * @return boolean
    */
    public function info($message);

    /**
    * Debug
    *
    * @param string $message
    * @param mixed  $object
    *
    * @return boolean
    */
    public function debug($message, $object = null);

    /**
    * Error
    *
    * @param string $message
    * @param mixed  $object
    *
    * @return boolean
    */
    public function error($message, $object = null);
}
