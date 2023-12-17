O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:88:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcmul.js";s:10:"publicPath";s:94:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcmul-e043c67e68539ff6045906c7885f49d9.js";s:23:"publicPathWithoutDigest";s:61:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcmul.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1182:"'use strict';

module.exports = function bcmul(leftOperand, rightOperand, scale) {
  //  discuss at: https://locutus.io/php/bcmul/
  // original by: lmeyrick (https://sourceforge.net/projects/bcmath-js/)
  //   example 1: bcmul('1', '2')
  //   returns 1: '2'
  //   example 2: bcmul('-3', '5')
  //   returns 2: '-15'
  //   example 3: bcmul('1234567890', '9876543210')
  //   returns 3: '12193263111263526900'
  //   example 4: bcmul('2.5', '1.5', 2)
  //   returns 4: '3.75'

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

  result = libbcmath.bc_multiply(first, second, scale);

  if (result.n_scale > scale) {
    result.n_scale = scale;
  }
  return result.toString();
};
//# sourceMappingURL=bcmul.js-1e996519f43f12036b99bfea7d4a17e2.map";s:6:"digest";s:32:"e043c67e68539ff6045906c7885f49d9";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/bc/bcmul.js.map";s:10:"publicPath";s:98:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcmul.js-1e996519f43f12036b99bfea7d4a17e2.map";s:23:"publicPathWithoutDigest";s:65:"/assets/@survos/api-grid/node_modules/locutus/php/bc/bcmul.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"1e996519f43f12036b99bfea7d4a17e2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:57:"@survos/api-grid/node_modules/locutus/php/bc/bcmul.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:53:"@survos/api-grid/node_modules/locutus/php/bc/bcmul.js";}