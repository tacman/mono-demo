O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/python/string/capwords.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/python/string/capwords-64b8df31d4150db2ea69390a575f8459.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/python/string/capwords.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:841:"'use strict';

module.exports = function capwords(str) {
  //  discuss at: https://locutus.io/python/capwords/
  // original by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
  // improved by: Waldo Malqui Silva (https://waldo.malqui.info)
  // improved by: Robin
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //    input by: James (https://www.james-bell.co.uk/)
  //   example 1: capwords('kevin van  zonneveld')
  //   returns 1: 'Kevin Van  Zonneveld'
  //   example 2: capwords('HELLO WORLD')
  //   returns 2: 'HELLO WORLD'

  var pattern = /^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g;
  return (str + '').replace(pattern, function ($1) {
    return $1.toUpperCase();
  });
};
//# sourceMappingURL=capwords.js-3d1f8d1870ba417f472725265cdf04dd.map";s:6:"digest";s:32:"64b8df31d4150db2ea69390a575f8459";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/python/string/capwords.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/python/string/capwords.js-3d1f8d1870ba417f472725265cdf04dd.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/python/string/capwords.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"3d1f8d1870ba417f472725265cdf04dd";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/python/string/capwords.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/python/string/capwords.js";}