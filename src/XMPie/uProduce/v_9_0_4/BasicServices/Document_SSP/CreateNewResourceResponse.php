<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class CreateNewResourceResponse
{

    /**
     * @var string $CreateNewResourceResult
     */
    protected $CreateNewResourceResult = null;

    /**
     * @param string $CreateNewResourceResult
     */
    public function __construct($CreateNewResourceResult = null)
    {
      $this->CreateNewResourceResult = $CreateNewResourceResult;
    }

    /**
     * @return string
     */
    public function getCreateNewResourceResult()
    {
      return $this->CreateNewResourceResult;
    }

    /**
     * @param string $CreateNewResourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\CreateNewResourceResponse
     */
    public function setCreateNewResourceResult($CreateNewResourceResult)
    {
      $this->CreateNewResourceResult = $CreateNewResourceResult;
      return $this;
    }

}
