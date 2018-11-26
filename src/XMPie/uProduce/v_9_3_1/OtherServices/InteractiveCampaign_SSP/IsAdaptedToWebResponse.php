<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP;

class IsAdaptedToWebResponse
{

    /**
     * @var boolean $IsAdaptedToWebResult
     */
    protected $IsAdaptedToWebResult = null;

    /**
     * @param boolean $IsAdaptedToWebResult
     */
    public function __construct($IsAdaptedToWebResult = null)
    {
      $this->IsAdaptedToWebResult = $IsAdaptedToWebResult;
    }

    /**
     * @return boolean
     */
    public function getIsAdaptedToWebResult()
    {
      return $this->IsAdaptedToWebResult;
    }

    /**
     * @param boolean $IsAdaptedToWebResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\IsAdaptedToWebResponse
     */
    public function setIsAdaptedToWebResult($IsAdaptedToWebResult)
    {
      $this->IsAdaptedToWebResult = $IsAdaptedToWebResult;
      return $this;
    }

}
