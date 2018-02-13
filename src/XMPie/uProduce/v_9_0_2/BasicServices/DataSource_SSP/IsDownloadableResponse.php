<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP;

class IsDownloadableResponse
{

    /**
     * @var boolean $IsDownloadableResult
     */
    protected $IsDownloadableResult = null;

    /**
     * @param boolean $IsDownloadableResult
     */
    public function __construct($IsDownloadableResult = null)
    {
      $this->IsDownloadableResult = $IsDownloadableResult;
    }

    /**
     * @return boolean
     */
    public function getIsDownloadableResult()
    {
      return $this->IsDownloadableResult;
    }

    /**
     * @param boolean $IsDownloadableResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\IsDownloadableResponse
     */
    public function setIsDownloadableResult($IsDownloadableResult)
    {
      $this->IsDownloadableResult = $IsDownloadableResult;
      return $this;
    }

}
