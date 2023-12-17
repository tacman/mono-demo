O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/soundex.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/strings/soundex-7c8d5073607ea258361cbc4528d1de4f.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/strings/soundex.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1402:"'use strict';

module.exports = function soundex(str) {
  //  discuss at: https://locutus.io/php/soundex/
  // original by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
  // original by: Arnout Kazemier (https://www.3rd-Eden.com)
  // improved by: Jack
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Brett Zamir (https://brett-zamir.me)
  //  revised by: Rafał Kukawski (https://blog.kukawski.pl)
  //   example 1: soundex('Kevin')
  //   returns 1: 'K150'
  //   example 2: soundex('Ellery')
  //   returns 2: 'E460'
  //   example 3: soundex('Euler')
  //   returns 3: 'E460'

  str = (str + '').toUpperCase();
  if (!str) {
    return '';
  }

  var sdx = [0, 0, 0, 0];
  var m = {
    B: 1,
    F: 1,
    P: 1,
    V: 1,
    C: 2,
    G: 2,
    J: 2,
    K: 2,
    Q: 2,
    S: 2,
    X: 2,
    Z: 2,
    D: 3,
    T: 3,
    L: 4,
    M: 5,
    N: 5,
    R: 6
  };
  var i = 0;
  var j = void 0;
  var s = 0;
  var c = void 0;
  var p = void 0;

  while ((c = str.charAt(i++)) && s < 4) {
    if (j = m[c]) {
      if (j !== p) {
        sdx[s++] = p = j;
      }
    } else {
      s += i === 1;
      p = 0;
    }
  }

  sdx[0] = str.charAt(0);

  return sdx.join('');
};
//# sourceMappingURL=soundex.js-48e1ac7f1be882c717811770585c3598.map";s:6:"digest";s:32:"7c8d5073607ea258361cbc4528d1de4f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/soundex.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/soundex.js-48e1ac7f1be882c717811770585c3598.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/soundex.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"48e1ac7f1be882c717811770585c3598";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/soundex.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/strings/soundex.js";}