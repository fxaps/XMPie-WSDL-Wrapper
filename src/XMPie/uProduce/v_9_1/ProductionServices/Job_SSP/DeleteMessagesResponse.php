<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Job_SSP;

class DeleteMessagesResponse
{

    /**
     * @var boolean $DeleteMessagesResult
     */
    protected $DeleteMessagesResult = null;

    /**
     * @param boolean $DeleteMessagesResult
     */
    public function __construct($DeleteMessagesResult = null)
    {
      $this->DeleteMessagesResult = $DeleteMessagesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteMessagesResult()
    {
      return $this->DeleteMessagesResult;
    }

    /**
     * @param boolean $DeleteMessagesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Job_SSP\DeleteMessagesResponse
     */
    public function setDeleteMessagesResult($DeleteMessagesResult)
    {
      $this->DeleteMessagesResult = $DeleteMessagesResult;
      return $this;
    }

}
