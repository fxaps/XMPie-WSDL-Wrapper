<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP;

class DeleteAllJobsByFilter
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
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfJobQueryPart $inFilter
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inFilter = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFilter = $inFilter;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP\DeleteAllJobsByFilter
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP\DeleteAllJobsByFilter
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP\DeleteAllJobsByFilter
     */
    public function setInFilter($inFilter)
    {
      $this->inFilter = $inFilter;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP\DeleteAllJobsByFilter
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
