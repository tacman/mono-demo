O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strripos.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strripos-1752523b8cccf5be242e3c73933f9b67.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strripos.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:950:"'use strict';

module.exports = function strripos(haystack, needle, offset) {
  //  discuss at: https://locutus.io/php/strripos/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //    input by: saulius
  //   example 1: strripos('Kevin van Zonneveld', 'E')
  //   returns 1: 16

  haystack = (haystack + '').toLowerCase();
  needle = (needle + '').toLowerCase();

  var i = -1;
  if (offset) {
    i = (haystack + '').slice(offset).lastIndexOf(needle); // strrpos' offset indicates starting point of range till end,
    // while lastIndexOf's optional 2nd argument indicates ending point of range from the beginning
    if (i !== -1) {
      i += offset;
    }
  } else {
    i = (haystack + '').lastIndexOf(needle);
  }
  return i >= 0 ? i : false;
};
//# sourceMappingURL=strripos.js-500cbf876a073d6dd0c1bdf3e7c0df53.map";s:6:"digest";s:32:"1752523b8cccf5be242e3c73933f9b67";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strripos.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strripos.js-500cbf876a073d6dd0c1bdf3e7c0df53.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strripos.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"500cbf876a073d6dd0c1bdf3e7c0df53";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/strings/strripos.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/strings/strripos.js";}