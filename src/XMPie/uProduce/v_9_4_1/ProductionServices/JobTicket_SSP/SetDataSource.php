<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetDataSource
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
     * @var string $inTicketID
     */
    protected $inTicketID = null;

    /**
     * @var string $inSchemaName
     */
    protected $inSchemaName = null;

    /**
     * @var Connection $inConnection
     */
    protected $inConnection = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inSchemaName
     * @param Connection $inConnection
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inSchemaName = null, $inConnection = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inSchemaName = $inSchemaName;
      $this->inConnection = $inConnection;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetDataSource
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetDataSource
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTicketID()
    {
      return $this->inTicketID;
    }

    /**
     * @param string $inTicketID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetDataSource
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSchemaName()
    {
      return $this->inSchemaName;
    }

    /**
     * @param string $inSchemaName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetDataSource
     */
    public function setInSchemaName($inSchemaName)
    {
      $this->inSchemaName = $inSchemaName;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getInConnection()
    {
      return $this->inConnection;
    }

    /**
     * @param Connection $inConnection
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetDataSource
     */
    public function setInConnection($inConnection)
    {
      $this->inConnection = $inConnection;
      return $this;
    }

}
