<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP;

class GetRecipientTables
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceID
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDataSourceID = $inDataSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP\GetRecipientTables
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP\GetRecipientTables
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP\GetRecipientTables
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

}
