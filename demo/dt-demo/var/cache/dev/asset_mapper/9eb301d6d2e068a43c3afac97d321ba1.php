O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/filesystem/basename.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/basename-49e7caf3a16efe56c63bc139b79698d7.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/basename.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1023:"'use strict';

module.exports = function basename(path, suffix) {
  //  discuss at: https://locutus.io/php/basename/
  // original by: Kevin van Zonneveld (https://kvz.io)
  // improved by: Ash Searle (https://hexmen.com/blog/)
  // improved by: Lincoln Ramsay
  // improved by: djmix
  // improved by: Dmitry Gorelenkov
  //   example 1: basename('/www/site/home.htm', '.htm')
  //   returns 1: 'home'
  //   example 2: basename('ecra.php?p=1')
  //   returns 2: 'ecra.php?p=1'
  //   example 3: basename('/some/path/')
  //   returns 3: 'path'
  //   example 4: basename('/some/path_ext.ext/','.ext')
  //   returns 4: 'path_ext'

  var b = path;
  var lastChar = b.charAt(b.length - 1);

  if (lastChar === '/' || lastChar === '\\') {
    b = b.slice(0, -1);
  }

  b = b.replace(/^.*[/\\]/g, '');

  if (typeof suffix === 'string' && b.substr(b.length - suffix.length) === suffix) {
    b = b.substr(0, b.length - suffix.length);
  }

  return b;
};
//# sourceMappingURL=basename.js-947d1c1f4eaa170bb8413fb9a518d7a3.map";s:6:"digest";s:32:"49e7caf3a16efe56c63bc139b79698d7";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/filesystem/basename.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/basename.js-947d1c1f4eaa170bb8413fb9a518d7a3.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/basename.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"947d1c1f4eaa170bb8413fb9a518d7a3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/filesystem/basename.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/filesystem/basename.js";}