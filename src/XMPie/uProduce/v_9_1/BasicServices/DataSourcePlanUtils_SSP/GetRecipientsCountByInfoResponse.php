<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP;

class GetRecipientsCountByInfoResponse
{

    /**
     * @var int $GetRecipientsCountByInfoResult
     */
    protected $GetRecipientsCountByInfoResult = null;

    /**
     * @param int $GetRecipientsCountByInfoResult
     */
    public function __construct($GetRecipientsCountByInfoResult = null)
    {
      $this->GetRecipientsCountByInfoResult = $GetRecipientsCountByInfoResult;
    }

    /**
     * @return int
     */
    public function getGetRecipientsCountByInfoResult()
    {
      return $this->GetRecipientsCountByInfoResult;
    }

    /**
     * @param int $GetRecipientsCountByInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountByInfoResponse
     */
    public function setGetRecipientsCountByInfoResult($GetRecipientsCountByInfoResult)
    {
      $this->GetRecipientsCountByInfoResult = $GetRecipientsCountByInfoResult;
      return $this;
    }

}
