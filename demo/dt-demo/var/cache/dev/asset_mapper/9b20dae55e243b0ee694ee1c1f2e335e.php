O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/bindec.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/math/bindec-2c96d1f3a60ef757f5b3ff13768d5744.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/math/bindec.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:484:"'use strict';

module.exports = function bindec(binaryString) {
  //  discuss at: https://locutus.io/php/bindec/
  // original by: Philippe Baumann
  //   example 1: bindec('110011')
  //   returns 1: 51
  //   example 2: bindec('000110011')
  //   returns 2: 51
  //   example 3: bindec('111')
  //   returns 3: 7

  binaryString = (binaryString + '').replace(/[^01]/gi, '');

  return parseInt(binaryString, 2);
};
//# sourceMappingURL=bindec.js-a85682fa1288e11c415878a636fe8483.map";s:6:"digest";s:32:"2c96d1f3a60ef757f5b3ff13768d5744";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/math/bindec.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/math/bindec.js-a85682fa1288e11c415878a636fe8483.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/math/bindec.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a85682fa1288e11c415878a636fe8483";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/math/bindec.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/math/bindec.js";}