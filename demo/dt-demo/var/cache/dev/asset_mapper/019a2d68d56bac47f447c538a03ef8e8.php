O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/gmstrftime.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmstrftime-8b12e551ee7eb9386ddce45b5dcd0138.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmstrftime.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:707:"'use strict';

module.exports = function gmstrftime(format, timestamp) {
  //  discuss at: https://locutus.io/php/gmstrftime/
  // original by: Brett Zamir (https://brett-zamir.me)
  //    input by: Alex
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //   example 1: gmstrftime("%A", 1062462400)
  //   returns 1: 'Tuesday'

  var strftime = require('../datetime/strftime');

  var _date = typeof timestamp === 'undefined' ? new Date() : timestamp instanceof Date ? new Date(timestamp) : new Date(timestamp * 1000);

  timestamp = Date.parse(_date.toUTCString().slice(0, -4)) / 1000;

  return strftime(format, timestamp);
};
//# sourceMappingURL=gmstrftime.js-4451c634d096915d84a0f8787aa9a301.map";s:6:"digest";s:32:"8b12e551ee7eb9386ddce45b5dcd0138";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/gmstrftime.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmstrftime.js-4451c634d096915d84a0f8787aa9a301.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmstrftime.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"4451c634d096915d84a0f8787aa9a301";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/datetime/gmstrftime.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/datetime/gmstrftime.js";}