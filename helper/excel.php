<?php 
class Excel {
	
	public function __construct()
    {
     	
    }
	
	public function create($rows)
	{
    	
$filename = uniqid().".xls";


header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename");  
header("Pragma: no-cache"); 
header("Expires: 0");


$separator = "\t";


if(!empty($rows)){
    
    
    echo implode($separator, array_keys($rows[0])) . "\n";
    
    
    foreach($rows as $row){
        
       
        foreach($row as $k => $v){
            $row[$k] = str_replace($separator . "$", "", $row[$k]);
            $row[$k] = preg_replace("/\r\n|\n\r|\n|\r/", " ", $row[$k]);
            $row[$k] = trim($row[$k]);
        }
        
     
        echo implode($separator, $row) . "\n";
    }
}
    
    
    }
	

}


?>

