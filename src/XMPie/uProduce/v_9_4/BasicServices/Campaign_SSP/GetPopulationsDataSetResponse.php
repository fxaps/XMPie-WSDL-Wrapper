<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP;

class GetPopulationsDataSetResponse
{

    /**
     * @var GetPopulationsDataSetResult $GetPopulationsDataSetResult
     */
    protected $GetPopulationsDataSetResult = null;

    /**
     * @param GetPopulationsDataSetResult $GetPopulationsDataSetResult
     */
    public function __construct($GetPopulationsDataSetResult = null)
    {
      $this->GetPopulationsDataSetResult = $GetPopulationsDataSetResult;
    }

    /**
     * @return GetPopulationsDataSetResult
     */
    public function getGetPopulationsDataSetResult()
    {
      return $this->GetPopulationsDataSetResult;
    }

    /**
     * @param GetPopulationsDataSetResult $GetPopulationsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\GetPopulationsDataSetResponse
     */
    public function setGetPopulationsDataSetResult($GetPopulationsDataSetResult)
    {
      $this->GetPopulationsDataSetResult = $GetPopulationsDataSetResult;
      return $this;
    }

}
