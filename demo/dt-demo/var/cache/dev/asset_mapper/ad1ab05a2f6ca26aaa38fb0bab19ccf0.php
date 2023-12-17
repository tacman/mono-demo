O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_reduce.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_reduce-0997e2cdb5e9a45b012763f3f4037c49.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_reduce.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:777:""use strict";

module.exports = function array_reduce(aInput, callback) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_reduce/
  // original by: Alfonso Jimenez (https://www.alfonsojimenez.com)
  //      note 1: Takes a function as an argument, not a function's name
  //   example 1: array_reduce([1, 2, 3, 4, 5], function (v, w){v += w;return v;})
  //   returns 1: 15

  var lon = aInput.length;
  var res = 0;
  var i = 0;
  var tmp = [];

  for (i = 0; i < lon; i += 2) {
    tmp[0] = aInput[i];
    if (aInput[i + 1]) {
      tmp[1] = aInput[i + 1];
    } else {
      tmp[1] = 0;
    }
    res += callback.apply(null, tmp);
    tmp = [];
  }

  return res;
};
//# sourceMappingURL=array_reduce.js-8d5124b7fc7ff2bf4f364679e34d74a7.map";s:6:"digest";s:32:"0997e2cdb5e9a45b012763f3f4037c49";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_reduce.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_reduce.js-8d5124b7fc7ff2bf4f364679e34d74a7.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_reduce.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"8d5124b7fc7ff2bf4f364679e34d74a7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/array/array_reduce.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/array/array_reduce.js";}