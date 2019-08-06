<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP;

class GetAssetsXMPTblDataSet
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
     * @var string $inAssetSourceID
     */
    protected $inAssetSourceID = null;

    /**
     * @var int $inPageSize
     */
    protected $inPageSize = null;

    /**
     * @var int $inPageIndex
     */
    protected $inPageIndex = null;

    /**
     * @var string $inPageAssetId
     */
    protected $inPageAssetId = null;

    /**
     * @var ArrayOfString $inSortingAssetInfoPropertyNames
     */
    protected $inSortingAssetInfoPropertyNames = null;

    /**
     * @var string $inSortingDirection
     */
    protected $inSortingDirection = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param int $inPageSize
     * @param int $inPageIndex
     * @param string $inPageAssetId
     * @param ArrayOfString $inSortingAssetInfoPropertyNames
     * @param string $inSortingDirection
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inPageSize = null, $inPageIndex = null, $inPageAssetId = null, $inSortingAssetInfoPropertyNames = null, $inSortingDirection = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
      $this->inPageSize = $inPageSize;
      $this->inPageIndex = $inPageIndex;
      $this->inPageAssetId = $inPageAssetId;
      $this->inSortingAssetInfoPropertyNames = $inSortingAssetInfoPropertyNames;
      $this->inSortingDirection = $inSortingDirection;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetSourceID()
    {
      return $this->inAssetSourceID;
    }

    /**
     * @param string $inAssetSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet
     */
    public function setInPageIndex($inPageIndex)
    {
      $this->inPageIndex = $inPageIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPageAssetId()
    {
      return $this->inPageAssetId;
    }

    /**
     * @param string $inPageAssetId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet
     */
    public function setInPageAssetId($inPageAssetId)
    {
      $this->inPageAssetId = $inPageAssetId;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInSortingAssetInfoPropertyNames()
    {
      return $this->inSortingAssetInfoPropertyNames;
    }

    /**
     * @param ArrayOfString $inSortingAssetInfoPropertyNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet
     */
    public function setInSortingAssetInfoPropertyNames($inSortingAssetInfoPropertyNames)
    {
      $this->inSortingAssetInfoPropertyNames = $inSortingAssetInfoPropertyNames;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSortingDirection()
    {
      return $this->inSortingDirection;
    }

    /**
     * @param string $inSortingDirection
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet
     */
    public function setInSortingDirection($inSortingDirection)
    {
      $this->inSortingDirection = $inSortingDirection;
      return $this;
    }

}
