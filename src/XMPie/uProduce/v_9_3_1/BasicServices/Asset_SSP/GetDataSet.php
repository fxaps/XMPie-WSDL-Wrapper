<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP;

class GetDataSet
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
     * @var string $inAssetID
     */
    protected $inAssetID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetID
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetID = $inAssetID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetDataSet
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetID()
    {
      return $this->inAssetID;
    }

    /**
     * @param string $inAssetID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetDataSet
     */
    public function setInAssetID($inAssetID)
    {
      $this->inAssetID = $inAssetID;
      return $this;
    }

}
