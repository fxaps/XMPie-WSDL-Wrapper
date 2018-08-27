<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetServerID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetServerIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\Activate;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ActivateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\Report;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ArrayOfReportMessage;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ReportMessage;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\Reactivate;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ReactivateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsUProduceLE;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsUProduceLEResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsUProducePrintOnly;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsUProducePrintOnlyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsUProduceEMedia;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsUProduceEMediaResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetCustomerClicksView;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetCustomerClicksViewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetCustomerClicksViewResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetCustomerClicksXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetCustomerClicksXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetAvailableClicks;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetAvailableClicksResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsPerpetual;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsPerpetualResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetAvailableOutputFormats;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetAvailableOutputFormatsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetAvailableInputFormats;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetAvailableInputFormatsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsTrackingAvailable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsTrackingAvailableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetMarketingConsoleType;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetMarketingConsoleTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetStatus;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\StatusInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsMIAvailable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\IsMIAvailableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetMaximumNumberOfAvailableInstances;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetMaximumNumberOfAvailableInstancesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetMaximumNumberOfConnectivityLicenses;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetMaximumNumberOfConnectivityLicensesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetConnectivityLicenses;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetConnectivityLicensesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetConnectivityLicensesResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ValidateConnectivityLicense;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ValidateConnectivityLicenseResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\DeleteConnectivityLicense;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\DeleteConnectivityLicenseResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetMaximumFeatureClients;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetMaximumFeatureClientsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetFeatureClients;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetFeatureClientsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetFeatureClientsResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ValidateFeatureClient;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ValidateFeatureClientResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\DeleteFeatureClient;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\DeleteFeatureClientResponse;


class FabricateLicensing_SSP
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
    * @return GetServerID
    */
    public function GetServerID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetServerID = new GetServerID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetServerID, $methodName)) {
                $GetServerID->$methodName($paramValue);
            }
        }
        return $GetServerID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetServerIDResponse
    */
    public function GetServerIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetServerIDResponse = new GetServerIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetServerIDResponse, $methodName)) {
                $GetServerIDResponse->$methodName($paramValue);
            }
        }
        return $GetServerIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Activate
    */
    public function Activate($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Activate = new Activate();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Activate, $methodName)) {
                $Activate->$methodName($paramValue);
            }
        }
        return $Activate;
    }


   /**
    * @param array $paramAutoSet
    * @return ActivateResponse
    */
    public function ActivateResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ActivateResponse = new ActivateResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ActivateResponse, $methodName)) {
                $ActivateResponse->$methodName($paramValue);
            }
        }
        return $ActivateResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Report
    */
    public function Report($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Report = new Report();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Report, $methodName)) {
                $Report->$methodName($paramValue);
            }
        }
        return $Report;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfReportMessage
    */
    public function ArrayOfReportMessage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfReportMessage = new ArrayOfReportMessage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfReportMessage, $methodName)) {
                $ArrayOfReportMessage->$methodName($paramValue);
            }
        }
        return $ArrayOfReportMessage;
    }


   /**
    * @param array $paramAutoSet
    * @return ReportMessage
    */
    public function ReportMessage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReportMessage = new ReportMessage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReportMessage, $methodName)) {
                $ReportMessage->$methodName($paramValue);
            }
        }
        return $ReportMessage;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProperty
    */
    public function ArrayOfProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProperty = new ArrayOfProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProperty, $methodName)) {
                $ArrayOfProperty->$methodName($paramValue);
            }
        }
        return $ArrayOfProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return Property
    */
    public function Property($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Property = new Property();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Property, $methodName)) {
                $Property->$methodName($paramValue);
            }
        }
        return $Property;
    }


   /**
    * @param array $paramAutoSet
    * @return Reactivate
    */
    public function Reactivate($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Reactivate = new Reactivate();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Reactivate, $methodName)) {
                $Reactivate->$methodName($paramValue);
            }
        }
        return $Reactivate;
    }


   /**
    * @param array $paramAutoSet
    * @return ReactivateResponse
    */
    public function ReactivateResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReactivateResponse = new ReactivateResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReactivateResponse, $methodName)) {
                $ReactivateResponse->$methodName($paramValue);
            }
        }
        return $ReactivateResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsUProduceLE
    */
    public function IsUProduceLE($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsUProduceLE = new IsUProduceLE();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsUProduceLE, $methodName)) {
                $IsUProduceLE->$methodName($paramValue);
            }
        }
        return $IsUProduceLE;
    }


   /**
    * @param array $paramAutoSet
    * @return IsUProduceLEResponse
    */
    public function IsUProduceLEResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsUProduceLEResponse = new IsUProduceLEResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsUProduceLEResponse, $methodName)) {
                $IsUProduceLEResponse->$methodName($paramValue);
            }
        }
        return $IsUProduceLEResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsUProducePrintOnly
    */
    public function IsUProducePrintOnly($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsUProducePrintOnly = new IsUProducePrintOnly();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsUProducePrintOnly, $methodName)) {
                $IsUProducePrintOnly->$methodName($paramValue);
            }
        }
        return $IsUProducePrintOnly;
    }


   /**
    * @param array $paramAutoSet
    * @return IsUProducePrintOnlyResponse
    */
    public function IsUProducePrintOnlyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsUProducePrintOnlyResponse = new IsUProducePrintOnlyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsUProducePrintOnlyResponse, $methodName)) {
                $IsUProducePrintOnlyResponse->$methodName($paramValue);
            }
        }
        return $IsUProducePrintOnlyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsUProduceEMedia
    */
    public function IsUProduceEMedia($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsUProduceEMedia = new IsUProduceEMedia();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsUProduceEMedia, $methodName)) {
                $IsUProduceEMedia->$methodName($paramValue);
            }
        }
        return $IsUProduceEMedia;
    }


   /**
    * @param array $paramAutoSet
    * @return IsUProduceEMediaResponse
    */
    public function IsUProduceEMediaResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsUProduceEMediaResponse = new IsUProduceEMediaResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsUProduceEMediaResponse, $methodName)) {
                $IsUProduceEMediaResponse->$methodName($paramValue);
            }
        }
        return $IsUProduceEMediaResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomerClicksView
    */
    public function GetCustomerClicksView($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomerClicksView = new GetCustomerClicksView();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomerClicksView, $methodName)) {
                $GetCustomerClicksView->$methodName($paramValue);
            }
        }
        return $GetCustomerClicksView;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomerClicksViewResponse
    */
    public function GetCustomerClicksViewResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomerClicksViewResponse = new GetCustomerClicksViewResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomerClicksViewResponse, $methodName)) {
                $GetCustomerClicksViewResponse->$methodName($paramValue);
            }
        }
        return $GetCustomerClicksViewResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomerClicksViewResult
    */
    public function GetCustomerClicksViewResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomerClicksViewResult = new GetCustomerClicksViewResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomerClicksViewResult, $methodName)) {
                $GetCustomerClicksViewResult->$methodName($paramValue);
            }
        }
        return $GetCustomerClicksViewResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomerClicksXMPTblDataSet
    */
    public function GetCustomerClicksXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomerClicksXMPTblDataSet = new GetCustomerClicksXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomerClicksXMPTblDataSet, $methodName)) {
                $GetCustomerClicksXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetCustomerClicksXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomerClicksXMPTblDataSetResponse
    */
    public function GetCustomerClicksXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomerClicksXMPTblDataSetResponse = new GetCustomerClicksXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomerClicksXMPTblDataSetResponse, $methodName)) {
                $GetCustomerClicksXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetCustomerClicksXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblDataSet
    */
    public function XMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblDataSet = new XMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblDataSet, $methodName)) {
                $XMPTblDataSet->$methodName($paramValue);
            }
        }
        return $XMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTbl
    */
    public function ArrayOfXMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTbl = new ArrayOfXMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTbl, $methodName)) {
                $ArrayOfXMPTbl->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTbl
    */
    public function XMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTbl = new XMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTbl, $methodName)) {
                $XMPTbl->$methodName($paramValue);
            }
        }
        return $XMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblColumn
    */
    public function ArrayOfXMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblColumn = new ArrayOfXMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblColumn, $methodName)) {
                $ArrayOfXMPTblColumn->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblColumn
    */
    public function XMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblColumn = new XMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblColumn, $methodName)) {
                $XMPTblColumn->$methodName($paramValue);
            }
        }
        return $XMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblRow
    */
    public function ArrayOfXMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblRow = new ArrayOfXMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblRow, $methodName)) {
                $ArrayOfXMPTblRow->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblRow
    */
    public function XMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblRow = new XMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblRow, $methodName)) {
                $XMPTblRow->$methodName($paramValue);
            }
        }
        return $XMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPRowField
    */
    public function ArrayOfXMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPRowField = new ArrayOfXMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPRowField, $methodName)) {
                $ArrayOfXMPRowField->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPRowField
    */
    public function XMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPRowField = new XMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPRowField, $methodName)) {
                $XMPRowField->$methodName($paramValue);
            }
        }
        return $XMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableClicks
    */
    public function GetAvailableClicks($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableClicks = new GetAvailableClicks();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableClicks, $methodName)) {
                $GetAvailableClicks->$methodName($paramValue);
            }
        }
        return $GetAvailableClicks;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableClicksResponse
    */
    public function GetAvailableClicksResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableClicksResponse = new GetAvailableClicksResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableClicksResponse, $methodName)) {
                $GetAvailableClicksResponse->$methodName($paramValue);
            }
        }
        return $GetAvailableClicksResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsPerpetual
    */
    public function IsPerpetual($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsPerpetual = new IsPerpetual();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsPerpetual, $methodName)) {
                $IsPerpetual->$methodName($paramValue);
            }
        }
        return $IsPerpetual;
    }


   /**
    * @param array $paramAutoSet
    * @return IsPerpetualResponse
    */
    public function IsPerpetualResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsPerpetualResponse = new IsPerpetualResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsPerpetualResponse, $methodName)) {
                $IsPerpetualResponse->$methodName($paramValue);
            }
        }
        return $IsPerpetualResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableOutputFormats
    */
    public function GetAvailableOutputFormats($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableOutputFormats = new GetAvailableOutputFormats();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableOutputFormats, $methodName)) {
                $GetAvailableOutputFormats->$methodName($paramValue);
            }
        }
        return $GetAvailableOutputFormats;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableOutputFormatsResponse
    */
    public function GetAvailableOutputFormatsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableOutputFormatsResponse = new GetAvailableOutputFormatsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableOutputFormatsResponse, $methodName)) {
                $GetAvailableOutputFormatsResponse->$methodName($paramValue);
            }
        }
        return $GetAvailableOutputFormatsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfString
    */
    public function ArrayOfString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfString = new ArrayOfString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfString, $methodName)) {
                $ArrayOfString->$methodName($paramValue);
            }
        }
        return $ArrayOfString;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableInputFormats
    */
    public function GetAvailableInputFormats($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableInputFormats = new GetAvailableInputFormats();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableInputFormats, $methodName)) {
                $GetAvailableInputFormats->$methodName($paramValue);
            }
        }
        return $GetAvailableInputFormats;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableInputFormatsResponse
    */
    public function GetAvailableInputFormatsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableInputFormatsResponse = new GetAvailableInputFormatsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableInputFormatsResponse, $methodName)) {
                $GetAvailableInputFormatsResponse->$methodName($paramValue);
            }
        }
        return $GetAvailableInputFormatsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsTrackingAvailable
    */
    public function IsTrackingAvailable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsTrackingAvailable = new IsTrackingAvailable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsTrackingAvailable, $methodName)) {
                $IsTrackingAvailable->$methodName($paramValue);
            }
        }
        return $IsTrackingAvailable;
    }


   /**
    * @param array $paramAutoSet
    * @return IsTrackingAvailableResponse
    */
    public function IsTrackingAvailableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsTrackingAvailableResponse = new IsTrackingAvailableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsTrackingAvailableResponse, $methodName)) {
                $IsTrackingAvailableResponse->$methodName($paramValue);
            }
        }
        return $IsTrackingAvailableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMarketingConsoleType
    */
    public function GetMarketingConsoleType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMarketingConsoleType = new GetMarketingConsoleType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMarketingConsoleType, $methodName)) {
                $GetMarketingConsoleType->$methodName($paramValue);
            }
        }
        return $GetMarketingConsoleType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMarketingConsoleTypeResponse
    */
    public function GetMarketingConsoleTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMarketingConsoleTypeResponse = new GetMarketingConsoleTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMarketingConsoleTypeResponse, $methodName)) {
                $GetMarketingConsoleTypeResponse->$methodName($paramValue);
            }
        }
        return $GetMarketingConsoleTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStatus
    */
    public function GetStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStatus = new GetStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStatus, $methodName)) {
                $GetStatus->$methodName($paramValue);
            }
        }
        return $GetStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStatusResponse
    */
    public function GetStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStatusResponse = new GetStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStatusResponse, $methodName)) {
                $GetStatusResponse->$methodName($paramValue);
            }
        }
        return $GetStatusResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return StatusInfo
    */
    public function StatusInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $StatusInfo = new StatusInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($StatusInfo, $methodName)) {
                $StatusInfo->$methodName($paramValue);
            }
        }
        return $StatusInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return IsMIAvailable
    */
    public function IsMIAvailable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsMIAvailable = new IsMIAvailable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsMIAvailable, $methodName)) {
                $IsMIAvailable->$methodName($paramValue);
            }
        }
        return $IsMIAvailable;
    }


   /**
    * @param array $paramAutoSet
    * @return IsMIAvailableResponse
    */
    public function IsMIAvailableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsMIAvailableResponse = new IsMIAvailableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsMIAvailableResponse, $methodName)) {
                $IsMIAvailableResponse->$methodName($paramValue);
            }
        }
        return $IsMIAvailableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMaximumNumberOfAvailableInstances
    */
    public function GetMaximumNumberOfAvailableInstances($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMaximumNumberOfAvailableInstances = new GetMaximumNumberOfAvailableInstances();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMaximumNumberOfAvailableInstances, $methodName)) {
                $GetMaximumNumberOfAvailableInstances->$methodName($paramValue);
            }
        }
        return $GetMaximumNumberOfAvailableInstances;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMaximumNumberOfAvailableInstancesResponse
    */
    public function GetMaximumNumberOfAvailableInstancesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMaximumNumberOfAvailableInstancesResponse = new GetMaximumNumberOfAvailableInstancesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMaximumNumberOfAvailableInstancesResponse, $methodName)) {
                $GetMaximumNumberOfAvailableInstancesResponse->$methodName($paramValue);
            }
        }
        return $GetMaximumNumberOfAvailableInstancesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMaximumNumberOfConnectivityLicenses
    */
    public function GetMaximumNumberOfConnectivityLicenses($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMaximumNumberOfConnectivityLicenses = new GetMaximumNumberOfConnectivityLicenses();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMaximumNumberOfConnectivityLicenses, $methodName)) {
                $GetMaximumNumberOfConnectivityLicenses->$methodName($paramValue);
            }
        }
        return $GetMaximumNumberOfConnectivityLicenses;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMaximumNumberOfConnectivityLicensesResponse
    */
    public function GetMaximumNumberOfConnectivityLicensesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMaximumNumberOfConnectivityLicensesResponse = new GetMaximumNumberOfConnectivityLicensesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMaximumNumberOfConnectivityLicensesResponse, $methodName)) {
                $GetMaximumNumberOfConnectivityLicensesResponse->$methodName($paramValue);
            }
        }
        return $GetMaximumNumberOfConnectivityLicensesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConnectivityLicenses
    */
    public function GetConnectivityLicenses($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConnectivityLicenses = new GetConnectivityLicenses();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConnectivityLicenses, $methodName)) {
                $GetConnectivityLicenses->$methodName($paramValue);
            }
        }
        return $GetConnectivityLicenses;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConnectivityLicensesResponse
    */
    public function GetConnectivityLicensesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConnectivityLicensesResponse = new GetConnectivityLicensesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConnectivityLicensesResponse, $methodName)) {
                $GetConnectivityLicensesResponse->$methodName($paramValue);
            }
        }
        return $GetConnectivityLicensesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConnectivityLicensesResult
    */
    public function GetConnectivityLicensesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConnectivityLicensesResult = new GetConnectivityLicensesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConnectivityLicensesResult, $methodName)) {
                $GetConnectivityLicensesResult->$methodName($paramValue);
            }
        }
        return $GetConnectivityLicensesResult;
    }


   /**
    * @param array $paramAutoSet
    * @return ValidateConnectivityLicense
    */
    public function ValidateConnectivityLicense($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateConnectivityLicense = new ValidateConnectivityLicense();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateConnectivityLicense, $methodName)) {
                $ValidateConnectivityLicense->$methodName($paramValue);
            }
        }
        return $ValidateConnectivityLicense;
    }


   /**
    * @param array $paramAutoSet
    * @return ValidateConnectivityLicenseResponse
    */
    public function ValidateConnectivityLicenseResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateConnectivityLicenseResponse = new ValidateConnectivityLicenseResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateConnectivityLicenseResponse, $methodName)) {
                $ValidateConnectivityLicenseResponse->$methodName($paramValue);
            }
        }
        return $ValidateConnectivityLicenseResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteConnectivityLicense
    */
    public function DeleteConnectivityLicense($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteConnectivityLicense = new DeleteConnectivityLicense();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteConnectivityLicense, $methodName)) {
                $DeleteConnectivityLicense->$methodName($paramValue);
            }
        }
        return $DeleteConnectivityLicense;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteConnectivityLicenseResponse
    */
    public function DeleteConnectivityLicenseResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteConnectivityLicenseResponse = new DeleteConnectivityLicenseResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteConnectivityLicenseResponse, $methodName)) {
                $DeleteConnectivityLicenseResponse->$methodName($paramValue);
            }
        }
        return $DeleteConnectivityLicenseResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMaximumFeatureClients
    */
    public function GetMaximumFeatureClients($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMaximumFeatureClients = new GetMaximumFeatureClients();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMaximumFeatureClients, $methodName)) {
                $GetMaximumFeatureClients->$methodName($paramValue);
            }
        }
        return $GetMaximumFeatureClients;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMaximumFeatureClientsResponse
    */
    public function GetMaximumFeatureClientsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMaximumFeatureClientsResponse = new GetMaximumFeatureClientsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMaximumFeatureClientsResponse, $methodName)) {
                $GetMaximumFeatureClientsResponse->$methodName($paramValue);
            }
        }
        return $GetMaximumFeatureClientsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFeatureClients
    */
    public function GetFeatureClients($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFeatureClients = new GetFeatureClients();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFeatureClients, $methodName)) {
                $GetFeatureClients->$methodName($paramValue);
            }
        }
        return $GetFeatureClients;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFeatureClientsResponse
    */
    public function GetFeatureClientsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFeatureClientsResponse = new GetFeatureClientsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFeatureClientsResponse, $methodName)) {
                $GetFeatureClientsResponse->$methodName($paramValue);
            }
        }
        return $GetFeatureClientsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFeatureClientsResult
    */
    public function GetFeatureClientsResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFeatureClientsResult = new GetFeatureClientsResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFeatureClientsResult, $methodName)) {
                $GetFeatureClientsResult->$methodName($paramValue);
            }
        }
        return $GetFeatureClientsResult;
    }


   /**
    * @param array $paramAutoSet
    * @return ValidateFeatureClient
    */
    public function ValidateFeatureClient($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateFeatureClient = new ValidateFeatureClient();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateFeatureClient, $methodName)) {
                $ValidateFeatureClient->$methodName($paramValue);
            }
        }
        return $ValidateFeatureClient;
    }


   /**
    * @param array $paramAutoSet
    * @return ValidateFeatureClientResponse
    */
    public function ValidateFeatureClientResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ValidateFeatureClientResponse = new ValidateFeatureClientResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ValidateFeatureClientResponse, $methodName)) {
                $ValidateFeatureClientResponse->$methodName($paramValue);
            }
        }
        return $ValidateFeatureClientResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteFeatureClient
    */
    public function DeleteFeatureClient($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteFeatureClient = new DeleteFeatureClient();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteFeatureClient, $methodName)) {
                $DeleteFeatureClient->$methodName($paramValue);
            }
        }
        return $DeleteFeatureClient;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteFeatureClientResponse
    */
    public function DeleteFeatureClientResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteFeatureClientResponse = new DeleteFeatureClientResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteFeatureClientResponse, $methodName)) {
                $DeleteFeatureClientResponse->$methodName($paramValue);
            }
        }
        return $DeleteFeatureClientResponse;
    }



}

?>
