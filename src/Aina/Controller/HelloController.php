<?php

namespace Aina\Controller;
use Symfony\Component\HttpFoundation\Response;

	/**
  	an Example of class HelloController. 
  	@package    Aina
  	@subpackage Controller
  	@author     Aina Aji Dian <ainaajidian@gmail.com>
 	*/

class HelloController 
{ 
	/**
	an Example function of index
	*/
    public function index()
    { return new Response('Message : Hello NOY'); }

    /**
	* 
	an Example function of hai
	*/
    public function hai()
    { return new Response('Message : Hai NOY'); }

    /**
	* 
	* an Example function of kabar
  * @return message
	*/
    public function kabar()
    { return new Response('Message : Apa Kabar NOY'); }

    /**
	* 
	an Example function of dimana
	*/
    public function dimana()
    { return new Response('Message : Dimana NOY'); }

    /**
	* 
	an Example function of siapa
	*/
    public function siapa()
    { return new Response('Message : Siapa NOY'); }
}