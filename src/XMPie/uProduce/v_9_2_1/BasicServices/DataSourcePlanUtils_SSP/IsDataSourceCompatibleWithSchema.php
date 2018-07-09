<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP;

class IsDataSourceCompatibleWithSchema
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
     * @var string $inPlanID
     */
    protected $inPlanID = null;

    /**
     * @var string $inSchemaName
     */
    protected $inSchemaName = null;

    /**
     * @var string $inDataSourceID
     */
    protected $inDataSourceID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inSchemaName
     * @param string $inDataSourceID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inSchemaName = null, $inDataSourceID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inSchemaName = $inSchemaName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchema
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchema
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPlanID()
    {
      return $this->inPlanID;
    }

    /**
     * @param string $inPlanID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchema
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSchemaName()
    {
      return $this->inSchemaName;
    }

    /**
     * @param string $inSchemaName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchema
     */
    public function setInSchemaName($inSchemaName)
    {
      $this->inSchemaName = $inSchemaName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchema
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

}
