<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSourcePlanUtils_SSP;

class IsDataSourceCompatibleWithSchemaByInfo
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
     * @var string $inSchemaname
     */
    protected $inSchemaname = null;

    /**
     * @var Connection $inConnectionInfo
     */
    protected $inConnectionInfo = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inSchemaname
     * @param Connection $inConnectionInfo
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inSchemaname = null, $inConnectionInfo = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inSchemaname = $inSchemaname;
      $this->inConnectionInfo = $inConnectionInfo;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaByInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaByInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaByInfo
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSchemaname()
    {
      return $this->inSchemaname;
    }

    /**
     * @param string $inSchemaname
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaByInfo
     */
    public function setInSchemaname($inSchemaname)
    {
      $this->inSchemaname = $inSchemaname;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getInConnectionInfo()
    {
      return $this->inConnectionInfo;
    }

    /**
     * @param Connection $inConnectionInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaByInfo
     */
    public function setInConnectionInfo($inConnectionInfo)
    {
      $this->inConnectionInfo = $inConnectionInfo;
      return $this;
    }

}
