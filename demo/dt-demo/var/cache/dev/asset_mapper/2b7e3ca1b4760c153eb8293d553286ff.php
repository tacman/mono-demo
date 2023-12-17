O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_replace.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_replace-b1c787d3dde55d912523ff141f26dd99.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_replace.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1076:"'use strict';

module.exports = function array_replace(arr) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_replace/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_replace(["orange", "banana", "apple", "raspberry"], {0 : "pineapple", 4 : "cherry"}, {0:"grape"})
  //   returns 1: {0: 'grape', 1: 'banana', 2: 'apple', 3: 'raspberry', 4: 'cherry'}

  var retObj = {};
  var i = 0;
  var p = '';
  var argl = arguments.length;

  if (argl < 2) {
    throw new Error('There should be at least 2 arguments passed to array_replace()');
  }

  // Although docs state that the arguments are passed in by reference,
  // it seems they are not altered, but rather the copy that is returned
  // (just guessing), so we make a copy here, instead of acting on arr itself
  for (p in arr) {
    retObj[p] = arr[p];
  }

  for (i = 1; i < argl; i++) {
    for (p in arguments[i]) {
      retObj[p] = arguments[i][p];
    }
  }

  return retObj;
};
//# sourceMappingURL=array_replace.js-4515dd83dbb70cbc478cf784c8e0aef2.map";s:6:"digest";s:32:"b1c787d3dde55d912523ff141f26dd99";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_replace.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_replace.js-4515dd83dbb70cbc478cf784c8e0aef2.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_replace.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"4515dd83dbb70cbc478cf784c8e0aef2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/array/array_replace.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/array/array_replace.js";}