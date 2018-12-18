<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\GetFolderPathResponse
     */
    public function setGetFolderPathResult($GetFolderPathResult)
    {
      $this->GetFolderPathResult = $GetFolderPathResult;
      return $this;
    }

}
