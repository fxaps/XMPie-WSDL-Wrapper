<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class GetTrackAllTextADORsResponse
{

    /**
     * @var boolean $GetTrackAllTextADORsResult
     */
    protected $GetTrackAllTextADORsResult = null;

    /**
     * @param boolean $GetTrackAllTextADORsResult
     */
    public function __construct($GetTrackAllTextADORsResult = null)
    {
      $this->GetTrackAllTextADORsResult = $GetTrackAllTextADORsResult;
    }

    /**
     * @return boolean
     */
    public function getGetTrackAllTextADORsResult()
    {
      return $this->GetTrackAllTextADORsResult;
    }

    /**
     * @param boolean $GetTrackAllTextADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetTrackAllTextADORsResponse
     */
    public function setGetTrackAllTextADORsResult($GetTrackAllTextADORsResult)
    {
      $this->GetTrackAllTextADORsResult = $GetTrackAllTextADORsResult;
      return $this;
    }

}
