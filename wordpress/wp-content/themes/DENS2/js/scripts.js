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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/app.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _price_table__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./price_table */ "./src/js/price_table.js");
/* harmony import */ var _map__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./map */ "./src/js/map.js");
/* harmony import */ var _gallery__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./gallery */ "./src/js/gallery.js");
/* harmony import */ var _slider__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./slider */ "./src/js/slider.js");
/* harmony import */ var _menu_hamburger__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./menu_hamburger */ "./src/js/menu_hamburger.js");





$(function () {
  Object(_price_table__WEBPACK_IMPORTED_MODULE_0__["default"])();
  Object(_slider__WEBPACK_IMPORTED_MODULE_3__["default"])();
  Object(_gallery__WEBPACK_IMPORTED_MODULE_2__["default"])();
  Object(_menu_hamburger__WEBPACK_IMPORTED_MODULE_4__["default"])();

  if ($(".p-main").children().hasClass("map")) {
    Object(_map__WEBPACK_IMPORTED_MODULE_1__["default"])();
  }
});

/***/ }),

/***/ "./src/js/gallery.js":
/*!***************************!*\
  !*** ./src/js/gallery.js ***!
  \***************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function gallery() {
  $.fancybox.defaults.thumbs.autoStart = true;
  $().fancybox({
    selector: '.gallery .slick-slide:not(.slick-cloned)',
    backFocus: false
  });
  $(".gallery").slick({
    slidesToShow: 3,
    infinite: true,
    dots: false,
    arrows: false
  });
  $(document).on('click', '.slick-cloned', function (e) {
    var $slides = $(this).parent().children('.slick-slide:not(.slick-cloned)');
    $slides.eq(($(this).attr("data-slick-index") || 0) % $slides.length).trigger("click.fb-start", {
      $trigger: $(this)
    });
    return false;
  });
}

/* harmony default export */ __webpack_exports__["default"] = (gallery);

/***/ }),

/***/ "./src/js/map.js":
/*!***********************!*\
  !*** ./src/js/map.js ***!
  \***********************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function map() {
  mapboxgl.accessToken = 'pk.eyJ1IjoiYXhkYWRhY3oiLCJhIjoiY2p1MDd5ZmRiMjBzZzRhbHo5dDFweWx4aCJ9.FNAE9mAdO-SOD9DySqgU6g';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/axdadacz/ck5i35chk0nvj1imvwul65ymp',
    zoom: 15,
    center: [20.9777248, 52.234896]
  });
  map.on("load", function () {
    /* Image: An image is loaded and added to the map. */
    map.loadImage("/wordpress/wp-content/themes/DENS2/images/marker.png", function (error, image) {
      if (error) throw error;
      map.addImage("custom-marker", image);
      /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */

      map.addLayer({
        id: "markers",
        type: "symbol",

        /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
        source: {
          type: "geojson",
          data: {
            type: "FeatureCollection",
            features: [{
              "type": "Feature",
              "geometry": {
                "type": "Point",
                "coordinates": ["20.9772000", "52.234896"]
              }
            }]
          }
        },
        layout: {
          "icon-image": "custom-marker",
          'icon-size': 0.09
        }
      });
    });
  });
}

/* harmony default export */ __webpack_exports__["default"] = (map);

/***/ }),

/***/ "./src/js/menu_hamburger.js":
/*!**********************************!*\
  !*** ./src/js/menu_hamburger.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function showMenu() {
  $(".toggle-main-nav").on("click", function (event) {
    event.preventDefault();
    $(".page_nav_toggle").toggleClass("show");
  });
  $(".page_nav_toggle .page_nav_list_button_link").on("click", function (event) {
    event.preventDefault();
    $(".page_nav_toggle .page_nav_sublist").toggleClass("show");
  });
}

/* harmony default export */ __webpack_exports__["default"] = (showMenu);

/***/ }),

/***/ "./src/js/price_table.js":
/*!*******************************!*\
  !*** ./src/js/price_table.js ***!
  \*******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function showPriceDetails() {
  $(".accordion_tab_arrow").on("click", function () {
    $(this).parent().parent().children("table").fadeToggle("slow");
  });
}

/* harmony default export */ __webpack_exports__["default"] = (showPriceDetails);

/***/ }),

/***/ "./src/js/slider.js":
/*!**************************!*\
  !*** ./src/js/slider.js ***!
  \**************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function slider() {
  $('.autoplay').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    pauseOnFocus: false,
    pauseOnHover: false
  });
}

;
/* harmony default export */ __webpack_exports__["default"] = (slider);

/***/ })

/******/ });
//# sourceMappingURL=scripts.js.map