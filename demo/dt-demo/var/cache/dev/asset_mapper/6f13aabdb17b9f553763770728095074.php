O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/misc/uniqid.js";s:10:"publicPath";s:97:"/assets/@survos/api-grid/node_modules/locutus/php/misc/uniqid-bd71b0885d365dbd31c032b6b437911e.js";s:23:"publicPathWithoutDigest";s:64:"/assets/@survos/api-grid/node_modules/locutus/php/misc/uniqid.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1970:"'use strict';

module.exports = function uniqid(prefix, moreEntropy) {
  //  discuss at: https://locutus.io/php/uniqid/
  // original by: Kevin van Zonneveld (https://kvz.io)
  //  revised by: Kankrelune (https://www.webfaktory.info/)
  //      note 1: Uses an internal counter (in locutus global) to avoid collision
  //   example 1: var $id = uniqid()
  //   example 1: var $result = $id.length === 13
  //   returns 1: true
  //   example 2: var $id = uniqid('foo')
  //   example 2: var $result = $id.length === (13 + 'foo'.length)
  //   returns 2: true
  //   example 3: var $id = uniqid('bar', true)
  //   example 3: var $result = $id.length === (23 + 'bar'.length)
  //   returns 3: true

  if (typeof prefix === 'undefined') {
    prefix = '';
  }

  var retId = void 0;
  var _formatSeed = function _formatSeed(seed, reqWidth) {
    seed = parseInt(seed, 10).toString(16); // to hex str
    if (reqWidth < seed.length) {
      // so long we split
      return seed.slice(seed.length - reqWidth);
    }
    if (reqWidth > seed.length) {
      // so short we pad
      return Array(1 + (reqWidth - seed.length)).join('0') + seed;
    }
    return seed;
  };

  var $global = typeof window !== 'undefined' ? window : global;
  $global.$locutus = $global.$locutus || {};
  var $locutus = $global.$locutus;
  $locutus.php = $locutus.php || {};

  if (!$locutus.php.uniqidSeed) {
    // init seed with big random int
    $locutus.php.uniqidSeed = Math.floor(Math.random() * 0x75bcd15);
  }
  $locutus.php.uniqidSeed++;

  // start with prefix, add current milliseconds hex string
  retId = prefix;
  retId += _formatSeed(parseInt(new Date().getTime() / 1000, 10), 8);
  // add seed hex string
  retId += _formatSeed($locutus.php.uniqidSeed, 5);
  if (moreEntropy) {
    // for more entropy we add a float lower to 10
    retId += (Math.random() * 10).toFixed(8).toString();
  }

  return retId;
};
//# sourceMappingURL=uniqid.js-727a268538a3d14856d9fab0857e1713.map";s:6:"digest";s:32:"bd71b0885d365dbd31c032b6b437911e";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/misc/uniqid.js.map";s:10:"publicPath";s:101:"/assets/@survos/api-grid/node_modules/locutus/php/misc/uniqid.js-727a268538a3d14856d9fab0857e1713.map";s:23:"publicPathWithoutDigest";s:68:"/assets/@survos/api-grid/node_modules/locutus/php/misc/uniqid.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"727a268538a3d14856d9fab0857e1713";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:60:"@survos/api-grid/node_modules/locutus/php/misc/uniqid.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:56:"@survos/api-grid/node_modules/locutus/php/misc/uniqid.js";}