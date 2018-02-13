<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP;

class GetPropertyByID
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
     * @var string $inPortID
     */
    protected $inPortID = null;

    /**
     * @var string $inPropertyName
     */
    protected $inPropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPortID
     * @param string $inPropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inPortID = null, $inPropertyName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPortID = $inPortID;
      $this->inPropertyName = $inPropertyName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\GetPropertyByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\GetPropertyByID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPortID()
    {
      return $this->inPortID;
    }

    /**
     * @param string $inPortID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\GetPropertyByID
     */
    public function setInPortID($inPortID)
    {
      $this->inPortID = $inPortID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPropertyName()
    {
      return $this->inPropertyName;
    }

    /**
     * @param string $inPropertyName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\GetPropertyByID
     */
    public function setInPropertyName($inPropertyName)
    {
      $this->inPropertyName = $inPropertyName;
      return $this;
    }

}
