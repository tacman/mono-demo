O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_keys.js";s:10:"publicPath";s:102:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_keys-58c288e9a0f5298352657dc54f68d6f2.js";s:23:"publicPathWithoutDigest";s:69:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_keys.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1195:"'use strict';

module.exports = function array_keys(input, searchValue, argStrict) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_keys/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Brett Zamir (https://brett-zamir.me)
  //    input by: P
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  // improved by: jd
  // improved by: Brett Zamir (https://brett-zamir.me)
  //   example 1: array_keys( {firstname: 'Kevin', surname: 'van Zonneveld'} )
  //   returns 1: [ 'firstname', 'surname' ]

  var search = typeof searchValue !== 'undefined';
  var tmpArr = [];
  var strict = !!argStrict;
  var include = true;
  var key = '';

  for (key in input) {
    if (input.hasOwnProperty(key)) {
      include = true;
      if (search) {
        if (strict && input[key] !== searchValue) {
          include = false;
        } else if (input[key] !== searchValue) {
          include = false;
        }
      }

      if (include) {
        tmpArr[tmpArr.length] = key;
      }
    }
  }

  return tmpArr;
};
//# sourceMappingURL=array_keys.js-4b0a92232855133a76e2954a6c7b3e4f.map";s:6:"digest";s:32:"58c288e9a0f5298352657dc54f68d6f2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_keys.js.map";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_keys.js-4b0a92232855133a76e2954a6c7b3e4f.map";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_keys.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"4b0a92232855133a76e2954a6c7b3e4f";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/array/array_keys.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:61:"@survos/api-grid/node_modules/locutus/php/array/array_keys.js";}