/*!
  * Reqwest! A general purpose XHR connection manager
  * license MIT (c) Dustin Diaz 2015
  * https://github.com/ded/reqwest
  */
!function (e, t, n) { typeof module != "undefined" && module.exports ? module.exports = n() : typeof define == "function" && define.amd ? define(n) : t[e] = n() }("reqwest", this, function () { function succeed(e) { var t = protocolRe.exec(e.url); return t = t && t[1] || context.location.protocol, httpsRe.test(t) ? twoHundo.test(e.request.status) : !!e.request.response } function handleReadyState(e, t, n) { return function () { if (e._aborted) return n(e.request); if (e._timedOut) return n(e.request, "Request is aborted: timeout"); e.request && e.request[readyState] == 4 && (e.request.onreadystatechange = noop, succeed(e) ? t(e.request) : n(e.request)) } } function setHeaders(e, t) { var n = t.headers || {}, r; n.Accept = n.Accept || defaultHeaders.accept[t.type] || defaultHeaders.accept["*"]; var i = typeof FormData != "undefined" && t.data instanceof FormData; !t.crossOrigin && !n[requestedWith] && (n[requestedWith] = defaultHeaders.requestedWith), !n[contentType] && !i && (n[contentType] = t.contentType || defaultHeaders.contentType); for (r in n) n.hasOwnProperty(r) && "setRequestHeader" in e && e.setRequestHeader(r, n[r]) } function setCredentials(e, t) { typeof t.withCredentials != "undefined" && typeof e.withCredentials != "undefined" && (e.withCredentials = !!t.withCredentials) } function generalCallback(e) { lastValue = e } function urlappend(e, t) { return e + (/\?/.test(e) ? "&" : "?") + t } function handleJsonp(e, t, n, r) { var i = uniqid++, s = e.jsonpCallback || "callback", o = e.jsonpCallbackName || reqwest.getcallbackPrefix(i), u = new RegExp("((^|\\?|&)" + s + ")=([^&]+)"), a = r.match(u), f = doc.createElement("script"), l = 0, c = navigator.userAgent.indexOf("MSIE 10.0") !== -1; return a ? a[3] === "?" ? r = r.replace(u, "$1=" + o) : o = a[3] : r = urlappend(r, s + "=" + o), context[o] = generalCallback, f.type = "text/javascript", f.src = r, f.async = !0, typeof f.onreadystatechange != "undefined" && !c && (f.htmlFor = f.id = "_reqwest_" + i), f.onload = f.onreadystatechange = function () { if (f[readyState] && f[readyState] !== "complete" && f[readyState] !== "loaded" || l) return !1; f.onload = f.onreadystatechange = null, f.onclick && f.onclick(), t(lastValue), lastValue = undefined, head.removeChild(f), l = 1 }, head.appendChild(f), { abort: function () { f.onload = f.onreadystatechange = null, n({}, "Request is aborted: timeout", {}), lastValue = undefined, head.removeChild(f), l = 1 } } } function getRequest(e, t) { var n = this.o, r = (n.method || "GET").toUpperCase(), i = typeof n == "string" ? n : n.url, s = n.processData !== !1 && n.data && typeof n.data != "string" ? reqwest.toQueryString(n.data) : n.data || null, o, u = !1; return (n["type"] == "jsonp" || r == "GET") && s && (i = urlappend(i, s), s = null), n["type"] == "jsonp" ? handleJsonp(n, e, t, i) : (o = n.xhr && n.xhr(n) || xhr(n), o.open(r, i, n.async === !1 ? !1 : !0), setHeaders(o, n), setCredentials(o, n), context[xDomainRequest] && o instanceof context[xDomainRequest] ? (o.onload = e, o.onerror = t, o.onprogress = function () { }, u = !0) : o.onreadystatechange = handleReadyState(this, e, t), n.before && n.before(o), u ? setTimeout(function () { o.send(s) }, 200) : o.send(s), o) } function Reqwest(e, t) { this.o = e, this.fn = t, init.apply(this, arguments) } function setType(e) { if (e === null) return undefined; if (e.match("json")) return "json"; if (e.match("javascript")) return "js"; if (e.match("text")) return "html"; if (e.match("xml")) return "xml" } function init(o, fn) { function complete(e) { o.timeout && clearTimeout(self.timeout), self.timeout = null; while (self._completeHandlers.length > 0) self._completeHandlers.shift()(e) } function success(resp) { var type = o.type || resp && setType(resp.getResponseHeader("Content-Type")); resp = type !== "jsonp" ? self.request : resp; var filteredResponse = globalSetupOptions.dataFilter(resp.responseText, type), r = filteredResponse; try { resp.responseText = r } catch (e) { } if (r) switch (type) { case "json": try { resp = context.JSON ? context.JSON.parse(r) : eval("(" + r + ")") } catch (err) { return error(resp, "Could not parse JSON in response", err) } break; case "js": resp = eval(r); break; case "html": resp = r; break; case "xml": resp = resp.responseXML && resp.responseXML.parseError && resp.responseXML.parseError.errorCode && resp.responseXML.parseError.reason ? null : resp.responseXML }self._responseArgs.resp = resp, self._fulfilled = !0, fn(resp), self._successHandler(resp); while (self._fulfillmentHandlers.length > 0) resp = self._fulfillmentHandlers.shift()(resp); complete(resp) } function timedOut() { self._timedOut = !0, self.request.abort() } function error(e, t, n) { e = self.request, self._responseArgs.resp = e, self._responseArgs.msg = t, self._responseArgs.t = n, self._erred = !0; while (self._errorHandlers.length > 0) self._errorHandlers.shift()(e, t, n); complete(e) } this.url = typeof o == "string" ? o : o.url, this.timeout = null, this._fulfilled = !1, this._successHandler = function () { }, this._fulfillmentHandlers = [], this._errorHandlers = [], this._completeHandlers = [], this._erred = !1, this._responseArgs = {}; var self = this; fn = fn || function () { }, o.timeout && (this.timeout = setTimeout(function () { timedOut() }, o.timeout)), o.success && (this._successHandler = function () { o.success.apply(o, arguments) }), o.error && this._errorHandlers.push(function () { o.error.apply(o, arguments) }), o.complete && this._completeHandlers.push(function () { o.complete.apply(o, arguments) }), this.request = getRequest.call(this, success, error) } function reqwest(e, t) { return new Reqwest(e, t) } function normalize(e) { return e ? e.replace(/\r?\n/g, "\r\n") : "" } function serial(e, t) { var n = e.name, r = e.tagName.toLowerCase(), i = function (e) { e && !e.disabled && t(n, normalize(e.attributes.value && e.attributes.value.specified ? e.value : e.text)) }, s, o, u, a; if (e.disabled || !n) return; switch (r) { case "input": /reset|button|image|file/i.test(e.type) || (s = /checkbox/i.test(e.type), o = /radio/i.test(e.type), u = e.value, (!s && !o || e.checked) && t(n, normalize(s && u === "" ? "on" : u))); break; case "textarea": t(n, normalize(e.value)); break; case "select": if (e.type.toLowerCase() === "select-one") i(e.selectedIndex >= 0 ? e.options[e.selectedIndex] : null); else for (a = 0; e.length && a < e.length; a++)e.options[a].selected && i(e.options[a]) } } function eachFormElement() { var e = this, t, n, r = function (t, n) { var r, i, s; for (r = 0; r < n.length; r++) { s = t[byTag](n[r]); for (i = 0; i < s.length; i++)serial(s[i], e) } }; for (n = 0; n < arguments.length; n++)t = arguments[n], /input|select|textarea/i.test(t.tagName) && serial(t, e), r(t, ["input", "select", "textarea"]) } function serializeQueryString() { return reqwest.toQueryString(reqwest.serializeArray.apply(null, arguments)) } function serializeHash() { var e = {}; return eachFormElement.apply(function (t, n) { t in e ? (e[t] && !isArray(e[t]) && (e[t] = [e[t]]), e[t].push(n)) : e[t] = n }, arguments), e } function buildParams(e, t, n, r) { var i, s, o, u = /\[\]$/; if (isArray(t)) for (s = 0; t && s < t.length; s++)o = t[s], n || u.test(e) ? r(e, o) : buildParams(e + "[" + (typeof o == "object" ? s : "") + "]", o, n, r); else if (t && t.toString() === "[object Object]") for (i in t) buildParams(e + "[" + i + "]", t[i], n, r); else r(e, t) } var context = this; if ("window" in context) var doc = document, byTag = "getElementsByTagName", head = doc[byTag]("head")[0]; else { var XHR2; try { XHR2 = require("xhr2") } catch (ex) { throw new Error("Peer dependency `xhr2` required! Please npm install xhr2") } } var httpsRe = /^http/, protocolRe = /(^\w+):\/\//, twoHundo = /^(20\d|1223)$/, readyState = "readyState", contentType = "Content-Type", requestedWith = "X-Requested-With", uniqid = 0, callbackPrefix = "reqwest_" + +(new Date), lastValue, xmlHttpRequest = "XMLHttpRequest", xDomainRequest = "XDomainRequest", noop = function () { }, isArray = typeof Array.isArray == "function" ? Array.isArray : function (e) { return e instanceof Array }, defaultHeaders = { contentType: "application/x-www-form-urlencoded", requestedWith: xmlHttpRequest, accept: { "*": "text/javascript, text/html, application/xml, text/xml, */*", xml: "application/xml, text/xml", html: "text/html", text: "text/plain", json: "application/json, text/javascript", js: "application/javascript, text/javascript" } }, xhr = function (e) { if (e.crossOrigin === !0) { var t = context[xmlHttpRequest] ? new XMLHttpRequest : null; if (t && "withCredentials" in t) return t; if (context[xDomainRequest]) return new XDomainRequest; throw new Error("Browser does not support cross-origin requests") } return context[xmlHttpRequest] ? new XMLHttpRequest : XHR2 ? new XHR2 : new ActiveXObject("Microsoft.XMLHTTP") }, globalSetupOptions = { dataFilter: function (e) { return e } }; return Reqwest.prototype = { abort: function () { this._aborted = !0, this.request.abort() }, retry: function () { init.call(this, this.o, this.fn) }, then: function (e, t) { return e = e || function () { }, t = t || function () { }, this._fulfilled ? this._responseArgs.resp = e(this._responseArgs.resp) : this._erred ? t(this._responseArgs.resp, this._responseArgs.msg, this._responseArgs.t) : (this._fulfillmentHandlers.push(e), this._errorHandlers.push(t)), this }, always: function (e) { return this._fulfilled || this._erred ? e(this._responseArgs.resp) : this._completeHandlers.push(e), this }, fail: function (e) { return this._erred ? e(this._responseArgs.resp, this._responseArgs.msg, this._responseArgs.t) : this._errorHandlers.push(e), this }, "catch": function (e) { return this.fail(e) } }, reqwest.serializeArray = function () { var e = []; return eachFormElement.apply(function (t, n) { e.push({ name: t, value: n }) }, arguments), e }, reqwest.serialize = function () { if (arguments.length === 0) return ""; var e, t, n = Array.prototype.slice.call(arguments, 0); return e = n.pop(), e && e.nodeType && n.push(e) && (e = null), e && (e = e.type), e == "map" ? t = serializeHash : e == "array" ? t = reqwest.serializeArray : t = serializeQueryString, t.apply(null, n) }, reqwest.toQueryString = function (e, t) { var n, r, i = t || !1, s = [], o = encodeURIComponent, u = function (e, t) { t = "function" == typeof t ? t() : t == null ? "" : t, s[s.length] = o(e) + "=" + o(t) }; if (isArray(e)) for (r = 0; e && r < e.length; r++)u(e[r].name, e[r].value); else for (n in e) e.hasOwnProperty(n) && buildParams(n, e[n], i, u); return s.join("&").replace(/%20/g, "+") }, reqwest.getcallbackPrefix = function () { return callbackPrefix }, reqwest.compat = function (e, t) { return e && (e.type && (e.method = e.type) && delete e.type, e.dataType && (e.type = e.dataType), e.jsonpCallback && (e.jsonpCallbackName = e.jsonpCallback) && delete e.jsonpCallback, e.jsonp && (e.jsonpCallback = e.jsonp)), new Reqwest(e, t) }, reqwest.ajaxSetup = function (e) { e = e || {}; for (var t in e) globalSetupOptions[t] = e[t] }, reqwest })

/*
 * JavaScript MD5
 * https://github.com/blueimp/JavaScript-MD5
 */
!function(n){"use strict";function t(n,t){var r=(65535&n)+(65535&t);return(n>>16)+(t>>16)+(r>>16)<<16|65535&r}function r(n,t){return n<<t|n>>>32-t}function e(n,e,o,u,c,f){return t(r(t(t(e,n),t(u,f)),c),o)}function o(n,t,r,o,u,c,f){return e(t&r|~t&o,n,t,u,c,f)}function u(n,t,r,o,u,c,f){return e(t&o|r&~o,n,t,u,c,f)}function c(n,t,r,o,u,c,f){return e(t^r^o,n,t,u,c,f)}function f(n,t,r,o,u,c,f){return e(r^(t|~o),n,t,u,c,f)}function i(n,r){n[r>>5]|=128<<r%32,n[14+(r+64>>>9<<4)]=r;var e,i,a,d,h,l=1732584193,g=-271733879,v=-1732584194,m=271733878;for(e=0;e<n.length;e+=16)i=l,a=g,d=v,h=m,g=f(g=f(g=f(g=f(g=c(g=c(g=c(g=c(g=u(g=u(g=u(g=u(g=o(g=o(g=o(g=o(g,v=o(v,m=o(m,l=o(l,g,v,m,n[e],7,-680876936),g,v,n[e+1],12,-389564586),l,g,n[e+2],17,606105819),m,l,n[e+3],22,-1044525330),v=o(v,m=o(m,l=o(l,g,v,m,n[e+4],7,-176418897),g,v,n[e+5],12,1200080426),l,g,n[e+6],17,-1473231341),m,l,n[e+7],22,-45705983),v=o(v,m=o(m,l=o(l,g,v,m,n[e+8],7,1770035416),g,v,n[e+9],12,-1958414417),l,g,n[e+10],17,-42063),m,l,n[e+11],22,-1990404162),v=o(v,m=o(m,l=o(l,g,v,m,n[e+12],7,1804603682),g,v,n[e+13],12,-40341101),l,g,n[e+14],17,-1502002290),m,l,n[e+15],22,1236535329),v=u(v,m=u(m,l=u(l,g,v,m,n[e+1],5,-165796510),g,v,n[e+6],9,-1069501632),l,g,n[e+11],14,643717713),m,l,n[e],20,-373897302),v=u(v,m=u(m,l=u(l,g,v,m,n[e+5],5,-701558691),g,v,n[e+10],9,38016083),l,g,n[e+15],14,-660478335),m,l,n[e+4],20,-405537848),v=u(v,m=u(m,l=u(l,g,v,m,n[e+9],5,568446438),g,v,n[e+14],9,-1019803690),l,g,n[e+3],14,-187363961),m,l,n[e+8],20,1163531501),v=u(v,m=u(m,l=u(l,g,v,m,n[e+13],5,-1444681467),g,v,n[e+2],9,-51403784),l,g,n[e+7],14,1735328473),m,l,n[e+12],20,-1926607734),v=c(v,m=c(m,l=c(l,g,v,m,n[e+5],4,-378558),g,v,n[e+8],11,-2022574463),l,g,n[e+11],16,1839030562),m,l,n[e+14],23,-35309556),v=c(v,m=c(m,l=c(l,g,v,m,n[e+1],4,-1530992060),g,v,n[e+4],11,1272893353),l,g,n[e+7],16,-155497632),m,l,n[e+10],23,-1094730640),v=c(v,m=c(m,l=c(l,g,v,m,n[e+13],4,681279174),g,v,n[e],11,-358537222),l,g,n[e+3],16,-722521979),m,l,n[e+6],23,76029189),v=c(v,m=c(m,l=c(l,g,v,m,n[e+9],4,-640364487),g,v,n[e+12],11,-421815835),l,g,n[e+15],16,530742520),m,l,n[e+2],23,-995338651),v=f(v,m=f(m,l=f(l,g,v,m,n[e],6,-198630844),g,v,n[e+7],10,1126891415),l,g,n[e+14],15,-1416354905),m,l,n[e+5],21,-57434055),v=f(v,m=f(m,l=f(l,g,v,m,n[e+12],6,1700485571),g,v,n[e+3],10,-1894986606),l,g,n[e+10],15,-1051523),m,l,n[e+1],21,-2054922799),v=f(v,m=f(m,l=f(l,g,v,m,n[e+8],6,1873313359),g,v,n[e+15],10,-30611744),l,g,n[e+6],15,-1560198380),m,l,n[e+13],21,1309151649),v=f(v,m=f(m,l=f(l,g,v,m,n[e+4],6,-145523070),g,v,n[e+11],10,-1120210379),l,g,n[e+2],15,718787259),m,l,n[e+9],21,-343485551),l=t(l,i),g=t(g,a),v=t(v,d),m=t(m,h);return[l,g,v,m]}function a(n){var t,r="",e=32*n.length;for(t=0;t<e;t+=8)r+=String.fromCharCode(n[t>>5]>>>t%32&255);return r}function d(n){var t,r=[];for(r[(n.length>>2)-1]=void 0,t=0;t<r.length;t+=1)r[t]=0;var e=8*n.length;for(t=0;t<e;t+=8)r[t>>5]|=(255&n.charCodeAt(t/8))<<t%32;return r}function h(n){return a(i(d(n),8*n.length))}function l(n,t){var r,e,o=d(n),u=[],c=[];for(u[15]=c[15]=void 0,o.length>16&&(o=i(o,8*n.length)),r=0;r<16;r+=1)u[r]=909522486^o[r],c[r]=1549556828^o[r];return e=i(u.concat(d(t)),512+8*t.length),a(i(c.concat(e),640))}function g(n){var t,r,e="";for(r=0;r<n.length;r+=1)t=n.charCodeAt(r),e+="0123456789abcdef".charAt(t>>>4&15)+"0123456789abcdef".charAt(15&t);return e}function v(n){return unescape(encodeURIComponent(n))}function m(n){return h(v(n))}function p(n){return g(m(n))}function s(n,t){return l(v(n),v(t))}function C(n,t){return g(s(n,t))}function A(n,t,r){return t?r?s(t,n):C(t,n):r?m(n):p(n)}"function"==typeof define&&define.amd?define(function(){return A}):"object"==typeof module&&module.exports?module.exports=A:n.md5=A}(this);

connection = function (method, url, data, type, dataType, contentType, success, error) {
    reqwest({
        url: url,
        method: method,
        data: data,
        type: type,
        dataType: dataType,
        contentType: contentType,
        success: success,
        error: error
    })
}

set_storage = function (key, value) {
    localStorage.setItem(key, value)
}

get_storage = function (key) {
    return localStorage.getItem(key)
}

remove_storage = function (key) {
    localStorage.removeItem(key)
}

/* menu loader */
function includeHTML(name) {
    var z, i, elmnt, file, xhttp;
    z = document.getElementsByTagName("*");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        file = elmnt.getAttribute(name);
        if (file) {
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) { elmnt.innerHTML = this.responseText; }
                    if (this.status == 404) { elmnt.innerHTML = "Page not found."; }
                    /* Remove the attribute, and call this function once more: */
                    elmnt.removeAttribute(name);
                    includeHTML(name);
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            return;
        }
    }
}


/*session check */
LogoutEdit = function () {
    storage = get_storage('snaptradar_test')
    /*{"first_name":"paul","last_name":".","gender":"M","birthday":"1982-05-06","phone_number":"0815971903311","address":"pekapuran11","city":"jakarta11","country":"indonesia11","postal_code":"1121011","auth_key":"8a2e52f231d2d7a3cd06903d20953f509f07a2945a8f9fa0658cab901e8d96ea0fb020c144406c1c74f2e701ea0aef4f10dc2eb6ce6bde7b2447993c4d5dd37b"} */
    sp = JSON.parse(storage)

    method = 'post'
    url = api_base_url + 'user/logout/edit'
    data = JSON.stringify({
        auth_key: sp.auth_key
    })
    dataType = 'json'
    contentType = 'application/json'
    success = function (response, status, xhr) {
        remove_storage('snaptradar_test')
        window.location = base_url + "index.html"

        //    console.log(response)
        //        forgotpassword.setState({ error_message: <Fragment><p className="information_message"> An email has been sent to your mailbox... </p></Fragment> })
        //        setTimeout(function () { navigate(`/`) }, 5000)
        //        return false
    }
    error = function (jqXhr, textStatus, errorMessage) {
    }
    connection(method, url, data, type, dataType, contentType, success, error)
    return false
}

LoginGetByAuthKey = function (storage) {
    method = 'post'
    url = api_base_url + 'user/login/get_by_auth_key'
    data = JSON.stringify({
        auth_key : storage.auth_key
    })
    dataType = 'json'
    contentType = 'application/json'
    type = 'json'
    success = function (response, status, xhr) {
        status = response.status
        error = response.error
        message = response.message
        if (error == true) {
            remove_storage('snaptradar_test')
            return false
        }      
        data = response.data
        $.each(data, function (index, value) {
            set_storage('snaptradar_test', JSON.stringify({
                first_name: value.first_name,
                last_name: value.last_name,
                gender: value.gender,
                birthday: value.birthday,
                phone_number: value.phone_number,
                address: value.address,
                city: value.city,
                country: value.country,
                postal_code: value.postal_code,
                auth_key: value.auth_key,
                email: value.email,
            }))
        })
        window.location = base_url + "dashboard.html"
    }
    error = function (jqXhr, textStatus, errorMessage) {
        console.log('error')

    }
    connection(method, url, data, type, dataType, contentType, success, error)
    return false
}


isSessionExpired = function () {
    storage = get_storage('snaptradar_test')
    /*{"first_name":"paul","last_name":".","gender":"M","birthday":"1982-05-06","phone_number":"0815971903311","address":"pekapuran11","city":"jakarta11","country":"indonesia11","postal_code":"1121011","auth_key":"8a2e52f231d2d7a3cd06903d20953f509f07a2945a8f9fa0658cab901e8d96ea0fb020c144406c1c74f2e701ea0aef4f10dc2eb6ce6bde7b2447993c4d5dd37b"} */

    if(!storage){
        window.location = base_url + "index.html"
    }
    
    try{
        stor = JSON.parse(storage)
        if(!stor.hasOwnProperty('auth_key')){
            remove_storage('snaptradar_test')
            window.location = base_url + "index.html"
        }    
    }catch (e){
        remove_storage('snaptradar_test')
        window.location = base_url + "index.html"
    }

    method = 'post'
    url = api_base_url + 'user/check_session/get'
    data = storage
    dataType = 'json'
    type = 'json'
    contentType = 'application/json'
    success = function (response, status, xhr) {
        status = response.status
        error = response.error
        message = response.message
        if (error == true) {
            LogoutEdit()
        }
        data = response.data

        data.forEach(function (value, key) {
            set_storage('snaptradar_test', JSON.stringify({
                first_name: value.first_name,
                last_name: value.last_name,
                gender: value.gender,
                birthday: value.birthday,
                phone_number: value.phone_number,
                address: value.address,
                city: value.city,
                country: value.country,
                postal_code: value.postal_code,
                auth_key: value.auth_key,
                email: value.email,
            }))
        })
        return false
    }
    error = function (jqXhr, textStatus, errorMessage) {

    }
    connection(method, url, data, type, dataType, contentType, success, error)
    return false
}

isSessionExist = function () {
    storage = get_storage('snaptradar_test')

    try{
        stor = JSON.parse(storage)
        if(stor.hasOwnProperty('auth_key')){
            LoginGetByAuthKey(stor)
        }    
    }catch (e){
    }
}