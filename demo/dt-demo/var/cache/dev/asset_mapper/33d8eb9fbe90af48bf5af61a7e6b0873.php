O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/ltrim.js";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/strings/ltrim-11315317635bc494dec007e1758ccb13.js";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/strings/ltrim.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:670:"'use strict';

module.exports = function ltrim(str, charlist) {
  //  discuss at: https://locutus.io/php/ltrim/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Erkekjetter
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //   example 1: ltrim('    Kevin van Zonneveld    ')
  //   returns 1: 'Kevin van Zonneveld    '

  charlist = !charlist ? ' \\s\xA0' : (charlist + '').replace(/([[\]().?/*{}+$^:])/g, '$1');

  var re = new RegExp('^[' + charlist + ']+', 'g');

  return (str + '').replace(re, '');
};
//# sourceMappingURL=ltrim.js-886824c6eda58a7115917e15f32573e8.map";s:6:"digest";s:32:"11315317635bc494dec007e1758ccb13";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/ltrim.js.map";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/strings/ltrim.js-886824c6eda58a7115917e15f32573e8.map";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/strings/ltrim.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"886824c6eda58a7115917e15f32573e8";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/strings/ltrim.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/strings/ltrim.js";}