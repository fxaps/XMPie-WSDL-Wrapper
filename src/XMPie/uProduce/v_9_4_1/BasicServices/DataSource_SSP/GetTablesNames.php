<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP;

class GetTablesNames
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
     * @var boolean $inExcludeNonPrimaryTables
     */
    protected $inExcludeNonPrimaryTables = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceID
     * @param boolean $inExcludeNonPrimaryTables
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceID = null, $inExcludeNonPrimaryTables = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDataSourceID = $inDataSourceID;
      $this->inExcludeNonPrimaryTables = $inExcludeNonPrimaryTables;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP\GetTablesNames
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP\GetTablesNames
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP\GetTablesNames
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInExcludeNonPrimaryTables()
    {
      return $this->inExcludeNonPrimaryTables;
    }

    /**
     * @param boolean $inExcludeNonPrimaryTables
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSource_SSP\GetTablesNames
     */
    public function setInExcludeNonPrimaryTables($inExcludeNonPrimaryTables)
    {
      $this->inExcludeNonPrimaryTables = $inExcludeNonPrimaryTables;
      return $this;
    }

}
