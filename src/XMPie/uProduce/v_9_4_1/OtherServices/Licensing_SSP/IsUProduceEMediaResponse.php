<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP;

class IsUProduceEMediaResponse
{

    /**
     * @var boolean $IsUProduceEMediaResult
     */
    protected $IsUProduceEMediaResult = null;

    /**
     * @param boolean $IsUProduceEMediaResult
     */
    public function __construct($IsUProduceEMediaResult = null)
    {
      $this->IsUProduceEMediaResult = $IsUProduceEMediaResult;
    }

    /**
     * @return boolean
     */
    public function getIsUProduceEMediaResult()
    {
      return $this->IsUProduceEMediaResult;
    }

    /**
     * @param boolean $IsUProduceEMediaResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\IsUProduceEMediaResponse
     */
    public function setIsUProduceEMediaResult($IsUProduceEMediaResult)
    {
      $this->IsUProduceEMediaResult = $IsUProduceEMediaResult;
      return $this;
    }

}
