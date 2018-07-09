<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP;

class IsFeatureSupported
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
     * @var string $inFeatureName
     */
    protected $inFeatureName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFeatureName
     */
    public function __construct($inUsername = null, $inPassword = null, $inFeatureName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFeatureName = $inFeatureName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsFeatureSupported
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsFeatureSupported
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFeatureName()
    {
      return $this->inFeatureName;
    }

    /**
     * @param string $inFeatureName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsFeatureSupported
     */
    public function setInFeatureName($inFeatureName)
    {
      $this->inFeatureName = $inFeatureName;
      return $this;
    }

}
