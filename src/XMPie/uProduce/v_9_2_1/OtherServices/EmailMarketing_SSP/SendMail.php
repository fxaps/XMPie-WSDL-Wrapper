<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class SendMail
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
     * @var string $inAccountName
     */
    protected $inAccountName = null;

    /**
     * @var string $inCampaignName
     */
    protected $inCampaignName = null;

    /**
     * @var string $inEmailActivityName
     */
    protected $inEmailActivityName = null;

    /**
     * @var ArrayOfString $inRecipientIDs
     */
    protected $inRecipientIDs = null;

    /**
     * @var string $inICPName
     */
    protected $inICPName = null;

    /**
     * @var EmailHeaderInfo $overrideHeader
     */
    protected $overrideHeader = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inEmailActivityName
     * @param ArrayOfString $inRecipientIDs
     * @param string $inICPName
     * @param EmailHeaderInfo $overrideHeader
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inEmailActivityName = null, $inRecipientIDs = null, $inICPName = null, $overrideHeader = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inEmailActivityName = $inEmailActivityName;
      $this->inRecipientIDs = $inRecipientIDs;
      $this->inICPName = $inICPName;
      $this->overrideHeader = $overrideHeader;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountName()
    {
      return $this->inAccountName;
    }

    /**
     * @param string $inAccountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
     */
    public function setInAccountName($inAccountName)
    {
      $this->inAccountName = $inAccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignName()
    {
      return $this->inCampaignName;
    }

    /**
     * @param string $inCampaignName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
     */
    public function setInCampaignName($inCampaignName)
    {
      $this->inCampaignName = $inCampaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailActivityName()
    {
      return $this->inEmailActivityName;
    }

    /**
     * @param string $inEmailActivityName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
     */
    public function setInEmailActivityName($inEmailActivityName)
    {
      $this->inEmailActivityName = $inEmailActivityName;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInRecipientIDs()
    {
      return $this->inRecipientIDs;
    }

    /**
     * @param ArrayOfString $inRecipientIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
     */
    public function setInRecipientIDs($inRecipientIDs)
    {
      $this->inRecipientIDs = $inRecipientIDs;
      return $this;
    }

    /**
     * @return string
     */
    public function getInICPName()
    {
      return $this->inICPName;
    }

    /**
     * @param string $inICPName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
     */
    public function setInICPName($inICPName)
    {
      $this->inICPName = $inICPName;
      return $this;
    }

    /**
     * @return EmailHeaderInfo
     */
    public function getOverrideHeader()
    {
      return $this->overrideHeader;
    }

    /**
     * @param EmailHeaderInfo $overrideHeader
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
     */
    public function setOverrideHeader($overrideHeader)
    {
      $this->overrideHeader = $overrideHeader;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMail
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
