<?php

namespace XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\RecipientListWS;

class DownloadUnsubscribeListByToken
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
     * @var int $orderProductId
     */
    protected $orderProductId = null;

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @param string $username
     * @param string $password
     * @param int $orderProductId
     * @param string $token
     */
    public function __construct($username = null, $password = null, $orderProductId = null, $token = null)
    {
      $this->username = $username;
      $this->password = $password;
      $this->orderProductId = $orderProductId;
      $this->token = $token;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\RecipientListWS\DownloadUnsubscribeListByToken
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\RecipientListWS\DownloadUnsubscribeListByToken
     */
    public function setPassword($password)
    {
      $this->password = $password;
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
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\RecipientListWS\DownloadUnsubscribeListByToken
     */
    public function setOrderProductId($orderProductId)
    {
      $this->orderProductId = $orderProductId;
      return $this;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\RecipientListWS\DownloadUnsubscribeListByToken
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
