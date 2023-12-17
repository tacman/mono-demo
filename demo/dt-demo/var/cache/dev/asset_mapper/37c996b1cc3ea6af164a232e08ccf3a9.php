O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strnatcasecmp.js";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strnatcasecmp-839a7880ae6bcdaf2100252e725c76a6.js";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strnatcasecmp.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1019:"'use strict';

module.exports = function strnatcasecmp(a, b) {
  //       discuss at: https://locutus.io/php/strnatcasecmp/
  //      original by: Martin Pool
  // reimplemented by: Pierre-Luc Paour
  // reimplemented by: Kristof Coomans (SCK-CEN (Belgian Nucleair Research Centre))
  // reimplemented by: Brett Zamir (https://brett-zamir.me)
  //      bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //         input by: Devan Penner-Woelk
  //      improved by: Kevin van Zonneveld (https://kvz.io)
  // reimplemented by: Rafał Kukawski
  //        example 1: strnatcasecmp(10, 1)
  //        returns 1: 1
  //        example 2: strnatcasecmp('1', '10')
  //        returns 2: -1

  var strnatcmp = require('../strings/strnatcmp');
  var _phpCastString = require('../_helpers/_phpCastString');

  if (arguments.length !== 2) {
    return null;
  }

  return strnatcmp(_phpCastString(a).toLowerCase(), _phpCastString(b).toLowerCase());
};
//# sourceMappingURL=strnatcasecmp.js-e3819dcf7769cea1f6d677d7349f812c.map";s:6:"digest";s:32:"839a7880ae6bcdaf2100252e725c76a6";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:105:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strnatcasecmp.js.map";s:10:"publicPath";s:111:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strnatcasecmp.js-e3819dcf7769cea1f6d677d7349f812c.map";s:23:"publicPathWithoutDigest";s:78:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strnatcasecmp.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e3819dcf7769cea1f6d677d7349f812c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:70:"@survos/api-grid/node_modules/locutus/php/strings/strnatcasecmp.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/strings/strnatcasecmp.js";}