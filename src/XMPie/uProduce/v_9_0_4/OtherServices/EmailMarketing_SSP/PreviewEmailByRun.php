<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP;

class PreviewEmailByRun
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
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inRunGUID
     * @param string $inEmailMarketingID
     * @param string $inRecipientID
     */
    public function __construct($inUsername = null, $inPassword = null, $inRunGUID = null, $inEmailMarketingID = null, $inRecipientID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inRunGUID = $inRunGUID;
      $this->inEmailMarketingID = $inEmailMarketingID;
      $this->inRecipientID = $inRecipientID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\PreviewEmailByRun
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\PreviewEmailByRun
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\PreviewEmailByRun
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\PreviewEmailByRun
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
      $this->inEmailMarketingID = $inEmailMarketingID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientID()
    {
      return $this->inRecipientID;
    }

    /**
     * @param string $inRecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\PreviewEmailByRun
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

}
