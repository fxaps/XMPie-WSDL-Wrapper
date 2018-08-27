<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP;

class AbortAll
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inUserID
     */
    protected $inUserID = null;

    /**
     * @var string $inAccountID
     */
    protected $inAccountID = null;

    /**
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var string $inStatus
     */
    protected $inStatus = null;

    /**
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var string $inCampaignName
     */
    protected $inCampaignName = null;

    /**
     * @var string $inAccountName
     */
    protected $inAccountName = null;

    /**
     * @var string $inOrderBy
     */
    protected $inOrderBy = null;

    /**
     * @var int $inPageSize
     */
    protected $inPageSize = null;

    /**
     * @var int $inPageIndex
     */
    protected $inPageIndex = null;

    /**
     * @var int $inPageJobId
     */
    protected $inPageJobId = null;

    /**
     * @var string $inEmailMarketingID
     */
    protected $inEmailMarketingID = null;

    /**
     * @var string $inCampaignType
     */
    protected $inCampaignType = null;

    /**
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inUserID
     * @param string $inAccountID
     * @param string $inCampaignID
     * @param string $inDocumentID
     * @param string $inStatus
     * @param string $inType
     * @param string $inName
     * @param string $inCampaignName
     * @param string $inAccountName
     * @param string $inOrderBy
     * @param int $inPageSize
     * @param int $inPageIndex
     * @param int $inPageJobId
     * @param string $inEmailMarketingID
     * @param string $inCampaignType
     * @param string $inTouchPointID
     */
    public function __construct($inUsername = null, $inPassword = null, $inUserID = null, $inAccountID = null, $inCampaignID = null, $inDocumentID = null, $inStatus = null, $inType = null, $inName = null, $inCampaignName = null, $inAccountName = null, $inOrderBy = null, $inPageSize = null, $inPageIndex = null, $inPageJobId = null, $inEmailMarketingID = null, $inCampaignType = null, $inTouchPointID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inUserID = $inUserID;
      $this->inAccountID = $inAccountID;
      $this->inCampaignID = $inCampaignID;
      $this->inDocumentID = $inDocumentID;
      $this->inStatus = $inStatus;
      $this->inType = $inType;
      $this->inName = $inName;
      $this->inCampaignName = $inCampaignName;
      $this->inAccountName = $inAccountName;
      $this->inOrderBy = $inOrderBy;
      $this->inPageSize = $inPageSize;
      $this->inPageIndex = $inPageIndex;
      $this->inPageJobId = $inPageJobId;
      $this->inEmailMarketingID = $inEmailMarketingID;
      $this->inCampaignType = $inCampaignType;
      $this->inTouchPointID = $inTouchPointID;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInUserID()
    {
      return $this->inUserID;
    }

    /**
     * @param string $inUserID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInUserID($inUserID)
    {
      $this->inUserID = $inUserID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountID()
    {
      return $this->inAccountID;
    }

    /**
     * @param string $inAccountID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInAccountID($inAccountID)
    {
      $this->inAccountID = $inAccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignID()
    {
      return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
      return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInStatus()
    {
      return $this->inStatus;
    }

    /**
     * @param string $inStatus
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInStatus($inStatus)
    {
      $this->inStatus = $inStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
      return $this->inType;
    }

    /**
     * @param string $inType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignName()
    {
      return $this->inCampaignName;
    }

    /**
     * @param string $inCampaignName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInCampaignName($inCampaignName)
    {
      $this->inCampaignName = $inCampaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountName()
    {
      return $this->inAccountName;
    }

    /**
     * @param string $inAccountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInAccountName($inAccountName)
    {
      $this->inAccountName = $inAccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderBy()
    {
      return $this->inOrderBy;
    }

    /**
     * @param string $inOrderBy
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInOrderBy($inOrderBy)
    {
      $this->inOrderBy = $inOrderBy;
      return $this;
    }

    /**
     * @return int
     */
    public function getInPageSize()
    {
      return $this->inPageSize;
    }

    /**
     * @param int $inPageSize
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInPageSize($inPageSize)
    {
      $this->inPageSize = $inPageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getInPageIndex()
    {
      return $this->inPageIndex;
    }

    /**
     * @param int $inPageIndex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInPageIndex($inPageIndex)
    {
      $this->inPageIndex = $inPageIndex;
      return $this;
    }

    /**
     * @return int
     */
    public function getInPageJobId()
    {
      return $this->inPageJobId;
    }

    /**
     * @param int $inPageJobId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInPageJobId($inPageJobId)
    {
      $this->inPageJobId = $inPageJobId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailMarketingID()
    {
      return $this->inEmailMarketingID;
    }

    /**
     * @param string $inEmailMarketingID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
      $this->inEmailMarketingID = $inEmailMarketingID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignType()
    {
      return $this->inCampaignType;
    }

    /**
     * @param string $inCampaignType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInCampaignType($inCampaignType)
    {
      $this->inCampaignType = $inCampaignType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTouchPointID()
    {
      return $this->inTouchPointID;
    }

    /**
     * @param string $inTouchPointID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Jobs_SSP\AbortAll
     */
    public function setInTouchPointID($inTouchPointID)
    {
      $this->inTouchPointID = $inTouchPointID;
      return $this;
    }

}
