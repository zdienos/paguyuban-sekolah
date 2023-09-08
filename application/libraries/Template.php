<?php
	class Template {
		protected $_ci;

		function __construct() {
			$this->_ci = &get_instance();
		}

		function views($template = NULL, $data = NULL) {
			if ($template != NULL) {
				// head
				$data['_css'] 					= $this->_ci->load->view('_layout/_css', $data, TRUE);	
				//Sidebar
				$data['_sidebar'] 				= $this->_ci->load->view('_layout/_sidebar', $data, TRUE);
				// Header
				$data['_navbar'] 				= $this->_ci->load->view('_layout/_navbar', $data, TRUE);
				//Content
				$data['_content']	 			= $this->_ci->load->view($template, $data, TRUE);
				//Footer
				$data['_footer'] 				= $this->_ci->load->view('_layout/_footer', $data, TRUE);
				//JS
				$data['_js'] 					= $this->_ci->load->view('_layout/_js', $data, TRUE);
				//Page JS
				if(! file_exists(APPPATH."views/".$template.'_js') ) {
				// if (file_exists($template.'_js')) {
					$data['_page_js'] 			= $this->_ci->load->view($template.'_js', $data, TRUE);
				} else {
					$data['_page_js']  			= '';
				}

				echo $data['_template'] 		= $this->_ci->load->view('_layout/_template', $data, TRUE);
			}
		}
	}
