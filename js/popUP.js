/**
 * 
 * Работает ==================>
 */

// $body = $('body');

// $('.card__footer-btn').on('click', function (event) {

// 	changeClassPopUp('.popUp__checkout');
// });


// function changeClassPopUp(popUp) {
// 	let activepopUp = $(popUp);
// 	console.log(activepopUp	);
// 	activepopUp.toggleClass('popUp-isActive');
// }


/**
 * 
 * Работает ==================<
 */

// $body = $('body');

// function checkPopUpclick(elem) {
// 	switch (elem) {
// 		case 'header__callback-btn':
// 			return '.popUp__call_back';
// 		case 'card__footer-btn':
// 			return '.popUp__checkout';
// 		default:
// 			$('.popUp-wrapper').removeClass('popUp-isActive');
// 			break;
// 	}
// }



// console.log(checkPopUpclick($body));

$body = $('body');

$body.on('click', function (event) {
	event.preventDefault();

	if ($(event.target).attr('class')) { //проверяем на наличие ксласса в общем
		$classArr = $(event.target).attr('class').split(/\s+/); //получаем все кслассы элемента, на который нажали

		for (let i = 0; i < $classArr.length; i++) {
			switch ($classArr[i]) {
				case 'card__footer-btn':
					console.log(1);
					break;
				case 'header__callback-btn':
					console.log(2);
					break;
				case 'btn-order':
					console.log(2);
					break;

				default:
					break;
			}


		}

	}







	// console.log($(event.target).attr('class').split(/\s+/));

	// if ($(event.target).hasClass('card__footer-btn') || $(event.target).hasClass('btn-order')) {

	// 	changeClassPopUp('.popUp__checkout');

	// } else if ($(event.target).hasClass('header__callback-btn')) {

	// 	changeClassPopUp('.popUp__call_back');

	// } else if ($(event.target).hasClass('popUp-wrapper')) {

	// 	$('.popUp-wrapper').removeClass('popUp-isActive');

	// } else {
	// 	return;
	// }
});


// $('.card__footer-btn').on('click', function(e) {
// 	e.preventDefault();
// 	changeClassPopUp('.popUp__checkout');
// });
// $('.popUp-wrapper').click(function name() {
// 	$('.popUp-wrapper').removeClass('popUp-isActive');
// });


function changeClassPopUp(popUp) {
	let activepopUp = $(popUp);
	activepopUp.toggleClass('popUp-isActive');
}
