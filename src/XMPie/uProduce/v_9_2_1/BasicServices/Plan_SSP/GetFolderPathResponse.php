<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP;

class GetFolderPathResponse
{

    /**
     * @var string $GetFolderPathResult
     */
    protected $GetFolderPathResult = null;

    /**
     * @param string $GetFolderPathResult
     */
    public function __construct($GetFolderPathResult = null)
    {
      $this->GetFolderPathResult = $GetFolderPathResult;
    }

    /**
     * @return string
     */
    public function getGetFolderPathResult()
    {
      return $this->GetFolderPathResult;
    }

    /**
     * @param string $GetFolderPathResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP\GetFolderPathResponse
     */
    public function setGetFolderPathResult($GetFolderPathResult)
    {
      $this->GetFolderPathResult = $GetFolderPathResult;
      return $this;
    }

}
