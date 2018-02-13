<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateDestination_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateUser_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateAccount_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateAsset_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateAssetSource_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateAssetSourceUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateCampaign_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateCustomer_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateDataSource_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateDataSourcePlanUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateDocument_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateFont_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricatePlan_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricatePlanUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateRecipientTable_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateTempStorage_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateDeliveryProvider_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateEmailMarketing_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateGeneralUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateInteractiveCampaign_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateLicensing_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricatePermissions_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateTouchPoint_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateTracker_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateSystemManager_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateJob_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateJobs_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateJobTicket_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator\FabricateProduction_SSP;


class RequestFabricator
{
    private $paramAutoSet;
    
    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateDestination_SSP
    */
    public function Destination_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateDestination_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateUser_SSP
    */
    public function User_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateUser_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateAccount_SSP
    */
    public function Account_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateAccount_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateAsset_SSP
    */
    public function Asset_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateAsset_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateAssetSource_SSP
    */
    public function AssetSource_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateAssetSource_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateAssetSourceUtils_SSP
    */
    public function AssetSourceUtils_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateAssetSourceUtils_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateCampaign_SSP
    */
    public function Campaign_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateCampaign_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateCustomer_SSP
    */
    public function Customer_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateCustomer_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateDataSource_SSP
    */
    public function DataSource_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateDataSource_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateDataSourcePlanUtils_SSP
    */
    public function DataSourcePlanUtils_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateDataSourcePlanUtils_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateDocument_SSP
    */
    public function Document_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateDocument_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateFont_SSP
    */
    public function Font_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateFont_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricatePlan_SSP
    */
    public function Plan_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricatePlan_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricatePlanUtils_SSP
    */
    public function PlanUtils_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricatePlanUtils_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateRecipientTable_SSP
    */
    public function RecipientTable_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateRecipientTable_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateTempStorage_SSP
    */
    public function TempStorage_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateTempStorage_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateDeliveryProvider_SSP
    */
    public function DeliveryProvider_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateDeliveryProvider_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateEmailMarketing_SSP
    */
    public function EmailMarketing_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateEmailMarketing_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateGeneralUtils_SSP
    */
    public function GeneralUtils_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateGeneralUtils_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateInteractiveCampaign_SSP
    */
    public function InteractiveCampaign_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateInteractiveCampaign_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateLicensing_SSP
    */
    public function Licensing_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateLicensing_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricatePermissions_SSP
    */
    public function Permissions_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricatePermissions_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateTouchPoint_SSP
    */
    public function TouchPoint_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateTouchPoint_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateTracker_SSP
    */
    public function Tracker_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateTracker_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateSystemManager_SSP
    */
    public function SystemManager_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateSystemManager_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateJob_SSP
    */
    public function Job_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateJob_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateJobs_SSP
    */
    public function Jobs_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateJobs_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateJobTicket_SSP
    */
    public function JobTicket_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateJobTicket_SSP($paramAutoSet);
    }


   /**
    * @param array $paramAutoSet
    * @return FabricateProduction_SSP
    */
    public function Production_SSP($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateProduction_SSP($paramAutoSet);
    }



}

?>
