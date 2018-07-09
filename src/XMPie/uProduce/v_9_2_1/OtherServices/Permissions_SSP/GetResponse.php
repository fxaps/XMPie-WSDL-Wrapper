<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Permissions_SSP;

class GetResponse
{

    /**
     * @var ArrayOfPermission $GetResult
     */
    protected $GetResult = null;

    /**
     * @param ArrayOfPermission $GetResult
     */
    public function __construct($GetResult = null)
    {
      $this->GetResult = $GetResult;
    }

    /**
     * @return ArrayOfPermission
     */
    public function getGetResult()
    {
      return $this->GetResult;
    }

    /**
     * @param ArrayOfPermission $GetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Permissions_SSP\GetResponse
     */
    public function setGetResult($GetResult)
    {
      $this->GetResult = $GetResult;
      return $this;
    }

}
