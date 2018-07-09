<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP;

class RefreshQueues
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
     * @var string $inExeLocation
     */
    protected $inExeLocation = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inExeLocation
     */
    public function __construct($inUsername = null, $inPassword = null, $inExeLocation = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inExeLocation = $inExeLocation;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\RefreshQueues
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\RefreshQueues
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInExeLocation()
    {
      return $this->inExeLocation;
    }

    /**
     * @param string $inExeLocation
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ApplicationServices\Destination_SSP\RefreshQueues
     */
    public function setInExeLocation($inExeLocation)
    {
      $this->inExeLocation = $inExeLocation;
      return $this;
    }

}
