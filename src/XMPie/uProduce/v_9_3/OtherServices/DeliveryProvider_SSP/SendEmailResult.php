<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP;

class SendEmailResult
{

    /**
     * @var boolean $m_Success
     */
    protected $m_Success = null;

    /**
     * @var string $m_ErrorDescription
     */
    protected $m_ErrorDescription = null;

    /**
     * @var string $m_RecipID
     */
    protected $m_RecipID = null;

    /**
     * @var string $m_EmailID
     */
    protected $m_EmailID = null;

    /**
     * @param boolean $m_Success
     */
    public function __construct($m_Success = null)
    {
      $this->m_Success = $m_Success;
    }

    /**
     * @return boolean
     */
    public function getM_Success()
    {
      return $this->m_Success;
    }

    /**
     * @param boolean $m_Success
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\SendEmailResult
     */
    public function setM_Success($m_Success)
    {
      $this->m_Success = $m_Success;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ErrorDescription()
    {
      return $this->m_ErrorDescription;
    }

    /**
     * @param string $m_ErrorDescription
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\SendEmailResult
     */
    public function setM_ErrorDescription($m_ErrorDescription)
    {
      $this->m_ErrorDescription = $m_ErrorDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_RecipID()
    {
      return $this->m_RecipID;
    }

    /**
     * @param string $m_RecipID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\SendEmailResult
     */
    public function setM_RecipID($m_RecipID)
    {
      $this->m_RecipID = $m_RecipID;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_EmailID()
    {
      return $this->m_EmailID;
    }

    /**
     * @param string $m_EmailID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\SendEmailResult
     */
    public function setM_EmailID($m_EmailID)
    {
      $this->m_EmailID = $m_EmailID;
      return $this;
    }

}
