<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP;

class Report
{

    /**
     * @var boolean $m_Status
     */
    protected $m_Status = null;

    /**
     * @var ArrayOfReportMessage $m_Messages
     */
    protected $m_Messages = null;

    /**
     * @param boolean $m_Status
     */
    public function __construct($m_Status = null)
    {
      $this->m_Status = $m_Status;
    }

    /**
     * @return boolean
     */
    public function getM_Status()
    {
      return $this->m_Status;
    }

    /**
     * @param boolean $m_Status
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP\Report
     */
    public function setM_Status($m_Status)
    {
      $this->m_Status = $m_Status;
      return $this;
    }

    /**
     * @return ArrayOfReportMessage
     */
    public function getM_Messages()
    {
      return $this->m_Messages;
    }

    /**
     * @param ArrayOfReportMessage $m_Messages
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP\Report
     */
    public function setM_Messages($m_Messages)
    {
      $this->m_Messages = $m_Messages;
      return $this;
    }

}
