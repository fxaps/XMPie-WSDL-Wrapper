<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class EmailHeaderInfo
{

    /**
     * @var string $m_Subject
     */
    protected $m_Subject = null;

    /**
     * @var ArrayOfEmailAddress $m_To
     */
    protected $m_To = null;

    /**
     * @var ArrayOfEmailAddress $m_CC
     */
    protected $m_CC = null;

    /**
     * @var ArrayOfEmailAddress $m_BCC
     */
    protected $m_BCC = null;

    /**
     * @var ArrayOfEmailAddress $m_From
     */
    protected $m_From = null;

    /**
     * @var ArrayOfEmailAddress $m_ReplyTo
     */
    protected $m_ReplyTo = null;

    /**
     * @var string $m_Charset
     */
    protected $m_Charset = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_Subject()
    {
      return $this->m_Subject;
    }

    /**
     * @param string $m_Subject
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\EmailHeaderInfo
     */
    public function setM_Subject($m_Subject)
    {
      $this->m_Subject = $m_Subject;
      return $this;
    }

    /**
     * @return ArrayOfEmailAddress
     */
    public function getM_To()
    {
      return $this->m_To;
    }

    /**
     * @param ArrayOfEmailAddress $m_To
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\EmailHeaderInfo
     */
    public function setM_To($m_To)
    {
      $this->m_To = $m_To;
      return $this;
    }

    /**
     * @return ArrayOfEmailAddress
     */
    public function getM_CC()
    {
      return $this->m_CC;
    }

    /**
     * @param ArrayOfEmailAddress $m_CC
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\EmailHeaderInfo
     */
    public function setM_CC($m_CC)
    {
      $this->m_CC = $m_CC;
      return $this;
    }

    /**
     * @return ArrayOfEmailAddress
     */
    public function getM_BCC()
    {
      return $this->m_BCC;
    }

    /**
     * @param ArrayOfEmailAddress $m_BCC
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\EmailHeaderInfo
     */
    public function setM_BCC($m_BCC)
    {
      $this->m_BCC = $m_BCC;
      return $this;
    }

    /**
     * @return ArrayOfEmailAddress
     */
    public function getM_From()
    {
      return $this->m_From;
    }

    /**
     * @param ArrayOfEmailAddress $m_From
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\EmailHeaderInfo
     */
    public function setM_From($m_From)
    {
      $this->m_From = $m_From;
      return $this;
    }

    /**
     * @return ArrayOfEmailAddress
     */
    public function getM_ReplyTo()
    {
      return $this->m_ReplyTo;
    }

    /**
     * @param ArrayOfEmailAddress $m_ReplyTo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\EmailHeaderInfo
     */
    public function setM_ReplyTo($m_ReplyTo)
    {
      $this->m_ReplyTo = $m_ReplyTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Charset()
    {
      return $this->m_Charset;
    }

    /**
     * @param string $m_Charset
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\EmailHeaderInfo
     */
    public function setM_Charset($m_Charset)
    {
      $this->m_Charset = $m_Charset;
      return $this;
    }

}
