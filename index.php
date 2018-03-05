<?php 
function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',  
        '/[^\S ]+\</s',  
        '/(\s)+/s'       
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}

$p = explode("/", $_SERVER['REQUEST_URI'] );


//OLD URLS			
if($p[1] == "borneo") {$p[1] = "our-adventures";}			
if($p[1] == "batu-punggul-and-sapulot") {$p[1] = "orou-sapulot";}		
if($p[1] == "monkey-dives") {$p[1] = "our-adventures";}			

//START
			
if($p[1] == "about-us") {
	$t = "About Us | Meaningful Adventures with Sticky Rice Travel";
	$d = "Sticky Rice Travel is a boutique travel agency based in Kota Kinabalu, Malaysia. We believe in responsible travel and aim to create meaningful adventures in Malaysian Borneo.";
}

if($p[1] == "jobs") {
	$t = "Jobs | Hunt for Talent";
	$d = "We are on the hunt for talent! If you are driven, motivated, and passionate about travel – we want you! Join a creative and dynamic work environment";
}

if($p[1] == "sticky-notes") {
	$t = "Sticky Notes | Read Updates From Borneo";
	$d = "Updates on Malaysian Borneo from your friends at Sticky Rice Travel";
}		
			
if($p[1] == "our-adventures") {
	$t = "Our Adventures | Travel, Trips, Package Holidays and more in Borneo";
	$d = "Book amazing Borneo holidays with Sticky Rice Travel. We offer trips, holidays packages, tours, mountain climbing, diving and more Meaningful Adventures!";
}

//DANUM VALLEY

if($p[1] == "our-adventures" && $p[2] == "danum-valley") {
	$t = "Borneo Adventure Tourism, Danum Valley, Sabah Packages";
	$d = "Book amazing Borneo holidays with Sticky Rice Travel. Now is the best time to visit Borneo, especially Danum Valley in Malaysia. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "bike-tour-bed-breakfast") {
	$t = "Danum Valley | Bike & Tour Bed & Breakfast";
	$d = "Book amazing Borneo holidays with Sticky Rice Travel. Now is the best time to visit Borneo, especially Danum Valley in Malaysia. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-cycling") {
	$t = "Danum Valley | Cycling Add-on";
	$d = "Book amazing Borneo holidays with Sticky Rice Travel. Now is the best time to visit Borneo, especially Danum Valley in Malaysia. Meaningful Adventures!";
}


if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "borneo-rainforest-lodge") {
	$t = "Danum Valley | Borneo Rainforest Lodge";
	$d = "Book amazing Borneo holidays with Sticky Rice Travel. Stay in a 5 star lodge and experience wilderness and nature in Danum Valley. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center") {
	$t = "Danum Valley Accommodation, Field Center, Sabah Travel";
	$d = "Book amazing Borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center" && $p[4] == "purut-camping") {
	$t = "Danum Valley | Sungai Purut Camping";
	$d = "Book amazing Borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center" && $p[4] == "expedition") {
	$t = "Danum Valley | Expedition to Mt. Danum";
	$d = "Book amazing Borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center" && $p[4] == "jungle-to-luxury") {
	$t = "Danum Valley | Wild Jungles to Luxury";
	$d = "Book amazing Bborneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "danum-valley" && $p[3] == "danum-valley-field-center" && $p[4] == "explorer") {
	$t = "Danum Valley | DVFC Explorer";
	$d = "Book amazing Borneo holidays with Sticky Rice. A destination with high concentration of wildlife & old forests, for nature geek. Meaningful Adventures!";
}

//KINABATANGAN

if($p[1] == "our-adventures" && $p[2] == "kinabatangan") {
	$t = "Things to do in Borneo, Travel and Visit Kinabatangan";
	$d = "Book amazing Borneo holidays with Sticky Rice Travel. Experience Kinabatangan River Cruise, accommodation, homestay and tours. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "abai-homestay") {
	$t = "Kinabatangan | Abai Homestay Sabah";
	$d = "Book amazing Borneo holidays with Sticky Rice. We encourage tourists to consider home stay arrangements while visiting Borneo. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "ecocamp") {
	$t = "Kinabatangan | Eco Camp, Borneo Eco Tour Adventures";
	$d = "Book amazing Borneo holidays with Sticky Rice. Stay at the only accommodation on Kinabatangan that is located in a forest reserve. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "supu-camp") {
	$t = "Kinabatangan | Supu Camp, River Cruise in Sabah Borneo";
	$d = "Book amazing borneo holidays with Sticky Rice. Borneo River Cruise, forest trekking, spot wildlife, explore limestone caves & more. Meaningful Adventures";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "kinabatangan-wetlands-resort") {
	$t = "Kinabatangan | Kinabatangan Wetlands Resort";
	$d = "Book amazing Borneo holidays with Sticky Rice. Supu Camp, Homestay, River Cruise, spot wildlife, explore limestone caves and more. Meaningful Adventures!";
}

if($p[1] == "our-adventures" && $p[2] == "kinabatangan" && $p[3] == "borneo-nature-lodge") {
	$t = "Kinabatangan | Borneo Nature Lodge";
	$d = "Book amazing Borneo holidays with Sticky Rice. See feeding of Sepilok Orang Utan, kinabatangan river cruise, in search of wildlife. Meaningful Adventures";
}


// Page not found

if($p[1] == "404") {
	$t = "Sticky Rice Travel";
	$d = "Book amazing borneo holidays with Sticky Rice Travel. Take a look at some of our friends, it is worth it. Let them be part of your trip in Borneo too.";	
}

$recursive = true;
$search_in = array('html', 'htm', 'php');
function curPageURL() {return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";}
function list_files($dir){
	global $recursive, $search_in;

	$result = array();
	if(is_dir($dir)){
		if($dh = opendir($dir)){
			while (($file = readdir($dh)) !== false) {
				if(!($file == '.' || $file == '..')){
					$file = $dir.'/'.$file;
					if(is_dir($file) && $recursive == true && $file != './.' && $file != './..'){
						$result = array_merge($result, list_files($file));
					}
					else if(!is_dir($file)){
						if(in_array(get_file_extension($file), $search_in)){
							$result[] = $file;
						}
					}
				}
			}
		}
	}
	return $result;
}

function get_file_extension($filename){
	$result = '';
	$parts = explode('.', $filename);
	if(is_array($parts) && count($parts) > 1){
		$result = end($parts);
	}
	return $result;
}

ob_start("sanitize_output");
include './header.php';

	$files = list_files('1');
	$tempUrl = "";
	$notfound = true;
	if(isset($p[1])){
		if($p[1] == "home" || $p[1] == ""){$tempUrl = "./1/base";}
		else{$tempUrl = "1/".$p[1];}
	}
	if(isset($p[2]) && $p[2] != ""){$tempUrl = $tempUrl."/".$p[2];}
	if(isset($p[3]) && $p[3] != ""){$tempUrl = $tempUrl."/".$p[3];}
	if(isset($p[4]) && $p[4] != ""){$tempUrl = $tempUrl."/".$p[4];}
	$tempUrl = $tempUrl.".php";

	foreach($files as $file){
		if($tempUrl == $file){
			include $tempUrl;
			$notfound = false;
		}
	}

	if($notfound == true){
		include "./1/404.php";
		http_response_code(404);
	}

include './footer.php';
?>