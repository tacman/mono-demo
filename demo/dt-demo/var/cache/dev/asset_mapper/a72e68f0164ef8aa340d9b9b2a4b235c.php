O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_filter.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_filter-eea202963d7398b9d121bc619b6e28dd.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_filter.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1234:"'use strict';

module.exports = function array_filter(arr, func) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_filter/
  // original by: Brett Zamir (https://brett-zamir.me)
  //    input by: max4ever
  // improved by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Takes a function as an argument, not a function's name
  //   example 1: var odd = function (num) {return (num & 1);}
  //   example 1: array_filter({"a": 1, "b": 2, "c": 3, "d": 4, "e": 5}, odd)
  //   returns 1: {"a": 1, "c": 3, "e": 5}
  //   example 2: var even = function (num) {return (!(num & 1));}
  //   example 2: array_filter([6, 7, 8, 9, 10, 11, 12], even)
  //   returns 2: [ 6, , 8, , 10, , 12 ]
  //   example 3: array_filter({"a": 1, "b": false, "c": -1, "d": 0, "e": null, "f":'', "g":undefined})
  //   returns 3: {"a":1, "c":-1}

  var retObj = {};
  var k = void 0;

  func = func || function (v) {
    return v;
  };

  // @todo: Issue #73
  if (Object.prototype.toString.call(arr) === '[object Array]') {
    retObj = [];
  }

  for (k in arr) {
    if (func(arr[k])) {
      retObj[k] = arr[k];
    }
  }

  return retObj;
};
//# sourceMappingURL=array_filter.js-ace4825d583dacbb5c3d9db2716aa4f6.map";s:6:"digest";s:32:"eea202963d7398b9d121bc619b6e28dd";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_filter.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_filter.js-ace4825d583dacbb5c3d9db2716aa4f6.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_filter.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"ace4825d583dacbb5c3d9db2716aa4f6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/array/array_filter.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/array/array_filter.js";}