<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypes;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypesResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceType;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypeResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypeXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypeXMPTblDataSetResponse;


class FabricateAssetSourceUtils_SSP
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
    * @return GetAssetSourceTypes
    */
    public function GetAssetSourceTypes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypes = new GetAssetSourceTypes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypes, $methodName)) {
                $GetAssetSourceTypes->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypes;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypesResponse
    */
    public function GetAssetSourceTypesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypesResponse = new GetAssetSourceTypesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypesResponse, $methodName)) {
                $GetAssetSourceTypesResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypesResult
    */
    public function GetAssetSourceTypesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypesResult = new GetAssetSourceTypesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypesResult, $methodName)) {
                $GetAssetSourceTypesResult->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypesResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypesXMPTblDataSet
    */
    public function GetAssetSourceTypesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypesXMPTblDataSet = new GetAssetSourceTypesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypesXMPTblDataSet, $methodName)) {
                $GetAssetSourceTypesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypesXMPTblDataSetResponse
    */
    public function GetAssetSourceTypesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypesXMPTblDataSetResponse = new GetAssetSourceTypesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypesXMPTblDataSetResponse, $methodName)) {
                $GetAssetSourceTypesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypesXMPTblDataSetResponse;
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
    * @return GetAssetSourceType
    */
    public function GetAssetSourceType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceType = new GetAssetSourceType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceType, $methodName)) {
                $GetAssetSourceType->$methodName($paramValue);
            }
        }
        return $GetAssetSourceType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypeResponse
    */
    public function GetAssetSourceTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypeResponse = new GetAssetSourceTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypeResponse, $methodName)) {
                $GetAssetSourceTypeResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypeResult
    */
    public function GetAssetSourceTypeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypeResult = new GetAssetSourceTypeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypeResult, $methodName)) {
                $GetAssetSourceTypeResult->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypeResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypeXMPTblDataSet
    */
    public function GetAssetSourceTypeXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypeXMPTblDataSet = new GetAssetSourceTypeXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypeXMPTblDataSet, $methodName)) {
                $GetAssetSourceTypeXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypeXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypeXMPTblDataSetResponse
    */
    public function GetAssetSourceTypeXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypeXMPTblDataSetResponse = new GetAssetSourceTypeXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypeXMPTblDataSetResponse, $methodName)) {
                $GetAssetSourceTypeXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypeXMPTblDataSetResponse;
    }



}

?>
