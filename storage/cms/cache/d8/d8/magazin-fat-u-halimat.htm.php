<?php 
class Cms5caf2dfd7f8e8560100287_7871e77e7112729010d69c7a98f4e07cClass extends Cms\Classes\PageCode
{
public function onInit() {
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	//$this->page->pics_chosen = json_encode($_SESSION['pics_chosen']);
}

public function onUpdateChosenPics() {
	$return_arr=[];
	if (isset($_SESSION['pics_chosen'])){
		foreach ($_SESSION['pics_chosen'] as $key => $item){
			foreach ($item as $url => $title){
				$return_arr[] = $url;
			}
		}
	}
	return $return_arr;
}

public function onPicClick() {

	$pic_url = post('pic_url');
	$pic_title = post('pic_title');
	$pic_description = post('pic_description');

	//$_SESSION['pics_chosen'] =[];
	$pics_chosen = $_SESSION['pics_chosen'];

//die;

	// Var for checking if deleting
	$ifDeleting = false;
	if (empty($pics_chosen)) {
		echo '| array empty | Adding. ';
		$pics_chosen[] = [$pic_url => $pic_description];
	} else { // $pics_chosen is _NOT_ empty

		echo '| Array is not empty ';
		foreach ($pics_chosen as $key => $item) {
			// Checking if pic.url is already in the array
			foreach ($item as $url => $description) {
				echo "\n".$key." => ".$url." => ".$description;
				if ($url == $pic_url){
					// We already have this picture in $pics_chosen = So we are deleting
					array_splice($pics_chosen,$key,1);
					$ifDeleting = true;
					echo '| Deleting ';
					break;
				}
			}

		}
		if ($ifDeleting == false) { // In that case we have to add element as well


			if (count($pics_chosen) >= 3){
				echo '| Array is full. ';
				exit;
			}

			echo '| Adding. ';
			$pics_chosen[] = [$pic_url => $pic_description];
		}
	}

	$_SESSION['pics_chosen'] = $pics_chosen;
	$this->page['for_dump'] = $pics_chosen;
	var_dump($_SESSION['pics_chosen']);
	echo "\n";
	exit;
}
}
