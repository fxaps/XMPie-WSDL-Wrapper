<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Jobs_SSP;

class GetJobPageByFilter
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var ArrayOfJobQueryPart $inFilter
     */
    protected $inFilter = null;

    /**
     * @var string $inJobId
     */
    protected $inJobId = null;

    /**
     * @var string $inPageSize
     */
    protected $inPageSize = null;

    /**
     * @var JobOrderPart $inOrderByField
     */
    protected $inOrderByField = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfJobQueryPart $inFilter
     * @param string $inJobId
     * @param string $inPageSize
     * @param JobOrderPart $inOrderByField
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inFilter = null, $inJobId = null, $inPageSize = null, $inOrderByField = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFilter = $inFilter;
      $this->inJobId = $inJobId;
      $this->inPageSize = $inPageSize;
      $this->inOrderByField = $inOrderByField;
      $this->inProps = $inProps;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Jobs_SSP\GetJobPageByFilter
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Jobs_SSP\GetJobPageByFilter
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfJobQueryPart
     */
    public function getInFilter()
    {
      return $this->inFilter;
    }

    /**
     * @param ArrayOfJobQueryPart $inFilter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Jobs_SSP\GetJobPageByFilter
     */
    public function setInFilter($inFilter)
    {
      $this->inFilter = $inFilter;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobId()
    {
      return $this->inJobId;
    }

    /**
     * @param string $inJobId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Jobs_SSP\GetJobPageByFilter
     */
    public function setInJobId($inJobId)
    {
      $this->inJobId = $inJobId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPageSize()
    {
      return $this->inPageSize;
    }

    /**
     * @param string $inPageSize
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Jobs_SSP\GetJobPageByFilter
     */
    public function setInPageSize($inPageSize)
    {
      $this->inPageSize = $inPageSize;
      return $this;
    }

    /**
     * @return JobOrderPart
     */
    public function getInOrderByField()
    {
      return $this->inOrderByField;
    }

    /**
     * @param JobOrderPart $inOrderByField
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Jobs_SSP\GetJobPageByFilter
     */
    public function setInOrderByField($inOrderByField)
    {
      $this->inOrderByField = $inOrderByField;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Jobs_SSP\GetJobPageByFilter
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
