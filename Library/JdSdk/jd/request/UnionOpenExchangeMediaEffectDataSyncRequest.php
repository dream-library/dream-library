<?php
class UnionOpenExchangeMediaEffectDataSyncRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.exchange.media.effect.data.sync";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return $this->apiParas;
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $effectDataReq;

    public function setEffectDataReq($effectDataReq){
        $this->apiParas['effectDataReq'] = $effectDataReq;
    }
    public function getEffectDataReq(){
        return $this->apiParas['effectDataReq'];
    }
}

?>