O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:88:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/Axios.js";s:10:"publicPath";s:94:"/assets/@survos/api-grid/node_modules/axios/lib/core/Axios-9325b052349126f99882b743b32901c3.js";s:23:"publicPathWithoutDigest";s:61:"/assets/@survos/api-grid/node_modules/axios/lib/core/Axios.js";s:15:"publicExtension";s:2:"js";s:7:"content";s:5612:"'use strict';

import utils from '../utils.js';
import buildURL from '../helpers/buildURL.js';
import InterceptorManager from './InterceptorManager.js';
import dispatchRequest from './dispatchRequest.js';
import mergeConfig from './mergeConfig.js';
import buildFullPath from './buildFullPath.js';
import validator from '../helpers/validator.js';
import AxiosHeaders from './AxiosHeaders.js';

const validators = validator.validators;

/**
 * Create a new instance of Axios
 *
 * @param {Object} instanceConfig The default config for the instance
 *
 * @return {Axios} A new instance of Axios
 */
class Axios {
  constructor(instanceConfig) {
    this.defaults = instanceConfig;
    this.interceptors = {
      request: new InterceptorManager(),
      response: new InterceptorManager()
    };
  }

  /**
   * Dispatch a request
   *
   * @param {String|Object} configOrUrl The config specific for this request (merged with this.defaults)
   * @param {?Object} config
   *
   * @returns {Promise} The Promise to be fulfilled
   */
  request(configOrUrl, config) {
    /*eslint no-param-reassign:0*/
    // Allow for axios('example/url'[, config]) a la fetch API
    if (typeof configOrUrl === 'string') {
      config = config || {};
      config.url = configOrUrl;
    } else {
      config = configOrUrl || {};
    }

    config = mergeConfig(this.defaults, config);

    const {transitional, paramsSerializer, headers} = config;

    if (transitional !== undefined) {
      validator.assertOptions(transitional, {
        silentJSONParsing: validators.transitional(validators.boolean),
        forcedJSONParsing: validators.transitional(validators.boolean),
        clarifyTimeoutError: validators.transitional(validators.boolean)
      }, false);
    }

    if (paramsSerializer != null) {
      if (utils.isFunction(paramsSerializer)) {
        config.paramsSerializer = {
          serialize: paramsSerializer
        }
      } else {
        validator.assertOptions(paramsSerializer, {
          encode: validators.function,
          serialize: validators.function
        }, true);
      }
    }

    // Set config.method
    config.method = (config.method || this.defaults.method || 'get').toLowerCase();

    let contextHeaders;

    // Flatten headers
    contextHeaders = headers && utils.merge(
      headers.common,
      headers[config.method]
    );

    contextHeaders && utils.forEach(
      ['delete', 'get', 'head', 'post', 'put', 'patch', 'common'],
      (method) => {
        delete headers[method];
      }
    );

    config.headers = AxiosHeaders.concat(contextHeaders, headers);

    // filter out skipped interceptors
    const requestInterceptorChain = [];
    let synchronousRequestInterceptors = true;
    this.interceptors.request.forEach(function unshiftRequestInterceptors(interceptor) {
      if (typeof interceptor.runWhen === 'function' && interceptor.runWhen(config) === false) {
        return;
      }

      synchronousRequestInterceptors = synchronousRequestInterceptors && interceptor.synchronous;

      requestInterceptorChain.unshift(interceptor.fulfilled, interceptor.rejected);
    });

    const responseInterceptorChain = [];
    this.interceptors.response.forEach(function pushResponseInterceptors(interceptor) {
      responseInterceptorChain.push(interceptor.fulfilled, interceptor.rejected);
    });

    let promise;
    let i = 0;
    let len;

    if (!synchronousRequestInterceptors) {
      const chain = [dispatchRequest.bind(this), undefined];
      chain.unshift.apply(chain, requestInterceptorChain);
      chain.push.apply(chain, responseInterceptorChain);
      len = chain.length;

      promise = Promise.resolve(config);

      while (i < len) {
        promise = promise.then(chain[i++], chain[i++]);
      }

      return promise;
    }

    len = requestInterceptorChain.length;

    let newConfig = config;

    i = 0;

    while (i < len) {
      const onFulfilled = requestInterceptorChain[i++];
      const onRejected = requestInterceptorChain[i++];
      try {
        newConfig = onFulfilled(newConfig);
      } catch (error) {
        onRejected.call(this, error);
        break;
      }
    }

    try {
      promise = dispatchRequest.call(this, newConfig);
    } catch (error) {
      return Promise.reject(error);
    }

    i = 0;
    len = responseInterceptorChain.length;

    while (i < len) {
      promise = promise.then(responseInterceptorChain[i++], responseInterceptorChain[i++]);
    }

    return promise;
  }

  getUri(config) {
    config = mergeConfig(this.defaults, config);
    const fullPath = buildFullPath(config.baseURL, config.url);
    return buildURL(fullPath, config.params, config.paramsSerializer);
  }
}

// Provide aliases for supported request methods
utils.forEach(['delete', 'get', 'head', 'options'], function forEachMethodNoData(method) {
  /*eslint func-names:0*/
  Axios.prototype[method] = function(url, config) {
    return this.request(mergeConfig(config || {}, {
      method,
      url,
      data: (config || {}).data
    }));
  };
});

utils.forEach(['post', 'put', 'patch'], function forEachMethodWithData(method) {
  /*eslint func-names:0*/

  function generateHTTPMethod(isForm) {
    return function httpMethod(url, data, config) {
      return this.request(mergeConfig(config || {}, {
        method,
        headers: isForm ? {
          'Content-Type': 'multipart/form-data'
        } : {},
        url,
        data
      }));
    };
  }

  Axios.prototype[method] = generateHTTPMethod();

  Axios.prototype[method + 'Form'] = generateHTTPMethod(true);
});

export default Axios;
";s:6:"digest";s:32:"9325b052349126f99882b743b32901c3";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:8:{i:0;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:56:"/assets/@survos/api-grid/node_modules/axios/lib/utils.js";s:16:"assetLogicalPath";s:48:"@survos/api-grid/node_modules/axios/lib/utils.js";s:15:"assetSourcePath";s:83:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/utils.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:1;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:67:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/buildURL.js";s:16:"assetLogicalPath";s:59:"@survos/api-grid/node_modules/axios/lib/helpers/buildURL.js";s:15:"assetSourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/buildURL.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:2;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:74:"/assets/@survos/api-grid/node_modules/axios/lib/core/InterceptorManager.js";s:16:"assetLogicalPath";s:66:"@survos/api-grid/node_modules/axios/lib/core/InterceptorManager.js";s:15:"assetSourcePath";s:101:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/InterceptorManager.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:3;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:71:"/assets/@survos/api-grid/node_modules/axios/lib/core/dispatchRequest.js";s:16:"assetLogicalPath";s:63:"@survos/api-grid/node_modules/axios/lib/core/dispatchRequest.js";s:15:"assetSourcePath";s:98:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/dispatchRequest.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:4;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:67:"/assets/@survos/api-grid/node_modules/axios/lib/core/mergeConfig.js";s:16:"assetLogicalPath";s:59:"@survos/api-grid/node_modules/axios/lib/core/mergeConfig.js";s:15:"assetSourcePath";s:94:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/mergeConfig.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:5;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:69:"/assets/@survos/api-grid/node_modules/axios/lib/core/buildFullPath.js";s:16:"assetLogicalPath";s:61:"@survos/api-grid/node_modules/axios/lib/core/buildFullPath.js";s:15:"assetSourcePath";s:96:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/buildFullPath.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:6;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:68:"/assets/@survos/api-grid/node_modules/axios/lib/helpers/validator.js";s:16:"assetLogicalPath";s:60:"@survos/api-grid/node_modules/axios/lib/helpers/validator.js";s:15:"assetSourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/helpers/validator.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}i:7;O:56:"Symfony\Component\AssetMapper\ImportMap\JavaScriptImport":5:{s:10:"importName";s:68:"/assets/@survos/api-grid/node_modules/axios/lib/core/AxiosHeaders.js";s:16:"assetLogicalPath";s:60:"@survos/api-grid/node_modules/axios/lib/core/AxiosHeaders.js";s:15:"assetSourcePath";s:95:"/home/tac/ca/survos/packages/api-grid-bundle/assets/node_modules/axios/lib/core/AxiosHeaders.js";s:6:"isLazy";b:0;s:24:"addImplicitlyToImportMap";b:1;}}s:11:"logicalPath";s:53:"@survos/api-grid/node_modules/axios/lib/core/Axios.js";}