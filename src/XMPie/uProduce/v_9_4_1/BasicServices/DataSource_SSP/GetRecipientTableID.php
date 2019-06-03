<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP;

class GetRecipientTableID
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
     * @var string $inDataSourceID
     */
    protected $inDataSourceID = null;

    /**
     * @var string $inRecipientTableName
     */
    protected $inRecipientTableName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceID
     * @param string $inRecipientTableName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceID = null, $inRecipientTableName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDataSourceID = $inDataSourceID;
      $this->inRecipientTableName = $inRecipientTableName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP\GetRecipientTableID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP\GetRecipientTableID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceID()
    {
      return $this->inDataSourceID;
    }

    /**
     * @param string $inDataSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP\GetRecipientTableID
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientTableName()
    {
      return $this->inRecipientTableName;
    }

    /**
     * @param string $inRecipientTableName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP\GetRecipientTableID
     */
    public function setInRecipientTableName($inRecipientTableName)
    {
      $this->inRecipientTableName = $inRecipientTableName;
      return $this;
    }

}
