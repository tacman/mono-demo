O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strncasecmp.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strncasecmp-f0085241d34da8e80a25bf0c7fbdf251.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strncasecmp.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1751:"'use strict';

module.exports = function strncasecmp(argStr1, argStr2, len) {
  //  discuss at: https://locutus.io/php/strncasecmp/
  // original by: Saulo Vallory
  //    input by: Nate
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  //      note 1: Returns < 0 if str1 is less than str2 ; > 0
  //      note 1: if str1 is greater than str2, and 0 if they are equal.
  //   example 1: strncasecmp('Price 12.9', 'Price 12.15', 2)
  //   returns 1: 0
  //   example 2: strncasecmp('Price 12.09', 'Price 12.15', 10)
  //   returns 2: -1
  //   example 3: strncasecmp('Price 12.90', 'Price 12.15', 30)
  //   returns 3: 8
  //   example 4: strncasecmp('Version 12.9', 'Version 12.15', 20)
  //   returns 4: 8
  //   example 5: strncasecmp('Version 12.15', 'Version 12.9', 20)
  //   returns 5: -8

  var diff = void 0;
  var i = 0;
  var str1 = (argStr1 + '').toLowerCase().substr(0, len);
  var str2 = (argStr2 + '').toLowerCase().substr(0, len);

  if (str1.length !== str2.length) {
    if (str1.length < str2.length) {
      len = str1.length;
      if (str2.substr(0, str1.length) === str1) {
        // return the difference of chars
        return str1.length - str2.length;
      }
    } else {
      len = str2.length;
      // str1 is longer than str2
      if (str1.substr(0, str2.length) === str2) {
        // return the difference of chars
        return str1.length - str2.length;
      }
    }
  } else {
    // Avoids trying to get a char that does not exist
    len = str1.length;
  }

  for (diff = 0, i = 0; i < len; i++) {
    diff = str1.charCodeAt(i) - str2.charCodeAt(i);
    if (diff !== 0) {
      return diff;
    }
  }

  return 0;
};
//# sourceMappingURL=strncasecmp.js-63d92ae72f1646449823bd9f78823abf.map";s:6:"digest";s:32:"f0085241d34da8e80a25bf0c7fbdf251";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/strncasecmp.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strncasecmp.js-63d92ae72f1646449823bd9f78823abf.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/strings/strncasecmp.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"63d92ae72f1646449823bd9f78823abf";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/strings/strncasecmp.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/strncasecmp.js";}