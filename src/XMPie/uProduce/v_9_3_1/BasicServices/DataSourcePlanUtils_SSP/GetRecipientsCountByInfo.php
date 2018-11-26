<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSourcePlanUtils_SSP;

class GetRecipientsCountByInfo
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
     * @var Connection $inConnectionInfo
     */
    protected $inConnectionInfo = null;

    /**
     * @var RecipientsInfo $inRIInfo
     */
    protected $inRIInfo = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param Connection $inConnectionInfo
     * @param RecipientsInfo $inRIInfo
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inConnectionInfo = null, $inRIInfo = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inConnectionInfo = $inConnectionInfo;
      $this->inRIInfo = $inRIInfo;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountByInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountByInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountByInfo
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountByInfo
     */
    public function setInConnectionInfo($inConnectionInfo)
    {
      $this->inConnectionInfo = $inConnectionInfo;
      return $this;
    }

    /**
     * @return RecipientsInfo
     */
    public function getInRIInfo()
    {
      return $this->inRIInfo;
    }

    /**
     * @param RecipientsInfo $inRIInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountByInfo
     */
    public function setInRIInfo($inRIInfo)
    {
      $this->inRIInfo = $inRIInfo;
      return $this;
    }

}
