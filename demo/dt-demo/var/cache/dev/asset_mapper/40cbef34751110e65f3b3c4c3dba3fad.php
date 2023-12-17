O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_rot13.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_rot13-0586513ce772e95ffa5d12126a9e0ab1.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_rot13.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:852:"'use strict';

module.exports = function str_rot13(str) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/str_rot13/
  // original by: Jonas Raoni Soares Silva (https://www.jsfromhell.com)
  // improved by: Ates Goral (https://magnetiq.com)
  // improved by: Rafał Kukawski (https://blog.kukawski.pl)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //   example 1: str_rot13('Kevin van Zonneveld')
  //   returns 1: 'Xriva ina Mbaariryq'
  //   example 2: str_rot13('Xriva ina Mbaariryq')
  //   returns 2: 'Kevin van Zonneveld'
  //   example 3: str_rot13(33)
  //   returns 3: '33'

  return (str + '').replace(/[a-z]/gi, function (s) {
    return String.fromCharCode(s.charCodeAt(0) + (s.toLowerCase() < 'n' ? 13 : -13));
  });
};
//# sourceMappingURL=str_rot13.js-3e8950ee7ee9d890c5aedcddfabf519e.map";s:6:"digest";s:32:"0586513ce772e95ffa5d12126a9e0ab1";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/str_rot13.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_rot13.js-3e8950ee7ee9d890c5aedcddfabf519e.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/strings/str_rot13.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"3e8950ee7ee9d890c5aedcddfabf519e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/strings/str_rot13.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/strings/str_rot13.js";}