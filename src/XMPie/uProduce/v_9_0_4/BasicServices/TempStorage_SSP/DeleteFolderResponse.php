<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP;

class DeleteFolderResponse
{

    /**
     * @var boolean $DeleteFolderResult
     */
    protected $DeleteFolderResult = null;

    /**
     * @param boolean $DeleteFolderResult
     */
    public function __construct($DeleteFolderResult = null)
    {
      $this->DeleteFolderResult = $DeleteFolderResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteFolderResult()
    {
      return $this->DeleteFolderResult;
    }

    /**
     * @param boolean $DeleteFolderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFolderResponse
     */
    public function setDeleteFolderResult($DeleteFolderResult)
    {
      $this->DeleteFolderResult = $DeleteFolderResult;
      return $this;
    }

}
