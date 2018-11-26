<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP;

class GetAssetSourceType
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
     * @var string $inAssetSourceType
     */
    protected $inAssetSourceType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceType
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceType = $inAssetSourceType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceType
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceType
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetSourceType()
    {
      return $this->inAssetSourceType;
    }

    /**
     * @param string $inAssetSourceType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceType
     */
    public function setInAssetSourceType($inAssetSourceType)
    {
      $this->inAssetSourceType = $inAssetSourceType;
      return $this;
    }

}
