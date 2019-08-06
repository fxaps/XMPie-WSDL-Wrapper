<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class DeleteSheetSizes
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
     * @var ArrayOfString $inSheetSizeIDArray
     */
    protected $inSheetSizeIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inSheetSizeIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inSheetSizeIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inSheetSizeIDArray = $inSheetSizeIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\DeleteSheetSizes
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\DeleteSheetSizes
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInSheetSizeIDArray()
    {
      return $this->inSheetSizeIDArray;
    }

    /**
     * @param ArrayOfString $inSheetSizeIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\DeleteSheetSizes
     */
    public function setInSheetSizeIDArray($inSheetSizeIDArray)
    {
      $this->inSheetSizeIDArray = $inSheetSizeIDArray;
      return $this;
    }

}
