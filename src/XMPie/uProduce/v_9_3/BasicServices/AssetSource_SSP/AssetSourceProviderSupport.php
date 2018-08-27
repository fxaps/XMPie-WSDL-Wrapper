<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP;

class AssetSourceProviderSupport
{

    /**
     * @var boolean $m_CopyCreation
     */
    protected $m_CopyCreation = null;

    /**
     * @var boolean $m_ThumbnailCreation
     */
    protected $m_ThumbnailCreation = null;

    /**
     * @var boolean $m_Browsing
     */
    protected $m_Browsing = null;

    /**
     * @var boolean $m_PagedBrowsing
     */
    protected $m_PagedBrowsing = null;

    /**
     * @var boolean $m_SortedBrowsing
     */
    protected $m_SortedBrowsing = null;

    /**
     * @var boolean $m_Creation
     */
    protected $m_Creation = null;

    /**
     * @var boolean $m_Replacement
     */
    protected $m_Replacement = null;

    /**
     * @var boolean $m_PropertiesModification
     */
    protected $m_PropertiesModification = null;

    /**
     * @var boolean $m_Deletion
     */
    protected $m_Deletion = null;

    /**
     * @var boolean $m_Locking
     */
    protected $m_Locking = null;

    /**
     * @param boolean $m_CopyCreation
     * @param boolean $m_ThumbnailCreation
     * @param boolean $m_Browsing
     * @param boolean $m_PagedBrowsing
     * @param boolean $m_SortedBrowsing
     * @param boolean $m_Creation
     * @param boolean $m_Replacement
     * @param boolean $m_PropertiesModification
     * @param boolean $m_Deletion
     * @param boolean $m_Locking
     */
    public function __construct($m_CopyCreation = null, $m_ThumbnailCreation = null, $m_Browsing = null, $m_PagedBrowsing = null, $m_SortedBrowsing = null, $m_Creation = null, $m_Replacement = null, $m_PropertiesModification = null, $m_Deletion = null, $m_Locking = null)
    {
      $this->m_CopyCreation = $m_CopyCreation;
      $this->m_ThumbnailCreation = $m_ThumbnailCreation;
      $this->m_Browsing = $m_Browsing;
      $this->m_PagedBrowsing = $m_PagedBrowsing;
      $this->m_SortedBrowsing = $m_SortedBrowsing;
      $this->m_Creation = $m_Creation;
      $this->m_Replacement = $m_Replacement;
      $this->m_PropertiesModification = $m_PropertiesModification;
      $this->m_Deletion = $m_Deletion;
      $this->m_Locking = $m_Locking;
    }

    /**
     * @return boolean
     */
    public function getM_CopyCreation()
    {
      return $this->m_CopyCreation;
    }

    /**
     * @param boolean $m_CopyCreation
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_CopyCreation($m_CopyCreation)
    {
      $this->m_CopyCreation = $m_CopyCreation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_ThumbnailCreation()
    {
      return $this->m_ThumbnailCreation;
    }

    /**
     * @param boolean $m_ThumbnailCreation
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_ThumbnailCreation($m_ThumbnailCreation)
    {
      $this->m_ThumbnailCreation = $m_ThumbnailCreation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_Browsing()
    {
      return $this->m_Browsing;
    }

    /**
     * @param boolean $m_Browsing
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_Browsing($m_Browsing)
    {
      $this->m_Browsing = $m_Browsing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_PagedBrowsing()
    {
      return $this->m_PagedBrowsing;
    }

    /**
     * @param boolean $m_PagedBrowsing
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_PagedBrowsing($m_PagedBrowsing)
    {
      $this->m_PagedBrowsing = $m_PagedBrowsing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_SortedBrowsing()
    {
      return $this->m_SortedBrowsing;
    }

    /**
     * @param boolean $m_SortedBrowsing
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_SortedBrowsing($m_SortedBrowsing)
    {
      $this->m_SortedBrowsing = $m_SortedBrowsing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_Creation()
    {
      return $this->m_Creation;
    }

    /**
     * @param boolean $m_Creation
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_Creation($m_Creation)
    {
      $this->m_Creation = $m_Creation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_Replacement()
    {
      return $this->m_Replacement;
    }

    /**
     * @param boolean $m_Replacement
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_Replacement($m_Replacement)
    {
      $this->m_Replacement = $m_Replacement;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_PropertiesModification()
    {
      return $this->m_PropertiesModification;
    }

    /**
     * @param boolean $m_PropertiesModification
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_PropertiesModification($m_PropertiesModification)
    {
      $this->m_PropertiesModification = $m_PropertiesModification;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_Deletion()
    {
      return $this->m_Deletion;
    }

    /**
     * @param boolean $m_Deletion
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_Deletion($m_Deletion)
    {
      $this->m_Deletion = $m_Deletion;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_Locking()
    {
      return $this->m_Locking;
    }

    /**
     * @param boolean $m_Locking
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\AssetSourceProviderSupport
     */
    public function setM_Locking($m_Locking)
    {
      $this->m_Locking = $m_Locking;
      return $this;
    }

}
