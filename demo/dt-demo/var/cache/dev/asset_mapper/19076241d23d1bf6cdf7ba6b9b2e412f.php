O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:100:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/network/setrawcookie.js";s:10:"publicPath";s:106:"/assets/@survos/api-grid/node_modules/locutus/php/network/setrawcookie-822e35ae6deb8c0b38e684e33af97631.js";s:23:"publicPathWithoutDigest";s:73:"/assets/@survos/api-grid/node_modules/locutus/php/network/setrawcookie.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1330:"'use strict';

module.exports = function setrawcookie(name, value, expires, path, domain, secure) {
  //  discuss at: https://locutus.io/php/setrawcookie/
  // original by: Brett Zamir (https://brett-zamir.me)
  // original by: setcookie
  // improved by: Kevin van Zonneveld (https://kvz.io)
  //    input by: Michael
  //      note 1: This function requires access to the `window` global and is Browser-only
  // bugfixed by: Brett Zamir (https://brett-zamir.me)
  //   example 1: setrawcookie('author_name', 'Kevin van Zonneveld')
  //   returns 1: true

  if (typeof window === 'undefined') {
    return true;
  }

  if (typeof expires === 'string' && /^\d+$/.test(expires)) {
    expires = parseInt(expires, 10);
  }

  if (expires instanceof Date) {
    expires = expires.toUTCString();
  } else if (typeof expires === 'number') {
    expires = new Date(expires * 1e3).toUTCString();
  }

  var r = [name + '=' + value];
  var i = '';
  var s = {
    expires: expires,
    path: path,
    domain: domain
  };
  for (i in s) {
    if (s.hasOwnProperty(i)) {
      // Exclude items on Object.prototype
      s[i] && r.push(i + '=' + s[i]);
    }
  }

  if (secure) {
    r.push('secure');
  }

  window.document.cookie = r.join(';');

  return true;
};
//# sourceMappingURL=setrawcookie.js-fa975056c8e9aa9959d9a341beabe6ce.map";s:6:"digest";s:32:"822e35ae6deb8c0b38e684e33af97631";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:104:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/locutus/php/network/setrawcookie.js.map";s:10:"publicPath";s:110:"/assets/@survos/api-grid/node_modules/locutus/php/network/setrawcookie.js-fa975056c8e9aa9959d9a341beabe6ce.map";s:23:"publicPathWithoutDigest";s:77:"/assets/@survos/api-grid/node_modules/locutus/php/network/setrawcookie.js.map";s:15:"publicExtension";s:3:"map";s:7:"content";N;s:6:"digest";s:32:"fa975056c8e9aa9959d9a341beabe6ce";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:69:"@survos/api-grid/node_modules/locutus/php/network/setrawcookie.js.map";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:65:"@survos/api-grid/node_modules/locutus/php/network/setrawcookie.js";}