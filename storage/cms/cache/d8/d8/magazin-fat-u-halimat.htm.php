<?php 
class Cms5c69329728bd1743282227_a1e34348ac2292dbee8cc38ae6acf6c5Class extends Cms\Classes\PageCode
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
		$pics_chosen[] = [$pic_url => $pic_title];
	} else { // $pics_chosen is _NOT_ empty

		echo '| Array is not empty ';
		foreach ($pics_chosen as $key => $item) {
			// Checking if pic.url is already in the array
			foreach ($item as $url => $title) {
				echo "\n".$key." => ".$url." => ".$title;
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
			$pics_chosen[] = [$pic_url => $pic_title];
		}
	}

	$_SESSION['pics_chosen'] = $pics_chosen;
	$this->page['for_dump'] = $pics_chosen;
	var_dump($_SESSION['pics_chosen']);
	echo "\n";
	exit;
}
}
