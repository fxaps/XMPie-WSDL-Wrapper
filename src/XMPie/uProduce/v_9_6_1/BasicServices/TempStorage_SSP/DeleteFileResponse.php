<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\TempStorage_SSP;

class DeleteFileResponse
{

    /**
     * @var boolean $DeleteFileResult
     */
    protected $DeleteFileResult = null;

    /**
     * @param boolean $DeleteFileResult
     */
    public function __construct($DeleteFileResult = null)
    {
      $this->DeleteFileResult = $DeleteFileResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteFileResult()
    {
      return $this->DeleteFileResult;
    }

    /**
     * @param boolean $DeleteFileResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\TempStorage_SSP\DeleteFileResponse
     */
    public function setDeleteFileResult($DeleteFileResult)
    {
      $this->DeleteFileResult = $DeleteFileResult;
      return $this;
    }

}
