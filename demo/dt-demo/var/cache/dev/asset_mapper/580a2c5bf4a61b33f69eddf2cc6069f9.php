O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/gmdate.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmdate-b96e0ad9fc9cffbd589dfad2166f6b79.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmdate.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:836:"'use strict';

module.exports = function gmdate(format, timestamp) {
  //  discuss at: https://locutus.io/php/gmdate/
  // original by: Brett Zamir (https://brett-zamir.me)
  //    input by: Alex
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //   example 1: gmdate('H:m:s \\m \\i\\s \\m\\o\\n\\t\\h', 1062402400); // Return will depend on your timezone
  //   returns 1: '07:09:40 m is month'

  var date = require('../datetime/date');

  var dt = typeof timestamp === 'undefined' ? new Date() // Not provided
  : timestamp instanceof Date ? new Date(timestamp) // Javascript Date()
  : new Date(timestamp * 1000); // UNIX timestamp (auto-convert to int)

  timestamp = Date.parse(dt.toUTCString().slice(0, -4)) / 1000;

  return date(format, timestamp);
};
//# sourceMappingURL=gmdate.js-8cd28be0b25022a7f043fa3cd4ed798f.map";s:6:"digest";s:32:"b96e0ad9fc9cffbd589dfad2166f6b79";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/gmdate.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmdate.js-8cd28be0b25022a7f043fa3cd4ed798f.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmdate.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"8cd28be0b25022a7f043fa3cd4ed798f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/datetime/gmdate.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/datetime/gmdate.js";}