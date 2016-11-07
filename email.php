<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( ! class_exists( 'WC_Process_Order_Email' ) ) :
/**
 * Factory Completed Order Email
 *
 * An email sent to the factory when a new order is completed.
 *
 * @class 		WC_Process_Order_Email
 * @version		2.0.0
 * @package		WooCommerce/Classes/Emails
 * @author 		WooThemes
 * @extends 		WC_Email
 */
class WC_Process_Order_Email extends WC_Email {
	/**
	 * Constructor
	 */
	public function __construct() {
		// set ID, this simply needs to be a unique name
		$this->id = 'wc_process_order';
		// this is the title in WooCommerce Email settings
		$this->title = 'Process Order';
		// this is the description in WooCommerce email settings
		$this->description = 'Process Order Notification emails are sent to payment is done and packing can be start.';
		// these are the default heading and subject lines that can be overridden using the settings
		$this->heading = 'Process Order';
		$this->subject = 'Process Order';
		// these define the locations of the templates that this email should use, we'll just use the new order template since this email is similar
		$this->template_html    = 'emails/customer-processing-order.php';
		$this->template_plain   = 'emails/plain/customer-processing-order.php';
		// actually I'm not sure for this but lets include this for sure.
		add_action( 'woocommerce_order_status_pending_to_processing_notification', array( $this, 'trigger' ) );
		add_action( 'woocommerce_order_status_on-hold_to_processing_notification', array( $this, 'trigger' ) );
		// Call parent constructor to load any other defaults not explicity defined here
		parent::__construct();
		// this sets the recipient to the settings defined below in init_form_fields()
		$this->recipient = 'me@mydomain.com';
	}
	/**
	 * trigger function.
	 *
	 * @access public
	 * @return void
	 */
	function trigger( $order_id ) {
		if ( $order_id ) {
			$this->object       = wc_get_order( $order_id );
			//disable this because the email is not sending to client
			//$this->recipient    = $this->object->billing_email;
			$this->find['order-date']      = '{order_date}';
			$this->find['order-number']    = '{order_number}';
			$this->replace['order-date']   = date_i18n( wc_date_format(), strtotime( $this->object->order_date ) );
			$this->replace['order-number'] = $this->object->get_order_number();
		}
		if ( ! $this->is_enabled() || ! $this->get_recipient() ) {
			return;
		}
		$this->send( $this->recipient, $this->get_subject(), $this->get_content(), $this->get_headers(), $this->get_attachments() );
	}
	/**
	 * Get content html.
	 *
	 * @access public
	 * @return string
	 */
	function get_content_html() {
		return wc_get_template_html( $this->template_html, array(
			'order'         => $this->object,
			'email_heading' => $this->get_heading(),
			'sent_to_admin' => false,
			'plain_text'    => false,
			'email'			=> $this
		) );
	}
	/**
	 * Get content plain.
	 *
	 * @access public
	 * @return string
	 */
	function get_content_plain() {
		return wc_get_template_html( $this->template_plain, array(
			'order'         => $this->object,
			'email_heading' => $this->get_heading(),
			'sent_to_admin' => false,
			'plain_text'    => true,
			'email'			=> $this
		) );
	}
}
endif;
return new WC_Process_Order_Email();