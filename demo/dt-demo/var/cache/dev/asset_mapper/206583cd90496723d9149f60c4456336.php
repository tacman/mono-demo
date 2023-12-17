O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_split.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_split-7bd08b51806a3e38dcf9a3cdb0bbfd54.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_split.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:969:"'use strict';

module.exports = function str_split(string, splitLength) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/str_split/
  // original by: Martijn Wieringa
  // improved by: Brett Zamir (https://brett-zamir.me)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //  revised by: Theriault (https://github.com/Theriault)
  //  revised by: Rafał Kukawski (https://blog.kukawski.pl)
  //    input by: Bjorn Roesbeke (https://www.bjornroesbeke.be/)
  //   example 1: str_split('Hello Friend', 3)
  //   returns 1: ['Hel', 'lo ', 'Fri', 'end']

  if (splitLength === null) {
    splitLength = 1;
  }
  if (string === null || splitLength < 1) {
    return false;
  }

  string += '';
  var chunks = [];
  var pos = 0;
  var len = string.length;

  while (pos < len) {
    chunks.push(string.slice(pos, pos += splitLength));
  }

  return chunks;
};
//# sourceMappingURL=str_split.js-cc3e3a3d9cac302e251cd48a70b357c5.map";s:6:"digest";s:32:"7bd08b51806a3e38dcf9a3cdb0bbfd54";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_split.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_split.js-cc3e3a3d9cac302e251cd48a70b357c5.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_split.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"cc3e3a3d9cac302e251cd48a70b357c5";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/strings/str_split.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/strings/str_split.js";}