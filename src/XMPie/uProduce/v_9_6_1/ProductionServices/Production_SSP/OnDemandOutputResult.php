<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP;

class OnDemandOutputResult
{

    /**
     * @var int $m_Status
     */
    protected $m_Status = null;

    /**
     * @var string $m_Message
     */
    protected $m_Message = null;

    /**
     * @var string $m_FileName
     */
    protected $m_FileName = null;

    /**
     * @var int $m_FileSize
     */
    protected $m_FileSize = null;

    /**
     * @var string $m_FileToken
     */
    protected $m_FileToken = null;

    /**
     * @param int $m_Status
     * @param int $m_FileSize
     */
    public function __construct($m_Status = null, $m_FileSize = null)
    {
      $this->m_Status = $m_Status;
      $this->m_FileSize = $m_FileSize;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\OnDemandOutputResult
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\OnDemandOutputResult
     */
    public function setM_Message($m_Message)
    {
      $this->m_Message = $m_Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_FileName()
    {
      return $this->m_FileName;
    }

    /**
     * @param string $m_FileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\OnDemandOutputResult
     */
    public function setM_FileName($m_FileName)
    {
      $this->m_FileName = $m_FileName;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_FileSize()
    {
      return $this->m_FileSize;
    }

    /**
     * @param int $m_FileSize
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\OnDemandOutputResult
     */
    public function setM_FileSize($m_FileSize)
    {
      $this->m_FileSize = $m_FileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_FileToken()
    {
      return $this->m_FileToken;
    }

    /**
     * @param string $m_FileToken
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\OnDemandOutputResult
     */
    public function setM_FileToken($m_FileToken)
    {
      $this->m_FileToken = $m_FileToken;
      return $this;
    }

}
