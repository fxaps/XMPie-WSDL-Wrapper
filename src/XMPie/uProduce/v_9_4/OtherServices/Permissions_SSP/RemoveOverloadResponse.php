<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP;

class RemoveOverloadResponse
{

    /**
     * @var boolean $RemoveOverloadResult
     */
    protected $RemoveOverloadResult = null;

    /**
     * @param boolean $RemoveOverloadResult
     */
    public function __construct($RemoveOverloadResult = null)
    {
      $this->RemoveOverloadResult = $RemoveOverloadResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveOverloadResult()
    {
      return $this->RemoveOverloadResult;
    }

    /**
     * @param boolean $RemoveOverloadResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\RemoveOverloadResponse
     */
    public function setRemoveOverloadResult($RemoveOverloadResult)
    {
      $this->RemoveOverloadResult = $RemoveOverloadResult;
      return $this;
    }

}
