<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class GetFontsModificationDateResponse
{

    /**
     * @var ArrayOfProperty $GetFontsModificationDateResult
     */
    protected $GetFontsModificationDateResult = null;

    /**
     * @param ArrayOfProperty $GetFontsModificationDateResult
     */
    public function __construct($GetFontsModificationDateResult = null)
    {
      $this->GetFontsModificationDateResult = $GetFontsModificationDateResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetFontsModificationDateResult()
    {
      return $this->GetFontsModificationDateResult;
    }

    /**
     * @param ArrayOfProperty $GetFontsModificationDateResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetFontsModificationDateResponse
     */
    public function setGetFontsModificationDateResult($GetFontsModificationDateResult)
    {
      $this->GetFontsModificationDateResult = $GetFontsModificationDateResult;
      return $this;
    }

}
