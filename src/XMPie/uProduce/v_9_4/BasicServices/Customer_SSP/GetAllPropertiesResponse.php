<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP;

class GetAllPropertiesResponse
{

    /**
     * @var ArrayOfProperty $GetAllPropertiesResult
     */
    protected $GetAllPropertiesResult = null;

    /**
     * @param ArrayOfProperty $GetAllPropertiesResult
     */
    public function __construct($GetAllPropertiesResult = null)
    {
      $this->GetAllPropertiesResult = $GetAllPropertiesResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetAllPropertiesResult()
    {
      return $this->GetAllPropertiesResult;
    }

    /**
     * @param ArrayOfProperty $GetAllPropertiesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP\GetAllPropertiesResponse
     */
    public function setGetAllPropertiesResult($GetAllPropertiesResult)
    {
      $this->GetAllPropertiesResult = $GetAllPropertiesResult;
      return $this;
    }

}
