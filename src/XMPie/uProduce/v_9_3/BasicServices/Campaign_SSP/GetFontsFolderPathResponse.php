<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP;

class GetFontsFolderPathResponse
{

    /**
     * @var string $GetFontsFolderPathResult
     */
    protected $GetFontsFolderPathResult = null;

    /**
     * @param string $GetFontsFolderPathResult
     */
    public function __construct($GetFontsFolderPathResult = null)
    {
      $this->GetFontsFolderPathResult = $GetFontsFolderPathResult;
    }

    /**
     * @return string
     */
    public function getGetFontsFolderPathResult()
    {
      return $this->GetFontsFolderPathResult;
    }

    /**
     * @param string $GetFontsFolderPathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\GetFontsFolderPathResponse
     */
    public function setGetFontsFolderPathResult($GetFontsFolderPathResult)
    {
      $this->GetFontsFolderPathResult = $GetFontsFolderPathResult;
      return $this;
    }

}
