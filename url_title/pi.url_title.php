<?php if ( ! defined('BASEPATH')) exit('No direct script access');
/**
 * URL Title
 * 
 * Create a URL valid string from tag data
 *
 * @author Greg Salt <greg@purple-dogfish.co.uk>
 * @copyright 2012 Purple Dogfish Ltd
 * @licence MIT
 */
class Url_title {

	/**
	 * @var  string
	 */
	public $return_data = '';

	/**
	 * Constructor
	 * 
	 * @access  public
	 * 
	 * @return  \Url_title
	 */
	public function __construct()
	{
		$EE = get_instance();
		$EE->load->helper('url');

		$tagdata = $EE->TMPL->tagdata;

		$this->return_data = url_title($tagdata, 'dash', TRUE);
	}
}
