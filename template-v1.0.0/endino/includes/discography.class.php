<?php

class Discography {
	
	public $albums = array();
	public $html = "";
	
	public function show_albums()  {
			
			$this->albums = array(
				
				// start record
				array(
				"artist" 	=>	"Wounded Giant",
				"title" 		=>	"Wounded Giant (split EP)",
				"cover"		=>	"http://endino.com/albumcovers/75x75/setmyselfteaser_small.jpg",
				"label"		=>	"STB Records",
				"role"		=>	"E/MX",
				"year"		=>	"2015",
				"content" 	=>	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi "			
				),
				
				// start record
				array(
				"artist" 	=>	"Grannies",
				"title" 		=>	"Ballsier",
				"cover"		=>	"http://endino.com/albumcovers/75x75/setmyselfteaser_small.jpg",
				"label"		=>	"Saustex Media",
				"year"		=>	"2015",
				"role"		=>	"CP/Mx",
				"content" 	=>	"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi "			
				),
				// start record
				array(
				"artist" 	=>	"Bob~!@#$%^&*()_+:;.,<>?\'|\=_+_'s Band",
				"title" 		=>	"Bob's  title",
				"cover"		=>	"http://endino.com/albumcovers/75x75/setmyselfteaser_small.jpg",
				"label"		=>	"bob's Label",
				"year"		=>	"1000",
				"role"		=>	"CP/Mx",
				"content" 	=>	"Lorem ipsum \"\"\"\"\"dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi&quot; "			
				)
				
				
			); // end arrays;
			
	 
	 
		 
			for ( $i = 0;  $i < count($this->albums); $i++ ) {
					
					$href_id_ref = strtolower(preg_replace('/[^\p{L}\p{N}]/u', '',  $this->albums[$i]['artist']));
			
			$html .= '<div class="row mob-aligncenter">';
			
				$html .= '<div class="span1 hide-mob">' . $this->albums[$i]['year'] . '</div><!-- end span1 -->';
			
				$html .= '<div class="span3">';
				
				$html .= '<a class="band-popoup mob-aligncenter" 
					href="#' . $href_id_ref . ($i + 1) . '" rel="discography" title="' . $this->albums[$i]['artist'] . '">' 
					. $this->albums[$i]['artist'] . '</a>';
				
					$html .= '<div id="' . $href_id_ref . ($i + 1) . '" style="max-width: 320px; display: none;">';
					
						$html .= '<h3 class="mob-aligncenter">' . $this->albums[$i]['title'] . '</h3>';
						
						$html .= '<div class="aligncenter"><img src="' . $this->albums['cover'] . '" alt="' . $this->albums[$i]['title'] . '" /></div>';
						$html .= '<div class="aligncenter">' . $this->albums[$i]['year'] . '&nbsp;&ndash;&nbsp;'  . $this->albums[$i]['label'] . '&nbsp;&ndash;&nbsp;' . $this->albums[$i]['role'] . '</div>';
						$html .= '<p>' . $this->albums[$i]['content'] . '</p>';
					
					$html .= '</div>';
				
				$html .= '</div><!-- end span3 -->';
				
				$html .= '<div class="span3 ">' .$this->albums[$i]['title'] . '</div><!-- end span3 -->';
				$html .= '<div class="span3 hidemob">' . $this->albums[$i]['label'] . '</div><!-- end span3 -->';
				$html .= '<div class="span2 hidemob">' . $this->albums[$i]['role'] . '</div><!-- end span2 -->';
			
			$html .= '</div><!-- end row -->';
		}
		
			
			return $html;
			
	} // end show_albums

} // end Discography

$disc = new Discography();

 


 

 