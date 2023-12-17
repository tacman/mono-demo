O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:107:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_change_key_case.js";s:10:"publicPath";s:113:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_change_key_case-388803397b9f180b5f81e6263b6aaa86.js";s:23:"publicPathWithoutDigest";s:80:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_change_key_case.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1624:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_change_key_case(array, cs) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_change_key_case/
  // original by: Ates Goral (https://magnetiq.com)
  // improved by: marrtins
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_change_key_case(42)
  //   returns 1: false
  //   example 2: array_change_key_case([ 3, 5 ])
  //   returns 2: [3, 5]
  //   example 3: array_change_key_case({ FuBaR: 42 })
  //   returns 3: {"fubar": 42}
  //   example 4: array_change_key_case({ FuBaR: 42 }, 'CASE_LOWER')
  //   returns 4: {"fubar": 42}
  //   example 5: array_change_key_case({ FuBaR: 42 }, 'CASE_UPPER')
  //   returns 5: {"FUBAR": 42}
  //   example 6: array_change_key_case({ FuBaR: 42 }, 2)
  //   returns 6: {"FUBAR": 42}

  var caseFnc = void 0;
  var key = void 0;
  var tmpArr = {};

  if (Object.prototype.toString.call(array) === '[object Array]') {
    return array;
  }

  if (array && (typeof array === 'undefined' ? 'undefined' : _typeof(array)) === 'object') {
    caseFnc = !cs || cs === 'CASE_LOWER' ? 'toLowerCase' : 'toUpperCase';
    for (key in array) {
      tmpArr[key[caseFnc]()] = array[key];
    }
    return tmpArr;
  }

  return false;
};
//# sourceMappingURL=array_change_key_case.js-3dd6b59686219a4034fc857eb109c4b6.map";s:6:"digest";s:32:"388803397b9f180b5f81e6263b6aaa86";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:111:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_change_key_case.js.map";s:10:"publicPath";s:117:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_change_key_case.js-3dd6b59686219a4034fc857eb109c4b6.map";s:23:"publicPathWithoutDigest";s:84:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_change_key_case.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"3dd6b59686219a4034fc857eb109c4b6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:76:"@survos/api-grid/node_modules/locutus/php/array/array_change_key_case.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:72:"@survos/api-grid/node_modules/locutus/php/array/array_change_key_case.js";}