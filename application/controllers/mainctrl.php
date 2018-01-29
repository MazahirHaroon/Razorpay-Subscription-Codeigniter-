<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once ('assets\razorpay-php\Razorpay.php');
use Razorpay\Api\Api as RazorpayApi;

class Mainctrl extends CI_Controller {

		function __construct () {
				parent::__construct ();
		}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = $this->Init->initPath ('/mainctrl');
		$this->load->view('pages/form',$data);
		//$this->user();
	}

	public function rp_cust()
	{
		$data = $this->Init->initPath ('/mainctrl');
		//$msb_customer = array();
		
		//Razorpay API
		//Copy Paste the MaRRs Razorpay account key here instead
		$api = new RazorpayApi('rzp_test_9rv7A1enQpZtNb', 'mWKfnJ5f4m8d0ZQXyzsFQNC3');
		$params = array(
		    'count' => 2,
		    'skip'  => 1,
		    'from'  => 1400826740
		);

		// getting post data		
		$name = $this->input->post('name');
		$email = $this->input->post('email');

		$msb_customer['name'] = $name;
		$msb_customer['email'] = $email;
		//setting plan name
		$msb_customer['plan_id'] = $this->input->post('plan_id');

		// creating customer and getting response in rp_customer
		$rp_customer = $api->customer->create(array('name' => $msb_customer['name'], 'email' => $msb_customer['email']));
		//saving customer id to session
	    $this->session->set_flashdata('msb_customer_id', $rp_customer->id);

		// adding to database if customer is created at razorpay
        if($rp_customer->id){
			//fetching customer id from razorpay
			$msb_customer['cust_rp_id'] = $rp_customer->id;
	        // Calling a modal function to insert to database
	        $result = $this->Data->create_Customer($msb_customer);
			$response['data'] = $msb_customer;
            echo json_encode ($response);
			return $result;
		}
	}
	

 	public function subscr(){
 		
		$api = new RazorpayApi('rzp_test_9rv7A1enQpZtNb', 'mWKfnJ5f4m8d0ZQXyzsFQNC3');

		$params = array(
		    'count' => 2,
		    'skip'  => 1,
		    'from'  => 1400826740
		);
		//payment authorize and capture

		// fetching parameters
		$payments = $api->payment->all($params);
		$pid = $_POST["razorpay_payment_id"]; 
		$payment = $api->payment->fetch($pid);
		//getting customer id from session
		$cust_id = $this->session->flashdata('msb_customer_id'); 

		
		// Capturing Payment
		$amount =  $payment->amount;
		$capture = $payment->capture(array('amount' => $amount));
		$status = $capture->status;
		if($status=="captured"){
			// Creating Subscription
			 $subscription  = $api->subscription->create(array('plan_id' => 'plan_9P0j9AqN3nsBpm', 'customer_notify' => 1, 'customer_id' => $cust_id, 'total_count' => 6, 'addons' => array(array('item' => array('name' => 'Delivery charges', 'amount' => 30000, 'currency' => 'INR')))));
		}	
		if($subscription->id){
			$subscribe['sub_id'] = $subscription->id;
			$subscribe['cust_rp_id'] = $cust_id;
			$result = $this->Data->update_sub_Customer($subscribe);
	 		header('Location: http://localhost/ancatag/mars/');
		}
 	}
}