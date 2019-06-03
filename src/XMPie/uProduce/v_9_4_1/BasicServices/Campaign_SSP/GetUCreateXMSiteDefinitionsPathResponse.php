<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class GetUCreateXMSiteDefinitionsPathResponse
{

    /**
     * @var string $GetUCreateXMSiteDefinitionsPathResult
     */
    protected $GetUCreateXMSiteDefinitionsPathResult = null;

    /**
     * @param string $GetUCreateXMSiteDefinitionsPathResult
     */
    public function __construct($GetUCreateXMSiteDefinitionsPathResult = null)
    {
      $this->GetUCreateXMSiteDefinitionsPathResult = $GetUCreateXMSiteDefinitionsPathResult;
    }

    /**
     * @return string
     */
    public function getGetUCreateXMSiteDefinitionsPathResult()
    {
      return $this->GetUCreateXMSiteDefinitionsPathResult;
    }

    /**
     * @param string $GetUCreateXMSiteDefinitionsPathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetUCreateXMSiteDefinitionsPathResponse
     */
    public function setGetUCreateXMSiteDefinitionsPathResult($GetUCreateXMSiteDefinitionsPathResult)
    {
      $this->GetUCreateXMSiteDefinitionsPathResult = $GetUCreateXMSiteDefinitionsPathResult;
      return $this;
    }

}
