O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_unshift.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_unshift-d776381a466ce0e96e8fc73c6a357661.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_unshift.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:608:""use strict";

module.exports = function array_unshift(array) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_unshift/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Martijn Wieringa
  // improved by: jmweb
  //      note 1: Currently does not handle objects
  //   example 1: array_unshift(['van', 'Zonneveld'], 'Kevin')
  //   returns 1: 3

  var i = arguments.length;

  while (--i !== 0) {
    arguments[0].unshift(arguments[i]);
  }

  return arguments[0].length;
};
//# sourceMappingURL=array_unshift.js-3eedb3a02d27a07d46641f701d5bd31a.map";s:6:"digest";s:32:"d776381a466ce0e96e8fc73c6a357661";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_unshift.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_unshift.js-3eedb3a02d27a07d46641f701d5bd31a.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_unshift.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"3eedb3a02d27a07d46641f701d5bd31a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/array/array_unshift.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/array/array_unshift.js";}