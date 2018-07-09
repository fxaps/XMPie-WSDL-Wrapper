<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\TempStorage_SSP;

class AddFileToFolderResponse
{

    /**
     * @var string $AddFileToFolderResult
     */
    protected $AddFileToFolderResult = null;

    /**
     * @param string $AddFileToFolderResult
     */
    public function __construct($AddFileToFolderResult = null)
    {
      $this->AddFileToFolderResult = $AddFileToFolderResult;
    }

    /**
     * @return string
     */
    public function getAddFileToFolderResult()
    {
      return $this->AddFileToFolderResult;
    }

    /**
     * @param string $AddFileToFolderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\TempStorage_SSP\AddFileToFolderResponse
     */
    public function setAddFileToFolderResult($AddFileToFolderResult)
    {
      $this->AddFileToFolderResult = $AddFileToFolderResult;
      return $this;
    }

}
