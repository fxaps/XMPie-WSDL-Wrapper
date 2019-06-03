<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Account_SSP;

class GetPropertiesResponse
{

    /**
     * @var ArrayOfProperty $GetPropertiesResult
     */
    protected $GetPropertiesResult = null;

    /**
     * @param ArrayOfProperty $GetPropertiesResult
     */
    public function __construct($GetPropertiesResult = null)
    {
      $this->GetPropertiesResult = $GetPropertiesResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetPropertiesResult()
    {
      return $this->GetPropertiesResult;
    }

    /**
     * @param ArrayOfProperty $GetPropertiesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Account_SSP\GetPropertiesResponse
     */
    public function setGetPropertiesResult($GetPropertiesResult)
    {
      $this->GetPropertiesResult = $GetPropertiesResult;
      return $this;
    }

}
