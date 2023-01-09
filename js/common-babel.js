"use strict";

;window.onload = function () {
	// -- Common data BEGIN
	var breakpoints = {
		xl: 1200,
		lg: 992,
		md: 768,
		sm: 576
	};
	var isDesktop = $(window).width() >= breakpoints.md ? true : false;
	var isEdge = /Edge/.test(navigator.userAgent),
	    IEVersion = void 0;
	// -- Common data END


	// -- Check IE version BEGIN
	var checkIeVersion = function checkIeVersion() {
		if (navigator.appName == 'Microsoft Internet Explorer') {
			var userAgent = navigator.userAgent,
			    regV = new RegExp("MSIE ([0-9]{1,}[\\.0-9]{0,})");

			if (regV.exec(userAgent) !== null) IEVersion = parseFloat(RegExp.$1);
		} else if (navigator.appName == "Netscape") {
			if (navigator.appVersion.indexOf('Trident') === -1) IEVersion = 12; // -- Normal browser
			else IEVersion = 11;
		}

		// -- Initialization styles END
		if (isEdge) $("head").append("<link rel='stylesheet' href='css/styles-edge.min.css'>");else if (IEVersion === 10 || IEVersion === 11) $("head").append("<link rel='stylesheet' href='css/styles-ie.min.css'>");
		// -- Initialization styles END
	};
	checkIeVersion();
	// -- Check IE version END


	// -- Common functions BEGIN
	var debounce = function debounce(func, wait, immediate) {
		var timeout = void 0;

		return function () {
			var context = this,
			    args = arguments;

			var later = function later() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};

			var callNow = immediate && !timeout;
			clearTimeout(timeout);
			timeout = setTimeout(later, wait || 200);
			if (callNow) func.apply(context, args);
		};
	};

	var inputFilter = function inputFilter($fields, _inputFilter) {
		return $fields.on("input keydown keyup mousedown mouseup select contextmenu drop", function () {

			if (_inputFilter(this.value)) {
				this.oldValue = this.value;
				this.oldSelectionStart = this.selectionStart;
				this.oldSelectionEnd = this.selectionEnd;
			} else if (this.hasOwnProperty("oldValue")) {
				this.value = this.oldValue;
				this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
			}
		});
	};

	var cleanFieldsForms = function cleanFieldsForms($forms) {
		$forms.each(function () {
			$(this).trigger('reset');

			$(this).find("input, textarea").blur().removeClass("form__field_error");
		});
	};
	// -- Common functions END


	// -- Form BEGIN
	var formElements = function formElements() {
		var $allForms = $("form"),
		    $fieldsDynamic = $(".form__wrap-field_dynamic .form__field"),
		    $fieldsOnlyNumber = $(".field-only-number");

		var countInvalidFields = 0;

		var regObj = {
			phone: /^(\+375)-(\d{2})-(\d{3})-(\d{2})-(\d{2})$/,
			email: /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/,
			text: /./,
			name: /^[а-яА-ЯёЁa-zA-Z -]+$/,
			number: /^-?\d*$/

			// -- Functions BEGIN
		};var changeStateForm = function changeStateForm(form) {
			var $wrapperForm = form.parent();
			$wrapperForm.addClass("wrap-form_loading");
		};

		var sendMessage = function sendMessage(data, formType, $wrapperCurForm) {
			$.ajax({
				url: "send.php",
				type: "POST",
				data: data,

				success: function success(response) {
					if (formType == "popup-form") {
						var $activePopup = $(".popup_visible");

						setTimeout(function () {
							$activePopup.removeClass("popup_visible");
						}, 500);

						setTimeout(function () {
							$(".popup-message").addClass("popup_visible popup-message_success");
							$wrapperCurForm.removeClass("wrap-form_loading");
						}, 800);
					} else if (formType == "feedback-form") {
						setTimeout(function () {
							$wrapperCurForm.removeClass("wrap-form_loading").addClass("wrap-form_success");
						}, 500);

						setTimeout(function () {
							$wrapperCurForm.removeClass("wrap-form_success");
						}, 3500);
					}
				},

				error: function error(response) {
					console.log(response);
					if (formType == "popup-form") {
						var $activePopup = $(".popup_visible");

						setTimeout(function () {
							$activePopup.removeClass("popup_visible");
						}, 500);

						setTimeout(function () {
							$wrapperCurForm.removeClass("wrap-form_loading");
							$(".popup-message").addClass("popup_visible popup-message_error");
						}, 800); // -- After hide form popup
					} else if (formType == "feedback-form") {

						setTimeout(function () {
							$wrapperCurForm.removeClass("wrap-form_loading").addClass("wrap-form_error");
						}, 800);

						setTimeout(function () {
							$wrapperCurForm.removeClass("wrap-form_error");
						}, 3000);
					}
				}

			});
		};
		// -- Functions END


		// -- Validation BEGIN
		var validation = function validation() {
			if ($allForms.length) {
				$allForms.submit(function (e) {
					var _this = this;

					e.preventDefault();

					var $curForm = $(this);
					formType = $curForm.attr("data-form-type"), $curFormFields = $curForm.find(".form__field, .form__select");

					$curFormFields.removeClass("form__field_error form__select_error");
					countInvalidFields = 0;

					$curFormFields.each(function () {
						var $field = $(this),
						    fieldType = $field.attr("name"),
						    val = $field.val();

						if (fieldType !== "select" && val.length < 1 && !regObj[fieldType].test(val)) {
							$field.addClass("form__field_error");
							countInvalidFields++;
						} else if (fieldType === "select" && !!$(this).find("option:checked").attr("data-type-option")) {
							$field.addClass("form__select_error");
							countInvalidFields++;
						}
					});

					if (countInvalidFields == 0) {
						changeStateForm($curForm);
						sendMessage($curForm.serialize(), formType, $curForm.parent());

						setTimeout(function () {
							cleanFieldsForms($(_this));
						}, 300); // -- After hide form and start loader
					}
				});
			}
		};
		// -- Validation END


		// -- Set fields dynamic states BEGIN
		var setFieldsFocus = function setFieldsFocus() {
			if ($fieldsDynamic.length) {
				$fieldsDynamic.focus(function () {
					$(this).parent().addClass("form__wrap-field_dynamic_focus");
				});

				$fieldsDynamic.blur(function () {
					if (!$(this).val()) $(this).parent().removeClass("form__wrap-field_dynamic_focus");
				});
			}
		};
		// -- Set fields states END


		// -- Initialization BEGIN
		$("input[type='tel']").mask('+375-00-000-00-00');
		inputFilter($fieldsOnlyNumber, function (value) {
			return regObj.number.test(value);
		});
		setFieldsFocus();
		validation();
		// -- Initialization END
	};
	// -- Form END


	// -- Popups BEGIN
	var popups = function popups() {
		var $btnsShowPopups = $(".btn-popup"),
		    $elementsHidePopups = $(".popup__close"),
		    $allPopups = $(".popup"),
		    $popupLayer = $(".popup-layer"),
		    $page = $("html, body");

		var $curPopup = void 0,
		    $curBtn = void 0;

		// -- Functions BEGIN
		var showPopup = function showPopup() {
			var key = $curBtn.attr("data-popup-key");
			$curPopup = $(".popup[data-popup-key=" + key + "]");

			if ($curPopup.length) {
				$allPopups.removeClass("popup_visible popup_loading");
				$popupLayer.addClass("popup-layer_visible");
				$curPopup.addClass("popup_visible popup_disabled");
			}

			$page.addClass("page-fixed");
			setTimeout(function () {
				$curPopup.removeClass("popup_disabled");
			}, 800); // -- After popups show animation show
		};

		var hidePopups = function hidePopups() {
			$allPopups.removeClass("\n\t\t\t\tpopup_visible\n\t\t\t\tpopup-message_success\n\t\t\t\tpopup-message_error\n\t\t\t\tpopup_loading\n\t\t\t");

			$popupLayer.removeClass("popup-layer_visible");

			setTimeout(function () {
				$page.toggleClass("page-fixed");
				$curBtn.removeClass("btn-popup_disabled");
				cleanFieldsForms($allPopups.find("form"));
			}, 800); // -- After popups show animation hide
		};
		// -- Functions END


		// -- Show popop BEGIN
		if ($btnsShowPopups.length && $allPopups.length) {
			$btnsShowPopups.on("click", function (e) {
				e.preventDefault();
				$curBtn = $(this);

				if (!$curBtn.hasClass("btn-popup_disabled")) showPopup();

				$curBtn.addClass("btn-popup_disabled");
			});
		}
		// -- Show popop END


		// -- Hide popups BEGIN
		if ($elementsHidePopups.length) {
			$elementsHidePopups.on("click", function () {
				if (!$curPopup.hasClass("popup_disabled")) hidePopups();
			});
		}
		// -- Hide popups END
	};
	// -- Popups END


	// -- Magnific popup BEGIN
	var magnificPopupInit = function magnificPopupInit() {
		var $btns = $(".btn-magnific-popup");

		// -- Functions BEGIN
		var magnificPopupStart = function magnificPopupStart() {
			$btns.magnificPopup({
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 450,
				closeMarkup: "<div class='mfp-close__custom mfp-close btn-close'></div>",
				midClick: true
			});
		};
		// -- Functions END


		if ($btns.length) magnificPopupStart();
	};
	// -- Magnific popup BEGIN


	// -- WOW js animation BEGIN
	var initWowJs = function initWowJs() {
		var wow = new WOW().init();
		var prevOffset = $(window).scrollTop();
		scrollToTopFlag = true, scrollToBottomFlag = true;

		// -- Functions BEGIN
		var checkScrollOffset = function checkScrollOffset() {
			var curOffset = $(window).scrollTop();

			if (prevOffset < curOffset && scrollToBottomFlag) {
				// -- Scroll to bottom
				$(".wow.fadeInUp, .wow.fadeInUpFull").removeClass("fadeInUp fadeInUpFull").addClass("fadeInDown");

				scrollToBottomFlag = false;
				scrollToTopFlag = true;
			} else if (prevOffset > curOffset && scrollToTopFlag) {
				// -- Scroll to top
				$(".wow.fadeInDown").removeClass("fadeInDown").addClass("fadeInUp");

				scrollToBottomFlag = true;
				scrollToTopFlag = false;
			}

			prevOffset = curOffset;
		};

		var replaceTypeAnimationWhenScrollTop = function replaceTypeAnimationWhenScrollTop() {
			$(window).on("scroll load", debounce(checkScrollOffset, 300));
		};

		var setMobileAnimationDelay = function setMobileAnimationDelay() {
			var $allElementsDelayMobile = $("*[data-wow-delay-mobile]");

			// -- Functions BEGIN
			var setDelayStart = function setDelayStart() {
				$allElementsDelayMobile.each(function () {
					var mobileDelay = $(this).attr("data-wow-delay-mobile");
					$(this).attr("data-wow-delay", mobileDelay);
				});
			};
			// -- Functions END


			if ($allElementsDelayMobile.length) setDelayStart();
		};

		var removeAnimationInIE = function removeAnimationInIE() {
			if (isEdge || IEVersion <= 11) {
				$(".main-banner .wow").removeClass("wow fadeInUp fadeInUpFull").removeAttr("data-wow-delay data-wow-duration");
			}
		};
		// -- Functions END


		// -- Initialization BEGIN
		if (!isDesktop) setMobileAnimationDelay();
		replaceTypeAnimationWhenScrollTop();
		removeAnimationInIE();
		// -- Initialization END
	};
	// -- WOW js animation END


	// -- Number counter BEGIN
	var numberCounter = function numberCounter() {
		var $wrapperItemsCounter = $(".wrap-items-counter"),
		    $itemsCounter = $wrapperItemsCounter.find(".item-counter"),
		    screenHeight = $(window).height(),
		    wrapperItemsCounterHeight = $wrapperItemsCounter.outerHeight(true),
		    wrapperItemsCounterOffsetScrollBottom = $wrapperItemsCounter.offset().top,
		    wrapperItemsCounterOffsetScrollTop = wrapperItemsCounterOffsetScrollBottom + wrapperItemsCounterHeight;

		var animationStatus = true,
		    prevOffset = $(window).scrollTop();

		// -- Functions BEGIN
		var startCounter = function startCounter() {
			$itemsCounter.spincrement({
				thousandSeparator: "",
				duration: 2500
			});

			animationStatus = false;
		};

		var checkWindowPosition = function checkWindowPosition() {
			if (!animationStatus) return false;
			var screenTop = $(window).scrollTop(),
			    resultOffsetToBottom = screenHeight * 8 / 10 + screenTop,
			    resultOffsetToTop = screenHeight * 2 / 10 + screenTop;

			if (prevOffset < screenTop && resultOffsetToBottom >= wrapperItemsCounterOffsetScrollBottom) startCounter();else if (prevOffset > screenTop && resultOffsetToTop <= wrapperItemsCounterOffsetScrollTop) startCounter();

			prevOffset = screenTop;
		};
		// -- Functions END


		if ($wrapperItemsCounter.length && $itemsCounter.length) {
			$(window).on("scroll load", debounce(checkWindowPosition, 100));
		}
	};
	// -- Number counter END


	// -- Slick slider BEGIN
	var initSlickSlider = function initSlickSlider() {
		var sliderStorePhotos = {
			slider: $(".store-photos .store-photos__list"),
			options: {
				speed: 800,
				slidesToScroll: 1,
				slidesToShow: 2,
				dots: false,
				arrows: false,
				responsive: [{
					breakpoint: breakpoints.lg,
					settings: {
						centerMode: true
					}
				}, {
					breakpoint: breakpoints.sm,
					settings: {
						centerMode: true,
						slidesToShow: 1,
						variableWidth: true
					}
				}]
			}
		};

		if (sliderStorePhotos.slider.length && Object.keys(sliderStorePhotos.options).length && $(window).width() < breakpoints.lg) sliderStorePhotos.slider.slick(sliderStorePhotos.options);
	};
	// -- Slick slider END


	// -- Preloader BEGIN
	var preloader = function preloader() {
		var $bodyElement = $("body");

		if (IEVersion < 12 || isEdge) {
			setTimeout(function () {
				$bodyElement.addClass("body-visible");
			}, 400);
		} else {
			$bodyElement.addClass("body-visible");
		}
	};
	// -- Preloader END


	// -- Reload page when change device BEGIN
	var reloadPage = function reloadPage() {
		var curWindowWidth = $(window).width();
		var reloadFlag = true;

		if (isDesktop) {

			$(window).resize(function () {
				if ($(this).width() <= breakpoints.md && reloadFlag) {
					reloadFlag = false;
					setTimeout(function () {
						window.location.reload();
					});
				};
			});
		} else {

			$(window).resize(function () {
				if ($(this).width() >= breakpoints.md && reloadFlag) {
					reloadFlag = false;
					setTimeout(function () {
						window.location.reload();
					});
				};
			});
		}
	};
	// -- Reload page when change device END


	// -- Select2 BEGIN
	var initSelect2 = function initSelect2() {
		var $selects = $("select");

		// -- Functions BEGIN
		var initSelect = function initSelect() {
			$selects.each(function () {
				var $wrapCurSelect = $(this).parent(),
				    placeholder = $(this).attr("data-custom-placeholder");

				var $curSelect = $(this).select2({
					dropdownParent: $wrapCurSelect,
					placeholder: placeholder
				});
			});
		};
		// -- Functions END


		if ($selects.length) initSelect();
	};
	// -- Select2 END


	// -- Init lazy load BEGIN
	var initLazyLoad = function initLazyLoad() {
		var lazy = new LazyLoad({
			elements_selector: ".lazy"
		});
	};
	// -- Init lazy load END


	// -- Lazy load responsive BEGIN
	var lazyLoadResponsive = function lazyLoadResponsive() {
		var $lazyElements = $(".lazy-responsive");

		// -- Functions BEGIN
		var responsiveSetImg = function responsiveSetImg() {
			var dataType = isDesktop == true ? "desktop" : "mobile";

			$lazyElements.each(function () {
				var curImgUrl = $(this).attr("data-bg-" + dataType);

				if (!!curImgUrl) {
					$(this).attr("data-bg", curImgUrl).addClass("lazy");
				}
			});
		};
		// -- Functions END


		if ($lazyElements.length) responsiveSetImg();
	};
	// -- Lazy load responsive END


	// -- Main banner animation slides BEGIN
	var mainBannerAnimationSlides = function mainBannerAnimationSlides() {
		var $wrapperBannerSlides = $(".main-banner__wrap-slide"),
		    $bannerSlides = $wrapperBannerSlides.find(".main-banner__slide"),
		    slidesCount = $bannerSlides.length;

		// -- Functions BEGIN
		var changeSlides = function changeSlides() {
			var nextSlide = void 0;
			var curSlider = $wrapperBannerSlides.find(".main-banner__slide_active"),
			    curSliderIndex = curSlider.index() + 1;

			$bannerSlides.removeClass("main-banner__slide_active");

			if (curSliderIndex == slidesCount) nextSlide = $bannerSlides.eq(0);else if (curSliderIndex < slidesCount) nextSlide = curSlider.next(".main-banner__slide");

			nextSlide.addClass("main-banner__slide_active");
		};

		var startAnimation = function startAnimation() {
			setInterval(changeSlides, 4000);
		};
		// -- Functions END


		if ($wrapperBannerSlides.length && $bannerSlides.length) {
			startAnimation();
		}
	};
	// -- Main banner animation slides END


	// -- Initialization work functions BEGIN
	var initializationFunctions = function initializationFunctions() {
		lazyLoadResponsive();
		preloader();
		formElements();
		popups();
		magnificPopupInit();
		initSlickSlider();
		reloadPage();
		initWowJs();
		numberCounter();
		initSelect2();
		initLazyLoad();
		mainBannerAnimationSlides();
	};

	if (IEVersion >= 10) initializationFunctions();
	// -- Initialization work functions END
};