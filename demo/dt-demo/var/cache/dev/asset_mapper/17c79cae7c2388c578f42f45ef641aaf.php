O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:97:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/gmmktime.js";s:10:"publicPath";s:103:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmmktime-b291cb1a6fb1eaad2558b8dc79976710.js";s:23:"publicPathWithoutDigest";s:70:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmmktime.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1370:"'use strict';

module.exports = function gmmktime() {
  //  discuss at: https://locutus.io/php/gmmktime/
  // original by: Brett Zamir (https://brett-zamir.me)
  // original by: mktime
  //   example 1: gmmktime(14, 10, 2, 2, 1, 2008)
  //   returns 1: 1201875002
  //   example 2: gmmktime(0, 0, -1, 1, 1, 1970)
  //   returns 2: -1

  var d = new Date();
  var r = arguments;
  var i = 0;
  var e = ['Hours', 'Minutes', 'Seconds', 'Month', 'Date', 'FullYear'];

  for (i = 0; i < e.length; i++) {
    if (typeof r[i] === 'undefined') {
      r[i] = d['getUTC' + e[i]]();
      // +1 to fix JS months.
      r[i] += i === 3;
    } else {
      r[i] = parseInt(r[i], 10);
      if (isNaN(r[i])) {
        return false;
      }
    }
  }

  // Map years 0-69 to 2000-2069 and years 70-100 to 1970-2000.
  r[5] += r[5] >= 0 ? r[5] <= 69 ? 2e3 : r[5] <= 100 ? 1900 : 0 : 0;

  // Set year, month (-1 to fix JS months), and date.
  // !This must come before the call to setHours!
  d.setUTCFullYear(r[5], r[3] - 1, r[4]);

  // Set hours, minutes, and seconds.
  d.setUTCHours(r[0], r[1], r[2]);

  var time = d.getTime();

  // Divide milliseconds by 1000 to return seconds and drop decimal.
  // Add 1 second if negative or it'll be off from PHP by 1 second.
  return (time / 1e3 >> 0) - (time < 0);
};
//# sourceMappingURL=gmmktime.js-b84e9cd0d74c506fc8ec820a8d1b9742.map";s:6:"digest";s:32:"b291cb1a6fb1eaad2558b8dc79976710";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/gmmktime.js.map";s:10:"publicPath";s:107:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmmktime.js-b84e9cd0d74c506fc8ec820a8d1b9742.map";s:23:"publicPathWithoutDigest";s:74:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/gmmktime.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"b84e9cd0d74c506fc8ec820a8d1b9742";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:66:"@survos/api-grid/node_modules/locutus/php/datetime/gmmktime.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:62:"@survos/api-grid/node_modules/locutus/php/datetime/gmmktime.js";}