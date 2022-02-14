var main__slider = new Swiper(".main__slider", {
	loop: true,
	pagination: {
		el: ".swiper-pagination",
		type: "fraction",
	},
	navigation: {
		nextEl: ".main__slider-button-next",
		prevEl: ".main__slider-button-prev",
	},
});

var cards__slider = new Swiper(".cards__slider", {
	slidesPerView: 1,
	spaceBetween: 20,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	breakpoints: {
		830: {
			slidesPerView: 2,
			spaceBetween: 20
		},
		1250: {
			slidesPerView: 3,
			spaceBetween: 20
		}
	}
});

var gallery__slider = new Swiper(".gallery__slider", {
	slidesPerView: 4,
	spaceBetween: 30,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	loop: true,
});

var reviews__slider = new Swiper(".reviews__slider", {
	slidesPerView: 1,
	spaceBetween: 20,
	pagination: {
		el: ".swiper-pagination",
		clickable: true,
	},
	breakpoints: {
		954: {
			slidesPerView: 2,
			spaceBetween: 40
		},
		1450: {
			slidesPerView: 3,
			spaceBetween: 40
		}
	}

});



$decriments = $('.dec');
$increments = $('.inc');

$decriments.click(function () {
	let input = $(this).next();
	let val = Number(input.val());
	let min = Number(input.attr('min'));

	if (val > min) {
		input.val(val - 1);
		if ((val - 1) == min) {
			$(this).find('path').attr('fill', '#E5E5E5');
		} else {
			$increments.find('path').attr('fill', '#414141');
		}
	}
});

$increments.click(function () {
	let input = $(this).prev();
	let val = Number(input.val());
	let max = Number(input.attr('max'));

	if (val < max) {
		input.val(val + 1);
		if ((val + 1) == max) {
			$(this).find('path').attr('fill', '#E5E5E5');
		} else {
			$decriments.find('path').attr('fill', '#414141');
		}
	}
});



