<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class DeleteAdditionalFields
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
     * @var ArrayOfString $inFieldNames
     */
    protected $inFieldNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inFieldNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inFieldNames = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inFieldNames = $inFieldNames;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\DeleteAdditionalFields
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\DeleteAdditionalFields
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\DeleteAdditionalFields
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInFieldNames()
    {
      return $this->inFieldNames;
    }

    /**
     * @param ArrayOfString $inFieldNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\DeleteAdditionalFields
     */
    public function setInFieldNames($inFieldNames)
    {
      $this->inFieldNames = $inFieldNames;
      return $this;
    }

}
