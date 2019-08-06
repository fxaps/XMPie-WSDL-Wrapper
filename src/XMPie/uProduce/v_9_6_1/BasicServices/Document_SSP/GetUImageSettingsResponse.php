<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP;

class GetUImageSettingsResponse
{

    /**
     * @var string $GetUImageSettingsResult
     */
    protected $GetUImageSettingsResult = null;

    /**
     * @param string $GetUImageSettingsResult
     */
    public function __construct($GetUImageSettingsResult = null)
    {
      $this->GetUImageSettingsResult = $GetUImageSettingsResult;
    }

    /**
     * @return string
     */
    public function getGetUImageSettingsResult()
    {
      return $this->GetUImageSettingsResult;
    }

    /**
     * @param string $GetUImageSettingsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP\GetUImageSettingsResponse
     */
    public function setGetUImageSettingsResult($GetUImageSettingsResult)
    {
      $this->GetUImageSettingsResult = $GetUImageSettingsResult;
      return $this;
    }

}
