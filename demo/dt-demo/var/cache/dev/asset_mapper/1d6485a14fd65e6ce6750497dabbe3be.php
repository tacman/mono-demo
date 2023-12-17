O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:89:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/isset.js";s:10:"publicPath";s:95:"/assets/@survos/api-grid/node_modules/locutus/php/var/isset-067360704bd049a1ed7cc74c688d9e6c.js";s:23:"publicPathWithoutDigest";s:62:"/assets/@survos/api-grid/node_modules/locutus/php/var/isset.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:772:"'use strict';

module.exports = function isset() {
  //  discuss at: https://locutus.io/php/isset/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: FremyCompany
  // improved by: Onno Marsman (https://twitter.com/onnomarsman)
  // improved by: Rafał Kukawski (https://blog.kukawski.pl)
  //   example 1: isset( undefined, true)
  //   returns 1: false
  //   example 2: isset( 'Kevin van Zonneveld' )
  //   returns 2: true

  var a = arguments;
  var l = a.length;
  var i = 0;
  var undef = void 0;

  if (l === 0) {
    throw new Error('Empty isset');
  }

  while (i !== l) {
    if (a[i] === undef || a[i] === null) {
      return false;
    }
    i++;
  }

  return true;
};
//# sourceMappingURL=isset.js-002b7412243582872799df0b716657b3.map";s:6:"digest";s:32:"067360704bd049a1ed7cc74c688d9e6c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/var/isset.js.map";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/locutus/php/var/isset.js-002b7412243582872799df0b716657b3.map";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/locutus/php/var/isset.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"002b7412243582872799df0b716657b3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/locutus/php/var/isset.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:54:"@survos/api-grid/node_modules/locutus/php/var/isset.js";}