O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_udiff_uassoc.js";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_udiff_uassoc-960ad410b954b2a0444a1f47bacbc37b.js";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_udiff_uassoc.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1937:"'use strict';

module.exports = function array_udiff_uassoc(arr1) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_udiff_uassoc/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: var $array1 = {a: 'green', b: 'brown', c: 'blue', 0: 'red'}
  //   example 1: var $array2 = {a: 'GREEN', B: 'brown', 0: 'yellow', 1: 'red'}
  //   example 1: array_udiff_uassoc($array1, $array2, function (f_string1, f_string2){var string1 = (f_string1+'').toLowerCase(); var string2 = (f_string2+'').toLowerCase(); if (string1 > string2) return 1; if (string1 === string2) return 0; return -1;}, function (f_string1, f_string2){var string1 = (f_string1+'').toLowerCase(); var string2 = (f_string2+'').toLowerCase(); if (string1 > string2) return 1; if (string1 === string2) return 0; return -1;})
  //   returns 1: {0: 'red', c: 'blue'}

  var retArr = {};
  var arglm1 = arguments.length - 1;
  var arglm2 = arglm1 - 1;
  var cb = arguments[arglm1];
  var cb0 = arguments[arglm2];
  var k1 = '';
  var i = 1;
  var k = '';
  var arr = {};

  var $global = typeof window !== 'undefined' ? window : global;

  cb = typeof cb === 'string' ? $global[cb] : Object.prototype.toString.call(cb) === '[object Array]' ? $global[cb[0]][cb[1]] : cb;

  cb0 = typeof cb0 === 'string' ? $global[cb0] : Object.prototype.toString.call(cb0) === '[object Array]' ? $global[cb0[0]][cb0[1]] : cb0;

  arr1keys: for (k1 in arr1) {
    // eslint-disable-line no-labels
    for (i = 1; i < arglm2; i++) {
      arr = arguments[i];
      for (k in arr) {
        if (cb0(arr[k], arr1[k1]) === 0 && cb(k, k1) === 0) {
          // If it reaches here, it was found in at least one array, so try next value
          continue arr1keys; // eslint-disable-line no-labels
        }
      }
      retArr[k1] = arr1[k1];
    }
  }

  return retArr;
};
//# sourceMappingURL=array_udiff_uassoc.js-a798b8bc4c78648a57f6c698ade8ee23.map";s:6:"digest";s:32:"960ad410b954b2a0444a1f47bacbc37b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:108:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_udiff_uassoc.js.map";s:10:"publicPath";s:114:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_udiff_uassoc.js-a798b8bc4c78648a57f6c698ade8ee23.map";s:23:"publicPathWithoutDigest";s:81:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_udiff_uassoc.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a798b8bc4c78648a57f6c698ade8ee23";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:73:"@survos/api-grid/node_modules/locutus/php/array/array_udiff_uassoc.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/array/array_udiff_uassoc.js";}