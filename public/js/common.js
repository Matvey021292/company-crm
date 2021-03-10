/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/common.js":
/*!********************************!*\
  !*** ./resources/js/common.js ***!
  \********************************/
/***/ (() => {

eval("$(document).ready(function () {\n  var token = $('[name=\"csrf-token\"]').attr('content');\n  $(\"#companyInputFile\").change(function () {\n    var files = $(this)[0].files;\n\n    if (files.length > 0) {\n      $('.custom-file-label[for=\"companyInputFile\"]').text(files[0].name);\n      var reader = new FileReader();\n\n      reader.onload = function (e) {\n        $(\"#prevLogo\").attr('src', e.target.result);\n      }; // read the image file as a data URL.\n\n\n      reader.readAsDataURL(this.files[0]);\n    } else {\n      alert(\"Please select a file.\");\n    }\n  });\n  $('.delete').click(function () {\n    var $this = $(this);\n    $.ajax({\n      url: $this.data('action'),\n      type: 'DELETE',\n      data: {\n        \"id\": $this.attr('id'),\n        \"_method\": 'DELETE',\n        \"_token\": token\n      },\n      success: function success() {\n        $this.parents('tr').remove();\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY29tbW9uLmpzPzZiMDQiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJ0b2tlbiIsImF0dHIiLCJjaGFuZ2UiLCJmaWxlcyIsImxlbmd0aCIsInRleHQiLCJuYW1lIiwicmVhZGVyIiwiRmlsZVJlYWRlciIsIm9ubG9hZCIsImUiLCJ0YXJnZXQiLCJyZXN1bHQiLCJyZWFkQXNEYXRhVVJMIiwiYWxlcnQiLCJjbGljayIsIiR0aGlzIiwiYWpheCIsInVybCIsImRhdGEiLCJ0eXBlIiwic3VjY2VzcyIsInBhcmVudHMiLCJyZW1vdmUiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUNDLFFBQUQsQ0FBRCxDQUFZQyxLQUFaLENBQWtCLFlBQVk7QUFDMUIsTUFBSUMsS0FBSyxHQUFHSCxDQUFDLENBQUMscUJBQUQsQ0FBRCxDQUF5QkksSUFBekIsQ0FBOEIsU0FBOUIsQ0FBWjtBQUVBSixFQUFBQSxDQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkssTUFBdkIsQ0FBOEIsWUFBWTtBQUN0QyxRQUFJQyxLQUFLLEdBQUdOLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUSxDQUFSLEVBQVdNLEtBQXZCOztBQUVBLFFBQUlBLEtBQUssQ0FBQ0MsTUFBTixHQUFlLENBQW5CLEVBQXNCO0FBQ2xCUCxNQUFBQSxDQUFDLENBQUMsNENBQUQsQ0FBRCxDQUFnRFEsSUFBaEQsQ0FBcURGLEtBQUssQ0FBQyxDQUFELENBQUwsQ0FBU0csSUFBOUQ7QUFFQSxVQUFJQyxNQUFNLEdBQUcsSUFBSUMsVUFBSixFQUFiOztBQUNBRCxNQUFBQSxNQUFNLENBQUNFLE1BQVAsR0FBZ0IsVUFBU0MsQ0FBVCxFQUFZO0FBQ3hCYixRQUFBQSxDQUFDLENBQUMsV0FBRCxDQUFELENBQWVJLElBQWYsQ0FBb0IsS0FBcEIsRUFBMkJTLENBQUMsQ0FBQ0MsTUFBRixDQUFTQyxNQUFwQztBQUNILE9BRkQsQ0FKa0IsQ0FPbEI7OztBQUNBTCxNQUFBQSxNQUFNLENBQUNNLGFBQVAsQ0FBcUIsS0FBS1YsS0FBTCxDQUFXLENBQVgsQ0FBckI7QUFDSCxLQVRELE1BU087QUFDSFcsTUFBQUEsS0FBSyxDQUFDLHVCQUFELENBQUw7QUFDSDtBQUNKLEdBZkQ7QUFpQkFqQixFQUFBQSxDQUFDLENBQUMsU0FBRCxDQUFELENBQWFrQixLQUFiLENBQW1CLFlBQVc7QUFDMUIsUUFBSUMsS0FBSyxHQUFHbkIsQ0FBQyxDQUFDLElBQUQsQ0FBYjtBQUVBQSxJQUFBQSxDQUFDLENBQUNvQixJQUFGLENBQU87QUFDSEMsTUFBQUEsR0FBRyxFQUFFRixLQUFLLENBQUNHLElBQU4sQ0FBVyxRQUFYLENBREY7QUFFSEMsTUFBQUEsSUFBSSxFQUFFLFFBRkg7QUFHSEQsTUFBQUEsSUFBSSxFQUFFO0FBQ0YsY0FBTUgsS0FBSyxDQUFDZixJQUFOLENBQVcsSUFBWCxDQURKO0FBRUYsbUJBQVcsUUFGVDtBQUdGLGtCQUFVRDtBQUhSLE9BSEg7QUFRSHFCLE1BQUFBLE9BQU8sRUFBRSxtQkFBVztBQUNoQkwsUUFBQUEsS0FBSyxDQUFDTSxPQUFOLENBQWMsSUFBZCxFQUFvQkMsTUFBcEI7QUFDSDtBQVZFLEtBQVA7QUFZSCxHQWZEO0FBZ0JILENBcENEIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAgIHZhciB0b2tlbiA9ICQoJ1tuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoJ2NvbnRlbnQnKTtcblxuICAgICQoXCIjY29tcGFueUlucHV0RmlsZVwiKS5jaGFuZ2UoZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgZmlsZXMgPSAkKHRoaXMpWzBdLmZpbGVzO1xuXG4gICAgICAgIGlmIChmaWxlcy5sZW5ndGggPiAwKSB7XG4gICAgICAgICAgICAkKCcuY3VzdG9tLWZpbGUtbGFiZWxbZm9yPVwiY29tcGFueUlucHV0RmlsZVwiXScpLnRleHQoZmlsZXNbMF0ubmFtZSlcblxuICAgICAgICAgICAgdmFyIHJlYWRlciA9IG5ldyBGaWxlUmVhZGVyKCk7XG4gICAgICAgICAgICByZWFkZXIub25sb2FkID0gZnVuY3Rpb24oZSkge1xuICAgICAgICAgICAgICAgICQoXCIjcHJldkxvZ29cIikuYXR0cignc3JjJywgZS50YXJnZXQucmVzdWx0KTtcbiAgICAgICAgICAgIH07XG4gICAgICAgICAgICAvLyByZWFkIHRoZSBpbWFnZSBmaWxlIGFzIGEgZGF0YSBVUkwuXG4gICAgICAgICAgICByZWFkZXIucmVhZEFzRGF0YVVSTCh0aGlzLmZpbGVzWzBdKTtcbiAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgIGFsZXJ0KFwiUGxlYXNlIHNlbGVjdCBhIGZpbGUuXCIpO1xuICAgICAgICB9XG4gICAgfSk7XG5cbiAgICAkKCcuZGVsZXRlJykuY2xpY2soZnVuY3Rpb24gKCl7XG4gICAgICAgIHZhciAkdGhpcyA9ICQodGhpcyk7XG5cbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHVybDogJHRoaXMuZGF0YSgnYWN0aW9uJyksXG4gICAgICAgICAgICB0eXBlOiAnREVMRVRFJyxcbiAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICBcImlkXCI6ICR0aGlzLmF0dHIoJ2lkJyksXG4gICAgICAgICAgICAgICAgXCJfbWV0aG9kXCI6ICdERUxFVEUnLFxuICAgICAgICAgICAgICAgIFwiX3Rva2VuXCI6IHRva2VuLFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uICgpe1xuICAgICAgICAgICAgICAgICR0aGlzLnBhcmVudHMoJ3RyJykucmVtb3ZlKCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pXG4gICAgfSlcbn0pO1xuIl0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9jb21tb24uanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/common.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/common.js"]();
/******/ 	
/******/ })()
;