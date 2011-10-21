<?php

	Class Extension_XUACompatible extends Extension{

		public function about(){
			return array(
				'name' => 'X-UA-Compatible Header',
				'version' => '1.0',
				'release-date' => '2011-10-21',
				'author' => array(
					'name' => 'Nick Baker',
					'email' => 'nick@digitalsunshine.com.au'
				),
				'descripton' => 'Adds a X-UA-Compatible header to response to discourage IE from entering compatibility mode'
			);
		}

		public function addXUACompatibleHeader($context = null){
			Frontend::instance()->Page()->addHeaderToPage('X-UA-Compatible', 'IE=Edge,chrome=1');
		}

		public function getSubscribedDelegates(){
			return array(
				array(
					'page' => '/frontend/',
					'delegate' => 'FrontendPreRenderHeaders',
					'callback' => 'addXUACompatibleHeader'
				)
			);
		}
	}