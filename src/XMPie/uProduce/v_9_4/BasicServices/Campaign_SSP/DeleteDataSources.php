<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP;

class DeleteDataSources
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
     * @var ArrayOfString $inDataSourceIDArray
     */
    protected $inDataSourceIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inDataSourceIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inDataSourceIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inDataSourceIDArray = $inDataSourceIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\DeleteDataSources
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\DeleteDataSources
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\DeleteDataSources
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDataSourceIDArray()
    {
      return $this->inDataSourceIDArray;
    }

    /**
     * @param ArrayOfString $inDataSourceIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\DeleteDataSources
     */
    public function setInDataSourceIDArray($inDataSourceIDArray)
    {
      $this->inDataSourceIDArray = $inDataSourceIDArray;
      return $this;
    }

}
