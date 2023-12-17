O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/pcre/preg_quote.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/preg_quote-5a81358d9db1f6b4db75027dd86a7ff8.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/preg_quote.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:886:"'use strict';

module.exports = function preg_quote(str, delimiter) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/preg_quote/
  // original by: booeyOH
  // improved by: Ates Goral (https://magnetiq.com)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //   example 1: preg_quote("$40")
  //   returns 1: '\\$40'
  //   example 2: preg_quote("*RRRING* Hello?")
  //   returns 2: '\\*RRRING\\* Hello\\?'
  //   example 3: preg_quote("\\.+*?[^]$(){}=!<>|:")
  //   returns 3: '\\\\\\.\\+\\*\\?\\[\\^\\]\\$\\(\\)\\{\\}\\=\\!\\<\\>\\|\\:'

  return (str + '').replace(new RegExp('[.\\\\+*?\\[\\^\\]$(){}=!<>|:\\' + (delimiter || '') + '-]', 'g'), '\\$&');
};
//# sourceMappingURL=preg_quote.js-2f2b63aff5de4a7b56f24b27dfc5e3b8.map";s:6:"digest";s:32:"5a81358d9db1f6b4db75027dd86a7ff8";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/pcre/preg_quote.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/preg_quote.js-2f2b63aff5de4a7b56f24b27dfc5e3b8.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/preg_quote.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"2f2b63aff5de4a7b56f24b27dfc5e3b8";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/pcre/preg_quote.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/pcre/preg_quote.js";}