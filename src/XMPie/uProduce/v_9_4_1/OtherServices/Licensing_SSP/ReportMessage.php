<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP;

class ReportMessage
{

    /**
     * @var string $m_Message
     */
    protected $m_Message = null;

    /**
     * @var int $m_TypeID
     */
    protected $m_TypeID = null;

    /**
     * @var ArrayOfProperty $m_Properties
     */
    protected $m_Properties = null;

    /**
     * @param int $m_TypeID
     */
    public function __construct($m_TypeID = null)
    {
      $this->m_TypeID = $m_TypeID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\ReportMessage
     */
    public function setM_Message($m_Message)
    {
      $this->m_Message = $m_Message;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_TypeID()
    {
      return $this->m_TypeID;
    }

    /**
     * @param int $m_TypeID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\ReportMessage
     */
    public function setM_TypeID($m_TypeID)
    {
      $this->m_TypeID = $m_TypeID;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getM_Properties()
    {
      return $this->m_Properties;
    }

    /**
     * @param ArrayOfProperty $m_Properties
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\ReportMessage
     */
    public function setM_Properties($m_Properties)
    {
      $this->m_Properties = $m_Properties;
      return $this;
    }

}
