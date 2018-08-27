<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetDataSourcesByID
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
     * @var ArrayOfString $inSchemaNameArray
     */
    protected $inSchemaNameArray = null;

    /**
     * @var ArrayOfString $inDataSourceIDArray
     */
    protected $inDataSourceIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfString $inSchemaNameArray
     * @param ArrayOfString $inDataSourceIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inSchemaNameArray = null, $inDataSourceIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inSchemaNameArray = $inSchemaNameArray;
      $this->inDataSourceIDArray = $inDataSourceIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetDataSourcesByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetDataSourcesByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetDataSourcesByID
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInSchemaNameArray()
    {
      return $this->inSchemaNameArray;
    }

    /**
     * @param ArrayOfString $inSchemaNameArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetDataSourcesByID
     */
    public function setInSchemaNameArray($inSchemaNameArray)
    {
      $this->inSchemaNameArray = $inSchemaNameArray;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDataSourceIDArray()
    {
      return $this->inDataSourceIDArray;
    }

    /**
     * @param ArrayOfString $inDataSourceIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetDataSourcesByID
     */
    public function setInDataSourceIDArray($inDataSourceIDArray)
    {
      $this->inDataSourceIDArray = $inDataSourceIDArray;
      return $this;
    }

}
