<?php

namespace Aina\Controller;
use Symfony\Component\HttpFoundation\Response;

	/**
  	an Example of class TestController. 
  	@package    Aina
  	@subpackage Controller
  	@author     Aina Aji Dian <ainaajidian@gmail.com>
 	*/

class TestController 
{ 
	/**
	an Example function of index
	*/
    public function coba()
    { return new Response('Message : Masih coba'); }

  /**
	* 
	an Example function of test
	*/
    public function test()
    { return new Response('Message : Ini test'); }

  /**
	* 
	an Example function of belajar
	*/
    public function belajar()
    { return new Response('Message : Lagi belajar'); }

  /**
	* 
	an Example function of dimana
	*/
    public function check()
    { return new Response('Message : Coba check'); }

  /**
	* 
	an Example function of apigen
	*/
    public function apigen()
    { return new Response('Message : Cek apigen'); }
}