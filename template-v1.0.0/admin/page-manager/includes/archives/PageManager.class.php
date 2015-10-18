 
<?php
require_once 'builder-data.php';
require_once 'Avalon1.php';
 
//print_r($template_properties['location_data']) ;
//print_r($template_properties['doctor_data']) ;
 
/**
* Template data
* 
*/
 
class pageManager {

	public function getVars(){
				return $this->json;
		}
		
		protected function isValidJson($string){
 				return is_object(json_decode($string));
		}
		
		protected function getJson(){
				$arr = array();
				if(file_exists($this->jsonFileName)){
					$json = file_get_contents($this->jsonFileName);
					$arr = ($this->isValidJson($json) && strtolower($json) != 'array' ? json_decode($json, true): array());
				}
				 
				return $arr;
		}
			 
			
		public $social_sites = array('facebook', 'twitter', 'youtube', 'google', 'yelp', 
			'linkedin', 'angieslist', 'myspace', 'pinterest', 'yahoo', 'blog');	
 		private $jsonFileName;
		public $num_offices;
		
		public $callout_directory = "/assets/images/";

		protected $template_properties; 
  		 
		public function __construct( $site_template = "Avalon1" ){
			
				$this->jsonFileName = dirname(__FILE__).'/page-data.json';			
  			
				$this->template_properties = $this->getJson();
				$template_properties  = $this->template_properties;
				//print_r($this->template_properties);
				  								
				$this->page_data = $page_data; 
				
				$this->builder_data = $builder_data; 
				
				$this->site_template = $site_template; 
				
				$this->views_directory = 'views/'; 
				
				$num_offices = count($this->template_properties['location_data']);		
			 
				$this->social_icon_directory = '/assets/images/socialnetworking/'; 	
				
				//echo $site_template . '<br /><br />';
				  $site_template =  $this->site_template;
				$site_template = $this->get_header( $site_template );
				
		}
		 
#start header functions
		 public function get_header( $site_template ) { 
		 		//var_dump( $this->template_properties);
				 //echo  ' <p><br />Template from get_header: ' . $site_template . '</p>';
		 	
				$this->get_header_html( $site_template );
				}
 
	  		public function get_header_html( $site_template) {		
										
							//echo '<p>Template from get_header_html : ' . $site_template . '</p>';
							//echo '<p>Location_name from get_header_html: ' . $this->template_properties['location_data'][0]['location_name'] . '</p>';
							
							//$template_properties = $this->template_properties;
							//$template_properties = $this->template_properties['location_data'][0];
							$template_properties = $this->template_properties;
							//var_dump($this->template_properties);
							//include 'views/avalon-hd.php'; 
				 			//echo $template_properties['location_name'];
				 
				 return  $template_properties;  
			
			}
			
    public function socialNetworking(){
        
          $networkHtml = "";

          foreach($this->template_properties['socialnetworking_data'] as $soc)
            $networkHtml .= $this->getSocialHtml($soc);
             
          return $networkHtml; 
        }
         
#Returns the html for social icons 

   public function getSocialHtml($social){
          
          $url =	$social['url'];		
          $name = "";
          
          foreach ($this->social_sites as $site) 
            if (false !== strpos($url, $site))
              $name = $site;
          
          return "<a class='external' href='" . $social["url"] . "' target='_blank'> 
            <img src='" . $this->social_icon_directory . $name . ".png' class='shift' alt='" . $name . "' />
            </a>";
        }

#Returns the html for doctors
        
	 public function hd_doctors() {				 
									 
							$doctors_html  = "";
							
							$doctors = $this->template_properties['doctor_data'];

									foreach ( $doctors as $doctor ) {
					 
									 $doctors_html .= $this->getDoctorsHtml($doctor); 
																						 
									}	
									
									return $doctors_html;	
					}
									
		public function getDoctorsHtml($doctor) {
					
					$name = isset($doctor['name']) ? 	$doctor['name']  : ""; 		
					$url = isset($doctor['url']) ? 	$doctor['url']  : ""; 		
						
					$doctor_html .= 
														
						'<a class="doctor-names"'
						. ' href="' 
						. $url .  '">' 
						. $name .  ' </a>';								
						 
					return $doctor_html;	
					
				}	
 
#Print logo hd-location HTML

		function get_hd_locations( $num_offices ) {
			
				$locations = $this->template_properties['location_data'];
 
						$align = "desk-alignright tab-alignright mob-aligncenter";
						
						$numL = count( $locations );
						
						if( $numL == 1)
							
							$span = "span6";
							
						else
						
							$span = "span3";
						
							$classes = "address " . $span . $align;
							
							
							$locHtml = "";
							
						
						if( $numL < 3 ){
							
							for( $i = 0; $i < $numL; $i++ ){
								
								$loc = $locations[$i];
								
								
								$locHtml .= $this->getHdLocationHtml($loc, $classes);
							}
							
						} else {
							
							$left = "<div class='" . $classes . "'>";
							$right = "<div class='" . $classes . "'>";
							
							for($i = 0; $i < $numL; $i++){
								
								if($i % 2 == 0)
								
									$right .= $this->getHdLocationHtmlShort( $locations[$i] );
									
								else
								
									$left .= $this->getHdLocationHtmlShort( $locations[$i] );
							}
							
							$left .= "</div>";
							
							$right .= "</div>";
							
							$locHtml = $left . $right;
							
						}
						
						return $locHtml; 
						 
			}
			
#returns a link phone given phone number

			public function getPhoneLink($number){
				
				$replace = array('(', ')', '-', '/', ' ');
				$mob_phone = str_replace($replace, '', $number);
				$mob_phone = str_replace($replace, '', $mob_phone);
				
				return "tel:+1" . $mob_phone;
			}
	
			
#returns the html for 1 location
			public function getHdLocationHtml($location, $classes){
				
#set a default so this function can be used by itself
					if($classes === null)
					
						$classes = "span6 address font-2 desk-alignright tab-alignright mob-alignright";
					
						$l = $location;
						
						$mob_phone = $this->getPhoneLink( $l['phone'] );
						
						return '<div class="' . $classes . '">'
								. '<div class="hd-phone"><a href="' .  $mob_phone . ' ">&nbsp;' .  $l['phone'] . '</a></div>'							
								. '<a href="' . $l['url'] .'">'
								. $l['address_line_one'] . '<br>'
								. $l['address_line_two'] . '</a>'
								. '</div>';
			}
			
			
			public function getHdLocationHtmlShort($location){
				
					$l = $location;
					return '<div class="add-short"><a href="' . $l['url'] .'">' . $l['name'] . '</a><a href="">' .  $l['phone'] . '</a></div>';					
			}
			
#end header functions			
			
#start body content functions				
 			
			
				public function get_content_layout( $template_properties ) {					
						
						//var_dump($this->template_properties);
						
						$home_page_layout = $template_properties['builderData']['homepage_columns'];
						
						if($home_page_layout == 2 ) {
							 	
							//	echo '<h4>two column</h4>';
 								
								//include 'views/avalon-body.php';  // return two column
  							
							} else {
								
							//	echo '<h4>one column</h4>';
								
							//	include 'views/avalon-body.php'; 
								 
							}
								
								//include 'views/avalon-body.php'; // return single column
								
							  return  'Number of columns: ' . $home_page_layout;
						
				}
				
				
	public function get_callouts(){}
	
	public function callouts_top() {

				$callouts = $this->template_properties['callout_data'];
	 				 	 
					$callouts_html = "";
					$num = count($callouts);
					
					$class = "span3";
					
					if( $num < 5 )
						$span = intval( 12 / $num );
					
					$class = "span" . $span;
					
					$cc = $this->template_properties['builderData']['callout_classes'];
					
					$class = isset( $cc ) ? $cc : $class;
					 
					
					for ($i = 0; $i < $num; $i++)   
						 	 $callouts_html .= $this->getCalloutTopHTML($callouts[$i], $class, $i + 1); 

					return $callouts_html; 
 				}	
				
				/**
				*
				* Avalon 4 across style callouts
				**/
				public function getCalloutTopHTML($callout, $class = 'span3', $index) {
						
						$name = isset($callout['name']) ? 	$callout['name']  : ""; 		
						$url = isset($callout['url']) ? 	$callout['url']  : ""; 		
						$subtext = isset($callout['subtext']) ? 	$callout['subtext']  : ""; 			
						
						$calloutHTML = '<div class="callout ' . $class . '">
															<a href="' . $url . '">
																<img src="' . $this->callout_directory . 'callout-' . $index . '.png" alt="Meet the Doctor" />
																<h4 class="name">' . $name . '</h4>
																<p class="subtext">' . $subtext . '</p>
																<span class="learn-more">Learn More</span>
															</a>
													</div>';
					 
						return $calloutHTML;
				
			}
			
			/**
			* Avalon style callouts
			*
			*
			*/
			public function callouts_row_square(){
					$calloutHTML = "";
					
					return $calloutHTML;
			}
			
			public function getCalloutRowSquareHTML($callout, $class = 'span3', $index) {
			} 
			
#end callouts		

#start ft location banner
		/** returns the html for 1 location **/
			public function get_ft_location_banner($locations, $classes){
				
				$locations = $this->template_properties['location_data'];
				
				
				
				$classes = isset( $classes ) ? $classes: "location ";
				
				$num = count($locations);
				
				
				
				if($num % 4 == 0){
					$span = 3;
					$span2 = 3;
					$break = 4;
				}
				else if( $num == 7){
					$span = 3;
					$span2 = 4;
					$break = 4;
				}
				else if($num % 3 == 0){
					$span = 4;
					$span2 = 4;
					$break = 3;
				}
				else if($num == 5){
					$span = 4;
					$span2 = 6;
					$break = 3;
				}
				else if($num % 2 == 0)
					$span = 6;
					
				else $span = 12;
				
				/*$span = intval(12 / count($locations) );
				if($span < 3) $span = 3;*/
				
				$span_class = "span" . $span;
				 
				
				
				$ft_locations = "";
						
				for( $i = 0; $i < count($locations); $i++) {
					
					if( $i > 2 && $i % $break == 0) {
						//$ft_locations .= "<div class='clear'>&nbsp;</div>";	
						$ft_locations .= "</div><div class='row'>";	
						$span_class = "span" . $span2;
					}
					
					$c = $classes . $span_class;
					$ft_locations .= $this->getFtLocationHTML($locations[$i], $c, $i + 1);
					
				}
				
				return $ft_locations;
						  
			}
			
			function getFtLocationHTML($location, $classes, $index) {
			 				 
						$url = isset( $location['address_url'] ) ? $location['address_url'] : "";
						$name = isset( $location['name'] ) ? $location['name'] : "";
						$add1 = isset( $location['address_line_one'] ) ? $location['address_line_one'] : "";
						$add2 = isset( $location['address_line_two'] ) ? $location['address_line_two'] : "";
						
							
						return  '<div class="' . $classes . ' ">'
							. '<a href="' .  $url . '"  >'
							. '<div class="map aligncenter">'
							. '<img src="/assets/images/map-'. $index .'.png" alt="Map and Directions" class="shift" />'
							. '</div>'
							. '<!-- .map -->'
							. '<div class="address aligncenter">'
							.	'<div class="location-name">' . $location['name'] . '</div>'
							. '<div class="ft-phone">' . $location['phone'] . '</div>'
							. $location['address_line_one'] . '<br>'
							. $location['address_line_two']
							.'</div><!--  address -->'
							. '</a><!--  location  row -->'
							. '</div><!--  location -->';	 
			}			
			
#start footer			
		
			 public function get_footer() {				 
						 		  
							$ft_classes = array(
									'footer_left_class' => $this->template_properties['builderData']['footer_left_class'],	
									'footer_right_class' => $this->template_properties['builderData']['footer_right_class']
									);	
									
									//$ft_classes = array('one', 'two' );
									
								/*	foreach($ft_classes as $class){
										echo $class . '<br />';
										//echo $ft_right_class;
									}*/
									 
							 	// $ft_left_class =  $site_template->template_properties['builderData']['footer_left_class'];
								// $ft_right_class =  $site_template->template_properties['builderData']['footer_right_class'];
								 echo '<p>from inside get_footer</p> ';
							 	
								 return $ft_classes;
						  
					}
									
#end footer	
	 	
#end content		 

			
			public function save($data){
				$data = json_decode($data, true);
				$output = array();
				if(!$jsonFile = fopen('page-data.json', 'w')){
					$output['status'] = false;
					$output['msg'] = "Could not open file.";
				}
				else{
					if(count($this->json) < 1){
							$this->json = $data;
					}
					else{
						foreach($data as $d=>$dd){
								$this->json[$d] = $data[$d];
						}
					}
					$jsonSave = json_encode($this->json);
					if (fwrite($jsonFile, $jsonSave) === false) {
							$output['status'] = false;
							$output['msg'] = "Could not save file.";
					}		
					else{
							$output['status'] = true;
							$output['msg'] = "File successfully saved.";
					}
				}
				fclose($jsonFile);
				chmod('page-data.json', 0777);
				return $output;
			}

}