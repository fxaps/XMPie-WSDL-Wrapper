<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP;

class DocumentMapping
{

    /**
     * @var IDMapping $ID
     */
    protected $ID = null;

    /**
     * @param IDMapping $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return IDMapping
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param IDMapping $ID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\DocumentMapping
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
