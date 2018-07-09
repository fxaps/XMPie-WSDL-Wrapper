<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP;

class DeleteAllUsersResponse
{

    /**
     * @var boolean $DeleteAllUsersResult
     */
    protected $DeleteAllUsersResult = null;

    /**
     * @param boolean $DeleteAllUsersResult
     */
    public function __construct($DeleteAllUsersResult = null)
    {
      $this->DeleteAllUsersResult = $DeleteAllUsersResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllUsersResult()
    {
      return $this->DeleteAllUsersResult;
    }

    /**
     * @param boolean $DeleteAllUsersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\DeleteAllUsersResponse
     */
    public function setDeleteAllUsersResult($DeleteAllUsersResult)
    {
      $this->DeleteAllUsersResult = $DeleteAllUsersResult;
      return $this;
    }

}
