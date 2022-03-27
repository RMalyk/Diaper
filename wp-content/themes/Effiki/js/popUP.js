$body = $('body');

$body.on('click', function (event) {
	// event.preventDefault();

	if ($(event.target).attr('class')) { //проверяем на наличие ксласса в общем
		$classArr = $(event.target).attr('class').split(/\s+/); //получаем все кслассы элемента, на который нажали

		for (let i = 0; i < $classArr.length; i++) {
			switch ($classArr[i]) {
				case 'card__footer-btn':
					changeClassPopUp('.popUp__checkout');
					$('body').addClass('noScroll');
					break;
				case 'header__callback-btn':
					changeClassPopUp('.popUp__call_back');
					$('body').addClass('noScroll');
					break;
				case 'btn-order':
					changeClassPopUp('.popUp__checkout');
					$('body').addClass('noScroll');
					break;
				case 'checkout__btn':
					changeClassPopUp('.popUp__checkout');
					$('body').toggleClass('noScroll');
					break;
				case 'header__mobile-menu-btn':
				case 'burger':
				case 'burger-line':
				case 'header__mobile-name':
					$('.mobile__menu-list').toggleClass('mobile_menu_isActive');
					$('body').toggleClass('noScroll');
					break;
				case 'popUp-wrapper':
					$('.popUp-wrapper').removeClass('popUp-isActive');
					$('body').removeClass('noScroll');
					break;
				default:
					break;
			}
		}
	}
});


function changeClassPopUp(popUp) {
	let activepopUp = $(popUp);
	activepopUp.toggleClass('popUp-isActive');
}


$(window).on('scroll', function () {
	if (window.pageYOffset >= 740) {
		$('.checkout__btn').addClass('is_visibility');
	} else{
		$('.checkout__btn').removeClass('is_visibility');
	}
})