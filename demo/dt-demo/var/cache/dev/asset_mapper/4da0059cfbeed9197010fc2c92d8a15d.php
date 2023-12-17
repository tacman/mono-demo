O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/pcre/sql_regcase.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/sql_regcase-6cfa4264694b56be5ef013675054c34f.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/sql_regcase.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1207:"'use strict';

module.exports = function sql_regcase(str) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/sql_regcase/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: sql_regcase('Foo - bar.')
  //   returns 1: '[Ff][Oo][Oo] - [Bb][Aa][Rr].'

  var setlocale = require('../strings/setlocale');
  var i = 0;
  var upper = '';
  var lower = '';
  var pos = 0;
  var retStr = '';

  setlocale('LC_ALL', 0);

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  upper = $locutus.php.locales[$locutus.php.localeCategories.LC_CTYPE].LC_CTYPE.upper;
  lower = $locutus.php.locales[$locutus.php.localeCategories.LC_CTYPE].LC_CTYPE.lower;

  // @todo: Make this more readable
  for (i = 0; i < str.length; i++) {
    if ((pos = upper.indexOf(str.charAt(i))) !== -1 || (pos = lower.indexOf(str.charAt(i))) !== -1) {
      retStr += '[' + upper.charAt(pos) + lower.charAt(pos) + ']';
    } else {
      retStr += str.charAt(i);
    }
  }

  return retStr;
};
//# sourceMappingURL=sql_regcase.js-a9649b743bc812f3b077f685a561692c.map";s:6:"digest";s:32:"6cfa4264694b56be5ef013675054c34f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/pcre/sql_regcase.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/sql_regcase.js-a9649b743bc812f3b077f685a561692c.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/pcre/sql_regcase.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a9649b743bc812f3b077f685a561692c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/pcre/sql_regcase.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/pcre/sql_regcase.js";}