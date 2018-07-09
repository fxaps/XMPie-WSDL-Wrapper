<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP;

class DeleteAccountsResponse
{

    /**
     * @var boolean $DeleteAccountsResult
     */
    protected $DeleteAccountsResult = null;

    /**
     * @param boolean $DeleteAccountsResult
     */
    public function __construct($DeleteAccountsResult = null)
    {
      $this->DeleteAccountsResult = $DeleteAccountsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAccountsResult()
    {
      return $this->DeleteAccountsResult;
    }

    /**
     * @param boolean $DeleteAccountsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\DeleteAccountsResponse
     */
    public function setDeleteAccountsResult($DeleteAccountsResult)
    {
      $this->DeleteAccountsResult = $DeleteAccountsResult;
      return $this;
    }

}
