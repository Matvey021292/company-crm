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

eval("$(document).ready(function () {\n  var token = $('[name=\"csrf-token\"]').attr('content');\n  var logoContainer = $(\"#prevLogo\");\n  $(\"#companyInputFile\").change(function () {\n    var files = $(this)[0].files;\n\n    if (files.length > 0) {\n      $('.custom-file-label[for=\"companyInputFile\"]').text(files[0].name);\n      var reader = new FileReader();\n\n      reader.onload = function (e) {\n        logoContainer.attr('src', e.target.result);\n        logoContainer.removeClass('d-none');\n      };\n\n      reader.readAsDataURL(this.files[0]);\n    } else {\n      alert(\"Please select a file.\");\n    }\n  });\n  $('.delete').click(function () {\n    var Confirm = confirm($('[name=\"confirm\"]').val());\n    if (!Confirm) return;\n    var $this = $(this);\n    var parents = $this.parents('tr');\n    $.ajax({\n      url: $this.data('action'),\n      type: 'DELETE',\n      data: {\n        \"id\": $this.attr('id'),\n        \"_method\": 'DELETE',\n        \"_token\": token\n      },\n      success: function success(resp) {\n        if (resp.status == 'error') {\n          alert(resp.message);\n          return;\n        }\n\n        parents.remove();\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvY29tbW9uLmpzPzZiMDQiXSwibmFtZXMiOlsiJCIsImRvY3VtZW50IiwicmVhZHkiLCJ0b2tlbiIsImF0dHIiLCJsb2dvQ29udGFpbmVyIiwiY2hhbmdlIiwiZmlsZXMiLCJsZW5ndGgiLCJ0ZXh0IiwibmFtZSIsInJlYWRlciIsIkZpbGVSZWFkZXIiLCJvbmxvYWQiLCJlIiwidGFyZ2V0IiwicmVzdWx0IiwicmVtb3ZlQ2xhc3MiLCJyZWFkQXNEYXRhVVJMIiwiYWxlcnQiLCJjbGljayIsIkNvbmZpcm0iLCJjb25maXJtIiwidmFsIiwiJHRoaXMiLCJwYXJlbnRzIiwiYWpheCIsInVybCIsImRhdGEiLCJ0eXBlIiwic3VjY2VzcyIsInJlc3AiLCJzdGF0dXMiLCJtZXNzYWdlIiwicmVtb3ZlIl0sIm1hcHBpbmdzIjoiQUFBQUEsQ0FBQyxDQUFDQyxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFZO0FBQzFCLE1BQUlDLEtBQUssR0FBR0gsQ0FBQyxDQUFDLHFCQUFELENBQUQsQ0FBeUJJLElBQXpCLENBQThCLFNBQTlCLENBQVo7QUFDQSxNQUFJQyxhQUFhLEdBQUdMLENBQUMsQ0FBQyxXQUFELENBQXJCO0FBRUFBLEVBQUFBLENBQUMsQ0FBQyxtQkFBRCxDQUFELENBQXVCTSxNQUF2QixDQUE4QixZQUFZO0FBQ3RDLFFBQUlDLEtBQUssR0FBR1AsQ0FBQyxDQUFDLElBQUQsQ0FBRCxDQUFRLENBQVIsRUFBV08sS0FBdkI7O0FBRUEsUUFBSUEsS0FBSyxDQUFDQyxNQUFOLEdBQWUsQ0FBbkIsRUFBc0I7QUFDbEJSLE1BQUFBLENBQUMsQ0FBQyw0Q0FBRCxDQUFELENBQWdEUyxJQUFoRCxDQUFxREYsS0FBSyxDQUFDLENBQUQsQ0FBTCxDQUFTRyxJQUE5RDtBQUVBLFVBQUlDLE1BQU0sR0FBRyxJQUFJQyxVQUFKLEVBQWI7O0FBQ0FELE1BQUFBLE1BQU0sQ0FBQ0UsTUFBUCxHQUFnQixVQUFTQyxDQUFULEVBQVk7QUFDeEJULFFBQUFBLGFBQWEsQ0FBQ0QsSUFBZCxDQUFtQixLQUFuQixFQUEwQlUsQ0FBQyxDQUFDQyxNQUFGLENBQVNDLE1BQW5DO0FBQ0FYLFFBQUFBLGFBQWEsQ0FBQ1ksV0FBZCxDQUEwQixRQUExQjtBQUNILE9BSEQ7O0FBSUFOLE1BQUFBLE1BQU0sQ0FBQ08sYUFBUCxDQUFxQixLQUFLWCxLQUFMLENBQVcsQ0FBWCxDQUFyQjtBQUVILEtBVkQsTUFVTztBQUNIWSxNQUFBQSxLQUFLLENBQUMsdUJBQUQsQ0FBTDtBQUNIO0FBQ0osR0FoQkQ7QUFrQkFuQixFQUFBQSxDQUFDLENBQUMsU0FBRCxDQUFELENBQWFvQixLQUFiLENBQW1CLFlBQVc7QUFDMUIsUUFBSUMsT0FBTyxHQUFHQyxPQUFPLENBQUN0QixDQUFDLENBQUMsa0JBQUQsQ0FBRCxDQUFzQnVCLEdBQXRCLEVBQUQsQ0FBckI7QUFDQSxRQUFHLENBQUNGLE9BQUosRUFBYTtBQUViLFFBQUlHLEtBQUssR0FBR3hCLENBQUMsQ0FBQyxJQUFELENBQWI7QUFDQSxRQUFJeUIsT0FBTyxHQUFHRCxLQUFLLENBQUNDLE9BQU4sQ0FBYyxJQUFkLENBQWQ7QUFFQXpCLElBQUFBLENBQUMsQ0FBQzBCLElBQUYsQ0FBTztBQUNIQyxNQUFBQSxHQUFHLEVBQUVILEtBQUssQ0FBQ0ksSUFBTixDQUFXLFFBQVgsQ0FERjtBQUVIQyxNQUFBQSxJQUFJLEVBQUUsUUFGSDtBQUdIRCxNQUFBQSxJQUFJLEVBQUU7QUFDRixjQUFNSixLQUFLLENBQUNwQixJQUFOLENBQVcsSUFBWCxDQURKO0FBRUYsbUJBQVcsUUFGVDtBQUdGLGtCQUFVRDtBQUhSLE9BSEg7QUFRSDJCLE1BQUFBLE9BQU8sRUFBRSxpQkFBVUMsSUFBVixFQUFlO0FBQ3BCLFlBQUdBLElBQUksQ0FBQ0MsTUFBTCxJQUFlLE9BQWxCLEVBQTBCO0FBQ3RCYixVQUFBQSxLQUFLLENBQUNZLElBQUksQ0FBQ0UsT0FBTixDQUFMO0FBQ0E7QUFDSDs7QUFDRFIsUUFBQUEsT0FBTyxDQUFDUyxNQUFSO0FBQ0g7QUFkRSxLQUFQO0FBZ0JILEdBdkJEO0FBd0JILENBOUNEIiwic291cmNlc0NvbnRlbnQiOlsiJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAgIHZhciB0b2tlbiA9ICQoJ1tuYW1lPVwiY3NyZi10b2tlblwiXScpLmF0dHIoJ2NvbnRlbnQnKTtcbiAgICB2YXIgbG9nb0NvbnRhaW5lciA9ICQoXCIjcHJldkxvZ29cIik7XG5cbiAgICAkKFwiI2NvbXBhbnlJbnB1dEZpbGVcIikuY2hhbmdlKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdmFyIGZpbGVzID0gJCh0aGlzKVswXS5maWxlcztcblxuICAgICAgICBpZiAoZmlsZXMubGVuZ3RoID4gMCkge1xuICAgICAgICAgICAgJCgnLmN1c3RvbS1maWxlLWxhYmVsW2Zvcj1cImNvbXBhbnlJbnB1dEZpbGVcIl0nKS50ZXh0KGZpbGVzWzBdLm5hbWUpXG5cbiAgICAgICAgICAgIHZhciByZWFkZXIgPSBuZXcgRmlsZVJlYWRlcigpO1xuICAgICAgICAgICAgcmVhZGVyLm9ubG9hZCA9IGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgICAgICAgICBsb2dvQ29udGFpbmVyLmF0dHIoJ3NyYycsIGUudGFyZ2V0LnJlc3VsdCk7XG4gICAgICAgICAgICAgICAgbG9nb0NvbnRhaW5lci5yZW1vdmVDbGFzcygnZC1ub25lJylcbiAgICAgICAgICAgIH07XG4gICAgICAgICAgICByZWFkZXIucmVhZEFzRGF0YVVSTCh0aGlzLmZpbGVzWzBdKTtcblxuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgYWxlcnQoXCJQbGVhc2Ugc2VsZWN0IGEgZmlsZS5cIik7XG4gICAgICAgIH1cbiAgICB9KTtcblxuICAgICQoJy5kZWxldGUnKS5jbGljayhmdW5jdGlvbiAoKXtcbiAgICAgICAgdmFyIENvbmZpcm0gPSBjb25maXJtKCQoJ1tuYW1lPVwiY29uZmlybVwiXScpLnZhbCgpKTtcbiAgICAgICAgaWYoIUNvbmZpcm0pIHJldHVybjtcblxuICAgICAgICB2YXIgJHRoaXMgPSAkKHRoaXMpO1xuICAgICAgICB2YXIgcGFyZW50cyA9ICR0aGlzLnBhcmVudHMoJ3RyJyk7XG5cbiAgICAgICAgJC5hamF4KHtcbiAgICAgICAgICAgIHVybDogJHRoaXMuZGF0YSgnYWN0aW9uJyksXG4gICAgICAgICAgICB0eXBlOiAnREVMRVRFJyxcbiAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICBcImlkXCI6ICR0aGlzLmF0dHIoJ2lkJyksXG4gICAgICAgICAgICAgICAgXCJfbWV0aG9kXCI6ICdERUxFVEUnLFxuICAgICAgICAgICAgICAgIFwiX3Rva2VuXCI6IHRva2VuLFxuICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIHN1Y2Nlc3M6IGZ1bmN0aW9uIChyZXNwKXtcbiAgICAgICAgICAgICAgICBpZihyZXNwLnN0YXR1cyA9PSAnZXJyb3InKXtcbiAgICAgICAgICAgICAgICAgICAgYWxlcnQocmVzcC5tZXNzYWdlKTtcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICBwYXJlbnRzLnJlbW92ZSgpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9KVxuICAgIH0pXG59KTtcbiJdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvY29tbW9uLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/common.js\n");

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