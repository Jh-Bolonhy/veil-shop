jQuery(document).ready(function($){

	$(".appearing-text-container>a").click(function(event){
		event.preventDefault();
		var href = $( this ).attr('href');

		var ls_chopic = JSON.parse(localStorage.getItem("chosen_pics"));



		var ifDeleting = false;

		if (0 === ls_chopic.length) {
			console.log('empty |');
			ls_chopic.push(href);
		} else {
			console.log ('not empty');

			for (let i = 0; i < ls_chopic.length; i++){
				// console.log(ls_chopic[i] + " != " + href);
				if (ls_chopic[i] == href){
					ls_chopic.splice(i,1);
					ifDeleting = true;
					console.log ('Deleting |');
					ifDeleting = true;
				}
			};

			if (ifDeleting == false) {
				console.log('Adding |');
				if (ls_chopic.length >= 3) {
					alert("Пожалуйста, для начала ограничте выбор 3-мя вариантами");
					return;
				}
				ls_chopic.push(href);
			}
		}


		localStorage.setItem("chosen_pics", JSON.stringify(ls_chopic));
		console.log (localStorage.getItem("chosen_pics"));
		toggleHeartStatus(href);
		changingHeartCounter();

	});

	function updateChosenPics() {
		console.log('updating localStorage ch_pics');
		$.request('onUpdateChosenPics', {
	    success: function(data) {
		    localStorage.setItem("chosen_pics", JSON.stringify(data));
		    console.log(localStorage.getItem("chosen_pics"));
		    this.success(data).done( updateHeartStatuses() );
	    }
		});
	};

	function updateHeartStatuses() {
		console.log ('updating heart statuses');
		var ls_chosen_pics_arr = JSON.parse(localStorage.getItem("chosen_pics"));

		ls_chosen_pics_arr.forEach(function (subArrayItem) {
			toggleHeartStatus(subArrayItem);
		});
		changingHeartCounter();
	};

	function toggleHeartStatus(pic_url) {
		console.log ('togglingHeartStatus');
		$( ".picture-box>a" ).each(function() {
			if ($( this ).attr('href') == pic_url){
				if($( this ).next(".specific-appearing-symbol-container").hasClass('appeared')) {
					$( this ).next(".specific-appearing-symbol-container").removeClass('appeared');
				} else {
					$( this ).next(".specific-appearing-symbol-container").addClass('appeared');
				};
			};
		});
	};

	// Changing all the appearances of the header elements
	function changingHeartCounter() {

		console.log ('changingHeartCounter');
		var arr_length = JSON.parse(localStorage.getItem("chosen_pics")).length;

		if (arr_length>0) {
			$('.heart-counter').html("&nbsp" + arr_length + "&nbsp");
			$('.heart-counter').addClass("span-appeared");
			$('.heart-span').addClass("has-numbers");
			if (!$('.consult-link').parent().hasClass('active-page')){
				$('.consult-link').addClass("glow");
			}
		} else {
			$('.heart-counter').removeClass("span-appeared");
			$('.heart-span').removeClass("has-numbers");
			$('.consult-link').removeClass("glow");
		}

	}

	updateChosenPics();

});