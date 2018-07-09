<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\AssetSourceUtils_SSP;

class XMPTbl
{

    /**
     * @var string $m_TableName
     */
    protected $m_TableName = null;

    /**
     * @var ArrayOfXMPTblColumn $m_ColumnNameArray
     */
    protected $m_ColumnNameArray = null;

    /**
     * @var ArrayOfXMPTblRow $m_RowArray
     */
    protected $m_RowArray = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getM_TableName()
    {
      return $this->m_TableName;
    }

    /**
     * @param string $m_TableName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\AssetSourceUtils_SSP\XMPTbl
     */
    public function setM_TableName($m_TableName)
    {
      $this->m_TableName = $m_TableName;
      return $this;
    }

    /**
     * @return ArrayOfXMPTblColumn
     */
    public function getM_ColumnNameArray()
    {
      return $this->m_ColumnNameArray;
    }

    /**
     * @param ArrayOfXMPTblColumn $m_ColumnNameArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\AssetSourceUtils_SSP\XMPTbl
     */
    public function setM_ColumnNameArray($m_ColumnNameArray)
    {
      $this->m_ColumnNameArray = $m_ColumnNameArray;
      return $this;
    }

    /**
     * @return ArrayOfXMPTblRow
     */
    public function getM_RowArray()
    {
      return $this->m_RowArray;
    }

    /**
     * @param ArrayOfXMPTblRow $m_RowArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\AssetSourceUtils_SSP\XMPTbl
     */
    public function setM_RowArray($m_RowArray)
    {
      $this->m_RowArray = $m_RowArray;
      return $this;
    }

}
