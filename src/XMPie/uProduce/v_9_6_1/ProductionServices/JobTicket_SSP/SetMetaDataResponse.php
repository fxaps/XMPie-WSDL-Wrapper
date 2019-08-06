<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetMetaDataResponse
{

    /**
     * @var boolean $SetMetaDataResult
     */
    protected $SetMetaDataResult = null;

    /**
     * @param boolean $SetMetaDataResult
     */
    public function __construct($SetMetaDataResult = null)
    {
      $this->SetMetaDataResult = $SetMetaDataResult;
    }

    /**
     * @return boolean
     */
    public function getSetMetaDataResult()
    {
      return $this->SetMetaDataResult;
    }

    /**
     * @param boolean $SetMetaDataResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetMetaDataResponse
     */
    public function setSetMetaDataResult($SetMetaDataResult)
    {
      $this->SetMetaDataResult = $SetMetaDataResult;
      return $this;
    }

}
