<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class SetAdditionalFieldValuesForRecipients
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
     * @var ArrayOfString $inRecipientKeys
     */
    protected $inRecipientKeys = null;

    /**
     * @var ArrayOfProperty $inAdditionalFieldValues
     */
    protected $inAdditionalFieldValues = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inRecipientKeys
     * @param ArrayOfProperty $inAdditionalFieldValues
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inRecipientKeys = null, $inAdditionalFieldValues = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inRecipientKeys = $inRecipientKeys;
      $this->inAdditionalFieldValues = $inAdditionalFieldValues;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipients
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipients
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipients
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInRecipientKeys()
    {
      return $this->inRecipientKeys;
    }

    /**
     * @param ArrayOfString $inRecipientKeys
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipients
     */
    public function setInRecipientKeys($inRecipientKeys)
    {
      $this->inRecipientKeys = $inRecipientKeys;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInAdditionalFieldValues()
    {
      return $this->inAdditionalFieldValues;
    }

    /**
     * @param ArrayOfProperty $inAdditionalFieldValues
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipients
     */
    public function setInAdditionalFieldValues($inAdditionalFieldValues)
    {
      $this->inAdditionalFieldValues = $inAdditionalFieldValues;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipients
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
