<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP;

class GetDataSetByID
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPortID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPortID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPortID = $inPortID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\GetDataSetByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\GetDataSetByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\GetDataSetByID
     */
    public function setInPortID($inPortID)
    {
      $this->inPortID = $inPortID;
      return $this;
    }

}
