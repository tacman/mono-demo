O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/ctype/ctype_xdigit.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_xdigit-e7367ec33b2a2289f3a935f6b12c89e4.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_xdigit.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:788:"'use strict';

module.exports = function ctype_xdigit(text) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/ctype_xdigit/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: ctype_xdigit('01dF')
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

  return text.search(p.locales[p.localeCategories.LC_CTYPE].LC_CTYPE.xd) !== -1;
};
//# sourceMappingURL=ctype_xdigit.js-bb021d58e5cf69264f93a306e804aa3e.map";s:6:"digest";s:32:"e7367ec33b2a2289f3a935f6b12c89e4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:102:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/ctype/ctype_xdigit.js.map";s:10:"publicPath";s:108:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_xdigit.js-bb021d58e5cf69264f93a306e804aa3e.map";s:23:"publicPathWithoutDigest";s:75:"/assets/@survos/api-grid/node_modules/locutus/php/ctype/ctype_xdigit.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"bb021d58e5cf69264f93a306e804aa3e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:67:"@survos/api-grid/node_modules/locutus/php/ctype/ctype_xdigit.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/locutus/php/ctype/ctype_xdigit.js";}