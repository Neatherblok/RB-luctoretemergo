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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/grayscale.js":
/*!***********************************!*\
  !*** ./resources/js/grayscale.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  "use strict"; // Start of use strict
  // Smooth scrolling using jQuery easing

  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 70
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  }); // Closes responsive menu when a scroll trigger link is clicked

  $('.js-scroll-trigger').click(function () {
    $('.navbar-collapse').collapse('hide');
  }); // Activate scrollspy to add active class to navbar items on scroll

  $('body').scrollspy({
    target: '#mainNav',
    offset: 100
  }); // Collapse Navbar

  var navbarCollapse = function navbarCollapse() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  }; // Collapse now if page is not at top


  navbarCollapse(); // Collapse the navbar when page is scrolled

  $(window).scroll(navbarCollapse);
})(jQuery); // End of use strict

/***/ }),

/***/ "./resources/sass/grayscale.scss":
/*!***************************************!*\
  !*** ./resources/sass/grayscale.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\n\r\n  background-color: $white;\r\n                   ^\r\n      Undefined variable.\n  ╷\n3 │   background-color: $white;\n  │                     ^^^^^^\n  ╵\n  resources\\sass\\_navbar.scss 3:21  @import\n  stdin 3:9                         root stylesheet\r\n      in C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\resources\\sass\\_navbar.scss (line 3, column 21)\n    at runLoaders (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\webpack\\lib\\NormalModule.js:316:20)\n    at C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\loader-runner\\lib\\LoaderRunner.js:367:11\n    at C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\loader-runner\\lib\\LoaderRunner.js:233:18\n    at context.callback (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\loader-runner\\lib\\LoaderRunner.js:111:13)\n    at render (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass-loader\\dist\\index.js:89:7)\n    at Function.call$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:54337:16)\n    at _render_closure1.call$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:33509:12)\n    at _RootZone.runBinary$3$3 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:19817:18)\n    at _RootZone.runBinary$3 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:19821:19)\n    at _FutureListener.handleError$1 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:18286:19)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:18574:40)\n    at Object._Future__propagateToListeners (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:3484:88)\n    at _Future._completeError$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:18410:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:17809:12)\n    at Object._asyncRethrow (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:3240:17)\n    at C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:10537:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:3263:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:17830:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:17822:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:19817:18)\n    at _RootZone.runBinary$3 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:19821:19)\n    at _FutureListener.handleError$1 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:18286:19)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:18574:40)\n    at Object._Future__propagateToListeners (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:3484:88)\n    at _Future._completeError$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:18410:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:17809:12)\n    at Object._asyncRethrow (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:3240:17)\n    at C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:12240:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:3263:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:17830:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:17822:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:19817:18)\n    at _RootZone.runBinary$3 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:19821:19)\n    at _FutureListener.handleError$1 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:18286:19)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:18574:40)\n    at Object._Future__propagateToListeners (C:\\Users\\Ricardo de Deijn\\Documents\\GitHub\\homesteadVM\\LEE_reddingsbrigade\\node_modules\\sass\\sass.dart.js:3484:88)");

/***/ }),

/***/ 0:
/*!*************************************************************************!*\
  !*** multi ./resources/js/grayscale.js ./resources/sass/grayscale.scss ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Ricardo de Deijn\Documents\GitHub\homesteadVM\LEE_reddingsbrigade\resources\js\grayscale.js */"./resources/js/grayscale.js");
module.exports = __webpack_require__(/*! C:\Users\Ricardo de Deijn\Documents\GitHub\homesteadVM\LEE_reddingsbrigade\resources\sass\grayscale.scss */"./resources/sass/grayscale.scss");


/***/ })

/******/ });