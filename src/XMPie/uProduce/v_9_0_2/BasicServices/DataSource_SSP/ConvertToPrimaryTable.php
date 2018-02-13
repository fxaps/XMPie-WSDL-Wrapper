<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP;

class ConvertToPrimaryTable
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
     * @var string $inTableName
     */
    protected $inTableName = null;

    /**
     * @var string $inPrimaryFieldExpression
     */
    protected $inPrimaryFieldExpression = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceID
     * @param string $inTableName
     * @param string $inPrimaryFieldExpression
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceID = null, $inTableName = null, $inPrimaryFieldExpression = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDataSourceID = $inDataSourceID;
      $this->inTableName = $inTableName;
      $this->inPrimaryFieldExpression = $inPrimaryFieldExpression;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\ConvertToPrimaryTable
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\ConvertToPrimaryTable
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\ConvertToPrimaryTable
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTableName()
    {
      return $this->inTableName;
    }

    /**
     * @param string $inTableName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\ConvertToPrimaryTable
     */
    public function setInTableName($inTableName)
    {
      $this->inTableName = $inTableName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPrimaryFieldExpression()
    {
      return $this->inPrimaryFieldExpression;
    }

    /**
     * @param string $inPrimaryFieldExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\ConvertToPrimaryTable
     */
    public function setInPrimaryFieldExpression($inPrimaryFieldExpression)
    {
      $this->inPrimaryFieldExpression = $inPrimaryFieldExpression;
      return $this;
    }

}
