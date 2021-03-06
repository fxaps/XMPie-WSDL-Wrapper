<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetAssetSources
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
     * @var ArrayOfString $inNames
     */
    protected $inNames = null;

    /**
     * @var ArrayOfAssetSourceStruct $inAssetSources
     */
    protected $inAssetSources = null;

    /**
     * @var ArrayOfInt $inPriorities
     */
    protected $inPriorities = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfString $inNames
     * @param ArrayOfAssetSourceStruct $inAssetSources
     * @param ArrayOfInt $inPriorities
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inNames = null, $inAssetSources = null, $inPriorities = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inNames = $inNames;
      $this->inAssetSources = $inAssetSources;
      $this->inPriorities = $inPriorities;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetAssetSources
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetAssetSources
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetAssetSources
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInNames()
    {
      return $this->inNames;
    }

    /**
     * @param ArrayOfString $inNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetAssetSources
     */
    public function setInNames($inNames)
    {
      $this->inNames = $inNames;
      return $this;
    }

    /**
     * @return ArrayOfAssetSourceStruct
     */
    public function getInAssetSources()
    {
      return $this->inAssetSources;
    }

    /**
     * @param ArrayOfAssetSourceStruct $inAssetSources
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetAssetSources
     */
    public function setInAssetSources($inAssetSources)
    {
      $this->inAssetSources = $inAssetSources;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getInPriorities()
    {
      return $this->inPriorities;
    }

    /**
     * @param ArrayOfInt $inPriorities
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetAssetSources
     */
    public function setInPriorities($inPriorities)
    {
      $this->inPriorities = $inPriorities;
      return $this;
    }

}
