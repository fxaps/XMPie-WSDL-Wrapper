<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP;

class DeleteConnectivityLicense
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
     * @var int $inConnectivityLicenseID
     */
    protected $inConnectivityLicenseID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param int $inConnectivityLicenseID
     */
    public function __construct($inUsername = null, $inPassword = null, $inConnectivityLicenseID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inConnectivityLicenseID = $inConnectivityLicenseID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP\DeleteConnectivityLicense
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP\DeleteConnectivityLicense
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return int
     */
    public function getInConnectivityLicenseID()
    {
      return $this->inConnectivityLicenseID;
    }

    /**
     * @param int $inConnectivityLicenseID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP\DeleteConnectivityLicense
     */
    public function setInConnectivityLicenseID($inConnectivityLicenseID)
    {
      $this->inConnectivityLicenseID = $inConnectivityLicenseID;
      return $this;
    }

}
