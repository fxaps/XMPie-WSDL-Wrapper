<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP;

class GetDestinationType
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
     * @var string $inDestinationType
     */
    protected $inDestinationType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDestinationType
     */
    public function __construct($inUsername = null, $inPassword = null, $inDestinationType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDestinationType = $inDestinationType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetDestinationType
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetDestinationType
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDestinationType()
    {
      return $this->inDestinationType;
    }

    /**
     * @param string $inDestinationType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetDestinationType
     */
    public function setInDestinationType($inDestinationType)
    {
      $this->inDestinationType = $inDestinationType;
      return $this;
    }

}
