<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderProductWS;

class UpdateQuantityPerRecipeintResponse
{

    /**
     * @var OrderProduct $UpdateQuantityPerRecipeintResult
     */
    protected $UpdateQuantityPerRecipeintResult = null;

    /**
     * @param OrderProduct $UpdateQuantityPerRecipeintResult
     */
    public function __construct($UpdateQuantityPerRecipeintResult = null)
    {
      $this->UpdateQuantityPerRecipeintResult = $UpdateQuantityPerRecipeintResult;
    }

    /**
     * @return OrderProduct
     */
    public function getUpdateQuantityPerRecipeintResult()
    {
      return $this->UpdateQuantityPerRecipeintResult;
    }

    /**
     * @param OrderProduct $UpdateQuantityPerRecipeintResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderProductWS\UpdateQuantityPerRecipeintResponse
     */
    public function setUpdateQuantityPerRecipeintResult($UpdateQuantityPerRecipeintResult)
    {
      $this->UpdateQuantityPerRecipeintResult = $UpdateQuantityPerRecipeintResult;
      return $this;
    }

}
