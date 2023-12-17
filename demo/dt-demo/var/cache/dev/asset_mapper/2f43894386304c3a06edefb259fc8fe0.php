O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:93:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/cookies.js";s:10:"publicPath";s:99:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/cookies-b13ca0875c1c17b8e008b84b6456590a.js";s:23:"publicPathWithoutDigest";s:66:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/cookies.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1401:"'use strict';

import utils from '../utils.js';
import platform from '../platform/index.js';

export default platform.isStandardBrowserEnv ?

// Standard browser envs support document.cookie
  (function standardBrowserEnv() {
    return {
      write: function write(name, value, expires, path, domain, secure) {
        const cookie = [];
        cookie.push(name + '=' + encodeURIComponent(value));

        if (utils.isNumber(expires)) {
          cookie.push('expires=' + new Date(expires).toGMTString());
        }

        if (utils.isString(path)) {
          cookie.push('path=' + path);
        }

        if (utils.isString(domain)) {
          cookie.push('domain=' + domain);
        }

        if (secure === true) {
          cookie.push('secure');
        }

        document.cookie = cookie.join('; ');
      },

      read: function read(name) {
        const match = document.cookie.match(new RegExp('(^|;\\s*)(' + name + ')=([^;]*)'));
        return (match ? decodeURIComponent(match[3]) : null);
      },

      remove: function remove(name) {
        this.write(name, '', Date.now() - 86400000);
      }
    };
  })() :

// Non standard browser env (web workers, react-native) lack needed support.
  (function nonStandardBrowserEnv() {
    return {
      write: function write() {},
      read: function read() { return null; },
      remove: function remove() {}
    };
  })();
";s:6:"digest";s:32:"b13ca0875c1c17b8e008b84b6456590a";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:2:{i:0;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:56:"/assets/@survos/api-grid/node_modules/axios/lib/utils.js";s:16:"assetLogicalPath";s:48:"@survos/api-grid/node_modules/axios/lib/utils.js";s:15:"assetSourcePath";s:83:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/utils.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:1;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:65:"/assets/@survos/api-grid/node_modules/axios/lib/platform/index.js";s:16:"assetLogicalPath";s:57:"@survos/api-grid/node_modules/axios/lib/platform/index.js";s:15:"assetSourcePath";s:92:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/platform/index.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}}s:11:"logicalPath";s:58:"@survos/api-grid/node_modules/axios/lib/helpers/cookies.js";}