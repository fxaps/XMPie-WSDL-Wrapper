<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Jobs_SSP;


/**
 * Jobs Web Service.
 */
class Jobs_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'Get' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\Get',
  'GetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\ArrayOfString',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\XMPRowField',
  'DeleteAll' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\DeleteAll',
  'DeleteAllResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\DeleteAllResponse',
  'AbortAll' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\AbortAll',
  'AbortAllResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\AbortAllResponse',
  'Abort' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\Abort',
  'AbortResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\AbortResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\DeleteResponse',
  'GetJobType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobType',
  'GetJobTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypeResponse',
  'GetJobTypeResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypeResult',
  'GetJobTypeXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypeXMPTblDataSet',
  'GetJobTypeXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypeXMPTblDataSetResponse',
  'GetJobTypes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypes',
  'GetJobTypesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypesResponse',
  'GetJobTypesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypesResult',
  'GetJobTypesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypesXMPTblDataSet',
  'GetJobTypesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobTypesXMPTblDataSetResponse',
  'GetJobsByFilter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobsByFilter',
  'ArrayOfJobQueryPart' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\ArrayOfJobQueryPart',
  'JobQueryPart' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\JobQueryPart',
  'JobOrderPart' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\JobOrderPart',
  'ArrayOfEJobField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\ArrayOfEJobField',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\Property',
  'GetJobsByFilterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobsByFilterResponse',
  'GetJobPageByFilter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobPageByFilter',
  'GetJobPageByFilterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobPageByFilterResponse',
  'GetJobCountByFilter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobCountByFilter',
  'GetJobCountByFilterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\GetJobCountByFilterResponse',
  'DeleteJobsByFilter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\DeleteJobsByFilter',
  'DeleteJobsByFilterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\DeleteJobsByFilterResponse',
  'DeleteAllJobsByFilter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\DeleteAllJobsByFilter',
  'DeleteAllJobsByFilterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\ProductionServices\\Jobs_SSP\\DeleteAllJobsByFilterResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Jobs_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Get Jobs.
     *
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
      return $this->__soapCall('Get', array($parameters));
    }

    /**
     * Get Jobs view.
     *
     * @param GetDataSet $parameters
     * @return GetDataSetResponse
     */
    public function GetDataSet(GetDataSet $parameters)
    {
      return $this->__soapCall('GetDataSet', array($parameters));
    }

    /**
     * Get Jobs view.
     *
     * @param GetXMPTblDataSet $parameters
     * @return GetXMPTblDataSetResponse
     */
    public function GetXMPTblDataSet(GetXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetXMPTblDataSet', array($parameters));
    }

    /**
     * Delete all Jobs.
     *
     * @param DeleteAll $parameters
     * @return DeleteAllResponse
     */
    public function DeleteAll(DeleteAll $parameters)
    {
      return $this->__soapCall('DeleteAll', array($parameters));
    }

    /**
     * Abort all Jobs.
     *
     * @param AbortAll $parameters
     * @return AbortAllResponse
     */
    public function AbortAll(AbortAll $parameters)
    {
      return $this->__soapCall('AbortAll', array($parameters));
    }

    /**
     * abort Jobs.
     *
     * @param Abort $parameters
     * @return AbortResponse
     */
    public function Abort(Abort $parameters)
    {
      return $this->__soapCall('Abort', array($parameters));
    }

    /**
     * Delete Jobs.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get DataSet with Jobs type information.
     *
     * @param GetJobType $parameters
     * @return GetJobTypeResponse
     */
    public function GetJobType(GetJobType $parameters)
    {
      return $this->__soapCall('GetJobType', array($parameters));
    }

    /**
     * Get DataSet with Jobs type information.
     *
     * @param GetJobTypeXMPTblDataSet $parameters
     * @return GetJobTypeXMPTblDataSetResponse
     */
    public function GetJobTypeXMPTblDataSet(GetJobTypeXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetJobTypeXMPTblDataSet', array($parameters));
    }

    /**
     * Get DataSet with Job types.
     *
     * @param GetJobTypes $parameters
     * @return GetJobTypesResponse
     */
    public function GetJobTypes(GetJobTypes $parameters)
    {
      return $this->__soapCall('GetJobTypes', array($parameters));
    }

    /**
     * Get DataSet with Job types.
     *
     * @param GetJobTypesXMPTblDataSet $parameters
     * @return GetJobTypesXMPTblDataSetResponse
     */
    public function GetJobTypesXMPTblDataSet(GetJobTypesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetJobTypesXMPTblDataSet', array($parameters));
    }

    /**
     * Get job IDs that under a filter.
     *
     * @param GetJobsByFilter $parameters
     * @return GetJobsByFilterResponse
     */
    public function GetJobsByFilter(GetJobsByFilter $parameters)
    {
      return $this->__soapCall('GetJobsByFilter', array($parameters));
    }

    /**
     * Get Page number of a job under a filter.
     *
     * @param GetJobPageByFilter $parameters
     * @return GetJobPageByFilterResponse
     */
    public function GetJobPageByFilter(GetJobPageByFilter $parameters)
    {
      return $this->__soapCall('GetJobPageByFilter', array($parameters));
    }

    /**
     * Get the amount of jobs that fulfill a filter
     *
     * @param GetJobCountByFilter $parameters
     * @return GetJobCountByFilterResponse
     */
    public function GetJobCountByFilter(GetJobCountByFilter $parameters)
    {
      return $this->__soapCall('GetJobCountByFilter', array($parameters));
    }

    /**
     * Delete some jobs that fulfill a filter.
     *
     * @param DeleteJobsByFilter $parameters
     * @return DeleteJobsByFilterResponse
     */
    public function DeleteJobsByFilter(DeleteJobsByFilter $parameters)
    {
      return $this->__soapCall('DeleteJobsByFilter', array($parameters));
    }

    /**
     * Delete all jobs that fulfill a filter.
     *
     * @param DeleteAllJobsByFilter $parameters
     * @return DeleteAllJobsByFilterResponse
     */
    public function DeleteAllJobsByFilter(DeleteAllJobsByFilter $parameters)
    {
      return $this->__soapCall('DeleteAllJobsByFilter', array($parameters));
    }

}
