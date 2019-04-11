<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('Fuel_test_base.php');

class Fuel_redirects_test extends Fuel_test_base {
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function test_add_aggressive_redirects()
	{
		$this->fuel->redirects->add('test1', 'home', FALSE);
		$test = $this->fuel->redirects->aggressive_redirects;
		$expected = array('test1' => 'home');
		$this->run($test, $expected, 'Test for successful adding to aggressive redirects array');
	}
	
	public function test_add_passive_redirects()
	{
		$this->fuel->redirects->add('test1', 'home', TRUE);
		$test = $this->fuel->redirects->passive_redirects;
		$expected = array('test1' => 'home');
		$this->run($test, $expected, 'Test for successful adding to passive redirects array');
	}

	public function test_aggressive_redirect()
	{
		
		$this->fuel->redirects->add('test1', 'home', FALSE);
		$test = $this->fuel->redirects->test('test1');
		$expected = TRUE;
		$this->run($test, $expected, 'Test for successful aggressive redirect');

		$this->fuel->redirects->add('Test1', ['url'=>'home','case_sensitive'=> TRUE], FALSE);
		$test = $this->fuel->redirects->test('Test1');
		$expected = TRUE;
		$this->run($test, $expected, 'Test for successful case sensitive aggressive redirect');

		$this->fuel->redirects->add('test2', ['url'=>'home','case_sensitive'=> FALSE], FALSE);
		$test = $this->fuel->redirects->test('Test2');
		$expected = TRUE;
		$this->run($test, $expected, 'Test for successful case insensitive aggressive redirect');

	}
	
	public function test_passive_redirect()
	{
		// should not redirect because page already exists
	    $this->fuel->redirects->add('test1', 'home', TRUE);
		$test = $this->fuel->redirects->test('test1');
		$expected = TRUE;
		$this->run($test, $expected, 'Test for successful passive redirect');
	}

	protected function _test_redirect($url)
	{
		$url = site_url($url);

		$this->CI->load->library('user_agent');
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, site_url($url));
		curl_setopt($ch, CURLOPT_HEADER, 0); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		// set cookie jar for sessions and to tell system we are running tests
		$tester_config = $this->CI->config->item('tester');
		curl_setopt($ch, CURLOPT_COOKIEFILE, $tester_config['session_cookiejar_file']); 
		curl_setopt($ch, CURLOPT_COOKIEJAR, $tester_config['session_cookiejar_file']); 
		curl_setopt($ch, CURLOPT_COOKIE, 'tester_dsn='.$this->config_item('dsn_group')); 
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		
		curl_setopt($ch, CURLOPT_USERAGENT, $this->CI->agent->agent_string());
		
		$config['aggressive_redirects'] =  array(
			'test1' => array('home', FALSE),
			'test2' => array('home', 'case_sensitive' => TRUE));
		$config['passive_redirects'] =  array('home' => array('home2', TRUE));
		$post['config'] = json_encode($config);

		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

		$output = curl_exec($ch);

		$cnt = (int)curl_getinfo($ch, CURLINFO_REDIRECT_COUNT);
		curl_close($ch); 

		return ($cnt > 0);
	}
	

}
