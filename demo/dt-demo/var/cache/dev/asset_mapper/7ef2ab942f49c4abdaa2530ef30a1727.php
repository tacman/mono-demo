O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/vprintf.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/vprintf-bc173d4ff2ce692c4a9a79b0437a50b3.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/vprintf.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:626:"'use strict';

module.exports = function vprintf(format, args) {
  //       discuss at: https://locutus.io/php/vprintf/
  //      original by: Ash Searle (https://hexmen.com/blog/)
  //      improved by: Michael White (https://getsprink.com)
  // reimplemented by: Brett Zamir (https://brett-zamir.me)
  //        example 1: vprintf("%01.2f", 123.1)
  //        returns 1: 6

  var sprintf = require('../strings/sprintf');
  var echo = require('../strings/echo');
  var ret = sprintf.apply(this, [format].concat(args));
  echo(ret);

  return ret.length;
};
//# sourceMappingURL=vprintf.js-90562dacd4488dc5261b66244307644f.map";s:6:"digest";s:32:"bc173d4ff2ce692c4a9a79b0437a50b3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/vprintf.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/vprintf.js-90562dacd4488dc5261b66244307644f.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/vprintf.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"90562dacd4488dc5261b66244307644f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/vprintf.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/vprintf.js";}