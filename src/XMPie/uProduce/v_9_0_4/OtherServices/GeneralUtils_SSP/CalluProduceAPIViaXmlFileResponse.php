<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP;

class CalluProduceAPIViaXmlFileResponse
{

    /**
     * @var string $CalluProduceAPIViaXmlFileResult
     */
    protected $CalluProduceAPIViaXmlFileResult = null;

    /**
     * @param string $CalluProduceAPIViaXmlFileResult
     */
    public function __construct($CalluProduceAPIViaXmlFileResult = null)
    {
      $this->CalluProduceAPIViaXmlFileResult = $CalluProduceAPIViaXmlFileResult;
    }

    /**
     * @return string
     */
    public function getCalluProduceAPIViaXmlFileResult()
    {
      return $this->CalluProduceAPIViaXmlFileResult;
    }

    /**
     * @param string $CalluProduceAPIViaXmlFileResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalluProduceAPIViaXmlFileResponse
     */
    public function setCalluProduceAPIViaXmlFileResult($CalluProduceAPIViaXmlFileResult)
    {
      $this->CalluProduceAPIViaXmlFileResult = $CalluProduceAPIViaXmlFileResult;
      return $this;
    }

}
