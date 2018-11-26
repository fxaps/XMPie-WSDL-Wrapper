<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP;

class DeletePlanPartsProviders
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
     * @var ArrayOfString $inDestinationIDArray
     */
    protected $inDestinationIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inDestinationIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inDestinationIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDestinationIDArray = $inDestinationIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP\DeletePlanPartsProviders
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP\DeletePlanPartsProviders
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDestinationIDArray()
    {
      return $this->inDestinationIDArray;
    }

    /**
     * @param ArrayOfString $inDestinationIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP\DeletePlanPartsProviders
     */
    public function setInDestinationIDArray($inDestinationIDArray)
    {
      $this->inDestinationIDArray = $inDestinationIDArray;
      return $this;
    }

}
