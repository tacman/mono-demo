O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_sum.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_sum-f3eef3a944c2f8702a8724f9292ef049.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_sum.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1270:"'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function array_sum(array) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_sum/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Nate
  // bugfixed by: Gilbert
  // improved by: David Pilia (https://www.beteck.it/)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_sum([4, 9, 182.6])
  //   returns 1: 195.6
  //   example 2: var $total = []
  //   example 2: var $index = 0.1
  //   example 2: for (var $y = 0; $y < 12; $y++){ $total[$y] = $y + $index }
  //   example 2: array_sum($total)
  //   returns 2: 67.2

  var key = void 0;
  var sum = 0;

  // input sanitation
  if ((typeof array === 'undefined' ? 'undefined' : _typeof(array)) !== 'object') {
    return null;
  }

  for (key in array) {
    if (!isNaN(parseFloat(array[key]))) {
      sum += parseFloat(array[key]);
    }
  }

  return sum;
};
//# sourceMappingURL=array_sum.js-7329d9c4dcc92c7e5304bc5d7f94842e.map";s:6:"digest";s:32:"f3eef3a944c2f8702a8724f9292ef049";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_sum.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_sum.js-7329d9c4dcc92c7e5304bc5d7f94842e.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_sum.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"7329d9c4dcc92c7e5304bc5d7f94842e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/array/array_sum.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/array/array_sum.js";}