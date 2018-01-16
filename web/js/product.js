// SLIDE

var pmdSliderRange = document.getElementById('pmd-slider-range');
noUiSlider.create(pmdSliderRange, {
	start: [100, 300],
	connect: true,
	tooltips: [ wNumb({ decimals: 0 }), wNumb({ decimals: 0 }) ],
	range: {
		'min': 52,
		'max': 400
	}
});

// CATEGORIES

$(".categories__category-items").hover(function () {
	$(".categories__category-items p").css("color", "#ef5b70");
	$(".categories__category-items i").css("color", "#ef5b70");
}, function () {
	$(".categories__category-items p").css("color", "#6f6e6e");
	$(".categories__category-items i").css("color", "#6f6e6e");
});

$("#categoryItems").on("show.bs.collapse", function () {
	$(".categories__category-items i").css("transition", "transform 0.5s");
	$(".categories__category-items i").css("transform", "rotate(180deg)");
	$(".categories__category-items").off('mouseenter mouseleave');
	$(".categories__category-items p").css("color", "#ef5b70");
	$(".categories__category-items i").css("color", "#ef5b70");
});

$("#categoryItems").on("hide.bs.collapse", function () {
	$(".categories__category-items i").css("transition", "transform 0.5s");
	$(".categories__category-items i").css("transform", "rotate(0)");
	$(".categories__category-items").hover(function () {
		$(".categories__category-items p").css("color", "#ef5b70");
		$(".categories__category-items i").css("color", "#ef5b70");
	}, function () {
		$(".categories__category-items p").css("color", "#6f6e6e");
		$(".categories__category-items i").css("color", "#6f6e6e");
	});
});

// BRAND

$(".categories__brand-items").hover(function () {
	$(".categories__brand-items p").css("color", "#ef5b70");
	$(".categories__brand-items i").css("color", "#ef5b70");
}, function () {
	$(".categories__brand-items p").css("color", "#6f6e6e");
	$(".categories__brand-items i").css("color", "#6f6e6e");
});

$("#brandItems").on("show.bs.collapse", function () {
	$(".categories__brand-items i").css("transition", "transform 0.5s");
	$(".categories__brand-items i").css("transform", "rotate(180deg)");
	$(".categories__brand-items").off('mouseenter mouseleave');
	$(".categories__brand-items p").css("color", "#ef5b70");
	$(".categories__brand-items i").css("color", "#ef5b70");
});

$("#brandItems").on("hide.bs.collapse", function () {
	$(".categories__brand-items i").css("transition", "transform 0.5s");
	$(".categories__brand-items i").css("transform", "rotate(0)");
	$(".categories__brand-items").hover(function () {
		$(".categories__brand-items p").css("color", "#ef5b70");
		$(".categories__brand-items i").css("color", "#ef5b70");
	}, function () {
		$(".categories__brand-items p").css("color", "#6f6e6e");
		$(".categories__brand-items i").css("color", "#6f6e6e");
	});
});

// DESIGN

$(".categories__designer-items").hover(function () {
	$(".categories__designer-items p").css("color", "#ef5b70");
	$(".categories__designer-items i").css("color", "#ef5b70");
}, function () {
	$(".categories__designer-items p").css("color", "#6f6e6e");
	$(".categories__designer-items i").css("color", "#6f6e6e");
});

$("#designerItems").on("show.bs.collapse", function () {
	$(".categories__designer-items i").css("transition", "transform 0.5s");
	$(".categories__designer-items i").css("transform", "rotate(180deg)");
	$(".categories__designer-items").off('mouseenter mouseleave');
	$(".categories__designer-items p").css("color", "#ef5b70");
	$(".categories__designer-items i").css("color", "#ef5b70");
});

$("#designerItems").on("hide.bs.collapse", function () {
	$(".categories__designer-items i").css("transition", "transform 0.5s");
	$(".categories__designer-items i").css("transform", "rotate(0)");
	$(".categories__designer-items").hover(function () {
		$(".categories__designer-items p").css("color", "#ef5b70");
		$(".categories__designer-items i").css("color", "#ef5b70");
	}, function () {
		$(".categories__designer-items p").css("color", "#6f6e6e");
		$(".categories__designer-items i").css("color", "#6f6e6e");
	});
});