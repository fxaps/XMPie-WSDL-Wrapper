<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetAllMetaDataResponse
{

    /**
     * @var ArrayOfProperty $GetAllMetaDataResult
     */
    protected $GetAllMetaDataResult = null;

    /**
     * @param ArrayOfProperty $GetAllMetaDataResult
     */
    public function __construct($GetAllMetaDataResult = null)
    {
      $this->GetAllMetaDataResult = $GetAllMetaDataResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetAllMetaDataResult()
    {
      return $this->GetAllMetaDataResult;
    }

    /**
     * @param ArrayOfProperty $GetAllMetaDataResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetAllMetaDataResponse
     */
    public function setGetAllMetaDataResult($GetAllMetaDataResult)
    {
      $this->GetAllMetaDataResult = $GetAllMetaDataResult;
      return $this;
    }

}
