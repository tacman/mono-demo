O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/sha1.js";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/strings/sha1-402925b8649e7f14a1842ce890e04ced.js";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/strings/sha1.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3977:"'use strict';

module.exports = function sha1(str) {
  //  discuss at: https://locutus.io/php/sha1/
  // original by: Webtoolkit.info (https://www.webtoolkit.info/)
  // improved by: Michael White (https://getsprink.com)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Keep in mind that in accordance with PHP, the whole string is buffered and then
  //      note 1: hashed. If available, we'd recommend using Node's native crypto modules directly
  //      note 1: in a steaming fashion for faster and more efficient hashing
  //   example 1: sha1('Kevin van Zonneveld')
  //   returns 1: '54916d2e62f65b3afa6e192e6a601cdbe5cb5897'

  var hash = void 0;
  try {
    var crypto = require('crypto');
    var sha1sum = crypto.createHash('sha1');
    sha1sum.update(str);
    hash = sha1sum.digest('hex');
  } catch (e) {
    hash = undefined;
  }

  if (hash !== undefined) {
    return hash;
  }

  var _rotLeft = function _rotLeft(n, s) {
    var t4 = n << s | n >>> 32 - s;
    return t4;
  };

  var _cvtHex = function _cvtHex(val) {
    var str = '';
    var i = void 0;
    var v = void 0;

    for (i = 7; i >= 0; i--) {
      v = val >>> i * 4 & 0x0f;
      str += v.toString(16);
    }
    return str;
  };

  var blockstart = void 0;
  var i = void 0,
      j = void 0;
  var W = new Array(80);
  var H0 = 0x67452301;
  var H1 = 0xEFCDAB89;
  var H2 = 0x98BADCFE;
  var H3 = 0x10325476;
  var H4 = 0xC3D2E1F0;
  var A = void 0,
      B = void 0,
      C = void 0,
      D = void 0,
      E = void 0;
  var temp = void 0;

  // utf8_encode
  str = unescape(encodeURIComponent(str));
  var strLen = str.length;

  var wordArray = [];
  for (i = 0; i < strLen - 3; i += 4) {
    j = str.charCodeAt(i) << 24 | str.charCodeAt(i + 1) << 16 | str.charCodeAt(i + 2) << 8 | str.charCodeAt(i + 3);
    wordArray.push(j);
  }

  switch (strLen % 4) {
    case 0:
      i = 0x080000000;
      break;
    case 1:
      i = str.charCodeAt(strLen - 1) << 24 | 0x0800000;
      break;
    case 2:
      i = str.charCodeAt(strLen - 2) << 24 | str.charCodeAt(strLen - 1) << 16 | 0x08000;
      break;
    case 3:
      i = str.charCodeAt(strLen - 3) << 24 | str.charCodeAt(strLen - 2) << 16 | str.charCodeAt(strLen - 1) << 8 | 0x80;
      break;
  }

  wordArray.push(i);

  while (wordArray.length % 16 !== 14) {
    wordArray.push(0);
  }

  wordArray.push(strLen >>> 29);
  wordArray.push(strLen << 3 & 0x0ffffffff);

  for (blockstart = 0; blockstart < wordArray.length; blockstart += 16) {
    for (i = 0; i < 16; i++) {
      W[i] = wordArray[blockstart + i];
    }
    for (i = 16; i <= 79; i++) {
      W[i] = _rotLeft(W[i - 3] ^ W[i - 8] ^ W[i - 14] ^ W[i - 16], 1);
    }

    A = H0;
    B = H1;
    C = H2;
    D = H3;
    E = H4;

    for (i = 0; i <= 19; i++) {
      temp = _rotLeft(A, 5) + (B & C | ~B & D) + E + W[i] + 0x5A827999 & 0x0ffffffff;
      E = D;
      D = C;
      C = _rotLeft(B, 30);
      B = A;
      A = temp;
    }

    for (i = 20; i <= 39; i++) {
      temp = _rotLeft(A, 5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1 & 0x0ffffffff;
      E = D;
      D = C;
      C = _rotLeft(B, 30);
      B = A;
      A = temp;
    }

    for (i = 40; i <= 59; i++) {
      temp = _rotLeft(A, 5) + (B & C | B & D | C & D) + E + W[i] + 0x8F1BBCDC & 0x0ffffffff;
      E = D;
      D = C;
      C = _rotLeft(B, 30);
      B = A;
      A = temp;
    }

    for (i = 60; i <= 79; i++) {
      temp = _rotLeft(A, 5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6 & 0x0ffffffff;
      E = D;
      D = C;
      C = _rotLeft(B, 30);
      B = A;
      A = temp;
    }

    H0 = H0 + A & 0x0ffffffff;
    H1 = H1 + B & 0x0ffffffff;
    H2 = H2 + C & 0x0ffffffff;
    H3 = H3 + D & 0x0ffffffff;
    H4 = H4 + E & 0x0ffffffff;
  }

  temp = _cvtHex(H0) + _cvtHex(H1) + _cvtHex(H2) + _cvtHex(H3) + _cvtHex(H4);
  return temp.toLowerCase();
};
//# sourceMappingURL=sha1.js-127e70ee674d0ba908daaacffc17fcf0.map";s:6:"digest";s:32:"402925b8649e7f14a1842ce890e04ced";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/sha1.js.map";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/strings/sha1.js-127e70ee674d0ba908daaacffc17fcf0.map";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/strings/sha1.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"127e70ee674d0ba908daaacffc17fcf0";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/strings/sha1.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/strings/sha1.js";}