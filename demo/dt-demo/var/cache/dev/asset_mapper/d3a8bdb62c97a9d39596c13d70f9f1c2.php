O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/decoct.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/math/decoct-4a9ccf7ea05a700f5c4c8e6b65287e88.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/math/decoct.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:617:""use strict";

module.exports = function decoct(number) {
  //  discuss at: https://locutus.io/php/decoct/
  // original by: Enrique Gonzalez
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: https://stackoverflow.com/questions/57803/how-to-convert-decimal-to-hex-in-javascript
  //    input by: pilus
  //   example 1: decoct(15)
  //   returns 1: '17'
  //   example 2: decoct(264)
  //   returns 2: '410'

  if (number < 0) {
    number = 0xFFFFFFFF + number + 1;
  }
  return parseInt(number, 10).toString(8);
};
//# sourceMappingURL=decoct.js-069deb559aed12aa25bcedd79cf9ca8f.map";s:6:"digest";s:32:"4a9ccf7ea05a700f5c4c8e6b65287e88";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/decoct.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/math/decoct.js-069deb559aed12aa25bcedd79cf9ca8f.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/math/decoct.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"069deb559aed12aa25bcedd79cf9ca8f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/math/decoct.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/math/decoct.js";}