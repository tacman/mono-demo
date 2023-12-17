O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:107:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_intersect_assoc.js";s:10:"publicPath";s:113:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_assoc-461e970e3b56ffa8b8282cdb1b262dd7.js";s:23:"publicPathWithoutDigest";s:80:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_assoc.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1511:"'use strict';

module.exports = function array_intersect_assoc(arr1) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_intersect_assoc/
  // original by: Brett Zamir (https://brett-zamir.me)
  //      note 1: These only output associative arrays (would need to be
  //      note 1: all numeric and counting from zero to be numeric)
  //   example 1: var $array1 = {a: 'green', b: 'brown', c: 'blue', 0: 'red'}
  //   example 1: var $array2 = {a: 'green', 0: 'yellow', 1: 'red'}
  //   example 1: array_intersect_assoc($array1, $array2)
  //   returns 1: {a: 'green'}

  var retArr = {};
  var argl = arguments.length;
  var arglm1 = argl - 1;
  var k1 = '';
  var arr = {};
  var i = 0;
  var k = '';

  arr1keys: for (k1 in arr1) {
    // eslint-disable-line no-labels
    arrs: for (i = 1; i < argl; i++) {
      // eslint-disable-line no-labels
      arr = arguments[i];
      for (k in arr) {
        if (arr[k] === arr1[k1] && k === k1) {
          if (i === arglm1) {
            retArr[k1] = arr1[k1];
          }
          // If the innermost loop always leads at least once to an equal value,
          // continue the loop until done
          continue arrs; // eslint-disable-line no-labels
        }
      }
      // If it reaches here, it wasn't found in at least one array, so try next value
      continue arr1keys; // eslint-disable-line no-labels
    }
  }

  return retArr;
};
//# sourceMappingURL=array_intersect_assoc.js-5ea8a382f20f5f6a79dfc6d1043e128e.map";s:6:"digest";s:32:"461e970e3b56ffa8b8282cdb1b262dd7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:111:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_intersect_assoc.js.map";s:10:"publicPath";s:117:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_assoc.js-5ea8a382f20f5f6a79dfc6d1043e128e.map";s:23:"publicPathWithoutDigest";s:84:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect_assoc.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"5ea8a382f20f5f6a79dfc6d1043e128e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:76:"@survos/api-grid/node_modules/locutus/php/array/array_intersect_assoc.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:72:"@survos/api-grid/node_modules/locutus/php/array/array_intersect_assoc.js";}