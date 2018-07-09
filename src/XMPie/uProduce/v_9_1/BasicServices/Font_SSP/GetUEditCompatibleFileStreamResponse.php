<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP;

class GetUEditCompatibleFileStreamResponse
{

    /**
     * @var base64Binary $GetUEditCompatibleFileStreamResult
     */
    protected $GetUEditCompatibleFileStreamResult = null;

    /**
     * @param base64Binary $GetUEditCompatibleFileStreamResult
     */
    public function __construct($GetUEditCompatibleFileStreamResult = null)
    {
      $this->GetUEditCompatibleFileStreamResult = $GetUEditCompatibleFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetUEditCompatibleFileStreamResult()
    {
      return $this->GetUEditCompatibleFileStreamResult;
    }

    /**
     * @param base64Binary $GetUEditCompatibleFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\GetUEditCompatibleFileStreamResponse
     */
    public function setGetUEditCompatibleFileStreamResult($GetUEditCompatibleFileStreamResult)
    {
      $this->GetUEditCompatibleFileStreamResult = $GetUEditCompatibleFileStreamResult;
      return $this;
    }

}
