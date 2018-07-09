<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP;

class IsRecipientParticipating
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
     * @var string $inDataSourceID
     */
    protected $inDataSourceID = null;

    /**
     * @var RecipientsInfo $inRIInfo
     */
    protected $inRIInfo = null;

    /**
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inDataSourceID
     * @param RecipientsInfo $inRIInfo
     * @param string $inRecipientID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inDataSourceID = null, $inRIInfo = null, $inRecipientID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inDataSourceID = $inDataSourceID;
      $this->inRIInfo = $inRIInfo;
      $this->inRecipientID = $inRecipientID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipating
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipating
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipating
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipating
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipating
     */
    public function setInRIInfo($inRIInfo)
    {
      $this->inRIInfo = $inRIInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientID()
    {
      return $this->inRecipientID;
    }

    /**
     * @param string $inRecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipating
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

}
