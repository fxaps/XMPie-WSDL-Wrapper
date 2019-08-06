<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP;

class GetSWFFontVersionResponse
{

    /**
     * @var string $GetSWFFontVersionResult
     */
    protected $GetSWFFontVersionResult = null;

    /**
     * @param string $GetSWFFontVersionResult
     */
    public function __construct($GetSWFFontVersionResult = null)
    {
      $this->GetSWFFontVersionResult = $GetSWFFontVersionResult;
    }

    /**
     * @return string
     */
    public function getGetSWFFontVersionResult()
    {
      return $this->GetSWFFontVersionResult;
    }

    /**
     * @param string $GetSWFFontVersionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFontVersionResponse
     */
    public function setGetSWFFontVersionResult($GetSWFFontVersionResult)
    {
      $this->GetSWFFontVersionResult = $GetSWFFontVersionResult;
      return $this;
    }

}
