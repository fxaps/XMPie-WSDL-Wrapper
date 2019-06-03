<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class GetLocalEmailFileNamesResponse
{

    /**
     * @var ArrayOfString $GetLocalEmailFileNamesResult
     */
    protected $GetLocalEmailFileNamesResult = null;

    /**
     * @param ArrayOfString $GetLocalEmailFileNamesResult
     */
    public function __construct($GetLocalEmailFileNamesResult = null)
    {
      $this->GetLocalEmailFileNamesResult = $GetLocalEmailFileNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetLocalEmailFileNamesResult()
    {
      return $this->GetLocalEmailFileNamesResult;
    }

    /**
     * @param ArrayOfString $GetLocalEmailFileNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetLocalEmailFileNamesResponse
     */
    public function setGetLocalEmailFileNamesResult($GetLocalEmailFileNamesResult)
    {
      $this->GetLocalEmailFileNamesResult = $GetLocalEmailFileNamesResult;
      return $this;
    }

}
