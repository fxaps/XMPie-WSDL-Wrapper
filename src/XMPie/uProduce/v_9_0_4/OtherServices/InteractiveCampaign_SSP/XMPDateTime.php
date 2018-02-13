<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP;

class XMPDateTime
{

    /**
     * @var int $m_Year
     */
    protected $m_Year = null;

    /**
     * @var int $m_Month
     */
    protected $m_Month = null;

    /**
     * @var int $m_Day
     */
    protected $m_Day = null;

    /**
     * @var int $m_Hour
     */
    protected $m_Hour = null;

    /**
     * @var int $m_Minute
     */
    protected $m_Minute = null;

    /**
     * @var int $m_Second
     */
    protected $m_Second = null;

    /**
     * @var int $m_Millisecond
     */
    protected $m_Millisecond = null;

    /**
     * @var int $m_GMT
     */
    protected $m_GMT = null;

    /**
     * @param int $m_Year
     * @param int $m_Month
     * @param int $m_Day
     * @param int $m_Hour
     * @param int $m_Minute
     * @param int $m_Second
     * @param int $m_Millisecond
     * @param int $m_GMT
     */
    public function __construct($m_Year = null, $m_Month = null, $m_Day = null, $m_Hour = null, $m_Minute = null, $m_Second = null, $m_Millisecond = null, $m_GMT = null)
    {
      $this->m_Year = $m_Year;
      $this->m_Month = $m_Month;
      $this->m_Day = $m_Day;
      $this->m_Hour = $m_Hour;
      $this->m_Minute = $m_Minute;
      $this->m_Second = $m_Second;
      $this->m_Millisecond = $m_Millisecond;
      $this->m_GMT = $m_GMT;
    }

    /**
     * @return int
     */
    public function getM_Year()
    {
      return $this->m_Year;
    }

    /**
     * @param int $m_Year
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime
     */
    public function setM_Year($m_Year)
    {
      $this->m_Year = $m_Year;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Month()
    {
      return $this->m_Month;
    }

    /**
     * @param int $m_Month
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime
     */
    public function setM_Month($m_Month)
    {
      $this->m_Month = $m_Month;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Day()
    {
      return $this->m_Day;
    }

    /**
     * @param int $m_Day
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime
     */
    public function setM_Day($m_Day)
    {
      $this->m_Day = $m_Day;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Hour()
    {
      return $this->m_Hour;
    }

    /**
     * @param int $m_Hour
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime
     */
    public function setM_Hour($m_Hour)
    {
      $this->m_Hour = $m_Hour;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Minute()
    {
      return $this->m_Minute;
    }

    /**
     * @param int $m_Minute
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime
     */
    public function setM_Minute($m_Minute)
    {
      $this->m_Minute = $m_Minute;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Second()
    {
      return $this->m_Second;
    }

    /**
     * @param int $m_Second
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime
     */
    public function setM_Second($m_Second)
    {
      $this->m_Second = $m_Second;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Millisecond()
    {
      return $this->m_Millisecond;
    }

    /**
     * @param int $m_Millisecond
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime
     */
    public function setM_Millisecond($m_Millisecond)
    {
      $this->m_Millisecond = $m_Millisecond;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_GMT()
    {
      return $this->m_GMT;
    }

    /**
     * @param int $m_GMT
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime
     */
    public function setM_GMT($m_GMT)
    {
      $this->m_GMT = $m_GMT;
      return $this;
    }

}
