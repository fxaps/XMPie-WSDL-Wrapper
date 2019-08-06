<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP;

class CreateNew
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
     * @var string $inTicket
     */
    protected $inTicket = null;

    /**
     * @var string $inEmailMarketingName
     */
    protected $inEmailMarketingName = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inTicket
     * @param string $inEmailMarketingName
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inTicket = null, $inEmailMarketingName = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inTicket = $inTicket;
      $this->inEmailMarketingName = $inEmailMarketingName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\CreateNew
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTicket()
    {
      return $this->inTicket;
    }

    /**
     * @param string $inTicket
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\CreateNew
     */
    public function setInTicket($inTicket)
    {
      $this->inTicket = $inTicket;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailMarketingName()
    {
      return $this->inEmailMarketingName;
    }

    /**
     * @param string $inEmailMarketingName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\CreateNew
     */
    public function setInEmailMarketingName($inEmailMarketingName)
    {
      $this->inEmailMarketingName = $inEmailMarketingName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\CreateNew
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
