<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetADOR;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetADORResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetADORs;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetADORsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetTabularADORColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetTabularADORColumnResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanTabularColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetTabularADORColumns;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetTabularADORColumnsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanTabularColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetVariable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetVariableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetVariables;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetVariablesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetUserView;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetUserViewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetUserViews;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetUserViewsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetObjectResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetObjects;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetObjectsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\IsEmptyExpression;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\IsEmptyExpressionResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanContainsExpression;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanContainsExpressionResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfBoolean;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetSchemaNames;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetSchemaNamesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetRecipientFields;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetRecipientFieldsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanDataField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanDataField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetPrimaryRecipientField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetPrimaryRecipientFieldResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\RecipientField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetFilter;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetFilterResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanFilter;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetFilters;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetFiltersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanFilter;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetPlanStructure;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\GetPlanStructureResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanStructure;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanADOR;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanADOR;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanAudienceSegmentInstance;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanAudienceSegmentInstance;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanAudience;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanAudience;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanAudienceSegment;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanAudienceSegment;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanVariable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanVariable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanUserView;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanUserView;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanUserViewField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanUserViewField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfRecipientField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanFunction;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanFunction;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanFunctionParameter;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanFunctionParameter;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanDataSource;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanDataSource;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\ArrayOfPlanDataTable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\PlanDataTable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\CreatePlanFile;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\CreatePlanFileResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\IsPlanSubsetOfComparedPlan;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\PlanUtils_SSP\IsPlanSubsetOfComparedPlanResponse;


class FabricatePlanUtils_SSP
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
    * @return GetADOR
    */
    public function GetADOR($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADOR = new GetADOR();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADOR, $methodName)) {
                $GetADOR->$methodName($paramValue);
            }
        }
        return $GetADOR;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORResponse
    */
    public function GetADORResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORResponse = new GetADORResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORResponse, $methodName)) {
                $GetADORResponse->$methodName($paramValue);
            }
        }
        return $GetADORResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanObject
    */
    public function PlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanObject = new PlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanObject, $methodName)) {
                $PlanObject->$methodName($paramValue);
            }
        }
        return $PlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORs
    */
    public function GetADORs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORs = new GetADORs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORs, $methodName)) {
                $GetADORs->$methodName($paramValue);
            }
        }
        return $GetADORs;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsResponse
    */
    public function GetADORsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsResponse = new GetADORsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsResponse, $methodName)) {
                $GetADORsResponse->$methodName($paramValue);
            }
        }
        return $GetADORsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanObject
    */
    public function ArrayOfPlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanObject = new ArrayOfPlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanObject, $methodName)) {
                $ArrayOfPlanObject->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumn
    */
    public function GetTabularADORColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumn = new GetTabularADORColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumn, $methodName)) {
                $GetTabularADORColumn->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnResponse
    */
    public function GetTabularADORColumnResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnResponse = new GetTabularADORColumnResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnResponse, $methodName)) {
                $GetTabularADORColumnResponse->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanTabularColumn
    */
    public function PlanTabularColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanTabularColumn = new PlanTabularColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanTabularColumn, $methodName)) {
                $PlanTabularColumn->$methodName($paramValue);
            }
        }
        return $PlanTabularColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumns
    */
    public function GetTabularADORColumns($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumns = new GetTabularADORColumns();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumns, $methodName)) {
                $GetTabularADORColumns->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumns;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnsResponse
    */
    public function GetTabularADORColumnsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnsResponse = new GetTabularADORColumnsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnsResponse, $methodName)) {
                $GetTabularADORColumnsResponse->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanTabularColumn
    */
    public function ArrayOfPlanTabularColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanTabularColumn = new ArrayOfPlanTabularColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanTabularColumn, $methodName)) {
                $ArrayOfPlanTabularColumn->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanTabularColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return GetVariable
    */
    public function GetVariable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetVariable = new GetVariable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetVariable, $methodName)) {
                $GetVariable->$methodName($paramValue);
            }
        }
        return $GetVariable;
    }


   /**
    * @param array $paramAutoSet
    * @return GetVariableResponse
    */
    public function GetVariableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetVariableResponse = new GetVariableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetVariableResponse, $methodName)) {
                $GetVariableResponse->$methodName($paramValue);
            }
        }
        return $GetVariableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetVariables
    */
    public function GetVariables($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetVariables = new GetVariables();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetVariables, $methodName)) {
                $GetVariables->$methodName($paramValue);
            }
        }
        return $GetVariables;
    }


   /**
    * @param array $paramAutoSet
    * @return GetVariablesResponse
    */
    public function GetVariablesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetVariablesResponse = new GetVariablesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetVariablesResponse, $methodName)) {
                $GetVariablesResponse->$methodName($paramValue);
            }
        }
        return $GetVariablesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserView
    */
    public function GetUserView($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserView = new GetUserView();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserView, $methodName)) {
                $GetUserView->$methodName($paramValue);
            }
        }
        return $GetUserView;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserViewResponse
    */
    public function GetUserViewResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserViewResponse = new GetUserViewResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserViewResponse, $methodName)) {
                $GetUserViewResponse->$methodName($paramValue);
            }
        }
        return $GetUserViewResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserViews
    */
    public function GetUserViews($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserViews = new GetUserViews();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserViews, $methodName)) {
                $GetUserViews->$methodName($paramValue);
            }
        }
        return $GetUserViews;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserViewsResponse
    */
    public function GetUserViewsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserViewsResponse = new GetUserViewsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserViewsResponse, $methodName)) {
                $GetUserViewsResponse->$methodName($paramValue);
            }
        }
        return $GetUserViewsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetObject
    */
    public function GetObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetObject = new GetObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetObject, $methodName)) {
                $GetObject->$methodName($paramValue);
            }
        }
        return $GetObject;
    }


   /**
    * @param array $paramAutoSet
    * @return GetObjectResponse
    */
    public function GetObjectResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetObjectResponse = new GetObjectResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetObjectResponse, $methodName)) {
                $GetObjectResponse->$methodName($paramValue);
            }
        }
        return $GetObjectResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetObjects
    */
    public function GetObjects($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetObjects = new GetObjects();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetObjects, $methodName)) {
                $GetObjects->$methodName($paramValue);
            }
        }
        return $GetObjects;
    }


   /**
    * @param array $paramAutoSet
    * @return GetObjectsResponse
    */
    public function GetObjectsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetObjectsResponse = new GetObjectsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetObjectsResponse, $methodName)) {
                $GetObjectsResponse->$methodName($paramValue);
            }
        }
        return $GetObjectsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsEmptyExpression
    */
    public function IsEmptyExpression($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsEmptyExpression = new IsEmptyExpression();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsEmptyExpression, $methodName)) {
                $IsEmptyExpression->$methodName($paramValue);
            }
        }
        return $IsEmptyExpression;
    }


   /**
    * @param array $paramAutoSet
    * @return IsEmptyExpressionResponse
    */
    public function IsEmptyExpressionResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsEmptyExpressionResponse = new IsEmptyExpressionResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsEmptyExpressionResponse, $methodName)) {
                $IsEmptyExpressionResponse->$methodName($paramValue);
            }
        }
        return $IsEmptyExpressionResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanContainsExpression
    */
    public function PlanContainsExpression($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanContainsExpression = new PlanContainsExpression();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanContainsExpression, $methodName)) {
                $PlanContainsExpression->$methodName($paramValue);
            }
        }
        return $PlanContainsExpression;
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
    * @return PlanContainsExpressionResponse
    */
    public function PlanContainsExpressionResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanContainsExpressionResponse = new PlanContainsExpressionResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanContainsExpressionResponse, $methodName)) {
                $PlanContainsExpressionResponse->$methodName($paramValue);
            }
        }
        return $PlanContainsExpressionResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfBoolean
    */
    public function ArrayOfBoolean($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfBoolean = new ArrayOfBoolean();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfBoolean, $methodName)) {
                $ArrayOfBoolean->$methodName($paramValue);
            }
        }
        return $ArrayOfBoolean;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSchemaNames
    */
    public function GetSchemaNames($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSchemaNames = new GetSchemaNames();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSchemaNames, $methodName)) {
                $GetSchemaNames->$methodName($paramValue);
            }
        }
        return $GetSchemaNames;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSchemaNamesResponse
    */
    public function GetSchemaNamesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSchemaNamesResponse = new GetSchemaNamesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSchemaNamesResponse, $methodName)) {
                $GetSchemaNamesResponse->$methodName($paramValue);
            }
        }
        return $GetSchemaNamesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientFields
    */
    public function GetRecipientFields($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientFields = new GetRecipientFields();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientFields, $methodName)) {
                $GetRecipientFields->$methodName($paramValue);
            }
        }
        return $GetRecipientFields;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientFieldsResponse
    */
    public function GetRecipientFieldsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientFieldsResponse = new GetRecipientFieldsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientFieldsResponse, $methodName)) {
                $GetRecipientFieldsResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientFieldsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanDataField
    */
    public function ArrayOfPlanDataField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanDataField = new ArrayOfPlanDataField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanDataField, $methodName)) {
                $ArrayOfPlanDataField->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanDataField;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanDataField
    */
    public function PlanDataField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanDataField = new PlanDataField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanDataField, $methodName)) {
                $PlanDataField->$methodName($paramValue);
            }
        }
        return $PlanDataField;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPrimaryRecipientField
    */
    public function GetPrimaryRecipientField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPrimaryRecipientField = new GetPrimaryRecipientField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPrimaryRecipientField, $methodName)) {
                $GetPrimaryRecipientField->$methodName($paramValue);
            }
        }
        return $GetPrimaryRecipientField;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPrimaryRecipientFieldResponse
    */
    public function GetPrimaryRecipientFieldResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPrimaryRecipientFieldResponse = new GetPrimaryRecipientFieldResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPrimaryRecipientFieldResponse, $methodName)) {
                $GetPrimaryRecipientFieldResponse->$methodName($paramValue);
            }
        }
        return $GetPrimaryRecipientFieldResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RecipientField
    */
    public function RecipientField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RecipientField = new RecipientField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RecipientField, $methodName)) {
                $RecipientField->$methodName($paramValue);
            }
        }
        return $RecipientField;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFilter
    */
    public function GetFilter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFilter = new GetFilter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFilter, $methodName)) {
                $GetFilter->$methodName($paramValue);
            }
        }
        return $GetFilter;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFilterResponse
    */
    public function GetFilterResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFilterResponse = new GetFilterResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFilterResponse, $methodName)) {
                $GetFilterResponse->$methodName($paramValue);
            }
        }
        return $GetFilterResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanFilter
    */
    public function PlanFilter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanFilter = new PlanFilter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanFilter, $methodName)) {
                $PlanFilter->$methodName($paramValue);
            }
        }
        return $PlanFilter;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFilters
    */
    public function GetFilters($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFilters = new GetFilters();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFilters, $methodName)) {
                $GetFilters->$methodName($paramValue);
            }
        }
        return $GetFilters;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFiltersResponse
    */
    public function GetFiltersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFiltersResponse = new GetFiltersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFiltersResponse, $methodName)) {
                $GetFiltersResponse->$methodName($paramValue);
            }
        }
        return $GetFiltersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanFilter
    */
    public function ArrayOfPlanFilter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanFilter = new ArrayOfPlanFilter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanFilter, $methodName)) {
                $ArrayOfPlanFilter->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanFilter;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanStructure
    */
    public function GetPlanStructure($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanStructure = new GetPlanStructure();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanStructure, $methodName)) {
                $GetPlanStructure->$methodName($paramValue);
            }
        }
        return $GetPlanStructure;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanStructureResponse
    */
    public function GetPlanStructureResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanStructureResponse = new GetPlanStructureResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanStructureResponse, $methodName)) {
                $GetPlanStructureResponse->$methodName($paramValue);
            }
        }
        return $GetPlanStructureResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanStructure
    */
    public function PlanStructure($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanStructure = new PlanStructure();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanStructure, $methodName)) {
                $PlanStructure->$methodName($paramValue);
            }
        }
        return $PlanStructure;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanADOR
    */
    public function ArrayOfPlanADOR($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanADOR = new ArrayOfPlanADOR();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanADOR, $methodName)) {
                $ArrayOfPlanADOR->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanADOR;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanADOR
    */
    public function PlanADOR($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanADOR = new PlanADOR();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanADOR, $methodName)) {
                $PlanADOR->$methodName($paramValue);
            }
        }
        return $PlanADOR;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanAudienceSegmentInstance
    */
    public function ArrayOfPlanAudienceSegmentInstance($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanAudienceSegmentInstance = new ArrayOfPlanAudienceSegmentInstance();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanAudienceSegmentInstance, $methodName)) {
                $ArrayOfPlanAudienceSegmentInstance->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanAudienceSegmentInstance;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanAudienceSegmentInstance
    */
    public function PlanAudienceSegmentInstance($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanAudienceSegmentInstance = new PlanAudienceSegmentInstance();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanAudienceSegmentInstance, $methodName)) {
                $PlanAudienceSegmentInstance->$methodName($paramValue);
            }
        }
        return $PlanAudienceSegmentInstance;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanAudience
    */
    public function ArrayOfPlanAudience($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanAudience = new ArrayOfPlanAudience();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanAudience, $methodName)) {
                $ArrayOfPlanAudience->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanAudience;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanAudience
    */
    public function PlanAudience($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanAudience = new PlanAudience();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanAudience, $methodName)) {
                $PlanAudience->$methodName($paramValue);
            }
        }
        return $PlanAudience;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanAudienceSegment
    */
    public function ArrayOfPlanAudienceSegment($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanAudienceSegment = new ArrayOfPlanAudienceSegment();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanAudienceSegment, $methodName)) {
                $ArrayOfPlanAudienceSegment->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanAudienceSegment;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanAudienceSegment
    */
    public function PlanAudienceSegment($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanAudienceSegment = new PlanAudienceSegment();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanAudienceSegment, $methodName)) {
                $PlanAudienceSegment->$methodName($paramValue);
            }
        }
        return $PlanAudienceSegment;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanVariable
    */
    public function ArrayOfPlanVariable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanVariable = new ArrayOfPlanVariable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanVariable, $methodName)) {
                $ArrayOfPlanVariable->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanVariable;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanVariable
    */
    public function PlanVariable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanVariable = new PlanVariable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanVariable, $methodName)) {
                $PlanVariable->$methodName($paramValue);
            }
        }
        return $PlanVariable;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanUserView
    */
    public function ArrayOfPlanUserView($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanUserView = new ArrayOfPlanUserView();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanUserView, $methodName)) {
                $ArrayOfPlanUserView->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanUserView;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanUserView
    */
    public function PlanUserView($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanUserView = new PlanUserView();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanUserView, $methodName)) {
                $PlanUserView->$methodName($paramValue);
            }
        }
        return $PlanUserView;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanUserViewField
    */
    public function ArrayOfPlanUserViewField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanUserViewField = new ArrayOfPlanUserViewField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanUserViewField, $methodName)) {
                $ArrayOfPlanUserViewField->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanUserViewField;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanUserViewField
    */
    public function PlanUserViewField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanUserViewField = new PlanUserViewField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanUserViewField, $methodName)) {
                $PlanUserViewField->$methodName($paramValue);
            }
        }
        return $PlanUserViewField;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfRecipientField
    */
    public function ArrayOfRecipientField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfRecipientField = new ArrayOfRecipientField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfRecipientField, $methodName)) {
                $ArrayOfRecipientField->$methodName($paramValue);
            }
        }
        return $ArrayOfRecipientField;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanFunction
    */
    public function ArrayOfPlanFunction($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanFunction = new ArrayOfPlanFunction();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanFunction, $methodName)) {
                $ArrayOfPlanFunction->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanFunction;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanFunction
    */
    public function PlanFunction($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanFunction = new PlanFunction();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanFunction, $methodName)) {
                $PlanFunction->$methodName($paramValue);
            }
        }
        return $PlanFunction;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanFunctionParameter
    */
    public function ArrayOfPlanFunctionParameter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanFunctionParameter = new ArrayOfPlanFunctionParameter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanFunctionParameter, $methodName)) {
                $ArrayOfPlanFunctionParameter->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanFunctionParameter;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanFunctionParameter
    */
    public function PlanFunctionParameter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanFunctionParameter = new PlanFunctionParameter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanFunctionParameter, $methodName)) {
                $PlanFunctionParameter->$methodName($paramValue);
            }
        }
        return $PlanFunctionParameter;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanDataSource
    */
    public function ArrayOfPlanDataSource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanDataSource = new ArrayOfPlanDataSource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanDataSource, $methodName)) {
                $ArrayOfPlanDataSource->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanDataSource;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanDataSource
    */
    public function PlanDataSource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanDataSource = new PlanDataSource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanDataSource, $methodName)) {
                $PlanDataSource->$methodName($paramValue);
            }
        }
        return $PlanDataSource;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanDataTable
    */
    public function ArrayOfPlanDataTable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanDataTable = new ArrayOfPlanDataTable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanDataTable, $methodName)) {
                $ArrayOfPlanDataTable->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanDataTable;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanDataTable
    */
    public function PlanDataTable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanDataTable = new PlanDataTable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanDataTable, $methodName)) {
                $PlanDataTable->$methodName($paramValue);
            }
        }
        return $PlanDataTable;
    }


   /**
    * @param array $paramAutoSet
    * @return CreatePlanFile
    */
    public function CreatePlanFile($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreatePlanFile = new CreatePlanFile();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreatePlanFile, $methodName)) {
                $CreatePlanFile->$methodName($paramValue);
            }
        }
        return $CreatePlanFile;
    }


   /**
    * @param array $paramAutoSet
    * @return CreatePlanFileResponse
    */
    public function CreatePlanFileResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreatePlanFileResponse = new CreatePlanFileResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreatePlanFileResponse, $methodName)) {
                $CreatePlanFileResponse->$methodName($paramValue);
            }
        }
        return $CreatePlanFileResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsPlanSubsetOfComparedPlan
    */
    public function IsPlanSubsetOfComparedPlan($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsPlanSubsetOfComparedPlan = new IsPlanSubsetOfComparedPlan();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsPlanSubsetOfComparedPlan, $methodName)) {
                $IsPlanSubsetOfComparedPlan->$methodName($paramValue);
            }
        }
        return $IsPlanSubsetOfComparedPlan;
    }


   /**
    * @param array $paramAutoSet
    * @return IsPlanSubsetOfComparedPlanResponse
    */
    public function IsPlanSubsetOfComparedPlanResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsPlanSubsetOfComparedPlanResponse = new IsPlanSubsetOfComparedPlanResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsPlanSubsetOfComparedPlanResponse, $methodName)) {
                $IsPlanSubsetOfComparedPlanResponse->$methodName($paramValue);
            }
        }
        return $IsPlanSubsetOfComparedPlanResponse;
    }



}

?>
