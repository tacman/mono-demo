O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_intersect.js";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect-3efc69fbcf015345dbd09a5d8178e4d6.js";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1548:"'use strict';

module.exports = function array_intersect(arr1) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_intersect/
  // original by: Brett Zamir (https://brett-zamir.me)
  //      note 1: These only output associative arrays (would need to be
  //      note 1: all numeric and counting from zero to be numeric)
  //   example 1: var $array1 = {'a' : 'green', 0:'red', 1: 'blue'}
  //   example 1: var $array2 = {'b' : 'green', 0:'yellow', 1:'red'}
  //   example 1: var $array3 = ['green', 'red']
  //   example 1: var $result = array_intersect($array1, $array2, $array3)
  //   returns 1: {0: 'red', a: 'green'}

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
        if (arr[k] === arr1[k1]) {
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
//# sourceMappingURL=array_intersect.js-a1a1e346d6245b4affd4fd1af7f61104.map";s:6:"digest";s:32:"3efc69fbcf015345dbd09a5d8178e4d6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:105:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_intersect.js.map";s:10:"publicPath";s:111:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect.js-a1a1e346d6245b4affd4fd1af7f61104.map";s:23:"publicPathWithoutDigest";s:78:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_intersect.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a1a1e346d6245b4affd4fd1af7f61104";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:70:"@survos/api-grid/node_modules/locutus/php/array/array_intersect.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/array/array_intersect.js";}