O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/ord.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/strings/ord-ca3c501a49489b644590c991d825df3d.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/strings/ord.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1449:"'use strict';

module.exports = function ord(string) {
  //  discuss at: https://locutus.io/php/ord/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //    input by: incidence
  //   example 1: ord('K')
  //   returns 1: 75
  //   example 2: ord('\uD800\uDC00'); // surrogate pair to create a single Unicode character
  //   returns 2: 65536

  var str = string + '';
  var code = str.charCodeAt(0);

  if (code >= 0xD800 && code <= 0xDBFF) {
    // High surrogate (could change last hex to 0xDB7F to treat
    // high private surrogates as single characters)
    var hi = code;
    if (str.length === 1) {
      // This is just a high surrogate with no following low surrogate,
      // so we return its value;
      return code;
      // we could also throw an error as it is not a complete character,
      // but someone may want to know
    }
    var low = str.charCodeAt(1);
    return (hi - 0xD800) * 0x400 + (low - 0xDC00) + 0x10000;
  }
  if (code >= 0xDC00 && code <= 0xDFFF) {
    // Low surrogate
    // This is just a low surrogate with no preceding high surrogate,
    // so we return its value;
    return code;
    // we could also throw an error as it is not a complete character,
    // but someone may want to know
  }

  return code;
};
//# sourceMappingURL=ord.js-9c0c3ef452764a4b337d98c8bfb1e3ab.map";s:6:"digest";s:32:"ca3c501a49489b644590c991d825df3d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/ord.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/ord.js-9c0c3ef452764a4b337d98c8bfb1e3ab.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/ord.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"9c0c3ef452764a4b337d98c8bfb1e3ab";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/ord.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/strings/ord.js";}