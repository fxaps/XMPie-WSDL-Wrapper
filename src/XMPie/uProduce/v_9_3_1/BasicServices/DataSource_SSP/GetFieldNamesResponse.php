<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP;

class GetFieldNamesResponse
{

    /**
     * @var ArrayOfXMPTblColumn $GetFieldNamesResult
     */
    protected $GetFieldNamesResult = null;

    /**
     * @param ArrayOfXMPTblColumn $GetFieldNamesResult
     */
    public function __construct($GetFieldNamesResult = null)
    {
      $this->GetFieldNamesResult = $GetFieldNamesResult;
    }

    /**
     * @return ArrayOfXMPTblColumn
     */
    public function getGetFieldNamesResult()
    {
      return $this->GetFieldNamesResult;
    }

    /**
     * @param ArrayOfXMPTblColumn $GetFieldNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetFieldNamesResponse
     */
    public function setGetFieldNamesResult($GetFieldNamesResult)
    {
      $this->GetFieldNamesResult = $GetFieldNamesResult;
      return $this;
    }

}
