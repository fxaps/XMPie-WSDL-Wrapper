<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP;

class GetBinarySecondaryFileStreamResponse
{

    /**
     * @var base64Binary $GetBinarySecondaryFileStreamResult
     */
    protected $GetBinarySecondaryFileStreamResult = null;

    /**
     * @param base64Binary $GetBinarySecondaryFileStreamResult
     */
    public function __construct($GetBinarySecondaryFileStreamResult = null)
    {
      $this->GetBinarySecondaryFileStreamResult = $GetBinarySecondaryFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetBinarySecondaryFileStreamResult()
    {
      return $this->GetBinarySecondaryFileStreamResult;
    }

    /**
     * @param base64Binary $GetBinarySecondaryFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetBinarySecondaryFileStreamResponse
     */
    public function setGetBinarySecondaryFileStreamResult($GetBinarySecondaryFileStreamResult)
    {
      $this->GetBinarySecondaryFileStreamResult = $GetBinarySecondaryFileStreamResult;
      return $this;
    }

}
