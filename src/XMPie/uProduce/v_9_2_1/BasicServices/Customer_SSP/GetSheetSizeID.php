<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP;

class GetSheetSizeID
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
     * @var string $inSheetSizeName
     */
    protected $inSheetSizeName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSheetSizeName
     */
    public function __construct($inUsername = null, $inPassword = null, $inSheetSizeName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inSheetSizeName = $inSheetSizeName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\GetSheetSizeID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\GetSheetSizeID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSheetSizeName()
    {
      return $this->inSheetSizeName;
    }

    /**
     * @param string $inSheetSizeName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\GetSheetSizeID
     */
    public function setInSheetSizeName($inSheetSizeName)
    {
      $this->inSheetSizeName = $inSheetSizeName;
      return $this;
    }

}
