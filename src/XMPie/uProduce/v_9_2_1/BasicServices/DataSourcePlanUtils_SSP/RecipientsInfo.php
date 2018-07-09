<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP;

class RecipientsInfo
{

    /**
     * @var int $m_From
     */
    protected $m_From = null;

    /**
     * @var int $m_To
     */
    protected $m_To = null;

    /**
     * @var int $m_FilterType
     */
    protected $m_FilterType = null;

    /**
     * @var string $m_Filter
     */
    protected $m_Filter = null;

    /**
     * @var string $m_SubFilter
     */
    protected $m_SubFilter = null;

    /**
     * @var string $m_SelectOneQuery
     */
    protected $m_SelectOneQuery = null;

    /**
     * @var string $m_InsertQuery
     */
    protected $m_InsertQuery = null;

    /**
     * @var string $m_UpdateQuery
     */
    protected $m_UpdateQuery = null;

    /**
     * @var string $m_DeleteQuery
     */
    protected $m_DeleteQuery = null;

    /**
     * @var string $m_recipientIDListFileName
     */
    protected $m_recipientIDListFileName = null;

    /**
     * @var int $m_recipientIDListMergeType
     */
    protected $m_recipientIDListMergeType = null;

    /**
     * @param int $m_From
     * @param int $m_To
     * @param int $m_FilterType
     * @param int $m_recipientIDListMergeType
     */
    public function __construct($m_From = null, $m_To = null, $m_FilterType = null, $m_recipientIDListMergeType = null)
    {
      $this->m_From = $m_From;
      $this->m_To = $m_To;
      $this->m_FilterType = $m_FilterType;
      $this->m_recipientIDListMergeType = $m_recipientIDListMergeType;
    }

    /**
     * @return int
     */
    public function getM_From()
    {
      return $this->m_From;
    }

    /**
     * @param int $m_From
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_From($m_From)
    {
      $this->m_From = $m_From;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_To()
    {
      return $this->m_To;
    }

    /**
     * @param int $m_To
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_To($m_To)
    {
      $this->m_To = $m_To;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_FilterType()
    {
      return $this->m_FilterType;
    }

    /**
     * @param int $m_FilterType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_FilterType($m_FilterType)
    {
      $this->m_FilterType = $m_FilterType;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Filter()
    {
      return $this->m_Filter;
    }

    /**
     * @param string $m_Filter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_Filter($m_Filter)
    {
      $this->m_Filter = $m_Filter;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_SubFilter()
    {
      return $this->m_SubFilter;
    }

    /**
     * @param string $m_SubFilter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_SubFilter($m_SubFilter)
    {
      $this->m_SubFilter = $m_SubFilter;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_SelectOneQuery()
    {
      return $this->m_SelectOneQuery;
    }

    /**
     * @param string $m_SelectOneQuery
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_SelectOneQuery($m_SelectOneQuery)
    {
      $this->m_SelectOneQuery = $m_SelectOneQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_InsertQuery()
    {
      return $this->m_InsertQuery;
    }

    /**
     * @param string $m_InsertQuery
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_InsertQuery($m_InsertQuery)
    {
      $this->m_InsertQuery = $m_InsertQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_UpdateQuery()
    {
      return $this->m_UpdateQuery;
    }

    /**
     * @param string $m_UpdateQuery
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_UpdateQuery($m_UpdateQuery)
    {
      $this->m_UpdateQuery = $m_UpdateQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_DeleteQuery()
    {
      return $this->m_DeleteQuery;
    }

    /**
     * @param string $m_DeleteQuery
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_DeleteQuery($m_DeleteQuery)
    {
      $this->m_DeleteQuery = $m_DeleteQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_recipientIDListFileName()
    {
      return $this->m_recipientIDListFileName;
    }

    /**
     * @param string $m_recipientIDListFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_recipientIDListFileName($m_recipientIDListFileName)
    {
      $this->m_recipientIDListFileName = $m_recipientIDListFileName;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_recipientIDListMergeType()
    {
      return $this->m_recipientIDListMergeType;
    }

    /**
     * @param int $m_recipientIDListMergeType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo
     */
    public function setM_recipientIDListMergeType($m_recipientIDListMergeType)
    {
      $this->m_recipientIDListMergeType = $m_recipientIDListMergeType;
      return $this;
    }

}
