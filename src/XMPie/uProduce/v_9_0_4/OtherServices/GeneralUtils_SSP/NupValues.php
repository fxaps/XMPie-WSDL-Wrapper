<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP;

class NupValues
{

    /**
     * @var int $m_NupX
     */
    protected $m_NupX = null;

    /**
     * @var int $m_NupY
     */
    protected $m_NupY = null;

    /**
     * @param int $m_NupX
     * @param int $m_NupY
     */
    public function __construct($m_NupX = null, $m_NupY = null)
    {
      $this->m_NupX = $m_NupX;
      $this->m_NupY = $m_NupY;
    }

    /**
     * @return int
     */
    public function getM_NupX()
    {
      return $this->m_NupX;
    }

    /**
     * @param int $m_NupX
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\NupValues
     */
    public function setM_NupX($m_NupX)
    {
      $this->m_NupX = $m_NupX;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_NupY()
    {
      return $this->m_NupY;
    }

    /**
     * @param int $m_NupY
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\NupValues
     */
    public function setM_NupY($m_NupY)
    {
      $this->m_NupY = $m_NupY;
      return $this;
    }

}
