<?php

namespace XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\AssetWS;

class GetAssetListOptionalUserResponse
{

    /**
     * @var ArrayOfAsset $GetAssetListOptionalUserResult
     */
    protected $GetAssetListOptionalUserResult = null;

    /**
     * @param ArrayOfAsset $GetAssetListOptionalUserResult
     */
    public function __construct($GetAssetListOptionalUserResult = null)
    {
      $this->GetAssetListOptionalUserResult = $GetAssetListOptionalUserResult;
    }

    /**
     * @return ArrayOfAsset
     */
    public function getGetAssetListOptionalUserResult()
    {
      return $this->GetAssetListOptionalUserResult;
    }

    /**
     * @param ArrayOfAsset $GetAssetListOptionalUserResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\AssetWS\GetAssetListOptionalUserResponse
     */
    public function setGetAssetListOptionalUserResult($GetAssetListOptionalUserResult)
    {
      $this->GetAssetListOptionalUserResult = $GetAssetListOptionalUserResult;
      return $this;
    }

}
