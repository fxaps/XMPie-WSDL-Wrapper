<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP;

class GetStatus
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
     * @var boolean $inExtended
     */
    protected $inExtended = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inType
     * @param boolean $inExtended
     */
    public function __construct($inUsername = null, $inPassword = null, $inType = null, $inExtended = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inType = $inType;
      $this->inExtended = $inExtended;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\GetStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\GetStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\GetStatus
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInExtended()
    {
      return $this->inExtended;
    }

    /**
     * @param boolean $inExtended
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\GetStatus
     */
    public function setInExtended($inExtended)
    {
      $this->inExtended = $inExtended;
      return $this;
    }

}
