O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/chr.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/strings/chr-836a6c32ccc2b91c35e8a2634df6091a.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/strings/chr.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:887:""use strict";

module.exports = function chr(codePt) {
  //  discuss at: https://locutus.io/php/chr/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: chr(75) === 'K'
  //   example 1: chr(65536) === '\uD800\uDC00'
  //   returns 1: true
  //   returns 1: true

  if (codePt > 0xFFFF) {
    // Create a four-byte string (length 2) since this code point is high
    //   enough for the UTF-16 encoding (JavaScript internal use), to
    //   require representation with two surrogates (reserved non-characters
    //   used for building other characters; the first is "high" and the next "low")
    codePt -= 0x10000;
    return String.fromCharCode(0xD800 + (codePt >> 10), 0xDC00 + (codePt & 0x3FF));
  }
  return String.fromCharCode(codePt);
};
//# sourceMappingURL=chr.js-9afbb880e17cb85e3e4c9c688b76b1be.map";s:6:"digest";s:32:"836a6c32ccc2b91c35e8a2634df6091a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/chr.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/chr.js-9afbb880e17cb85e3e4c9c688b76b1be.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/chr.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"9afbb880e17cb85e3e4c9c688b76b1be";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/chr.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/strings/chr.js";}