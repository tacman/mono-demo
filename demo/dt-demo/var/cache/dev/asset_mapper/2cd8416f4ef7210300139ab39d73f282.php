O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/parseHeaders.js";s:10:"publicPath";s:104:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/parseHeaders-fd74042f5f9f388b03ea7d84870609c1.js";s:23:"publicPathWithoutDigest";s:71:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/parseHeaders.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:1380:"'use strict';

import utils from '../utils.js';

// RawAxiosHeaders whose duplicates are ignored by node
// c.f. https://nodejs.org/api/http.html#http_message_headers
const ignoreDuplicateOf = utils.toObjectSet([
  'age', 'authorization', 'content-length', 'content-type', 'etag',
  'expires', 'from', 'host', 'if-modified-since', 'if-unmodified-since',
  'last-modified', 'location', 'max-forwards', 'proxy-authorization',
  'referer', 'retry-after', 'user-agent'
]);

/**
 * Parse headers into an object
 *
 * ```
 * Date: Wed, 27 Aug 2014 08:58:49 GMT
 * Content-Type: application/json
 * Connection: keep-alive
 * Transfer-Encoding: chunked
 * ```
 *
 * @param {String} rawHeaders Headers needing to be parsed
 *
 * @returns {Object} Headers parsed into an object
 */
export default rawHeaders => {
  const parsed = {};
  let key;
  let val;
  let i;

  rawHeaders && rawHeaders.split('\n').forEach(function parser(line) {
    i = line.indexOf(':');
    key = line.substring(0, i).trim().toLowerCase();
    val = line.substring(i + 1).trim();

    if (!key || (parsed[key] && ignoreDuplicateOf[key])) {
      return;
    }

    if (key === 'set-cookie') {
      if (parsed[key]) {
        parsed[key].push(val);
      } else {
        parsed[key] = [val];
      }
    } else {
      parsed[key] = parsed[key] ? parsed[key] + ', ' + val : val;
    }
  });

  return parsed;
};
";s:6:"digest";s:32:"fd74042f5f9f388b03ea7d84870609c1";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:1:{i:0;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:56:"/assets/@survos/api-grid/node_modules/axios/lib/utils.js";s:16:"assetLogicalPath";s:48:"@survos/api-grid/node_modules/axios/lib/utils.js";s:15:"assetSourcePath";s:83:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/utils.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}}s:11:"logicalPath";s:63:"@survos/api-grid/node_modules/axios/lib/helpers/parseHeaders.js";}