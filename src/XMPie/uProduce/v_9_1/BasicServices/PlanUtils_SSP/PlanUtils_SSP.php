<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;


/**
 * PlanUtils Web Service.
 */
class PlanUtils_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetADOR' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetADOR',
  'GetADORResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetADORResponse',
  'PlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanObject',
  'GetADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetADORs',
  'GetADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetADORsResponse',
  'ArrayOfPlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanObject',
  'GetTabularADORColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetTabularADORColumn',
  'GetTabularADORColumnResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetTabularADORColumnResponse',
  'PlanTabularColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanTabularColumn',
  'GetTabularADORColumns' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetTabularADORColumns',
  'GetTabularADORColumnsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetTabularADORColumnsResponse',
  'ArrayOfPlanTabularColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanTabularColumn',
  'GetVariable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetVariable',
  'GetVariableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetVariableResponse',
  'GetVariables' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetVariables',
  'GetVariablesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetVariablesResponse',
  'GetUserView' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetUserView',
  'GetUserViewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetUserViewResponse',
  'GetUserViews' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetUserViews',
  'GetUserViewsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetUserViewsResponse',
  'GetObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetObject',
  'GetObjectResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetObjectResponse',
  'GetObjects' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetObjects',
  'GetObjectsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetObjectsResponse',
  'IsEmptyExpression' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\IsEmptyExpression',
  'IsEmptyExpressionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\IsEmptyExpressionResponse',
  'PlanContainsExpression' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanContainsExpression',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfString',
  'PlanContainsExpressionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanContainsExpressionResponse',
  'ArrayOfBoolean' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfBoolean',
  'GetSchemaNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetSchemaNames',
  'GetSchemaNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetSchemaNamesResponse',
  'GetRecipientFields' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetRecipientFields',
  'GetRecipientFieldsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetRecipientFieldsResponse',
  'ArrayOfPlanDataField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanDataField',
  'PlanDataField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanDataField',
  'GetPrimaryRecipientField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetPrimaryRecipientField',
  'GetPrimaryRecipientFieldResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetPrimaryRecipientFieldResponse',
  'RecipientField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\RecipientField',
  'GetFilter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetFilter',
  'GetFilterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetFilterResponse',
  'PlanFilter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanFilter',
  'GetFilters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetFilters',
  'GetFiltersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetFiltersResponse',
  'ArrayOfPlanFilter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanFilter',
  'GetPlanStructure' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetPlanStructure',
  'GetPlanStructureResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\GetPlanStructureResponse',
  'PlanStructure' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanStructure',
  'ArrayOfPlanADOR' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanADOR',
  'PlanADOR' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanADOR',
  'ArrayOfPlanAudienceSegmentInstance' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanAudienceSegmentInstance',
  'PlanAudienceSegmentInstance' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanAudienceSegmentInstance',
  'ArrayOfPlanAudience' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanAudience',
  'PlanAudience' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanAudience',
  'ArrayOfPlanAudienceSegment' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanAudienceSegment',
  'PlanAudienceSegment' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanAudienceSegment',
  'ArrayOfPlanVariable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanVariable',
  'PlanVariable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanVariable',
  'ArrayOfPlanUserView' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanUserView',
  'PlanUserView' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanUserView',
  'ArrayOfPlanUserViewField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanUserViewField',
  'PlanUserViewField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanUserViewField',
  'ArrayOfRecipientField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfRecipientField',
  'ArrayOfPlanFunction' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanFunction',
  'PlanFunction' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanFunction',
  'ArrayOfPlanFunctionParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanFunctionParameter',
  'PlanFunctionParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanFunctionParameter',
  'ArrayOfPlanDataSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanDataSource',
  'PlanDataSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanDataSource',
  'ArrayOfPlanDataTable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\ArrayOfPlanDataTable',
  'PlanDataTable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\PlanDataTable',
  'CreatePlanFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\CreatePlanFile',
  'CreatePlanFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\CreatePlanFileResponse',
  'IsPlanSubsetOfComparedPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\IsPlanSubsetOfComparedPlan',
  'IsPlanSubsetOfComparedPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\BasicServices\\PlanUtils_SSP\\IsPlanSubsetOfComparedPlanResponse',
);

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/xmpiewsapi/PlanUtils_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Get ADOR by name.
     *
     * @param GetADOR $parameters
     * @return GetADORResponse
     */
    public function GetADOR(GetADOR $parameters)
    {
      return $this->__soapCall('GetADOR', array($parameters));
    }

    /**
     * Get ADORs.
     *
     * @param GetADORs $parameters
     * @return GetADORsResponse
     */
    public function GetADORs(GetADORs $parameters)
    {
      return $this->__soapCall('GetADORs', array($parameters));
    }

    /**
     * Get Tabular ADOR column.
     *
     * @param GetTabularADORColumn $parameters
     * @return GetTabularADORColumnResponse
     */
    public function GetTabularADORColumn(GetTabularADORColumn $parameters)
    {
      return $this->__soapCall('GetTabularADORColumn', array($parameters));
    }

    /**
     * Get Tabular ADOR columns.
     *
     * @param GetTabularADORColumns $parameters
     * @return GetTabularADORColumnsResponse
     */
    public function GetTabularADORColumns(GetTabularADORColumns $parameters)
    {
      return $this->__soapCall('GetTabularADORColumns', array($parameters));
    }

    /**
     * Get Variable by name.
     *
     * @param GetVariable $parameters
     * @return GetVariableResponse
     */
    public function GetVariable(GetVariable $parameters)
    {
      return $this->__soapCall('GetVariable', array($parameters));
    }

    /**
     * Get Variables.
     *
     * @param GetVariables $parameters
     * @return GetVariablesResponse
     */
    public function GetVariables(GetVariables $parameters)
    {
      return $this->__soapCall('GetVariables', array($parameters));
    }

    /**
     * Get UserView by name.
     *
     * @param GetUserView $parameters
     * @return GetUserViewResponse
     */
    public function GetUserView(GetUserView $parameters)
    {
      return $this->__soapCall('GetUserView', array($parameters));
    }

    /**
     * Get UserViews.
     *
     * @param GetUserViews $parameters
     * @return GetUserViewsResponse
     */
    public function GetUserViews(GetUserViews $parameters)
    {
      return $this->__soapCall('GetUserViews', array($parameters));
    }

    /**
     * Get PlanObjects.
     *
     * @param GetObject $parameters
     * @return GetObjectResponse
     */
    public function GetObject(GetObject $parameters)
    {
      return $this->__soapCall('GetObject', array($parameters));
    }

    /**
     * Get PlanObjects.
     *
     * @param GetObjects $parameters
     * @return GetObjectsResponse
     */
    public function GetObjects(GetObjects $parameters)
    {
      return $this->__soapCall('GetObjects', array($parameters));
    }

    /**
     * Returns true if the expression is empty or contains just comments.
     *
     * @param IsEmptyExpression $parameters
     * @return IsEmptyExpressionResponse
     */
    public function IsEmptyExpression(IsEmptyExpression $parameters)
    {
      return $this->__soapCall('IsEmptyExpression', array($parameters));
    }

    /**
     * Checks if a plan contains some expression.
     *
     * @param PlanContainsExpression $parameters
     * @return PlanContainsExpressionResponse
     */
    public function PlanContainsExpression(PlanContainsExpression $parameters)
    {
      return $this->__soapCall('PlanContainsExpression', array($parameters));
    }

    /**
     * Get Schema Names.
     *
     * @param GetSchemaNames $parameters
     * @return GetSchemaNamesResponse
     */
    public function GetSchemaNames(GetSchemaNames $parameters)
    {
      return $this->__soapCall('GetSchemaNames', array($parameters));
    }

    /**
     * Get Recipient Field Names.
     *
     * @param GetRecipientFields $parameters
     * @return GetRecipientFieldsResponse
     */
    public function GetRecipientFields(GetRecipientFields $parameters)
    {
      return $this->__soapCall('GetRecipientFields', array($parameters));
    }

    /**
     * Get primary recipient field info.
     *
     * @param GetPrimaryRecipientField $parameters
     * @return GetPrimaryRecipientFieldResponse
     */
    public function GetPrimaryRecipientField(GetPrimaryRecipientField $parameters)
    {
      return $this->__soapCall('GetPrimaryRecipientField', array($parameters));
    }

    /**
     * Get Filter by name.
     *
     * @param GetFilter $parameters
     * @return GetFilterResponse
     */
    public function GetFilter(GetFilter $parameters)
    {
      return $this->__soapCall('GetFilter', array($parameters));
    }

    /**
     * Get Filters.
     *
     * @param GetFilters $parameters
     * @return GetFiltersResponse
     */
    public function GetFilters(GetFilters $parameters)
    {
      return $this->__soapCall('GetFilters', array($parameters));
    }

    /**
     * Receives a plan ID or file token and returns the plan’s structure.
     *
     * @param GetPlanStructure $parameters
     * @return GetPlanStructureResponse
     */
    public function GetPlanStructure(GetPlanStructure $parameters)
    {
      return $this->__soapCall('GetPlanStructure', array($parameters));
    }

    /**
     * Receives a plan's structure and returns file token to the created plan file.
     *
     * @param CreatePlanFile $parameters
     * @return CreatePlanFileResponse
     */
    public function CreatePlanFile(CreatePlanFile $parameters)
    {
      return $this->__soapCall('CreatePlanFile', array($parameters));
    }

    /**
     * Compare plans.
     *
     * @param IsPlanSubsetOfComparedPlan $parameters
     * @return IsPlanSubsetOfComparedPlanResponse
     */
    public function IsPlanSubsetOfComparedPlan(IsPlanSubsetOfComparedPlan $parameters)
    {
      return $this->__soapCall('IsPlanSubsetOfComparedPlan', array($parameters));
    }

}
