<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class CreateNewTicketForCampaign
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
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @var string $inRITableName
     */
    protected $inRITableName = null;

    /**
     * @var boolean $inFlatOriented
     */
    protected $inFlatOriented = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inRITableName
     * @param boolean $inFlatOriented
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inRITableName = null, $inFlatOriented = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inRITableName = $inRITableName;
      $this->inFlatOriented = $inFlatOriented;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\CreateNewTicketForCampaign
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\CreateNewTicketForCampaign
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignID()
    {
      return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\CreateNewTicketForCampaign
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRITableName()
    {
      return $this->inRITableName;
    }

    /**
     * @param string $inRITableName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\CreateNewTicketForCampaign
     */
    public function setInRITableName($inRITableName)
    {
      $this->inRITableName = $inRITableName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInFlatOriented()
    {
      return $this->inFlatOriented;
    }

    /**
     * @param boolean $inFlatOriented
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\CreateNewTicketForCampaign
     */
    public function setInFlatOriented($inFlatOriented)
    {
      $this->inFlatOriented = $inFlatOriented;
      return $this;
    }

}
