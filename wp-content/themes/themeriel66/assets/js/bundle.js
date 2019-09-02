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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./scss/style.scss */ \"./src/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n\n\n(function () {\n  const themeUrl = 'http://localhost:3000/wp-content/themes/themeriel66';\n  const errorBubble = 'callback__error-field';\n  const errorTextbox = 'callback__textbox_error';\n  const correctTextbox = 'callback__textbox_correct';\n  const callbackName = 'callback_name';\n  const callbackPhone = 'callback_phone';\n  const callbackSubmit = 'js-callback-submit';\n  const name = document.querySelector(`input[name=\"${callbackName}\"]`);\n  const phone = document.querySelector(`input[name=\"${callbackPhone}\"]`);\n  const fields = [name, phone];\n\n  const showError = (item, errorText) => {\n    let errorField = item.parentNode.querySelector(`.${errorBubble}`);\n\n    if (!errorField) {\n      errorField = document.createElement('div');\n      errorField.classList.add(errorBubble);\n    }\n\n    errorField.innerText = errorText;\n    item.parentNode.appendChild(errorField);\n    item.classList.remove(correctTextbox);\n    item.classList.add(errorTextbox);\n  };\n\n  const removeError = item => {\n    const errorField = item.parentNode.querySelector(`.${errorBubble}`);\n\n    if (errorField !== null) {\n      errorField.remove();\n    }\n\n    item.classList.remove(errorTextbox);\n  };\n\n  const validate = item => {\n    const error = (item => {\n      if (item.getAttribute('name') === callbackName && item.value.length < 2) {\n        return 'Имя должно быть больше 2-х символов';\n      }\n\n      if (item.getAttribute('name') === callbackPhone) {\n        if (!item.value.replace(/\\s/g, '').match(/\\+79\\d{9}/g)) {\n          return 'Введите верный номер телефона';\n        }\n      }\n\n      return false;\n    })(item);\n\n    if (error) {\n      // no valid\n      showError(item, error);\n      return false;\n    } // valid field\n\n\n    removeError(item);\n    item.classList.add(correctTextbox);\n    return true;\n  };\n\n  async function submit(e) {\n    e.preventDefault();\n    let formData = new FormData();\n    formData.append('name', name.value);\n    formData.append('phone', phone.value);\n    const url = themeUrl + '/handlers/callback.php';\n    const res = await fetch(url, {\n      method: 'post',\n      body: formData\n    });\n    const body = await res.json();\n    console.log(body);\n  }\n\n  fields.forEach(item => {\n    if (item.getAttribute('name') === callbackPhone) {\n      $(item).mask(\"+7 000 000 00 00\"); // @TODO: заменить на реализацию на Vanilla JS\n\n      item.addEventListener('focus', () => {\n        item.setAttribute('placeholder', '+7 XXX XXX XX XX');\n        item.value = item.value.replace(/^(\\+7)(\\d{3})(\\d{3})(\\d{2})/g, '$1 $2 $3 $4 ');\n      });\n      item.addEventListener('blur', () => {\n        item.setAttribute('placeholder', 'Телефон');\n        item.value = item.value.replace(/\\s/g, '');\n      });\n    }\n\n    item.addEventListener('focus', removeError.bind(null, item));\n    item.addEventListener('blur', validate.bind(null, item));\n  });\n  document.querySelector(`.${callbackSubmit}`).addEventListener('click', e => {\n    e.preventDefault();\n    let isValid = true;\n    fields.forEach(field => {\n      if (!validate(field)) {\n        isValid = false;\n      }\n    });\n    if (isValid) submit(e);\n  });\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvaW5kZXguanM/YjYzNSJdLCJuYW1lcyI6WyJ0aGVtZVVybCIsImVycm9yQnViYmxlIiwiZXJyb3JUZXh0Ym94IiwiY29ycmVjdFRleHRib3giLCJjYWxsYmFja05hbWUiLCJjYWxsYmFja1Bob25lIiwiY2FsbGJhY2tTdWJtaXQiLCJuYW1lIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwicGhvbmUiLCJmaWVsZHMiLCJzaG93RXJyb3IiLCJpdGVtIiwiZXJyb3JUZXh0IiwiZXJyb3JGaWVsZCIsInBhcmVudE5vZGUiLCJjcmVhdGVFbGVtZW50IiwiY2xhc3NMaXN0IiwiYWRkIiwiaW5uZXJUZXh0IiwiYXBwZW5kQ2hpbGQiLCJyZW1vdmUiLCJyZW1vdmVFcnJvciIsInZhbGlkYXRlIiwiZXJyb3IiLCJnZXRBdHRyaWJ1dGUiLCJ2YWx1ZSIsImxlbmd0aCIsInJlcGxhY2UiLCJtYXRjaCIsInN1Ym1pdCIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImZvcm1EYXRhIiwiRm9ybURhdGEiLCJhcHBlbmQiLCJ1cmwiLCJyZXMiLCJmZXRjaCIsIm1ldGhvZCIsImJvZHkiLCJqc29uIiwiY29uc29sZSIsImxvZyIsImZvckVhY2giLCIkIiwibWFzayIsImFkZEV2ZW50TGlzdGVuZXIiLCJzZXRBdHRyaWJ1dGUiLCJiaW5kIiwiaXNWYWxpZCIsImZpZWxkIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQUE7QUFBQTs7QUFFQSxDQUFDLFlBQVc7QUFFUixRQUFNQSxRQUFRLEdBQUcscURBQWpCO0FBRUEsUUFBTUMsV0FBVyxHQUFHLHVCQUFwQjtBQUNBLFFBQU1DLFlBQVksR0FBRyx5QkFBckI7QUFDQSxRQUFNQyxjQUFjLEdBQUcsMkJBQXZCO0FBRUEsUUFBTUMsWUFBWSxHQUFHLGVBQXJCO0FBQ0EsUUFBTUMsYUFBYSxHQUFHLGdCQUF0QjtBQUNBLFFBQU1DLGNBQWMsR0FBRyxvQkFBdkI7QUFFQSxRQUFNQyxJQUFJLEdBQUdDLFFB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LENBQUNDLGFBQVQsQ0FBd0IsSUFBR0gsY0FBZSxFQUExQyxFQUE2QzBDLGdCQUE3QyxDQUE4RCxPQUE5RCxFQUF3RWhCLENBQUQsSUFBTztBQUMxRUEsS0FBQyxDQUFDQyxjQUFGO0FBRUEsUUFBSWtCLE9BQU8sR0FBRyxJQUFkO0FBQ0F4QyxVQUFNLENBQUNrQyxPQUFQLENBQWVPLEtBQUssSUFBSTtBQUNwQixVQUFJLENBQUM1QixRQUFRLENBQUM0QixLQUFELENBQWIsRUFBc0I7QUFDbEJELGVBQU8sR0FBRyxLQUFWO0FBQ0g7QUFDSixLQUpEO0FBTUEsUUFBSUEsT0FBSixFQUFhcEIsTUFBTSxDQUFDQyxDQUFELENBQU47QUFFaEIsR0FaRDtBQWNILENBN0dEIiwiZmlsZSI6Ii4vc3JjL2luZGV4LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3Njc3Mvc3R5bGUuc2Nzcyc7XHJcblxyXG4oZnVuY3Rpb24oKSB7XHJcblxyXG4gICAgY29uc3QgdGhlbWVVcmwgPSAnaHR0cDovL2xvY2FsaG9zdDozMDAwL3dwLWNvbnRlbnQvdGhlbWVzL3RoZW1lcmllbDY2JztcclxuXHJcbiAgICBjb25zdCBlcnJvckJ1YmJsZSA9ICdjYWxsYmFja19fZXJyb3ItZmllbGQnO1xyXG4gICAgY29uc3QgZXJyb3JUZXh0Ym94ID0gJ2NhbGxiYWNrX190ZXh0Ym94X2Vycm9yJztcclxuICAgIGNvbnN0IGNvcnJlY3RUZXh0Ym94ID0gJ2NhbGxiYWNrX190ZXh0Ym94X2NvcnJlY3QnO1xyXG5cclxuICAgIGNvbnN0IGNhbGxiYWNrTmFtZSA9ICdjYWxsYmFja19uYW1lJztcclxuICAgIGNvbnN0IGNhbGxiYWNrUGhvbmUgPSAnY2FsbGJhY2tfcGhvbmUnO1xyXG4gICAgY29uc3QgY2FsbGJhY2tTdWJtaXQgPSAnanMtY2FsbGJhY2stc3VibWl0JztcclxuXHJcbiAgICBjb25zdCBuYW1lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihgaW5wdXRbbmFtZT1cIiR7Y2FsbGJhY2tOYW1lfVwiXWApO1xyXG4gICAgY29uc3QgcGhvbmUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGBpbnB1dFtuYW1lPVwiJHtjYWxsYmFja1Bob25lfVwiXWApO1xyXG4gICAgY29uc3QgZmllbGRzID0gW25hbWUsIHBob25lXTtcclxuXHJcbiAgICBjb25zdCBzaG93RXJyb3IgPSAoaXRlbSwgZXJyb3JUZXh0KSA9PiB7XHJcbiAgICAgICAgbGV0IGVycm9yRmllbGQgPSBpdGVtLnBhcmVudE5vZGUucXVlcnlTZWxlY3RvcihgLiR7ZXJyb3JCdWJibGV9YCk7XHJcbiAgICAgICAgaWYgKCFlcnJvckZpZWxkKSB7XHJcbiAgICAgICAgICAgIGVycm9yRmllbGQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuICAgICAgICAgICAgZXJyb3JGaWVsZC5jbGFzc0xpc3QuYWRkKGVycm9yQnViYmxlKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgZXJyb3JGaWVsZC5pbm5lclRleHQgPSBlcnJvclRleHQ7XHJcbiAgICAgICAgaXRlbS5wYXJlbnROb2RlLmFwcGVuZENoaWxkKGVycm9yRmllbGQpO1xyXG4gICAgICAgIGl0ZW0uY2xhc3NMaXN0LnJlbW92ZShjb3JyZWN0VGV4dGJveCk7XHJcbiAgICAgICAgaXRlbS5jbGFzc0xpc3QuYWRkKGVycm9yVGV4dGJveCk7XHJcbiAgICB9O1xyXG5cclxuICAgIGNvbnN0IHJlbW92ZUVycm9yID0gKGl0ZW0pID0+IHtcclxuICAgICAgICBjb25zdCBlcnJvckZpZWxkID0gaXRlbS5wYXJlbnROb2RlLnF1ZXJ5U2VsZWN0b3IoYC4ke2Vycm9yQnViYmxlfWApO1xyXG4gICAgICAgIGlmIChlcnJvckZpZWxkICE9PSBudWxsKSB7XHJcbiAgICAgICAgICAgIGVycm9yRmllbGQucmVtb3ZlKCk7XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGl0ZW0uY2xhc3NMaXN0LnJlbW92ZShlcnJvclRleHRib3gpO1xyXG4gICAgfTtcclxuXHJcbiAgICBjb25zdCB2YWxpZGF0ZSA9IChpdGVtKSA9PiB7XHJcbiAgICAgICAgY29uc3QgZXJyb3IgPSAoKGl0ZW0pID0+IHtcclxuICAgICAgICAgICAgaWYgKGl0ZW0uZ2V0QXR0cmlidXRlKCduYW1lJykgPT09IGNhbGxiYWNrTmFtZSAmJiBpdGVtLnZhbHVlLmxlbmd0aCA8IDIpIHtcclxuICAgICAgICAgICAgICAgIHJldHVybiAn0JjQvNGPINC00L7Qu9C20L3QviDQsdGL0YLRjCDQsdC+0LvRjNGI0LUgMi3RhSDRgdC40LzQstC+0LvQvtCyJztcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBpZiAoaXRlbS5nZXRBdHRyaWJ1dGUoJ25hbWUnKSA9PT0gY2FsbGJhY2tQaG9uZSkge1xyXG4gICAgICAgICAgICAgICAgaWYgKCFpdGVtLnZhbHVlLnJlcGxhY2UoL1xccy9nLCAnJykubWF0Y2goL1xcKzc5XFxkezl9L2cpKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuICfQktCy0LXQtNC40YLQtSDQstC10YDQvdGL0Lkg0L3QvtC80LXRgCDRgtC10LvQtdGE0L7QvdCwJztcclxuICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICByZXR1cm4gZmFsc2U7XHJcbiAgICAgICAgfSkoaXRlbSk7XHJcblxyXG4gICAgICAgIGlmIChlcnJvcikgeyAgLy8gbm8gdmFsaWRcclxuICAgICAgICAgICAgc2hvd0Vycm9yKGl0ZW0sIGVycm9yKTtcclxuICAgICAgICAgICAgcmV0dXJuIGZhbHNlO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgLy8gdmFsaWQgZmllbGRcclxuICAgICAgICByZW1vdmVFcnJvcihpdGVtKTtcclxuICAgICAgICBpdGVtLmNsYXNzTGlzdC5hZGQoY29ycmVjdFRleHRib3gpO1xyXG4gICAgICAgIHJldHVybiB0cnVlO1xyXG4gICAgfTtcclxuICAgIFxyXG4gICAgYXN5bmMgZnVuY3Rpb24gc3VibWl0KGUpIHtcclxuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XHJcblxyXG4gICAgICAgIGxldCBmb3JtRGF0YSA9IG5ldyBGb3JtRGF0YSgpO1xyXG4gICAgICAgIGZvcm1EYXRhLmFwcGVuZCgnbmFtZScsIG5hbWUudmFsdWUpO1xyXG4gICAgICAgIGZvcm1EYXRhLmFwcGVuZCgncGhvbmUnLCBwaG9uZS52YWx1ZSk7XHJcblxyXG4gICAgICAgIGNvbnN0IHVybCA9IHRoZW1lVXJsICsgJy9oYW5kbGVycy9jYWxsYmFjay5waHAnO1xyXG4gICAgICAgIGNvbnN0IHJlcyA9IGF3YWl0IGZldGNoKHVybCwgeyBtZXRob2Q6ICdwb3N0JywgYm9keTogZm9ybURhdGEgfSk7XHJcbiAgICAgICAgY29uc3QgYm9keSA9IGF3YWl0IHJlcy5qc29uKCk7XHJcbiAgICAgICAgY29uc29sZS5sb2coYm9keSk7XHJcbiAgICB9XHJcblxyXG4gICAgZmllbGRzLmZvckVhY2goKGl0ZW0pID0+IHtcclxuXHJcbiAgICAgICAgaWYgKGl0ZW0uZ2V0QXR0cmlidXRlKCduYW1lJykgPT09IGNhbGxiYWNrUGhvbmUpIHtcclxuICAgICAgICAgICAgJChpdGVtKS5tYXNrKFwiKzcgMDAwIDAwMCAwMCAwMFwiKTsgIC8vIEBUT0RPOiDQt9Cw0LzQtdC90LjRgtGMINC90LAg0YDQtdCw0LvQuNC30LDRhtC40Y4g0L3QsCBWYW5pbGxhIEpTXHJcblxyXG4gICAgICAgICAgICBpdGVtLmFkZEV2ZW50TGlzdGVuZXIoJ2ZvY3VzJywgKCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgaXRlbS5zZXRBdHRyaWJ1dGUoJ3BsYWNlaG9sZGVyJywgJys3IFhYWCBYWFggWFggWFgnKTtcclxuICAgICAgICAgICAgICAgIGl0ZW0udmFsdWUgPSBpdGVtLnZhbHVlLnJlcGxhY2UoL14oXFwrNykoXFxkezN9KShcXGR7M30pKFxcZHsyfSkvZywgJyQxICQyICQzICQ0ICcpO1xyXG4gICAgICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgICAgIGl0ZW0uYWRkRXZlbnRMaXN0ZW5lcignYmx1cicsICgpID0+IHsgXHJcbiAgICAgICAgICAgICAgICBpdGVtLnNldEF0dHJpYnV0ZSgncGxhY2Vob2xkZXInLCAn0KLQtdC70LXRhNC+0L0nKTsgXHJcbiAgICAgICAgICAgICAgICBpdGVtLnZhbHVlID0gaXRlbS52YWx1ZS5yZXBsYWNlKC9cXHMvZywgJycpO1xyXG4gICAgICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgfVxyXG5cclxuICAgICAgICBpdGVtLmFkZEV2ZW50TGlzdGVuZXIoJ2ZvY3VzJywgcmVtb3ZlRXJyb3IuYmluZChudWxsLCBpdGVtKSk7XHJcbiAgICAgICAgaXRlbS5hZGRFdmVudExpc3RlbmVyKCdibHVyJywgdmFsaWRhdGUuYmluZChudWxsLCBpdGVtKSk7XHJcbiAgICAgICAgXHJcbiAgICB9KTtcclxuXHJcbiAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGAuJHtjYWxsYmFja1N1Ym1pdH1gKS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIChlKSA9PiB7XHJcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgICBsZXQgaXNWYWxpZCA9IHRydWU7XHJcbiAgICAgICAgZmllbGRzLmZvckVhY2goZmllbGQgPT4ge1xyXG4gICAgICAgICAgICBpZiAoIXZhbGlkYXRlKGZpZWxkKSkge1xyXG4gICAgICAgICAgICAgICAgaXNWYWxpZCA9IGZhbHNlO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgIGlmIChpc1ZhbGlkKSBzdWJtaXQoZSk7XHJcblxyXG4gICAgfSk7XHJcblxyXG59KSgpO1xyXG5cclxuXHJcblxyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/index.js\n");

/***/ }),

/***/ "./src/scss/style.scss":
/*!*****************************!*\
  !*** ./src/scss/style.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvc2Nzcy9zdHlsZS5zY3NzPzJjOTAiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEiLCJmaWxlIjoiLi9zcmMvc2Nzcy9zdHlsZS5zY3NzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLy8gcmVtb3ZlZCBieSBleHRyYWN0LXRleHQtd2VicGFjay1wbHVnaW4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./src/scss/style.scss\n");

/***/ })

/******/ });