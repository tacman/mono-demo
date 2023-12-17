O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_shuffle.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_shuffle-f6a720e98666c6028a7bb2ccae34d5c9.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_shuffle.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:801:"'use strict';

module.exports = function str_shuffle(str) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/str_shuffle/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: var $shuffled = str_shuffle("abcdef")
  //   example 1: var $result = $shuffled.length
  //   returns 1: 6

  if (arguments.length === 0) {
    throw new Error('Wrong parameter count for str_shuffle()');
  }

  if (str === null) {
    return '';
  }

  str += '';

  var newStr = '';
  var rand = void 0;
  var i = str.length;

  while (i) {
    rand = Math.floor(Math.random() * i);
    newStr += str.charAt(rand);
    str = str.substring(0, rand) + str.substr(rand + 1);
    i--;
  }

  return newStr;
};
//# sourceMappingURL=str_shuffle.js-7389942a2590366a12260eb44eaf0bcf.map";s:6:"digest";s:32:"f6a720e98666c6028a7bb2ccae34d5c9";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_shuffle.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_shuffle.js-7389942a2590366a12260eb44eaf0bcf.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_shuffle.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"7389942a2590366a12260eb44eaf0bcf";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/strings/str_shuffle.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/str_shuffle.js";}