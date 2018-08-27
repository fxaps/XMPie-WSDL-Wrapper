<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\InteractiveCampaign_SSP;

class IsExistByIDResponse
{

    /**
     * @var boolean $IsExistByIDResult
     */
    protected $IsExistByIDResult = null;

    /**
     * @param boolean $IsExistByIDResult
     */
    public function __construct($IsExistByIDResult = null)
    {
      $this->IsExistByIDResult = $IsExistByIDResult;
    }

    /**
     * @return boolean
     */
    public function getIsExistByIDResult()
    {
      return $this->IsExistByIDResult;
    }

    /**
     * @param boolean $IsExistByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\InteractiveCampaign_SSP\IsExistByIDResponse
     */
    public function setIsExistByIDResult($IsExistByIDResult)
    {
      $this->IsExistByIDResult = $IsExistByIDResult;
      return $this;
    }

}
