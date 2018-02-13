<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP;

class Reactivate
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
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inType
     */
    public function __construct($inUsername = null, $inPassword = null, $inType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inType = $inType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\Reactivate
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\Reactivate
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
      return $this->inType;
    }

    /**
     * @param string $inType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\Reactivate
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
      return $this;
    }

}
