<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP;

class GetCorrespondingJobIDResponse
{

    /**
     * @var string $GetCorrespondingJobIDResult
     */
    protected $GetCorrespondingJobIDResult = null;

    /**
     * @param string $GetCorrespondingJobIDResult
     */
    public function __construct($GetCorrespondingJobIDResult = null)
    {
      $this->GetCorrespondingJobIDResult = $GetCorrespondingJobIDResult;
    }

    /**
     * @return string
     */
    public function getGetCorrespondingJobIDResult()
    {
      return $this->GetCorrespondingJobIDResult;
    }

    /**
     * @param string $GetCorrespondingJobIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\GetCorrespondingJobIDResponse
     */
    public function setGetCorrespondingJobIDResult($GetCorrespondingJobIDResult)
    {
      $this->GetCorrespondingJobIDResult = $GetCorrespondingJobIDResult;
      return $this;
    }

}
