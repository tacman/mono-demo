O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_diff_key.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_diff_key-3c6bb54791d989d3acb7158314c007dc.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_diff_key.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1153:"'use strict';

module.exports = function array_diff_key(arr1) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_diff_key/
  // original by: Ates Goral (https://magnetiq.com)
  //  revised by: Brett Zamir (https://brett-zamir.me)
  //    input by: Everlasto
  //   example 1: array_diff_key({red: 1, green: 2, blue: 3, white: 4}, {red: 5})
  //   returns 1: {"green":2, "blue":3, "white":4}
  //   example 2: array_diff_key({red: 1, green: 2, blue: 3, white: 4}, {red: 5}, {red: 5})
  //   returns 2: {"green":2, "blue":3, "white":4}

  var argl = arguments.length;
  var retArr = {};
  var k1 = '';
  var i = 1;
  var k = '';
  var arr = {};

  arr1keys: for (k1 in arr1) {
    // eslint-disable-line no-labels
    for (i = 1; i < argl; i++) {
      arr = arguments[i];
      for (k in arr) {
        if (k === k1) {
          // If it reaches here, it was found in at least one array, so try next value
          continue arr1keys; // eslint-disable-line no-labels
        }
      }
      retArr[k1] = arr1[k1];
    }
  }

  return retArr;
};
//# sourceMappingURL=array_diff_key.js-28fcfcce924cc5660a967b919972f2e7.map";s:6:"digest";s:32:"3c6bb54791d989d3acb7158314c007dc";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_diff_key.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_diff_key.js-28fcfcce924cc5660a967b919972f2e7.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_diff_key.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"28fcfcce924cc5660a967b919972f2e7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/array/array_diff_key.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/array/array_diff_key.js";}