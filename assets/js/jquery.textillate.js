!function (t) {
    "use strict";
    function e(e) {
        return /In/.test(e) || t.inArray(e, t.fn.textillate.defaults.inEffects) >= 0
    }
    function n(e) {
        return /Out/.test(e) || t.inArray(e, t.fn.textillate.defaults.outEffects) >= 0
    }
    function i(t) {
        return "true" !== t && "false" !== t ? t : "true" === t
    }
    function a(e) {
        var n = e.attributes || []
            , a = {};
        return n.length ? (t.each(n, function (t, e) {
            var n = e.nodeName.replace(/delayscale/, "delayScale");
            /^data-in-*/.test(n) ? (a.in = a.in || {},
                a.in[n.replace(/data-in-/, "")] = i(e.nodeValue)) : /^data-out-*/.test(n) ? (a.out = a.out || {},
                    a.out[n.replace(/data-out-/, "")] = i(e.nodeValue)) : /^data-*/.test(n) && (a[n.replace(/data-/, "")] = i(e.nodeValue))
        }),
            a) : a
    }
    function s(t) {
        for (var e, n, i = t.length; i; e = parseInt(Math.random() * i),
            n = t[--i],
            t[i] = t[e],
            t[e] = n)
            ;
        return t
    }
    function o(t, e, n) {
        t.addClass("animated " + e).css("visibility", "visible").show(),
            t.one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
                t.removeClass("animated " + e),
                    n && n()
            })
    }
    function l(i, a, l) {
        var r = i.length;
        r ? (a.shuffle && (i = s(i)),
            a.reverse && (i = i.toArray().reverse()),
            t.each(i, function (i, s) {
                function c() {
                    e(a.effect) ? u.css("visibility", "visible") : n(a.effect) && u.css("visibility", "hidden"),
                        !(r -= 1) && l && l()
                }
                var u = t(s)
                    , f = a.sync ? a.delay : a.delay * i * a.delayScale;
                u.text() ? setTimeout(function () {
                    o(u, a.effect, c)
                }, f) : c()
            })) : l && l()
    }
    var r = function (i, s) {
        var o = this
            , r = t(i);
        o.init = function () {
            o.$texts = r.find(s.selector),
                o.$texts.length || (o.$texts = t('<ul class="texts"><li>' + r.html() + "</li></ul>"),
                    r.html(o.$texts)),
                o.$texts.hide(),
                o.$current = t("<span>").html(o.$texts.find(":first-child").html()).prependTo(r),
                e(s.in.effect) ? o.$current.css("visibility", "hidden") : n(s.out.effect) && o.$current.css("visibility", "visible"),
                o.setOptions(s),
                o.timeoutRun = null,
                setTimeout(function () {
                    o.options.autoStart && o.start()
                }, o.options.initialDelay)
        }
            ,
            o.setOptions = function (t) {
                o.options = t
            }
            ,
            o.triggerEvent = function (e) {
                var n = t.Event(e + ".tlt");
                return r.trigger(n, o),
                    n
            }
            ,
            o.in = function (i, s) {
                i = i || 0;
                var c, u = o.$texts.find(":nth-child(" + ((i || 0) + 1) + ")"), f = t.extend(!0, {}, o.options, u.length ? a(u[0]) : {});
                u.addClass("current"),
                    o.triggerEvent("inAnimationBegin"),
                    r.attr("data-active", u.data("id")),
                    o.$current.html(u.html()).lettering("words"),
                    "char" == o.options.type && o.$current.find('[class^="word"]').css({
                        display: "inline-block",
                        "-webkit-transform": "translate3d(0,0,0)",
                        "-moz-transform": "translate3d(0,0,0)",
                        "-o-transform": "translate3d(0,0,0)",
                        transform: "translate3d(0,0,0)"
                    }).each(function () {
                        t(this).lettering()
                    }),
                    c = o.$current.find('[class^="' + o.options.type + '"]').css("display", "inline-block"),
                    e(f.in.effect) ? c.css("visibility", "hidden") : n(f.in.effect) && c.css("visibility", "visible"),
                    o.currentIndex = i,
                    l(c, f.in, function () {
                        o.triggerEvent("inAnimationEnd"),
                            f.in.callback && f.in.callback(),
                            s && s(o)
                    })
            }
            ,
            o.out = function (e) {
                var n = o.$texts.find(":nth-child(" + ((o.currentIndex || 0) + 1) + ")")
                    , i = o.$current.find('[class^="' + o.options.type + '"]')
                    , s = t.extend(!0, {}, o.options, n.length ? a(n[0]) : {});
                o.triggerEvent("outAnimationBegin"),
                    l(i, s.out, function () {
                        n.removeClass("current"),
                            o.triggerEvent("outAnimationEnd"),
                            r.removeAttr("data-active"),
                            s.out.callback && s.out.callback(),
                            e && e(o)
                    })
            }
            ,
            o.start = function (t) {
                setTimeout(function () {
                    o.triggerEvent("start"),
                        function t(e) {
                            o.in(e, function () {
                                var n = o.$texts.children().length;
                                e += 1,
                                    !o.options.loop && e >= n ? (o.options.callback && o.options.callback(),
                                        o.triggerEvent("end")) : (e %= n,
                                            o.timeoutRun = setTimeout(function () {
                                                o.out(function () {
                                                    t(e)
                                                })
                                            }, o.options.minDisplayTime))
                            })
                        }(t || 0)
                }, o.options.initialDelay)
            }
            ,
            o.stop = function () {
                o.timeoutRun && (clearInterval(o.timeoutRun),
                    o.timeoutRun = null)
            }
            ,
            o.init()
    };
    t.fn.textillate = function (e, n) {
        return this.each(function () {
            var i = t(this)
                , s = i.data("textillate")
                , o = t.extend(!0, {}, t.fn.textillate.defaults, a(this), "object" == typeof e && e);
            s ? "string" == typeof e ? s[e].apply(s, [].concat(n)) : s.setOptions.call(s, o) : i.data("textillate", s = new r(this, o))
        })
    }
        ,
        t.fn.textillate.defaults = {
            selector: ".texts",
            loop: !1,
            minDisplayTime: 2e3,
            initialDelay: 0,
            in: {
                effect: "fadeInLeftBig",
                delayScale: 1.5,
                delay: 50,
                sync: !1,
                reverse: !1,
                shuffle: !1,
                callback: function () { }
            },
            out: {
                effect: "hinge",
                delayScale: 1.5,
                delay: 50,
                sync: !1,
                reverse: !1,
                shuffle: !1,
                callback: function () { }
            },
            autoStart: !0,
            inEffects: [],
            outEffects: ["hinge"],
            callback: function () { },
            type: "char"
        }
}(jQuery);
