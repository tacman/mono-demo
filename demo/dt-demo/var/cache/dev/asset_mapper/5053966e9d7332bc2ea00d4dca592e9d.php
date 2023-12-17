O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_udiff_assoc.js";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_udiff_assoc-371c7213030b8f0030f0ed87f27b3189.js";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_udiff_assoc.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1435:"'use strict';

module.exports = function array_udiff_assoc(arr1) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_udiff_assoc/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_udiff_assoc({0: 'kevin', 1: 'van', 2: 'Zonneveld'}, {0: 'Kevin', 4: 'van', 5: 'Zonneveld'}, function (f_string1, f_string2){var string1 = (f_string1+'').toLowerCase(); var string2 = (f_string2+'').toLowerCase(); if (string1 > string2) return 1; if (string1 === string2) return 0; return -1;})
  //   returns 1: {1: 'van', 2: 'Zonneveld'}

  var retArr = {};
  var arglm1 = arguments.length - 1;
  var cb = arguments[arglm1];
  var arr = {};
  var i = 1;
  var k1 = '';
  var k = '';

  var $global = typeof window !== 'undefined' ? window : global;

  cb = typeof cb === 'string' ? $global[cb] : Object.prototype.toString.call(cb) === '[object Array]' ? $global[cb[0]][cb[1]] : cb;

  arr1keys: for (k1 in arr1) {
    // eslint-disable-line no-labels
    for (i = 1; i < arglm1; i++) {
      arr = arguments[i];
      for (k in arr) {
        if (cb(arr[k], arr1[k1]) === 0 && k === k1) {
          // If it reaches here, it was found in at least one array, so try next value
          continue arr1keys; // eslint-disable-line no-labels
        }
      }
      retArr[k1] = arr1[k1];
    }
  }

  return retArr;
};
//# sourceMappingURL=array_udiff_assoc.js-d24c0f2da232bf3c17d86bd007be7389.map";s:6:"digest";s:32:"371c7213030b8f0030f0ed87f27b3189";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:107:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_udiff_assoc.js.map";s:10:"publicPath";s:113:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_udiff_assoc.js-d24c0f2da232bf3c17d86bd007be7389.map";s:23:"publicPathWithoutDigest";s:80:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_udiff_assoc.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"d24c0f2da232bf3c17d86bd007be7389";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:72:"@survos/api-grid/node_modules/locutus/php/array/array_udiff_assoc.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/array/array_udiff_assoc.js";}