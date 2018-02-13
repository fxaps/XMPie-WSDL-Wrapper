<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\Fabricator;


use XMPieWsdlClient\XMPie\Utilities\Formatter;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ApplicationServices\Destination_SSP\Destination_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ApplicationServices\User_SSP\User_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Account_SSP\Account_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\Asset_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\AssetSource_SSP\AssetSource_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\AssetSourceUtils_SSP\AssetSourceUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\Campaign_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP\Customer_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSource_SSP\DataSource_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP\DataSourcePlanUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\Document_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Font_SSP\Font_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Plan_SSP\Plan_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\PlanUtils_SSP\PlanUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\RecipientTable_SSP\RecipientTable_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\TempStorage_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\DeliveryProvider_SSP\DeliveryProvider_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\EmailMarketing_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\GeneralUtils_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\InteractiveCampaign_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\Licensing_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Permissions_SSP\Permissions_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\TouchPoint_SSP\TouchPoint_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\Tracker_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\SystemManager_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Job_SSP\Job_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Jobs_SSP\Jobs_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\JobTicket_SSP;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Production_SSP\Production_SSP;


class ServiceFabricator
{
    private $uProduceUrl;
    private $options;

    /**
     * ServiceFabricator constructor.
     *
     * @param array $options
     * @param string $serverUrl
     */
    public function __construct(array $options = [], $serverUrl = 'http://localhost/')
    {
        $this->setUProduceUrl($serverUrl);
        $this->setOptions($options);
    }

    /**
     * @return string
     */
    public function getUProduceUrl()
    {
        return $this->uProduceUrl;
    }

    /**
     * @param string $uProduceUrl
     */
    public function setUProduceUrl($uProduceUrl)
    {
        $uProduceUrl = Formatter::fixServerUrl($uProduceUrl);
        $this->uProduceUrl = $uProduceUrl;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Destination_SSP
    */
    public function Destination_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Destination_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Destination_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return User_SSP
    */
    public function User_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/User_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new User_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Account_SSP
    */
    public function Account_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Account_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Account_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Asset_SSP
    */
    public function Asset_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Asset_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Asset_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return AssetSource_SSP
    */
    public function AssetSource_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/AssetSource_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new AssetSource_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return AssetSourceUtils_SSP
    */
    public function AssetSourceUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/AssetSourceUtils_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new AssetSourceUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Campaign_SSP
    */
    public function Campaign_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Campaign_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Campaign_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Customer_SSP
    */
    public function Customer_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Customer_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Customer_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return DataSource_SSP
    */
    public function DataSource_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/DataSource_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new DataSource_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return DataSourcePlanUtils_SSP
    */
    public function DataSourcePlanUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/DataSourcePlanUtils_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new DataSourcePlanUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Document_SSP
    */
    public function Document_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Document_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Document_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Font_SSP
    */
    public function Font_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Font_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Font_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Plan_SSP
    */
    public function Plan_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Plan_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Plan_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return PlanUtils_SSP
    */
    public function PlanUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/PlanUtils_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new PlanUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return RecipientTable_SSP
    */
    public function RecipientTable_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/RecipientTable_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new RecipientTable_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return TempStorage_SSP
    */
    public function TempStorage_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/TempStorage_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new TempStorage_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return DeliveryProvider_SSP
    */
    public function DeliveryProvider_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/DeliveryProvider_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new DeliveryProvider_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return EmailMarketing_SSP
    */
    public function EmailMarketing_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/EmailMarketing_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new EmailMarketing_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return GeneralUtils_SSP
    */
    public function GeneralUtils_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/GeneralUtils_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new GeneralUtils_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return InteractiveCampaign_SSP
    */
    public function InteractiveCampaign_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/InteractiveCampaign_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new InteractiveCampaign_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Licensing_SSP
    */
    public function Licensing_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Licensing_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Licensing_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Permissions_SSP
    */
    public function Permissions_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Permissions_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Permissions_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return TouchPoint_SSP
    */
    public function TouchPoint_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/TouchPoint_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new TouchPoint_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Tracker_SSP
    */
    public function Tracker_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Tracker_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Tracker_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return SystemManager_SSP
    */
    public function SystemManager_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/SystemManager_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new SystemManager_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Job_SSP
    */
    public function Job_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Job_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Job_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Jobs_SSP
    */
    public function Jobs_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Jobs_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Jobs_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return JobTicket_SSP
    */
    public function JobTicket_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/JobTicket_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new JobTicket_SSP($options, $serverUrl);
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Production_SSP
    */
    public function Production_SSP($options = null, $serverUrl = null)
    {
        $append = "xmpiewsapi/Production_SSP.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getUProduceUrl() . $append;
        }
        
        return new Production_SSP($options, $serverUrl);
    }



}

?>
