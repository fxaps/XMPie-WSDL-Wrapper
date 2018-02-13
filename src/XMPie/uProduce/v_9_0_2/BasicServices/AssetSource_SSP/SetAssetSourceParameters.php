<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP;

class SetAssetSourceParameters
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
     * @var string $inAssetSourceID
     */
    protected $inAssetSourceID = null;

    /**
     * @var ArrayOfAssetSourceParameter $inAssetSourceParameters
     */
    protected $inAssetSourceParameters = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param ArrayOfAssetSourceParameter $inAssetSourceParameters
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inAssetSourceParameters = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
      $this->inAssetSourceParameters = $inAssetSourceParameters;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetAssetSourceParameters
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetAssetSourceParameters
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetSourceID()
    {
      return $this->inAssetSourceID;
    }

    /**
     * @param string $inAssetSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetAssetSourceParameters
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
      return $this;
    }

    /**
     * @return ArrayOfAssetSourceParameter
     */
    public function getInAssetSourceParameters()
    {
      return $this->inAssetSourceParameters;
    }

    /**
     * @param ArrayOfAssetSourceParameter $inAssetSourceParameters
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetAssetSourceParameters
     */
    public function setInAssetSourceParameters($inAssetSourceParameters)
    {
      $this->inAssetSourceParameters = $inAssetSourceParameters;
      return $this;
    }

}
