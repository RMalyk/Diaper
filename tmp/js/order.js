function shoppingСartСount(elem) {
	$count = 0;
	$sum = elem.closest('.order-col').next().children();
	$cost = elem.closest('.order-col').prev().children().text().replace('грн', '').trim();

	if (elem.hasClass('inc')) {
		$count = elem.prev().val();
	} else {
		$count = elem.next().val();
	}

	$sum.text(($count * $cost) + ' грн');

	$totalSum = 0;
	for (let i = 0; i < $('.order__sum').length; i++) {
		$orderSum = $('.order__sum')[i];
		$totalSum += Number($($orderSum).text().replace('грн', '').trim());
	}

	$totalOrder = $('.total__order span');

	$totalOrder.text($totalSum + ' грн');
}


