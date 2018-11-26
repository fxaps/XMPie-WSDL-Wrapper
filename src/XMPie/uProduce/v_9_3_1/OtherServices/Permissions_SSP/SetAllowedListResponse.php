<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Permissions_SSP;

class SetAllowedListResponse
{

    /**
     * @var boolean $SetAllowedListResult
     */
    protected $SetAllowedListResult = null;

    /**
     * @param boolean $SetAllowedListResult
     */
    public function __construct($SetAllowedListResult = null)
    {
      $this->SetAllowedListResult = $SetAllowedListResult;
    }

    /**
     * @return boolean
     */
    public function getSetAllowedListResult()
    {
      return $this->SetAllowedListResult;
    }

    /**
     * @param boolean $SetAllowedListResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Permissions_SSP\SetAllowedListResponse
     */
    public function setSetAllowedListResult($SetAllowedListResult)
    {
      $this->SetAllowedListResult = $SetAllowedListResult;
      return $this;
    }

}
