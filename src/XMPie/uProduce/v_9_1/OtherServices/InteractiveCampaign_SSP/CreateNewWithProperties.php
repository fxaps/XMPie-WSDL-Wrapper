<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\InteractiveCampaign_SSP;

class CreateNewWithProperties
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
     * @var string $inJobTicket
     */
    protected $inJobTicket = null;

    /**
     * @var string $inICPName
     */
    protected $inICPName = null;

    /**
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobTicket
     * @param string $inICPName
     * @param string $inTouchPointID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobTicket = null, $inICPName = null, $inTouchPointID = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobTicket = $inJobTicket;
      $this->inICPName = $inICPName;
      $this->inTouchPointID = $inTouchPointID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\InteractiveCampaign_SSP\CreateNewWithProperties
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\InteractiveCampaign_SSP\CreateNewWithProperties
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobTicket()
    {
      return $this->inJobTicket;
    }

    /**
     * @param string $inJobTicket
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\InteractiveCampaign_SSP\CreateNewWithProperties
     */
    public function setInJobTicket($inJobTicket)
    {
      $this->inJobTicket = $inJobTicket;
      return $this;
    }

    /**
     * @return string
     */
    public function getInICPName()
    {
      return $this->inICPName;
    }

    /**
     * @param string $inICPName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\InteractiveCampaign_SSP\CreateNewWithProperties
     */
    public function setInICPName($inICPName)
    {
      $this->inICPName = $inICPName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTouchPointID()
    {
      return $this->inTouchPointID;
    }

    /**
     * @param string $inTouchPointID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\InteractiveCampaign_SSP\CreateNewWithProperties
     */
    public function setInTouchPointID($inTouchPointID)
    {
      $this->inTouchPointID = $inTouchPointID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\InteractiveCampaign_SSP\CreateNewWithProperties
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
