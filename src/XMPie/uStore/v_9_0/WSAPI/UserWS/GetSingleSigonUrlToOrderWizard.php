<?php

namespace XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS;

class GetSingleSigonUrlToOrderWizard
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var int $orderProductId
     */
    protected $orderProductId = null;

    /**
     * @var int $cultureId
     */
    protected $cultureId = null;

    /**
     * @var string $addToCartUrl
     */
    protected $addToCartUrl = null;

    /**
     * @var string $logoutUrl
     */
    protected $logoutUrl = null;

    /**
     * @var string $cancelUrl
     */
    protected $cancelUrl = null;

    /**
     * @var int $currencyId
     */
    protected $currencyId = null;

    /**
     * @param string $username
     * @param string $password
     * @param string $email
     * @param int $productId
     * @param int $orderProductId
     * @param int $cultureId
     * @param string $addToCartUrl
     * @param string $logoutUrl
     * @param string $cancelUrl
     * @param int $currencyId
     */
    public function __construct($username = null, $password = null, $email = null, $productId = null, $orderProductId = null, $cultureId = null, $addToCartUrl = null, $logoutUrl = null, $cancelUrl = null, $currencyId = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->email = $email;
      $this->productId = $productId;
      $this->orderProductId = $orderProductId;
      $this->cultureId = $cultureId;
      $this->addToCartUrl = $addToCartUrl;
      $this->logoutUrl = $logoutUrl;
      $this->cancelUrl = $cancelUrl;
      $this->currencyId = $currencyId;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderProductId()
    {
      return $this->orderProductId;
    }

    /**
     * @param int $orderProductId
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setOrderProductId($orderProductId)
    {
      $this->orderProductId = $orderProductId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCultureId()
    {
      return $this->cultureId;
    }

    /**
     * @param int $cultureId
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setCultureId($cultureId)
    {
      $this->cultureId = $cultureId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddToCartUrl()
    {
      return $this->addToCartUrl;
    }

    /**
     * @param string $addToCartUrl
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setAddToCartUrl($addToCartUrl)
    {
      $this->addToCartUrl = $addToCartUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogoutUrl()
    {
      return $this->logoutUrl;
    }

    /**
     * @param string $logoutUrl
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setLogoutUrl($logoutUrl)
    {
      $this->logoutUrl = $logoutUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancelUrl()
    {
      return $this->cancelUrl;
    }

    /**
     * @param string $cancelUrl
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setCancelUrl($cancelUrl)
    {
      $this->cancelUrl = $cancelUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyId()
    {
      return $this->currencyId;
    }

    /**
     * @param int $currencyId
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\UserWS\GetSingleSigonUrlToOrderWizard
     */
    public function setCurrencyId($currencyId)
    {
      $this->currencyId = $currencyId;
      return $this;
    }

}
