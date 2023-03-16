<?php

/**
 * data
 * @author auto create
 */
class MapData
{
	
	/** 
	 * 券ID
	 **/
	public $coupon_activity_id;
	
	/** 
	 * 优惠券金额
	 **/
	public $coupon_amount;
	
	/** 
	 * 优惠券结束时间
	 **/
	public $coupon_end_time;
	
	/** 
	 * 优惠券剩余量
	 **/
	public $coupon_remain_count;
	
	/** 
	 * 券类型，1 表示全网公开券，4 表示妈妈渠道券
	 **/
	public $coupon_src_scene;
	
	/** 
	 * 优惠券门槛金额
	 **/
	public $coupon_start_fee;
	
	/** 
	 * 优惠券开始时间
	 **/
	public $coupon_start_time;
	
	/** 
	 * 优惠券总量
	 **/
	public $coupon_total_count;
	
	/** 
	 * 券属性，0表示店铺券，1表示单品券
	 **/
	public $coupon_type;	
}
?>