O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/funchand/call_user_func.js";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/call_user_func-b9945c2fd8685c176c7ee54a67712754.js";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/call_user_func.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1038:"'use strict';

module.exports = function call_user_func(cb, parameters) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/call_user_func/
  // original by: Brett Zamir (https://brett-zamir.me)
  // improved by: Diplom@t (https://difane.com/)
  // improved by: Brett Zamir (https://brett-zamir.me)
  //      note 1: Depends on call_user_func_array which in turn depends on the `cb` that is passed,
  //      note 1: this function can use `eval`.
  //      note 1: The `eval` input is however checked to only allow valid function names,
  //      note 1: So it should not be unsafer than uses without eval (seeing as you can)
  //      note 1: already pass any function to be executed here.
  //   example 1: call_user_func('isNaN', 'a')
  //   returns 1: true

  var callUserFuncArray = require('../funchand/call_user_func_array');
  parameters = Array.prototype.slice.call(arguments, 1);
  return callUserFuncArray(cb, parameters);
};
//# sourceMappingURL=call_user_func.js-5def08b318c939247085fb1e71552acb.map";s:6:"digest";s:32:"b9945c2fd8685c176c7ee54a67712754";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:107:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/funchand/call_user_func.js.map";s:10:"publicPath";s:113:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/call_user_func.js-5def08b318c939247085fb1e71552acb.map";s:23:"publicPathWithoutDigest";s:80:"/assets/@survos/api-grid/node_modules/locutus/php/funchand/call_user_func.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"5def08b318c939247085fb1e71552acb";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:72:"@survos/api-grid/node_modules/locutus/php/funchand/call_user_func.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/funchand/call_user_func.js";}