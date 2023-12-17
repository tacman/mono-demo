O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/mktime.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/mktime-98c2d2ea7582f580b079657cd1c402b4.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/mktime.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:2626:"'use strict';

module.exports = function mktime() {
  //  discuss at: https://locutus.io/php/mktime/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: baris ozdil
  // improved by: Kevin van Zonneveld (https://kvz.io)
  // improved by: FGFEmperor
  // improved by: Brett Zamir (https://brett-zamir.me)
  //    input by: gabriel paderni
  //    input by: Yannoo
  //    input by: jakes
  //    input by: 3D-GRAF
  //    input by: Chris
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Marc Palau
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //  revised by: Theriault (https://github.com/Theriault)
  //      note 1: The return values of the following examples are
  //      note 1: received only if your system's timezone is UTC.
  //   example 1: mktime(14, 10, 2, 2, 1, 2008)
  //   returns 1: 1201875002
  //   example 2: mktime(0, 0, 0, 0, 1, 2008)
  //   returns 2: 1196467200
  //   example 3: var $make = mktime()
  //   example 3: var $td = new Date()
  //   example 3: var $real = Math.floor($td.getTime() / 1000)
  //   example 3: var $diff = ($real - $make)
  //   example 3: $diff < 5
  //   returns 3: true
  //   example 4: mktime(0, 0, 0, 13, 1, 1997)
  //   returns 4: 883612800
  //   example 5: mktime(0, 0, 0, 1, 1, 1998)
  //   returns 5: 883612800
  //   example 6: mktime(0, 0, 0, 1, 1, 98)
  //   returns 6: 883612800
  //   example 7: mktime(23, 59, 59, 13, 0, 2010)
  //   returns 7: 1293839999
  //   example 8: mktime(0, 0, -1, 1, 1, 1970)
  //   returns 8: -1

  var d = new Date();
  var r = arguments;
  var i = 0;
  var e = ['Hours', 'Minutes', 'Seconds', 'Month', 'Date', 'FullYear'];

  for (i = 0; i < e.length; i++) {
    if (typeof r[i] === 'undefined') {
      r[i] = d['get' + e[i]]();
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
  d.setFullYear(r[5], r[3] - 1, r[4]);

  // Set hours, minutes, and seconds.
  d.setHours(r[0], r[1], r[2]);

  var time = d.getTime();

  // Divide milliseconds by 1000 to return seconds and drop decimal.
  // Add 1 second if negative or it'll be off from PHP by 1 second.
  return (time / 1e3 >> 0) - (time < 0);
};
//# sourceMappingURL=mktime.js-4ae09b1a25706323331689ced3f2ae2d.map";s:6:"digest";s:32:"98c2d2ea7582f580b079657cd1c402b4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/datetime/mktime.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/mktime.js-4ae09b1a25706323331689ced3f2ae2d.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/datetime/mktime.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"4ae09b1a25706323331689ced3f2ae2d";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/datetime/mktime.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/datetime/mktime.js";}