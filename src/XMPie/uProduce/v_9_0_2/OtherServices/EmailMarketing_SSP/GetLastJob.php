<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\EmailMarketing_SSP;

class GetLastJob
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
     * @var string $inEmailMarketingID
     */
    protected $inEmailMarketingID = null;

    /**
     * @var boolean $inIncludeDeleted
     */
    protected $inIncludeDeleted = null;

    /**
     * @var boolean $inIncludeFailed
     */
    protected $inIncludeFailed = null;

    /**
     * @var string $inJobType
     */
    protected $inJobType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inEmailMarketingID
     * @param boolean $inIncludeDeleted
     * @param boolean $inIncludeFailed
     * @param string $inJobType
     */
    public function __construct($inUsername = null, $inPassword = null, $inEmailMarketingID = null, $inIncludeDeleted = null, $inIncludeFailed = null, $inJobType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inEmailMarketingID = $inEmailMarketingID;
      $this->inIncludeDeleted = $inIncludeDeleted;
      $this->inIncludeFailed = $inIncludeFailed;
      $this->inJobType = $inJobType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\EmailMarketing_SSP\GetLastJob
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\EmailMarketing_SSP\GetLastJob
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\EmailMarketing_SSP\GetLastJob
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
      $this->inEmailMarketingID = $inEmailMarketingID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeDeleted()
    {
      return $this->inIncludeDeleted;
    }

    /**
     * @param boolean $inIncludeDeleted
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\EmailMarketing_SSP\GetLastJob
     */
    public function setInIncludeDeleted($inIncludeDeleted)
    {
      $this->inIncludeDeleted = $inIncludeDeleted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeFailed()
    {
      return $this->inIncludeFailed;
    }

    /**
     * @param boolean $inIncludeFailed
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\EmailMarketing_SSP\GetLastJob
     */
    public function setInIncludeFailed($inIncludeFailed)
    {
      $this->inIncludeFailed = $inIncludeFailed;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\EmailMarketing_SSP\GetLastJob
     */
    public function setInJobType($inJobType)
    {
      $this->inJobType = $inJobType;
      return $this;
    }

}
