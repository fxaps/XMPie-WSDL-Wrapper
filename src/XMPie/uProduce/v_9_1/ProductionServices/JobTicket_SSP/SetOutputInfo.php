<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class SetOutputInfo
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
     * @var string $inTicketID
     */
    protected $inTicketID = null;

    /**
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @var int $inMedia
     */
    protected $inMedia = null;

    /**
     * @var string $inFolder
     */
    protected $inFolder = null;

    /**
     * @var string $inFileName
     */
    protected $inFileName = null;

    /**
     * @var ArrayOfParameter $inParams
     */
    protected $inParams = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inType
     * @param int $inMedia
     * @param string $inFolder
     * @param string $inFileName
     * @param ArrayOfParameter $inParams
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inType = null, $inMedia = null, $inFolder = null, $inFileName = null, $inParams = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inType = $inType;
      $this->inMedia = $inMedia;
      $this->inFolder = $inFolder;
      $this->inFileName = $inFileName;
      $this->inParams = $inParams;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetOutputInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetOutputInfo
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTicketID()
    {
      return $this->inTicketID;
    }

    /**
     * @param string $inTicketID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetOutputInfo
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetOutputInfo
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
      return $this;
    }

    /**
     * @return int
     */
    public function getInMedia()
    {
      return $this->inMedia;
    }

    /**
     * @param int $inMedia
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetOutputInfo
     */
    public function setInMedia($inMedia)
    {
      $this->inMedia = $inMedia;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFolder()
    {
      return $this->inFolder;
    }

    /**
     * @param string $inFolder
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetOutputInfo
     */
    public function setInFolder($inFolder)
    {
      $this->inFolder = $inFolder;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetOutputInfo
     */
    public function setInFileName($inFileName)
    {
      $this->inFileName = $inFileName;
      return $this;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getInParams()
    {
      return $this->inParams;
    }

    /**
     * @param ArrayOfParameter $inParams
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetOutputInfo
     */
    public function setInParams($inParams)
    {
      $this->inParams = $inParams;
      return $this;
    }

}
