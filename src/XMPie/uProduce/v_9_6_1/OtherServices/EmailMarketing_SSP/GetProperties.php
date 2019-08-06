<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP;

class GetProperties
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inEmailMarketingID
     */
    protected $inEmailMarketingID = null;

    /**
     * @var ArrayOfString $inPropertiesNames
     */
    protected $inPropertiesNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inEmailMarketingID
     * @param ArrayOfString $inPropertiesNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inEmailMarketingID = null, $inPropertiesNames = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inEmailMarketingID = $inEmailMarketingID;
      $this->inPropertiesNames = $inPropertiesNames;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\GetProperties
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\GetProperties
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailMarketingID()
    {
      return $this->inEmailMarketingID;
    }

    /**
     * @param string $inEmailMarketingID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\GetProperties
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
      $this->inEmailMarketingID = $inEmailMarketingID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInPropertiesNames()
    {
      return $this->inPropertiesNames;
    }

    /**
     * @param ArrayOfString $inPropertiesNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\GetProperties
     */
    public function setInPropertiesNames($inPropertiesNames)
    {
      $this->inPropertiesNames = $inPropertiesNames;
      return $this;
    }

}
