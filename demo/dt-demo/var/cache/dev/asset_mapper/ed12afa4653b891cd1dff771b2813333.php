O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/bin2hex.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/bin2hex-7bc05304b63e11f0721844e0f8e3e7fa.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/bin2hex.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:756:"'use strict';

module.exports = function bin2hex(s) {
  //  discuss at: https://locutus.io/php/bin2hex/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Linuxworld
  // improved by: ntoniazzi (https://locutus.io/php/bin2hex:361#comment_177616)
  //   example 1: bin2hex('Kev')
  //   returns 1: '4b6576'
  //   example 2: bin2hex(String.fromCharCode(0x00))
  //   returns 2: '00'

  var i = void 0;
  var l = void 0;
  var o = '';
  var n = void 0;

  s += '';

  for (i = 0, l = s.length; i < l; i++) {
    n = s.charCodeAt(i).toString(16);
    o += n.length < 2 ? '0' + n : n;
  }

  return o;
};
//# sourceMappingURL=bin2hex.js-eeb185605b0bf2d9dea1e5051eb7a41d.map";s:6:"digest";s:32:"7bc05304b63e11f0721844e0f8e3e7fa";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/bin2hex.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/bin2hex.js-eeb185605b0bf2d9dea1e5051eb7a41d.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/bin2hex.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"eeb185605b0bf2d9dea1e5051eb7a41d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/bin2hex.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/bin2hex.js";}