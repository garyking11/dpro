<?php 
  
$data = json_decode(file_get_contents("php://input", true), true);
 
$section_identifier = array();

switch ($data['identifier']){
		case 'page_data':
	$section_identifier['status'] = true;
	$section_identifier['output'] = $pagedata;	
	
	case 'content_data':
	$section_identifier['status'] = true;
	$section_identifier['output'] = $content_data;	
	
	break;	

	
	default:  
		
		echo 'Please enter data';		
	
 }
 
//include dirname(__FILE__). '/TemplateManager.class.php'; 

$pageData = dirname(__FILE__). '/page-data.php'; 
 

$content = "<?php
						
    \$doctor_data = array('name' => 'bob', 'url' => 'myurl');

    echo \$doctor_data['name'] . 'testing again';

    ?>";

if (is_writable($pageData)) {
	
	if (!$handle = fopen($pageData, 'w')) {
         echo "Cannot open file ($pageData)";
         exit;
    }
		
    // Write $somecontent to our opened file.
    if (fwrite($handle, $content) === FALSE) {
        echo "Cannot write to file ($pageData)";
        exit;
    }		
		
 echo "Success, wrote ($content) to file ($pageData)";

fclose($handle);
		
}

else {
    echo "The file $pageData is not writable";
}


header('Content-Type: application/json');

echo json_encode($data);

print_r ($data);

 
 
?>