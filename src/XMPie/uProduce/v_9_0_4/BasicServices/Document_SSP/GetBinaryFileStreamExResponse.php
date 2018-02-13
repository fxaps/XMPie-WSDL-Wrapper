<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetBinaryFileStreamExResponse
{

    /**
     * @var base64Binary $GetBinaryFileStreamExResult
     */
    protected $GetBinaryFileStreamExResult = null;

    /**
     * @param base64Binary $GetBinaryFileStreamExResult
     */
    public function __construct($GetBinaryFileStreamExResult = null)
    {
      $this->GetBinaryFileStreamExResult = $GetBinaryFileStreamExResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetBinaryFileStreamExResult()
    {
      return $this->GetBinaryFileStreamExResult;
    }

    /**
     * @param base64Binary $GetBinaryFileStreamExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetBinaryFileStreamExResponse
     */
    public function setGetBinaryFileStreamExResult($GetBinaryFileStreamExResult)
    {
      $this->GetBinaryFileStreamExResult = $GetBinaryFileStreamExResult;
      return $this;
    }

}
