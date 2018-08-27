<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP;

class GetResourcesModificationDateResponse
{

    /**
     * @var ArrayOfProperty $GetResourcesModificationDateResult
     */
    protected $GetResourcesModificationDateResult = null;

    /**
     * @param ArrayOfProperty $GetResourcesModificationDateResult
     */
    public function __construct($GetResourcesModificationDateResult = null)
    {
      $this->GetResourcesModificationDateResult = $GetResourcesModificationDateResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetResourcesModificationDateResult()
    {
      return $this->GetResourcesModificationDateResult;
    }

    /**
     * @param ArrayOfProperty $GetResourcesModificationDateResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP\GetResourcesModificationDateResponse
     */
    public function setGetResourcesModificationDateResult($GetResourcesModificationDateResult)
    {
      $this->GetResourcesModificationDateResult = $GetResourcesModificationDateResult;
      return $this;
    }

}
