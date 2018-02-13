<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP;

class CreateNewJobResponse
{

    /**
     * @var string $CreateNewJobResult
     */
    protected $CreateNewJobResult = null;

    /**
     * @param string $CreateNewJobResult
     */
    public function __construct($CreateNewJobResult = null)
    {
      $this->CreateNewJobResult = $CreateNewJobResult;
    }

    /**
     * @return string
     */
    public function getCreateNewJobResult()
    {
      return $this->CreateNewJobResult;
    }

    /**
     * @param string $CreateNewJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\CreateNewJobResponse
     */
    public function setCreateNewJobResult($CreateNewJobResult)
    {
      $this->CreateNewJobResult = $CreateNewJobResult;
      return $this;
    }

}
