O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strstr.js";s:10:"publicPath";s:100:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strstr-3862ea046ef25157da0feb77ba3eed85.js";s:23:"publicPathWithoutDigest";s:67:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strstr.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:938:"'use strict';

module.exports = function strstr(haystack, needle, bool) {
  //  discuss at: https://locutus.io/php/strstr/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  //   example 1: strstr('Kevin van Zonneveld', 'van')
  //   returns 1: 'van Zonneveld'
  //   example 2: strstr('Kevin van Zonneveld', 'van', true)
  //   returns 2: 'Kevin '
  //   example 3: strstr('name@example.com', '@')
  //   returns 3: '@example.com'
  //   example 4: strstr('name@example.com', '@', true)
  //   returns 4: 'name'

  var pos = 0;

  haystack += '';
  pos = haystack.indexOf(needle);
  if (pos === -1) {
    return false;
  } else {
    if (bool) {
      return haystack.substr(0, pos);
    } else {
      return haystack.slice(pos);
    }
  }
};
//# sourceMappingURL=strstr.js-1a9435efba9140dce4a50fe607a8be61.map";s:6:"digest";s:32:"3862ea046ef25157da0feb77ba3eed85";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strstr.js.map";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strstr.js-1a9435efba9140dce4a50fe607a8be61.map";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strstr.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"1a9435efba9140dce4a50fe607a8be61";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/strings/strstr.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:59:"@survos/api-grid/node_modules/locutus/php/strings/strstr.js";}