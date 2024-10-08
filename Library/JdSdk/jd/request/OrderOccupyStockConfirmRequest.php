<?php
class OrderOccupyStockConfirmRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "biz.order.occupyStock.confirm";
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
    private  $jdOrderId;

    public function setJdOrderId($jdOrderId){
        $this->apiParas['jdOrderId'] = $jdOrderId;
    }
    public function getJdOrderId(){
        return $this->apiParas['jdOrderId'];
    }
}

?>