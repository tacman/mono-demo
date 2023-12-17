O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:99:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/filesystem/realpath.js";s:10:"publicPath";s:105:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/realpath-93a60532d375b125749bbacd333b2f55.js";s:23:"publicPathWithoutDigest";s:72:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/realpath.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1823:"'use strict';

module.exports = function realpath(path) {
  //  discuss at: https://locutus.io/php/realpath/
  // original by: mk.keck
  // improved by: Kevin van Zonneveld (https://kvz.io)
  //      note 1: Returned path is an url like e.g. 'https://yourhost.tld/path/'
  //   example 1: realpath('some/dir/.././_supporters/pj_test_supportfile_1.htm')
  //   returns 1: 'some/_supporters/pj_test_supportfile_1.htm'

  if (typeof window === 'undefined') {
    var nodePath = require('path');
    return nodePath.normalize(path);
  }

  var p = 0;
  var arr = []; // Save the root, if not given
  var r = this.window.location.href; // Avoid input failures

  // Check if there's a port in path (like 'https://')
  path = (path + '').replace('\\', '/');
  if (path.indexOf('://') !== -1) {
    p = 1;
  }

  // Ok, there's not a port in path, so let's take the root
  if (!p) {
    path = r.substring(0, r.lastIndexOf('/') + 1) + path;
  }

  // Explode the given path into it's parts
  arr = path.split('/'); // The path is an array now
  path = []; // Foreach part make a check
  for (var k in arr) {
    // This is'nt really interesting
    if (arr[k] === '.') {
      continue;
    }
    // This reduces the realpath
    if (arr[k] === '..') {
      /* But only if there more than 3 parts in the path-array.
       * The first three parts are for the uri */
      if (path.length > 3) {
        path.pop();
      }
    } else {
      // This adds parts to the realpath
      // But only if the part is not empty or the uri
      // (the first three parts ar needed) was not
      // saved
      if (path.length < 2 || arr[k] !== '') {
        path.push(arr[k]);
      }
    }
  }

  // Returns the absloute path as a string
  return path.join('/');
};
//# sourceMappingURL=realpath.js-b8439e487d6a1e65c37448d9d9f4d43b.map";s:6:"digest";s:32:"93a60532d375b125749bbacd333b2f55";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:103:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/filesystem/realpath.js.map";s:10:"publicPath";s:109:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/realpath.js-b8439e487d6a1e65c37448d9d9f4d43b.map";s:23:"publicPathWithoutDigest";s:76:"/assets/@survos/api-grid/node_modules/locutus/php/filesystem/realpath.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"b8439e487d6a1e65c37448d9d9f4d43b";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:68:"@survos/api-grid/node_modules/locutus/php/filesystem/realpath.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:64:"@survos/api-grid/node_modules/locutus/php/filesystem/realpath.js";}