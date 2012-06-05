<?php

	Class Extension_XUACompatible extends Extension{

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