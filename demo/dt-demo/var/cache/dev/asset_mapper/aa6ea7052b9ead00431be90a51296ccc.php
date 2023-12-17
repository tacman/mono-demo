O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:111:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/quoted_printable_decode.js";s:10:"publicPath";s:117:"/assets/@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_decode-7f7438cc5ee4b7b65fc093ba13bdde10.js";s:23:"publicPathWithoutDigest";s:84:"/assets/@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_decode.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1690:"'use strict';

module.exports = function quoted_printable_decode(str) {
  // eslint-disable-line camelcase
  //       discuss at: https://locutus.io/php/quoted_printable_decode/
  //      original by: Ole Vrijenhoek
  //      bugfixed by: Brett Zamir (https://brett-zamir.me)
  //      bugfixed by: Theriault (https://github.com/Theriault)
  // reimplemented by: Theriault (https://github.com/Theriault)
  //      improved by: Brett Zamir (https://brett-zamir.me)
  //        example 1: quoted_printable_decode('a=3Db=3Dc')
  //        returns 1: 'a=b=c'
  //        example 2: quoted_printable_decode('abc  =20\r\n123  =20\r\n')
  //        returns 2: 'abc   \r\n123   \r\n'
  //        example 3: quoted_printable_decode('012345678901234567890123456789012345678901234567890123456789012345678901234=\r\n56789')
  //        returns 3: '01234567890123456789012345678901234567890123456789012345678901234567890123456789'
  //        example 4: quoted_printable_decode("Lorem ipsum dolor sit amet=23, consectetur adipisicing elit")
  //        returns 4: 'Lorem ipsum dolor sit amet#, consectetur adipisicing elit'

  // Decodes all equal signs followed by two hex digits
  var RFC2045Decode1 = /=\r\n/gm;

  // the RFC states against decoding lower case encodings, but following apparent PHP behavior
  var RFC2045Decode2IN = /=([0-9A-F]{2})/gim;
  // RFC2045Decode2IN = /=([0-9A-F]{2})/gm,

  var RFC2045Decode2OUT = function RFC2045Decode2OUT(sMatch, sHex) {
    return String.fromCharCode(parseInt(sHex, 16));
  };

  return str.replace(RFC2045Decode1, '').replace(RFC2045Decode2IN, RFC2045Decode2OUT);
};
//# sourceMappingURL=quoted_printable_decode.js-176fc8c7469ed63e56ba2e5d710a60a8.map";s:6:"digest";s:32:"7f7438cc5ee4b7b65fc093ba13bdde10";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:115:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/quoted_printable_decode.js.map";s:10:"publicPath";s:121:"/assets/@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_decode.js-176fc8c7469ed63e56ba2e5d710a60a8.map";s:23:"publicPathWithoutDigest";s:88:"/assets/@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_decode.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"176fc8c7469ed63e56ba2e5d710a60a8";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:80:"@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_decode.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:76:"@survos/api-grid/node_modules/locutus/php/strings/quoted_printable_decode.js";}