<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP;

class PlanStructure
{

    /**
     * @var ArrayOfPlanADOR $m_ADORs
     */
    protected $m_ADORs = null;

    /**
     * @var ArrayOfPlanAudience $m_Audiences
     */
    protected $m_Audiences = null;

    /**
     * @var ArrayOfPlanVariable $m_Variables
     */
    protected $m_Variables = null;

    /**
     * @var ArrayOfPlanUserView $m_UserViews
     */
    protected $m_UserViews = null;

    /**
     * @var ArrayOfRecipientField $m_RecipientFields
     */
    protected $m_RecipientFields = null;

    /**
     * @var ArrayOfPlanFilter $m_Filters
     */
    protected $m_Filters = null;

    /**
     * @var ArrayOfPlanFunction $m_Functions
     */
    protected $m_Functions = null;

    /**
     * @var ArrayOfPlanDataSource $m_DataSources
     */
    protected $m_DataSources = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfPlanADOR
     */
    public function getM_ADORs()
    {
      return $this->m_ADORs;
    }

    /**
     * @param ArrayOfPlanADOR $m_ADORs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanStructure
     */
    public function setM_ADORs($m_ADORs)
    {
      $this->m_ADORs = $m_ADORs;
      return $this;
    }

    /**
     * @return ArrayOfPlanAudience
     */
    public function getM_Audiences()
    {
      return $this->m_Audiences;
    }

    /**
     * @param ArrayOfPlanAudience $m_Audiences
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanStructure
     */
    public function setM_Audiences($m_Audiences)
    {
      $this->m_Audiences = $m_Audiences;
      return $this;
    }

    /**
     * @return ArrayOfPlanVariable
     */
    public function getM_Variables()
    {
      return $this->m_Variables;
    }

    /**
     * @param ArrayOfPlanVariable $m_Variables
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanStructure
     */
    public function setM_Variables($m_Variables)
    {
      $this->m_Variables = $m_Variables;
      return $this;
    }

    /**
     * @return ArrayOfPlanUserView
     */
    public function getM_UserViews()
    {
      return $this->m_UserViews;
    }

    /**
     * @param ArrayOfPlanUserView $m_UserViews
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanStructure
     */
    public function setM_UserViews($m_UserViews)
    {
      $this->m_UserViews = $m_UserViews;
      return $this;
    }

    /**
     * @return ArrayOfRecipientField
     */
    public function getM_RecipientFields()
    {
      return $this->m_RecipientFields;
    }

    /**
     * @param ArrayOfRecipientField $m_RecipientFields
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanStructure
     */
    public function setM_RecipientFields($m_RecipientFields)
    {
      $this->m_RecipientFields = $m_RecipientFields;
      return $this;
    }

    /**
     * @return ArrayOfPlanFilter
     */
    public function getM_Filters()
    {
      return $this->m_Filters;
    }

    /**
     * @param ArrayOfPlanFilter $m_Filters
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanStructure
     */
    public function setM_Filters($m_Filters)
    {
      $this->m_Filters = $m_Filters;
      return $this;
    }

    /**
     * @return ArrayOfPlanFunction
     */
    public function getM_Functions()
    {
      return $this->m_Functions;
    }

    /**
     * @param ArrayOfPlanFunction $m_Functions
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanStructure
     */
    public function setM_Functions($m_Functions)
    {
      $this->m_Functions = $m_Functions;
      return $this;
    }

    /**
     * @return ArrayOfPlanDataSource
     */
    public function getM_DataSources()
    {
      return $this->m_DataSources;
    }

    /**
     * @param ArrayOfPlanDataSource $m_DataSources
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\PlanUtils_SSP\PlanStructure
     */
    public function setM_DataSources($m_DataSources)
    {
      $this->m_DataSources = $m_DataSources;
      return $this;
    }

}
