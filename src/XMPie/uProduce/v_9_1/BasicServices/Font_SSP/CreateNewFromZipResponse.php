<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP;

class CreateNewFromZipResponse
{

    /**
     * @var ArrayOfString $CreateNewFromZipResult
     */
    protected $CreateNewFromZipResult = null;

    /**
     * @param ArrayOfString $CreateNewFromZipResult
     */
    public function __construct($CreateNewFromZipResult = null)
    {
      $this->CreateNewFromZipResult = $CreateNewFromZipResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getCreateNewFromZipResult()
    {
      return $this->CreateNewFromZipResult;
    }

    /**
     * @param ArrayOfString $CreateNewFromZipResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\CreateNewFromZipResponse
     */
    public function setCreateNewFromZipResult($CreateNewFromZipResult)
    {
      $this->CreateNewFromZipResult = $CreateNewFromZipResult;
      return $this;
    }

}
