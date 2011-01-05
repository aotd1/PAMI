<?php
/**
 * Event triggered when an action Status is issued.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://www.noneyet.ar/
 */
namespace PAMI\Message\Event;

use PAMI\Message\Event\EventMessage;

/**
 * Event triggered when an action Status is issued.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Event
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @link       http://www.noneyet.ar/
 */
class StatusEvent extends EventMessage
{
    /**
     * Returns key: 'Privilege'.
     *
     * @return string
     */
    public function getPrivilege()
    {
        return $this->getKey('Privilege');
    }
    
    /**
     * Returns key: 'Channel'.
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->getKey('Channel');
    }

    /**
     * Returns key: 'UniqueID'.
     *
     * @return string
     */
    public function getUniqueID()
    {
        return $this->getKey('UniqueID');
    }
    
    /**
     * Returns key: 'Context'.
     *
     * @return string
     */
    public function getContext()
    {
        return $this->getKey('Context');
    }
    
    /**
     * Returns key: 'Extension'.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->getKey('Extension');
    }


    /**
     * Returns key: 'Priority'.
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->getKey('Priority');
    }

    /**
     * Returns key: 'ChannelState'.
     *
     * @return string
     */
    public function getChannelState()
    {
        return $this->getKey('ChannelState');
    }

    /**
     * Returns key: 'ChannelStateDesc'.
     *
     * @return string
     */
    public function getChannelStateDesc()
    {
        return $this->getKey('ChannelStateDesc');
    }

    /**
     * Returns key: 'Application'.
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->getKey('Application');
    }
    
    /**
     * Returns key: 'ApplicationData'.
     *
     * @return string
     */
    public function getApplicationData()
    {
        return $this->getKey('ApplicationData');
    }

    /**
     * Returns key: 'CallerIDNum'.
     *
     * @return string
     */
    public function getCallerIDNum()
    {
        return $this->getKey('CallerIDNum');
    }
    
    /**
     * Returns key: 'Duration'.
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->getKey('Duration');
    }
    
    /**
     * Returns key: 'AccountCode'.
     *
     * @return string
     */
    public function getAccountCode()
    {
        return $this->getKey('AccountCode');
    }
    
    /**
     * Returns key: 'Seconds'.
     *
     * @return string
     */
    public function getSeconds()
    {
        return $this->getKey('Seconds');
    }
    
    /**
     * Returns key: 'BridgedChannel'.
     *
     * @return string
     */
    public function getBridgedChannel()
    {
        return $this->getKey('BridgedChannel');
    }

    /**
     * Returns key: 'BridgedUniqueID'.
     *
     * @return string
     */
    public function getBridgedUniqueID()
    {
        return $this->getKey('BridgedUniqueID');
    }
    
    /**
     * Constructor.
     *
     * @param string $rawContent Literal message as received from ami.
     * 
     * @return void
     */
    public function __construct($rawContent)
    {
        parent::__construct($rawContent);
    }
}