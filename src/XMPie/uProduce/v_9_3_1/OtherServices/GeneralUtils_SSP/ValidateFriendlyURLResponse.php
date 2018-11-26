<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\GeneralUtils_SSP;

class ValidateFriendlyURLResponse
{

    /**
     * @var boolean $ValidateFriendlyURLResult
     */
    protected $ValidateFriendlyURLResult = null;

    /**
     * @param boolean $ValidateFriendlyURLResult
     */
    public function __construct($ValidateFriendlyURLResult = null)
    {
      $this->ValidateFriendlyURLResult = $ValidateFriendlyURLResult;
    }

    /**
     * @return boolean
     */
    public function getValidateFriendlyURLResult()
    {
      return $this->ValidateFriendlyURLResult;
    }

    /**
     * @param boolean $ValidateFriendlyURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\GeneralUtils_SSP\ValidateFriendlyURLResponse
     */
    public function setValidateFriendlyURLResult($ValidateFriendlyURLResult)
    {
      $this->ValidateFriendlyURLResult = $ValidateFriendlyURLResult;
      return $this;
    }

}
