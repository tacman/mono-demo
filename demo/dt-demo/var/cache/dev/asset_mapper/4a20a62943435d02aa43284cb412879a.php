O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/golang/strings/Count.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/golang/strings/Count-495bf15ee2939c3e8463993740d9ec1b.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/golang/strings/Count.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:849:"'use strict';

module.exports = function Count(s, sep) {
  //  discuss at: https://locutus.io/php/printf/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //    input by: GopherJS (https://www.gopherjs.org/)
  //   example 1: Count("cheese", "e")
  //   returns 1: 3
  //   example 2: Count("five", "") // before & after each rune
  //   returns 2: 5

  var pos = void 0;
  var n = 0;

  if (sep.length === 0) {
    return s.split(sep).length + 1;
  } else if (sep.length > s.length) {
    return 0;
  } else if (sep.length === s.length) {
    if (sep === s) {
      return 1;
    }
    return 0;
  }
  while (true) {
    pos = (s + '').indexOf(sep);
    if (pos === -1) {
      break;
    }
    n = n + 1 >> 0;
    s = s.substring(pos + sep.length >> 0);
  }
  return n;
};
//# sourceMappingURL=Count.js-1379d519b2c8c7599a13005e1d598b4e.map";s:6:"digest";s:32:"495bf15ee2939c3e8463993740d9ec1b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/golang/strings/Count.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/golang/strings/Count.js-1379d519b2c8c7599a13005e1d598b4e.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/golang/strings/Count.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"1379d519b2c8c7599a13005e1d598b4e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/golang/strings/Count.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/golang/strings/Count.js";}