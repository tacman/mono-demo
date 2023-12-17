O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:107:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_merge_recursive.js";s:10:"publicPath";s:113:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_merge_recursive-c8be10f1561e2a8a9a632ef372a23cbb.js";s:23:"publicPathWithoutDigest";s:80:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_merge_recursive.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1711:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_merge_recursive(arr1, arr2) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_merge_recursive/
  // original by: Subhasis Deb
  //    input by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //   example 1: var $arr1 = {'color': {'favorite': 'red'}, 0: 5}
  //   example 1: var $arr2 = {0: 10, 'color': {'favorite': 'green', 0: 'blue'}}
  //   example 1: array_merge_recursive($arr1, $arr2)
  //   returns 1: {'color': {'favorite': {0: 'red', 1: 'green'}, 0: 'blue'}, 1: 5, 1: 10}
  //        test: skip-1

  var arrayMerge = require('../array/array_merge');
  var idx = '';

  if (arr1 && Object.prototype.toString.call(arr1) === '[object Array]' && arr2 && Object.prototype.toString.call(arr2) === '[object Array]') {
    for (idx in arr2) {
      arr1.push(arr2[idx]);
    }
  } else if (arr1 && arr1 instanceof Object && arr2 && arr2 instanceof Object) {
    for (idx in arr2) {
      if (idx in arr1) {
        if (_typeof(arr1[idx]) === 'object' && (typeof arr2 === 'undefined' ? 'undefined' : _typeof(arr2)) === 'object') {
          arr1[idx] = arrayMerge(arr1[idx], arr2[idx]);
        } else {
          arr1[idx] = arr2[idx];
        }
      } else {
        arr1[idx] = arr2[idx];
      }
    }
  }

  return arr1;
};
//# sourceMappingURL=array_merge_recursive.js-6dcaec57ee4eb98ed622af2d0d46c4f4.map";s:6:"digest";s:32:"c8be10f1561e2a8a9a632ef372a23cbb";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:111:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_merge_recursive.js.map";s:10:"publicPath";s:117:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_merge_recursive.js-6dcaec57ee4eb98ed622af2d0d46c4f4.map";s:23:"publicPathWithoutDigest";s:84:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_merge_recursive.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"6dcaec57ee4eb98ed622af2d0d46c4f4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:76:"@survos/api-grid/node_modules/locutus/php/array/array_merge_recursive.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:72:"@survos/api-grid/node_modules/locutus/php/array/array_merge_recursive.js";}