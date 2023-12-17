O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/substr_count.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_count-81a6c5d39bf18ad60705cd156920da5f.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_count.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1088:"'use strict';

module.exports = function substr_count(haystack, needle, offset, length) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/substr_count/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Brett Zamir (https://brett-zamir.me)
  // improved by: Thomas
  //   example 1: substr_count('Kevin van Zonneveld', 'e')
  //   returns 1: 3
  //   example 2: substr_count('Kevin van Zonneveld', 'K', 1)
  //   returns 2: 0
  //   example 3: substr_count('Kevin van Zonneveld', 'Z', 0, 10)
  //   returns 3: false

  var cnt = 0;

  haystack += '';
  needle += '';
  if (isNaN(offset)) {
    offset = 0;
  }
  if (isNaN(length)) {
    length = 0;
  }
  if (needle.length === 0) {
    return false;
  }
  offset--;

  while ((offset = haystack.indexOf(needle, offset + 1)) !== -1) {
    if (length > 0 && offset + needle.length > length) {
      return false;
    }
    cnt++;
  }

  return cnt;
};
//# sourceMappingURL=substr_count.js-8a7721c6bff3d00a9471a8a2635b000d.map";s:6:"digest";s:32:"81a6c5d39bf18ad60705cd156920da5f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/substr_count.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_count.js-8a7721c6bff3d00a9471a8a2635b000d.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_count.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"8a7721c6bff3d00a9471a8a2635b000d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/strings/substr_count.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/strings/substr_count.js";}