<?php

public function onPicClick() {

	$pic_url = post('pic_url');

	$pics_chosen = $_SESSION['pics_chosen'];

	// Var for checking if deleting
	$ifDeleting = false;
	if (empty($pics_chosen)) {
		echo '| array empty | Adding. ';
		$pics_chosen[] = $pic_url;
	} else { // $pics_chosen is _NOT_ empty
		// Checking if pic.clicked is already in the array
		echo '| Array is not empty ';
		foreach ($pics_chosen as $key => $item) {
			if ($item == $pic_url){
				// We already have this picture in $pics_chosen = So we are deleting
				array_splice($pics_chosen,$key,1);
				$ifDeleting = true;
				echo '| Deleting ';
				break;
			}
		}
		if ($ifDeleting == false) { // In that case we have to add element as well

			if (count($pics_chosen) >= 3){
				echo '| Array is full. ';
				exit;
			}
			echo '| Adding. ';
			$pics_chosen[] = $pic_url;
		}
	}

	$_SESSION['pics_chosen'] = $pics_chosen;
	$this->page['for_dump'] = $pics_chosen;
	var_dump($_SESSION['pics_chosen']);
	echo "\n";
	exit;
}

	public function onUpdateChosenPics() {

		return json_encode($_SESSION['pics_chosen']);
	}



