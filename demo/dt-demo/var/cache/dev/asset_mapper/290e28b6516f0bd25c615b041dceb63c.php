O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_push.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_push-178368dc81e4b08cd0af6bfa0ac0f56a.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_push.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1519:"'use strict';

module.exports = function array_push(inputArr) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_push/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Note also that IE retains information about property position even
  //      note 1: after being supposedly deleted, so if you delete properties and then
  //      note 1: add back properties with the same keys (including numeric) that had
  //      note 1: been deleted, the order will be as before; thus, this function is not
  //      note 1: really recommended with associative arrays (objects) in IE environments
  //   example 1: array_push(['kevin','van'], 'zonneveld')
  //   returns 1: 3

  var i = 0;
  var pr = '';
  var argv = arguments;
  var argc = argv.length;
  var allDigits = /^\d$/;
  var size = 0;
  var highestIdx = 0;
  var len = 0;

  if (inputArr.hasOwnProperty('length')) {
    for (i = 1; i < argc; i++) {
      inputArr[inputArr.length] = argv[i];
    }
    return inputArr.length;
  }

  // Associative (object)
  for (pr in inputArr) {
    if (inputArr.hasOwnProperty(pr)) {
      ++len;
      if (pr.search(allDigits) !== -1) {
        size = parseInt(pr, 10);
        highestIdx = size > highestIdx ? size : highestIdx;
      }
    }
  }
  for (i = 1; i < argc; i++) {
    inputArr[++highestIdx] = argv[i];
  }

  return len + i - 1;
};
//# sourceMappingURL=array_push.js-e4ec84717bd3047fe478fc52103eaffd.map";s:6:"digest";s:32:"178368dc81e4b08cd0af6bfa0ac0f56a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_push.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_push.js-e4ec84717bd3047fe478fc52103eaffd.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_push.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e4ec84717bd3047fe478fc52103eaffd";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/array/array_push.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/array/array_push.js";}