<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class CreateCampaignResult
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
     * @var string $m_CampaignID
     */
    protected $m_CampaignID = null;

    /**
     * @var int $m_Progress
     */
    protected $m_Progress = null;

    /**
     * @param int $m_Status
     * @param int $m_Progress
     */
    public function __construct($m_Status = null, $m_Progress = null)
    {
      $this->m_Status = $m_Status;
      $this->m_Progress = $m_Progress;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateCampaignResult
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateCampaignResult
     */
    public function setM_Message($m_Message)
    {
      $this->m_Message = $m_Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_CampaignID()
    {
      return $this->m_CampaignID;
    }

    /**
     * @param string $m_CampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateCampaignResult
     */
    public function setM_CampaignID($m_CampaignID)
    {
      $this->m_CampaignID = $m_CampaignID;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Progress()
    {
      return $this->m_Progress;
    }

    /**
     * @param int $m_Progress
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateCampaignResult
     */
    public function setM_Progress($m_Progress)
    {
      $this->m_Progress = $m_Progress;
      return $this;
    }

}
