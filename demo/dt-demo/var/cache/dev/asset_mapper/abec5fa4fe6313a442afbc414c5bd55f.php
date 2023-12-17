O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/hex2bin.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/hex2bin-7573fee4cb2cfac99a2d4eaaffbe310e.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/hex2bin.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:714:"'use strict';

module.exports = function hex2bin(s) {
  //  discuss at: https://locutus.io/php/hex2bin/
  // original by: Dumitru Uzun (https://duzun.me)
  //   example 1: hex2bin('44696d61')
  //   returns 1: 'Dima'
  //   example 2: hex2bin('00')
  //   returns 2: '\x00'
  //   example 3: hex2bin('2f1q')
  //   returns 3: false

  var ret = [];
  var i = 0;
  var l = void 0;

  s += '';

  for (l = s.length; i < l; i += 2) {
    var c = parseInt(s.substr(i, 1), 16);
    var k = parseInt(s.substr(i + 1, 1), 16);
    if (isNaN(c) || isNaN(k)) return false;
    ret.push(c << 4 | k);
  }

  return String.fromCharCode.apply(String, ret);
};
//# sourceMappingURL=hex2bin.js-5532065234ada652b415945e982777c1.map";s:6:"digest";s:32:"7573fee4cb2cfac99a2d4eaaffbe310e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/hex2bin.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/hex2bin.js-5532065234ada652b415945e982777c1.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/hex2bin.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"5532065234ada652b415945e982777c1";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/hex2bin.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/hex2bin.js";}