<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP;

class AddXMPieRecipietKeyToMapResponse
{

    /**
     * @var boolean $AddXMPieRecipietKeyToMapResult
     */
    protected $AddXMPieRecipietKeyToMapResult = null;

    /**
     * @param boolean $AddXMPieRecipietKeyToMapResult
     */
    public function __construct($AddXMPieRecipietKeyToMapResult = null)
    {
      $this->AddXMPieRecipietKeyToMapResult = $AddXMPieRecipietKeyToMapResult;
    }

    /**
     * @return boolean
     */
    public function getAddXMPieRecipietKeyToMapResult()
    {
      return $this->AddXMPieRecipietKeyToMapResult;
    }

    /**
     * @param boolean $AddXMPieRecipietKeyToMapResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\AddXMPieRecipietKeyToMapResponse
     */
    public function setAddXMPieRecipietKeyToMapResult($AddXMPieRecipietKeyToMapResult)
    {
      $this->AddXMPieRecipietKeyToMapResult = $AddXMPieRecipietKeyToMapResult;
      return $this;
    }

}
