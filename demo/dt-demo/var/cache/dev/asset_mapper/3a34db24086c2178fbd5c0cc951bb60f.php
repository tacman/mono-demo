O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:110:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/funchand/get_defined_functions.js";s:10:"publicPath";s:116:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/get_defined_functions-d0857acabb15d1b680e3b1edfe1a43e6.js";s:23:"publicPathWithoutDigest";s:83:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/get_defined_functions.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1946:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function get_defined_functions() {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/get_defined_functions/
  // original by: Brett Zamir (https://brett-zamir.me)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Test case 1: If get_defined_functions can find
  //      note 1: itself in the defined functions, it worked :)
  //   example 1: function test_in_array (array, p_val) {for(var i = 0, l = array.length; i < l; i++) {if (array[i] === p_val) return true} return false}
  //   example 1: var $funcs = get_defined_functions()
  //   example 1: var $found = test_in_array($funcs, 'get_defined_functions')
  //   example 1: var $result = $found
  //   returns 1: true
  //        test: skip-1

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  var i = '';
  var arr = [];
  var already = {};

  for (i in $global) {
    try {
      if (typeof $global[i] === 'function') {
        if (!already[i]) {
          already[i] = 1;
          arr.push(i);
        }
      } else if (_typeof($global[i]) === 'object') {
        for (var j in $global[i]) {
          if (typeof $global[j] === 'function' && $global[j] && !already[j]) {
            already[j] = 1;
            arr.push(j);
          }
        }
      }
    } catch (e) {
      // Some objects in Firefox throw exceptions when their
      // properties are accessed (e.g., sessionStorage)
    }
  }

  return arr;
};
//# sourceMappingURL=get_defined_functions.js-91a0b1d964cdda2b17f88c24d3c1d413.map";s:6:"digest";s:32:"d0857acabb15d1b680e3b1edfe1a43e6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:114:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/funchand/get_defined_functions.js.map";s:10:"publicPath";s:120:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/get_defined_functions.js-91a0b1d964cdda2b17f88c24d3c1d413.map";s:23:"publicPathWithoutDigest";s:87:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/get_defined_functions.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"91a0b1d964cdda2b17f88c24d3c1d413";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:79:"@survos/api-grid/node_modules/locutus/php/funchand/get_defined_functions.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:75:"@survos/api-grid/node_modules/locutus/php/funchand/get_defined_functions.js";}