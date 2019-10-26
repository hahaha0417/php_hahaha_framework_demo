function getWebsite() {
    return asus.script.get_local()
}

function isApplicationPathSite() {
    return asus.script.isApplicationPathSite()
}

function isMultipleLanguageWebsite() {
    return asus.script.isMultipleLanguageWebsite()
}

function getShortLanguage(e) {
    return asus.script.getShortLanguage(e)
}

function getcookiedata(e) {
    return asus.cookie.get(e) 
}

function infonumber(e) {
    asus.getID("anchorMemberDrop").getElementsByTagName("span")[0].innerHTML = e.Unread, document.getElementsByTagName("head")[0].removeChild(document.getElementById("api_message"))
}

function LoadMemberDrop(e) {
    if ("User is not logged in!" == e) asus.login();
    else {
        document.getElementById("ulMemberDrop").innerHTML = e, $(window).width() < 720 && ($("#member-above ul ul").each(function() {
            var e = $(this).prev().text();
            $(this).prepend('<li class="back-title">' + e + "</li>")
        }), $("#member-above ul li.arrow-style ul .back-title").remove(), $("#member-above .back-title").on("click", function() {
            return above_left += 100, $("#member-above>ul").animate({
                left: above_left + "%"
            }, 500), !1
        }), $("#member-above span").on("click", function() {
            $(this).next().show(), above_left -= 100, $("#member-above>ul").animate({
                left: above_left + "%"
            }, 500)
        }));
        for (var t = asus.getClass("close-drop", document.getElementById("ulMemberDrop")), n = 0; n < t.length; n++) asus.addEvent(t[n], "click", function(e) {
            return $("#memberbar .member-arrow").hide(), removeClass(document.getElementById("anchorMemberDrop").parentNode, "open"), e.preventDefault ? void e.preventDefault() : !1
        })
    }
}
window.asus = window.asus || {}, asus = asus || {},
    function() {
        function list() {
            return Array.prototype.slice.call(arguments)
        }
        asus.script = {
            val: {
                entry_url: "http://www.asus.com/entry.htm"
            },
            in_page: {
                index: function() {
                    columnClass = "undefined" == typeof columnClass ? "" : columnClass, $("#article-zone").addClass(columnClass)
                },
                about_asus: function() {
                    $("#menu_aboutasus").parent().addClass("active")
                },
                news: function() {
                    $("#menu_news").parent().addClass("active")
                },
                awards: function() {
                    $("#menu_awards").parent().addClass("active")
                },
                business: function() {
                    $("#main-product-nav ul.nav >li:eq(1) a:eq(0)").attr("href", "#")
                }
            },
            get_local: function() {
                var e = ["bg", "gr", "cl", "co", "aeen", "lk", "pk", "in", "tr", "tw", "bd", "cn", "hk", "vn", "kr", "jp", "ru", "th", "sg", "nz", "ph", "id", "au", "my", "br", "ar", "de", "mm", "pl", "pe", "no", "se", "dk", "gb", "sk", "cz", "chfr", "chit", "chde", "ro", "it", "rs", "ua", "hu", "fi", "pt", "es", "fr", "benl", "befr", "nl", "za", "cafr", "caen", "us", "aear", "mv", "mx", "ir", "il", "ea", "ea-sw", "affa", "afpa", "saen", "newglobal", "newtw", "newsg", "newau", "newgb", "newpt", "newes", "newfr", "newnl", "newcafr", "newcaen", "newus", "newpk", "newin", "newbd", "newnz", "newph", "newmy", "newde", "newpl", "newit", "newmv", "newlk", "newcn", "newru", "newid", "newua", "newza", "newmx", "newaa", "newtr", "newvn", "newkr", "newth", "newbr", "newar", "newdk", "newchfr", "newchit", "newchde", "newae", "newhk", "newjp", "newno", "newse", "newsk", "newcz", "newro", "newrs", "newhu", "newfi", "newbenl", "newbefr", "newaear", "newil", "newafpa", "newafda", "newsaen", "newsaar", "newaeen", "ch-fr", "ch-it", "ch-de", "ae-en", "ae-ar", "be-nl", "be-fr", "ca-fr", "ca-en", "sa-en", "sa-ar", "newaf-pa", "newch-fr", "newch-it", "newch-de", "newbe-nl", "newbe-fr", "newca-en", "newca-fr", "newsa-en", "newsa-ar", "newaf-fa", "newae-ar", "newae-en", "neweg", "newiq", "eg", "iq", "newua-ua", "newua-ru", "ua-ua", "ua-ru", "nafr-fr", "nafr-ar", "newnafr-fr", "newnafr-ar", "newuk", "uk", "ie", "af-pa", "af-fa", "newnp", "np", "tn-fr", "newtn-fr", "tn-ar", "newtn-ar", "ma-fr", "newma-fr", "ma-ar", "newma-ar", "dz-fr", "newdz-fr", "dz-ar", "newdz-ar", "newke", "ke", "newng", "ng", "newtn-fr", "tn-fr", "newtn-ar", "tn-ar", "newma-fr", "ma-fr", "newma-ar", "ma-ar", "newdz-fr", "dz-fr", "newdz-ar", "dz-ar", "newke", "ke", "ng", "newng", "middleeast-fa", "newmiddleeast-fa", "latin", "newlatin", "lt", "newlt", "lv", "newlv", "ee", "newee", "kz", "newkz", "eg-en", "neweg-en"],
                    t = window.location.pathname.split("/")[1].toLowerCase(),
                    n = "global";
                for (var a in e)
                    if (e[a] == t) {
                        n = e[a];
                        break
                    }
                switch ("www.asus.com.cn" == window.location.host && (n = "cn"), window.location.hostname.toLowerCase().replace("origin-", "")) {
                    case "cdn.asus.com":
                    case "cdn-amazon.asus.com":
                    case "cdn-chinacache.asus.com":
                        n = "tw";
                        break;
                    case "www.asus.com.cn":
                        n = "cn";
                        break;
                    case "test.sk.asus.com":
                        n = "sk"
                }
                return asus.script.get_local = function() {
                    return n
                }, n
            },
            isMultipleLanguageWebsite: function() {
                switch (asus.script.get_local().replace("new", "")) {
                    case "ch-fr":
                    case "ch-de":
                    case "ch-it":
                    case "ca-en":
                    case "ca-fr":
                    case "be-fr":
                    case "be-nl":
                    case "ae-en":
                    case "ae-ar":
                    case "sa-ar":
                    case "sa-en":
                    case "af-fa":
                    case "af-pa":
                    case "nafr-ar":
                    case "nafr-fr":
                    case "ua-ua":
                    case "ua":
                    case "tn-fr":
                    case "tn-ar":
                    case "ma-fr":
                    case "ma-ar":
                    case "dz-fr":
                    case "dz-ar":
                        return !0;
                    default:
                        return !1
                }
            },
            getShortLanguage: function(e) {
                switch (e.toLowerCase()) {
                    case "chit":
                        return "it";
                    case "chfr":
                    case "befr":
                    case "cafr":
                        return "fr";
                    case "chde":
                        return "de";
                    case "benl":
                        return "nl";
                    case "caen":
                        return "en";
                    case "aear":
                        return "ar";
                    case "ae":
                        return "en";
                    default:
                        return e
                }
            },
            isApplicationPathSite: function() {
                var e = window.location.hostname.toLowerCase().replace("origin-", "");
                return "athena.asus.com" == e || "global" != asus.script.get_local() && "cn" != asus.script.get_local()
            }
        }, asus.start = start = function() {
            asus.is_ready() ? startfunction() : setTimeout(function() {
                asus.start()
            }, 1)
        }, startfunction = function() {
            if (window.detachEvent || $("img").on("error", function() {
                    return $(this).parent().parent().hasClass("add-play-icon") || $(this).parent().hasClass("add-play-icon") ? !1 : void $(this).css("visibility", "hidden")
                }), top.location != location) {
                var e = "";
                try {
                    var t = !1;
                    e = document.referrer ? document.referrer.split("/")[2] : top.location.host, t = -1 == e.indexOf(".asus.com") && -1 == e.indexOf(".cnzz.com") && -1 == e.indexOf("tongji.baidu.com"), document.referrer.split("/")[2] == location.host && top.location.host == location.host && document.referrer != asus.script.val.entry_url || !t || (top.location.href = location.href)
                } catch (n) {
                    -1 == e.indexOf(".asus.com") && -1 == e.indexOf(".cnzz.com") && (top.location.href = location.href)
                }
            }
            "global" != asus.script.get_local().replace("new", "") && "middleeast-fa" != asus.script.get_local().replace("new", "") && $("#ctl00_localcss").attr("href", "/websites/" + asus.script.get_local().replace("new", "").replace("-", "") + "/css/n_local.css"), "middleeast-fa" == asus.script.get_local().replace("new", "") && $("#ctl00_localcss").attr("href", "/websites/affa/css/n_local.css"), "latin" == asus.script.get_local().replace("new", "") && $("#ctl00_localcss").attr("href", "/websites/ar/css/n_local.css"), "GR" == asus.script.get_local().replace("new", "") && $("#ctl00_localcss").attr("href", "/websites/css/n_local.css"), "BG" == asus.script.get_local().replace("new", "") && $("#ctl00_localcss").attr("href", "/websites/css/n_local.css"), "IE" == asus.script.get_local().replace("new", "") && $("#ctl00_localcss").attr("href", "/websites/uk/css/n_local.css"), "ae-en" == asus.script.get_local().replace("new", "") && $("#ctl00_localcss").attr("href", "/websites/ae/css/n_local.css"), $("a").focus(function() {
                $(this).blur()
            }), $("input").focus(function() {
                ("image" == $(this).attr("type") || "checkbox" == $(this).attr("type")) && $(this).blur()
            }), "ie" == asus.script.get_local().replace("new", "") && $("#footer_country_link").html('<a href="http://www.asus.com/entry.htm" onclick="googleTrackEvent(\'Country_Lang_Menu\', this, true);return false;" title="entry_page">Ireland / <span class="lang_set">English</span></a>'), "middleeast-fa" == asus.script.get_local().replace("new", "") && $("#footer_country_link").html('<a href="http://www.asus.com/entry.htm" onclick="googleTrackEvent(\'Country_Lang_Menu\', this, true);return false;" title="entry_page">MiddleEast-fa / <span class="lang_set" style="color:#fff">فارسی</span></a>');
            var a = function() {
                var e = $("#searchinput").val(),
                    t = $("#searchinputDefault").val();
                if (e != t) {
                    var n = "";
                    isApplicationPathSite() ? window.location.href = "/" + asus.script.get_local() + "/Search/Search?SearchKey=" + encodeURI(e) + n : window.location.href = "/Search/Search?SearchKey=" + encodeURI(e) + n
                }
            };
            $("#searchinput").keypress(function(e) {
                return 13 == e.keyCode ? (a(), !1) : void 0
            }), $("#search-btn").on("click", function() {
                return a(), !1
            }), setInterval(function() {
                if (!document.getElementById("api_message")) {
                    var e = document.createElement("script");
                    e.type = "text/javascript", e.async = !0, e.id = "api_message", e.src = "https://www.asus.com/api_message.aspx?" + (new Date).getTime();
                    var t = document.getElementsByTagName("script")[0];
                    t.parentNode.insertBefore(e, t)
                }
            }, 6e5), asus.Recently_panel.rehtml(), asus.initMenu(), "undefined" != typeof in_page && ($("html").addClass(in_page), "Index" == in_page && asus.script.in_page.index(), "About_ASUS" == in_page && asus.script.in_page.about_asus(), "About_ASUS" == in_page && asus.script.in_page.about_asus(), "News" == in_page && asus.script.in_page.news(), "Award" == in_page && asus.script.in_page.awards(), "Business" == in_page && asus.script.in_page.business())
        }, asus.initMenu = function() {
            var e = $("#asus-api-header .aai-nav"),
                t = e.width(),
                n = e.find("li");
            navItemMaxWidth = Math.round(e.width() / n.length), currentNavWidth = 0, n.each(function() {
                var e = Math.round($(this).outerWidth()),
                    t = $(this).html();
                currentNavWidth += e, $(window).width() > 719 ? e > navItemMaxWidth ? ($(this).addClass("limit"), -1 != t.indexOf("&amp;") ? ($(this).hasClass("char2br") || $(this).addClass("char2br").html(t.replace("&amp;", "&amp;<br>")), $(this).width() > navItemMaxWidth && $(this).width(navItemMaxWidth)) : $(this).width(navItemMaxWidth)) : $(this).removeClass("limit").removeAttr("style") : ($(this).removeClass("limit").removeAttr("style"), $(this).hasClass("char2br") && $(this).removeClass("char2br").html(t.replace("&amp;<br>", "&amp;")))
            }), $(window).width() > 719 && currentNavWidth > t && ($(window).width() > 959 && e.parent(".aai-menu").css({
                "padding-left": "10%"
            }), e.parent(".aai-menu").find("li").css("padding", "0 0.5%").find("a").css("font-size", "14px"))
        }, asus.Recently_panel = {
            val: Array(),
            init: function() {
                var e = asus.cookie.get("recently");
                if (e) {
                    e = e.replace(/\%2C/g, ",").replace(/\%5E/g, "^").replace(/\%20/g, " ").replace(/\%28/g, "(").replace(/\%29/g, ")");
                    for (var t = e.split(","), n = 0, a = 0; a < t.length; a++) {
                        var s = Array;
                        if (a < t.length && (s = t[a].split("^")), "" != s[0] && "" != s[1] && (asus.Recently_panel.val[n] = Array(), asus.Recently_panel.val[n][0] = s[0], asus.Recently_panel.val[n][1] = s[1], asus.Recently_panel.val[n][2] = s[2], n++, 10 == n)) break
                    }
                    asus.Recently_panel.init = function() {}
                }
            },
            rehtml: function() {
                asus.Recently_panel.init();
                for (var e = 0, t = 0; 10 > t; t++) asus.Recently_panel.val[t] ? ($("#recently_panel ul li").eq(t).html('<a href="product.aspx?P_ID=' + asus.Recently_panel.val[t][0] + '"><img src="' + asus.Recently_panel.val[t][2] + '" alt="Recently' + t + '" /></a><a href="#" class="removebutton"></a><span class="list-product-name">' + asus.Recently_panel.val[t][1] + "</span>"), e++) : $("#recently_panel ul li").eq(t).html("");
                $("#recently_panel .removebutton").each(function(e) {
                    $(this).attr("remove_i", e), $(this).on("click", function() {
                        return asus.Recently_panel.reset($(this)), asus.Recently_panel.remove($(this).attr("remove_i")), !1
                    })
                }), $("#viewed-list .info-number").html(e)
            },
            remove: function(e) {
                asus.Recently_panel.init(), asus.Recently_panel.val.splice(e, 1), asus.Recently_panel.recookie()
            },
            recookie: function() {
                for (var e = "", t = 0; t < asus.Recently_panel.val.length && 10 != t; t++) e += asus.Recently_panel.val[t][0] + "^" + asus.Recently_panel.val[t][1] + "^" + asus.Recently_panel.val[t][2] + ",";
                e ? asus.cookie.set("recently", e) : asus.cookie.del("recently")
            },
            add: function(e, t, n) {
                asus.Recently_panel.init();
                var a = asus.Recently_panel.val.length;
                if (a = a > 10 ? 10 : a, a > 0)
                    for (var s = 0; a > s; s++)
                        if (asus.Recently_panel.val[s][0] == e) return !1;
                var i = Array();
                i[0] = e, i[1] = t, i[2] = n.replace("_000_", "_fff_"), asus.Recently_panel.val.unshift(i), asus.Recently_panel.rehtml(), asus.Recently_panel.recookie()
            },
            reset: function(e) {
                var t = $(e).parent().parent(),
                    n = $("#recently_panel .compare-viewed-list");
                if ($(e).parent().remove(), t[0] === n[1]) $('<li class="span-5col"></li>').appendTo(t);
                else if (asus.Recently_panel.val.length > 5) {
                    var a = $(n[1]).find("li").eq(0);
                    a.appendTo(n[0]), $('<li class="span-5col"></li>').appendTo($(n[1]))
                } else $('<li class="span-5col"></li>').appendTo(t);
                $("#viewed-list .info-number").html(asus.Recently_panel.val.length - 1)
            }
        }, asus.updateifameSize = function(e, t) {
            var n = getID("ifame_auto_size");
            if (!n) return !1;
            var a = n.className.split(" ");
            for (var s in a) "auto_w" == a[s] ? n.style.width = parseInt(e) + 25 + "px" : "auto_h" == a[s] && (n.style.height = parseInt(t) + 25 + "px")
        }, document.addEventListener ? window.onmessage = function(e) {
            if ("string" == typeof e.data) {
                var t = e.data.split("_");
                t[0].match(/^[0-9]+/) && t[1].match(/^[0-9]+/) && asus.updateifameSize(t[0], t[1])
            }
        } : document.attachEvent && window.attachEvent("onmessage", function(e) {
            var t = e.data.split("_");
            t[0].match(/^[0-9]+/) && t[1].match(/^[0-9]+/) && asus.updateifameSize(t[0], t[1])
        }), asus.BTranslation = function(e) {
            asus.is_ready() ? new BTranslation_function(e) : setTimeout(function() {
                asus.BTranslation(e)
            }, 1)
        }, BTranslation_function = function(e) {
            if (!getID(e.block)) return !1;
            var t, n = getID(e.block),
                a = document.documentElement.clientWidth < e.width || !e.width ? !0 : !1,
                s = e.main_eq ? e.main_eq : 0,
                i = e.click_button ? getID(e.click_button) : !1;
            n.BmarginLeft = "";
            for (var o = n.childNodes.length - 1; o >= 0; o--) 1 != n.childNodes[o].nodeType ? n.removeChild(n.childNodes[o]) : (n.childNodes[o].Bwisth = n.childNodes[o].clientWidth, n.childNodes[o].Bfloat = n.childNodes[o].style.cssFloat, n.childNodes[o].BmarginLeft = n.childNodes[o].style.marginLeft, n.childNodes[o].BmarginRight = n.childNodes[o].style.marginRight);
            var l = function() {
                    a = document.documentElement.clientWidth < e.width || !e.width ? !0 : !1, n.style.marginLeft = n.BmarginLeft;
                    for (var t = n.childNodes.length - 1; t >= 0; t--) n.childNodes[t].style.width = "", n.childNodes[t].style.cssFloat = n.childNodes[t].Bfloat, n.childNodes[t].style.marginLeft = n.childNodes[t].BmarginLeft, n.childNodes[t].style.marginRight = n.childNodes[t].BmarginRight, n.childNodes[t].Bwisth = n.childNodes[t].clientWidth;
                    a && d()
                },
                r = (n.childNodes[s].clientWidth, function() {
                    clearInterval(t), s = s + 1 < n.childNodes.length ? s + 1 : 0;
                    var e = Math.abs(0 - parseInt(n.childNodes[s].style.marginLeft) - parseInt(n.style.marginLeft)),
                        a = 0 - parseInt(n.childNodes[s].style.marginLeft);
                    t = setInterval(function() {
                        c(a, e)
                    }, 13)
                }),
                c = function(a, s) {
                    var i = s / e.move_time * 13;
                    parseInt(n.style.marginLeft) > a ? i = parseInt(n.style.marginLeft) - i <= a ? a : parseInt(n.style.marginLeft) - i : parseInt(n.style.marginLeft) < a && (i = parseInt(n.style.marginLeft) + i >= a ? a : parseInt(n.style.marginLeft) + i), n.style.marginLeft = i + "px", i == a && clearInterval(t)
                },
                d = function() {
                    for (var e = 0, t = 0, a = n.childNodes.length - 1; a >= 0; a--) n.childNodes[a].style.cssFloat = "left", n.childNodes[a].style.marginLeft = e + "px", n.childNodes[a].style.width = n.childNodes[a].Bwisth + "px", a == s && (t = 0 - e), a > 0 && (e -= n.childNodes[a - 1].Bwisth);
                    n.style.marginLeft = t + "px"
                };
            a && d(), i && asus.addEvent(i, "click", r), asus.addEvent(window, "resize", l)
        }, asus.autoComplete = function(e) {
            asus.is_ready() ? new autoComplete_function(e) : setTimeout(function() {
                asus.autoComplete(e)
            }, 1)
        }, autoComplete_function = function(e) {
            if (!getID(e.input)) return !1;
            var t, n, a, s = ajax_o(),
                i = getID(e.input),
                o = document.createElement("ul"),
                l = getOffset(i);
            i.parentNode.appendChild(o), i.autocomplete = "off", e.autoposition && (o.style.top = l.top + i.clientHeight + "px", o.style.left = l.left + "px"), o.className = e.className, o.style.display = "none";
            var r = !1,
                c = 0,
                d = Array(),
                u = Array(),
                h = function(e) {
                    38 == e.keyCode ? p(c - 1, !0) : 40 == e.keyCode ? p(c + 1, !0) : 27 == e.keyCode && (o.style.display = "none")
                },
                f = function(t) {
                    return 38 != t.keyCode && 40 != t.keyCode ? "" == i.value || e.min_length > i.value.length ? (o.innerHTML = "", a = "", void(o.style.display = "none")) : void(a != i.value && "" != i.value && (clearInterval(n), n = setInterval(function() {
                        m()
                    }, e.delag))) : void 0
                },
                m = function() {
                    var l = isApplicationPathSite() ? "/" + getWebsite() + e.search : e.search;
                    if ("get" == e.method && (l += "?" + i.name + "=" + form_replace(i.value)), clearInterval(n), t = i.value, s.open(e.method, l, !0), s.onreadystatechange = function() {
                            if (4 == s.readyState) {
                                var t = s.responseText.split("\n"),
                                    n = new RegExp("(" + escape_regExp(i.value) + ")", "i");
                                d[0] = i.value;
                                var l = 0;
                                o.innerHTML = "";
                                for (var r = 0; r < t.length; r++) {
                                    var h = t[r].split("|");
                                    if ("" != h[0]) {
                                        l++, d[l] = h[0], u[l] = h[1], h[0] = h[0].replace(n, '<span class="' + e.keywordclass + '">$1</span>');
                                        var f = document.createElement("li");
                                        f.innerHTML += h[0], f.pid = u[l], asus.addEvent(f, "click", e.click, u[l]), asus.addEvent(f, "mouseover", function() {
                                            p(this, !1)
                                        }, l), o.appendChild(f)
                                    }
                                }
                                a = i.value, c = 0, o.style.display = 0 == l ? "none" : "block", asus.addEvent(window, "click", v)
                            }
                        }, "get" == e.method) s.send(null);
                    else {
                        i.name;
                        s.send(i.name + "=" + form_replace(i.value))
                    }
                },
                p = function(t, n) {
                    if (0 != d.length) {
                        for (var s = o.getElementsByTagName("li").length, l = 0; s > l; l++) removeClass(o.getElementsByTagName("li")[l], e.selectclass);
                        c = t, c > s ? c = 0 : 0 > c && (c = s), n && (i.value = d[c], a = d[c]), c > 0 && addClass(o.getElementsByTagName("li")[c - 1], e.selectclass)
                    }
                },
                g = function() {
                    var e = getOffset(i);
                    o.style.top = e.top + i.clientHeight + "px", o.style.left = e.left + "px"
                },
                v = function() {
                    0 == r && (o.style.display = "none", d = Array(), removeEvent(window, "click", v))
                };
            asus.addEvent(o, "mouseover", function() {
                r = !0
            }), asus.addEvent(o, "mouseout", function() {
                r = !1
            }), asus.addEvent(i, "mouseover", function() {
                r = !0
            }), asus.addEvent(i, "mouseout", function() {
                r = !1
            }), asus.addEvent(i, "keyup", f), asus.addEvent(i, "keydown", h), e.autoposition && asus.addEvent(window, "resize", function() {
                g()
            })
        }, asus.scroll = function(e) {
            if (asus.is_ready()) {
                if (!getID(e.block)) return;
                getID(e.block).asus_scroll = new scroll_function(e)
            } else setTimeout(function() {
                asus.scroll(e)
            }, 1)
        }, scroll_function = function(e) {
            var t = this,
                n = document.createElement("div"),
                a = document.createElement("div"),
                s = document.createElement("div"),
                i = document.createElement("div"),
                o = !1,
                l = 0,
                r = 0;
            this.obj = getID(e.block);
            for (var c = this.obj, d = 0; d < this.obj.childNodes.length && (s.appendChild(this.obj.childNodes[0]), d--, 0 != this.obj.childNodes.length); d++);
            i.appendChild(s), this.obj.appendChild(i), s.style.position = "relative", s.style.top = "0", i.style.height = e.height + "px", i.style.overflow = "hidden", n.appendChild(a), n.style.MozUserSelect = "none", this.obj.appendChild(n);
            for (var d in e.scroll_css) n.style[d] = e.scroll_css[d];
            for (var d in e.scroll_bar_css) a.style[d] = e.scroll_bar_css[d];
            this.obj.style.display = "block";
            var u = n.clientHeight,
                h = i.scrollHeight;
            this.obj.style.display = "", u >= h && (n.style.display = "none"), a.style.height = u / h * u + "px", a.style.marginTop = 0, this.move = function(e) {
                var t = !1,
                    i = parseInt(a.style.marginTop) - e;
                return c.style.display = "block", h = s.scrollHeight > s.clientHeight ? s.scrollHeight : s.clientHeight, c.style.display = "", document.addEventListener ? (a.style.height = u / h * u + "px", u >= h && (n.style.display = "none")) : a.style.height = u / h * u + "px", 0 >= i ? i = 0 : i + parseInt(a.style.height) >= u && (i = u - parseInt(a.style.height)), parseInt(a.style.marginTop) <= 0 && e > 0 ? t = !0 : parseInt(a.style.marginTop) + parseInt(a.style.height) >= u && 0 > e && (t = !0), a.style.marginTop = i + "px", s.style.top = (u - h) * (i / (u - parseInt(a.style.height))) + "px", t
            };
            var f = function(e) {
                    var n = l - e;
                    t.move(n)
                },
                m = window.mousewheel ? window : document,
                p = function(e) {
                    if (w = !1, o) {
                        var n = e.wheelDelta ? e.wheelDelta / 4 : -40 * e.detail,
                            a = t.move(n);
                        if (0 == a) {
                            if (!e.preventDefault) return !1;
                            e.preventDefault()
                        }
                    }
                },
                g = function(e) {
                    return 0 == b ? !0 : e.preventDefault ? void e.preventDefault() : !1
                },
                v = function(e) {
                    if (0 == b) return !0;
                    var n = r - e.screenY;
                    r = e.screenY, t.move(n)
                };
            asus.addEvent(m, "mousewheel", p), asus.addEvent(m, "DOMMouseScroll", p), asus.addEvent(this.obj, "mouseover", function() {
                o = !0
            }), asus.addEvent(this.obj, "mouseout", function() {
                o = !1
            }), asus.addEvent(this.obj, "touchstart", function(e) {
                w = !1, l = e.touches[0].screenY
            }, this.obj), asus.addEvent(this.obj, "touchmove", function(e) {
                e.touches.length < 2 && (e.preventDefault(), f(e.touches[0].screenY))
            }, this.obj);
            var b = !1;
            asus.addEvent(a, "mousedown", function(e) {
                w = !1, b = !0, r = e.screenY, s.style.MozUserSelect = "none", asus.addEvent(document, "selectstart", g), asus.addEvent(document, "mousemove", v)
            }), asus.addEvent(document, "mouseup", function() {
                b = !1, asus.removeEvent(document, "selectstart", g), asus.removeEvent(document, "mousemove", v), s.style.MozUserSelect = ""
            });
            var w = !1;
            this.move_to = function(e, t) {
                var n = getOffset(this.obj),
                    i = getOffset(getID(e)),
                    o = n.top - i.top < u - h ? u - h : n.top - i.top;
                t ? (w = !0, _(o / t * 16, parseInt(s.style.top) + o)) : (a.style.marginTop = (parseInt(s.style.top) + o) / (u - h) * (u - parseInt(a.style.height)) + "px", s.style.top = parseInt(s.style.top) + o + "px")
            };
            var _ = function(e, t) {
                var n = parseInt(s.style.top) + parseInt(e);
                a.style.marginTop = n / (u - h) * (u - parseInt(a.style.height)) + "px", s.style.top = n + "px", n != t && (Math.abs(Math.abs(n) - Math.abs(t)) < Math.abs(e) && (e = t > n && 0 != t ? n - t : t - n), 1 == w && setTimeout(function() {
                    _(e, t)
                }, 16))
            }
        }, asus.imageZoom = function(e) {
            asus.is_ready() ? new imageZoom_function(e) : setTimeout(function() {
                asus.imageZoom(e)
            }, 1)
        }, imageZoom_function = function(e) {
            if (!getID(e.tag)) return !1;
            for (var t = getID(e.tag).getElementsByTagName("img"), n = function() {
                    this.parent.zoomin = !1, this.parentNode.removeChild(this), triggerEvent("mouseout", this.parent)
                }, a = function() {
                    if (1 != this.zoomin) {
                        this.zoomin = !0;
                        var t = getOffset(this).top,
                            a = getOffset(this).left;
                        document.getElementsByTagName("body")[0].appendChild(this.cloneNode(!0));
                        var s = document.getElementsByTagName("body")[0].lastChild;
                        s.style.position = "absolute", s.style.width = this.width * e.zoom + "px", s.style.height = this.height * e.zoom + "px", s.style.left = a - (this.offsetWidth * e.zoom - this.offsetWidth) / 2 + "px", s.style.top = t - (this.offsetHeight * e.zoom - this.offsetHeight) / 2 + "px", s.style.zIndex = 3e3, s.className += " " + e.addclass, s.parent = this, asus.addEvent(s, "mouseout", n, s), this.parentNode.href && (s.style.cursor = "pointer", asus.addEvent(s, "click", function() {
                            if (document.all) this.parent.click();
                            else {
                                var e = document.createEvent("MouseEvent");
                                e.initEvent("click", !0, !0), this.parent.dispatchEvent(e)
                            }
                        }, s))
                    }
                }, s = 0; s < t.length; s++) asus.addEvent(t[s], "mouseover", a, t[s])
        }, asus.banner = function(e) {
            asus.is_ready() ? new banner_function(e) : setTimeout(function() {
                asus.banner(e)
            }, 1)
        }, banner_function = function(setting) {
            if (!getID(setting.move_div)) return getID(setting.click_back) && (backobj.style.display = "none"), getID(setting.click_next) && (nextobj.style.display = "none"), !1;
            var touch_on = "ontouchend" in document,
                obj = getID(setting.move_div),
                backobj = getID(setting.click_back),
                nextobj = getID(setting.click_next),
                objWidth = obj.offsetWidth,
                n = setting.n ? setting.n : 1;
            if (obj.childNodes.length > 0)
                for (var i = 0; i < obj.childNodes.length; i++) 1 != obj.childNodes[i].nodeType && (obj.removeChild(obj.childNodes[i]), i -= 1);
            if (0 == obj.childNodes.length || !touch_on && setting.auto_click_hide) {
                if (getID(setting.click_back) && (backobj.style.display = "none"), getID(setting.click_next) && (nextobj.style.display = "none"), 0 == obj.childNodes.length) return !1;
                if (!touch_on && setting.auto_click_hide) {
                    var lock_l = !1,
                        lock_r = !1;
                    $("#" + setting.move_div).on("mousemove", function(e) {
                        e.clientX > ($("#" + setting.move_div).parent().offset().left + $("#" + setting.move_div).parent().width()) / 2 ? (nextobj.style.display = "", backobj.style.display = "none") : (backobj.style.display = "", nextobj.style.display = "none")
                    }), asus.addEvent(backobj, "mouseover", function() {
                        lock_l = !0
                    }), asus.addEvent(nextobj, "mouseover", function() {
                        lock_r = !0
                    }), asus.addEvent(backobj, "mouseout", function() {
                        lock_l = !1
                    }), asus.addEvent(nextobj, "mouseout", function() {
                        lock_r = !1
                    }), $("#" + setting.move_div).on("mouseleave", function() {
                        setTimeout(function() {
                            lock_l || (backobj.style.display = "none"), lock_r || (nextobj.style.display = "none")
                        }, 200)
                    })
                }
            }
            if (setting.random && obj.childNodes.length > 1) {
                for (var temp = obj.childNodes, list = new Array, list_html = new Object, i = 0, j = temp.length; j > i; i++) temp[i].order = Math.random(), temp[i].ni = "ni_" + i, list.push(temp[i]), list_html["ni_" + i] = temp[i].innerHTML;
                for (list = list.sort(function(e, t) {
                        return e.order - t.order
                    }), obj.innerHTML = ""; list.length > 0;) obj.appendChild(list.pop());
                for (var i = 0; i < obj.childNodes.length; i++) obj.childNodes[i].innerHTML = list_html[obj.childNodes[i].ni]
            }
            var width = 0,
                outwidth = 0;
            "auto" != getStyle(obj.childNodes[0], "width") && null == getStyle(obj.childNodes[0], "width").match(/%/) ? (outwidth = parseInt(getStyle(obj.childNodes[0], "width")), getStyle(obj.childNodes[0], "padding-left") && getStyle(obj.childNodes[0], "padding-left").match(/[0-9]+/) && (outwidth += parseInt(getStyle(obj.childNodes[0], "padding-left"))), getStyle(obj.childNodes[0], "padding-right") && getStyle(obj.childNodes[0], "padding-right").match(/[0-9]+/) && (outwidth += parseInt(getStyle(obj.childNodes[0], "padding-right"))), getStyle(obj.childNodes[0], "paddingLeft") && getStyle(obj.childNodes[0], "paddingLeft").match(/[0-9]+/) && (outwidth += parseInt(getStyle(obj.childNodes[0], "paddingLeft"))), getStyle(obj.childNodes[0], "paddingRight") && getStyle(obj.childNodes[0], "paddingRight").match(/[0-9]+/) && (outwidth += parseInt(getStyle(obj.childNodes[0], "paddingRight"))), getStyle(obj.childNodes[0], "border-left-width") && getStyle(obj.childNodes[0], "border-left-width").match(/[0-9]+/) && (outwidth += parseInt(getStyle(obj.childNodes[0], "border-left-width"))), getStyle(obj.childNodes[0], "border-right-width") && getStyle(obj.childNodes[0], "border-right-width").match(/[0-9]+/) && (outwidth += parseInt(getStyle(obj.childNodes[0], "border-right-width"))), getStyle(obj.childNodes[0], "borderLeftWidth") && getStyle(obj.childNodes[0], "borderLeftWidth").match(/[0-9]+/) && (outwidth += parseInt(getStyle(obj.childNodes[0], "borderLeftWidth"))), getStyle(obj.childNodes[0], "borderRightWidth") && getStyle(obj.childNodes[0], "borderRightWidth").match(/[0-9]+/) && (outwidth += parseInt(getStyle(obj.childNodes[0], "borderRightWidth"))), width = parseInt(getStyle(obj.childNodes[0], "width"))) : (width = obj.childNodes[0].clientWidth, outwidth = obj.childNodes[0].clientWidth);
            var marginRight = getStyle(obj.childNodes[0], "margin-Right") ? parseInt(getStyle(obj.childNodes[0], "margin-Right")) : parseInt(getStyle(obj.childNodes[0], "marginRight")),
                add_padding = setting.add_padding ? setting.add_padding : 0;
            marginRight = marginRight ? marginRight : 0, marginRight += add_padding;
            var currentItem = Math.floor(objWidth / outwidth),
                count = obj.childNodes.length,
                s_count = obj.childNodes.length;
            n >= count && (getID(setting.click_back) && (backobj.style.display = "none"), getID(setting.click_next) && (nextobj.style.display = "none"));
            var allwidth = (marginRight + outwidth) * count,
                in_Nodes = setting.loop ? 1 : 0,
                show = setting.show ? setting.show : n,
                left = 0,
                ease = setting.ease ? setting.ease : "Linear";
            if (1 == count) return !1;
            if (setting.loop) {
                for (var i = 0; count > i; i++) obj.childNodes[i].style.width = width + "px", $("#" + setting.move_div).children().eq(i).attr("di", i), obj.appendChild(obj.childNodes[i].cloneNode(!0)), allwidth += obj.childNodes[i].clientWidth, obj.childNodes[i].style.marginRight = marginRight + "px";
                count = obj.childNodes.length, obj.insertBefore(obj.childNodes[count - 1], obj.childNodes[0]), left = 0 - width, obj.style.width = allwidth + "px", obj.style.left = left + "px"
            } else {
                for (var i = 0; count > i; i++) obj.childNodes[i].style.width = width + "px", obj.childNodes[i].style.marginRight = marginRight + "px";
                obj.style.width = allwidth + "px", backobj && addClass(backobj, setting.click_end_className)
            }
            if (setting.cut) {
                for (var cut_html = '<a href="#"  class="active"></a>', i = 1; s_count > i; i++) cut_html += '<a href="#"></a>';
                getID(setting.cut).innerHTML = cut_html, $("#" + setting.cut + " a").each(function(e) {
                    $(this).on("click", function() {
                        var t = $("#" + setting.cut + " a." + setting.in_className).prevAll().length;
                        if (t == e) return !1;
                        if (!in_run) return t > e ? back(Math.abs(t - e)) : next(Math.abs(t - e)), !1
                    })
                })
            }
            var offsetwidth = obj.childNodes[0].clientWidth + marginRight;
            0 == offsetwidth && (offsetwidth = obj.childNodes[0].clientWidth);
            var in_auto, time_bar, time_c, in_run, in_div, touch_x, t_Mask, fz = 20,
                run = function(e, t, n, a) {
                    clearInterval(in_auto), in_auto = "", 1 == setting.Mask && (t_Mask = mask(obj, 5e3)), in_run = setTimeout(function() {
                        run_fn(e, t, 0, n, a)
                    }, fz)
                },
                run_fn = function(lr, set, i, oo, fa) {
                    if (i++, "l" == lr && left + offsetwidth / setting.move_time * fz * n < set) {
                        var tleft = eval("Tween." + ease)(oo, set, i, parseInt(1 / fz * setting.move_time));
                        if (fa)
                            for (var fz_i = 0; tleft < parseInt(obj.style.left) && !(fz_i > fz);) tleft = eval("Tween." + ease)(oo, set, i, parseInt(1 / fz * setting.move_time)), fz_i++, i = fz_i;
                        left = tleft, obj.style.left = left + "px", in_run = setTimeout(function() {
                            run_fn(lr, set, i, oo, fa)
                        }, fz)
                    } else if ("r" == lr && left - offsetwidth / setting.move_time * fz * n > set) {
                        var tleft = eval("Tween." + ease)(oo, set, i, parseInt(1 / fz * setting.move_time));
                        if (fa)
                            for (var fz_i = 0; tleft > parseInt(obj.style.left) && !(fz_i > fz);) tleft = eval("Tween." + ease)(oo, set, i, parseInt(1 / fz * setting.move_time)), fz_i++, i = fz_i;
                        left = tleft, obj.style.left = left + "px", in_run = setTimeout(function() {
                            run_fn(lr, set, i, oo, fa)
                        }, fz)
                    } else close_run(), 1 == setting.Mask && clear_Mask(), left = set, obj.style.left = left + "px", in_div || auto_next()
                },
                back = function(e, t) {
                    if (!in_run)
                        if (e || (e = n), setting.loop) {
                            for (var a = 0; e > a; a++) 1 == in_Nodes ? (obj.insertBefore(obj.childNodes[count - 1], obj.childNodes[0]), left -= offsetwidth, t ? obj.style.left = parseInt(obj.style.left) - offsetwidth + "px" : obj.style.left = left + "px") : in_Nodes -= 1;
                            set_class(), run("l", left + offsetwidth * e, left, t)
                        } else if (in_Nodes - 1 >= 0) {
                        var s = 0 > in_Nodes - e ? in_Nodes : e;
                        in_Nodes = in_Nodes - s >= 0 ? in_Nodes - s : 0, set_class(), run("l", left + offsetwidth * s, left, t), backobj && removeClass(backobj, setting.click_end_className), nextobj && removeClass(nextobj, setting.click_end_className), 0 == in_Nodes && backobj && addClass(backobj, setting.click_end_className)
                    }
                },
                next = function(e, t) {
                    if (!in_run)
                        if (e || (e = n), setting.loop) {
                            for (var a = 0; e > a; a++) in_Nodes >= count - 2 ? (obj.appendChild(obj.childNodes[0]), left += offsetwidth, t ? obj.style.left = parseInt(obj.style.left) + offsetwidth + "px" : obj.style.left = left + "px") : in_Nodes += 1;
                            t || (obj.style.left = left + "px"), set_class(), run("r", left - offsetwidth * e, left, t)
                        } else if (count > in_Nodes + e) {
                        var s = in_Nodes + e + show > count ? e - (count - 1 - in_Nodes - e) : e;
                        in_Nodes = count > in_Nodes + s ? in_Nodes + s : count - 1, set_class(), run("r", left - offsetwidth * s, left, t), backobj && removeClass(backobj, setting.click_end_className), nextobj && removeClass(nextobj, setting.click_end_className), in_Nodes >= count - e && nextobj && addClass(nextobj, setting.click_end_className)
                    }
                },
                set_class = function() {
                    for (var e = RegExp("(^| )" + setting.in_className), t = 0; count > t; t++) obj.childNodes[t].className = obj.childNodes[t].className.replace(e, "");
                    if (obj.childNodes[in_Nodes].className += " " + setting.in_className, setting.cut) {
                        for (var t = 0; s_count > t; t++) getID(setting.cut).childNodes[t].className = getID(setting.cut).childNodes[t].className.replace(e, "");
                        getID(setting.cut).childNodes[$("#" + setting.move_div).children().eq(in_Nodes).attr("di")].className += " " + setting.in_className
                    }
                },
                auto_next = function() {
                    setting.auto_next_time && !in_auto && (setting.time_bar && getID(setting.time_bar) && (time_c = 300, clearInterval(time_bar), time_bar = "", time_bar = setInterval(function() {
                        time_c += 30, time_c >= setting.auto_next_time ? getID(setting.time_bar).style.width = "100%" : getID(setting.time_bar).style.width = time_c / setting.auto_next_time * 100 + "%"
                    }, 30)), in_auto = setInterval(function() {
                        in_run || next()
                    }, setting.auto_next_time))
                },
                key = function(e) {
                    var t = getOffset(getID(setting.move_div)).top + getID(setting.move_div).childNodes[0].clientHeight / 2,
                        n = document.body.scrollTop || document.documentElement.scrollTop;
                    t > n && n + n + window.screen.height > t && ("37" == e ? back() : "39" == e && next())
                },
                touch_move = function(e) {
                    if (fz = 33, touch_x) {
                        var t = touch_x - e; - 35 > t ? (touch_x = 0, back("", !0)) : t > 35 ? (touch_x = 0, next("", !0)) : setting.loop && (t > 0 ? (in_Nodes -= 1, touch_x = 0, next("", !0)) : 0 > t && (in_Nodes += 1, touch_x = 0, back("", !0)))
                    }
                },
                close_run = function() {
                    clearInterval(in_run), in_run = ""
                },
                clear_Mask = function() {
                    removeDom(t_Mask, document.getElementsByTagName("body")[0])
                },
                w_size = document.body.clientWidth,
                resize = function() {
                    setting.resize && (count = setting.resize(count), in_Nodes = 1, back()), w_size = document.body.clientWidth, close_run(), 1 == setting.Mask && clear_Mask(), obj.style.width = "auto", obj.childNodes[0].style.width = "", obj.childNodes[0].style.marginRight = "";
                    for (var e = 1; count > e; e++) obj.childNodes[e].style.display = "none";
                    width = "auto" != getStyle(obj.childNodes[0], "width") && null == getStyle(obj.childNodes[0], "width").match(/%/) ? parseInt(getStyle(obj.childNodes[0], "width")) : obj.childNodes[0].clientWidth;
                    for (var e = 0; count > e; e++) obj.childNodes[e].style.width = width + "px", obj.childNodes[e].style.display = "", obj.childNodes[e].style.marginRight = marginRight + "px";
                    offsetwidth = obj.childNodes[0].clientWidth + marginRight, objWidth = obj.offsetWidth, currentItem = Math.floor(objWidth / offsetwidth), allwidth = count * offsetwidth + offsetwidth, obj.style.width = allwidth + "px", left = (0 - in_Nodes) * offsetwidth, obj.style.left = left + "px", in_div || auto_next()
                };
            resize(), backobj && asus.addEvent(backobj, "click", function(e) {
                return back(), e.preventDefault ? void e.preventDefault() : !1
            }), nextobj && asus.addEvent(nextobj, "click", function(e) {
                return next(), e.preventDefault ? void e.preventDefault() : !1
            }), asus.addEvent(obj, "mouseover", function() {
                in_div = !0, clearInterval(in_auto), clearInterval(time_bar), setting.time_bar && getID(setting.time_bar) && (getID(setting.time_bar).style.width = "0"),
                    in_auto = "", time_bar = ""
            }), asus.addEvent(obj, "mouseout", function() {
                in_div = !1, auto_next()
            });
            var touchstart_left = 0;
            asus.addEvent(obj, "touchstart", function(e) {
                touchstart_left = parseInt(obj.style.left), in_div = !0, clearInterval(in_auto), clearInterval(time_bar), touch_x = e.touches[0].screenX
            }), asus.addEvent(obj, "touchend", function() {
                in_div = !1, auto_next()
            }), asus.addEvent(window, "resize", resize), asus.addEvent(obj, "touchmove", function(e) {
                e.touches.length >= 2 || 0 != touch_x && Math.abs(touch_x - e.touches[0].screenX) > 35 && (setting.loop && (obj.style.left = touchstart_left - (touch_x - e.touches[0].screenX) + "px"), e.preventDefault(), touch_move(e.touches[0].screenX))
            }), setting.keyboard && asus.addEvent(document, "keydown", function(e) {
                key(e.keyCode)
            }), auto_next(), set_class()
        }, asus.mask = mask = function(e, t) {
            var n = document.createElement("div"),
                a = getOffset(e.parentNode).top,
                s = getOffset(e.parentNode).left;
            return document.getElementsByTagName("body")[0].appendChild(n), n.style.position = "absolute", n.style.width = e.parentNode.clientWidth + "px", n.style.height = e.parentNode.clientHeight + "px", n.style.left = s + "px", n.style.top = a + "px", n.style.zIndex = t, n
        }, asus.removeDom = removeDom = function(e, t) {
            try {
                t.removeChild(e)
            } catch (n) {}
        }, asus.addClass = addClass = function(e, t) {
            e.className += " " + t
        }, asus.removeClass = removeClass = function(e, t) {
            var n = RegExp("(^| )" + t);
            e.className = e.className.replace(n, "")
        }, asus.getClass = getClass = function(e, t) {
            if (document.getElementsByClassName) return (t || document).getElementsByClassName(e);
            var n = (t || document.body).getElementsByTagName("*"),
                a = [];
            for (i = 0; i < n.length; i++) - 1 != (" " + n[i].className + " ").indexOf(" " + e + " ") && a.push(n[i]);
            return a
        }, asus.getID = getID = function(e) {
            return document.getElementById(e)
        }, asus.getOffset = getOffset = function(e) {
            for (var t = 0, n = 0; e;) n += e.offsetLeft, t += e.offsetTop, e = e.offsetParent;
            return {
                top: t,
                left: n
            }
        }, asus.addEvent = addEvent = function(e, t, n, a) {
            var s = n;
            a && (s = function(e) {
                n.call(a, e)
            }), window.addEventListener ? e.addEventListener(t, s, !1) : e.attachEvent("on" + t, s)
        }, asus.removeEvent = removeEvent = function(e, t, n) {
            window.detachEvent ? e.detachEvent("on" + t, n) : e.removeEventListener(t, n, !1)
        }, asus.triggerEvent = triggerEvent = function(e, t) {
            if (void 0 == t.dispatchEvent) t.fireEvent("on" + e, event);
            else {
                var n = document.createEvent("MouseEvents");
                n.initEvent(e, !0, !0), t.dispatchEvent(n)
            }
        }, asus.ajax_o = ajax_o = function() {
            return window.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : window.XMLHttpRequest ? new XMLHttpRequest : null
        }, form_replace = function(e) {
            return e = encodeURIComponent(e)
        }, escape_regExp = function(e) {
            return e = e.replace(/\\/g, "\\\\"), e = e.replace(/\|/g, "\\|"), e = e.replace(/\+/g, "\\+"), e = e.replace(/\$/g, "\\$"), e = e.replace(/\`/g, "\\`"), e = e.replace(/\^/g, "\\^"), e = e.replace(/\*/g, "\\*"), e = e.replace(/\[/g, "\\["), e = e.replace(/\]/g, "\\]"), e = e.replace(/\?/g, "\\?"), e = e.replace(/\./g, "\\.")
        }, getStyle = function(e, t) {
            var n;
            return e.currentStyle ? n = e.currentStyle[t] : window.getComputedStyle && (n = document.defaultView.getComputedStyle(e, null).getPropertyValue(t)), n
        }, asus.cookie = {
            val: Object,
            set: function(e, t, n) {
                var a = new Date;
                a.setSeconds(a.getSeconds() + n), document.cookie = e + "=" + escape(t) + (null == n ? "" : ";expires=" + a.toGMTString()) + ";domain=" + window.location.host.replace(/.+?\.asus/, ".asus") + "; path =/", asus.cookie.val[e] = escape(t)
            },
            get: function(e) {
                try {
                    0 == Object.keys(asus.cookie.val).length && asus.cookie.init()
                } catch (t) {
                    asus.cookie.init()
                }
                return asus.cookie.get = function(e) {
                    return asus.cookie.val[e]
                }, asus.cookie.val[e]
            },
            del: function(e) {
                var t = new Date;
                t.setTime(t.getTime() - 1);
                var n = asus.cookie.get(e);
                document.cookie = e + "=" + n + "; expires=" + t.toGMTString() + ";domain=" + window.location.host.replace(/.+?\.asus/, ".asus") + "; path =/", delete asus.cookie.val[e]
            },
            init: function() {
                if (!document.cookie) return !1;
                for (var e = document.cookie.split(";"), t = 0; t < e.length; t++) {
                    var n = e[t].split("=");
                    n[1] && (n[0] = n[0].replace(/^\s+/, ""), asus.cookie.val[n[0]] = unescape(n[1]));
                }
            }
        }, asus.is_ready = function() {
            return !1
        };
        var DomReady = function() {
            function e() {
                n || (n = !0, asus.is_ready = function() {
                    return !0
                })
            }

            function t() {
                if (!n && document.body) try {
                    document.documentElement.doScroll("left"), e()
                } catch (a) {
                    setTimeout(t, 0)
                }
            }
            var n = !1;
            document.addEventListener ? document.addEventListener("DOMContentLoaded", e, !1) : document.attachEvent && (document.documentElement.doScroll && window == window.top && t(), document.attachEvent("onreadystatechange", function() {
                "complete" === document.readyState && e()
            })), window.addEventListener ? window.addEventListener("load", e, !1) : window.attachEvent && window.attachEvent("onload", e)
        }();
        start(), Tween = {
            Linear: function(e, t, n, a) {
                var s = e,
                    i = t - e,
                    o = n,
                    l = a;
                return i * o / l + s
            },
            Quad: {
                easeIn: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i * (o /= l) * o + s
                },
                easeOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return -i * (o /= l) * (o - 2) + s
                },
                easeInOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return (o /= l / 2) < 1 ? i / 2 * o * o + s : -i / 2 * (--o * (o - 2) - 1) + s
                }
            },
            Cubic: {
                easeIn: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i * (o /= l) * o * o + s
                },
                easeOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i * ((o = o / l - 1) * o * o + 1) + s
                },
                easeInOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return (o /= l / 2) < 1 ? i / 2 * o * o * o + s : i / 2 * ((o -= 2) * o * o + 2) + s
                }
            },
            Quart: {
                easeIn: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i * (o /= l) * o * o * o + s
                },
                easeOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return -i * ((o = o / l - 1) * o * o * o - 1) + s
                },
                easeInOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return (o /= l / 2) < 1 ? i / 2 * o * o * o * o + s : -i / 2 * ((o -= 2) * o * o * o - 2) + s
                }
            },
            Quint: {
                easeIn: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i * (o /= l) * o * o * o * o + s
                },
                easeOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i * ((o = o / l - 1) * o * o * o * o + 1) + s
                },
                easeInOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return (o /= l / 2) < 1 ? i / 2 * o * o * o * o * o + s : i / 2 * ((o -= 2) * o * o * o * o + 2) + s
                }
            },
            Sine: {
                easeIn: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return -i * Math.cos(o / l * (Math.PI / 2)) + i + s
                },
                easeOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i * Math.sin(o / l * (Math.PI / 2)) + s
                },
                easeInOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return -i / 2 * (Math.cos(Math.PI * o / l) - 1) + s
                }
            },
            Expo: {
                easeIn: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return 0 == o ? s : i * Math.pow(2, 10 * (o / l - 1)) + s
                },
                easeOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return o == l ? s + i : i * (-Math.pow(2, -10 * o / l) + 1) + s
                },
                easeInOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return 0 == o ? s : o == l ? s + i : (o /= l / 2) < 1 ? i / 2 * Math.pow(2, 10 * (o - 1)) + s : i / 2 * (-Math.pow(2, -10 * --o) + 2) + s
                }
            },
            Circ: {
                easeIn: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return -i * (Math.sqrt(1 - (o /= l) * o) - 1) + s
                },
                easeOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i * Math.sqrt(1 - (o = o / l - 1) * o) + s
                },
                easeInOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return (o /= l / 2) < 1 ? -i / 2 * (Math.sqrt(1 - o * o) - 1) + s : i / 2 * (Math.sqrt(1 - (o -= 2) * o) + 1) + s
                }
            },
            Bounce: {
                easeIn: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return i - Tween.Bounce.easeOut(l - o, 0, i, l) + s
                },
                easeOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return (o /= l) < 1 / 2.75 ? i * (7.5625 * o * o) + s : 2 / 2.75 > o ? i * (7.5625 * (o -= 1.5 / 2.75) * o + .75) + s : 2.5 / 2.75 > o ? i * (7.5625 * (o -= 2.25 / 2.75) * o + .9375) + s : i * (7.5625 * (o -= 2.625 / 2.75) * o + .984375) + s
                },
                easeInOut: function(e, t, n, a) {
                    var s = e,
                        i = t - e,
                        o = n,
                        l = a;
                    return l / 2 > o ? .5 * Tween.Bounce.easeIn(2 * o, 0, i, l) + s : .5 * Tween.Bounce.easeOut(2 * o - l, 0, i, l) + .5 * i + s
                }
            }
        }
    }();
var above_left = "0";
$(document).ready(function() {
    var e = "ontouchend" in document,
        t = function() {
            $("#compare-button").removeClass("active"), $("#member-button").removeClass("active"), $("#memberbar .member-arrow").hide(), $("#memberbar a.dropdown-toggle").parent().removeClass("open")
        };
    asus.login = member_login = function() {
        var e = document.createElement("form");
        e.id = "asus_login", document.getElementById("anchorMemberDrop") ? e.action = document.getElementById("anchorMemberDrop").href : e.action = document.getElementById("asus_memberlogin").href, e.method = "post", e.style.display = "none";
        var t = document.createElement("input");
        t.name = "AppID", t.value = "0000000002";
        var n = document.createElement("input");
        n.name = "ReturnUrl", n.value = window.location.href;
        var a = document.createElement("input");
        a.name = "lang", document.getElementById("anchorMemberDrop") ? a.value = document.getElementById("anchorMemberDrop").hreflang : a.value = document.getElementById("asus_memberlogin").hreflang, e.appendChild(t), e.appendChild(n), e.appendChild(a), document.getElementById("memberbar-zone").appendChild(e), e.submit()
    }, $("#anchorMemberDrop").one("click", function() {
        var e = "https://account.asus.com/memberdrop.aspx",
            t = document.createElement("script");
        t.type = "text/javascript", t.async = !0, t.src = e + "?callback=LoadMemberDrop&lang=" + $(this).attr("lang") + "&t=" + (new Date).getTime();
        var n = document.getElementsByTagName("script")[0];
        return n.parentNode.insertBefore(t, n), !1
    }), $("#memberbar a.dropdown-toggle").click(function() {
        if ("asus_memberlogin" == this.id) return t(), member_login(), !1;
        if ($(this).parent().hasClass("open")) t();
        else {
            if (t(), "compare-list" == $(this).parent().attr("id") && 0 == $(this).find(".info-number").text()) return !1;
            if ("viewed-list" == $(this).parent().attr("id") && 0 == $(this).find(".info-number").text()) return !1;
            if ("cart-list" == $(this).parent().attr("id") && 0 == $(this).find(".info-number").text()) return !1;
            if ($(this).parent().toggleClass("open"), $(this).parent().hasClass("open") && "compare-list" == $(this).parent().attr("id")) $("#compare-button").addClass("active");
            else if ($(this).parent().hasClass("open") && "member-list" == $(this).parent().attr("id")) $("#member-button").addClass("active");
            else if ($(this).parent().hasClass("open") && "cart-list" == $(this).parent().attr("id")) {
                var e = "//www.asus.com/" + getWebsite() + "/MiniCart.aspx";
                "cn" == getWebsite() && (e = "//www.asus.com.cn/MiniCart.aspx"), $("#ifrmMiniCart").height(380), $("#ifrmMiniCart").attr("src", e)
            }
            $(this).find(".member-arrow").show()
        }
        return !1
    }), e || ($("#compare-button,#member-button").on("mouseenter", function() {
        $(document).off("mousedown", t)
    }), $("#memberbar").on("mouseleave", function() {
        $(document).one("mousedown", t)
    }).on("mouseenter", function() {
        $(document).off("mousedown", t)
    })), $("#asus_memberregister").on("click", function() {
        if (!$("#asus_register")[0]) {
            var e = document.createElement("form");
            e.id = "asus_register", e.action = document.getElementById("asus_memberregister") ? document.getElementById("asus_memberregister").href : document.getElementById("anchorMemberDrop").href, e.method = "post", e.style.display = "none";
            var t = document.createElement("input");
            t.name = "AppID", t.value = "0000000002";
            var n = document.createElement("input");
            n.name = "ReturnUrl", n.value = window.location.href, e.appendChild(t), e.appendChild(n), document.getElementById("memberbar-zone").appendChild(e)
        }
        return $("#asus_register").submit(), !1
    });
    for (var n = asus.getClass("close-drop", document.getElementById("memberbar-zone")), a = 0; a < n.length; a++) asus.addEvent(n[a], "click", function(e) {
        return t(), e.preventDefault ? void e.preventDefault() : !1
    });
    var s, i = !1,
        o = !1,
        l = !1,
        r = "0",
        c = !1,
        d = function() {
            return c = !0, s = $(this), setTimeout(function() {
                1 == c && (s.siblings().find("div").hide(), s.find("div").show())
            }, 300), !1
        },
        u = function() {
            c = !1, s = $(this), setTimeout(function() {
                0 == c && $("#nav>li").find("div").hide()
            }, 300)
        },
        h = function() {
            return 0 == $(this).parent().find("div").length ? !0 : ($(this).parent().find("div").toggle(), $(this).parent().siblings().find("div").hide(), !1)
        };
    $(window).width() > 720 && (e ? $("#nav>li>a").on("click", h) : ($("#nav>li").on("mouseenter", d), $("#nav>li").on("mouseleave", u)));
    var f = function() {
        if ($(window).width() > 720 && 1 == i) return $("#main-product-nav-button").off("click"), $("#search-nav-button").off("click"), o = !1, i = !1, $("#main-product-nav").hide(), $("#main-product-nav-button .icon-list").removeClass("active"), $("#search-nav-button .icon-search").removeClass("active"), $("#nav li").off("click"), $(".back-title").remove(), r = 0, $("#nav").css({
            left: "0%"
        }), e ? $("#nav>li>a").on("click", h) : ($("#nav>li").on("mouseenter", d), $("#nav>li").on("mouseleave", u)), above_left = 0, $("#member-above span").off("click"), void $("#member-above .back-title").remove();
        if ($(window).width() <= 720 && 0 == i) {
            i = !0, e ? $("#nav>li").off("click", h) : ($("#nav>li").off("mouseenter", d), $("#nav>li").off("mouseleave", u)), $("#main-product-nav").hide(), $("#main-search").hide(), $("#main-product-nav-button").on("click", function() {
                0 == o ? (o = !0, $("#main-product-nav").show(), $("#main-product-nav-button .icon-list").addClass("active"), l = !1, $("#main-search").hide(), $("#search-nav-button .icon-search").removeClass("active")) : (o = !1, $("#main-product-nav").hide(), $("#main-product-nav-button .icon-list").removeClass("active"))
            }), $("#search-nav-button").on("click", function() {
                0 == l ? (l = !0, $("#main-search").show(), $("#search-nav-button .icon-search").addClass("active"), o = !1, $("#main-product-nav").hide(), $("#main-product-nav-button .icon-list").removeClass("active")) : (l = !1, $("#main-search").hide(), $("#search-nav-button .icon-search").removeClass("active"))
            });
            var t, n, a, s;
            $("#nav li").on("click", function() {
                return $(this).contents("div").length || $(this).contents("ul").length ? ($(this).contents("div").length ? (a = 1, $(this).contents("div").show(), t = $(this).contents("div").children("ul")) : $(this).contents("ul").length && (a = 2, $(this).contents("ul").show(), t = $(this).contents("ul")), n = $(this).contents("a").length ? $(this).contents("a").text() : $(this).contents().eq(0).text(), t.prepend('<li class="back-title" dataclose="' + a + '">' + n + "</li>"), $(".back-title").off("click"), $(".back-title").one("click", function() {
                    return s = $(this), $("#nav").css({
                        left: r + "%"
                    }), r += 100, $("#nav").animate({
                        left: r + "%"
                    }, 500, function() {
                        1 == s.attr("dataclose") ? s.parents("div").eq(0).hide() : s.parents("ul").eq(0).hide(), s.remove()
                    }), !1
                }), $("#nav").css({
                    left: r + "%"
                }), r -= 100, $("#nav").animate({
                    left: r + "%"
                }, 500), !1) : ($(this).contents("a").length && (location.href = $(this).contents("a").attr("href")), !1)
            }), $("#member-above ul ul").each(function() {
                var e = $(this).prev().text();
                $(this).prepend('<li class="back-title">' + e + "</li>")
            }), $("#member-above ul li.arrow-style ul .back-title").remove(), $("#member-above .back-title").on("click", function() {
                return above_left += 100, $("#member-above>ul").animate({
                    left: above_left + "%"
                }, 500), !1
            }), $("#member-above span").on("click", function() {
                $(this).next().show(), above_left -= 100, $("#member-above>ul").animate({
                    left: above_left + "%"
                }, 500)
            })
        }
    };
    $(window).on("resize", f), f(), $("#member-button").on("click", function() {
        $("#asus_memberlogin").click(), $("#anchorMemberDrop").click()
    }), $("#compare-button").on("click", function() {
        $("#compare-list .dropdown-toggle").click()
    })
});