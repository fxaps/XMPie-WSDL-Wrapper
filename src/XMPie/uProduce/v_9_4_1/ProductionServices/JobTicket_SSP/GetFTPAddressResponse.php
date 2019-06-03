<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetFTPAddressResponse
{

    /**
     * @var string $GetFTPAddressResult
     */
    protected $GetFTPAddressResult = null;

    /**
     * @param string $GetFTPAddressResult
     */
    public function __construct($GetFTPAddressResult = null)
    {
      $this->GetFTPAddressResult = $GetFTPAddressResult;
    }

    /**
     * @return string
     */
    public function getGetFTPAddressResult()
    {
      return $this->GetFTPAddressResult;
    }

    /**
     * @param string $GetFTPAddressResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetFTPAddressResponse
     */
    public function setGetFTPAddressResult($GetFTPAddressResult)
    {
      $this->GetFTPAddressResult = $GetFTPAddressResult;
      return $this;
    }

}
