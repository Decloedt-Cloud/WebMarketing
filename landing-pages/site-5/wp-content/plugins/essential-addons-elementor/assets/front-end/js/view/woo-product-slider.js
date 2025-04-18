/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/view/woo-product-slider.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/view/woo-product-slider.js":
/*!*******************************************!*\
  !*** ./src/js/view/woo-product-slider.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("eael.hooks.addAction(\"init\", \"ea\", function () {\n  function get_configurations($wooProductSlider) {\n    var $autoplay = $wooProductSlider.data(\"autoplay\") !== undefined ? $wooProductSlider.data(\"autoplay\") : 999999,\n      $pagination = $wooProductSlider.data(\"pagination\") !== undefined ? $wooProductSlider.data(\"pagination\") : \".swiper-pagination\",\n      $arrow_next = $wooProductSlider.data(\"arrow-next\") !== undefined ? $wooProductSlider.data(\"arrow-next\") : \".swiper-button-next\",\n      $arrow_prev = $wooProductSlider.data(\"arrow-prev\") !== undefined ? $wooProductSlider.data(\"arrow-prev\") : \".swiper-button-prev\",\n      $speed = $wooProductSlider.data(\"speed\") !== undefined ? $wooProductSlider.data(\"speed\") : 400,\n      $loop = $wooProductSlider.data(\"loop\") !== undefined ? $wooProductSlider.data(\"loop\") : 0,\n      $grab_cursor = $wooProductSlider.data(\"grab-cursor\") !== undefined ? $wooProductSlider.data(\"grab-cursor\") : 0,\n      $pause_on_hover = $wooProductSlider.data(\"pause-on-hover\") !== undefined ? $wooProductSlider.data(\"pause-on-hover\") : \"\",\n      $content_effect = $wooProductSlider.data(\"animation\") !== undefined ? $wooProductSlider.data(\"animation\") : \"zoomIn\",\n      $showEffect = $wooProductSlider.data(\"show-effect\") !== undefined ? $wooProductSlider.data(\"show-effect\") : \"\";\n    return {\n      content_effect: $content_effect,\n      pause_on_hover: $pause_on_hover,\n      showEffect: $showEffect,\n      direction: \"horizontal\",\n      speed: $speed,\n      //effect: \"slide\",\n      centeredSlides: true,\n      grabCursor: $grab_cursor,\n      autoHeight: true,\n      loop: $loop,\n      //slidesPerGroup: 3,\n      loopedSlides: 3,\n      autoplay: {\n        delay: $autoplay,\n        disableOnInteraction: false\n      },\n      pagination: {\n        el: $pagination,\n        clickable: true\n      },\n      navigation: {\n        nextEl: $arrow_next,\n        prevEl: $arrow_prev\n      },\n      slidesPerView: 1,\n      spaceBetween: 30\n    };\n  }\n  function autoPlayManager(element, options, event) {\n    if (options.autoplay.delay === 0) {\n      event.autoplay.stop();\n    }\n    if (options.pause_on_hover && options.autoplay.delay !== 0) {\n      element.on(\"mouseenter\", function () {\n        var _event$autoplay;\n        event === null || event === void 0 || (_event$autoplay = event.autoplay) === null || _event$autoplay === void 0 || _event$autoplay.pause();\n      });\n      element.on(\"mouseleave\", function () {\n        var _event$autoplay2;\n        event === null || event === void 0 || (_event$autoplay2 = event.autoplay) === null || _event$autoplay2 === void 0 || _event$autoplay2.run();\n      });\n    }\n  }\n  var wooProductSlider = function wooProductSlider($scope, $) {\n    eael.hooks.doAction(\"quickViewAddMarkup\", $scope, $);\n    var $wooProductSlider = $scope.find(\".eael-woo-product-slider\").eq(0);\n    var $sliderOptions = get_configurations($wooProductSlider);\n    if ($sliderOptions.autoplay.delay === 0) {\n      $sliderOptions.autoplay = false;\n    }\n    if ($sliderOptions.showEffect === 'yes') {\n      // $carouselOptions.slidesPerView = 'auto';\n      $sliderOptions.on = {\n        init: function init() {\n          $wooProductSlider.find('.swiper-slide-active .product-details-wrap').addClass('animate__animated' + ' animate__' + $sliderOptions.content_effect);\n        },\n        transitionStart: function transitionStart() {\n          $wooProductSlider.find('.product-details-wrap').removeClass('animate__animated animate__' + $sliderOptions.content_effect);\n        },\n        transitionEnd: function transitionEnd(swiper) {\n          $wooProductSlider.find('.swiper-slide-active .product-details-wrap').addClass('animate__animated' + ' animate__' + $sliderOptions.content_effect);\n        }\n      };\n    }\n    swiperLoader($wooProductSlider, $sliderOptions).then(function (eaelwooProductSlider) {\n      autoPlayManager($wooProductSlider, $sliderOptions, eaelwooProductSlider);\n\n      //gallery pagination\n      var $paginationGallerySelector = $scope.find('.eael-woo-product-slider-container .eael-woo-product-slider-gallary-pagination').eq(0);\n      if ($paginationGallerySelector.length > 0) {\n        swiperLoader($paginationGallerySelector, {\n          spaceBetween: 20,\n          centeredSlides: true,\n          touchRatio: 0.2,\n          slideToClickedSlide: true,\n          loop: $sliderOptions.loop,\n          //slidesPerGroup: 1,\n          loopedSlides: 3,\n          slidesPerView: 3,\n          freeMode: true,\n          watchSlidesVisibility: true,\n          watchSlidesProgress: true\n        }).then(function ($paginationGallerySlider) {\n          eaelwooProductSlider.controller.control = $paginationGallerySlider;\n          $paginationGallerySlider.controller.control = eaelwooProductSlider;\n        });\n      }\n    });\n    eael.hooks.doAction(\"quickViewPopupViewInit\", $scope, $);\n    if (isEditMode) {\n      $(\".eael-product-image-wrap .woocommerce-product-gallery\").css(\"opacity\", \"1\");\n    }\n    var WooProductSliderLoader = function WooProductSliderLoader(element) {\n      var productSliders = $(element).find('.eael-woo-product-slider');\n      if (productSliders.length) {\n        productSliders.each(function () {\n          if ($(this)[0].swiper) {\n            $(this)[0].swiper.destroy(true, true);\n            var _$sliderOptions = get_configurations($(this));\n            var $this = $(this);\n            swiperLoader($(this)[0], _$sliderOptions).then(function (eaelwooProductSlider) {\n              autoPlayManager($this, _$sliderOptions, eaelwooProductSlider);\n            });\n          }\n        });\n      }\n    };\n    eael.hooks.addAction(\"ea-toggle-triggered\", \"ea\", WooProductSliderLoader);\n    eael.hooks.addAction(\"ea-lightbox-triggered\", \"ea\", WooProductSliderLoader);\n    eael.hooks.addAction(\"ea-advanced-tabs-triggered\", \"ea\", WooProductSliderLoader);\n    eael.hooks.addAction(\"ea-advanced-accordion-triggered\", \"ea\", WooProductSliderLoader);\n  };\n  var swiperLoader = function swiperLoader(swiperElement, swiperConfig) {\n    if ('undefined' === typeof Swiper || 'function' === typeof Swiper) {\n      var asyncSwiper = elementorFrontend.utils.swiper;\n      return new asyncSwiper(swiperElement, swiperConfig).then(function (newSwiperInstance) {\n        return newSwiperInstance;\n      });\n    } else {\n      return swiperPromise(swiperElement, swiperConfig);\n    }\n  };\n  var swiperPromise = function swiperPromise(swiperElement, swiperConfig) {\n    return new Promise(function (resolve, reject) {\n      var swiperInstance = new Swiper(swiperElement, swiperConfig);\n      resolve(swiperInstance);\n    });\n  };\n  if (eael.elementStatusCheck('productSliderLoad')) {\n    return false;\n  }\n  elementorFrontend.hooks.addAction(\"frontend/element_ready/eael-woo-product-slider.default\", wooProductSlider);\n});\n\n//# sourceURL=webpack:///./src/js/view/woo-product-slider.js?");

/***/ })

/******/ });