<?php
/**
 * User: zhangfeng
 * Date: 12-6-13
 * Time: 下午1:36
 */
class VenderInfoGetGetRequest{
	private $apiParams = array();
	function __set($key,$value){
	  $this->apiParams[$key] = $value;
	}
	function __get($key){
        return  $this->apiParams[$key];
	}
    public function getAppJsonParams()
    {
        
        ksort($this->apiParams);
        return json_encode($this->apiParams);
    }
	    /**
     *
     * 获取方法名称
     * @return string
     */
    public function getApiMethod()
    {
        return "jingdong.seller.vender.info.get";
    }
}
 