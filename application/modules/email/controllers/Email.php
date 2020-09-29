<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Email extends MX_Controller
{

	private $data;
	// 	private $logo;
	// 	private $companyName;
	// 	private $comapnyAddress;
	// 	private $comapnyEmail;
	// 	private $companyWebsite;
	// 	private $phone;
	function __construct()
	{
		parent::__construct();
		$this->data['logo'] = "https://www.shopmarg.com/image/catalog/Shopmarg-Logo.png";
		$this->data['companyName'] = "Shopmarg";
		$this->data['companyAddress'] = "Siliguri,West Bengal-734001, India";
		$this->data['companyEmail'] = "support@shopmarg.com";
		$this->data['companyWebsite'] = "https://www.shopmarg.com/";
		$this->data['companyPhone'] = "9851373439 / 0353-2541451";
		$this->data['facebook'] = "https://www.facebook.com/shopmarg/";
		$this->data['twitter'] = "https://twitter.com/SHOPMARGINDIA";
		$this->data['instagram'] = "https://www.instagram.com/shopmarg_online_shop_siliguri/";
		$this->data['youtube'] = "https://www.youtube.com/channel/UCKEDb76P0Xsq9SaGWSQTjGA";
		$this->data['linkedin'] = "https://www.linkedin.com/in/shopmarg-online-store-79ab33150/?originalSubdomain=in";
		$this->data['forgotPasswordLink'] = "https://www.shopmarg.com/forgot-your-password?token=40c26da2f60e82658687a0ca50f32162&id_customer=1117355";
	}

	function welcome($fname = "Abishek", $email = "support@groveus.com")
	{
		$this->data['fName'] = $fname;
		$this->data['email'] = $email;
		$this->load->view('welcome', $this->data);
	}
	function orderConfirm($fname = "Abishek", $email = "support@groveus.com")
	{
		$this->data['fName'] = $fname;
		$this->data['email'] = $email;
		$this->load->view('order-confirm', $this->data);
	}
	function OrderPlaced($fname = "Abishek", $email = "support@groveus.com")
	{
		$this->data['fName'] = $fname;
		$this->data['email'] = $email;
		$this->load->view('order-placed', $this->data);
	}
	function orderTrack($fname = "Abishek", $email = "support@groveus.com", $orderStatus = "3")
	{
		if ($orderStatus == "1") {
			$this->data['title'] = "Ordered";
			$this->data['img'] = "./assets/ordered.jpg";
			$this->data['msg'] = "ORDER PLACED";
			$this->data['txt'] = "Your Have Placed An Order With Shopmarg";
		}
		if ($orderStatus == "2") {
			$this->data['title'] = "Processing";
			$this->data['img'] = "./assets/processing.jpg";
			$this->data['msg'] = "ORDER IS PROCESSING";
			$this->data['txt'] = "Your Order Is Processing";
		}
		if ($orderStatus == "3") {
			$this->data['title'] = "Shipped";
			$this->data['img'] = "./assets/shipped.jpg";
			$this->data['msg'] = "ORDER SHIPPED";
			$this->data['txt'] = "Your Order Has Been Shipped";
		}
		if ($orderStatus == "4") {
			$this->data['title'] = "Completed";
			$this->data['img'] = "./assets/completed.jpg";
			$this->data['msg'] = "ORDER COMPLETED";
			$this->data['txt'] = "Your Order Has Been Delivered";
		}
		$this->data['fName'] = $fname;
		$this->data['email'] = $email;
		$this->load->view('order-track', $this->data);
	}
	function forgotPassword($fname = "Abishek", $email = "support@groveus.com")
	{
		$this->data['fName'] = $fname;
		$this->data['email'] = $email;
		$this->load->view('forgot-password', $this->data);
	}
	function newsLetter($fname = "Abishek", $email = "support@groveus.com")
	{
		$this->data['fName'] = $fname;
		$this->data['email'] = $email;
		$this->load->view('newsletter', $this->data);
	}
	function news($fname = "Abishek", $email = "support@groveus.com")
	{
		$this->data['fName'] = $fname;
		$this->data['email'] = $email;
		$this->load->view('news', $this->data);
	}
}
