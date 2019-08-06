<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP;

class SetPathLocatorValue
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
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var string $inValue
     */
    protected $inValue = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inName
     * @param string $inValue
     */
    public function __construct($inUsername = null, $inPassword = null, $inName = null, $inValue = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inName = $inName;
      $this->inValue = $inValue;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP\SetPathLocatorValue
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP\SetPathLocatorValue
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP\SetPathLocatorValue
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInValue()
    {
      return $this->inValue;
    }

    /**
     * @param string $inValue
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\GeneralUtils_SSP\SetPathLocatorValue
     */
    public function setInValue($inValue)
    {
      $this->inValue = $inValue;
      return $this;
    }

}
