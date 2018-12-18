<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class EmailBodyInfo
{

    /**
     * @var string $m_Content
     */
    protected $m_Content = null;

    /**
     * @var string $m_ContentType
     */
    protected $m_ContentType = null;

    /**
     * @var string $m_Format
     */
    protected $m_Format = null;

    /**
     * @var EmailBodyOptions $m_BodyOptions
     */
    protected $m_BodyOptions = null;

    /**
     * @var URLInfo $m_URLInfo
     */
    protected $m_URLInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_Content()
    {
      return $this->m_Content;
    }

    /**
     * @param string $m_Content
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\EmailBodyInfo
     */
    public function setM_Content($m_Content)
    {
      $this->m_Content = $m_Content;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ContentType()
    {
      return $this->m_ContentType;
    }

    /**
     * @param string $m_ContentType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\EmailBodyInfo
     */
    public function setM_ContentType($m_ContentType)
    {
      $this->m_ContentType = $m_ContentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Format()
    {
      return $this->m_Format;
    }

    /**
     * @param string $m_Format
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\EmailBodyInfo
     */
    public function setM_Format($m_Format)
    {
      $this->m_Format = $m_Format;
      return $this;
    }

    /**
     * @return EmailBodyOptions
     */
    public function getM_BodyOptions()
    {
      return $this->m_BodyOptions;
    }

    /**
     * @param EmailBodyOptions $m_BodyOptions
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\EmailBodyInfo
     */
    public function setM_BodyOptions($m_BodyOptions)
    {
      $this->m_BodyOptions = $m_BodyOptions;
      return $this;
    }

    /**
     * @return URLInfo
     */
    public function getM_URLInfo()
    {
      return $this->m_URLInfo;
    }

    /**
     * @param URLInfo $m_URLInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\EmailBodyInfo
     */
    public function setM_URLInfo($m_URLInfo)
    {
      $this->m_URLInfo = $m_URLInfo;
      return $this;
    }

}
