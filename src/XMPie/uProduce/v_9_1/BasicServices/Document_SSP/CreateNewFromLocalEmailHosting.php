<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP;

class CreateNewFromLocalEmailHosting
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
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @var string $inFileName
     */
    protected $inFileName = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inType
     * @param string $inFileName
     * @param string $inName
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inType = null, $inFileName = null, $inName = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inType = $inType;
      $this->inFileName = $inFileName;
      $this->inName = $inName;
      $this->inProps = $inProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHosting
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHosting
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignID()
    {
      return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHosting
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
      return $this->inType;
    }

    /**
     * @param string $inType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHosting
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFileName()
    {
      return $this->inFileName;
    }

    /**
     * @param string $inFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHosting
     */
    public function setInFileName($inFileName)
    {
      $this->inFileName = $inFileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHosting
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHosting
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
