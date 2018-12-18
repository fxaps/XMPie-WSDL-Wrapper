<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP;

class GetSheetSizesResponse
{

    /**
     * @var ArrayOfString $GetSheetSizesResult
     */
    protected $GetSheetSizesResult = null;

    /**
     * @param ArrayOfString $GetSheetSizesResult
     */
    public function __construct($GetSheetSizesResult = null)
    {
      $this->GetSheetSizesResult = $GetSheetSizesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetSheetSizesResult()
    {
      return $this->GetSheetSizesResult;
    }

    /**
     * @param ArrayOfString $GetSheetSizesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP\GetSheetSizesResponse
     */
    public function setGetSheetSizesResult($GetSheetSizesResult)
    {
      $this->GetSheetSizesResult = $GetSheetSizesResult;
      return $this;
    }

}
