O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:88:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcdiv.js";s:10:"publicPath";s:94:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcdiv-a04634ce991297c540ec9a629cd6a656.js";s:23:"publicPathWithoutDigest";s:61:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcdiv.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1302:"'use strict';

module.exports = function bcdiv(leftOperand, rightOperand, scale) {
  //  discuss at: https://locutus.io/php/bcdiv/
  // original by: lmeyrick (https://sourceforge.net/projects/bcmath-js/)
  //   example 1: bcdiv('1', '2')
  //   returns 1: '0'
  //   example 2: bcdiv('1', '2', 2)
  //   returns 2: '0.50'
  //   example 3: bcdiv('-1', '5', 4)
  //   returns 3: '-0.2000'
  //   example 4: bcdiv('8728932001983192837219398127471', '1928372132132819737213', 2)
  //   returns 4: '4526580661.75'

  var _bc = require('../_helpers/_bc');
  var libbcmath = _bc();

  var first = void 0,
      second = void 0,
      result = void 0;

  if (typeof scale === 'undefined') {
    scale = libbcmath.scale;
  }
  scale = scale < 0 ? 0 : scale;

  // create objects
  first = libbcmath.bc_init_num();
  second = libbcmath.bc_init_num();
  result = libbcmath.bc_init_num();

  first = libbcmath.php_str2num(leftOperand.toString());
  second = libbcmath.php_str2num(rightOperand.toString());

  result = libbcmath.bc_divide(first, second, scale);
  if (result === -1) {
    // error
    throw new Error(11, '(BC) Division by zero');
  }
  if (result.n_scale > scale) {
    result.n_scale = scale;
  }

  return result.toString();
};
//# sourceMappingURL=bcdiv.js-cb772e5a14a716b6c8d6f316f91b664c.map";s:6:"digest";s:32:"a04634ce991297c540ec9a629cd6a656";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcdiv.js.map";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcdiv.js-cb772e5a14a716b6c8d6f316f91b664c.map";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcdiv.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"cb772e5a14a716b6c8d6f316f91b664c";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/bc/bcdiv.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:53:"@survos/api-grid/node_modules/locutus/php/bc/bcdiv.js";}