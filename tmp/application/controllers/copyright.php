<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Copyright extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();			
	}
	
	public function index()
	{
		echo 'Wykonanie: <a href="http://www.arscreo.pl"  Poleć znajomym target="_blank">Ars Creo</a>';
	}
	
}