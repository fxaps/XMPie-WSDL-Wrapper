<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP;

class SetCloudGatewayConfiguration
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
     * @var CloudGatewayConfiguration $inConfiguration
     */
    protected $inConfiguration = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param CloudGatewayConfiguration $inConfiguration
     */
    public function __construct($inUsername = null, $inPassword = null, $inConfiguration = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inConfiguration = $inConfiguration;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP\SetCloudGatewayConfiguration
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP\SetCloudGatewayConfiguration
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return CloudGatewayConfiguration
     */
    public function getInConfiguration()
    {
      return $this->inConfiguration;
    }

    /**
     * @param CloudGatewayConfiguration $inConfiguration
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\SystemManager_SSP\SetCloudGatewayConfiguration
     */
    public function setInConfiguration($inConfiguration)
    {
      $this->inConfiguration = $inConfiguration;
      return $this;
    }

}
