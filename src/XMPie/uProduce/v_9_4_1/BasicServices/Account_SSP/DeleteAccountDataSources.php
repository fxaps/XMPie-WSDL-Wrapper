<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Account_SSP;

class DeleteAccountDataSources
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
     * @var string $inAccountID
     */
    protected $inAccountID = null;

    /**
     * @var ArrayOfString $inAccountDataSourceIDArray
     */
    protected $inAccountDataSourceIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountID
     * @param ArrayOfString $inAccountDataSourceIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inAccountDataSourceIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountID = $inAccountID;
      $this->inAccountDataSourceIDArray = $inAccountDataSourceIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Account_SSP\DeleteAccountDataSources
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Account_SSP\DeleteAccountDataSources
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountID()
    {
      return $this->inAccountID;
    }

    /**
     * @param string $inAccountID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Account_SSP\DeleteAccountDataSources
     */
    public function setInAccountID($inAccountID)
    {
      $this->inAccountID = $inAccountID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInAccountDataSourceIDArray()
    {
      return $this->inAccountDataSourceIDArray;
    }

    /**
     * @param ArrayOfString $inAccountDataSourceIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Account_SSP\DeleteAccountDataSources
     */
    public function setInAccountDataSourceIDArray($inAccountDataSourceIDArray)
    {
      $this->inAccountDataSourceIDArray = $inAccountDataSourceIDArray;
      return $this;
    }

}
