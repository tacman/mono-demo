O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/network/inet_pton.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/network/inet_pton-b4b3523ff97496bcccbb39b254dfa0ac.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/network/inet_pton.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1666:"'use strict';

module.exports = function inet_pton(a) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/inet_pton/
  // original by: Theriault (https://github.com/Theriault)
  // improved by: alromh87 and JamieSlome
  //   example 1: inet_pton('::')
  //   returns 1: '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'
  //   example 2: inet_pton('127.0.0.1')
  //   returns 2: '\x7F\x00\x00\x01'

  var m = void 0;
  var i = void 0;
  var j = void 0;
  var f = String.fromCharCode;

  // IPv4
  m = a.match(/^(?:\d{1,3}(?:\.|$)){4}/);
  if (m) {
    m = m[0].split('.');
    m = f(m[0], m[1], m[2], m[3]);
    // Return if 4 bytes, otherwise false.
    return m.length === 4 ? m : false;
  }

  // IPv6
  if (a.length > 39) {
    return false;
  }

  m = a.split('::');

  if (m.length > 2) {
    return false;
  } // :: can't be used more than once in IPv6.

  var reHexDigits = /^[\da-f]{1,4}$/i;

  for (j = 0; j < m.length; j++) {
    if (m[j].length === 0) {
      // Skip if empty.
      continue;
    }
    m[j] = m[j].split(':');
    for (i = 0; i < m[j].length; i++) {
      var hextet = m[j][i];
      // check if valid hex string up to 4 chars
      if (!reHexDigits.test(hextet)) {
        return false;
      }

      hextet = parseInt(hextet, 16);

      // Would be NaN if it was blank, return false.
      if (isNaN(hextet)) {
        // Invalid IP.
        return false;
      }
      m[j][i] = f(hextet >> 8, hextet & 0xFF);
    }
    m[j] = m[j].join('');
  }

  return m.join('\x00'.repeat(16 - m.reduce(function (tl, m) {
    return tl + m.length;
  }, 0)));
};
//# sourceMappingURL=inet_pton.js-9e728ff95555f1703e5e87c7b16b0ebb.map";s:6:"digest";s:32:"b4b3523ff97496bcccbb39b254dfa0ac";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/network/inet_pton.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/network/inet_pton.js-9e728ff95555f1703e5e87c7b16b0ebb.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/network/inet_pton.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"9e728ff95555f1703e5e87c7b16b0ebb";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/network/inet_pton.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/network/inet_pton.js";}