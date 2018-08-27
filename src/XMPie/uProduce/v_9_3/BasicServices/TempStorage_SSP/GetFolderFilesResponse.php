<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP;

class GetFolderFilesResponse
{

    /**
     * @var ArrayOfString $GetFolderFilesResult
     */
    protected $GetFolderFilesResult = null;

    /**
     * @param ArrayOfString $GetFolderFilesResult
     */
    public function __construct($GetFolderFilesResult = null)
    {
      $this->GetFolderFilesResult = $GetFolderFilesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetFolderFilesResult()
    {
      return $this->GetFolderFilesResult;
    }

    /**
     * @param ArrayOfString $GetFolderFilesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\TempStorage_SSP\GetFolderFilesResponse
     */
    public function setGetFolderFilesResult($GetFolderFilesResult)
    {
      $this->GetFolderFilesResult = $GetFolderFilesResult;
      return $this;
    }

}
