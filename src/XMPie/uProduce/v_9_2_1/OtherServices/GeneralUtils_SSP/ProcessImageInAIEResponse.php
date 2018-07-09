<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP;

class ProcessImageInAIEResponse
{

    /**
     * @var base64Binary $ProcessImageInAIEResult
     */
    protected $ProcessImageInAIEResult = null;

    /**
     * @param base64Binary $ProcessImageInAIEResult
     */
    public function __construct($ProcessImageInAIEResult = null)
    {
      $this->ProcessImageInAIEResult = $ProcessImageInAIEResult;
    }

    /**
     * @return base64Binary
     */
    public function getProcessImageInAIEResult()
    {
      return $this->ProcessImageInAIEResult;
    }

    /**
     * @param base64Binary $ProcessImageInAIEResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\ProcessImageInAIEResponse
     */
    public function setProcessImageInAIEResult($ProcessImageInAIEResult)
    {
      $this->ProcessImageInAIEResult = $ProcessImageInAIEResult;
      return $this;
    }

}
