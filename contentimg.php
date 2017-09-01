<?php 
function processDrpdown($selectedVal) {
$dirname = $_SERVER['DOCUMENT_ROOT'] . "/imgtests/";
$images = glob($dirname . "*.png");
foreach($images as $image) {
	$imageNameOnly = str_replace($_SERVER['DOCUMENT_ROOT'], "http://".$_SERVER['HTTP_HOST'], $image );
	if( strpos(strtolower($imageNameOnly),strtolower($selectedVal)) !== false ) {
			    $image = str_replace($_SERVER['DOCUMENT_ROOT'], "http://".$_SERVER['HTTP_HOST'],$image );		
		    echo '<img style="width:200px; height:150px;" src="'.$image.'" /><br />';		   
		}	
	}
}        
if (isset($_POST['inputValueV'])){
    //call the function or execute the code
    processDrpdown($_POST['inputValueV']);
}
?>
