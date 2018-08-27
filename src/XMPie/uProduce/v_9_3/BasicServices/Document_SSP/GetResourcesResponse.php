<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP;

class GetResourcesResponse
{

    /**
     * @var ArrayOfString $GetResourcesResult
     */
    protected $GetResourcesResult = null;

    /**
     * @param ArrayOfString $GetResourcesResult
     */
    public function __construct($GetResourcesResult = null)
    {
      $this->GetResourcesResult = $GetResourcesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetResourcesResult()
    {
      return $this->GetResourcesResult;
    }

    /**
     * @param ArrayOfString $GetResourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP\GetResourcesResponse
     */
    public function setGetResourcesResult($GetResourcesResult)
    {
      $this->GetResourcesResult = $GetResourcesResult;
      return $this;
    }

}
