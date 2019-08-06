<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP;

class GetProperty
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
     * @var string $inDestinationID
     */
    protected $inDestinationID = null;

    /**
     * @var string $inPropertyName
     */
    protected $inPropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDestinationID
     * @param string $inPropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDestinationID = null, $inPropertyName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDestinationID = $inDestinationID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetProperty
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDestinationID()
    {
      return $this->inDestinationID;
    }

    /**
     * @param string $inDestinationID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetProperty
     */
    public function setInDestinationID($inDestinationID)
    {
      $this->inDestinationID = $inDestinationID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetProperty
     */
    public function setInPropertyName($inPropertyName)
    {
      $this->inPropertyName = $inPropertyName;
      return $this;
    }

}
