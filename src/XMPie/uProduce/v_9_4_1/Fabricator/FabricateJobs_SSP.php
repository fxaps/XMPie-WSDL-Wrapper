<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\Get;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\DeleteAll;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\DeleteAllResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\AbortAll;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\AbortAllResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\Abort;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\AbortResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobType;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypeResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypeXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypeXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypes;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypesResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobTypesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobsByFilter;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\ArrayOfJobQueryPart;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\JobQueryPart;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\JobOrderPart;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\ArrayOfEJobField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobsByFilterResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobPageByFilter;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobPageByFilterResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobCountByFilter;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\GetJobCountByFilterResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\DeleteJobsByFilter;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\DeleteJobsByFilterResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\DeleteAllJobsByFilter;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\DeleteAllJobsByFilterResponse;


class FabricateJobs_SSP
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
    * @return Get
    */
    public function Get($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Get = new Get();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Get, $methodName)) {
                $Get->$methodName($paramValue);
            }
        }
        return $Get;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResponse
    */
    public function GetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResponse = new GetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResponse, $methodName)) {
                $GetResponse->$methodName($paramValue);
            }
        }
        return $GetResponse;
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
    * @return GetDataSet
    */
    public function GetDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSet = new GetDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSet, $methodName)) {
                $GetDataSet->$methodName($paramValue);
            }
        }
        return $GetDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetResponse
    */
    public function GetDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetResponse = new GetDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetResponse, $methodName)) {
                $GetDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetResult
    */
    public function GetDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetResult = new GetDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetResult, $methodName)) {
                $GetDataSetResult->$methodName($paramValue);
            }
        }
        return $GetDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSet
    */
    public function GetXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSet = new GetXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSet, $methodName)) {
                $GetXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSetResponse
    */
    public function GetXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSetResponse = new GetXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSetResponse, $methodName)) {
                $GetXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSetResponse;
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
    * @return DeleteAll
    */
    public function DeleteAll($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAll = new DeleteAll();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAll, $methodName)) {
                $DeleteAll->$methodName($paramValue);
            }
        }
        return $DeleteAll;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllResponse
    */
    public function DeleteAllResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllResponse = new DeleteAllResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllResponse, $methodName)) {
                $DeleteAllResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AbortAll
    */
    public function AbortAll($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AbortAll = new AbortAll();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AbortAll, $methodName)) {
                $AbortAll->$methodName($paramValue);
            }
        }
        return $AbortAll;
    }


   /**
    * @param array $paramAutoSet
    * @return AbortAllResponse
    */
    public function AbortAllResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AbortAllResponse = new AbortAllResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AbortAllResponse, $methodName)) {
                $AbortAllResponse->$methodName($paramValue);
            }
        }
        return $AbortAllResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Abort
    */
    public function Abort($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Abort = new Abort();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Abort, $methodName)) {
                $Abort->$methodName($paramValue);
            }
        }
        return $Abort;
    }


   /**
    * @param array $paramAutoSet
    * @return AbortResponse
    */
    public function AbortResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AbortResponse = new AbortResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AbortResponse, $methodName)) {
                $AbortResponse->$methodName($paramValue);
            }
        }
        return $AbortResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Delete
    */
    public function Delete($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Delete = new Delete();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Delete, $methodName)) {
                $Delete->$methodName($paramValue);
            }
        }
        return $Delete;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteResponse
    */
    public function DeleteResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteResponse = new DeleteResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteResponse, $methodName)) {
                $DeleteResponse->$methodName($paramValue);
            }
        }
        return $DeleteResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobType
    */
    public function GetJobType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobType = new GetJobType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobType, $methodName)) {
                $GetJobType->$methodName($paramValue);
            }
        }
        return $GetJobType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypeResponse
    */
    public function GetJobTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypeResponse = new GetJobTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypeResponse, $methodName)) {
                $GetJobTypeResponse->$methodName($paramValue);
            }
        }
        return $GetJobTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypeResult
    */
    public function GetJobTypeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypeResult = new GetJobTypeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypeResult, $methodName)) {
                $GetJobTypeResult->$methodName($paramValue);
            }
        }
        return $GetJobTypeResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypeXMPTblDataSet
    */
    public function GetJobTypeXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypeXMPTblDataSet = new GetJobTypeXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypeXMPTblDataSet, $methodName)) {
                $GetJobTypeXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetJobTypeXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypeXMPTblDataSetResponse
    */
    public function GetJobTypeXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypeXMPTblDataSetResponse = new GetJobTypeXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypeXMPTblDataSetResponse, $methodName)) {
                $GetJobTypeXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetJobTypeXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypes
    */
    public function GetJobTypes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypes = new GetJobTypes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypes, $methodName)) {
                $GetJobTypes->$methodName($paramValue);
            }
        }
        return $GetJobTypes;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypesResponse
    */
    public function GetJobTypesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypesResponse = new GetJobTypesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypesResponse, $methodName)) {
                $GetJobTypesResponse->$methodName($paramValue);
            }
        }
        return $GetJobTypesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypesResult
    */
    public function GetJobTypesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypesResult = new GetJobTypesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypesResult, $methodName)) {
                $GetJobTypesResult->$methodName($paramValue);
            }
        }
        return $GetJobTypesResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypesXMPTblDataSet
    */
    public function GetJobTypesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypesXMPTblDataSet = new GetJobTypesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypesXMPTblDataSet, $methodName)) {
                $GetJobTypesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetJobTypesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobTypesXMPTblDataSetResponse
    */
    public function GetJobTypesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypesXMPTblDataSetResponse = new GetJobTypesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypesXMPTblDataSetResponse, $methodName)) {
                $GetJobTypesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetJobTypesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobsByFilter
    */
    public function GetJobsByFilter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobsByFilter = new GetJobsByFilter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobsByFilter, $methodName)) {
                $GetJobsByFilter->$methodName($paramValue);
            }
        }
        return $GetJobsByFilter;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfJobQueryPart
    */
    public function ArrayOfJobQueryPart($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfJobQueryPart = new ArrayOfJobQueryPart();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfJobQueryPart, $methodName)) {
                $ArrayOfJobQueryPart->$methodName($paramValue);
            }
        }
        return $ArrayOfJobQueryPart;
    }


   /**
    * @param array $paramAutoSet
    * @return JobQueryPart
    */
    public function JobQueryPart($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $JobQueryPart = new JobQueryPart();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($JobQueryPart, $methodName)) {
                $JobQueryPart->$methodName($paramValue);
            }
        }
        return $JobQueryPart;
    }


   /**
    * @param array $paramAutoSet
    * @return JobOrderPart
    */
    public function JobOrderPart($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $JobOrderPart = new JobOrderPart();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($JobOrderPart, $methodName)) {
                $JobOrderPart->$methodName($paramValue);
            }
        }
        return $JobOrderPart;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfEJobField
    */
    public function ArrayOfEJobField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfEJobField = new ArrayOfEJobField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfEJobField, $methodName)) {
                $ArrayOfEJobField->$methodName($paramValue);
            }
        }
        return $ArrayOfEJobField;
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
    * @return GetJobsByFilterResponse
    */
    public function GetJobsByFilterResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobsByFilterResponse = new GetJobsByFilterResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobsByFilterResponse, $methodName)) {
                $GetJobsByFilterResponse->$methodName($paramValue);
            }
        }
        return $GetJobsByFilterResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobPageByFilter
    */
    public function GetJobPageByFilter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobPageByFilter = new GetJobPageByFilter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobPageByFilter, $methodName)) {
                $GetJobPageByFilter->$methodName($paramValue);
            }
        }
        return $GetJobPageByFilter;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobPageByFilterResponse
    */
    public function GetJobPageByFilterResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobPageByFilterResponse = new GetJobPageByFilterResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobPageByFilterResponse, $methodName)) {
                $GetJobPageByFilterResponse->$methodName($paramValue);
            }
        }
        return $GetJobPageByFilterResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobCountByFilter
    */
    public function GetJobCountByFilter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobCountByFilter = new GetJobCountByFilter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobCountByFilter, $methodName)) {
                $GetJobCountByFilter->$methodName($paramValue);
            }
        }
        return $GetJobCountByFilter;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobCountByFilterResponse
    */
    public function GetJobCountByFilterResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobCountByFilterResponse = new GetJobCountByFilterResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobCountByFilterResponse, $methodName)) {
                $GetJobCountByFilterResponse->$methodName($paramValue);
            }
        }
        return $GetJobCountByFilterResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteJobsByFilter
    */
    public function DeleteJobsByFilter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteJobsByFilter = new DeleteJobsByFilter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteJobsByFilter, $methodName)) {
                $DeleteJobsByFilter->$methodName($paramValue);
            }
        }
        return $DeleteJobsByFilter;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteJobsByFilterResponse
    */
    public function DeleteJobsByFilterResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteJobsByFilterResponse = new DeleteJobsByFilterResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteJobsByFilterResponse, $methodName)) {
                $DeleteJobsByFilterResponse->$methodName($paramValue);
            }
        }
        return $DeleteJobsByFilterResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllJobsByFilter
    */
    public function DeleteAllJobsByFilter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllJobsByFilter = new DeleteAllJobsByFilter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllJobsByFilter, $methodName)) {
                $DeleteAllJobsByFilter->$methodName($paramValue);
            }
        }
        return $DeleteAllJobsByFilter;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllJobsByFilterResponse
    */
    public function DeleteAllJobsByFilterResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllJobsByFilterResponse = new DeleteAllJobsByFilterResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllJobsByFilterResponse, $methodName)) {
                $DeleteAllJobsByFilterResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllJobsByFilterResponse;
    }



}

?>
