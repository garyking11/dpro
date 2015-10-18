<?php


class contentManager
{

    public function getVars()
    {
        return $this->json;
    }

    protected function isValidJson($string)
    {
        return is_object(json_decode($string));
    }

    protected function getJson()
    {
        $arr = array($_POST);

        if (file_exists($this->jsonFileName)) {
            $json = file_get_contents($this->jsonFileName);
            $arr = ($this->isValidJson($json) && strtolower($json) != 'array' ? json_decode($json, true) : array());
        }

        return $arr;
    }

    public function __construct()
    {

        $this->jsonFileName = dirname(__FILE__) . '/page-data.json';

        $this->content_properties = $this->getJson();
        $content_properties = $this->content_properties;
 
    }

    public function save($data)
    {

        $data = json_decode($data, true);

        /*
         //start update page_data
         $key = $_POST['$index'];
        if($key){ $page_data[$key] = $data; }*/



		$old_data = $this->getJson();
		$data = array_merge_recursive($data, $old_data);

        $output = array();

        if (!$jsonFile = fopen('page-data.json', 'w')) {
            $output['status'] = false;
            $output['msg'] = "Could not open file.";
        } else {
            if (count($this->json) < 1) {
                $this->json = $data;
            } else {
                foreach ($data as $d => $dd) {
                    $this->json[$d] = $data[$d];
                }
            }
            $jsonSave = json_encode($this->json);
            if (fwrite($jsonFile, $jsonSave) === false) {
                $output['status'] = false;
                $output['msg'] = "Could not save file.";
            } else {
                $output['status'] = true;
                $output['msg'] = "File successfully saved.";

            }
        }
        fclose($jsonFile);
        chmod('page-data.json', 0777);
        return $output;
    }
	
	
	/* update function 
	send [whichItem] 
	*/


} // end contentManager
