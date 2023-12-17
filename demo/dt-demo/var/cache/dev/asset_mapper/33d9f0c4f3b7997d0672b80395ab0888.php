O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/info/assert_options.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/info/assert_options-f1aff95b6648271b804363a4126df650.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/info/assert_options.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1345:"'use strict';

module.exports = function assert_options(what, value) {
  // eslint-disable-line camelcase
  //  discuss at: https://locutus.io/php/assert_options/
  // original by: Brett Zamir (https://brett-zamir.me)
  //   example 1: assert_options('ASSERT_CALLBACK')
  //   returns 1: null

  var iniKey = void 0,
      defaultVal = void 0;
  switch (what) {
    case 'ASSERT_ACTIVE':
      iniKey = 'assert.active';
      defaultVal = 1;
      break;
    case 'ASSERT_WARNING':
      iniKey = 'assert.warning';
      defaultVal = 1;
      var msg = 'We have not yet implemented warnings for us to throw ';
      msg += 'in JavaScript (assert_options())';
      throw new Error(msg);
    case 'ASSERT_BAIL':
      iniKey = 'assert.bail';
      defaultVal = 0;
      break;
    case 'ASSERT_QUIET_EVAL':
      iniKey = 'assert.quiet_eval';
      defaultVal = 0;
      break;
    case 'ASSERT_CALLBACK':
      iniKey = 'assert.callback';
      defaultVal = null;
      break;
    default:
      throw new Error('Improper type for assert_options()');
  }

  // I presume this is to be the most recent value, instead of the default value
  var iniVal = (typeof require !== 'undefined' ? require('../info/ini_get')(iniKey) : undefined) || defaultVal;

  return iniVal;
};
//# sourceMappingURL=assert_options.js-b389fc62bd16fe3c879aa884f11af4b2.map";s:6:"digest";s:32:"f1aff95b6648271b804363a4126df650";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/info/assert_options.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/info/assert_options.js-b389fc62bd16fe3c879aa884f11af4b2.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/info/assert_options.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"b389fc62bd16fe3c879aa884f11af4b2";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/info/assert_options.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/info/assert_options.js";}