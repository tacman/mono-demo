O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/convert_uuencode.js";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/strings/convert_uuencode-a282a2d61f1502f6d62575a4fbef1156.js";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/strings/convert_uuencode.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1895:"'use strict';

module.exports = function convert_uuencode(str) {
  // eslint-disable-line camelcase
  //       discuss at: https://locutus.io/php/convert_uuencode/
  //      original by: Ole Vrijenhoek
  //      bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //      bugfixed by: Brett Zamir (https://brett-zamir.me)
  // reimplemented by: Ole Vrijenhoek
  //        example 1: convert_uuencode("test\ntext text\r\n")
  //        returns 1: "0=&5S=`IT97AT('1E>'0-\"@\n`\n"

  var isScalar = require('../var/is_scalar');

  var chr = function chr(c) {
    return String.fromCharCode(c);
  };

  if (!str || str === '') {
    return chr(0);
  } else if (!isScalar(str)) {
    return false;
  }

  var c = 0;
  var u = 0;
  var i = 0;
  var a = 0;
  var encoded = '';
  var tmp1 = '';
  var tmp2 = '';
  var bytes = {};

  // divide string into chunks of 45 characters
  var chunk = function chunk() {
    bytes = str.substr(u, 45).split('');
    for (i in bytes) {
      bytes[i] = bytes[i].charCodeAt(0);
    }
    return bytes.length || 0;
  };

  while ((c = chunk()) !== 0) {
    u += 45;

    // New line encoded data starts with number of bytes encoded.
    encoded += chr(c + 32);

    // Convert each char in bytes[] to a byte
    for (i in bytes) {
      tmp1 = bytes[i].toString(2);
      while (tmp1.length < 8) {
        tmp1 = '0' + tmp1;
      }
      tmp2 += tmp1;
    }

    while (tmp2.length % 6) {
      tmp2 = tmp2 + '0';
    }

    for (i = 0; i <= tmp2.length / 6 - 1; i++) {
      tmp1 = tmp2.substr(a, 6);
      if (tmp1 === '000000') {
        encoded += chr(96);
      } else {
        encoded += chr(parseInt(tmp1, 2) + 32);
      }
      a += 6;
    }
    a = 0;
    tmp2 = '';
    encoded += '\n';
  }

  // Add termination characters
  encoded += chr(96) + '\n';

  return encoded;
};
//# sourceMappingURL=convert_uuencode.js-06c8135bc81ca9d553322e3e20f5ddf3.map";s:6:"digest";s:32:"a282a2d61f1502f6d62575a4fbef1156";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:108:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/convert_uuencode.js.map";s:10:"publicPath";s:114:"/assets/@survos/api-grid/node_modules/locutus/php/strings/convert_uuencode.js-06c8135bc81ca9d553322e3e20f5ddf3.map";s:23:"publicPathWithoutDigest";s:81:"/assets/@survos/api-grid/node_modules/locutus/php/strings/convert_uuencode.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"06c8135bc81ca9d553322e3e20f5ddf3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:73:"@survos/api-grid/node_modules/locutus/php/strings/convert_uuencode.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/strings/convert_uuencode.js";}