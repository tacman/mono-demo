O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/count_chars.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/strings/count_chars-8841c415fed78957091dfe1755055ce7.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/strings/count_chars.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1531:"'use strict';

module.exports = function count_chars(str, mode) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/count_chars/
  // original by: Ates Goral (https://magnetiq.com)
  // improved by: Jack
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Brett Zamir (https://brett-zamir.me)
  //  revised by: Theriault (https://github.com/Theriault)
  //   example 1: count_chars("Hello World!", 3)
  //   returns 1: " !HWdelor"
  //   example 2: count_chars("Hello World!", 1)
  //   returns 2: {32:1,33:1,72:1,87:1,100:1,101:1,108:3,111:2,114:1}

  var result = {};
  var resultArr = [];
  var i = void 0;

  str = ('' + str).split('').sort().join('').match(/(.)\1*/g);

  if ((mode & 1) === 0) {
    for (i = 0; i !== 256; i++) {
      result[i] = 0;
    }
  }

  if (mode === 2 || mode === 4) {
    for (i = 0; i !== str.length; i += 1) {
      delete result[str[i].charCodeAt(0)];
    }
    for (i in result) {
      result[i] = mode === 4 ? String.fromCharCode(i) : 0;
    }
  } else if (mode === 3) {
    for (i = 0; i !== str.length; i += 1) {
      result[i] = str[i].slice(0, 1);
    }
  } else {
    for (i = 0; i !== str.length; i += 1) {
      result[str[i].charCodeAt(0)] = str[i].length;
    }
  }
  if (mode < 3) {
    return result;
  }

  for (i in result) {
    resultArr.push(result[i]);
  }

  return resultArr.join('');
};
//# sourceMappingURL=count_chars.js-a183e7de9933428f5a5989683ff52d30.map";s:6:"digest";s:32:"8841c415fed78957091dfe1755055ce7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/strings/count_chars.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/strings/count_chars.js-a183e7de9933428f5a5989683ff52d30.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/strings/count_chars.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"a183e7de9933428f5a5989683ff52d30";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/strings/count_chars.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/strings/count_chars.js";}