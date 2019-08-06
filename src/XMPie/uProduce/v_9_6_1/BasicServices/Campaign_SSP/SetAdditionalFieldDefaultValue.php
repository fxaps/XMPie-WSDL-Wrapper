<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class SetAdditionalFieldDefaultValue
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
     * @var string $inFieldName
     */
    protected $inFieldName = null;

    /**
     * @var string $inDefaultValue
     */
    protected $inDefaultValue = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inFieldName
     * @param string $inDefaultValue
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inFieldName = null, $inDefaultValue = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inFieldName = $inFieldName;
      $this->inDefaultValue = $inDefaultValue;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\SetAdditionalFieldDefaultValue
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\SetAdditionalFieldDefaultValue
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\SetAdditionalFieldDefaultValue
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFieldName()
    {
      return $this->inFieldName;
    }

    /**
     * @param string $inFieldName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\SetAdditionalFieldDefaultValue
     */
    public function setInFieldName($inFieldName)
    {
      $this->inFieldName = $inFieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDefaultValue()
    {
      return $this->inDefaultValue;
    }

    /**
     * @param string $inDefaultValue
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\SetAdditionalFieldDefaultValue
     */
    public function setInDefaultValue($inDefaultValue)
    {
      $this->inDefaultValue = $inDefaultValue;
      return $this;
    }

}
