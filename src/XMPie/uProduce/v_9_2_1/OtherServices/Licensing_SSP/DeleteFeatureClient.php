<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP;

class DeleteFeatureClient
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
     * @var int $inActivationID
     */
    protected $inActivationID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param int $inActivationID
     */
    public function __construct($inUsername = null, $inPassword = null, $inActivationID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inActivationID = $inActivationID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP\DeleteFeatureClient
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP\DeleteFeatureClient
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return int
     */
    public function getInActivationID()
    {
      return $this->inActivationID;
    }

    /**
     * @param int $inActivationID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP\DeleteFeatureClient
     */
    public function setInActivationID($inActivationID)
    {
      $this->inActivationID = $inActivationID;
      return $this;
    }

}
