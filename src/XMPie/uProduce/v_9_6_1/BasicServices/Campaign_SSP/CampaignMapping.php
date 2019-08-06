<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class CampaignMapping
{

    /**
     * @var IDMapping $ID
     */
    protected $ID = null;

    /**
     * @var PlanMapping $Plan
     */
    protected $Plan = null;

    /**
     * @var ArrayOfDocumentMapping $documentArray
     */
    protected $documentArray = null;

    /**
     * @var ArrayOfDataSourceMapping $dataSourceArray
     */
    protected $dataSourceArray = null;

    /**
     * @var ArrayOfAssetSourceMapping $assetSourceArray
     */
    protected $assetSourceArray = null;

    /**
     * @param IDMapping $ID
     * @param PlanMapping $Plan
     */
    public function __construct($ID = null, $Plan = null)
    {
      $this->ID = $ID;
      $this->Plan = $Plan;
    }

    /**
     * @return IDMapping
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param IDMapping $ID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\CampaignMapping
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return PlanMapping
     */
    public function getPlan()
    {
      return $this->Plan;
    }

    /**
     * @param PlanMapping $Plan
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\CampaignMapping
     */
    public function setPlan($Plan)
    {
      $this->Plan = $Plan;
      return $this;
    }

    /**
     * @return ArrayOfDocumentMapping
     */
    public function getDocumentArray()
    {
      return $this->documentArray;
    }

    /**
     * @param ArrayOfDocumentMapping $documentArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\CampaignMapping
     */
    public function setDocumentArray($documentArray)
    {
      $this->documentArray = $documentArray;
      return $this;
    }

    /**
     * @return ArrayOfDataSourceMapping
     */
    public function getDataSourceArray()
    {
      return $this->dataSourceArray;
    }

    /**
     * @param ArrayOfDataSourceMapping $dataSourceArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\CampaignMapping
     */
    public function setDataSourceArray($dataSourceArray)
    {
      $this->dataSourceArray = $dataSourceArray;
      return $this;
    }

    /**
     * @return ArrayOfAssetSourceMapping
     */
    public function getAssetSourceArray()
    {
      return $this->assetSourceArray;
    }

    /**
     * @param ArrayOfAssetSourceMapping $assetSourceArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\CampaignMapping
     */
    public function setAssetSourceArray($assetSourceArray)
    {
      $this->assetSourceArray = $assetSourceArray;
      return $this;
    }

}
