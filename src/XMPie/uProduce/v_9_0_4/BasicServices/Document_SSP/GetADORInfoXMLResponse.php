<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetADORInfoXMLResponse
{

    /**
     * @var GetADORInfoXMLResult $GetADORInfoXMLResult
     */
    protected $GetADORInfoXMLResult = null;

    /**
     * @param GetADORInfoXMLResult $GetADORInfoXMLResult
     */
    public function __construct($GetADORInfoXMLResult = null)
    {
      $this->GetADORInfoXMLResult = $GetADORInfoXMLResult;
    }

    /**
     * @return GetADORInfoXMLResult
     */
    public function getGetADORInfoXMLResult()
    {
      return $this->GetADORInfoXMLResult;
    }

    /**
     * @param GetADORInfoXMLResult $GetADORInfoXMLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetADORInfoXMLResponse
     */
    public function setGetADORInfoXMLResult($GetADORInfoXMLResult)
    {
      $this->GetADORInfoXMLResult = $GetADORInfoXMLResult;
      return $this;
    }

}
