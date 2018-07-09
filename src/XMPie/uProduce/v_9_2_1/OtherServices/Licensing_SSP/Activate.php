<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP;

class Activate
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
     * @var string $inLicenseKey
     */
    protected $inLicenseKey = null;

    /**
     * @var string $inActivationKey
     */
    protected $inActivationKey = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inLicenseKey
     * @param string $inActivationKey
     */
    public function __construct($inUsername = null, $inPassword = null, $inLicenseKey = null, $inActivationKey = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inLicenseKey = $inLicenseKey;
      $this->inActivationKey = $inActivationKey;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP\Activate
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP\Activate
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInLicenseKey()
    {
      return $this->inLicenseKey;
    }

    /**
     * @param string $inLicenseKey
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP\Activate
     */
    public function setInLicenseKey($inLicenseKey)
    {
      $this->inLicenseKey = $inLicenseKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getInActivationKey()
    {
      return $this->inActivationKey;
    }

    /**
     * @param string $inActivationKey
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP\Activate
     */
    public function setInActivationKey($inActivationKey)
    {
      $this->inActivationKey = $inActivationKey;
      return $this;
    }

}
