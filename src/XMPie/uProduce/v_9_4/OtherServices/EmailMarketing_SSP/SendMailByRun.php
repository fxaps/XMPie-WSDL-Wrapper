<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP;

class SendMailByRun
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
     * @var string $inRunGUID
     */
    protected $inRunGUID = null;

    /**
     * @var string $inEmailMarketingID
     */
    protected $inEmailMarketingID = null;

    /**
     * @var ArrayOfString $inRecipientIDs
     */
    protected $inRecipientIDs = null;

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
     * @param string $inRunGUID
     * @param string $inEmailMarketingID
     * @param ArrayOfString $inRecipientIDs
     * @param EmailHeaderInfo $overrideHeader
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inRunGUID = null, $inEmailMarketingID = null, $inRecipientIDs = null, $overrideHeader = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inRunGUID = $inRunGUID;
      $this->inEmailMarketingID = $inEmailMarketingID;
      $this->inRecipientIDs = $inRecipientIDs;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\SendMailByRun
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\SendMailByRun
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRunGUID()
    {
      return $this->inRunGUID;
    }

    /**
     * @param string $inRunGUID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\SendMailByRun
     */
    public function setInRunGUID($inRunGUID)
    {
      $this->inRunGUID = $inRunGUID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailMarketingID()
    {
      return $this->inEmailMarketingID;
    }

    /**
     * @param string $inEmailMarketingID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\SendMailByRun
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
      $this->inEmailMarketingID = $inEmailMarketingID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\SendMailByRun
     */
    public function setInRecipientIDs($inRecipientIDs)
    {
      $this->inRecipientIDs = $inRecipientIDs;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\SendMailByRun
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\SendMailByRun
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
