O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/ctype/ctype_punct.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_punct-a7e908df1a35b219de71a5b895331cf3.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_punct.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:781:"'use strict';

module.exports = function ctype_punct(text) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/ctype_punct/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: ctype_punct('!?')
  //   returns 1: true

  var setlocale = require('../strings/setlocale');
  if (typeof text !== 'string') {
    return false;
  }
  // ensure setup of localization variables takes place
  setlocale('LC_ALL', 0);

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  var p = $locutus.php;

  return text.search(p.locales[p.localeCategories.LC_CTYPE].LC_CTYPE.pu) !== -1;
};
//# sourceMappingURL=ctype_punct.js-a8a7873fd5a79f0cc9134e420fe0be9a.map";s:6:"digest";s:32:"a7e908df1a35b219de71a5b895331cf3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/ctype/ctype_punct.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_punct.js-a8a7873fd5a79f0cc9134e420fe0be9a.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_punct.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a8a7873fd5a79f0cc9134e420fe0be9a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/ctype/ctype_punct.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/ctype/ctype_punct.js";}