O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/substr_compare.js";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_compare-a07ff10d5d44d56b2f98b741deae36a2.js";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_compare.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1149:"'use strict';

module.exports = function substr_compare(mainStr, str, offset, length, caseInsensitivity) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/substr_compare/
  // original by: Brett Zamir (https://brett-zamir.me)
  // original by: strcasecmp, strcmp
  //   example 1: substr_compare("abcde", "bc", 1, 2)
  //   returns 1: 0

  if (!offset && offset !== 0) {
    throw new Error('Missing offset for substr_compare()');
  }

  if (offset < 0) {
    offset = mainStr.length + offset;
  }

  if (length && length > mainStr.length - offset) {
    return false;
  }
  length = length || mainStr.length - offset;

  mainStr = mainStr.substr(offset, length);
  // Should only compare up to the desired length
  str = str.substr(0, length);
  if (caseInsensitivity) {
    // Works as strcasecmp
    mainStr = (mainStr + '').toLowerCase();
    str = (str + '').toLowerCase();
    if (mainStr === str) {
      return 0;
    }
    return mainStr > str ? 1 : -1;
  }
  // Works as strcmp
  return mainStr === str ? 0 : mainStr > str ? 1 : -1;
};
//# sourceMappingURL=substr_compare.js-3df1a232643344017d9fffab21f99067.map";s:6:"digest";s:32:"a07ff10d5d44d56b2f98b741deae36a2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:106:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/substr_compare.js.map";s:10:"publicPath";s:112:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_compare.js-3df1a232643344017d9fffab21f99067.map";s:23:"publicPathWithoutDigest";s:79:"/assets/@survos/api-grid/node_modules/locutus/php/strings/substr_compare.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"3df1a232643344017d9fffab21f99067";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:71:"@survos/api-grid/node_modules/locutus/php/strings/substr_compare.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/strings/substr_compare.js";}