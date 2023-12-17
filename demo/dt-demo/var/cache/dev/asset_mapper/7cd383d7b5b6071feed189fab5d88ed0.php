O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/network/inet_ntop.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/network/inet_ntop-6e11c08bd35c5ff3a2709cff54f207e7.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/network/inet_ntop.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:989:"'use strict';

module.exports = function inet_ntop(a) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/inet_ntop/
  // original by: Theriault (https://github.com/Theriault)
  //   example 1: inet_ntop('\x7F\x00\x00\x01')
  //   returns 1: '127.0.0.1'
  //   _example 2: inet_ntop('\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\1')
  //   _returns 2: '::1'

  var i = 0;
  var m = '';
  var c = [];

  a += '';
  if (a.length === 4) {
    // IPv4
    return [a.charCodeAt(0), a.charCodeAt(1), a.charCodeAt(2), a.charCodeAt(3)].join('.');
  } else if (a.length === 16) {
    // IPv6
    for (i = 0; i < 16; i++) {
      c.push(((a.charCodeAt(i++) << 8) + a.charCodeAt(i)).toString(16));
    }
    return c.join(':').replace(/((^|:)0(?=:|$))+:?/g, function (t) {
      m = t.length > m.length ? t : m;
      return t;
    }).replace(m || ' ', '::');
  } else {
    // Invalid length
    return false;
  }
};
//# sourceMappingURL=inet_ntop.js-0e53b9b69c6b369bca8fb9e17c2c75bb.map";s:6:"digest";s:32:"6e11c08bd35c5ff3a2709cff54f207e7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/network/inet_ntop.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/network/inet_ntop.js-0e53b9b69c6b369bca8fb9e17c2c75bb.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/network/inet_ntop.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"0e53b9b69c6b369bca8fb9e17c2c75bb";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/network/inet_ntop.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/network/inet_ntop.js";}