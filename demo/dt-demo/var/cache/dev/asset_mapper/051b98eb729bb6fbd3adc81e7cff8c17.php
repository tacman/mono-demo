O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_pop.js";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_pop-4891ecb9410757e9af0dcc974ade8178.js";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_pop.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1803:"'use strict';

module.exports = function array_pop(inputArr) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/array_pop/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Brett Zamir (https://brett-zamir.me)
  //    input by: Theriault (https://github.com/Theriault)
  // bugfixed by: Kevin van Zonneveld (https://kvz.io)
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //      note 1: While IE (and other browsers) support iterating an object's
  //      note 1: own properties in order, if one attempts to add back properties
  //      note 1: in IE, they may end up in their former position due to their position
  //      note 1: being retained. So use of this function with "associative arrays"
  //      note 1: (objects) may lead to unexpected behavior in an IE environment if
  //      note 1: you add back properties with the same keys that you removed
  //   example 1: array_pop([0,1,2])
  //   returns 1: 2
  //   example 2: var $data = {firstName: 'Kevin', surName: 'van Zonneveld'}
  //   example 2: var $lastElem = array_pop($data)
  //   example 2: var $result = $data
  //   returns 2: {firstName: 'Kevin'}

  var key = '';
  var lastKey = '';

  if (inputArr.hasOwnProperty('length')) {
    // Indexed
    if (!inputArr.length) {
      // Done popping, are we?
      return null;
    }
    return inputArr.pop();
  } else {
    // Associative
    for (key in inputArr) {
      if (inputArr.hasOwnProperty(key)) {
        lastKey = key;
      }
    }
    if (lastKey) {
      var tmp = inputArr[lastKey];
      delete inputArr[lastKey];
      return tmp;
    } else {
      return null;
    }
  }
};
//# sourceMappingURL=array_pop.js-f7e96a864c287152f6e088ac14591222.map";s:6:"digest";s:32:"4891ecb9410757e9af0dcc974ade8178";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/array/array_pop.js.map";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_pop.js-f7e96a864c287152f6e088ac14591222.map";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/array/array_pop.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"f7e96a864c287152f6e088ac14591222";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/array/array_pop.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/array/array_pop.js";}