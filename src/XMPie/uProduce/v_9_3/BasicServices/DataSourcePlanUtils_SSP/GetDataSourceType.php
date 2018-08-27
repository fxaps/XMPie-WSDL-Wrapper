<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSourcePlanUtils_SSP;

class GetDataSourceType
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
     * @var string $inDataSourceType
     */
    protected $inDataSourceType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceType
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDataSourceType = $inDataSourceType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceType
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceType
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceType()
    {
      return $this->inDataSourceType;
    }

    /**
     * @param string $inDataSourceType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceType
     */
    public function setInDataSourceType($inDataSourceType)
    {
      $this->inDataSourceType = $inDataSourceType;
      return $this;
    }

}
