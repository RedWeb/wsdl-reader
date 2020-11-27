<?php
namespace GoetasWebservices\XML\WSDLReader\Events;

use Symfony\Contracts\EventDispatcher\Event;

abstract class WsdlEvent extends Event
{
    /**
     *
     * @var \DOMElement
     */
    protected $node;

    public function __construct(\DOMElement $node)
    {
        $this->node = $node;
    }

    /**
     * @return \DOMElement
     */
    public function getNode()
    {
        return $this->node;
    }
}