/*
 * jPreLoader - jQuery plugin
 * Create a Loading Screen to preload images and content for you website
 *
 * Name:			jPreLoader.js
 * Author:		Kenny Ooi - http://www.inwebson.com
 * Date:			July 11, 2012
 * Modified: 	by Vafpress - fix bug if there is no images on the page
 * Version:		2.1
 * Example:		http://www.inwebson.com/demo/jpreloader-v2/
 *
 */

(function(e) {
    var t = new Array,
        n = new Array,
        r = function() {}, i = 0;
    var s = {
        splashVPos: "35%",
        loaderVPos: "50%",
        splashID: "#jpreContent",
        showSplash: true,
        showPercentage: true,
        autoClose: true,
        closeBtnText: "Start!",
        onetimeLoad: false,
        debugMode: false,
        splashFunction: function() {}
    };
    var o = function() {
        if (s.onetimeLoad) {
            var e = document.cookie.split("; ");
            for (var t = 0, n; n = e[t] && e[t].split("="); t++) {
                if (n.shift() === "jpreLoader") {
                    return n.join("=")
                }
            }
            return false
        } else {
            return false
        }
    };
    var u = function(e) {
        if (s.onetimeLoad) {
            var t = new Date;
            t.setDate(t.getDate() + e);
            var n = e == null ? "" : "expires=" + t.toUTCString();
            document.cookie = "jpreLoader=loaded; " + n
        }
    };
    var a = function() {
        jOverlay = e("<div></div>").attr("id", "jpreOverlay").css({
            position: "fixed",
            top: 0,
            left: 0,
            width: "100%",
            height: "100%",
            zIndex: 9999999
        }).appendTo("body");
        if (s.showSplash) {
            jContent = e("<div></div>").attr("id", "jpreSlide").appendTo(jOverlay);
            var t = e(window).width() - e(jContent).width();
            e(jContent).css({
                position: "absolute",
                top: s.splashVPos,
                left: Math.round(50 / e(window).width() * t) + "%"
            });
            e(jContent).html(e(s.splashID).wrap("<div/>").parent().html());
            e(s.splashID).remove();
            s.splashFunction()
        }
        jLoader = e("<div></div>").attr("id", "jpreLoader").appendTo(jOverlay);
        var n = e(window).width() - e(jLoader).width();
        e(jLoader).css({
            position: "absolute",
            top: s.loaderVPos,
            left: Math.round(50 / e(window).width() * n) + "%"
        });
        jBar = e("<div></div>").attr("id", "jpreBar").css({
            width: "0%",
            height: "100%"
        }).appendTo(jLoader);
        if (s.showPercentage) {
            jPer = e("<div></div>").attr("id", "jprePercentage").css({
                position: "relative",
                height: "100%"
            }).appendTo(jLoader).html("Loading...")
        }
        if (!s.autoclose) {
            jButton = e("<div></div>").attr("id", "jpreButton").on("click", function() {
                p()
            }).css({
                position: "relative",
                height: "100%"
            }).appendTo(jLoader).text(s.closeBtnText).hide()
        }
    };
    var f = function(n) {
        e(n).find("*:not(script)").each(function() {
            var n = "";
            if (e(this).css("background-image").indexOf("none") == -1 && e(this).css("background-image").indexOf("-gradient") == -1) {
                n = e(this).css("background-image");
                if (n.indexOf("url") != -1) {
                    var r = n.match(/url\((.*?)\)/);
                    n = r[1].replace(/\"/g, "")
                }
            } else if (e(this).get(0).nodeName.toLowerCase() == "img" && typeof e(this).attr("src") != "undefined") {
                n = e(this).attr("src")
            }
            if (n.length > 0) {
                t.push(n)
            }
        })
    };
    var l = function() {
        if (t.length > 0) {
            for (var e = 0; e < t.length; e++) {
                if (c(t[e]));
            }
        } else {
            h()
        }
    };
    var c = function(t) {
        var r = new Image;
        e(r).load(function() {
            h()
        }).error(function() {
            n.push(e(this).attr("src"));
            h()
        }).attr("src", t)
    };
    var h = function() {
        i++;
        var n = Math.round(i / t.length * 100);
        e(jBar).stop().animate({
            width: n + "%"
        }, 500, "linear");
        if (s.showPercentage) {
            e(jPer).text(n + "%")
        }
        if (i >= t.length) {
            i = t.length;
            u();
            if (s.showPercentage) {
                e(jPer).text("100%")
            }
            if (s.debugMode) {
                var r = d()
            }
            e(jBar).stop().animate({
                width: "100%"
            }, 500, "linear", function() {
                if (s.autoClose) p();
                else e(jButton).fadeIn(1e3)
            })
        }
    };
    var p = function() {
        e(jOverlay).fadeOut(800, function() {
            e(jOverlay).remove();
            r()
        })
    };
    var d = function() {
        if (n.length > 0) {
            var e = "ERROR - IMAGE FILES MISSING!!!\n\r";
            e += n.length + " image files cound not be found. \n\r";
            e += "Please check your image paths and filenames:\n\r";
            for (var t = 0; t < n.length; t++) {
                e += "- " + n[t] + "\n\r"
            }
            return true
        } else {
            return false
        }
    };
    e.fn.jpreLoader = function(t, n) {
        if (t) {
            e.extend(s, t)
        }
        if (typeof n == "function") {
            r = n
        }
        e("body").css({
            display: "block"
        });
        return this.each(function() {
            if (!o()) {
                a();
                f(this);
                l()
            } else {
                e(s.splashID).remove();
                r()
            }
        })
    }
})(jQuery)