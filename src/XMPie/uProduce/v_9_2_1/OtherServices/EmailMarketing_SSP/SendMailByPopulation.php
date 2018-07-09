<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class SendMailByPopulation
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
     * @var string $inPopulationGUID
     */
    protected $inPopulationGUID = null;

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
     * @param string $inPopulationGUID
     * @param string $inEmailMarketingID
     * @param ArrayOfString $inRecipientIDs
     * @param EmailHeaderInfo $overrideHeader
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationGUID = null, $inEmailMarketingID = null, $inRecipientIDs = null, $overrideHeader = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPopulationGUID = $inPopulationGUID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByPopulation
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPopulationGUID()
    {
      return $this->inPopulationGUID;
    }

    /**
     * @param string $inPopulationGUID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByPopulation
     */
    public function setInPopulationGUID($inPopulationGUID)
    {
      $this->inPopulationGUID = $inPopulationGUID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByPopulation
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
