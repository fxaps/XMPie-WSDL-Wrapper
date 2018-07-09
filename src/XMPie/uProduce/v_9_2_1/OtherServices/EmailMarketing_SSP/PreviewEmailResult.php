<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class PreviewEmailResult
{

    /**
     * @var string $m_TextBody
     */
    protected $m_TextBody = null;

    /**
     * @var string $m_HtmlBody
     */
    protected $m_HtmlBody = null;

    /**
     * @var int $m_Status
     */
    protected $m_Status = null;

    /**
     * @var string $m_Message
     */
    protected $m_Message = null;

    /**
     * @param int $m_Status
     */
    public function __construct($m_Status = null)
    {
      $this->m_Status = $m_Status;
    }

    /**
     * @return string
     */
    public function getM_TextBody()
    {
      return $this->m_TextBody;
    }

    /**
     * @param string $m_TextBody
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\PreviewEmailResult
     */
    public function setM_TextBody($m_TextBody)
    {
      $this->m_TextBody = $m_TextBody;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_HtmlBody()
    {
      return $this->m_HtmlBody;
    }

    /**
     * @param string $m_HtmlBody
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\PreviewEmailResult
     */
    public function setM_HtmlBody($m_HtmlBody)
    {
      $this->m_HtmlBody = $m_HtmlBody;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Status()
    {
      return $this->m_Status;
    }

    /**
     * @param int $m_Status
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\PreviewEmailResult
     */
    public function setM_Status($m_Status)
    {
      $this->m_Status = $m_Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Message()
    {
      return $this->m_Message;
    }

    /**
     * @param string $m_Message
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\PreviewEmailResult
     */
    public function setM_Message($m_Message)
    {
      $this->m_Message = $m_Message;
      return $this;
    }

}
