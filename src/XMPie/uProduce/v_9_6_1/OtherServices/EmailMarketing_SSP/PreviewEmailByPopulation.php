<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP;

class PreviewEmailByPopulation
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
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPopulationGUID
     * @param string $inEmailMarketingID
     * @param string $inRecipientID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationGUID = null, $inEmailMarketingID = null, $inRecipientID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPopulationGUID = $inPopulationGUID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\PreviewEmailByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\PreviewEmailByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\PreviewEmailByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\PreviewEmailByPopulation
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\PreviewEmailByPopulation
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

}
