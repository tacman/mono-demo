O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/trim.js";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/strings/trim-6bb0878a282a3858275aa40ac6c42b72.js";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/strings/trim.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1597:"'use strict';

module.exports = function trim(str, charlist) {
  //  discuss at: https://locutus.io/php/trim/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: mdsjack (https://www.mdsjack.bo.it)
  // improved by: Alexander Ermolaev (https://snippets.dzone.com/user/AlexanderErmolaev)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Steven Levithan (https://blog.stevenlevithan.com)
  // improved by: Jack
  //    input by: Erkekjetter
  //    input by: DxGx
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //   example 1: trim('    Kevin van Zonneveld    ')
  //   returns 1: 'Kevin van Zonneveld'
  //   example 2: trim('Hello World', 'Hdle')
  //   returns 2: 'o Wor'
  //   example 3: trim(16, 1)
  //   returns 3: '6'

  var whitespace = [' ', '\n', '\r', '\t', '\f', '\x0b', '\xa0', '\u2000', '\u2001', '\u2002', '\u2003', '\u2004', '\u2005', '\u2006', '\u2007', '\u2008', '\u2009', '\u200A', '\u200B', '\u2028', '\u2029', '\u3000'].join('');
  var l = 0;
  var i = 0;
  str += '';

  if (charlist) {
    whitespace = (charlist + '').replace(/([[\]().?/*{}+$^:])/g, '$1');
  }

  l = str.length;
  for (i = 0; i < l; i++) {
    if (whitespace.indexOf(str.charAt(i)) === -1) {
      str = str.substring(i);
      break;
    }
  }

  l = str.length;
  for (i = l - 1; i >= 0; i--) {
    if (whitespace.indexOf(str.charAt(i)) === -1) {
      str = str.substring(0, i + 1);
      break;
    }
  }

  return whitespace.indexOf(str.charAt(0)) === -1 ? str : '';
};
//# sourceMappingURL=trim.js-8f57cd6fd13b660000c214fb8e7d4253.map";s:6:"digest";s:32:"6bb0878a282a3858275aa40ac6c42b72";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/trim.js.map";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/strings/trim.js-8f57cd6fd13b660000c214fb8e7d4253.map";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/strings/trim.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"8f57cd6fd13b660000c214fb8e7d4253";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/strings/trim.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/strings/trim.js";}