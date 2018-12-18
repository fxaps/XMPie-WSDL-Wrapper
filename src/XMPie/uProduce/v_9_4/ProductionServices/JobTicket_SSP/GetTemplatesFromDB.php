<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class GetTemplatesFromDB
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
     * @var string $inJobType
     */
    protected $inJobType = null;

    /**
     * @var string $inAccountID
     */
    protected $inAccountID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobType
     * @param string $inAccountID
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobType = null, $inAccountID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobType = $inJobType;
      $this->inAccountID = $inAccountID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetTemplatesFromDB
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetTemplatesFromDB
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobType()
    {
      return $this->inJobType;
    }

    /**
     * @param string $inJobType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetTemplatesFromDB
     */
    public function setInJobType($inJobType)
    {
      $this->inJobType = $inJobType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountID()
    {
      return $this->inAccountID;
    }

    /**
     * @param string $inAccountID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetTemplatesFromDB
     */
    public function setInAccountID($inAccountID)
    {
      $this->inAccountID = $inAccountID;
      return $this;
    }

}
