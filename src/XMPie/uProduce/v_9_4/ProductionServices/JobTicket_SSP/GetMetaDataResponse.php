<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class GetMetaDataResponse
{

    /**
     * @var ArrayOfProperty $GetMetaDataResult
     */
    protected $GetMetaDataResult = null;

    /**
     * @param ArrayOfProperty $GetMetaDataResult
     */
    public function __construct($GetMetaDataResult = null)
    {
      $this->GetMetaDataResult = $GetMetaDataResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetMetaDataResult()
    {
      return $this->GetMetaDataResult;
    }

    /**
     * @param ArrayOfProperty $GetMetaDataResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetMetaDataResponse
     */
    public function setGetMetaDataResult($GetMetaDataResult)
    {
      $this->GetMetaDataResult = $GetMetaDataResult;
      return $this;
    }

}
