<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class GetPlanPartsProviderID
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
     * @var string $inDllName
     */
    protected $inDllName = null;

    /**
     * @var string $inFuncName
     */
    protected $inFuncName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDllName
     * @param string $inFuncName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDllName = null, $inFuncName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDllName = $inDllName;
      $this->inFuncName = $inFuncName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetPlanPartsProviderID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetPlanPartsProviderID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDllName()
    {
      return $this->inDllName;
    }

    /**
     * @param string $inDllName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetPlanPartsProviderID
     */
    public function setInDllName($inDllName)
    {
      $this->inDllName = $inDllName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFuncName()
    {
      return $this->inFuncName;
    }

    /**
     * @param string $inFuncName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetPlanPartsProviderID
     */
    public function setInFuncName($inFuncName)
    {
      $this->inFuncName = $inFuncName;
      return $this;
    }

}
