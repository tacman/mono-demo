O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strcspn.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strcspn-6d1ffeecac6a698c1d07f05e5b35f6dd.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strcspn.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1051:"'use strict';

module.exports = function strcspn(str, mask, start, length) {
  //  discuss at: https://locutus.io/php/strcspn/
  // original by: Brett Zamir (https://brett-zamir.me)
  //  revised by: Theriault
  //   example 1: strcspn('abcdefg123', '1234567890')
  //   returns 1: 7
  //   example 2: strcspn('123abc', '1234567890')
  //   returns 2: 0
  //   example 3: strcspn('abcdefg123', '1234567890', 1)
  //   returns 3: 6
  //   example 4: strcspn('abcdefg123', '1234567890', -6, -5)
  //   returns 4: 1

  start = start || 0;
  length = typeof length === 'undefined' ? str.length : length || 0;
  if (start < 0) start = str.length + start;
  if (length < 0) length = str.length - start + length;
  if (start < 0 || start >= str.length || length <= 0 || e >= str.length) return 0;
  var e = Math.min(str.length, start + length);
  for (var i = start, lgth = 0; i < e; i++) {
    if (mask.indexOf(str.charAt(i)) !== -1) {
      break;
    }
    ++lgth;
  }
  return lgth;
};
//# sourceMappingURL=strcspn.js-84501fd3524af568d65cca98cabe1772.map";s:6:"digest";s:32:"6d1ffeecac6a698c1d07f05e5b35f6dd";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strcspn.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strcspn.js-84501fd3524af568d65cca98cabe1772.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strcspn.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"84501fd3524af568d65cca98cabe1772";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/strcspn.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/strcspn.js";}