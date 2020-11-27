<?php
namespace GoetasWebservices\XML\WSDLReader\Events;

use GoetasWebservices\XML\WSDLReader\Wsdl\Message;
use GoetasWebservices\XML\WSDLReader\Events\WsdlEvent;

class MessageEvent extends WsdlEvent
{
    /**
     * @var \GoetasWebservices\XML\WSDLReader\Wsdl\Message
     */
    protected $Message;

    public function __construct(Message $Message, \DOMElement $node)
    {
        parent::__construct($node);
        $this->Message = $Message;
    }

    /**
     * @return \GoetasWebservices\XML\WSDLReader\Wsdl\Message
     */
    public function getMessage()
    {
        return $this->Message;
    }
}