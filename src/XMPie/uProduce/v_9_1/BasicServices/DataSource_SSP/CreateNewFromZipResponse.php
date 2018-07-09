<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSource_SSP;

class CreateNewFromZipResponse
{

    /**
     * @var string $CreateNewFromZipResult
     */
    protected $CreateNewFromZipResult = null;

    /**
     * @param string $CreateNewFromZipResult
     */
    public function __construct($CreateNewFromZipResult = null)
    {
      $this->CreateNewFromZipResult = $CreateNewFromZipResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromZipResult()
    {
      return $this->CreateNewFromZipResult;
    }

    /**
     * @param string $CreateNewFromZipResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSource_SSP\CreateNewFromZipResponse
     */
    public function setCreateNewFromZipResult($CreateNewFromZipResult)
    {
      $this->CreateNewFromZipResult = $CreateNewFromZipResult;
      return $this;
    }

}
