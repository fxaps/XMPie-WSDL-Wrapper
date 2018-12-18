<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP;

class GetResourceBinaryFileStreamResponse
{

    /**
     * @var base64Binary $GetResourceBinaryFileStreamResult
     */
    protected $GetResourceBinaryFileStreamResult = null;

    /**
     * @param base64Binary $GetResourceBinaryFileStreamResult
     */
    public function __construct($GetResourceBinaryFileStreamResult = null)
    {
      $this->GetResourceBinaryFileStreamResult = $GetResourceBinaryFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetResourceBinaryFileStreamResult()
    {
      return $this->GetResourceBinaryFileStreamResult;
    }

    /**
     * @param base64Binary $GetResourceBinaryFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\GetResourceBinaryFileStreamResponse
     */
    public function setGetResourceBinaryFileStreamResult($GetResourceBinaryFileStreamResult)
    {
      $this->GetResourceBinaryFileStreamResult = $GetResourceBinaryFileStreamResult;
      return $this;
    }

}
