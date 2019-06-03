<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Customer_SSP;

class DeleteUsersResponse
{

    /**
     * @var boolean $DeleteUsersResult
     */
    protected $DeleteUsersResult = null;

    /**
     * @param boolean $DeleteUsersResult
     */
    public function __construct($DeleteUsersResult = null)
    {
      $this->DeleteUsersResult = $DeleteUsersResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteUsersResult()
    {
      return $this->DeleteUsersResult;
    }

    /**
     * @param boolean $DeleteUsersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Customer_SSP\DeleteUsersResponse
     */
    public function setDeleteUsersResult($DeleteUsersResult)
    {
      $this->DeleteUsersResult = $DeleteUsersResult;
      return $this;
    }

}
