<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Tracker_SSP;

class SetCloudTrackingConfiguration
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
     * @var string $inConfigParams
     */
    protected $inConfigParams = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inConfigParams
     */
    public function __construct($inUsername = null, $inPassword = null, $inConfigParams = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inConfigParams = $inConfigParams;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Tracker_SSP\SetCloudTrackingConfiguration
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Tracker_SSP\SetCloudTrackingConfiguration
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInConfigParams()
    {
      return $this->inConfigParams;
    }

    /**
     * @param string $inConfigParams
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Tracker_SSP\SetCloudTrackingConfiguration
     */
    public function setInConfigParams($inConfigParams)
    {
      $this->inConfigParams = $inConfigParams;
      return $this;
    }

}
