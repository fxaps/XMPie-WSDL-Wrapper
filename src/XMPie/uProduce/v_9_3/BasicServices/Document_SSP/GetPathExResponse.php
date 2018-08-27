<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP;

class GetPathExResponse
{

    /**
     * @var string $GetPathExResult
     */
    protected $GetPathExResult = null;

    /**
     * @param string $GetPathExResult
     */
    public function __construct($GetPathExResult = null)
    {
      $this->GetPathExResult = $GetPathExResult;
    }

    /**
     * @return string
     */
    public function getGetPathExResult()
    {
      return $this->GetPathExResult;
    }

    /**
     * @param string $GetPathExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP\GetPathExResponse
     */
    public function setGetPathExResult($GetPathExResult)
    {
      $this->GetPathExResult = $GetPathExResult;
      return $this;
    }

}
