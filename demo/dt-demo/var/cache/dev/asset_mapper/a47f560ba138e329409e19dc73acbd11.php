O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/nl_langinfo.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/nl_langinfo-d47b2562aa39c09fbe8e1aee1fa175f2.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/nl_langinfo.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:3485:"'use strict';

module.exports = function nl_langinfo(item) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/nl_langinfo/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: nl_langinfo('DAY_1')
  //   returns 1: 'Sunday'

  var setlocale = require('../strings/setlocale');

  setlocale('LC_ALL', 0); // Ensure locale data is available

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  var loc = $locutus.php.locales[$locutus.php.localeCategories.LC_TIME];
  if (item.indexOf('ABDAY_') === 0) {
    return loc.LC_TIME.a[parseInt(item.replace(/^ABDAY_/, ''), 10) - 1];
  } else if (item.indexOf('DAY_') === 0) {
    return loc.LC_TIME.A[parseInt(item.replace(/^DAY_/, ''), 10) - 1];
  } else if (item.indexOf('ABMON_') === 0) {
    return loc.LC_TIME.b[parseInt(item.replace(/^ABMON_/, ''), 10) - 1];
  } else if (item.indexOf('MON_') === 0) {
    return loc.LC_TIME.B[parseInt(item.replace(/^MON_/, ''), 10) - 1];
  } else {
    switch (item) {
      // More LC_TIME
      case 'AM_STR':
        return loc.LC_TIME.p[0];
      case 'PM_STR':
        return loc.LC_TIME.p[1];
      case 'D_T_FMT':
        return loc.LC_TIME.c;
      case 'D_FMT':
        return loc.LC_TIME.x;
      case 'T_FMT':
        return loc.LC_TIME.X;
      case 'T_FMT_AMPM':
        return loc.LC_TIME.r;
      case 'ERA':
      case 'ERA_YEAR':
      case 'ERA_D_T_FMT':
      case 'ERA_D_FMT':
      case 'ERA_T_FMT':
        // all fall-throughs
        return loc.LC_TIME[item];
    }
    loc = $locutus.php.locales[$locutus.php.localeCategories.LC_MONETARY];
    if (item === 'CRNCYSTR') {
      // alias
      item = 'CURRENCY_SYMBOL';
    }
    switch (item) {
      case 'INT_CURR_SYMBOL':
      case 'CURRENCY_SYMBOL':
      case 'MON_DECIMAL_POINT':
      case 'MON_THOUSANDS_SEP':
      case 'POSITIVE_SIGN':
      case 'NEGATIVE_SIGN':
      case 'INT_FRAC_DIGITS':
      case 'FRAC_DIGITS':
      case 'P_CS_PRECEDES':
      case 'P_SEP_BY_SPACE':
      case 'N_CS_PRECEDES':
      case 'N_SEP_BY_SPACE':
      case 'P_SIGN_POSN':
      case 'N_SIGN_POSN':
        // all fall-throughs
        return loc.LC_MONETARY[item.toLowerCase()];
      case 'MON_GROUPING':
        // Same as above, or return something different since this returns an array?
        return loc.LC_MONETARY[item.toLowerCase()];
    }
    loc = $locutus.php.locales[$locutus.php.localeCategories.LC_NUMERIC];
    switch (item) {
      case 'RADIXCHAR':
      case 'DECIMAL_POINT':
        // Fall-through
        return loc.LC_NUMERIC[item.toLowerCase()];
      case 'THOUSEP':
      case 'THOUSANDS_SEP':
        // Fall-through
        return loc.LC_NUMERIC[item.toLowerCase()];
      case 'GROUPING':
        // Same as above, or return something different since this returns an array?
        return loc.LC_NUMERIC[item.toLowerCase()];
    }
    loc = $locutus.php.locales[$locutus.php.localeCategories.LC_MESSAGES];
    switch (item) {
      case 'YESEXPR':
      case 'NOEXPR':
      case 'YESSTR':
      case 'NOSTR':
        // all fall-throughs
        return loc.LC_MESSAGES[item];
    }
    loc = $locutus.php.locales[$locutus.php.localeCategories.LC_CTYPE];
    if (item === 'CODESET') {
      return loc.LC_CTYPE[item];
    }

    return false;
  }
};
//# sourceMappingURL=nl_langinfo.js-29b932e4613250947810350a75cb237d.map";s:6:"digest";s:32:"d47b2562aa39c09fbe8e1aee1fa175f2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/nl_langinfo.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/strings/nl_langinfo.js-29b932e4613250947810350a75cb237d.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/strings/nl_langinfo.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"29b932e4613250947810350a75cb237d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/strings/nl_langinfo.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/nl_langinfo.js";}