O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:111:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/quoted_printable_encode.js";s:10:"publicPath";s:117:"/assets/@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_encode-b20a55204b5be24e8447c3a6679b61aa.js";s:23:"publicPathWithoutDigest";s:84:"/assets/@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_encode.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2182:"'use strict';

module.exports = function quoted_printable_encode(str) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/quoted_printable_encode/
  // original by: Theriault (https://github.com/Theriault)
  // improved by: Brett Zamir (https://brett-zamir.me)
  // improved by: Theriault (https://github.com/Theriault)
  //   example 1: quoted_printable_encode('a=b=c')
  //   returns 1: 'a=3Db=3Dc'
  //   example 2: quoted_printable_encode('abc   \r\n123   \r\n')
  //   returns 2: 'abc  =20\r\n123  =20\r\n'
  //   example 3: quoted_printable_encode('0123456789012345678901234567890123456789012345678901234567890123456789012345')
  //   returns 3: '012345678901234567890123456789012345678901234567890123456789012345678901234=\r\n5'
  //        test: skip-2

  var hexChars = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F'];
  var RFC2045Encode1IN = / \r\n|\r\n|[^!-<>-~ ]/gm;
  var RFC2045Encode1OUT = function RFC2045Encode1OUT(sMatch) {
    // Encode space before CRLF sequence to prevent spaces from being stripped
    // Keep hard line breaks intact; CRLF sequences
    if (sMatch.length > 1) {
      return sMatch.replace(' ', '=20');
    }
    // Encode matching character
    var chr = sMatch.charCodeAt(0);
    return '=' + hexChars[chr >>> 4 & 15] + hexChars[chr & 15];
  };

  // Split lines to 75 characters; the reason it's 75 and not 76 is because softline breaks are
  // preceeded by an equal sign; which would be the 76th character. However, if the last line/string
  // was exactly 76 characters, then a softline would not be needed. PHP currently softbreaks
  // anyway; so this function replicates PHP.

  var RFC2045Encode2IN = /.{1,72}(?!\r\n)[^=]{0,3}/g;
  var RFC2045Encode2OUT = function RFC2045Encode2OUT(sMatch) {
    if (sMatch.substr(sMatch.length - 2) === '\r\n') {
      return sMatch;
    }
    return sMatch + '=\r\n';
  };

  str = str.replace(RFC2045Encode1IN, RFC2045Encode1OUT).replace(RFC2045Encode2IN, RFC2045Encode2OUT);

  // Strip last softline break
  return str.substr(0, str.length - 3);
};
//# sourceMappingURL=quoted_printable_encode.js-03c39576b5247e67aa32867d64d75b23.map";s:6:"digest";s:32:"b20a55204b5be24e8447c3a6679b61aa";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:115:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/quoted_printable_encode.js.map";s:10:"publicPath";s:121:"/assets/@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_encode.js-03c39576b5247e67aa32867d64d75b23.map";s:23:"publicPathWithoutDigest";s:88:"/assets/@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_encode.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"03c39576b5247e67aa32867d64d75b23";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:80:"@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_encode.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:76:"@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_encode.js";}