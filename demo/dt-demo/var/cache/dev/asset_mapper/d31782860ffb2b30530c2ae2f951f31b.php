O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/ctype/ctype_print.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_print-63958f069952aaf07e38b9fe7971adce.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_print.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:786:"'use strict';

module.exports = function ctype_print(text) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/ctype_print/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: ctype_print('AbC!#12')
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

  return text.search(p.locales[p.localeCategories.LC_CTYPE].LC_CTYPE.pr) !== -1;
};
//# sourceMappingURL=ctype_print.js-e7d120fe0a7052ffbfd19affda4294ea.map";s:6:"digest";s:32:"63958f069952aaf07e38b9fe7971adce";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/ctype/ctype_print.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_print.js-e7d120fe0a7052ffbfd19affda4294ea.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_print.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"e7d120fe0a7052ffbfd19affda4294ea";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/ctype/ctype_print.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/ctype/ctype_print.js";}