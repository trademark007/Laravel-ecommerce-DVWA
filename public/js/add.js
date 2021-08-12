webpackJsonp([1], {
    1073: function(t, e) {},
    1075: function(t, e) {},
    1076: function(t, e) {},
    133: function(t, e, n) {
        "use strict";
        var a = n(43),
            s = n.n(a),
            r = n(413),
            i = (n(796), n(50)),
            o = n(0),
            u = n.n(o);
        e.a = {
            metaInfo: function() {
                return {
                    meta: [{
                        "http-equiv": "Content-Security-Policy",
                        content: "upgrade-insecure-requests"
                    }]
                }
            },
            data: function() {
                return {
                    loginScreenOpened: !0,
                    email: "",
                    password: "",
                    f7params: {
                        id: "io.framework7.testapp",
                        name: "Framework7",
                        theme: "auto",
                        routes: r.a
                    }
                }
            },
            computed: {
                auth: function() {
                    return this.$store.state.auth
                },
                absen: function() {
                    return this.$store.state.absen
                },
                worktype: function() {
                    return this.$store.state.worktype
                },
                isAbsen: function() {
                    return this.$store.state.isAbsen
                },
                date: function() {
                    return this.$store.state.date
                }
            },
            mounted: function() {
                if (0 == window.location.protocol.indexOf("https")) {
                    var t = document.createElement("meta");
                    t.setAttribute("http-equiv", "Content-Security-Policy"), t.setAttribute("content", "upgrade-insecure-requests"), document.head.append(t)
                }
                console.log(window.location.protocol.indexOf("https")), null != this.auth ? (this.loginScreenOpened = !1, this.date != u()().format("MMMM Do YYYY") && (i.a.commit("setIsAbsen", !1), i.a.commit("setAbsen", !1), console.log(this.date != u()().format("MMMM Do YYYY")), console.log(u()().format("MMMM Do YYYY")))) : console.log(this.auth)
            },
            methods: {
                failed: function(t) {
                    this.$f7.dialog.alert("Silahkan Coba lagi", t)
                },
                signIn: function() {
                    var t = this,
                        e = this,
                        n = e.$f7;
                    n.dialog.preloader(), s.a.post("https://selfcare.idcoern.site/ICARE/api/login", {
                        email: this.email,
                        password: this.password
                    }).then(function(e) {
                        console.log(e.data.Status), 200 == e.data.Status ? (i.a.commit("setAuth", e.data.Data), t.loginScreenOpened = !1, n.dialog.close()) : (t.failed(e.data.Data), console.log(e), n.dialog.close())
                    }).
                    catch (function(t) {
                        console.log(t)
                    })
                }
            }
        }
    },
    134: function(t, e, n) {
        "use strict";
        t.exports = function(t, e) {
            return function() {
                for (var n = new Array(arguments.length), a = 0; a < n.length; a++) n[a] = arguments[a];
                return t.apply(e, n)
            }
        }
    },
    135: function(t, e, n) {
        "use strict";
        var a = n(22),
            s = n(400),
            r = n(402),
            i = n(403),
            o = n(404),
            u = n(136);
        t.exports = function(t) {
            return new Promise(function(e, l) {
                var c = t.data,
                    f = t.headers;
                a.isFormData(c) && delete f["Content-Type"];
                var d = new XMLHttpRequest;
                if (t.auth) {
                    var p = t.auth.username || "",
                        h = t.auth.password || "";
                    f.Authorization = "Basic " + btoa(p + ":" + h)
                }
                if (d.open(t.method.toUpperCase(), r(t.url, t.params, t.paramsSerializer), !0), d.timeout = t.timeout, d.onreadystatechange = function() {
                    if (d && 4 === d.readyState && (0 !== d.status || d.responseURL && 0 === d.responseURL.indexOf("file:"))) {
                        var n = "getAllResponseHeaders" in d ? i(d.getAllResponseHeaders()) : null,
                            a = t.responseType && "text" !== t.responseType ? d.response : d.responseText,
                            r = {
                                data: a,
                                status: d.status,
                                statusText: d.statusText,
                                headers: n,
                                config: t,
                                request: d
                            };
                        s(e, l, r), d = null
                    }
                }, d.onerror = function() {
                    l(u("Network Error", t, null, d)), d = null
                }, d.ontimeout = function() {
                    l(u("timeout of " + t.timeout + "ms exceeded", t, "ECONNABORTED", d)), d = null
                }, a.isStandardBrowserEnv()) {
                    var m = n(405),
                        g = (t.withCredentials || o(t.url)) && t.xsrfCookieName ? m.read(t.xsrfCookieName) : void 0;
                    g && (f[t.xsrfHeaderName] = g)
                }
                if ("setRequestHeader" in d && a.forEach(f, function(t, e) {
                    void 0 === c && "content-type" === e.toLowerCase() ? delete f[e] : d.setRequestHeader(e, t)
                }), t.withCredentials && (d.withCredentials = !0), t.responseType) try {
                    d.responseType = t.responseType
                } catch (e) {
                    if ("json" !== t.responseType) throw e
                }
                "function" == typeof t.onDownloadProgress && d.addEventListener("progress", t.onDownloadProgress), "function" == typeof t.onUploadProgress && d.upload && d.upload.addEventListener("progress", t.onUploadProgress), t.cancelToken && t.cancelToken.promise.then(function(t) {
                    d && (d.abort(), l(t), d = null)
                }), void 0 === c && (c = null), d.send(c)
            })
        }
    },

    136: function(t, e, n) {
        "use strict";
        var a = n(401);
        t.exports = function(t, e, n, s, r) {
            var i = new Error(t);
            return a(i, e, n, s, r)
        }
    },
    137: function(t, e, n) {
        "use strict";
        t.exports = function(t) {
            return !(!t || !t.__CANCEL__)
        }
    },
    138: function(t, e, n) {
        "use strict";

        function a(t) {
            this.message = t
        }
        a.prototype.toString = function() {
            return "Cancel" + (this.message ? ": " + this.message : "")
        }, a.prototype.__CANCEL__ = !0, t.exports = a
    },
    139: function(t, e, n) {
        "use strict";
        var a = n(140),
            s = n(765),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    140: function(t, e, n) {
        "use strict";
        var a = n(414),
            s = n(420);
        n.n(s);
        e.a = {
            components: {
                LineChart: a.LineChart,
                tree: s.tree
            },
            data: function() {
                return {
                    datacollection: null,
                    tree: {
                        name: "father",
                        children: [{
                            name: "son1"
                        }, {
                            name: "son2"
                        }, {
                            name: "son3"
                        }]
                    }
                }
            },
            mounted: function() {
                this.fillData()
            },
            methods: {
                fillData: function() {
                    this.datacollection = {
                        labels: [this.getRandomInt(), this.getRandomInt()],
                        datasets: [{
                            label: "Data One",
                            backgroundColor: "#f87979",
                            data: [this.getRandomInt(), this.getRandomInt()]
                        }, {
                            label: "Data One",
                            backgroundColor: "#f87979",
                            data: [this.getRandomInt(), this.getRandomInt()]
                        }]
                    }
                },
                getRandomInt: function() {
                    return Math.floor(46 * Math.random()) + 5
                }
            }
        }
    },
    22: function(t, e, n) {
        "use strict";

        function a(t) {
            return "[object Array]" === w.call(t)
        }

        function s(t) {
            return "[object ArrayBuffer]" === w.call(t)
        }

        function r(t) {
            return "undefined" != typeof FormData && t instanceof FormData
        }

        function i(t) {
            return "undefined" != typeof ArrayBuffer && ArrayBuffer.isView ? ArrayBuffer.isView(t) : t && t.buffer && t.buffer instanceof ArrayBuffer
        }

        function o(t) {
            return "string" == typeof t
        }

        function u(t) {
            return "number" == typeof t
        }

        function l(t) {
            return void 0 === t
        }

        function c(t) {
            return null !== t && "object" == typeof t
        }

        function f(t) {
            return "[object Date]" === w.call(t)
        }

        function d(t) {
            return "[object File]" === w.call(t)
        }

        function p(t) {
            return "[object Blob]" === w.call(t)
        }

        function h(t) {
            return "[object Function]" === w.call(t)
        }

        function m(t) {
            return c(t) && h(t.pipe)
        }

        function g(t) {
            return "undefined" != typeof URLSearchParams && t instanceof URLSearchParams
        }

        function v(t) {
            return t.replace(/^\s*/, "").replace(/\s*$/, "")
        }

        function b() {
            return ("undefined" == typeof navigator || "ReactNative" !== navigator.product) && ("undefined" != typeof window && "undefined" != typeof document)
        }

        function y(t, e) {
            if (null !== t && void 0 !== t)
                if ("object" != typeof t && (t = [t]), a(t))
                    for (var n = 0, s = t.length; n < s; n++) e.call(null, t[n], n, t);
                else
                    for (var r in t) Object.prototype.hasOwnProperty.call(t, r) && e.call(null, t[r], r, t)
        }

        function k() {
            function t(t, n) {
                "object" == typeof e[n] && "object" == typeof t ? e[n] = k(e[n], t) : e[n] = t
            }
            for (var e = {}, n = 0, a = arguments.length; n < a; n++) y(arguments[n], t);
            return e
        }

        function A(t, e, n) {
            return y(e, function(e, a) {
                t[a] = n && "function" == typeof e ? j(e, n) : e
            }), t
        }
        var j = n(134),
            S = n(397),
            w = Object.prototype.toString;
        t.exports = {
            isArray: a,
            isArrayBuffer: s,
            isBuffer: S,
            isFormData: r,
            isArrayBufferView: i,
            isString: o,
            isNumber: u,
            isObject: c,
            isUndefined: l,
            isDate: f,
            isFile: d,
            isBlob: p,
            isFunction: h,
            isStream: m,
            isURLSearchParams: g,
            isStandardBrowserEnv: b,
            forEach: y,
            merge: k,
            extend: A,
            trim: v
        }
    },
    361: function(t, e, n) {
        "use strict";
        n(50);
        e.a = {
            data: function() {
                return {
                    pin: ""
                }
            },
            computed: {
                auth: function() {
                    return this.$store.state.auth
                },
                absen: function() {
                    return this.$store.state.absen
                }
            },
            methods: {
                failed: function(t) {
                    this.$f7.dialog.alert("Silahkan Coba lagi", t)
                },
                signIn: function() {
                    var t = this;
                    if (this.auth.pin == this.pin) {
                        var e = this,
                            n = e.$f7;
                        n.dialog.preloader(), 0 != this.absen ? setTimeout(function() {
                            n.dialog.close(), t.$f7router.navigate("/info")
                        }, 500) : setTimeout(function() {
                            n.dialog.close(), t.$f7router.navigate("/worktype")
                        }, 500)
                    } else this.failed("Pin Anda salah")
                }
            }
        }
    },
    363: function(t, e, n) {
        "use strict";
        var a = n(43),
            s = n.n(a),
            r = n(0),
            i = n.n(r),
            o = n(50);
        e.a = {
            props: ["type"],
            data: function() {
                return {
                    datenow: "",
                    Q1: null,
                    Q2: null,
                    Q3: null
                }
            },
            methods: {
                time: function() {
                    this.datenow = i()().format("h:mm:ss")
                },
                failed: function(t) {
                    this.$f7.dialog.alert("Silahkan Coba lagi", t)
                },
                alert: function(t) {
                    var e = this;
                    this.$f7.dialog.alert("Selamat bekerja, Tetap menjaga protokol kesehatan COVID-19. Selalu gunakan Masker dan Cuci tangan.", t, function() {
                        e.$f7router.navigate("/info")
                    })
                },
                SendSurvey: function() {
                    var t = this,
                        e = this,
                        n = e.$f7;
                    n.dialog.preloader(), s.a.post("https://selfcare.idcoern.site/ICARE/api/add/survey", {
                        q1: this.Q1,
                        q2: this.Q2,
                        q3: this.Q3,
                        user_id: this.auth.id
                    }).then(function(e) {
                        o.a.commit("setIsDate", i()().format("MMMM Do YYYY")), "off" == t.type ? (o.a.commit("setIsAbsen", !0), o.a.commit("setAbsen", !0), n.dialog.close(), t.alert("barhasil")) : (n.dialog.close(), t.alert("barhasil"))
                    }).
                    catch (function(t) {
                        console.log(t)
                    })
                }
            },
            mounted: function() {
                console.log(this.type), console.log(this.auth), this.interval = setInterval(this.time, 1e3)
            },
            computed: {
                auth: function() {
                    return this.$store.state.auth
                }
            },
            beforeDestroy: function() {
                clearInterval(this.interval)
            }
        }
    },
    364: function(t, e, n) {
        "use strict";
        var a = n(43),
            s = n.n(a),
            r = n(50),
            i = n(0),
            o = n.n(i);
        e.a = {
            data: function() {
                return {
                    surveyScreenOpened: !1,
                    datenow: "",
                    Q1: null,
                    Q2: null,
                    Q3: null
                }
            },
            methods: {
                time: function() {
                    this.datenow = o()().format("h:mm:ss")
                },
                failed: function(t) {
                    this.$f7.dialog.alert("Silahkan Coba lagi", t)
                },
                alert: function(t) {
                    var e = this,
                        n = e.$f7;
                    n.dialog.alert("Selamat bekerja, Tetap menjaga protokol kesehatan COVID-19. Selalu gunakan Masker dan Cuci tangan.", t, function() {
                        n.loginScreen.close()
                    })
                },
                SendSurvey: function() {
                    var t = this;
                    s.a.post("https://selfcare.idcoern.site/ICARE/api/add/survey", {
                        q1: this.Q1,
                        q2: this.Q2,
                        q3: this.Q3,
                        user_id: this.auth.id
                    }).then(function(e) {
                        t.alert("Berhasil disimpan")
                    }).
                    catch (function(t) {
                        console.log(t)
                    })
                },
                SendStartAbsen: function() {
                    var t = this;
                    s.a.post("https://selfcare.idcoern.site/ICARE/api/start/absen", {
                        user_id: this.auth.id,
                        position: "tes"
                    }).then(function(e) {
                        r.a.commit("setAbsen", !0), t.UpdateAbsen()
                    }).
                    catch (function(t) {
                        console.log(t)
                    })
                },
                SendStopAbsen: function() {
                    var t = this;
                    s.a.post("https://selfcare.idcoern.site/ICARE/api/end/absen", {
                        user_id: this.auth.id
                    }).then(function(e) {
                        t.absen = !1, r.a.commit("setAbsen", !1), t.UpdateAbsen()
                    }).
                    catch (function(t) {
                        console.log(t)
                    })
                },
                UpdateAbsen: function() {
                    return this.$store.state.absen
                }
            },
            mounted: function() {
                console.log(this.auth), this.interval = setInterval(this.time, 1e3)
            },
            computed: {
                auth: function() {
                    return this.$store.state.auth
                },
                absen: function() {
                    return this.$store.state.absen
                }
            },
            beforeDestroy: function() {
                clearInterval(this.interval)
            }
        }
    },
    365: function(t, e, n) {
        "use strict";
        var a = n(774),
            s = n.n(a),
            r = n(43),
            i = n.n(r),
            o = n(50),
            u = n(0),
            l = n.n(u);
        e.a = {
            props: ["worktype"],
            data: function() {
                return {
                    latitude: "Error",
                    longitude: "Error",
                    disabled: !0,
                    surveyScreenOpened: !1,
                    datenow: "Loading",
                    Q1: null,
                    Q2: null,
                    Q3: null
                }
            },
            methods: {
                time: function() {
                    this.datenow = l()().format("MMMM Do YYYY, HH:mm:ss")
                },
                failed: function(t) {
                    this.$f7.dialog.alert("Silahkan Coba lagi", t)
                },
                alert: function(t) {
                    var e = this,
                        n = e.$f7;
                    n.dialog.alert("Selamat bekerja, Tetap menjaga protokol kesehatan COVID-19. Selalu gunakan Masker dan Cuci tangan.", t, function() {
                        n.loginScreen.close()
                    })
                },
                SendStartAbsen: function() {
                    var t = this,
                        e = this,
                        n = e.$f7;
                    n.dialog.preloader(), i.a.post("https://selfcare.idcoern.site/ICARE/api/start/absen", s()({
                        user_id: this.auth.id,
                        position: "tes",
                        worktype: this.worktype
                    }, "position", "latitude= " + this.latitude + ", longitude= " + this.longitude)).then(function(e) {
                        o.a.commit("setAbsen", !0), o.a.commit("setWorktype", t.worktype), t.UpdateAbsen(), setTimeout(function() {
                            n.dialog.close(), t.$f7router.navigate("/survey/work")
                        }, 500)
                    }).
                    catch (function(t) {
                        console.log(t)
                    })
                },
                SendStopAbsen: function() {
                    var t = this;
                    if (this.disabled) {
                        this.$f7.dialog.alert("Anda dapat check-out setelah Jam 5 sore", "Warning", function() {
                            t.$f7router.navigate("/info")
                        })
                    } else {
                        var e = this,
                            n = e.$f7;
                        n.dialog.preloader(), i.a.post("https://selfcare.idcoern.site/ICARE/api/end/absen", {
                            user_id: this.auth.id
                        }).then(function(e) {
                            o.a.commit("setIsAbsen", !0), t.UpdateAbsen(), n.dialog.close(), "WFO" == t.worktype ? t.$f7router.navigate("/suggest") : t.$f7router.navigate("/info")
                        }).
                        catch (function(t) {
                            console.log(t)
                        })
                    }
                },
                UpdateAbsen: function() {
                    return this.$store.state.absen
                }
            },
            mounted: function() {
                var t = this;
                navigator.geolocation.getCurrentPosition(function(e) {
                    t.latitude = e.coords.latitude, t.longitude = e.coords.longitude
                }, function(t) {
                    console.log(t.message)
                }), this.interval = setInterval(this.time, 1e3), l()().format("HH") >= 17 && (this.disabled = !1)
            },
            render: function() {
                return this.$props.render({
                    worktype: this.worktype
                })
            },
            computed: {
                auth: function() {
                    return this.$store.state.auth
                },
                absen: function() {
                    return this.$store.state.absen
                }
            },
            beforeDestroy: function() {
                clearInterval(this.interval)
            }
        }
    },
    370: function(t, e, n) {
        "use strict";
        e.a = {}
    },
    371: function(t, e, n) {
        "use strict";
        var a = n(43),
            s = n.n(a),
            r = n(0);
        n.n(r);
        e.a = {
            data: function() {
                return {
                    suggest: []
                }
            },
            methods: {
                failed: function(t) {
                    this.$f7.dialog.alert("Silahkan Coba lagi", t)
                },
                alert: function(t) {
                    var e = this;
                    this.$f7.dialog.alert("Terima kasih", t, function() {
                        e.$f7router.navigate("/info")
                    })
                },
                SendInteraksi: function() {
                    var t = this,
                        e = this,
                        n = e.$f7;
                    n.dialog.preloader(), s.a.post("https://selfcare.idcoern.site/ICARE/api/add/suggest", {
                        suggest_1: this.suggest[0],
                        suggest_2: this.suggest[1],
                        suggest_3: this.suggest[2],
                        user_id: this.auth.id
                    }).then(function(e) {
                        n.dialog.close(), t.alert("Barhasil")
                    }).
                    catch (function(t) {
                        console.log(t)
                    })
                }
            },
            mounted: function() {
                console.log(this.auth), this.interval = setInterval(this.time, 1e3)
            },
            computed: {
                auth: function() {
                    return this.$store.state.auth
                }
            },
            beforeDestroy: function() {
                clearInterval(this.interval)
            }
        }
    },
    372: function(t, e, n) {
        "use strict";
        var a = n(0);
        n.n(a);
        e.a = {
            data: function() {
                return {}
            },
            computed: {
                auth: function() {
                    return this.$store.state.auth
                },
                absen: function() {
                    return this.$store.state.absen
                },
                worktype: function() {
                    return this.$store.state.worktype
                },
                isAbsen: function() {
                    return this.$store.state.isAbsen
                },
                date: function() {
                    return this.$store.state.date
                }
            },
            methods: {},
            mounted: function() {
                this.interval = setInterval(this.time, 1e3)
            }
        }
    },
    392: function(t, e, n) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var a = n(53),
            s = n(395),
            r = n(362),
            i = n(800),
            o = n(802),
            u = n(1003),
            l = n(1073),
            c = (n.n(l), n(1075)),
            f = (n.n(c), n(1076)),
            d = (n.n(f), n(50)),
            p = n(1077);
        o.a.use(u.a), a.
        default.config.productionTip = !1, a.
        default.use(r.a), a.
        default.use(n(1079)), a.
        default.use(p.a), new a.
        default ({
            el: "#app",
            router: i.a,
            template: "<App/>",
            store: d.a,
            components: {
                App: s.a
            }
        })
    },
    395: function(t, e, n) {
        "use strict";
        var a = n(133),
            s = n(798),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    396: function(t, e, n) {
        "use strict";

        function a(t) {
            var e = new i(t),
                n = r(i.prototype.request, e);
            return s.extend(n, i.prototype, e), s.extend(n, e), n
        }
        var s = n(22),
            r = n(134),
            i = n(398),
            o = n(83),
            u = a(o);
        u.Axios = i, u.create = function(t) {
            return a(s.merge(o, t))
        }, u.Cancel = n(138), u.CancelToken = n(411), u.isCancel = n(137), u.all = function(t) {
            return Promise.all(t)
        }, u.spread = n(412), t.exports = u, t.exports.
        default = u
    },
    397: function(t, e) {
        /*!
         * Determine if an object is a Buffer
         *
         * @author   Feross Aboukhadijeh <https://feross.org>
         * @license  MIT
         */
        t.exports = function(t) {
            return null != t && null != t.constructor && "function" == typeof t.constructor.isBuffer && t.constructor.isBuffer(t)
        }
    },
    398: function(t, e, n) {
        "use strict";

        function a(t) {
            this.defaults = t, this.interceptors = {
                request: new i,
                response: new i
            }
        }
        var s = n(83),
            r = n(22),
            i = n(406),
            o = n(407);
        a.prototype.request = function(t) {
            "string" == typeof t && (t = r.merge({
                url: arguments[0]
            }, arguments[1])), t = r.merge(s, {
                method: "get"
            }, this.defaults, t), t.method = t.method.toLowerCase();
            var e = [o, void 0],
                n = Promise.resolve(t);
            for (this.interceptors.request.forEach(function(t) {
                e.unshift(t.fulfilled, t.rejected)
            }), this.interceptors.response.forEach(function(t) {
                e.push(t.fulfilled, t.rejected)
            }); e.length;) n = n.then(e.shift(), e.shift());
            return n
        }, r.forEach(["delete", "get", "head", "options"], function(t) {
            a.prototype[t] = function(e, n) {
                return this.request(r.merge(n || {}, {
                    method: t,
                    url: e
                }))
            }
        }), r.forEach(["post", "put", "patch"], function(t) {
            a.prototype[t] = function(e, n, a) {
                return this.request(r.merge(a || {}, {
                    method: t,
                    url: e,
                    data: n
                }))
            }
        }), t.exports = a
    },
    399: function(t, e, n) {
        "use strict";
        var a = n(22);
        t.exports = function(t, e) {
            a.forEach(t, function(n, a) {
                a !== e && a.toUpperCase() === e.toUpperCase() && (t[e] = n, delete t[a])
            })
        }
    },
    400: function(t, e, n) {
        "use strict";
        var a = n(136);
        t.exports = function(t, e, n) {
            var s = n.config.validateStatus;
            n.status && s && !s(n.status) ? e(a("Request failed with status code " + n.status, n.config, null, n.request, n)) : t(n)
        }
    },
    401: function(t, e, n) {
        "use strict";
        t.exports = function(t, e, n, a, s) {
            return t.config = e, n && (t.code = n), t.request = a, t.response = s, t
        }
    },
    402: function(t, e, n) {
        "use strict";

        function a(t) {
            return encodeURIComponent(t).replace(/%40/gi, "@").replace(/%3A/gi, ":").replace(/%24/g, "$").replace(/%2C/gi, ",").replace(/%20/g, "+").replace(/%5B/gi, "[").replace(/%5D/gi, "]")
        }
        var s = n(22);
        t.exports = function(t, e, n) {
            if (!e) return t;
            var r;
            if (n) r = n(e);
            else if (s.isURLSearchParams(e)) r = e.toString();
            else {
                var i = [];
                s.forEach(e, function(t, e) {
                    null !== t && void 0 !== t && (s.isArray(t) ? e += "[]" : t = [t], s.forEach(t, function(t) {
                        s.isDate(t) ? t = t.toISOString() : s.isObject(t) && (t = JSON.stringify(t)), i.push(a(e) + "=" + a(t))
                    }))
                }), r = i.join("&")
            }
            return r && (t += (-1 === t.indexOf("?") ? "?" : "&") + r), t
        }
    },
    403: function(t, e, n) {
        "use strict";
        var a = n(22),
            s = ["age", "authorization", "content-length", "content-type", "etag", "expires", "from", "host", "if-modified-since", "if-unmodified-since", "last-modified", "location", "max-forwards", "proxy-authorization", "referer", "retry-after", "user-agent"];
        t.exports = function(t) {
            var e, n, r, i = {};
            return t ? (a.forEach(t.split("\n"), function(t) {
                if (r = t.indexOf(":"), e = a.trim(t.substr(0, r)).toLowerCase(), n = a.trim(t.substr(r + 1)), e) {
                    if (i[e] && s.indexOf(e) >= 0) return;
                    i[e] = "set-cookie" === e ? (i[e] ? i[e] : []).concat([n]) : i[e] ? i[e] + ", " + n : n
                }
            }), i) : i
        }
    },
    404: function(t, e, n) {
        "use strict";
        var a = n(22);
        t.exports = a.isStandardBrowserEnv() ? function() {
            function t(t) {
                var e = t;
                return n && (s.setAttribute("href", e), e = s.href), s.setAttribute("href", e), {
                    href: s.href,
                    protocol: s.protocol ? s.protocol.replace(/:$/, "") : "",
                    host: s.host,
                    search: s.search ? s.search.replace(/^\?/, "") : "",
                    hash: s.hash ? s.hash.replace(/^#/, "") : "",
                    hostname: s.hostname,
                    port: s.port,
                    pathname: "/" === s.pathname.charAt(0) ? s.pathname : "/" + s.pathname
                }
            }
            var e, n = /(msie|trident)/i.test(navigator.userAgent),
                s = document.createElement("a");
            return e = t(window.location.href),
            function(n) {
                var s = a.isString(n) ? t(n) : n;
                return s.protocol === e.protocol && s.host === e.host
            }
        }() : function() {
            return function() {
                return !0
            }
        }()
    },
    405: function(t, e, n) {
        "use strict";
        var a = n(22);
        t.exports = a.isStandardBrowserEnv() ? function() {
            return {
                write: function(t, e, n, s, r, i) {
                    var o = [];
                    o.push(t + "=" + encodeURIComponent(e)), a.isNumber(n) && o.push("expires=" + new Date(n).toGMTString()), a.isString(s) && o.push("path=" + s), a.isString(r) && o.push("domain=" + r), !0 === i && o.push("secure"), document.cookie = o.join("; ")
                },
                read: function(t) {
                    var e = document.cookie.match(new RegExp("(^|;\\s*)(" + t + ")=([^;]*)"));
                    return e ? decodeURIComponent(e[3]) : null
                },
                remove: function(t) {
                    this.write(t, "", Date.now() - 864e5)
                }
            }
        }() : function() {
            return {
                write: function() {},
                read: function() {
                    return null
                },
                remove: function() {}
            }
        }()
    },
    406: function(t, e, n) {
        "use strict";

        function a() {
            this.handlers = []
        }
        var s = n(22);
        a.prototype.use = function(t, e) {
            return this.handlers.push({
                fulfilled: t,
                rejected: e
            }), this.handlers.length - 1
        }, a.prototype.eject = function(t) {
            this.handlers[t] && (this.handlers[t] = null)
        }, a.prototype.forEach = function(t) {
            s.forEach(this.handlers, function(e) {
                null !== e && t(e)
            })
        }, t.exports = a
    },
    407: function(t, e, n) {
        "use strict";

        function a(t) {
            t.cancelToken && t.cancelToken.throwIfRequested()
        }
        var s = n(22),
            r = n(408),
            i = n(137),
            o = n(83),
            u = n(409),
            l = n(410);
        t.exports = function(t) {
            return a(t), t.baseURL && !u(t.url) && (t.url = l(t.baseURL, t.url)), t.headers = t.headers || {}, t.data = r(t.data, t.headers, t.transformRequest), t.headers = s.merge(t.headers.common || {}, t.headers[t.method] || {}, t.headers || {}), s.forEach(["delete", "get", "head", "post", "put", "patch", "common"], function(e) {
                delete t.headers[e]
            }), (t.adapter || o.adapter)(t).then(function(e) {
                return a(t), e.data = r(e.data, e.headers, t.transformResponse), e
            }, function(e) {
                return i(e) || (a(t), e && e.response && (e.response.data = r(e.response.data, e.response.headers, t.transformResponse))), Promise.reject(e)
            })
        }
    },
    408: function(t, e, n) {
        "use strict";
        var a = n(22);
        t.exports = function(t, e, n) {
            return a.forEach(n, function(n) {
                t = n(t, e)
            }), t
        }
    },
    409: function(t, e, n) {
        "use strict";
        t.exports = function(t) {
            return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(t)
        }
    },
    410: function(t, e, n) {
        "use strict";
        t.exports = function(t, e) {
            return e ? t.replace(/\/+$/, "") + "/" + e.replace(/^\/+/, "") : t
        }
    },
    411: function(t, e, n) {
        "use strict";

        function a(t) {
            if ("function" != typeof t) throw new TypeError("executor must be a function.");
            var e;
            this.promise = new Promise(function(t) {
                e = t
            });
            var n = this;
            t(function(t) {
                n.reason || (n.reason = new s(t), e(n.reason))
            })
        }
        var s = n(138);
        a.prototype.throwIfRequested = function() {
            if (this.reason) throw this.reason
        }, a.source = function() {
            var t;
            return {
                token: new a(function(e) {
                    t = e
                }),
                cancel: t
            }
        }, t.exports = a
    },
    412: function(t, e, n) {
        "use strict";
        t.exports = function(t) {
            return function(e) {
                return t.apply(null, e)
            }
        }
    },
    413: function(t, e, n) {
        "use strict";
        var a = n(139),
            s = n(766),
            r = n(769),
            i = n(771),
            o = n(773),
            u = n(789),
            l = n(791),
            c = n(793);
        e.a = [{
            path: "/",
            component: s.a
        }, {
            path: "/home",
            component: a.a
        }, {
            path: "/survey/:type",
            component: r.a
        }, {
            path: "/wfh",
            component: i.a
        }, {
            path: "/attendance/:worktype",
            component: o.a
        }, {
            path: "/worktype",
            component: u.a
        }, {
            path: "/suggest",
            component: l.a
        }, {
            path: "/info",
            component: c.a
        }]
    },
    419: function(t, e, n) {
        function a(t) {
            return n(s(t))
        }

        function s(t) {
            var e = r[t];
            if (!(e + 1)) throw new Error("Cannot find module '" + t + "'.");
            return e
        }
        var r = {
            "./af": 141,
            "./af.js": 141,
            "./ar": 142,
            "./ar-dz": 143,
            "./ar-dz.js": 143,
            "./ar-kw": 144,
            "./ar-kw.js": 144,
            "./ar-ly": 145,
            "./ar-ly.js": 145,
            "./ar-ma": 146,
            "./ar-ma.js": 146,
            "./ar-sa": 147,
            "./ar-sa.js": 147,
            "./ar-tn": 148,
            "./ar-tn.js": 148,
            "./ar.js": 142,
            "./az": 149,
            "./az.js": 149,
            "./be": 150,
            "./be.js": 150,
            "./bg": 151,
            "./bg.js": 151,
            "./bm": 152,
            "./bm.js": 152,
            "./bn": 153,
            "./bn.js": 153,
            "./bo": 154,
            "./bo.js": 154,
            "./br": 155,
            "./br.js": 155,
            "./bs": 156,
            "./bs.js": 156,
            "./ca": 157,
            "./ca.js": 157,
            "./cs": 158,
            "./cs.js": 158,
            "./cv": 159,
            "./cv.js": 159,
            "./cy": 160,
            "./cy.js": 160,
            "./da": 161,
            "./da.js": 161,
            "./de": 162,
            "./de-at": 163,
            "./de-at.js": 163,
            "./de-ch": 164,
            "./de-ch.js": 164,
            "./de.js": 162,
            "./dv": 165,
            "./dv.js": 165,
            "./el": 166,
            "./el.js": 166,
            "./en-au": 167,
            "./en-au.js": 167,
            "./en-ca": 168,
            "./en-ca.js": 168,
            "./en-gb": 169,
            "./en-gb.js": 169,
            "./en-ie": 170,
            "./en-ie.js": 170,
            "./en-il": 171,
            "./en-il.js": 171,
            "./en-in": 172,
            "./en-in.js": 172,
            "./en-nz": 173,
            "./en-nz.js": 173,
            "./en-sg": 174,
            "./en-sg.js": 174,
            "./eo": 175,
            "./eo.js": 175,
            "./es": 176,
            "./es-do": 177,
            "./es-do.js": 177,
            "./es-us": 178,
            "./es-us.js": 178,
            "./es.js": 176,
            "./et": 179,
            "./et.js": 179,
            "./eu": 180,
            "./eu.js": 180,
            "./fa": 181,
            "./fa.js": 181,
            "./fi": 182,
            "./fi.js": 182,
            "./fil": 183,
            "./fil.js": 183,
            "./fo": 184,
            "./fo.js": 184,
            "./fr": 185,
            "./fr-ca": 186,
            "./fr-ca.js": 186,
            "./fr-ch": 187,
            "./fr-ch.js": 187,
            "./fr.js": 185,
            "./fy": 188,
            "./fy.js": 188,
            "./ga": 189,
            "./ga.js": 189,
            "./gd": 190,
            "./gd.js": 190,
            "./gl": 191,
            "./gl.js": 191,
            "./gom-deva": 192,
            "./gom-deva.js": 192,
            "./gom-latn": 193,
            "./gom-latn.js": 193,
            "./gu": 194,
            "./gu.js": 194,
            "./he": 195,
            "./he.js": 195,
            "./hi": 196,
            "./hi.js": 196,
            "./hr": 197,
            "./hr.js": 197,
            "./hu": 198,
            "./hu.js": 198,
            "./hy-am": 199,
            "./hy-am.js": 199,
            "./id": 200,
            "./id.js": 200,
            "./is": 201,
            "./is.js": 201,
            "./it": 202,
            "./it-ch": 203,
            "./it-ch.js": 203,
            "./it.js": 202,
            "./ja": 204,
            "./ja.js": 204,
            "./jv": 205,
            "./jv.js": 205,
            "./ka": 206,
            "./ka.js": 206,
            "./kk": 207,
            "./kk.js": 207,
            "./km": 208,
            "./km.js": 208,
            "./kn": 209,
            "./kn.js": 209,
            "./ko": 210,
            "./ko.js": 210,
            "./ku": 211,
            "./ku.js": 211,
            "./ky": 212,
            "./ky.js": 212,
            "./lb": 213,
            "./lb.js": 213,
            "./lo": 214,
            "./lo.js": 214,
            "./lt": 215,
            "./lt.js": 215,
            "./lv": 216,
            "./lv.js": 216,
            "./me": 217,
            "./me.js": 217,
            "./mi": 218,
            "./mi.js": 218,
            "./mk": 219,
            "./mk.js": 219,
            "./ml": 220,
            "./ml.js": 220,
            "./mn": 221,
            "./mn.js": 221,
            "./mr": 222,
            "./mr.js": 222,
            "./ms": 223,
            "./ms-my": 224,
            "./ms-my.js": 224,
            "./ms.js": 223,
            "./mt": 225,
            "./mt.js": 225,
            "./my": 226,
            "./my.js": 226,
            "./nb": 227,
            "./nb.js": 227,
            "./ne": 228,
            "./ne.js": 228,
            "./nl": 229,
            "./nl-be": 230,
            "./nl-be.js": 230,
            "./nl.js": 229,
            "./nn": 231,
            "./nn.js": 231,
            "./oc-lnc": 232,
            "./oc-lnc.js": 232,
            "./pa-in": 233,
            "./pa-in.js": 233,
            "./pl": 234,
            "./pl.js": 234,
            "./pt": 235,
            "./pt-br": 236,
            "./pt-br.js": 236,
            "./pt.js": 235,
            "./ro": 237,
            "./ro.js": 237,
            "./ru": 238,
            "./ru.js": 238,
            "./sd": 239,
            "./sd.js": 239,
            "./se": 240,
            "./se.js": 240,
            "./si": 241,
            "./si.js": 241,
            "./sk": 242,
            "./sk.js": 242,
            "./sl": 243,
            "./sl.js": 243,
            "./sq": 244,
            "./sq.js": 244,
            "./sr": 245,
            "./sr-cyrl": 246,
            "./sr-cyrl.js": 246,
            "./sr.js": 245,
            "./ss": 247,
            "./ss.js": 247,
            "./sv": 248,
            "./sv.js": 248,
            "./sw": 249,
            "./sw.js": 249,
            "./ta": 250,
            "./ta.js": 250,
            "./te": 251,
            "./te.js": 251,
            "./tet": 252,
            "./tet.js": 252,
            "./tg": 253,
            "./tg.js": 253,
            "./th": 254,
            "./th.js": 254,
            "./tk": 255,
            "./tk.js": 255,
            "./tl-ph": 256,
            "./tl-ph.js": 256,
            "./tlh": 257,
            "./tlh.js": 257,
            "./tr": 258,
            "./tr.js": 258,
            "./tzl": 259,
            "./tzl.js": 259,
            "./tzm": 260,
            "./tzm-latn": 261,
            "./tzm-latn.js": 261,
            "./tzm.js": 260,
            "./ug-cn": 262,
            "./ug-cn.js": 262,
            "./uk": 263,
            "./uk.js": 263,
            "./ur": 264,
            "./ur.js": 264,
            "./uz": 265,
            "./uz-latn": 266,
            "./uz-latn.js": 266,
            "./uz.js": 265,
            "./vi": 267,
            "./vi.js": 267,
            "./x-pseudo": 268,
            "./x-pseudo.js": 268,
            "./yo": 269,
            "./yo.js": 269,
            "./zh-cn": 270,
            "./zh-cn.js": 270,
            "./zh-hk": 271,
            "./zh-hk.js": 271,
            "./zh-mo": 272,
            "./zh-mo.js": 272,
            "./zh-tw": 273,
            "./zh-tw.js": 273
        };
        a.keys = function() {
            return Object.keys(r)
        }, a.resolve = s, t.exports = a, a.id = 419
    },
    43: function(t, e, n) {
        t.exports = n(396)
    },
    50: function(t, e, n) {
        "use strict";
        var a = n(53),
            s = n(362),
            r = n(767);
        a.
        default.use(s.a), e.a = new s.a.Store({
            plugins: [Object(r.a)()],
            state: {
                date: null,
                auth: null,
                absen: !1,
                worktype: null,
                isAbsen: !1
            },
            mutations: {
                setAuth: function(t, e) {
                    t.auth = e
                },
                setAbsen: function(t, e) {
                    t.absen = e
                },
                setWorktype: function(t, e) {
                    t.worktype = e
                },
                setIsAbsen: function(t, e) {
                    t.isAbsen = e
                },
                setIsDate: function(t, e) {
                    t.date = e
                }
            },
            actions: {},
            modules: {}
        })
    },
    765: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                n = t._self._c || e;
            return n("f7-page", [n("f7-appbar", [n("div", {
                staticClass: "left"
            }, [n("f7-button", {
                staticClass: "display-flex",
                attrs: {
                    small: "",
                    "panel-open": "left",
                    "icon-f7": "bars"
                }
            })], 1)]), t._v(" "), n("f7-login-screen-title", [t._v("Dashboard")]), t._v(" "), n("f7-card", {
                staticClass: "demo-card-header-pic"
            }, [n("f7-card-header", [n("b", [t._v("Activity Tracker")])]), t._v(" "), n("f7-card-content", [n("LineChart", {
                attrs: {
                    "chart-data": t.datacollection
                }
            }), t._v(" "), n("button", {
                on: {
                    click: function(e) {
                        return t.fillData()
                    }
                }
            }, [t._v("Randomize")])], 1), t._v(" "), n("f7-card-footer", [n("p", [t._v("Quisque eget vestibulum nulla. Quisque quis dui quis ex ultricies efficitur vitae non felis. Phasellus quis nibh hendrerit...")])])], 1), t._v(" "), n("f7-card", {
                staticClass: "demo-card-header-pic"
            }, [n("f7-card-header", [n("b", [t._v("Attendance")])]), t._v(" "), n("f7-card-content", {
                staticClass: "no-border",
                staticStyle: {
                    "background-image": "url(http://lorempixel.com/1000/600/people/6/)",
                    height: "100px"
                },
                attrs: {
                    valign: "bottom"
                }
            }), t._v(" "), n("f7-card-footer", [n("p", [t._v("Quisque eget vestibulum nulla. Quisque quis dui quis ex ultricies efficitur vitae non felis. Phasellus quis nibh hendrerit...")])])], 1), t._v(" "), n("f7-card", {
                staticClass: "demo-card-header-pic"
            }, [n("f7-list", [n("f7-list-item", {
                attrs: {
                    title: "Fruit",
                    "smart-select": "",
                    "smart-select-params": {
                        openIn: "popup",
                        searchbar: !0,
                        searchbarPlaceholder: "Search car"
                    }
                }
            }, [n("select", {
                attrs: {
                    name: "fruits"
                }
            }, [n("option", {
                attrs: {
                    value: "user1",
                    selected: ""
                }
            }, [t._v("User1")]), t._v(" "), n("option", {
                attrs: {
                    value: "user2",
                    selected: ""
                }
            }, [t._v("User2")])])])], 1), t._v(" "), n("f7-card-content", {
                staticStyle: {
                    height: "500px"
                }
            }, [n("tree", {
                attrs: {
                    data: t.tree,
                    "node-text": "name",
                    layoutType: "circular"
                }
            })], 1), t._v(" "), n("f7-card-footer", [n("p", [t._v("Quisque eget vestibulum nulla. Quisque quis dui quis ex ultricies efficitur vitae non felis. Phasellus quis nibh hendrerit...")])])], 1), t._v(" "), n("f7-panel", {
                attrs: {
                    left: ""
                }
            }, [n("f7-block", [n("p", [t._v("Dashboard")])]), t._v(" "), n("f7-block", [n("p", [t._v("Attendance")])]), t._v(" "), n("f7-block", [n("p", [t._v("Help")])])], 1), t._v(" "), n("f7-block", {
                staticClass: "row"
            })], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    766: function(t, e, n) {
        "use strict";
        var a = n(361),
            s = n(768),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    768: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                n = t._self._c || e;
            return n("f7-page", {
                attrs: {
                    name: "pin"
                }
            }, [n("f7-page", {
                attrs: {
                    "login-screen": ""
                }
            }, [n("f7-login-screen-title", [t._v("Masukan PIN")]), t._v(" "), n("f7-list", {
                attrs: {
                    form: ""
                }
            }, [n("f7-list-input", {
                staticStyle: {
                    "margin-left": "7.5%",
                    "margin-right": "7.5%"
                },
                attrs: {
                    outline: "",
                    label: "Pin",
                    "floating-label": "",
                    type: "number",
                    placeholder: "Masukan PIN anda",
                    "clear-button": "",
                    value: t.pin
                },
                on: {
                    input: function(e) {
                        t.pin = e.target.value
                    }
                }
            })], 1), t._v(" "), n("f7-list", [n("f7-button", {
                staticStyle: {
                    "margin-left": "10%",
                    "margin-right": "10%"
                },
                attrs: {
                    raised: "",
                    fill: ""
                },
                on: {
                    click: t.signIn
                }
            }, [t._v("Konfirmasi")])], 1)], 1)], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    769: function(t, e, n) {
        "use strict";
        var a = n(363),
            s = n(770),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    770: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                n = t._self._c || e;
            return n("f7-page", [n("f7-block-title", [t._v("Apakah anda saat ini dalam ke adaan sehat?")]), t._v(" "), n("f7-list", [n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Iya",
                    name: "q1",
                    value: "Iya"
                },
                on: {
                    change: function(e) {
                        t.Q1 = e.target.value
                    }
                }
            }), t._v(" "), n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Tidak",
                    name: "q1",
                    value: "Tidak"
                },
                on: {
                    change: function(e) {
                        t.Q1 = e.target.value
                    }
                }
            })], 1), t._v(" "), n("f7-block-title", [t._v("Apakah anda mangalami Influenza?")]), t._v(" "), n("f7-list", [n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Iya",
                    value: "Iya",
                    name: "q2"
                },
                on: {
                    change: function(e) {
                        t.Q2 = e.target.value
                    }
                }
            }), t._v(" "), n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Tidak",
                    value: "Tidak",
                    name: "q2"
                },
                on: {
                    change: function(e) {
                        t.Q2 = e.target.value
                    }
                }
            })], 1), t._v(" "), n("f7-block-title", [t._v("Apakah anda mengalami kendala penciuman saat ini? ( Tidak bisa mencium bau apapun )")]), t._v(" "), n("f7-list", [n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Iya",
                    value: "Iya",
                    name: "q3"
                },
                on: {
                    change: function(e) {
                        t.Q3 = e.target.value
                    }
                }
            }), t._v(" "), n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Tidak",
                    value: "Tidak",
                    name: "q3"
                },
                on: {
                    change: function(e) {
                        t.Q3 = e.target.value
                    }
                }
            })], 1), t._v(" "), null != t.Q3 && null != t.Q2 && null != t.Q1 ? n("f7-button", {
                attrs: {
                    big: "",
                    raised: "",
                    fill: ""
                },
                on: {
                    click: t.SendSurvey
                }
            }, [t._v("Simpan")]) : t._e()], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    771: function(t, e, n) {
        "use strict";
        var a = n(364),
            s = n(772),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    772: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                n = t._self._c || e;
            return n("f7-page", [n("f7-login-screen-title", [t._v(t._s(t.datenow))]), t._v(" "), t.absen ? n("f7-button", {
                staticStyle: {
                    "margin-left": "10%",
                    "margin-top": "10%",
                    "margin-right": "10%"
                },
                attrs: {
                    raised: "",
                    fill: "",
                    round: ""
                },
                on: {
                    click: t.SendStartAbsen
                }
            }, [t._v("Check-In")]) : n("f7-button", {
                staticStyle: {
                    "margin-left": "10%",
                    "margin-right": "10%"
                },
                attrs: {
                    raised: "",
                    fill: "",
                    round: ""
                },
                on: {
                    click: t.SendStartAbsen
                }
            }, [t._v("Check-In")]), t._v(" "), n("f7-login-screen", {
                staticClass: "demo-login-screen",
                attrs: {
                    opened: t.surveyScreenOpened
                },
                on: {
                    "loginscreen:closed": function(e) {
                        t.loginScreenOpened = !1
                    }
                }
            }, [n("f7-block-title", [t._v("Apakah anda saat ini dalam ke adaan sehat?")]), t._v(" "), n("f7-list", [n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Iya",
                    name: "q1",
                    value: "Iya"
                },
                on: {
                    change: function(e) {
                        t.Q1 = e.target.value
                    }
                }
            }), t._v(" "), n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Tidak",
                    name: "q1",
                    value: "Tidak"
                },
                on: {
                    change: function(e) {
                        t.Q1 = e.target.value
                    }
                }
            })], 1), t._v(" "), n("f7-block-title", [t._v("Apakah anda mangalami Influenza?")]), t._v(" "), n("f7-list", [n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Iya",
                    value: "Iya",
                    name: "q2"
                },
                on: {
                    change: function(e) {
                        t.Q2 = e.target.value
                    }
                }
            }), t._v(" "), n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Tidak",
                    value: "Tidak",
                    name: "q2"
                },
                on: {
                    change: function(e) {
                        t.Q2 = e.target.value
                    }
                }
            })], 1), t._v(" "), n("f7-block-title", [t._v("Apakah anda mengalami kendala penciuman saat ini? ( Tidak bisa mencium bau apapun )")]), t._v(" "), n("f7-list", [n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Iya",
                    value: "Iya",
                    name: "q3"
                },
                on: {
                    change: function(e) {
                        t.Q3 = e.target.value
                    }
                }
            }), t._v(" "), n("f7-list-item", {
                attrs: {
                    radio: "",
                    title: "Tidak",
                    value: "Tidak",
                    name: "q3"
                },
                on: {
                    change: function(e) {
                        t.Q3 = e.target.value
                    }
                }
            })], 1), t._v(" "), null != t.Q3 && null != t.Q2 && null != t.Q1 ? n("f7-button", {
                on: {
                    click: t.SendSurvey
                }
            }, [t._v("Simpan")]) : t._e()], 1)], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    773: function(t, e, n) {
        "use strict";
        var a = n(365),
            s = n(788),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    788: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                n = t._self._c || e;
            return n("f7-page", [n("f7-navbar", {
                attrs: {
                    title: "Attendance"
                }
            }), t._v(" "), n("f7-block-title", {
                staticStyle: {
                    "margin-top": "17.5%",
                    "margin-left": "7.5%",
                    "margin-right": "7.5%",
                    "text-align": "center"
                },
                attrs: {
                    strong: ""
                }
            }, [n("h2", [t._v(t._s(t.datenow))])]), t._v(" "), n("f7-row", {
                attrs: {
                    tag: "p"
                }
            }, [n("f7-col", {
                staticStyle: {
                    "text-align": "center"
                },
                attrs: {
                    tag: "span"
                }
            }, [t.absen ? n("f7-button", {
                staticStyle: {
                    "background-color": "red",
                    "margin-left": "10%",
                    "margin-right": "10%",
                    height: "150px",
                    width: "150px",
                    display: "inline-flex",
                    "align-items": "center"
                },
                attrs: {
                    big: "",
                    raised: "",
                    fill: "",
                    round: ""
                },
                on: {
                    click: t.SendStopAbsen
                }
            }, [n("h3", {
                staticStyle: {
                    "margin-left": "auto",
                    "margin-right": "auto"
                }
            }, [t._v("Check-Out")])]) : n("f7-button", {
                staticStyle: {
                    "margin-left": "10%",
                    "margin-right": "10%",
                    height: "150px",
                    width: "150px",
                    display: "inline-flex",
                    "align-items": "center"
                },
                attrs: {
                    big: "",
                    raised: "",
                    fill: "",
                    round: ""
                },
                on: {
                    click: t.SendStartAbsen
                }
            }, [n("h3", {
                staticStyle: {
                    "margin-left": "auto",
                    "margin-right": "auto"
                }
            }, [t._v("Check-In")])])], 1)], 1)], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    789: function(t, e, n) {
        "use strict";
        var a = n(370),
            s = n(790),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    790: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                n = t._self._c || e;
            return n("f7-page", {
                attrs: {
                    name: "WorkType"
                }
            }, [n("f7-navbar", {
                attrs: {
                    title: "Attendance"
                }
            }), t._v(" "), n("f7-block-title", {
                staticStyle: {
                    "margin-top": "17.5%",
                    "margin-left": "7.5%",
                    "margin-right": "7.5%",
                    "text-align": "center"
                },
                attrs: {
                    strong: ""
                }
            }, [n("h2", [t._v("Pilih Tempat Bekerja")])]), t._v(" "), n("f7-block", [n("f7-row", {
                attrs: {
                    tag: "p"
                }
            }, [n("f7-col", {
                attrs: {
                    tag: "span"
                }
            }, [n("f7-button", {
                staticStyle: {
                    height: "100px",
                    width: "100%"
                },
                attrs: {
                    href: "/attendance/WFH",
                    big: "",
                    raised: "",
                    fill: ""
                }
            }, [n("h3", [t._v("WFH")])])], 1), t._v(" "), n("f7-col", {
                attrs: {
                    tag: "span"
                }
            }, [n("f7-button", {
                staticStyle: {
                    height: "100px",
                    width: "100%"
                },
                attrs: {
                    href: "/attendance/WFO",
                    big: "",
                    raised: "",
                    fill: ""
                }
            }, [n("h3", [t._v("WFO")])])], 1), t._v(" "), n("f7-col", {
                attrs: {
                    tag: "span"
                }
            }, [n("f7-button", {
                staticStyle: {
                    "background-color": "orange",
                    height: "100px",
                    width: "100%"
                },
                attrs: {
                    href: "/survey/off",
                    big: "",
                    raised: "",
                    fill: ""
                }
            }, [n("h3", [t._v("OFF")])])], 1)], 1)], 1)], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    791: function(t, e, n) {
        "use strict";
        var a = n(371),
            s = n(792),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    792: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                n = t._self._c || e;
            return n("f7-page", [n("f7-login-screen-title", {
                staticStyle: {
                    "margin-top": "10px"
                }
            }, [t._v("Info Interaksi")]), t._v(" "), n("p", {
                staticStyle: {
                    "margin-left": "5%",
                    "margin-right": "5%",
                    "font-size": "15px"
                }
            }, [t._v("Hari ini telah berhubungan / komunikasi secara langsung dengan rekan kerja?")]), t._v(" "), n("f7-list", {
                attrs: {
                    "no-hairlines-md": ""
                }
            }, [n("f7-list-item", {
                attrs: {
                    title: "Nama Rekan",
                    "smart-select": "",
                    "smart-select-params": {
                        openIn: "popup",
                        searchbar: !0,
                        setValueText: !1,
                        searchbarPlaceholder: "Search car"
                    }
                }
            }, [0 == t.suggest.length ? n("label", {
                staticStyle: {
                    "margin-left": "4%",
                    "margin-right": "5%"
                }
            }, [t._v("Click to select")]) : t._e(), t._v(" "), n("select", {
                directives: [{
                    name: "model",
                    rawName: "v-model",
                    value: t.suggest,
                    expression: "suggest"
                }],
                attrs: {
                    name: "car",
                    multiple: "",
                    maxlength: "3"
                },
                on: {
                    change: function(e) {
                        var n = Array.prototype.filter.call(e.target.options, function(t) {
                            return t.selected
                        }).map(function(t) {
                            return "_value" in t ? t._value : t.value
                        });
                        t.suggest = e.target.multiple ? n : n[0]
                    }
                }
            }, [t._v("\n        >\n        "), n("optgroup", {
                attrs: {
                    label: "Japanese"
                }
            }, [n("option", {
                attrs: {
                    value: "honda"
                }
            }, [t._v("Honda")]), t._v(" "), n("option", {
                attrs: {
                    value: "lexus"
                }
            }, [t._v("Lexus")]), t._v(" "), n("option", {
                attrs: {
                    value: "mazda"
                }
            }, [t._v("Mazda")]), t._v(" "), n("option", {
                attrs: {
                    value: "nissan"
                }
            }, [t._v("Nissan")]), t._v(" "), n("option", {
                attrs: {
                    value: "toyota"
                }
            }, [t._v("Toyota")])])])]), t._v(" "), t.suggest.length >= 3 ? n("f7-button", {
                staticStyle: {
                    "margin-left": "5%",
                    "margin-right": "5%",
                    "margin-top": "50px"
                },
                attrs: {
                    raised: "",
                    fill: ""
                },
                on: {
                    click: t.SendInteraksi
                }
            }, [t._v("Simpan")]) : t._e()], 1)], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    793: function(t, e, n) {
        "use strict";
        var a = n(372),
            s = n(794),
            r = n(29),
            i = r(a.a, s.a, !1, null, null, null);
        e.a = i.exports
    },
    794: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                a = t._self._c || e;
            return a("f7-page", [a("f7-appbar", [a("div", {
                staticClass: "left"
            }, [a("f7-button", {
                staticClass: "display-flex",
                attrs: {
                    small: "",
                    "panel-open": "left",
                    "icon-f7": "bars"
                }
            })], 1)]), t._v(" "), a("f7-login-screen-title", [t._v("Info")]), t._v(" "), a("f7-card", {
                staticClass: "demo-facebook-card"
            }, [a("f7-card-header", {
                staticClass: "no-border"
            }, [a("div", {
                staticClass: "demo-facebook-avatar"
            }, [a("img", {
                attrs: {
                    src: "data:image/jpeg;base64,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",
                    width: "34",
                    height: "34"
                }
            })]), t._v(" "), a("div", {
                staticClass: "demo-facebook-name",
                staticStyle: {
                    "margin-left": "-20%"
                }
            }, [t._v("Admin")]), t._v(" "), a("div", {
                staticClass: "demo-facebook-date"
            }, [t._v("Monday at 2:15 PM")])]), t._v(" "), a("f7-card-content", [a("img", {
                attrs: {
                    src: n(795),
                    width: "100%"
                }
            }), t._v(" "), a("p", [t._v("Protokol kesehatan")])]), t._v(" "), a("f7-card-footer", {
                staticClass: "no-border"
            }, [a("f7-link", {
                staticStyle: {
                    cursor: "not-allowed",
                    color: "gray"
                }
            }, [t._v("Like")]), t._v(" "), a("f7-link", {
                staticStyle: {
                    cursor: "not-allowed",
                    color: "gray"
                }
            }, [t._v("Comment")]), t._v(" "), a("f7-link", {
                staticStyle: {
                    cursor: "not-allowed",
                    color: "gray"
                }
            }, [t._v("Share")])], 1)], 1)], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    795: function(t, e, n) {
        t.exports = n.p + "static/img/info_123.93dbfea.jpeg"
    },
    796: function(t, e, n) {
        "use strict";
        n(797)
    },
    797: function(t, e, n) {
        "use strict";
        var a = n(43),
            s = n.n(a);
        e.a = function() {
            return s.a.create({
                baseURL: "https://selfcare.idcoern.site/ICARE/api/"
            })
        }
    },
    798: function(t, e, n) {
        "use strict";
        var a = function() {
            var t = this,
                e = t.$createElement,
                a = t._self._c || e;
            return a("f7-app", {
                attrs: {
                    params: t.f7params
                }
            }, [a("f7-view", {
                attrs: {
                    id: "main-view",
                    url: "/",
                    main: ""
                }
            }), t._v(" "), a("f7-login-screen", {
                attrs: {
                    opened: t.loginScreenOpened
                },
                on: {
                    "loginscreen:closed": function(e) {
                        t.loginScreenOpened = !1
                    }
                }
            }, [a("f7-page", {
                staticStyle: {
                    top: "17.5%"
                },
                attrs: {
                    "login-screen": ""
                }
            }, [a("f7-login-screen-title", [a("img", {
                staticStyle: {
                    width: "50%"
                },
                attrs: {
                    src: n(799)
                }
            })]), t._v(" "), a("f7-list", {
                attrs: {
                    form: ""
                }
            }, [a("f7-list-input", {
                staticStyle: {
                    "margin-left": "7.5%",
                    "margin-right": "7.5%"
                },
                attrs: {
                    label: "Username",
                    type: "text",
                    placeholder: "Username",
                    "clear-button": "",
                    "floating-label": "",
                    value: t.email
                },
                on: {
                    input: function(e) {
                        t.email = e.target.value
                    }
                }
            }), t._v(" "), a("f7-list-input", {
                staticStyle: {
                    "margin-left": "7.5%",
                    "margin-right": "7.5%"
                },
                attrs: {
                    label: "Password",
                    type: "password",
                    placeholder: "Password",
                    "clear-button": "",
                    "floating-label": "",
                    value: t.password
                },
                on: {
                    input: function(e) {
                        t.password = e.target.value
                    }
                }
            })], 1), t._v(" "), a("f7-list", [a("f7-button", {
                staticStyle: {
                    "margin-left": "10%",
                    "margin-right": "10%"
                },
                attrs: {
                    big: "",
                    raised: "",
                    fill: ""
                },
                on: {
                    click: t.signIn
                }
            }, [t._v("Masuk")]), t._v(" "), a("f7-block-footer", [t._v("\n          Mengalami kendala?\n          "), t._v(" "), a("f7-link", {
                attrs: {
                    href: "http://line.me/ti/p/~@741jsqze",
                    external: ""
                }
            }, [t._v("Bantuan")])], 1)], 1)], 1)], 1), t._v(" "), a("f7-panel", {
                attrs: {
                    left: "",
                    cover: ""
                }
            }, [a("f7-page", [a("f7-block-title", [t._v("Main View Navigation")]), t._v(" "), a("f7-list", [a("f7-list-item", {
                attrs: {
                    link: "/info",
                    title: "Info",
                    "panel-close": ""
                }
            }), t._v(" "), a("f7-list-item", {
                attrs: {
                    link: "/home",
                    title: "Dashboard",
                    disabled: "",
                    "panel-close": ""
                }
            }), t._v(" "), a("f7-list-item", {
                attrs: {
                    link: "/attendance/" + this.worktype,
                    disabled: t.isAbsen,
                    title: "Attendance",
                    "panel-close": ""
                }
            }), t._v(" "), a("f7-list-item", {
                attrs: {
                    link: "/",
                    title: "Help",
                    disabled: "",
                    "panel-close": ""
                }
            }), t._v(" "), a("f7-list-item", {
                attrs: {
                    link: "/",
                    title: "Logout",
                    disabled: "",
                    "panel-close": ""
                }
            })], 1)], 1)], 1)], 1)
        }, s = [],
            r = {
                render: a,
                staticRenderFns: s
            };
        e.a = r
    },
    799: function(t, e, n) {
        t.exports = n.p + "static/img/img_app_logo.2e11c97.jpeg"
    },
    800: function(t, e, n) {
        "use strict";
        var a = n(53),
            s = n(801),
            r = n(139);
        a.
        default.use(s.a), e.a = new s.a({
            routes: [{
                path: "/",
                name: "Home",
                component: r.a
            }]
        })
    },
    83: function(t, e, n) {
        "use strict";
        (function(e) {
            function a(t, e) {
                !s.isUndefined(t) && s.isUndefined(t["Content-Type"]) && (t["Content-Type"] = e)
            }
            var s = n(22),
                r = n(399),
                i = {
                    "Content-Type": "application/x-www-form-urlencoded"
                }, o = {
                    adapter: function() {
                        var t;
                        return "undefined" != typeof XMLHttpRequest ? t = n(135) : void 0 !== e && (t = n(135)), t
                    }(),
                    transformRequest: [
                        function(t, e) {
                            return r(e, "Content-Type"), s.isFormData(t) || s.isArrayBuffer(t) || s.isBuffer(t) || s.isStream(t) || s.isFile(t) || s.isBlob(t) ? t : s.isArrayBufferView(t) ? t.buffer : s.isURLSearchParams(t) ? (a(e, "application/x-www-form-urlencoded;charset=utf-8"), t.toString()) : s.isObject(t) ? (a(e, "application/json;charset=utf-8"), JSON.stringify(t)) : t
                        }
                    ],
                    transformResponse: [
                        function(t) {
                            if ("string" == typeof t) try {
                                t = JSON.parse(t)
                            } catch (t) {}
                            return t
                        }
                    ],
                    timeout: 0,
                    xsrfCookieName: "XSRF-TOKEN",
                    xsrfHeaderName: "X-XSRF-TOKEN",
                    maxContentLength: -1,
                    validateStatus: function(t) {
                        return t >= 200 && t < 300
                    }
                };
            o.headers = {
                common: {
                    Accept: "application/json, text/plain, */*"
                }
            }, s.forEach(["delete", "get", "head"], function(t) {
                o.headers[t] = {}
            }), s.forEach(["post", "put", "patch"], function(t) {
                o.headers[t] = s.merge(i)
            }), t.exports = o
        }).call(e, n(132))
    }
}, [392]);
//# sourceMappingURL=app.cd58e1db64d95a64cf1c.js.map