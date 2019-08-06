<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class CampaignShortcutInfo
{

    /**
     * @var string $m_AccountID
     */
    protected $m_AccountID = null;

    /**
     * @var string $m_AccountName
     */
    protected $m_AccountName = null;

    /**
     * @var string $m_CampaignID
     */
    protected $m_CampaignID = null;

    /**
     * @var string $m_CampaignName
     */
    protected $m_CampaignName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_AccountID()
    {
      return $this->m_AccountID;
    }

    /**
     * @param string $m_AccountID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\CampaignShortcutInfo
     */
    public function setM_AccountID($m_AccountID)
    {
      $this->m_AccountID = $m_AccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_AccountName()
    {
      return $this->m_AccountName;
    }

    /**
     * @param string $m_AccountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\CampaignShortcutInfo
     */
    public function setM_AccountName($m_AccountName)
    {
      $this->m_AccountName = $m_AccountName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\CampaignShortcutInfo
     */
    public function setM_CampaignID($m_CampaignID)
    {
      $this->m_CampaignID = $m_CampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_CampaignName()
    {
      return $this->m_CampaignName;
    }

    /**
     * @param string $m_CampaignName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\CampaignShortcutInfo
     */
    public function setM_CampaignName($m_CampaignName)
    {
      $this->m_CampaignName = $m_CampaignName;
      return $this;
    }

}
