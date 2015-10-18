<?php

/**
* Avalon template details
*
*/

class Avalon1 extends pageManager {
		
		public function get_header( $site_template = "avalon1" ) {
			 
			   $this->get_header_html($site_template = "avalon1" );
								
		} // end get header				
		
		public function get_template_content() {		
			 
				//$this->get_content_layout();
				//$this->get_callouts();
				//$this->get_slideshow_html();	
				//$this->get_content_html(); // includes sidebar and hp column layout
		}
		
		public function ft_location() {	
					
				$this->get_ft_location_banner();
				 
		}
		
		public function footer() {		
				
				 $ft_classes = $this->get_footer();	
				  
				 		 
				 //var_dump($ft_classes);
				 
				 return $ft_classes;
		}		
		 
} // end Avalon1