O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_diff_assoc.js";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_diff_assoc-a1ef1762305a0441b207d3438a6eeb4f.js";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_diff_assoc.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1064:"'use strict';

module.exports = function array_diff_assoc(arr1) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_diff_assoc/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: 0m3r
  //  revised by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_diff_assoc({0: 'Kevin', 1: 'van', 2: 'Zonneveld'}, {0: 'Kevin', 4: 'van', 5: 'Zonneveld'})
  //   returns 1: {1: 'van', 2: 'Zonneveld'}

  var retArr = {};
  var argl = arguments.length;
  var k1 = '';
  var i = 1;
  var k = '';
  var arr = {};

  arr1keys: for (k1 in arr1) {
    // eslint-disable-line no-labels
    for (i = 1; i < argl; i++) {
      arr = arguments[i];
      for (k in arr) {
        if (arr[k] === arr1[k1] && k === k1) {
          // If it reaches here, it was found in at least one array, so try next value
          continue arr1keys; // eslint-disable-line no-labels
        }
      }
      retArr[k1] = arr1[k1];
    }
  }

  return retArr;
};
//# sourceMappingURL=array_diff_assoc.js-2394d49b44211089b85c0c3e3e33ac12.map";s:6:"digest";s:32:"a1ef1762305a0441b207d3438a6eeb4f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:106:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_diff_assoc.js.map";s:10:"publicPath";s:112:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_diff_assoc.js-2394d49b44211089b85c0c3e3e33ac12.map";s:23:"publicPathWithoutDigest";s:79:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_diff_assoc.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"2394d49b44211089b85c0c3e3e33ac12";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:71:"@survos/api-grid/node_modules/locutus/php/array/array_diff_assoc.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/array/array_diff_assoc.js";}