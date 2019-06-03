<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class GetPopulationsResponse
{

    /**
     * @var ArrayOfString $GetPopulationsResult
     */
    protected $GetPopulationsResult = null;

    /**
     * @param ArrayOfString $GetPopulationsResult
     */
    public function __construct($GetPopulationsResult = null)
    {
      $this->GetPopulationsResult = $GetPopulationsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetPopulationsResult()
    {
      return $this->GetPopulationsResult;
    }

    /**
     * @param ArrayOfString $GetPopulationsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationsResponse
     */
    public function setGetPopulationsResult($GetPopulationsResult)
    {
      $this->GetPopulationsResult = $GetPopulationsResult;
      return $this;
    }

}
