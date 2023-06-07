// during dev, from project_dir run
// ln -s ~/survos/bundles/api-grid-bundle/assets/src/controllers/sandbox_api_controller.js assets/controllers/sandbox_api_controller.js
import {Controller} from "@hotwired/stimulus";

import {default as axios} from "axios";
import DataTables from "datatables.net-bs5";
import 'datatables.net-select-bs5';
import 'datatables.net-responsive';
// import 'datatables.net-responsive-bs5';
import 'datatables.net-buttons-bs5';
import 'datatables.net-searchpanes-bs5';
import 'datatables.net-scroller-bs5';
import 'datatables.net-buttons/js/buttons.colVis.min';
import 'datatables.net-buttons/js/buttons.html5.min';
import 'datatables.net-buttons/js/buttons.print.min';

// shouldn't these be automatically included (from package.json)
// import 'datatables.net-scroller';
// import 'datatables.net-scroller-bs5';
// import 'datatables.net-datetime';
// import 'datatables.net-searchbuilder-bs5';
// import 'datatables.net-fixedheader-bs5';
// import 'datatables.net-responsive-bs5';
// const DataTable = require('datatables.net');
// import('datatables.net-buttons-bs5');

// import('datatables.net-bs5');
// import('datatables.net-select-bs5');

// if component
let routes = false;

// if live
import Routing from '../../../../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js';
routes = require('../../../../../public/js/fos_js_routes.json');
import enLanguage from 'datatables.net-plugins/i18n/en-GB.mjs'
import esLanguage from 'datatables.net-plugins/i18n/es-ES.mjs';
import ukLanguage from 'datatables.net-plugins/i18n/uk.mjs';
import deLanguage from 'datatables.net-plugins/i18n/de-DE.mjs';
import huLanguage from 'datatables.net-plugins/i18n/hu.mjs';
import hilanguage from 'datatables.net-plugins/i18n/hi.mjs';
// if local
// routes = require('../../public/js/fos_js_routes.json');
// import Routing from '../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js';

Routing.setRoutingData(routes);

import Twig from 'twig/twig.min';

Twig.extend(function (Twig) {
    Twig._function.extend('path', (route, routeParams) => {

        delete routeParams._keys; // seems to be added by twigjs
        let path = Routing.generate(route, routeParams);
        // if (route == 'category_show') {
        //     console.error(route);
        //     console.warn(routeParams);
        //     console.log(path);
        // }
        return path;
    });
});


// import {Modal} from "bootstrap"; !!
// https://stackoverflow.com/questions/68084742/dropdown-doesnt-work-after-modal-of-bootstrap-imported
import Modal from 'bootstrap/js/dist/modal';
// import cb from "../js/app-buttons";


console.assert(Routing, 'Routing is not defined');
// global.Routing = Routing;

// try {
// } catch (e) {
//     console.error(e);
//     console.warn("FOS JS Routing not loaded, so path() won't work");
// }

const contentTypes = {
    'PATCH': 'application/merge-patch+json',
    'POST': 'application/json'
};

/* stimulusFetch: 'lazy' */
export default class extends Controller {
    static targets = ['table', 'modal', 'modalBody', 'fieldSearch', 'message'];
    static values = {
        apiCall: {type: String, default: ''},
        searchPanesDataUrl: {type: String, default: ''},
        columnConfiguration: {type: String, default: '[]'},
        globals: {type: String, default: '[]'},
        locale: {type: String, default: 'no-locale!'},
        index: {type: String, default: ''},
        dom: {type: String, default: 'Plfrtip'},
        filter: String
    }
    // with searchPanes dom: {type: String, default: 'P<"dtsp-dataTable"rQfti>'},
    // sortableFields: {type: String, default: '[]'},
    // searchableFields: {type: String, default: '[]'},
    // searchBuilderFields: {type: String, default: '[]'},

    cols() {
        let x = this.columns.map(c => {
            let render = null;
            if (c.twigTemplate) {
                let template = Twig.twig({
                    data: c.twigTemplate
                });
                render = (data, type, row, meta) => {
                    let globals = JSON.parse(this.globalsValue);
                    Object.assign(row, );
                    row.locale = this.localeValue;
                    return template.render({data: data, row: row, globals: globals, field_name: c.name})
                }
            }

            if (c.name === '_actions') {
                return this.actions({prefix: c.prefix, actions: c.actions})
            }

            return this.c({
                propertyName: c.name,
                data: c.name,
                label: c.title,
                route: c.route,
                locale: c.locale,
                render: render,
                sortable: (typeof c.sortable)?c.sortable:false
            })
        });
        return x;

    }

    connect() {
        super.connect(); //
        const event = new CustomEvent("changeFormUrlEvent", {formUrl: 'testing formURL!'});
        window.dispatchEvent(event);


        this.columns = JSON.parse(this.columnConfigurationValue);
        // "compile" the custom twig blocks
        // var columnRender = [];
        this.dom = this.domValue;
        // dom: 'Plfrtip',
        console.assert(this.dom, "Missing dom");

        this.filter = JSON.parse(this.filterValue || '[]')
        // this.sortableFields = JSON.parse(this.sortableFieldsValue);
        // this.searchableFields = JSON.parse(this.searchableFieldsValue);
        // this.searchBuilderFields = JSON.parse(this.searchBuilderFieldsValue);

        this.locale = this.localeValue;

        console.log('hola from ' + this.identifier + ' locale: ' + this.localeValue);

        // console.log(this.hasTableTarget ? 'table target exists' : 'missing table target')
        // console.log(this.hasModalTarget ? 'target exists' : 'missing modalstarget')
        // // console.log(this.fieldSearch ? 'target exists' : 'missing fieldSearch')
        // console.log(this.sortableFieldsValue);
        console.assert(this.hasModalTarget, "Missing modal target");
        this.that = this;
        this.tableElement = false;
        if (this.hasTableTarget) {
            this.tableElement = this.tableTarget;
        } else if (this.element.tagName === 'TABLE') {
            this.tableElement = this.element;
        } else {
            this.tableElement = document.getElementsByTagName('table')[0];
        }
        // else {
        //     console.error('A table element is required.');
        // }
        if (this.tableElement) {
            this.dt = this.initDataTable(this.tableElement, []);
            this.initialized = true;
        }
    }

    openModal(e) {
        console.error('yay, open modal!', e, e.currentTarget, e.currentTarget.dataset);

        this.modalTarget.addEventListener('show.bs.modal', (e) => {
            console.log(e, e.relatedTarget, e.currentTarget);
            // do something...
        });

        this.modal = new Modal(this.modalTarget);
        console.log(this.modal);
        this.modal.show();

    }

    createdRow(row, data, dataIndex) {
        // we could add the thumbnail URL here.
        // console.log(row, data, dataIndex, this.identifier);
        // let aaController = 'projects';
        // row.classList.add("text-danger");
        // row.setAttribute('data-action', aaController + '#openModal');
        // row.setAttribute('data-controller', 'modal-form', {formUrl: 'test'});
    }

    notify(message) {
        console.log(message);
        this.messageTarget.innerHTML = message;
    }


    handleTrans(el) {
        let transitionButtons = el.querySelectorAll('button.transition');
        // console.log(transitionButtons);
        transitionButtons.forEach(btn => btn.addEventListener('click', (event) => {
            const isButton = event.target.nodeName === 'BUTTON';
            if (!isButton) {
                return;
            }
            console.log(event, event.target, event.currentTarget);

            let row = this.dt.row(event.target.closest('tr'));
            let data = row.data();
            console.log(row, data);
            this.notify('deleting ' + data.id);

            // console.dir(event.target.id);
        }));

    }

    requestTransition(route, entityClass, id) {

    }

// eh... not working
    get modalController() {
        return this.application.getControllerForElementAndIdentifier(this.modalTarget, "modal_form")
    }

    addButtonClickListener(dt) {
        console.log("Listening for button.transition and button .btn-modal clicks events");

        dt.on('click', 'tr td button.transition', ($event) => {
            console.log($event.currentTarget);
            let target = $event.currentTarget;
            var data = dt.row(target.closest('tr')).data();
            let transition = target.dataset['t'];
            console.log(transition, target);
            console.log(data, $event);
            this.that.modalBodyTarget.innerHTML = transition;
            this.modal = new Modal(this.modalTarget);
            this.modal.show();

        });

        // dt.on('click', 'tr td button .btn-modal',  ($event, x) => {
        dt.on('click', 'tr td button ', ($event, x) => {
            console.log($event, $event.currentTarget);
            var data = dt.row($event.currentTarget.closest('tr')).data();
            console.log(data, $event, x);
            console.warn("dispatching changeFormUrlEvent");
            const event = new CustomEvent("changeFormUrlEvent", {formUrl: 'test'});
            window.dispatchEvent(event);


            let btn = $event.currentTarget;
            let modalRoute = btn.dataset.modalRoute;
            if (modalRoute) {
                this.modalBodyTarget.innerHTML = data.code;
                this.modal = new Modal(this.modalTarget);
                this.modal.show();
                console.assert(data.rp, "missing rp, add @Groups to entity")
                let formUrl = Routing.generate(modalRoute, {...data.rp, _page_content_only: 1});
                console.warn("dispatching changeFormUrlEvent");
                const event = new CustomEvent("changeFormUrlEvent", {detail: {formUrl: formUrl}});
                window.dispatchEvent(event);
                document.dispatchEvent(event);

                console.log('getting formURL ' + formUrl);


                axios.get(formUrl)
                    .then(response => this.modalBodyTarget.innerHTML = response.data)
                    .catch(error => this.modalBodyTarget.innerHTML = error)
                ;
            }

        });
    }

    addRowClickListener(dt) {
        dt.on('click', 'tr td', ($event) => {
            let el = $event.currentTarget;
            console.log($event, $event.currentTarget);
            var data = dt.row($event.currentTarget).data();
            var btn = el.querySelector('button');
            console.log(btn);
            let modalRoute = null;
            if (btn) {
                console.error(btn, btn.dataset, btn.dataset.modalRoute);
                modalRoute = btn.dataset.modalRoute;
            }


            if (el.querySelector("a")) {
                return; // skip links, let it bubble up to handle
            }

            if (modalRoute) {
                this.modalBodyTarget.innerHTML = data.code;
                this.modal = new Modal(this.modalTarget);
                this.modal.show();
                console.assert(data.rp, "missing rp, add @Groups to entity")
                let formUrl = Routing.generate(modalRoute, data.rp);

                axios({
                    method: 'get', //you can set what request you want to be
                    url: formUrl,
                    // data: {id: varID},
                    headers: {
                        _page_content_only: '1' // could send blocks that we want??
                    }
                })
                    .then(response => this.modalBodyTarget.innerHTML = response.data)
                    .catch(error => this.modalBodyTarget.innerHTML = error)
                ;
            }
        });
    }

    initDataTable(el, fields) {

        let lookup = [];
        console.error(fields);
        // for (const property in fields) {
        //     lookup[property] = field;
        //     console.error(property, fields[property]);
        //     console.log(`${property}: ${fields[property]}`);
        // }
        // fields = Array.from(fields);
        // fields.forEach((field, index) => {
        //     console.error(field);
        //     lookup[field.jsonKeyCode] = field;
        // });
        // console.error(lookup);
        let searchFieldsByColumnNumber = [];
        let options = [];

        this.columns.forEach((column, index) => {
            console.log(column);
            if (column.browsable) {
                console.error(index);
                searchFieldsByColumnNumber.push(index);
                //rawFacets.push(column.name);
            }
            options = fields;
            // this is specific to museado, but needs to be generalized with a field structure.
            // if (column.browsable && (column.name in fields)) {
            //     let fieldName = column.name; //  lookup[column.name];
            //     // options[field.jsonKeyCode] = [];
            //     for (const label in field.valueCounts) {
            //         let count = field.valueCounts[label];
            //         //     console.log(field.valueCounts);
            //         // field.valueCounts.protoforEach( (label, count) =>
            //         // {
            //         options[fieldName].push({
            //             label: label,
            //             count: field.distinctValuesCount,
            //             value: label,
            //             total: count
            //         });
            //     }
            // } else {
            //     // console.warn("Missing " + column.name, Object.keys(lookup));
            // }
        });
        let searchPanesRaw = [];

        console.error(options);
        // console.error('searchFields', searchFieldsByColumnNumber);

        let apiPlatformHeaders = {
            'Accept': 'application/ld+json',
            'Content-Type': 'application/json'
        };

        const userLocale =
            navigator.languages && navigator.languages.length
                ? navigator.languages[0]
                : navigator.language;

        // console.log('user locale: ' + userLocale); // 👉️ "en-US"
        // console.error('this.locale: ' + this.locale);
        if (this.locale !== '') {
            apiPlatformHeaders['Accept-Language'] = this.locale;
            apiPlatformHeaders['X-LOCALE'] = this.locale;
        }

        let language = enLanguage;
        if(this.locale == 'en') {
            language = enLanguage;
        } else if(this.locale == 'es') {
            language = esLanguage;
        }else if(this.locale == 'uk') {
            language = ukLanguage;
        }else if(this.locale == 'de') {
            language = deLanguage;
        }else if(this.locale == 'hu') {
            language = huLanguage;
        }else if(this.locale == 'hi') {
            language = hilanguage;
        }

        let setup = {
            // let dt = new DataTable(el, {
            language: language,
            createdRow: this.createdRow,
            // paging: true,
            scrollY: '70vh', // vh is percentage of viewport height, https://css-tricks.com/fun-viewport-units/
            // scrollY: true,
            // displayLength: 50, // not sure how to adjust the 'length' sent to the server
            // pageLength: 15,
            orderCellsTop: true,
            fixedHeader: true,
            //cascadePanes  : true,
            deferRender: true,
            // scrollX:        true,
            // scrollCollapse: true,
            scroller: true,
            // scroller: {
            //     // rowHeight: 90, // @WARNING: Problematic!!
            //     // displayBuffer: 10,
            //     loadingIndicator: true,
            // },
            // "processing": true,
            serverSide: true,

            initComplete: (obj, data) => {
                dt.on('searchPanes.rebuildPane', function() {
                    // This function will run after the user selects a value from the SearchPane
                    console.log('A selection has been made and the table has been updated.');
                });
                this.handleTrans(el);
                // let xapi = new DataTable.Api(obj);
                // console.log(xapi);
                // console.log(xapi.table);
                // this.addRowClickListener(dt);
                this.addButtonClickListener(dt);
            },

            dom: this.dom,
            // dom: 'Plfrtip',

            // dom: '<"js-dt-buttons"B><"js-dt-info"i>ft',
            // dom: 'Q<"js-dt-buttons"B><"js-dt-info"i>' + (this.searchableFields.length ? 'f' : '') + 't',
            buttons: [], // this.buttons,
            columns: this.cols(),
            searchPanes: {
                layout: 'columns-1',
                show: true,
//                cascadePanes: true,
                viewTotal: true,
                showZeroCounts: true
            },
            searchBuilder: {
                columns: this.searchBuilderFields,
                depthLimit: 1,
                threshold: 0,
                showEmptyPanes: true
            },
            // columns:
            //     [
            //     this.c({
            //         propertyName: 'name',
            //     }),
            // ],
            columnDefs: this.columnDefs(searchFieldsByColumnNumber),
            ajax: (params, callback, settings) => {
                let apiParams = this.dataTableParamsToApiPlatformParams(params, searchPanesRaw);
                // this.debug &&
                // console.error(params, apiParams);
                // console.log(`DataTables is requesting ${params.length} records starting at ${params.start}`, apiParams);

                Object.assign(apiParams, this.filter);
                // yet another locale hack
                if (this.locale !== '') {
                    apiParams['_locale'] = this.locale;
                }
                if (this.indexValue) {
                    apiParams['_index'] = this.indexValue;
                }

                // console.warn(apiPlatformHeaders);
                console.log("calling API " + this.apiCallValue, apiParams);
                axios.get(this.apiCallValue, {
                    params: apiParams,
                    headers: apiPlatformHeaders
                })
                    .then((response) => {
                        // handle success
                        let hydraData = response.data;

                        var total = hydraData.hasOwnProperty('hydra:totalItems') ? hydraData['hydra:totalItems'] : 999999; // Infinity;
                        var itemsReturned = hydraData['hydra:member'].length;
                        // let first = (params.page - 1) * params.itemsPerPage;
                        if (params.search.value) {
                            console.log(`dt search: ${params.search.value}`);
                        }

                        // console.log(`dt request: ${params.length} starting at ${params.start}`);

                        // let first = (apiOptions.page - 1) * apiOptions.itemsPerPage;
                        let d = hydraData['hydra:member'];
                        if (d.length) {
                            console.log(d[0]);
                        }
                        let searchPanes = {};
                        if(typeof hydraData['hydra:facets'] !== "undefined" && typeof hydraData['hydra:facets']['searchPanes'] !== "undefined") {
                            searchPanes = hydraData['hydra:facets']['searchPanes'];
                           //searchPanesRaw = hydraData['hydra:facets']['searchPanes']['options'];
                        } else {
                            searchPanes = {
                                options: options
                            };
                        }

                        let targetMessage = "";
                        if(typeof apiParams.facet_filter != 'undefined') {
                            apiParams.facet_filter.forEach((index) => {
                                let string = index.split(',');
                                if(targetMessage != "") {
                                    targetMessage += ", ";
                                }
                                targetMessage += string[0]+ " : "+ string[2];
                            });
                        }

                        this.messageTarget.innerHTML = "Search Refinements: " + targetMessage;

                        // if next page isn't working, make sure api_platform.yaml is correctly configured
                        // defaults:
                        //     pagination_client_items_per_page: true

                        // if there's a "next" page and we didn't get everything, fetch the next page and return the slice.
                        let next = hydraData["hydra:view"]['hydra:next'];
                        // we need the searchpanes options, too.



                        let callbackValues = {
                            draw: params.draw,
                            data: d,
                            searchPanes: searchPanes,
                            recordsTotal: total,
                            recordsFiltered: total, //  itemsReturned,
                        }
                        callback(callbackValues);
                    })
                    .catch(function (error) {
                        // handle error
                        console.error(error);
                    })
                ;

            },
        };
        let dt = new DataTables(el, setup);
        dt.searchPanes();
        // console.log('moving panes.');
        $("div.search-panes").append(dt.searchPanes.container());

        return dt;
    }

    columnDefs(searchPanesColumns) {
        // console.error(searchPanesColumns);
        return [
            {
                searchPanes: {show: true}, targets: searchPanesColumns,
            },
            {targets: [0, 1], visible: true},
            // defaultContent is critical! Otherwise, lots of stuff fails.
            {targets: '_all', visible: true, sortable: false, "defaultContent": "~~"}
        ];

        // { targets: [0, 1], visible: true},
        // { targets: '_all', visible: true, sortable: false,  "defaultContent": "~~" }
    }


// get columns() {
//     // if columns isn't overwritten, use the th's in the first tr?  or data-field='status', and then make the api call with _fields=...?
//     // or https://datatables.net/examples/ajax/null_data_source.html
//     return [
//         {title: '@id', data: 'id'}
//     ]
// }

    actions({prefix = null, actions = ['edit', 'show', 'qr']} = {}) {
        let icons = {
            edit: 'fas fa-edit',
            show: 'fas fa-eye text-success',
            'qr': 'fas fa-qrcode',
            'delete': 'fas fa-trash text-danger'
        };
        let buttons = actions.map(action => {
            let modal_route = prefix + action;
            let icon = icons[action];
            // return action + ' ' + modal_route;
            // Routing.generate()

            return `<button data-modal-route="${modal_route}" class="btn btn-modal btn-action-${action}" 
title="${modal_route}"><span class="action-${action} fas fa-${icon}"></span></button>`;
        });

        // console.log(buttons);
        return {
            title: 'actions',
            render: () => {
                return buttons.join(' ');
            }
        }
        actions.forEach(action => {
        })

    }

    c({
          propertyName = null,
          name = null,
          route = null,
          modal_route = null,
          label = null,
          modal = false,
          render = null,
          locale = null,
          renderType = 'string',
          sortable = false,
      } = {}) {

        if (render === null) {
            render = (data, type, row, meta) => {
                // if (!label) {
                //     // console.log(row, data);
                //     label = data || propertyName;
                // }
                let displayData = data;
                // @todo: move some twig templates to a common library
                if (renderType === 'image') {
                    return `<img class="img-thumbnail plant-thumb" alt="${data}" src="${data}" />`;
                }

                if (route) {
                    if (locale) {
                        row.rp['_locale'] = locale;
                    }
                    let url = Routing.generate(route, row.rp);
                    if (modal) {
                        return `<button class="btn btn-primary"></button>`;
                    } else {
                        return `<a href="${url}">${displayData}</a>`;
                    }
                } else {
                    if (modal_route) {
                        return `<button data-modal-route="${modal_route}" class="btn btn-success">${modal_route}</button>`;
                    } else {
                        // console.log(propertyName, row[propertyName], row);
                        // if nested, explode...
                        let elements = propertyName.split('.');
                        if (elements.length === 3) {
                            let x1 = elements[0];
                            let x2 = elements[1];
                            let x3 = elements[2];
                            return row[x1][x2][x3];
                        } else if (elements.length === 2) {
                            // hack, only one level deep, etc.  ugh
                            let x1 = elements[0];
                            let x2 = elements[1];
                            return row[x1][x2];
                        } else {
                            return row[propertyName];
                        }
                    }
                }

            }
        }

        return {
            title: label,
            data: propertyName || '',
            render: render,
            sortable: sortable
        }
        // ...function body...
    }

    guessColumn(v) {

        let renderFunction = null;
        switch (v) {
            case 'id':
                renderFunction = (data, type, row, meta) => {
                    console.warn('id render');
                    return "<b>" + data + "!!</b>"
                }
                break;
            case 'newestPublishTime':
            case 'createTime':
                renderFunction = (data, type, row, meta) => {
                    let isoTime = data;
                    let str = isoTime ? '<time class="timeago" datetime="' + data + '">' + data + '</time>' : '';
                    return str;
                }
                break;
            // default:
            //     renderFunction = ( data, type, row, meta ) => { return data; }


        }
        let obj = {
            title: v,
            data: v,
        }
        if (renderFunction) {
            obj.render = renderFunction;
        }
        console.warn(obj);
        return obj;
    }

    dataTableParamsToApiPlatformParams(params, searchPanesRaw) {

        let columns = params.columns; // get the columns passed back to us, sanity.
        // var apiData = {
        //     page: 1
        // };
        // console.error(params);

        // apiData.start = params.start; // ignored?s

        let apiData = {};
        if (params.length) {
            // was apiData.itemsPerPage = params.length;
            apiData.limit = params.length;
        }

        // same as #[ApiFilter(MultiFieldSearchFilter::class, properties: ["label", "code"], arguments: ["searchParameterName"=>"search"])]
        if (params.search && params.search.value) {
            apiData['search'] = params.search.value;
        }

        let order = {};
        if (params.searchBuilder) {
            apiData['searchBuilder'] = params.searchBuilder;
        }
        // https://jardin.wip/api/projects.jsonld?page=1&itemsPerPage=14&order[code]=asc
        params.order.forEach((o, index) => {
            let c = params.columns[o.column];
            if (c.data) {
                order[c.data] = o.dir;
                // apiData.order = order;
                apiData['order[' + c.data + ']'] = o.dir;
            }
            // console.error(c, order, o.column, o.dir);
        });

        let facetsFilter = [];
        for (const [key, value] of Object.entries(params.searchPanes)) {
            if (Object.values(value).length) {
                facetsFilter.push(key + ',in,' + Object.values(value).join('|'));
            }
        }
        if(facetsFilter.length > 0) {
            apiData['facet_filter'] = facetsFilter;
        }

        if (params.searchBuilder && params.searchBuilder.criteria) {
            params.searchBuilder.criteria.forEach((c, index) => {
                console.warn(c);
                apiData[c.origData + '[]'] = c.value1;
            });
        }
        let facets = [];
        this.columns.forEach(function (column, index) {
            if ( column.browsable ) {
                facets.push(column.name);
            }
        });
        params.columns.forEach(function (column, index) {

            if (column.search && column.search.value) {
                // console.error(column);
                let value = column.search.value;
                // check the first character for a range filter operator

                // data is the column field, at least for right now.
                apiData[column.data] = value;
            }
        });

        if (params.start) {
            // was apiData.page = Math.floor(params.start / params.length) + 1;
            // apiData.page = Math.floor(params.start / apiData.itemsPerPage) + 1;
        }
        apiData.offset = params.start;
        console.log(searchPanesRaw.length);
        if(searchPanesRaw.length == 0) {
            apiData.facets = {};
            this.columns.forEach((column, index) => {
                if ( column.browsable ) {
                    apiData.facets[column.name] = 1;
                    // apiData['facets'][column.name][0]['total'] = 0;
                }
            });
        } else {
            apiData.facets = searchPanesRaw;
        }

        // console.error(apiData);

        // add our own filters
        // apiData['marking'] = ['fetch_success'];

        return apiData;
    }

    initFooter(el) {
        return;

        var footer = el.querySelector('tfoot');
        if (footer) {
            return; // do not initiate twice
        }

        var handleInput = function (column) {
            var input = $('<input class="form-control" type="text">');
            input.attr('placeholder', column.filter.placeholder || column.data);
            return input;
        };

        this.debug && console.log('adding footer');
        // var tr = $('<tr>');
        // var that = this;
        // console.log(this.columns());
        // Create an empty <tfoot> element and add it to the table:
        var footer = el.createTFoot();
        footer.classList.add('show-footer-above');

        var thead = el.querySelector('thead');
        el.insertBefore(footer, thead);

// Create an empty <tr> element and add it to the first position of <tfoot>:
        var row = footer.insertRow(0);


// Insert a new cell (<td>) at the first position of the "new" <tr> element:

// Add some bold text in the new cell:
//         cell.innerHTML = "<b>This is a table footer</b>";

        this.columns().forEach((column, index) => {
                var cell = row.insertCell(index);

                // cell.innerHTML = column.data;

                const input = document.createElement("input");
                input.setAttribute("type", "text");
                input.setAttribute("placeholder", column.data);
                cell.appendChild(input);

                // if (column.filter === true || column.filter.type === 'input') {
                //         el = handleInput(column);
                //     } else if (column.filter.type === 'select') {
                //         el = handleSelect(column);
                //     }

                // var cell = row.insertCell(index);
                // var td = $('<td>');
                // if (column.filter !== undefined) {
                //     var el;
                //     if (column.filter === true || column.filter.type === 'input') {
                //         el = handleInput(column);
                //     } else if (column.filter.type === 'select') {
                //         el = handleSelect(column);
                //     }
                //     that.handleFieldSearch(this.el, el, index);
                //
                //     td.append(el);
            }
        );
        // footer = $('<tfoot>');
        // footer.append(tr);
        // console.log(footer);
        // this.el.append(footer);

        // see http://live.datatables.net/giharaka/1/edit for moving the footer to below the header
    }


}
