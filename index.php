<?php
  require __DIR__ . '/includes/vars.php';
  echo $CSS_URI;
?>


<!DOCTYPE html>
<html lang="de">
  <script async="" src="./HOME_files/fbevents.js"></script>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>HOME</title>
    <link rel="dns-prefetch" href="https://cdn.hu-manity.co/" />
    <!-- Cookie Compliance -->
    <script type="text/javascript">
      var huOptions = {
        appID: "stadtkrugeu-68bbd0d",
        currentLanguage: "de",
        blocking: false,
        globalCookie: false,
        isAdmin: false,
        privacyConsent: true,
        forms: [],
      };
    </script>
    <script type="text/javascript" src="./HOME_files/hu-banner.min.js"></script>
    <meta name="robots" content="max-image-preview:large" />
    <style>
      img:is([sizes="auto" i], [sizes^="auto," i]) {
        contain-intrinsic-size: 3000px 1500px;
      }
    </style>
    <style type="text/css">
      .brave_popup {
        display: none;
      }
    </style>
    <script data-no-optimize="1">
      var brave_popup_data = {};
      var bravepop_emailValidation = false;
      var brave_popup_videos = {};
      var brave_popup_formData = {};
      var brave_popup_adminUser = false;
      var brave_popup_pageInfo = { type: "front", pageID: 11, singleType: "" };
      var bravepop_emailSuggestions = {};
    </script>
    <!-- This site uses the Google Analytics by MonsterInsights plugin v9.7.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <script
      src="./HOME_files/js"
      data-cfasync="false"
      data-wpfc-render="false"
      type="text/javascript"
      async=""
    ></script>
    <script
      data-cfasync="false"
      data-wpfc-render="false"
      type="text/javascript"
    >
      var mi_version = "9.7.0";
      var mi_track_user = true;
      var mi_no_track_reason = "";
      var MonsterInsightsDefaultLocations = {
        page_location: "https:\/\/stadtkrug.at\/",
      };
      if (typeof MonsterInsightsPrivacyGuardFilter === "function") {
        var MonsterInsightsLocations =
          typeof MonsterInsightsExcludeQuery === "object"
            ? MonsterInsightsPrivacyGuardFilter(MonsterInsightsExcludeQuery)
            : MonsterInsightsPrivacyGuardFilter(
                MonsterInsightsDefaultLocations,
              );
      } else {
        var MonsterInsightsLocations =
          typeof MonsterInsightsExcludeQuery === "object"
            ? MonsterInsightsExcludeQuery
            : MonsterInsightsDefaultLocations;
      }

      var disableStrs = ["ga-disable-G-8HT8TXV4RB"];

      /* Function to detect opted out users */
      function __gtagTrackerIsOptedOut() {
        for (var index = 0; index < disableStrs.length; index++) {
          if (document.cookie.indexOf(disableStrs[index] + "=true") > -1) {
            return true;
          }
        }

        return false;
      }

      /* Disable tracking if the opt-out cookie exists. */
      if (__gtagTrackerIsOptedOut()) {
        for (var index = 0; index < disableStrs.length; index++) {
          window[disableStrs[index]] = true;
        }
      }

      /* Opt-out function */
      function __gtagTrackerOptout() {
        for (var index = 0; index < disableStrs.length; index++) {
          document.cookie =
            disableStrs[index] +
            "=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";
          window[disableStrs[index]] = true;
        }
      }

      if ("undefined" === typeof gaOptout) {
        function gaOptout() {
          __gtagTrackerOptout();
        }
      }
      window.dataLayer = window.dataLayer || [];

      window.MonsterInsightsDualTracker = {
        helpers: {},
        trackers: {},
      };
      if (mi_track_user) {
        function __gtagDataLayer() {
          dataLayer.push(arguments);
        }

        function __gtagTracker(type, name, parameters) {
          if (!parameters) {
            parameters = {};
          }

          if (parameters.send_to) {
            __gtagDataLayer.apply(null, arguments);
            return;
          }

          if (type === "event") {
            parameters.send_to = monsterinsights_frontend.v4_id;
            var hookName = name;
            if (typeof parameters["event_category"] !== "undefined") {
              hookName = parameters["event_category"] + ":" + name;
            }

            if (
              typeof MonsterInsightsDualTracker.trackers[hookName] !==
              "undefined"
            ) {
              MonsterInsightsDualTracker.trackers[hookName](parameters);
            } else {
              __gtagDataLayer("event", name, parameters);
            }
          } else {
            __gtagDataLayer.apply(null, arguments);
          }
        }

        __gtagTracker("js", new Date());
        __gtagTracker("set", {
          "developer_id.dZGIzZG": true,
        });
        if (MonsterInsightsLocations.page_location) {
          __gtagTracker("set", MonsterInsightsLocations);
        }
        __gtagTracker("config", "G-8HT8TXV4RB", {
          forceSSL: "true",
          link_attribution: "true",
        });
        window.gtag = __gtagTracker;
        (function () {
          /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
          /* ga and __gaTracker compatibility shim. */
          var noopfn = function () {
            return null;
          };
          var newtracker = function () {
            return new Tracker();
          };
          var Tracker = function () {
            return null;
          };
          var p = Tracker.prototype;
          p.get = noopfn;
          p.set = noopfn;
          p.send = function () {
            var args = Array.prototype.slice.call(arguments);
            args.unshift("send");
            __gaTracker.apply(null, args);
          };
          var __gaTracker = function () {
            var len = arguments.length;
            if (len === 0) {
              return;
            }
            var f = arguments[len - 1];
            if (
              typeof f !== "object" ||
              f === null ||
              typeof f.hitCallback !== "function"
            ) {
              if ("send" === arguments[0]) {
                var hitConverted,
                  hitObject = false,
                  action;
                if ("event" === arguments[1]) {
                  if ("undefined" !== typeof arguments[3]) {
                    hitObject = {
                      eventAction: arguments[3],
                      eventCategory: arguments[2],
                      eventLabel: arguments[4],
                      value: arguments[5] ? arguments[5] : 1,
                    };
                  }
                }
                if ("pageview" === arguments[1]) {
                  if ("undefined" !== typeof arguments[2]) {
                    hitObject = {
                      eventAction: "page_view",
                      page_path: arguments[2],
                    };
                  }
                }
                if (typeof arguments[2] === "object") {
                  hitObject = arguments[2];
                }
                if (typeof arguments[5] === "object") {
                  Object.assign(hitObject, arguments[5]);
                }
                if ("undefined" !== typeof arguments[1].hitType) {
                  hitObject = arguments[1];
                  if ("pageview" === hitObject.hitType) {
                    hitObject.eventAction = "page_view";
                  }
                }
                if (hitObject) {
                  action =
                    "timing" === arguments[1].hitType
                      ? "timing_complete"
                      : hitObject.eventAction;
                  hitConverted = mapArgs(hitObject);
                  __gtagTracker("event", action, hitConverted);
                }
              }
              return;
            }

            function mapArgs(args) {
              var arg,
                hit = {};
              var gaMap = {
                eventCategory: "event_category",
                eventAction: "event_action",
                eventLabel: "event_label",
                eventValue: "event_value",
                nonInteraction: "non_interaction",
                timingCategory: "event_category",
                timingVar: "name",
                timingValue: "value",
                timingLabel: "event_label",
                page: "page_path",
                location: "page_location",
                title: "page_title",
                referrer: "page_referrer",
              };
              for (arg in args) {
                if (
                  !(!args.hasOwnProperty(arg) || !gaMap.hasOwnProperty(arg))
                ) {
                  hit[gaMap[arg]] = args[arg];
                } else {
                  hit[arg] = args[arg];
                }
              }
              return hit;
            }

            try {
              f.hitCallback();
            } catch (ex) {}
          };
          __gaTracker.create = newtracker;
          __gaTracker.getByName = newtracker;
          __gaTracker.getAll = function () {
            return [];
          };
          __gaTracker.remove = noopfn;
          __gaTracker.loaded = true;
          window["__gaTracker"] = __gaTracker;
        })();
      } else {
        console.log("");
        (function () {
          function __gtagTracker() {
            return null;
          }

          window["__gtagTracker"] = __gtagTracker;
          window["gtag"] = __gtagTracker;
        })();
      }
    </script>

    <!-- / Google Analytics by MonsterInsights -->
    <script type="text/javascript">
      /* <![CDATA[ */
      window._wpemojiSettings = {
        baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
        ext: ".png",
        svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
        svgExt: ".svg",
        source: {
          concatemoji:
            "https:\/\/stadtkrug.at\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.2",
        },
      };
      /*! This file is auto-generated */
      !(function (s, n) {
        var o, i, e;
        function c(e) {
          try {
            var t = { supportTests: e, timestamp: new Date().valueOf() };
            sessionStorage.setItem(o, JSON.stringify(t));
          } catch (e) {}
        }
        function p(e, t, n) {
          e.clearRect(0, 0, e.canvas.width, e.canvas.height),
            e.fillText(t, 0, 0);
          var t = new Uint32Array(
              e.getImageData(0, 0, e.canvas.width, e.canvas.height).data,
            ),
            a =
              (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
              e.fillText(n, 0, 0),
              new Uint32Array(
                e.getImageData(0, 0, e.canvas.width, e.canvas.height).data,
              ));
          return t.every(function (e, t) {
            return e === a[t];
          });
        }
        function u(e, t) {
          e.clearRect(0, 0, e.canvas.width, e.canvas.height),
            e.fillText(t, 0, 0);
          for (
            var n = e.getImageData(16, 16, 1, 1), a = 0;
            a < n.data.length;
            a++
          )
            if (0 !== n.data[a]) return !1;
          return !0;
        }
        function f(e, t, n, a) {
          switch (t) {
            case "flag":
              return n(
                e,
                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f",
              )
                ? !1
                : !n(
                    e,
                    "\ud83c\udde8\ud83c\uddf6",
                    "\ud83c\udde8\u200b\ud83c\uddf6",
                  ) &&
                    !n(
                      e,
                      "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                      "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f",
                    );
            case "emoji":
              return !a(e, "\ud83e\udedf");
          }
          return !1;
        }
        function g(e, t, n, a) {
          var r =
              "undefined" != typeof WorkerGlobalScope &&
              self instanceof WorkerGlobalScope
                ? new OffscreenCanvas(300, 150)
                : s.createElement("canvas"),
            o = r.getContext("2d", { willReadFrequently: !0 }),
            i = ((o.textBaseline = "top"), (o.font = "600 32px Arial"), {});
          return (
            e.forEach(function (e) {
              i[e] = t(o, e, n, a);
            }),
            i
          );
        }
        function t(e) {
          var t = s.createElement("script");
          (t.src = e), (t.defer = !0), s.head.appendChild(t);
        }
        "undefined" != typeof Promise &&
          ((o = "wpEmojiSettingsSupports"),
          (i = ["flag", "emoji"]),
          (n.supports = { everything: !0, everythingExceptFlag: !0 }),
          (e = new Promise(function (e) {
            s.addEventListener("DOMContentLoaded", e, { once: !0 });
          })),
          new Promise(function (t) {
            var n = (function () {
              try {
                var e = JSON.parse(sessionStorage.getItem(o));
                if (
                  "object" == typeof e &&
                  "number" == typeof e.timestamp &&
                  new Date().valueOf() < e.timestamp + 604800 &&
                  "object" == typeof e.supportTests
                )
                  return e.supportTests;
              } catch (e) {}
              return null;
            })();
            if (!n) {
              if (
                "undefined" != typeof Worker &&
                "undefined" != typeof OffscreenCanvas &&
                "undefined" != typeof URL &&
                URL.createObjectURL &&
                "undefined" != typeof Blob
              )
                try {
                  var e =
                      "postMessage(" +
                      g.toString() +
                      "(" +
                      [
                        JSON.stringify(i),
                        f.toString(),
                        p.toString(),
                        u.toString(),
                      ].join(",") +
                      "));",
                    a = new Blob([e], { type: "text/javascript" }),
                    r = new Worker(URL.createObjectURL(a), {
                      name: "wpTestEmojiSupports",
                    });
                  return void (r.onmessage = function (e) {
                    c((n = e.data)), r.terminate(), t(n);
                  });
                } catch (e) {}
              c((n = g(i, f, p, u)));
            }
            t(n);
          })
            .then(function (e) {
              for (var t in e)
                (n.supports[t] = e[t]),
                  (n.supports.everything =
                    n.supports.everything && n.supports[t]),
                  "flag" !== t &&
                    (n.supports.everythingExceptFlag =
                      n.supports.everythingExceptFlag && n.supports[t]);
              (n.supports.everythingExceptFlag =
                n.supports.everythingExceptFlag && !n.supports.flag),
                (n.DOMReady = !1),
                (n.readyCallback = function () {
                  n.DOMReady = !0;
                });
            })
            .then(function () {
              return e;
            })
            .then(function () {
              var e;
              n.supports.everything ||
                (n.readyCallback(),
                (e = n.source || {}).concatemoji
                  ? t(e.concatemoji)
                  : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
            }));
      })((window, document), window._wpemojiSettings);
      /* ]]> */
    </script>
    <style id="wp-emoji-styles-inline-css" type="text/css">
      img.wp-smiley,
      img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
      }
    </style>
    <!-- <link rel='stylesheet' id='wp-block-library-css' href='https://stadtkrug.at/wp-includes/css/dist/block-library/style.min.css?ver=6.8.2' type='text/css' media='all' /> -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./HOME_files/4oy49.css"
      media="all"
    />
    <style id="classic-theme-styles-inline-css" type="text/css">
      /*! This file is auto-generated */
      .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(0.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em;
      }
      .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none;
      }
    </style>
    <!-- <link rel='stylesheet' id='nta-css-popup-css' href='https://stadtkrug.at/wp-content/plugins/wp-whatsapp/assets/dist/css/style.css?ver=6.8.2' type='text/css' media='all' /> -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./HOME_files/4oy49(1).css"
      media="all"
    />
    <style id="global-styles-inline-css" type="text/css">
      :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
          135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%
        );
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
          135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%
        );
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
          135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%
        );
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
          135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%
        );
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
          135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%
        );
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
          135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%
        );
        --wp--preset--gradient--blush-light-purple: linear-gradient(
          135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%
        );
        --wp--preset--gradient--blush-bordeaux: linear-gradient(
          135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%
        );
        --wp--preset--gradient--luminous-dusk: linear-gradient(
          135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%
        );
        --wp--preset--gradient--pale-ocean: linear-gradient(
          135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%
        );
        --wp--preset--gradient--electric-grass: linear-gradient(
          135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%
        );
        --wp--preset--gradient--midnight: linear-gradient(
          135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%
        );
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
          6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
      }
      :where(.is-layout-flex) {
        gap: 0.5em;
      }
      :where(.is-layout-grid) {
        gap: 0.5em;
      }
      body .is-layout-flex {
        display: flex;
      }
      .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
      }
      .is-layout-flex > :is(*, div) {
        margin: 0;
      }
      body .is-layout-grid {
        display: grid;
      }
      .is-layout-grid > :is(*, div) {
        margin: 0;
      }
      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }
      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }
      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }
      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }
      .has-black-color {
        color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-color {
        color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
      }
      .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }
      .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-amber-background-color {
        background-color: var(
          --wp--preset--color--luminous-vivid-amber
        ) !important;
      }
      .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
      }
      .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
      }
      .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
      }
      .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
      }
      .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
      }
      .has-luminous-vivid-orange-border-color {
        border-color: var(
          --wp--preset--color--luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
      }
      .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
      }
      .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
      }
      .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
      }
      .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
      }
      .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
      }
      .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(
          --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
        ) !important;
      }
      .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(
          --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
        ) !important;
      }
      .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
        ) !important;
      }
      .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(
          --wp--preset--gradient--luminous-vivid-orange-to-vivid-red
        ) !important;
      }
      .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(
          --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
        ) !important;
      }
      .has-cool-to-warm-spectrum-gradient-background {
        background: var(
          --wp--preset--gradient--cool-to-warm-spectrum
        ) !important;
      }
      .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
      }
      .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
      }
      .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
      }
      .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
      }
      .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
      }
      .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
      }
      .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
      }
      .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
      }
      .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
      }
      .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
      }
      :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
      }
      :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
      }
      :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
      }
      :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
      }
      :root :where(.wp-block-pullquote) {
        font-size: 1.5em;
        line-height: 1.6;
      }
    </style>
    <!-- <link rel='stylesheet' id='contact-form-7-css' href='https://stadtkrug.at/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.6' type='text/css' media='all' /> -->
    <script src="./HOME_files/4oy49.js" type="text/javascript"></script>
    <!-- <script type="text/javascript" src="https://stadtkrug.at/wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=9.7.0" id="monsterinsights-frontend-script-js" async="async" data-wp-strategy="async"></script> -->
    <script
      data-cfasync="false"
      data-wpfc-render="false"
      type="text/javascript"
      id="monsterinsights-frontend-script-js-extra"
    >
      /* <![CDATA[ */
      var monsterinsights_frontend = {
        js_events_tracking: "true",
        download_extensions: "doc,pdf,ppt,zip,xls,docx,pptx,xlsx",
        inbound_paths:
          '[{"path":"\\\/go\\\/","label":"affiliate"},{"path":"\\\/recommend\\\/","label":"affiliate"}]',
        home_url: "https:\/\/stadtkrug.at",
        hash_tracking: "false",
        v4_id: "G-8HT8TXV4RB",
      }; /* ]]> */
    </script>
    <link rel="https://api.w.org/" href="https://stadtkrug.at/wp-json/" />
    <link
      rel="alternate"
      title="JSON"
      type="application/json"
      href="https://stadtkrug.at/wp-json/wp/v2/pages/11"
    />
    <link
      rel="EditURI"
      type="application/rsd+xml"
      title="RSD"
      href="https://stadtkrug.at/xmlrpc.php?rsd"
    />
    <meta name="generator" content="WordPress 6.8.2" />
    <link rel="canonical" href="https://stadtkrug.at/" />
    <link rel="shortlink" href="https://stadtkrug.at/" />
    <link
      rel="alternate"
      title="oEmbed (JSON)"
      type="application/json+oembed"
      href="https://stadtkrug.at/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fstadtkrug.at%2F"
    />
    <link
      rel="alternate"
      title="oEmbed (XML)"
      type="text/xml+oembed"
      href="https://stadtkrug.at/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fstadtkrug.at%2F&amp;format=xml"
    />
    <meta
      name="facebook-domain-verification"
      content="hf6pimquhynwzja5d75t4cf3y9kt8d"
    />

    <!-- ***** -->

    <!-- Meta Pixel Code -->
    <script>
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        "script",
        "https://connect.facebook.net/en_US/fbevents.js",
      );
      fbq("init", "1531398064091536");
      fbq("track", "PageView");
    </script>
    <noscript
      ><img height="1" width="1" style="display:none"
      src=https://www.facebook.com/tr?id=1531398064091536&ev=PageView&noscript=1
      /></noscript
    >
    <!-- End Meta Pixel Code -->
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="https://stadtkrug.at/img/favicon/Gulp.svg"
    />
    <!-- <link rel="stylesheet" href="https://stadtkrug.at/wp-content/themes/stadtkrug-theme/style.css"/> -->
    <!-- <link rel="stylesheet" href="https://stadtkrug.at/wp-content/themes/stadtkrug-theme/assets/css/style.min.css"/> -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./HOME_files/4oy49(2).css"
      media="all"
    />
    <link rel="stylesheet" href="./HOME_files/swiper-bundle.min.css" />
    <script src="./HOME_files/swiper-bundle.min.js"></script>
    <meta
      name="facebook-domain-verification"
      content="hf6pimquhynwzja5d75t4cf3y9kt8d"
    />
    <!-- Meta Pixel Code -->
    <script>
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        "script",
        "https://connect.facebook.net/en_US/fbevents.js",
      );
      fbq("init", "1531398064091536");
      fbq("track", "PageView");
    </script>
    <noscript
      ><img height="1" width="1" style="display:none"
      src=https://www.facebook.com/tr?id=1531398064091536&ev=PageView&noscript=1
      /></noscript
    >
    <!-- End Meta Pixel Code -->
    <style class="fslightbox-styles">
      .fslightbox-absoluted {
        position: absolute;
        top: 0;
        left: 0;
      }
      .fslightbox-fade-in {
        animation: fslightbox-fade-in 0.3s cubic-bezier(0, 0, 0.7, 1);
      }
      .fslightbox-fade-out {
        animation: fslightbox-fade-out 0.3s ease;
      }
      .fslightbox-fade-in-strong {
        animation: fslightbox-fade-in-strong 0.3s cubic-bezier(0, 0, 0.7, 1);
      }
      .fslightbox-fade-out-strong {
        animation: fslightbox-fade-out-strong 0.3s ease;
      }
      @keyframes fslightbox-fade-in {
        from {
          opacity: 0.65;
        }
        to {
          opacity: 1;
        }
      }
      @keyframes fslightbox-fade-out {
        from {
          opacity: 0.35;
        }
        to {
          opacity: 0;
        }
      }
      @keyframes fslightbox-fade-in-strong {
        from {
          opacity: 0.3;
        }
        to {
          opacity: 1;
        }
      }
      @keyframes fslightbox-fade-out-strong {
        from {
          opacity: 1;
        }
        to {
          opacity: 0;
        }
      }
      .fslightbox-cursor-grabbing {
        cursor: grabbing;
      }
      .fslightbox-full-dimension {
        width: 100%;
        height: 100%;
      }
      .fslightbox-open {
        overflow: hidden;
        height: 100%;
      }
      .fslightbox-flex-centered {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .fslightbox-opacity-0 {
        opacity: 0 !important;
      }
      .fslightbox-opacity-1 {
        opacity: 1 !important;
      }
      .fslightbox-scrollbarfix {
        padding-right: 17px;
      }
      .fslightbox-transform-transition {
        transition: transform 0.3s;
      }
      .fslightbox-container {
        font-family: Arial, sans-serif;
        position: fixed;
        top: 0;
        left: 0;
        background: linear-gradient(rgba(30, 30, 30, 0.9), #000 1810%);
        touch-action: pinch-zoom;
        z-index: 1000000000;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
      }
      .fslightbox-container * {
        box-sizing: border-box;
      }
      .fslightbox-svg-path {
        transition: fill 0.15s ease;
        fill: #ddd;
      }
      .fslightbox-nav {
        height: 45px;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
      }
      .fslightbox-slide-number-container {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        height: 100%;
        font-size: 15px;
        color: #d7d7d7;
        z-index: 0;
        max-width: 55px;
        text-align: left;
      }
      .fslightbox-slide-number-container .fslightbox-flex-centered {
        height: 100%;
      }
      .fslightbox-slash {
        display: block;
        margin: 0 5px;
        width: 1px;
        height: 12px;
        transform: rotate(15deg);
        background: #fff;
      }
      .fslightbox-toolbar {
        position: absolute;
        z-index: 3;
        right: 0;
        top: 0;
        height: 100%;
        display: flex;
        background: rgba(35, 35, 35, 0.65);
      }
      .fslightbox-toolbar-button {
        height: 100%;
        width: 45px;
        cursor: pointer;
      }
      .fslightbox-toolbar-button:hover .fslightbox-svg-path {
        fill: #fff;
      }
      .fslightbox-slide-btn-container {
        display: flex;
        align-items: center;
        padding: 12px 12px 12px 6px;
        position: absolute;
        top: 50%;
        cursor: pointer;
        z-index: 3;
        transform: translateY(-50%);
      }
      @media (min-width: 476px) {
        .fslightbox-slide-btn-container {
          padding: 22px 22px 22px 6px;
        }
      }
      @media (min-width: 768px) {
        .fslightbox-slide-btn-container {
          padding: 30px 30px 30px 6px;
        }
      }
      .fslightbox-slide-btn-container:hover .fslightbox-svg-path {
        fill: #f1f1f1;
      }
      .fslightbox-slide-btn {
        padding: 9px;
        font-size: 26px;
        background: rgba(35, 35, 35, 0.65);
      }
      @media (min-width: 768px) {
        .fslightbox-slide-btn {
          padding: 10px;
        }
      }
      @media (min-width: 1600px) {
        .fslightbox-slide-btn {
          padding: 11px;
        }
      }
      .fslightbox-slide-btn-container-previous {
        left: 0;
      }
      @media (max-width: 475.99px) {
        .fslightbox-slide-btn-container-previous {
          padding-left: 3px;
        }
      }
      .fslightbox-slide-btn-container-next {
        right: 0;
        padding-left: 12px;
        padding-right: 3px;
      }
      @media (min-width: 476px) {
        .fslightbox-slide-btn-container-next {
          padding-left: 22px;
        }
      }
      @media (min-width: 768px) {
        .fslightbox-slide-btn-container-next {
          padding-left: 30px;
        }
      }
      @media (min-width: 476px) {
        .fslightbox-slide-btn-container-next {
          padding-right: 6px;
        }
      }
      .fslightbox-down-event-detector {
        position: absolute;
        z-index: 1;
      }
      .fslightbox-slide-swiping-hoverer {
        z-index: 4;
      }
      .fslightbox-invalid-file-wrapper {
        font-size: 22px;
        color: #eaebeb;
        margin: auto;
      }
      .fslightbox-video {
        object-fit: cover;
      }
      .fslightbox-youtube-iframe {
        border: 0;
      }
      .fslightboxl {
        display: block;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 67px;
        height: 67px;
      }
      .fslightboxl div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 54px;
        height: 54px;
        margin: 6px;
        border: 5px solid;
        border-color: #999 transparent transparent transparent;
        border-radius: 50%;
        animation: fslightboxl 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      }
      .fslightboxl div:nth-child(1) {
        animation-delay: -0.45s;
      }
      .fslightboxl div:nth-child(2) {
        animation-delay: -0.3s;
      }
      .fslightboxl div:nth-child(3) {
        animation-delay: -0.15s;
      }
      @keyframes fslightboxl {
        0% {
          transform: rotate(0);
        }
        100% {
          transform: rotate(360deg);
        }
      }
      .fslightbox-source {
        position: relative;
        z-index: 2;
        opacity: 0;
      }
    </style>
    <link
      rel="stylesheet"
      href="chrome-extension://ihcjicgdanjaechkgeegckofjjedodee/app/content-style.css"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="./HOME_files/trustindex-feed-instagram-widget.css"
    />
  </head>

  <body class="webp">
    <div class="wrapper">
      <header class="header _fixed">
        <div class="header__container _container">
          <div class="header__body _fixed">
            <a href="https://stadtkrug.at/" class="header__logo">
              <img src="./HOME_files/logo_new.png" alt="Лого" />
            </a>
            <div class="header__content">
              <nav class="header__nav">
                <ul class="header__list">
                  <li class="header__li">
                    <a href="https://stadtkrug.at/" class="header__link"
                      >HOME</a
                    >
                  </li>
                  <li class="header__li">
                    <a href="https://stadtkrug.at/zimmer/" class="header__link"
                      >ZIMMER/APARTMENT</a
                    >
                  </li>
                  <li class="header__li">
                    <a href="https://stadtkrug.at/gallery/" class="header__link"
                      >GALERIE</a
                    >
                  </li>
                  <li class="header__li">
                    <a href="https://stadtkrug.at/anfahrt/" class="header__link"
                      >ANFAHRT/CHECK IN</a
                    >
                  </li>
                  <li class="header__li">
                    <a href="https://stadtkrug.at/about/" class="header__link"
                      >ÜBER UNS</a
                    >
                  </li>
                  <li class="header__li">
                    <a href="https://stadtkrug.at/kontakt/" class="header__link"
                      >KONTAKT</a
                    >
                  </li>
                </ul>
              </nav>

              <a
                class="header__button button-hover"
                data-da=".header__list,478,last"
                href="https://booking.stadtkrug.at/CPC/?agentcode=58078&amp;hotelcode=6440"
              >
                JETZ BUCHEN
              </a>
              <div class="header-burger">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="modal modal-frame">
        <div class="modal__content">
          <div class="modal__body">
            <iframe src="./HOME_files/iframe.html" allow="camera;"></iframe>
            <div class="modal__close">
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
      </div>
      <div id="default-popup" class="popup">
        <div class="popup__body">
          <div class="popup__content">
            <a
              data-close-popup=""
              href="https://stadtkrug.at/#"
              class="popup__close"
            >
              X
            </a>
            <div data-show-popup-content=""></div>
          </div>
        </div>
      </div>
      <main class="main">
        <section
          class="intro"
          style="
            background: url(https://stadtkrug.at/wp-content/uploads/2024/02/Deluxe-Apt.-1-scaled.jpg)
              no-repeat center/cover;
          "
        >
          <div class="intro__body">
            <div class="intro__wp-title">
              <img
                src="./HOME_files/title-bg.png"
                alt="icon"
                class="intro__title-bg"
              />
              <h1 class="intro__title h1">
                Ein herzliches Willkommen im Altstadthotel Stadtkrug
              </h1>
            </div>
            <div class="intro__content _is-scroll">
              <button class="intro__iframe-img btn-active-iframe">
                <img src="./HOME_files/iframe-new.jpg" alt="image" />
              </button>
              <button class="intro__iframe-btn btn-active-iframe">
                Jetzt Buchen
              </button>
            </div>
          </div>
        </section>

        <section class="welcome">
          <div class="welcome__container _container">
            <div class="welcome__body">
              <div class="welcome__content">
                <div class="welcome__logo">
                  <img src="./HOME_files/Stadtkrug_Hotel_Logo.png" alt="logo" />
                </div>
                <h4 class="welcome__title h4">
                  Ein herzliches Willkommen im Hotel Stadtkrug Salzburg
                </h4>
                <p class="welcome__text text-p">
                  Ihr viersterniges Zuhause in der historischen Altstadt von
                  Salzburg. Gelegen am malerischen Fuße des Kapuzinerbergs,
                  verbindet unser Altstadthotel traditionellen Charme mit
                  zeitgemäßem Komfort. Eingebettet in die lebendige Linzergasse,
                  lädt der Stadtkrug dazu ein, die kulturellen Schätze Salzburgs
                  direkt vor Ihrer Tür zu entdecken.
                </p>
              </div>
              <div class="welcome__wp-img">
                <img
                  src="./HOME_files/fam2-scaled-e1699907142810.jpg"
                  alt="image"
                />
              </div>
            </div>
          </div>
        </section>

        <section class="apartments">
          <div class="apartments__body">
            <span class="apartments__up-title up-title">
              Wohlfühlen im Altstadthotel Stadtkrug
            </span>
            <h4 class="apartments__title h4">
              Impressionen unseres Boutique Hotels:
            </h4>
            <div class="apartments__content">
              <div class="apartments__row">
                <div class="apartments__tile">
                  <img src="./HOME_files/L1200088-scaled.jpg" alt="image" />
                </div>
                <div class="apartments__tile">
                  <img src="./HOME_files/L1007397-scaled.jpg" alt="image" />
                </div>
                <div class="apartments__tile">
                  <img src="./HOME_files/DSC01400-scaled.jpg" alt="image" />
                </div>
              </div>
              <div class="apartments__row">
                <div class="apartments__tile">
                  <img src="./HOME_files/DSC01450-scaled.jpg" alt="image" />
                </div>
                <div class="apartments__tile">
                  <img src="./HOME_files/DSC01536-scaled.jpg" alt="image" />
                </div>
                <div class="apartments__tile">
                  <img src="./HOME_files/DSC01541-scaled.jpg" alt="image" />
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="widget">
          <div class="widget__body">
            <div class="widget__block">
              <div class="widget__wp-icon">
                <img src="./HOME_files/wifi.png" alt="icon" />
              </div>
              <div class="widget__block-content">
                <h6 class="widget__block-title">High Speed Internet</h6>
                <p class="widget__block-text">
                  Bei uns sind Sie immer Online mit bis zu 300Mbit Download
                  surfen Sie natürlich kostenlos als Gäste.
                </p>
              </div>
            </div>
            <div class="widget__block">
              <div class="widget__wp-icon">
                <img src="./HOME_files/location.png" alt="icon" />
              </div>
              <div class="widget__block-content">
                <h6 class="widget__block-title">Direkt im Zentrum</h6>
                <p class="widget__block-text">
                  Das Hotel befindet sich in der Fußgängerzone der Salzburger
                  Altstadt. Alle wichtigen Sehenswürdigkeiten sind in wenigen
                  Gehminuten erreichbar.
                </p>
              </div>
            </div>
          </div>
        </section>

        <section
          class="booking"
          style="
            background: url(https://stadtkrug.at/wp-content/uploads/2025/03/AdobeStock_503414135-scaled.webp)
              no-repeat center/cover;
          "
        >
          <div class="booking__body">
            <div class="booking__content">
              <div class="booking__wp-logo wp-img-center">
                <img src="./HOME_files/logo-1.png" alt="logo" />
              </div>
              <p class="booking__text">
                5% Rabatt Bei Buchungen direkt über unsere Website!
              </p>
              <a
                href="https://neo.cultbooking.com/CPC/?agentcode=58078&amp;hotelcode=6440"
                class="booking__button button-hover"
              >
                Jetzt Buchen
              </a>
            </div>
          </div>
        </section>

        <section class="salzburg">
          <div class="salzburg__container _container">
            <div class="salzburg__body">
              <h5 class="salzburg__title">Die Salzburger Altstadt</h5>
              <p class="salzburg__text">
                <br />Tauchen Sie ein in die Geschichte des Hotel Stadtkrugs,
                das bereits seit 1353 Gäste willkommen heißt. Unsere Mauern,
                durchzogen von Geschichten und Geheimnissen vergangener Zeiten,
                warten darauf, Sie in Ihren Bann zu ziehen. Erleben Sie den
                einzigartigen Zauber, der unser Haus seit Jahrhunderten prägt,
                und werden Sie Teil der faszinierenden Erzählung, die sich in
                jedem Winkel verbirgt. Ihr Aufenthalt bei uns ist mehr als eine
                Übernachtung – es ist eine Reise durch die Zeit. Das Hotel liegt
                in der Fußgängerzone der Salzburger Altstadt, nur wenige Minuten
                von allen Hauptsehenswürdigkeiten entfernt.
              </p>

              <div class="salzburg__content">
                <div class="salzburg__block" data-set-content="default-popup">
                  <div class="salzburg__block-wp-img wp-img-center">
                    <img
                      src="./HOME_files/salzburg-stadtkrug-home-header.jpg"
                      alt="image"
                    />
                  </div>
                  <div class="salzburg__block-content">
                    <div class="salzburg__block-top">
                      <span class="salzburg__block-up-title up-title">
                        Unser essen
                      </span>
                      <h4 class="salzburg__block-title h4">
                        Restaurant im Stadtkrug
                      </h4>
                    </div>
                    <p class="salzburg__block-text">
                      Schmecken Sie Salzburg im Restaurant Stadtkrug – wo sich
                      erlesenes Bio-Hochlandrindfleisch aus eigener Zucht und
                      innovative Gaumenfreuden zu einer einzigartigen
                      Geschmackssinfonie vereinen. Hier verwandelt sich jede
                      Mahlzeit in ein Stück gelebte Tradition und puren Genuss.
                      <br /><br />
                      Da das Restaurant Stadtkrug nicht nur bei unseren
                      Hotelgästen äußerst beliebt ist, empfehlen wir unseren
                      Gästen, sich rechtzeitig um eine Tischreservierung zu
                      kümmern.
                    </p>
                    <div data-open="" class="salzburg__block-bottom">
                      <div class="salzburg__block-button button-hover">
                        Mehr...
                      </div>
                      <img
                        src="./HOME_files/vereinfacht.png"
                        alt="icon"
                        class="salzburg__block-icon bottom right"
                      />
                      <div data-content="">
                        <h4 class="salzburg__block-title h4">
                          Restaurant im Stadtkrug
                        </h4>
                        <p class="salzburg__block-text">
                          Genuss und Tradition. Lassen Sie sich im
                          herrschaftlichen Gewölbe mit Spezialitäten vom
                          Hochlandrind und anderen Traditionsgerichten, die
                          unsere Küche mit einem neuen Pfiff zubereitet,
                          verwöhnen. Jahrhundertlange Kochtradition verbindet
                          unser Küchenchef mit innovativen neuen Noten, und
                          verwöhnt Sie mit Zutaten von lokalen Lieferanten. Das
                          Fleisch der Hochlandrinder können Sie sich in
                          sämtlichen Variationen auf der Zunge zergehen lassen.
                          Vom Beef Tatar über Gulasch, bis hin zu Tomahawk
                          Steaks.
                        </p>
                        <a
                          href="https://www.restaurant-stadtkrug.at/restaurant"
                          class="salzburg__block-button button-hover"
                        >
                          Zum Restaurant im Stadtkrug
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="salzburg__block" data-set-content="default-popup">
                  <div class="salzburg__block-wp-img wp-img-center">
                    <img src="./HOME_files/Stadtkrug-43-@2x.jpeg" alt="image" />
                  </div>
                  <div class="salzburg__block-content">
                    <div class="salzburg__block-top">
                      <span class="salzburg__block-up-title up-title">
                        Unser Wein
                      </span>
                      <h4 class="salzburg__block-title h4">
                        Weinkeller im Stadtkrug
                      </h4>
                    </div>
                    <p class="salzburg__block-text">
                      <br />Tauchen Sie ein in die Welt erlesener Weine in
                      unserem Weinkeller. Bei individuellen Verkostungen
                      entfalten sich die Aromen – ein unvergessliches Erlebnis
                      für Kenner und Genießer.
                    </p>
                    <div data-open="" class="salzburg__block-bottom">
                      <div class="salzburg__block-button button-hover">
                        Mehr...
                      </div>
                      <img
                        src="./HOME_files/vereinfacht.png"
                        alt="icon"
                        class="salzburg__block-icon bottom right"
                      />
                      <div data-content="">
                        <h4 class="salzburg__block-title h4">
                          Weinkeller im Stadtkrug
                        </h4>
                        <p class="salzburg__block-text">
                          Entdecken Sie unseren kleinen und exquisiten
                          Weinkeller, der eine erlesene Auswahl an Weinen und
                          Raritäten für Sie bereit hält.<br />
                          Unser Weinkeller ist der perfekte Ort für Liebhaber
                          erlesener Weine und bietet Platz für individuelle
                          Weinverkostungen von 8 bis 12 Personen. Genießen Sie
                          eine individuelle Zusammenstellung von Weinen und eine
                          kleine Führung, die Ihnen einen Einblick in die Welt
                          des Weins gibt, dazu servieren wir Ihnen Antipasti und
                          kleine Häppchen. Neben dem Genuss vor Ort bieten wir
                          Ihnen auch die Möglichkeit Weinraritäten zu kaufen und
                          mit nach Hause zu nehmen.
                        </p>
                        <a
                          href="https://www.restaurant-stadtkrug.at/Weinkeller"
                          class="salzburg__block-button button-hover"
                        >
                          Zum Weinkeller im Stadtkrug
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="salzburg__block" data-set-content="default-popup">
                  <div class="salzburg__block-wp-img wp-img-center">
                    <img src="./HOME_files/JUG-die-Bar@2x.jpeg" alt="image" />
                  </div>
                  <div class="salzburg__block-content">
                    <div class="salzburg__block-top">
                      <span class="salzburg__block-up-title up-title">
                        Für die Abendstunden
                      </span>
                      <h4 class="salzburg__block-title h4">Bar im Stadtkrug</h4>
                    </div>
                    <p class="salzburg__block-text">
                      Lassen Sie den Abend in unserer Bar bei einem
                      erfrischenden Getränk ausklingen: ob kühles Bier, edler
                      Wein oder ein Cocktail nach Ihrem Geschmack – hier finden
                      Sie Ihr perfektes Ambiente zum Entspannen und Genießen.
                    </p>
                    <div data-open="" class="salzburg__block-bottom">
                      <div class="salzburg__block-button button-hover">
                        Mehr...
                      </div>
                      <img
                        src="./HOME_files/vereinfacht.png"
                        alt="icon"
                        class="salzburg__block-icon bottom right"
                      />
                      <div data-content="">
                        <h4 class="salzburg__block-title h4">
                          Bar im Stadtkrug
                        </h4>
                        <p class="salzburg__block-text">
                          Erfrischende Getränke genießen!<br />
                          In unserer hauseigenen Bar verwöhnen wir Sie sowohl
                          mit einem kühlen Bier, einem guten Glaserl Wein als
                          auch mit einem tollen Cocktail - ganz nach Ihrem
                          Geschmack! Genießen Sie Ihr Getränk in einem modernen
                          Ambiente und lassen Sie Ihren Tag ungezwungen
                          ausklingen. Ob mit der Familie, Ihren Freunden oder
                          Kollegen - gemütliches Beisammensein wird bei uns groß
                          geschrieben. Ein perfekter Ort mitten in Salzburg, um
                          die Seele baumeln zu lassen!
                        </p>
                        <a
                          href="https://www.restaurant-stadtkrug.at/jug-die-bar"
                          class="salzburg__block-button button-hover"
                        >
                          Zum die Bar im Stadtkrug
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="promo">
          <div class="promo__container _container">
            <div class="promo__body">
              <div class="promo__wp-img wp-img-center">
                <img src="./HOME_files/L1007572.jpg" alt="image" />
              </div>
              <div class="promo__content">
                <h5 class="promo__title">Dominik &amp; Jessica Lucian</h5>
                <p class="promo__text">
                  Dominik und Jessica Lucian repräsentieren die
                  leidenschaftliche dritte Generation der Gastgeberfamilie des
                  Stadtkrugs. Dominik, der mit 42 Jahren auf eine 23-jährige
                  Erfahrung im Familienhotel zurückblickt und in der
                  renommierten Tourismusschule Klessheim ausgebildet wurde,
                  bringt internationale Expertise aus seiner Zeit in Florida und
                  Spanien mit. Jessica, gebürtige Amerikanerin mit
                  kolumbianischen Wurzeln, ergänzt mit ihrem in New York
                  erworbenen Wirtschafts- und Marketingwissen das
                  Hotelmanagement. Seit 2016 ist sie eine treibende Kraft im
                  Stadtkrug. Gemeinsam schreiben sie mit ihren zwei Kindern das
                  nächste Kapitel der Hotelgeschichte.
                </p>
              </div>
              <img
                src="./HOME_files/icon-2.png"
                alt="icon"
                class="promo__decor-img"
              />
            </div>
          </div>
        </section>

        <section class="media">
          <div class="media__container _container">
            <div class="media__body">
              <h4 class="media__title h4">Social Media</h4>
              <!--<div class="media__content">
                      <div class="media__card">
              <div class="media__card-wp-img">
                <img src="https://stadtkrug.at/wp-content/uploads/2023/11/HILL7587-scaled.jpg" alt="image">
              </div>
              <a href="" class="media__card-content">
                <div class="media__card-date">
                  <span class="dey"></span>
                  <span class="month-year"></span>
                </div>
                <p class="media__card-text">
                  5% Rabatt bei DIREKTBUCHUNG (über Homepage, Mail oder telefonisch)                </p>
              </a>
            </div>
                      <div class="media__card">
              <div class="media__card-wp-img">
                <img src="https://stadtkrug.at/wp-content/uploads/2023/11/IMG_6973-2-scaled-e1699962935464.jpeg" alt="image">
              </div>
              <a href="" class="media__card-content">
                <div class="media__card-date">
                  <span class="dey"></span>
                  <span class="month-year"></span>
                </div>
                <p class="media__card-text">
                  Our historic property is the perfect place to stay.✨                </p>
              </a>
            </div>
                      <div class="media__card">
              <div class="media__card-wp-img">
                <img src="https://stadtkrug.at/wp-content/uploads/2023/11/Bildschirmfoto-2023-11-15-um-13.39.41.png" alt="image">
              </div>
              <a href="" class="media__card-content">
                <div class="media__card-date">
                  <span class="dey"></span>
                  <span class="month-year"></span>
                </div>
                <p class="media__card-text">
                  Truly a city and nature experience👌                </p>
              </a>
            </div>
                  </div>
      </div>
    </div>-->
              <div id="trustindex-feed-container-9468a4c3d903a86"></div>
              <div
                data-source="Instagram"
                data-widget-type="social"
                data-layout="grid"
                data-col="3"
                data-style="custom-style"
                data-click="lightbox"
                data-wkey="feed-instagram"
                class="ti-widget ti-feed-widget"
                style=""
                data-widget-width="lg"
              >
                <header
                  data-header-type="1"
                  data-header-switch="false"
                  class="ti-header"
                >
                  <div
                    data-id="Instagram|17841402300776677"
                    class="ti-widget-header ti-active"
                    data-source="Instagram"
                  >
                    <div class="ti-profile">
                      <div class="ti-profile-image">
                        <div
                          style="
                            background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                            background-position: 0 0px;
                            background-size: 60px auto;
                          "
                          data-background-position="0"
                          class="ti-profile-image-sprite"
                        ></div>
                      </div>
                      <div
                        data-show-username="true"
                        data-show-full-name="false"
                        class="ti-profile-details"
                      >
                        <div data-target="profile-switch" class="ti-name">
                          <div class="ti-username">stadtkrug_hotel</div>
                        </div>
                        <div class="ti-header-numbers">
                          <div data-num-of="posts" class="ti-number">
                            <div class="ti-value">238</div>
                            <div>beiträge</div>
                          </div>
                          <div data-num-of="followers" class="ti-number">
                            <div class="ti-value">1.3K</div>
                            <div>follower</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ti-header-btn">
                      <a
                        href="https://www.instagram.com/stadtkrug_hotel"
                        target="_blank"
                        rel="nofollow"
                        class="ti-btn"
                        ><i class="ti-icon"></i>Folgen</a
                      >
                    </div>
                  </div>
                </header>
                <main class="ti-widget-body">
                  <div class="ti-layout-container">
                    <section class="ti-widget-layout">
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-media-type="slider"
                          data-post-id="18155746717370291"
                          data-url="https://www.instagram.com/p/DK1X4hXNy84/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <div
                                data-behaviour="slide"
                                data-target="widget-card"
                                class="ti-card-slider"
                              >
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 13, 2025."
                                    src="./HOME_files/0.webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 13, 2025."
                                    src="./HOME_files/1.webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 13, 2025."
                                    src="./HOME_files/2.webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 13, 2025."
                                    src="./HOME_files/3.webp"
                                  />
                                </div>
                              </div>
                              <nav data-arrow-type="1" class="ti-nav-arrow">
                                <div
                                  style="visibility: hidden"
                                  class="ti-arrow-prev"
                                ></div>
                                <div class="ti-arrow-next"></div>
                              </nav>
                              <div class="ti-image-counter">1/4</div>
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-06-13 08:17:05"
                                      class="ti-date"
                                      >13 Juni 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes"><span>52</span></div>
                                <div class="ti-post-comments">
                                  <span>2</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DK1X4hXNy84/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                📣 LAST CALL für deinen City-Trip nach Salzburg!
                                Spontan ist immer am schönsten – und du hast
                                Glück: Wir haben noch ein paar Zimmer dieses
                                Wochenende frei! 🤩✨ Pack deine/n Bestie ein,
                                gönnt euch eine Auszeit in der Mozartstadt und
                                erlebt Salzburg von seiner charmantesten Seite.
                                🏙️💫 👉 Direktbuchung = Bestpreis Wir freuen uns
                                auf euch 💙

                                <a
                                  href="https://www.instagram.com/explore/tags/stadtkrugsalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#stadtkrugsalzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/boutiquehotel"
                                  target="_blank"
                                  rel="nofollow"
                                  >#boutiquehotel</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/citytrip"
                                  target="_blank"
                                  rel="nofollow"
                                  >#citytrip</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburgliebe"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburgliebe</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/wochenendtrip"
                                  target="_blank"
                                  rel="nofollow"
                                  >#wochenendtrip</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/girlsgetaway"
                                  target="_blank"
                                  rel="nofollow"
                                  >#girlsgetaway</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/letsgosalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#letsgosalzburg</a
                                >
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-media-type="slider"
                          data-post-id="17972276042899227"
                          data-url="https://www.instagram.com/p/DKymOJwtb8I/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <div
                                data-behaviour="slide"
                                data-target="widget-card"
                                class="ti-card-slider"
                              >
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 12, 2025."
                                    src="./HOME_files/0(1).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 12, 2025."
                                    src="./HOME_files/1(1).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 12, 2025."
                                    src="./HOME_files/2(1).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 12, 2025."
                                    src="./HOME_files/3(1).webp"
                                  />
                                </div>
                              </div>
                              <nav data-arrow-type="1" class="ti-nav-arrow">
                                <div
                                  style="visibility: hidden"
                                  class="ti-arrow-prev"
                                ></div>
                                <div class="ti-arrow-next"></div>
                              </nav>
                              <div class="ti-image-counter">1/4</div>
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-06-12 06:24:39"
                                      class="ti-date"
                                      >12 Juni 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes"><span>35</span></div>
                                <div class="ti-post-comments">
                                  <span>2</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DKymOJwtb8I/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                IN SALZBURG gibt es immer was zu sehen – und
                                jetzt wird’s magisch! ✨ Erlebt Evanescent von
                                <a
                                  href="https://www.instagram.com/ateliersisu"
                                  target="_blank"
                                  rel="nofollow"
                                  >@ateliersisu</a
                                >
                                – eine beeindruckende Kunstinstallation im
                                Innenhof des
                                <a
                                  href="https://www.instagram.com/domquartier."
                                  target="_blank"
                                  rel="nofollow"
                                  >@domquartier.</a
                                >
                                Riesige schwebende Kugeln, tanzendes Licht und
                                sanfte Klänge schaffen eine Atmosphäre wie aus
                                einem Traum. 🌈🫧 Lasst euch verzaubern von
                                diesem flüchtigen Moment der Schönheit –
                                kostenlos und nur vom 10.–22. Juni im Rahmen der
                                Sommerszene 2025. 🎨 Moderne Kunst mitten in der
                                Altstadt – perfekt für einen inspirierenden
                                Spaziergang mit Familie &amp; Freunden. Und
                                danach? Zurück ins charmante Boutiquehotel
                                Stadtkrug – euer Ruhepol im Herzen von Salzburg.
                                💫

                                <a
                                  href="https://www.instagram.com/explore/tags/evanescent"
                                  target="_blank"
                                  rel="nofollow"
                                  >#evanescent</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/visitsalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#visitsalzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/art"
                                  target="_blank"
                                  rel="nofollow"
                                  >#art</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/sommerszene"
                                  target="_blank"
                                  rel="nofollow"
                                  >#sommerszene</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburgfestival"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburgfestival</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/stadtkrug"
                                  target="_blank"
                                  rel="nofollow"
                                  >#stadtkrug</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/transience"
                                  target="_blank"
                                  rel="nofollow"
                                  >#transience</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/publicinstallation"
                                  target="_blank"
                                  rel="nofollow"
                                  >#publicinstallation</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/modernart"
                                  target="_blank"
                                  rel="nofollow"
                                  >#modernart</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/bubbles"
                                  target="_blank"
                                  rel="nofollow"
                                  >#bubbles</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/light"
                                  target="_blank"
                                  rel="nofollow"
                                  >#light</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/city"
                                  target="_blank"
                                  rel="nofollow"
                                  >#city</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/familyandfriends"
                                  target="_blank"
                                  rel="nofollow"
                                  >#familyandfriends</a
                                >
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-media-type="slider"
                          data-post-id="18071077474943789"
                          data-url="https://www.instagram.com/p/DKgoBUFNEw8/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <div
                                data-behaviour="slide"
                                data-target="widget-card"
                                class="ti-card-slider"
                              >
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 05, 2025."
                                    src="./HOME_files/0(2).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 05, 2025."
                                    src="./HOME_files/1(2).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 05, 2025."
                                    src="./HOME_files/2(2).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on June 05, 2025."
                                    src="./HOME_files/3(2).webp"
                                  />
                                </div>
                              </div>
                              <nav data-arrow-type="1" class="ti-nav-arrow">
                                <div
                                  style="visibility: hidden"
                                  class="ti-arrow-prev"
                                ></div>
                                <div class="ti-arrow-next"></div>
                              </nav>
                              <div class="ti-image-counter">1/4</div>
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-06-05 06:54:02"
                                      class="ti-date"
                                      >05 Juni 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes"><span>44</span></div>
                                <div class="ti-post-comments">
                                  <span>3</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DKgoBUFNEw8/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                YOUR CLASSY HOME in Salzburg🧂🏰 Mitten im
                                Herzen von Salzburg – in der charmanten Linzer
                                Gasse – erwartet dich stilvoller Komfort auf
                                höchstem Niveau. Öffne die Tür zu einem unserer
                                liebevoll gestalteten Doppelzimmer: Warme
                                Farben, massives Holz und edler Marmor treffen
                                auf moderne Details – die perfekte Balance aus
                                Tradition und Innovation. Und das süße Extra?
                                Eine Original Mozartkugel auf dem Bett – ein
                                kleines Stück Salzburg, das einfach dazugehört.
                                ⚜️
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-media-type="slider"
                          data-post-id="18058777090969008"
                          data-url="https://www.instagram.com/p/DJ6Cfc_NdGd/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <div
                                data-behaviour="slide"
                                data-target="widget-card"
                                class="ti-card-slider"
                              >
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on May 21, 2025."
                                    src="./HOME_files/0(3).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on May 21, 2025."
                                    src="./HOME_files/1(3).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on May 21, 2025."
                                    src="./HOME_files/2(3).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on May 21, 2025."
                                    src="./HOME_files/3(3).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on May 21, 2025."
                                    src="./HOME_files/4.webp"
                                  />
                                </div>
                              </div>
                              <nav data-arrow-type="1" class="ti-nav-arrow">
                                <div
                                  style="visibility: hidden"
                                  class="ti-arrow-prev"
                                ></div>
                                <div class="ti-arrow-next"></div>
                              </nav>
                              <div class="ti-image-counter">1/5</div>
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-05-21 07:14:58"
                                      class="ti-date"
                                      >21 Mai 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes"><span>47</span></div>
                                <div class="ti-post-comments">
                                  <span>1</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DJ6Cfc_NdGd/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                KULTURTIPP 🤩 Diese Woche unbedingt im
                                Wochenplaner vormerken: ein Besuch im Museum der
                                Moderne am Mönchsberg 🖼️⛰️ – allein der Ausblick
                                über Salzburg ist ein Highlight! Neu im
                                Programm: Opening „Entropic Empire“ von Rob
                                Voerman – eine faszinierende Installation aus
                                Stahl, Glas &amp; Karton 🧩✨. Dazu kreative
                                Angebote für Kinder 👧🎨 und ein inspirierendes
                                Museumswochenende! See you at the museum!
                                <a
                                  href="https://www.instagram.com/museumdermodernesalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >@museumdermodernesalzburg</a
                                >

                                <a
                                  href="https://www.instagram.com/explore/tags/stadtkrugsalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#stadtkrugsalzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/kulturtipp"
                                  target="_blank"
                                  rel="nofollow"
                                  >#kulturtipp</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/museumdermoderne"
                                  target="_blank"
                                  rel="nofollow"
                                  >#museumdermoderne</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/m%C3%B6nchsberg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#mönchsberg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/robvoerman"
                                  target="_blank"
                                  rel="nofollow"
                                  >#robvoerman</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburgkultur"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburgkultur</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/boutiquehotel"
                                  target="_blank"
                                  rel="nofollow"
                                  >#boutiquehotel</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/artlover"
                                  target="_blank"
                                  rel="nofollow"
                                  >#artlover</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/weekendvibes"
                                  target="_blank"
                                  rel="nofollow"
                                  >#weekendvibes</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/cityview"
                                  target="_blank"
                                  rel="nofollow"
                                  >#cityview</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburgliebe"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburgliebe</a
                                >
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-post-id="18003015482770001"
                          data-url="https://www.instagram.com/p/DJR1VW8t76g/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <img
                                alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on May 05, 2025."
                                src="./HOME_files/0(4).webp"
                              />
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-05-05 16:30:22"
                                      class="ti-date"
                                      >05 Mai 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes"><span>52</span></div>
                                <div class="ti-post-comments">
                                  <span>3</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DJR1VW8t76g/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                MUM!!!! 💝Am Muttertag sagen wir DANKE! All
                                unsere Hotelgäste, die Mamas sind, bekommen am
                                11. Mai ein Glas Prosecco oder Orangensaft an
                                der Rezeption – als kleines Zeichen unserer
                                Wertschätzung. Schön, dass es euch gibt! 💕💕💕

                                <a
                                  href="https://www.instagram.com/explore/tags/Muttertag"
                                  target="_blank"
                                  rel="nofollow"
                                  >#Muttertag</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/DankeMama"
                                  target="_blank"
                                  rel="nofollow"
                                  >#DankeMama</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/BoutiquehotelStadtkrug"
                                  target="_blank"
                                  rel="nofollow"
                                  >#BoutiquehotelStadtkrug</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/Salzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#Salzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/ProseccoMoments"
                                  target="_blank"
                                  rel="nofollow"
                                  >#ProseccoMoments</a
                                >
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-media-type="slider"
                          data-post-id="17905704723138207"
                          data-url="https://www.instagram.com/p/DI3SkjUtYk-/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <div
                                data-behaviour="slide"
                                data-target="widget-card"
                                class="ti-card-slider"
                              >
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/0(5).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/1(4).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/2(4).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/3(4).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/4(1).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/5.webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/6.webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/7.webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 25, 2025."
                                    src="./HOME_files/8.webp"
                                  />
                                </div>
                              </div>
                              <nav data-arrow-type="1" class="ti-nav-arrow">
                                <div
                                  style="visibility: hidden"
                                  class="ti-arrow-prev"
                                ></div>
                                <div class="ti-arrow-next"></div>
                              </nav>
                              <div class="ti-image-counter">1/9</div>
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-04-25 09:06:21"
                                      class="ti-date"
                                      >25 April 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes">
                                  <span>186</span>
                                </div>
                                <div class="ti-post-comments">
                                  <span>3</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DI3SkjUtYk-/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                TAUSEND DANK für einen unvergesslichen Abend
                                🎉Gestern durften wir beim Open Doors Event und
                                der beeindruckenden Kunstausstellung „From the
                                Streets to Society“ von
                                <a
                                  href="https://www.instagram.com/cest.pour.toi21"
                                  target="_blank"
                                  rel="nofollow"
                                  >@cest.pour.toi21</a
                                >
                                / Erdal Tuncay viele wunderbare Gäste bei uns im
                                Boutiquehotel Stadtkrug begrüßen. Kunst, Musik
                                by
                                <a
                                  href="https://www.instagram.com/pantelispascal"
                                  target="_blank"
                                  rel="nofollow"
                                  >@pantelispascal</a
                                >
                                , gute Gespräche &amp; ein ganz besonderer Vibe
                                – wir sind dankbar für euer Kommen und das
                                großartige Feedback! Für alle, die nicht dabei
                                sein konnten: Unsere Türen sind auch weiterhin
                                offen – für Kunst, Stil und außergewöhnliche
                                Aufenthalte im Herzen von Salzburg. Happy
                                friday, Jessy &amp; Dominik 🏩

                                <a
                                  href="https://www.instagram.com/explore/tags/stadtkrugsalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#stadtkrugsalzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/boutiquehotel"
                                  target="_blank"
                                  rel="nofollow"
                                  >#boutiquehotel</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/kunstausstellung"
                                  target="_blank"
                                  rel="nofollow"
                                  >#kunstausstellung</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/fromthestreets"
                                  target="_blank"
                                  rel="nofollow"
                                  >#fromthestreets</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/erdaltuncay"
                                  target="_blank"
                                  rel="nofollow"
                                  >#erdaltuncay</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/openhouse"
                                  target="_blank"
                                  rel="nofollow"
                                  >#openhouse</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburgcity"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburgcity</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/artvibes"
                                  target="_blank"
                                  rel="nofollow"
                                  >#artvibes</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/thankyou"
                                  target="_blank"
                                  rel="nofollow"
                                  >#thankyou</a
                                >
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-post-id="18069620764930679"
                          data-url="https://www.instagram.com/p/DIwUjidtRGY/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <img
                                alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 22, 2025."
                                src="./HOME_files/0(6).webp"
                              />
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-04-22 16:09:00"
                                      class="ti-date"
                                      >22 April 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes">
                                  <span>137</span>
                                </div>
                                <div class="ti-post-comments">
                                  <span>4</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DIwUjidtRGY/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                ART x OPEN DOORS am 24. April 2025 | 17:00–19:00
                                Uhr 🖤 Das Boutiquehotel Stadtkrug öffnet seine
                                Türen – und du bist herzlich eingeladen! Erlebe
                                die Ausstellung „From the Streets to Society“
                                mit Werken des Salzburger Künstlers
                                <a
                                  href="https://www.instagram.com/cest.pour.toi21"
                                  target="_blank"
                                  rel="nofollow"
                                  >@cest.pour.toi21</a
                                >
                                / Erdal Tuncay – urban, roh, ausdrucksstark. On
                                top: - Free Welcome Drink - Live DJ
                                <a
                                  href="https://www.instagram.com/pantelispascal"
                                  target="_blank"
                                  rel="nofollow"
                                  >@pantelispascal</a
                                >
                                für entspannte Beats - Open House Feeling: Werf
                                einen Blick in unsere stilvollen Zimmer &amp;
                                Apartments Art. Sound. Atmosphäre. Wir freuen
                                uns auf dich! Location: Boutiquehotel Stadtkrug
                                Linzergasse 20, 5020 Salzburg

                                <a
                                  href="https://www.instagram.com/explore/tags/stadtkrugsalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#stadtkrugsalzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/kunstevent"
                                  target="_blank"
                                  rel="nofollow"
                                  >#kunstevent</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/opendoors"
                                  target="_blank"
                                  rel="nofollow"
                                  >#opendoors</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/cestpourtoi21"
                                  target="_blank"
                                  rel="nofollow"
                                  >#cestpourtoi21</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburgart"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburgart</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/boutiquehotel"
                                  target="_blank"
                                  rel="nofollow"
                                  >#boutiquehotel</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/artmeetslifestyle"
                                  target="_blank"
                                  rel="nofollow"
                                  >#artmeetslifestyle</a
                                >
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-media-type="slider"
                          data-post-id="18092192212572225"
                          data-url="https://www.instagram.com/p/DIlNjxWtU0o/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <div
                                data-behaviour="slide"
                                data-target="widget-card"
                                class="ti-card-slider"
                              >
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 18, 2025."
                                    src="./HOME_files/0(7).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 18, 2025."
                                    src="./HOME_files/1(5).webp"
                                  />
                                </div>
                              </div>
                              <nav data-arrow-type="1" class="ti-nav-arrow">
                                <div
                                  style="visibility: hidden"
                                  class="ti-arrow-prev"
                                ></div>
                                <div class="ti-arrow-next"></div>
                              </nav>
                              <div class="ti-image-counter">1/2</div>
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-04-18 08:36:14"
                                      class="ti-date"
                                      >18 April 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes"><span>49</span></div>
                                <div class="ti-post-comments">
                                  <span>0</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DIlNjxWtU0o/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                FROHE OSTERN 🐣🌷 Wir sind schon fleißig am
                                Vorbereiten und Dekorieren – denn am 24. April
                                2025 von 17:00 bis 19:00 Uhr öffnen wir unsere
                                Türen für euch! Freut euch auf einen besonderen
                                Abend im Boutiquehotel Stadtkrug: Entdeckt
                                unsere stilvollen Zimmer &amp; Apartments und
                                lasst euch von der Kunstausstellung „From the
                                Streets to Society“ von
                                <a
                                  href="https://www.instagram.com/cest.pour.toi21"
                                  target="_blank"
                                  rel="nofollow"
                                  >@cest.pour.toi21</a
                                >
                                / Erdal Tuncay inspirieren. Dazu gibt’s: Welcome
                                Drink, gute Musik und entspannte Atmosphäre –
                                alles, was man für einen gelungenen Abend
                                braucht. Linzergasse 20, 5020 Salzburg Wir
                                freuen uns auf euch!

                                <a
                                  href="https://www.instagram.com/explore/tags/stadtkrugsalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#stadtkrugsalzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/kunstausstellung"
                                  target="_blank"
                                  rel="nofollow"
                                  >#kunstausstellung</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/fromthestreetsintosociety"
                                  target="_blank"
                                  rel="nofollow"
                                  >#fromthestreetsintosociety</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/cestpourtoi21"
                                  target="_blank"
                                  rel="nofollow"
                                  >#cestpourtoi21</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburgkunst"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburgkunst</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/openhouse"
                                  target="_blank"
                                  rel="nofollow"
                                  >#openhouse</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/boutiquehotel"
                                  target="_blank"
                                  rel="nofollow"
                                  >#boutiquehotel</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/artmeetsdesign"
                                  target="_blank"
                                  rel="nofollow"
                                  >#artmeetsdesign</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburgcityvibes"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburgcityvibes</a
                                >
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                      <div class="ti-layout-item">
                        <article
                          data-source="Instagram"
                          data-card-type="1"
                          data-media-type="slider"
                          data-post-id="18077116693742995"
                          data-url="https://www.instagram.com/p/DIVpnBrtb7K/"
                          data-card-align="top"
                          data-card-ratio="square"
                          class="ti-widget-card"
                        >
                          <main class="ti-card-body">
                            <div class="ti-card-media">
                              <div
                                data-behaviour="slide"
                                data-target="widget-card"
                                class="ti-card-slider"
                              >
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 12, 2025."
                                    src="./HOME_files/0(8).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 12, 2025."
                                    src="./HOME_files/1(6).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 12, 2025."
                                    src="./HOME_files/2(5).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 12, 2025."
                                    src="./HOME_files/3(5).webp"
                                  />
                                </div>
                                <div class="ti-slider-item">
                                  <img
                                    alt="Trustindex feed image, shared by stadtkrug_hotel on Instagram on April 12, 2025."
                                    src="./HOME_files/4(2).webp"
                                  />
                                </div>
                              </div>
                              <nav data-arrow-type="1" class="ti-nav-arrow">
                                <div
                                  style="visibility: hidden"
                                  class="ti-arrow-prev"
                                ></div>
                                <div class="ti-arrow-next"></div>
                              </nav>
                              <div class="ti-image-counter">1/5</div>
                            </div>
                            <div class="ti-post-content">
                              <header class="ti-card-header">
                                <div class="ti-profile-image">
                                  <div
                                    style="
                                      background: url('https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp');
                                      background-position: 0 -75px;
                                    "
                                    data-background-position="1"
                                    class="ti-profile-image-sprite"
                                  ></div>
                                </div>
                                <div
                                  data-show-username="true"
                                  data-show-full-name="false"
                                  class="ti-profile-details"
                                >
                                  <div class="ti-name">
                                    <div class="ti-username">
                                      stadtkrug_hotel
                                    </div>
                                  </div>
                                  <div class="ti-sub">
                                    <span
                                      data-timestamp="2025-04-12 07:33:29"
                                      class="ti-date"
                                      >12 April 2025</span
                                    >
                                  </div>
                                </div>
                                <div class="ti-platform"></div>
                              </header>
                              <div class="ti-post-meta">
                                <div class="ti-post-likes"><span>67</span></div>
                                <div class="ti-post-comments">
                                  <span>1</span>
                                </div>
                                <div class="ti-post-meta-actions">
                                  <div class="ti-post-view-btn">
                                    <a
                                      href="https://www.instagram.com/p/DIVpnBrtb7K/"
                                      target="_blank"
                                      rel="nofollow"
                                      >Ansehen</a
                                    >
                                  </div>
                                </div>
                              </div>
                              <div
                                class="ti-post-text"
                                data-initial-height="78"
                              >
                                CITY STROLL 🤩 Salzburg ist wie gemacht für
                                einen gemütlichen Stadtbummel – charmante
                                Gassen, historische Plätze, köstliche Cafés und
                                natürlich die beeindruckende Festung
                                Hohensalzburg im Blick. Vom Hotel Stadtkrug aus
                                startest du direkt ins Herz der Altstadt –
                                zentral, stilvoll, unvergesslich. Wir freuen uns
                                auf dich!

                                <a
                                  href="https://www.instagram.com/explore/tags/hotelstadtkrug"
                                  target="_blank"
                                  rel="nofollow"
                                  >#hotelstadtkrug</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/salzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#salzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/stadtbummel"
                                  target="_blank"
                                  rel="nofollow"
                                  >#stadtbummel</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/festunghohensalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#festunghohensalzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/cityvibes"
                                  target="_blank"
                                  rel="nofollow"
                                  >#cityvibes</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/altstadtsalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#altstadtsalzburg</a
                                >
                                <a
                                  href="https://www.instagram.com/explore/tags/kulinariksalzburg"
                                  target="_blank"
                                  rel="nofollow"
                                  >#kulinariksalzburg</a
                                >
                              </div>
                              <div
                                data-open-text="Mehr lesen"
                                data-collapse-text="Verbergen"
                                class="ti-readmore"
                              >
                                Mehr lesen
                              </div>
                            </div>
                          </main>
                        </article>
                      </div>
                    </section>
                  </div>
                </main>
                <footer class="ti-widget-footer">
                  <nav class="ti-nav-loadmore">
                    <div class="ti-btn">Mehr laden</div>
                  </nav>
                </footer>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- <link rel="stylesheet" href="https://stadtkrug.at/wp-content/themes/stadtkrug-theme/assets/css/popup.css"/> -->
      <link
        rel="stylesheet"
        type="text/css"
        href="./HOME_files/4oy4a.css"
        media="all"
      />
      <script src="./HOME_files/popup.js"></script>
      <script src="./HOME_files/set-popup-content.js"></script>
      <footer class="footer">
        <div class="footer__container _container">
          <div class="footer__body">
            <div class="footer__logo">
              <div class="footer__wp-logo wp-img-center">
                <img src="./HOME_files/logo.png" alt="logo" />
              </div>
              <div class="footer__messagers">
                <a
                  href="https://www.facebook.com/AltstadthotelStadtkrugSalzburg"
                  class="footer__messager"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 152 152"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        d="M76 0a76 76 0 1 0 76 76A76 76 0 0 0 76 0zm21.62 49.46c0 1.43-.6 2-2 2-2.69 0-5.38 0-8.06.11s-4.14 1.33-4.14 4.13c-.06 3 0 5.94 0 9h11.51c1.64 0 2.2.56 2.2 2.21v12.06c0 1.63-.52 2.14-2.17 2.15H83.32v32.54c0 1.74-.54 2.29-2.26 2.29H68.54c-1.51 0-2.1-.59-2.1-2.1V81.17H56.5c-1.56 0-2.12-.57-2.12-2.14V66.9c0-1.56.59-2.15 2.13-2.15h9.93V56a21.89 21.89 0 0 1 2.73-11.26 16.51 16.51 0 0 1 8.93-7.42A21.91 21.91 0 0 1 85.75 36h9.83c1.41 0 2 .62 2 2 .05 3.85.05 7.66.04 11.46z"
                      ></path>
                    </g>
                  </svg>
                </a>
                <a
                  href="https://www.youtube.com/@hotelstadtkrugsalzburg3005/"
                  class="footer__messager"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 152 152"
                  >
                    <g>
                      <path d="m65.46 88.26 21.08-12.23-21.08-12.29z"></path>
                      <path
                        d=" M76 0a76 76 0 1 0 76 76A76 76 0 0 0 76 0zm40 89.45a15.13 15.13 0 0 1-15.13 15.14H51.13A15.13 15.13 0 0 1
											36 89.45v-26.9a15.13 15.13 0 0 1 15.13-15.14h49.74A15.13 15.13 0 0 1 116 62.55z"
                      ></path>
                    </g>
                  </svg>
                </a>
                <a
                  href="https://www.instagram.com/stadtkrug_hotel/"
                  class="footer__messager"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 512 512"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve"
                    class=""
                  >
                    <g>
                      <path
                        d="M305 256c0 27.063-21.938 49-49 49s-49-21.938-49-49 21.938-49 49-49 49 21.938 49 49zm0 0"
                      ></path>
                      <path
                        d="M370.594 169.305a45.546 45.546 0 0 0-10.996-16.903 45.514 45.514 0 0 0-16.903-10.996c-5.18-2.011-12.96-4.406-27.293-5.058-15.504-.707-20.152-.86-59.402-.86-39.254 0-43.902.149-59.402.856-14.332.656-22.118 3.05-27.293 5.062a45.483 45.483 0 0 0-16.903 10.996 45.572 45.572 0 0 0-11 16.903c-2.011 5.18-4.406 12.965-5.058 27.297-.707 15.5-.86 20.148-.86 59.402 0 39.25.153 43.898.86 59.402.652 14.332 3.047 22.114 5.058 27.293a45.563 45.563 0 0 0 10.996 16.903 45.514 45.514 0 0 0 16.903 10.996c5.18 2.015 12.965 4.41 27.297 5.062 15.5.707 20.144.856 59.398.856 39.258 0 43.906-.149 59.402-.856 14.332-.652 22.118-3.047 27.297-5.062a48.68 48.68 0 0 0 27.899-27.899c2.011-5.18 4.406-12.96 5.062-27.293.707-15.504.856-20.152.856-59.402 0-39.254-.149-43.902-.856-59.402-.652-14.332-3.047-22.118-5.062-27.297zM256 331.485c-41.691 0-75.488-33.794-75.488-75.485s33.797-75.484 75.488-75.484c41.688 0 75.484 33.793 75.484 75.484S297.688 331.484 256 331.484zm78.469-136.313c-9.742 0-17.64-7.899-17.64-17.64s7.898-17.641 17.64-17.641 17.64 7.898 17.64 17.64c-.004 9.742-7.898 17.64-17.64 17.64zm0 0"
                      ></path>
                      <path
                        d="M256 0C114.637 0 0 114.637 0 256s114.637 256 256 256 256-114.637 256-256S397.363 0 256 0zm146.113 316.605c-.71 15.649-3.199 26.333-6.832 35.684a75.164 75.164 0 0 1-42.992 42.992c-9.348 3.633-20.035 6.117-35.68 6.832-15.675.715-20.683.887-60.605.887-39.926 0-44.93-.172-60.61-.887-15.644-.715-26.331-3.199-35.68-6.832a72.018 72.018 0 0 1-26.038-16.957 72.044 72.044 0 0 1-16.953-26.035c-3.633-9.348-6.121-20.035-6.832-35.68-.723-15.68-.891-20.687-.891-60.609s.168-44.93.887-60.605c.71-15.649 3.195-26.332 6.828-35.684a72.013 72.013 0 0 1 16.96-26.035 72.003 72.003 0 0 1 26.036-16.957c9.352-3.633 20.035-6.117 35.684-6.832C211.07 109.172 216.078 109 256 109s44.93.172 60.605.89c15.649.712 26.332 3.196 35.684 6.825a72.061 72.061 0 0 1 26.04 16.96 72.027 72.027 0 0 1 16.952 26.036c3.637 9.352 6.121 20.035 6.836 35.684.715 15.675.883 20.683.883 60.605s-.168 44.93-.887 60.605zm0 0"
                      ></path>
                    </g>
                  </svg>
                </a>
              </div>
            </div>

            <div class="footer__contacts">
              <div class="footer__row">
                <img src="./HOME_files/location.svg" alt="icon" />
                <address class="footer__contact">
                  Linzer Gasse 20 A-5020 Salzburg
                </address>
              </div>
              <div class="footer__row">
                <img src="./HOME_files/email.svg" alt="icon" />
                <a href="mailto:welcome@stadtkrug.at" class="footer__contact">
                  welcome@stadtkrug.at
                </a>
              </div>
              <div class="footer__row">
                <img src="./HOME_files/phone.svg" alt="icon" />
                <a href="tel:+43 662 873545" class="footer__contact">
                  +43 662 873545
                </a>
              </div>
            </div>
            <nav class="footer__nav">
              <ul class="footer__list">
                <li class="">
                  <a href="https://stadtkrug.at/" class="footer__link">Home</a>
                </li>
                <li class="">
                  <a href="https://stadtkrug.at/zimmer/" class="footer__link"
                    >Zimmer</a
                  >
                </li>
                <li class="">
                  <a href="https://stadtkrug.at/anfahrt/" class="footer__link"
                    >Anreise &amp; Check-In</a
                  >
                </li>
                <li class="">
                  <a href="https://stadtkrug.at/gallery/" class="footer__link"
                    >Galerie</a
                  >
                </li>
                <li class="">
                  <a href="https://stadtkrug.at/about/" class="footer__link"
                    >Über uns</a
                  >
                </li>
              </ul>
            </nav>

            <div class="footer__col">
              <p class="footer__text">
                Besuchen Sie unser Hotel, wir bereiten Ihnen einen wunderschönen
                Aufenthalt.
              </p>
              <form class="footer__form">
                <input
                  type="email"
                  class="footer__input"
                  placeholder="Newsletter"
                />
                <button class="footer__button">SENDEN</button>
              </form>
            </div>

            <div class="footer__map">
              <div class="footer__map-row">
                <a href="https://stadtkrug.eu/kontakt/">Kontakt </a
                ><a href="https://stadtkrug.eu/impressum/">Impressum</a>
                <span>|</span>
                <a href="https://stadtkrug.eu/datenschutzerklarung/"
                  >Datenschutzerklärung</a
                >
              </div>
              <a
                href="https://stadtkrug.at/kontakt/#map"
                class="footer__wp-img wp-img-center"
              >
                <img src="./HOME_files/map-img.jpg" alt="image" />
              </a>
            </div>
          </div>
          <div class="footer__bottom">
            <span
              >Copyright © STADTKRUG 2024. Alle rechte vorbehalten. Powered by
              SIT Team</span
            >
          </div>
        </div>
      </footer>
    </div>
    <script src="./HOME_files/fslightbox.js"></script>
    <script src="./HOME_files/app.min.js"></script>
    <script src="./HOME_files/zimmer-content.js"></script>
    <div
      class="brave_popup brave_popup--popup"
      id="brave_popup_881"
      data-loaded="true"
      data-triggerfulfilled="true"
    >
      <!-- <p></p> -->
      <div
        id="brave_popup_881__step__0"
        class="brave_popup__step_wrap brave_popup__step--mobile-noContent brave_popup__step_wrap--show"
      >
        <div
          class="brave_popup__step brave_popup__step__desktop position_center_right closeButton_icon brave_popup__step--boxed closeButtonPosition_inside_right"
          data-nomobilecontent="true"
          data-scrollock=""
          data-width="234"
          data-height="420"
          data-open="true"
          style="z-index: 99999"
          data-exitanimlength="0.5"
          data-layout="boxed"
          data-position="center_right"
        >
          <div class="brave_popup__step__inner">
            <div class="brave_popupSections__wrap" style="">
              <div class="brave_popupMargin__wrap" tabindex="0">
                <div class="brave_popup__step__close">
                  <div
                    class="brave_popup__close brave_popup__close--inside_right brave_popup__close--icon"
                    onclick="brave_close_popup(&#39;881&#39;, 0, false)"
                    onkeypress="if(event.key == &#39;Enter&#39;) { brave_close_popup(&#39;881&#39;, 0, false) }"
                    tabindex="0"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <rect x="0" fill="none" width="20" height="20"></rect>
                      <g>
                        <path
                          d="M14.95 6.46L11.41 10l3.54 3.54-1.41 1.41L10 11.42l-3.53 3.53-1.42-1.42L8.58 10 5.05 6.47l1.42-1.42L10 8.58l3.54-3.53z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="brave_popup__step__popup">
                  <div class="brave_popup__step__content">
                    <div class="brave_popup__step__elements">
                      <div class="brave_popup__elements_wrap">
                        <div
                          id="brave_element--OPoH6TULbGJk4xdfrS_"
                          class="brave_element brave_element--text brave_element--has-click-action brave_element--text_advanced"
                          style=""
                        >
                          <div class="brave_element__wrap">
                            <div class="brave_element__styler">
                              <div class="brave_element__inner">
                                <a
                                  class="brave_element__inner_link"
                                  onclick=""
                                  href="https://neo.cultbooking.com/CPC/?agentcode=58078&amp;hotelcode=6440"
                                  target="_blank"
                                >
                                  <div class="brave_element__text_inner">
                                    BUCHEN SIE DIREKT FÜR DEN
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          id="brave_element--OPoIzL6QeKXSi6ey-vc"
                          class="brave_element brave_element--text brave_element--has-click-action brave_element--text_advanced"
                        >
                          <div class="brave_element__wrap">
                            <div class="brave_element__styler">
                              <div class="brave_element__inner">
                                <a
                                  class="brave_element__inner_link"
                                  onclick=""
                                  href="https://neo.cultbooking.com/CPC/?agentcode=58078&amp;hotelcode=6440"
                                  target="_blank"
                                >
                                  <div class="brave_element__text_inner">
                                    BESTEN PREIS
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          id="brave_element--OPoKP9x4TDhm-TTkKCg"
                          class="brave_element brave_element--image brave_element--hasHoverAnim brave_element--image--hover_enlarge brave_element--has-click-action"
                        >
                          <div class="brave_element__wrap">
                            <div class="brave_element__styler">
                              <div class="brave_element__inner">
                                <div class="brave_element__image_inner">
                                  <a
                                    class="brave_element__inner_link"
                                    onclick=""
                                    href="https://neo.cultbooking.com/CPC/?agentcode=58078&amp;hotelcode=6440"
                                    target="_blank"
                                  >
                                    <img
                                      class="brave_element__image brave_element_img_item skip-lazy no-lazyload"
                                      data-lazy="https://stadtkrug.eu/wp-content/uploads/2023/11/Stadtkrug_Hotel_Logo-1.png"
                                      src="./HOME_files/Stadtkrug_Hotel_Logo-1.png"
                                      alt=""
                                    />
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          id="brave_element--OPoN1k5FSHKcb1P7jJV"
                          class="brave_element brave_element--social brave_element--social_hover_enlarge"
                        >
                          <div class="brave_element__wrap">
                            <div class="brave_element__styler">
                              <div class="brave_element__inner">
                                <div class="brave_element__social">
                                  <a href="http://instagram.com/stadtkrug_hotel"
                                    ><div
                                      class="brave_social_link"
                                      id="-OPoH6f11xceLB6yhfY8__social"
                                    >
                                      <div class="brave_social_icon">
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          viewBox="0 0 448 512"
                                        >
                                          <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                          ></path>
                                        </svg>
                                      </div>
                                      <div
                                        class="brave_social_link__background"
                                      >
                                        <svg
                                          id="-OPoN1k5FSHKcb1P7jJV__shapeSvg"
                                          fill="rgba(0,0,0, 1)"
                                          style="width: 100%; height: 100%"
                                          version="1.1"
                                          xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                          xml:space="preserve"
                                          preserveAspectRatio="none"
                                          x="0px"
                                          y="0px"
                                          width="40px"
                                          height="40px"
                                          viewBox="0 0 40 40"
                                          enable-background="new 0 0 40 40"
                                        >
                                          <circle
                                            fill=""
                                            cx="20"
                                            cy="20"
                                            r="20"
                                          ></circle>
                                        </svg>
                                      </div></div></a
                                  ><a
                                    href="https://www.facebook.com/AltstadthotelStadtkrugSalzburg/"
                                    ><div
                                      class="brave_social_link"
                                      id="-OPoH6f11xceLB6yhfY9__social"
                                    >
                                      <div class="brave_social_icon">
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          viewBox="0 0 320 512"
                                        >
                                          <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                          ></path>
                                        </svg>
                                      </div>
                                      <div
                                        class="brave_social_link__background"
                                      >
                                        <svg
                                          id="-OPoN1k5FSHKcb1P7jJV__shapeSvg"
                                          fill="rgba(0,0,0, 1)"
                                          style="width: 100%; height: 100%"
                                          version="1.1"
                                          xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                          xml:space="preserve"
                                          preserveAspectRatio="none"
                                          x="0px"
                                          y="0px"
                                          width="40px"
                                          height="40px"
                                          viewBox="0 0 40 40"
                                          enable-background="new 0 0 40 40"
                                        >
                                          <circle
                                            fill=""
                                            cx="20"
                                            cy="20"
                                            r="20"
                                          ></circle>
                                        </svg>
                                      </div></div
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="brave_popup__step brave_popup__step__mobile brave_popup__step--noContent position_center closeButton_icon brave_popup__step--boxed closeButtonPosition_inside_right has_overlay"
          data-width="320"
          data-scrollock=""
          data-height="480"
          data-open="false"
          style="z-index: 99999"
          data-nomobilecontent="true"
          data-exitanimlength="0.5"
          data-layout="boxed"
          data-position="center"
        >
          <div class="brave_popup__step__inner">
            <div class="brave_popupSections__wrap">
              <div class="brave_popupMargin__wrap">
                <div class="brave_popup__step__close">
                  <div
                    class="brave_popup__close brave_popup__close--inside_right brave_popup__close--icon"
                    onclick="brave_close_popup(&#39;881&#39;, 0, false)"
                    onkeypress="if(event.key == &#39;Enter&#39;) { brave_close_popup(&#39;881&#39;, 0, false) }"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                      <rect x="0" fill="none" width="20" height="20"></rect>
                      <g>
                        <path
                          d="M14.95 6.46L11.41 10l3.54 3.54-1.41 1.41L10 11.42l-3.53 3.53-1.42-1.42L8.58 10 5.05 6.47l1.42-1.42L10 8.58l3.54-3.53z"
                        ></path>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="brave_popup__step__popup">
                  <div class="brave_popup__step__content">
                    <div class="brave_popup__step__elements">
                      <div class="brave_popup__elements_wrap"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="brave_popup__step__overlay"></div>
        </div>
      </div>
    </div>
    <script type="speculationrules">
      {
        "prefetch": [
          {
            "source": "document",
            "where": {
              "and": [
                { "href_matches": "\/*" },
                {
                  "not": {
                    "href_matches": [
                      "\/wp-*.php",
                      "\/wp-admin\/*",
                      "\/wp-content\/uploads\/*",
                      "\/wp-content\/*",
                      "\/wp-content\/plugins\/*",
                      "\/wp-content\/themes\/stadtkrug-theme\/*",
                      "\/*\\?(.+)"
                    ]
                  }
                },
                { "not": { "selector_matches": "a[rel~=\"nofollow\"]" } },
                {
                  "not": { "selector_matches": ".no-prefetch, .no-prefetch a" }
                }
              ]
            },
            "eagerness": "conservative"
          }
        ]
      }
    </script>
    <div id="bravepop_element_tooltip"></div>
    <div id="bravepop_element_lightbox">
      <div
        id="bravepop_element_lightbox_close"
        onclick="brave_lightbox_close()"
      ></div>
      <div id="bravepop_element_lightbox_content"></div>
    </div>
    <div id="wa" class="wa__widget_container">
      <div class="wa__btn_popup" style="left: unset; right: 30px; bottom: 30px">
        <div
          class="wa__btn_popup_txt"
          style="
            display: block;
            left: unset;
            right: 100%;
            margin-right: 7px;
            margin-left: 0px;
            width: 156px;
          "
        >
          <span>Online Gesprächspartner</span>
        </div>
        <div
          class="wa__btn_popup_icon"
          style="background: rgb(45, 183, 66)"
        ></div>
      </div>
      <div
        class="wa__popup_chat_box"
        style="left: unset; right: 30px; bottom: 102px"
      >
        <div class="wa__popup_heading" style="background: rgb(45, 183, 66)">
          <div
            class="wa__popup_title"
            style="color: rgb(255, 255, 255); font-size: 18px"
          >
            Ein Gespräch Starten
          </div>
          <div
            class="wa__popup_intro"
            style="color: rgb(217, 235, 198); font-size: 12px"
          >
            Hi! Klicken Sie auf eines unserer Mitglieder unten, um zu chatten
            <strong>WhatsApp</strong>
          </div>
        </div>
        <div class="wa__popup_content wa__popup_content_left">
          <div class="wa__popup_notice" style="font-size: 11px">
            Die Rezeption antwortet in der Regel in wenigen Minuten.
          </div>
          <div class="wa__popup_content_list">
            <div class="wa__popup_content_item pointer-disable">
              <a
                target="_blank"
                href="https://api.whatsapp.com/send?phone=436705054122&amp;text=Rezeption%20Stadtkrug"
                rel="nofollow noopener noreferrer"
                class="wa__stt wa__stt_online"
                ><div class="wa__popup_avatar nta-default-avt">
                  <svg
                    width="48px"
                    height="48px"
                    class="nta-whatsapp-default-avatar"
                    version="1.1"
                    id="Layer_1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px"
                    y="0px"
                    viewBox="0 0 512 512"
                    style="enable-background: new 0 0 512 512"
                    xml:space="preserve"
                  >
                    <path
                      style="fill: #ededed"
                      d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
            S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"
                    ></path>
                    <path
                      style="fill: #55cd6c"
                      d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
            c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
            c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"
                    ></path>
                    <path
                      style="fill: #fefefe"
                      d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
            c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
            c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
            c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
            c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
            l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"
                    ></path>
                  </svg>
                </div>
                <div class="wa__popup_txt">
                  <div style="font-size: 14px" class="wa__member_name">
                    Rezeption
                  </div>
                  <div style="font-size: 11px" class="wa__member_duty">
                    Stadtkrug Hotel Salzburg
                  </div>
                </div></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      brave_popup_data[881] = {
        title: "side popup",
        type: "popup",
        fonts: [],
        advancedAnimation: false,
        hasAnimation: true,
        hasContAnim: false,
        animationData: [
          {
            desktop: {
              elements: [
                {
                  animation: {
                    load: {
                      props: {
                        start: { opacity: 0, posx: -200 },
                        end: { opacity: 100, posx: 0 },
                      },
                      duration: 500,
                      delay: 0,
                      easing: "easeInSine",
                      preset: "fadeInLeftBig",
                    },
                    exit: {},
                    continious: {},
                    custom_1: {},
                    custom_2: {},
                    custom_3: {},
                  },
                  id: "popup",
                  top: "",
                  left: "",
                },
                {
                  animation: {
                    load: {
                      props: {
                        start: { posy: -168, opacity: 0 },
                        end: { posy: 32, opacity: 100 },
                      },
                      duration: 500,
                      delay: 0,
                      easing: "easeInSine",
                      preset: "fadeInTopBig",
                    },
                    exit: {},
                    continious: {},
                    custom_1: {},
                    custom_2: {},
                    custom_3: {},
                  },
                  id: "-OPoH6TULbGJk4xdfrS_",
                  top: 32,
                  left: 15.5,
                },
              ],
              totalDuration: { load: 500 },
            },
            mobile: { elements: [], totalDuration: 0 },
          },
        ],
        videoData: [],
        hasYoutube: false,
        hasVimeo: false,
        settings: {
          goal: "newsletter",
          audience: { devices: "all", userType: "all" },
          frequency: {},
          placement: { placementType: "sitewide" },
          trigger: {
            triggerType: "time,scroll",
            scrolltype: "ten",
            time: { hours: "00", minutes: "00", seconds: "10" },
          },
          goalAction: { type: "step", step: 0 },
        },
        close: [{ desktop: {}, mobile: {} }],
        forceLoad: false,
        forceStep: false,
        hasDesktopEmbed: false,
        hasMobileEmbed: false,
        schedule: {},
        embedLock: false,
        ajaxLoad: false,
        ajaxLoaded: false,
        timers: [],
      };
      document.addEventListener("DOMContentLoaded", function (event) {
        brave_init_popup(881, brave_popup_data[881]);
      });
    </script>
    <style type="text/css">
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popup__step__inner {
        width: 234px;
        height: 420px;
        margin-top: -210px;
        font-family: Arial;
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_element__wrap {
        font-family: Arial;
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popupMargin__wrap {
        top: 0px;
        left: 0px;
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popup__step__popup {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.17);
        border: 2px solid rgba(189, 168, 133, 1);
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popup__step__content {
        background-color: rgba(255, 255, 255, 1);
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popup__step__overlay {
        background-color: rgba(0, 0, 0, 0.7);
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popup__close {
        font-size: 24px;
        width: 24px;
        color: rgba(124, 103, 13, 1);
        top: -32px;
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popup__close
        svg {
        width: 24px;
        height: 24px;
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popup__close
        svg
        path {
        fill: rgba(124, 103, 13, 1);
      }
      #brave_popup_881__step__0
        .brave_popup__step__desktop
        .brave_popupSections__wrap.brave_element-881_0_openAnim {
        animation: bravefadeInLeftBig 0.5s linear;
        animation-timing-function: linear;
      }
      #brave_popup_881__step__0 #brave_element--OPoH6TULbGJk4xdfrS_ {
        width: 202px;
        height: 60px;
        top: 32px;
        left: 15.5px;
        z-index: 0;
      }
      #brave_popup_881__step__0
        #brave_element--OPoH6TULbGJk4xdfrS_.brave_element--OPoH6TULbGJk4xdfrS__0_openAnim {
        animation: bravefadeInTopBig 0.5s linear;
        animation-timing-function: linear;
      }
      #brave_popup_881__step__0 #brave_element--OPoIzL6QeKXSi6ey-vc {
        width: 202px;
        height: 32px;
        top: 87px;
        left: 12.5px;
        z-index: 1;
      }
      #brave_popup_881__step__0
        #brave_element--OPoIzL6QeKXSi6ey-vc.brave_element--OPoIzL6QeKXSi6ey-vc_0_openAnim {
        animation: bravefadeInBottomBig 0.5s linear;
        animation-timing-function: linear;
      }
      #brave_popup_881__step__0 #brave_element--OPoKP9x4TDhm-TTkKCg {
        width: 194px;
        height: 194px;
        top: 131px;
        left: 18px;
        z-index: 2;
      }
      #brave_popup_881__step__0 #brave_element--OPoN1k5FSHKcb1P7jJV {
        width: 120px;
        height: 70px;
        top: 328px;
        left: 56px;
        z-index: 3;
      }
      #brave_popup_881__step__0
        .brave_popup__step__mobile
        .brave_popup__step__inner {
        width: 320px;
        height: 480px;
        margin-top: -240px;
        font-family: Arial;
      }
      #brave_popup_881__step__0
        .brave_popup__step__mobile
        .brave_element__wrap {
        font-family: Arial;
      }
      #brave_popup_881__step__0
        .brave_popup__step__mobile
        .brave_popup__step__content {
        background-color: rgba(255, 255, 255, 1);
      }
      #brave_popup_881__step__0
        .brave_popup__step__mobile
        .brave_popup__step__overlay {
        background-color: rgba(0, 0, 0, 0.7);
      }
      #brave_popup_881__step__0 .brave_popup__step__mobile .brave_popup__close {
        font-size: 24px;
        width: 24px;
        color: rgba(0, 0, 0, 1);
        top: -32px;
      }
      #brave_popup_881__step__0
        .brave_popup__step__mobile
        .brave_popup__close
        svg {
        width: 24px;
        height: 24px;
      }
      #brave_popup_881__step__0
        .brave_popup__step__mobile
        .brave_popup__close
        svg
        path {
        fill: rgba(0, 0, 0, 1);
      }
      #brave_popup_881__step__0
        #brave_element--OPoH6TULbGJk4xdfrS_
        .brave_element__text_inner {
        text-align: center;
        font-size: 19px;
        font-family: "Arial Black";
        line-height: 1.2em;
        letter-spacing: -0.3px;
        color: rgba(0, 0, 0, 1);
      }
      #brave_popup_881__step__0
        #brave_element--OPoIzL6QeKXSi6ey-vc
        .brave_element__text_inner {
        text-align: center;
        font-size: 23px;
        font-family: "Arial Black";
        line-height: 1.2em;
        letter-spacing: -0.3px;
        color: rgba(128, 0, 32, 1);
      }
      #brave_popup_881__step__0
        #brave_element--OPoKP9x4TDhm-TTkKCg
        .brave_element__styler {
      }
      #brave_popup_881__step__0 #brave_element--OPoKP9x4TDhm-TTkKCg img {
        object-position: 0% 50%;
      }
      #brave_popup_881__step__0
        #brave_element--OPoN1k5FSHKcb1P7jJV
        .brave_social_icon
        svg {
        width: 29px;
        height: 29px;
      }
      #brave_popup_881__step__0
        #brave_element--OPoN1k5FSHKcb1P7jJV
        .brave_element__social
        a {
        width: 44px;
        height: 44px;
      }
    </style>
    <!-- <link rel='stylesheet' id='trustindex-feed-widget-css-instagram-css' href='https://stadtkrug.at/wp-content/uploads/trustindex-feed-instagram-widget.css?ver=1736946052' type='text/css' media='all' /> -->
    <!-- <link rel='stylesheet' id='bravepop_front_css-css' href='https://stadtkrug.at/wp-content/plugins/bravepopup-pro/assets/css/frontend.min.css?ver=6.8.2' type='text/css' media='all' /> -->
    <link
      rel="stylesheet"
      type="text/css"
      href="./HOME_files/4oy4a(1).css"
      media="all"
    />
    <script
      type="text/javascript"
      src="./HOME_files/hooks.min.js"
      id="wp-hooks-js"
    ></script>
    <script
      type="text/javascript"
      src="./HOME_files/i18n.min.js"
      id="wp-i18n-js"
    ></script>
    <script type="text/javascript" id="wp-i18n-js-after">
      /* <![CDATA[ */
      wp.i18n.setLocaleData({ "text direction\u0004ltr": ["ltr"] });
      /* ]]> */
    </script>
    <script
      type="text/javascript"
      src="./HOME_files/index.js"
      id="swv-js"
    ></script>
    <script type="text/javascript" id="contact-form-7-js-translations">
      /* <![CDATA[ */
      (function (domain, translations) {
        var localeData =
          translations.locale_data[domain] || translations.locale_data.messages;
        localeData[""].domain = domain;
        wp.i18n.setLocaleData(localeData, domain);
      })("contact-form-7", {
        "translation-revision-date": "2025-05-24 10:46:16+0000",
        generator: "GlotPress\/4.0.1",
        domain: "messages",
        locale_data: {
          messages: {
            "": {
              domain: "messages",
              "plural-forms": "nplurals=2; plural=n != 1;",
              lang: "de",
            },
            "This contact form is placed in the wrong place.": [
              "Dieses Kontaktformular wurde an der falschen Stelle platziert.",
            ],
            "Error:": ["Fehler:"],
          },
        },
        comment: { reference: "includes\/js\/index.js" },
      });
      /* ]]> */
    </script>
    <script type="text/javascript" id="contact-form-7-js-before">
      /* <![CDATA[ */
      var wpcf7 = {
        api: {
          root: "https:\/\/stadtkrug.at\/wp-json\/",
          namespace: "contact-form-7\/v1",
        },
      };
      /* ]]> */
    </script>
    <script
      type="text/javascript"
      src="./HOME_files/index(1).js"
      id="contact-form-7-js"
    ></script>
    <script
      type="text/javascript"
      src="./HOME_files/njt-whatsapp.js"
      id="nta-wa-libs-js"
    ></script>
    <script type="text/javascript" id="nta-js-global-js-extra">
      /* <![CDATA[ */
      var njt_wa_global = {
        ajax_url: "https:\/\/stadtkrug.at\/wp-admin\/admin-ajax.php",
        nonce: "08432e63be",
        defaultAvatarSVG:
          '<svg width="48px" height="48px" class="nta-whatsapp-default-avatar" version="1.1" id="Layer_1" xmlns="http:\/\/www.w3.org\/2000\/svg" xmlns:xlink="http:\/\/www.w3.org\/1999\/xlink" x="0px" y="0px"\n            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">\n            <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0\n            S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"\/>\n            <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662\n            c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234\n            c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"\/>\n            <path style="fill:#FEFEFE;" d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297\n            c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048\n            c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359\n            c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248\n            c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062\n            l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"\/>\n        <\/svg>',
        defaultAvatarUrl:
          "https:\/\/stadtkrug.at\/wp-content\/plugins\/wp-whatsapp\/assets\/img\/whatsapp_logo.svg",
        timezone: "+01:00",
        i18n: { online: "Online", offline: "Offline" },
        urlSettings: { onDesktop: "api", onMobile: "api", openInNewTab: "ON" },
      };
      /* ]]> */
    </script>
    <script
      type="text/javascript"
      src="./HOME_files/whatsapp-button.js"
      id="nta-js-global-js"
    ></script>
    <script type="text/javascript" id="bravepop_front_js-js-extra">
      /* <![CDATA[ */
      var bravepop_global = {
        loggedin: "false",
        isadmin: "false",
        referer: "",
        security: "9828174178",
        goalSecurity: "f915908dd8",
        couponSecurity: "b682cada3d",
        cartURL: "",
        ajaxURL: "https:\/\/stadtkrug.at\/wp-admin\/admin-ajax.php",
        field_required: "Required",
        no_html_allowed: "No Html Allowed",
        invalid_number: "Invalid Number",
        invalid_email: "Invalid Email",
        invalid_url: "Invalid URL",
        invalid_date: "Invalid Date",
        fname_required: "First Name is Required.",
        lname_required: "Last Name is Required.",
        username_required: "Username is Required.",
        email_required: "Email is Required.",
        email_invalid: "Invalid Email addresss.",
        pass_required: "Password is Required.",
        pass_short: "Password is too Short.",
        yes: "Yes",
        no: "No",
        login_error:
          "Something Went Wrong. Please contact the Site administrator.",
        pass_reset_success:
          "Please check your Email for the Password reset link.",
        customFonts: [],
      };
      /* ]]> */
    </script>
    <script
      type="text/javascript"
      src="./HOME_files/brave.js"
      id="bravepop_front_js-js"
    ></script>
    <script type="text/javascript" id="nta-js-popup-js-extra">
      /* <![CDATA[ */
      var njt_wa = {
        gdprStatus: "1",
        accounts: [
          {
            accountId: 464,
            accountName: "Rezeption",
            avatar: "",
            number: "+436705054122",
            title: "Stadtkrug Hotel Salzburg",
            predefinedText: "Rezeption Stadtkrug ",
            willBeBackText: "I will be back in [njwa_time_work]",
            dayOffsText: "I will be back soon",
            isAlwaysAvailable: "ON",
            daysOfWeekWorking: {
              sunday: {
                isWorkingOnDay: "OFF",
                workHours: [{ startTime: "08:00", endTime: "17:30" }],
              },
              monday: {
                isWorkingOnDay: "OFF",
                workHours: [{ startTime: "08:00", endTime: "17:30" }],
              },
              tuesday: {
                isWorkingOnDay: "OFF",
                workHours: [{ startTime: "08:00", endTime: "17:30" }],
              },
              wednesday: {
                isWorkingOnDay: "OFF",
                workHours: [{ startTime: "08:00", endTime: "17:30" }],
              },
              thursday: {
                isWorkingOnDay: "OFF",
                workHours: [{ startTime: "08:00", endTime: "17:30" }],
              },
              friday: {
                isWorkingOnDay: "OFF",
                workHours: [{ startTime: "08:00", endTime: "17:30" }],
              },
              saturday: {
                isWorkingOnDay: "OFF",
                workHours: [{ startTime: "08:00", endTime: "17:30" }],
              },
            },
          },
        ],
        options: {
          display: {
            displayCondition: "includePages",
            includePages: ["11", "35", "58", "70"],
            excludePages: [],
            includePosts: [],
            showOnDesktop: "ON",
            showOnMobile: "ON",
            time_symbols: "h:m",
          },
          styles: {
            title: "Ein Gespr\u00e4ch Starten",
            responseText:
              "Die Rezeption antwortet in der Regel in wenigen Minuten.",
            description:
              "Hi! Klicken Sie auf eines unserer Mitglieder unten, um zu chatten <strong>WhatsApp<\/strong>",
            backgroundColor: "#2db742",
            textColor: "#ffffff",
            titleSize: "18",
            accountNameSize: "14",
            descriptionTextSize: "12",
            regularTextSize: "11",
            scrollHeight: "500",
            isShowScroll: "OFF",
            isShowResponseText: "OFF",
            btnLabel: "Online Gespr\u00e4chspartner",
            btnLabelWidth: "156",
            btnPosition: "right",
            btnLeftDistance: "30",
            btnRightDistance: "30",
            btnBottomDistance: "30",
            isShowBtnLabel: "ON",
            isShowGDPR: "ON",
            gdprContent:
              "Bitte akzeptieren Sie zuerst unsere Datenschutzrichtlinie, um ein Gespr\u00e4ch zu beginnen.",
            isShowPoweredBy: "ON",
          },
          analytics: {
            enabledGoogle: "OFF",
            enabledFacebook: "OFF",
            enabledGoogleGA4: "OFF",
          },
        },
      };
      /* ]]> */
    </script>
    <script
      type="text/javascript"
      src="./HOME_files/whatsapp-popup.js"
      id="nta-js-popup-js"
    ></script>
    <script
      type="application/ld+json"
      data-src="https://cdn.trustindex.io/loader-feed.js?ver=9468a4c3d903a86|wordpress"
      id="trustindex-feed-data-9468a4c3d903a86-js"
      data-ti-inited="true"
      data-ti-loaded="true"
    >
      {
        "@context": "http://schema.org",
        "container": "trustindex-feed-container-9468a4c3d903a86",
        "data": {
          "sources": {
            "Instagram|17841402300776677": {
              "type": "Instagram",
              "user": {
                "avatar_url": "https://scontent-iad3-1.xx.fbcdn.net/v/t51.2885-15/481865518_957768416498369_3060240472500945872_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=7d201b&_nc_ohc=9YvEjPCVMlgQ7kNvwFN1FJt&_nc_oc=AdnhUMt8WgAP753Lsn6jdzdLlwX8z4WEtHKiCt9ZSdvQXCTvqOB6Xz7NsKzoWxgbVKg&_nc_zt=23&_nc_ht=scontent-iad3-1.xx&edm=AL-3X8kEAAAA&oh=00_AfWHDT0zp63Mj_g6Gstl2KD6B4qM3nOBJv0Obbgp6VHuVg&oe=68A9D408",
                "author_name": "stadtkrug_hotel",
                "author_full_name": "Hotel Stadtkrug Salzburg",
                "author_bio": "",
                "profile_url": "https://www.instagram.com/stadtkrug_hotel",
                "post_num": 238,
                "follower_num": 1348,
                "follow_num": 1021
              }
            }
          },
          "posts": [
            {
              "id": "18155746717370291",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "\ud83d\udce3 LAST CALL f\u00fcr deinen City-Trip nach Salzburg! Spontan ist immer am sch\u00f6nsten \u2013 und du hast Gl\u00fcck: Wir haben noch ein paar Zimmer dieses Wochenende frei! \ud83e\udd29\u2728\n\nPack deine/n Bestie ein, g\u00f6nnt euch eine Auszeit in der Mozartstadt und erlebt Salzburg von seiner charmantesten Seite. \ud83c\udfd9\ufe0f\ud83d\udcab\n\n\ud83d\udc49 Direktbuchung = Bestpreis\n\nWir freuen uns auf euch \ud83d\udc99 \n\n#stadtkrugsalzburg #boutiquehotel #citytrip #salzburgliebe #wochenendtrip #girlsgetaway #letsgosalzburg",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/505442516_18466361704076693_8828461839638785498_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=101&ccb=1-7&_nc_sid=18de74&_nc_ohc=F5O3WihlN9wQ7kNvwGFN-ri&_nc_oc=AdkaLCHvqeJIssb0_Cjdxj92EGXPSV90G9qwnslmO6IC579byF8a9yaRJZi0pGioO7M&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfV2u7Jqar8lhpXNPQ1EiuiELDjM4ib9augXx4EC1Kr1Gg&oe=68A9A787",
                  "image_urls": {
                    "size": "1168x1138",
                    "large": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/0.webp",
                    "medium": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/0m.webp",
                    "small": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/506043581_18466361722076693_3268992646537992115_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=107&ccb=1-7&_nc_sid=18de74&_nc_ohc=mjhPSPxkKkQQ7kNvwFTuhoX&_nc_oc=Adm5o7N89dtHgZQXiqDq4lsg1-2PF1KhOvH_etjlLTwwbOWYGu9q6vp6ZUHtUtDmck0&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWWF6ZlqcL-A3WdpADS67Qv-6IQscaBpok0D8RfCGV10g&oe=68A97DF5",
                  "image_urls": {
                    "size": "828x806",
                    "large": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/1.webp",
                    "medium": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/1m.webp",
                    "small": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/505178936_18466361713076693_3885783249067200828_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=106&ccb=1-7&_nc_sid=18de74&_nc_ohc=8aVj_DMuaCMQ7kNvwFPQweh&_nc_oc=AdlfYk9FHo-SogpIPmTvC2_w_8J1dCETityGIuIHLUldb5tAdIQuVuwPd7axgJt9KGc&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfU7hSj8oYEGGWnIDOSgx4iRcRoP7tD0c_H_IwOz50APZg&oe=68A983C9",
                  "image_urls": {
                    "size": "736x717",
                    "large": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/2.webp",
                    "medium": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/2m.webp",
                    "small": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/2s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/505407489_18466361731076693_6530505673384635599_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=102&ccb=1-7&_nc_sid=18de74&_nc_ohc=6yFt5LMeBZEQ7kNvwEy-YOD&_nc_oc=AdlZlZWbQpUmXoBTXOKVsMKolcv3sPUwluckiDpJ8Kd4sPu8SSJGxZXBRrz3mWvSqoA&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVjXnWDWIiHnFFtpElaiMU4SyqN5XYOXVQ1kHbY55zDXg&oe=68A97EED",
                  "image_urls": {
                    "size": "1200x1169",
                    "large": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/3.webp",
                    "medium": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/3m.webp",
                    "small": "feed/Instagram/3c/ba/3cba030e9dff6fe159428372a5686911088b5f39/3s.webp"
                  }
                }
              ],
              "created_at": "2025-06-13 08:17:05",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DK1X4hXNy84/",
              "comment_count": 2,
              "comments": [
                {
                  "created_at": "2025-07-18 22:38:53",
                  "author_name": "aangeliqueschroder",
                  "text": "Sent you a message \ud83d\udc9a"
                },
                {
                  "created_at": "2025-06-13 08:19:48",
                  "author_name": "dr_ilse_gradwohl",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 52
            },
            {
              "id": "17972276042899227",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "IN SALZBURG gibt es immer was zu sehen \u2013 und jetzt wird\u2019s magisch! \u2728\n\nErlebt Evanescent von @ateliersisu \u2013 eine beeindruckende Kunstinstallation im Innenhof des @domquartier. Riesige schwebende Kugeln, tanzendes Licht und sanfte Kl\u00e4nge schaffen eine Atmosph\u00e4re wie aus einem Traum. \ud83c\udf08\ud83e\udee7\n\nLasst euch verzaubern von diesem fl\u00fcchtigen Moment der Sch\u00f6nheit \u2013 kostenlos und nur vom 10.\u201322. Juni im Rahmen der Sommerszene 2025.\n\n\ud83c\udfa8 Moderne Kunst mitten in der Altstadt \u2013 perfekt f\u00fcr einen inspirierenden Spaziergang mit Familie & Freunden.\n\nUnd danach? Zur\u00fcck ins charmante Boutiquehotel Stadtkrug \u2013 euer Ruhepol im Herzen von Salzburg. \ud83d\udcab\n\n#evanescent #visitsalzburg #salzburg #art #sommerszene #salzburgfestival #stadtkrug #transience #publicinstallation #modernart #bubbles #light #city #familyandfriends",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/504830828_18466168909076693_2268413201234072759_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=101&ccb=1-7&_nc_sid=18de74&_nc_ohc=0DHiAT0iyFAQ7kNvwFGBysy&_nc_oc=AdnWMuP0KseQBnwyblamA_0u3kkNJyvXi0dxN3goeFn92SGL2QUjYLMtykm4AD0PnQA&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVX7iidtXGBpDYcUFKQ0iBpPvYtO52It2TqvLxXhEw3zA&oe=68A9946C",
                  "image_urls": {
                    "size": "1170x1465",
                    "large": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/0.webp",
                    "medium": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/0m.webp",
                    "small": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/504822848_18466168906076693_1861057738130243048_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=108&ccb=1-7&_nc_sid=18de74&_nc_ohc=YasjgqYCYogQ7kNvwF-dtiq&_nc_oc=AdlMUDEsOp8CEpF9NB_Se-n9F9Nscf3xe3Es1DSjgsWDaO9Ao120I-7TIDnuVMSbK8c&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWd_OA20o1GyAsC_vTimRFtew1jOXd2vdez7N64RfmScQ&oe=68A9AD19",
                  "image_urls": {
                    "size": "1170x1465",
                    "large": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/1.webp",
                    "medium": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/1m.webp",
                    "small": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/504503684_18466168924076693_2136719964582247896_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=107&ccb=1-7&_nc_sid=18de74&_nc_ohc=XaRTV2KWDWoQ7kNvwEIK8cH&_nc_oc=Adl2_Vp12If9KKeWVgpIHaM1W2iOGvGbXWVlRoWD_1inVJQYnHU42xiuO2G5eu_5l-c&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfV5MDenzKorh0NE6GLDoRLr3uCybA7Q2wxJNXIymHyasw&oe=68A9A85C",
                  "image_urls": {
                    "size": "1170x1462",
                    "large": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/2.webp",
                    "medium": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/2m.webp",
                    "small": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/2s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/505120565_18466168927076693_8922596161573264970_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=104&ccb=1-7&_nc_sid=18de74&_nc_ohc=7-Xh5jrowLsQ7kNvwGonV_T&_nc_oc=AdlDhq_Fjkwth5FNrRFPiKUo4yitiynXU3P-IBbqkbI35zZdSN15ndA3diD0QjaTtNU&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUDoRnkXNQigI1F-X1zWIuV6euC7S6V0YQCvON0239bTg&oe=68A999AB",
                  "image_urls": {
                    "size": "1170x1465",
                    "large": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/3.webp",
                    "medium": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/3m.webp",
                    "small": "feed/Instagram/14/17/1417825ce5c4ad3a32559420c6b790a7fbe42f56/3s.webp"
                  }
                }
              ],
              "created_at": "2025-06-12 06:24:39",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DKymOJwtb8I/",
              "comment_count": 2,
              "comments": [
                {
                  "created_at": "2025-06-12 06:30:13",
                  "author_name": "sands_italy",
                  "text": "\u2764\ufe0f"
                },
                {
                  "created_at": "2025-06-12 06:25:23",
                  "author_name": "nailsemotions",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 35
            },
            {
              "id": "18071077474943789",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "YOUR CLASSY HOME in Salzburg\ud83e\uddc2\ud83c\udff0 Mitten im Herzen von Salzburg \u2013 in der charmanten Linzer Gasse \u2013 erwartet dich stilvoller Komfort auf h\u00f6chstem Niveau.\n\n\u00d6ffne die T\u00fcr zu einem unserer liebevoll gestalteten Doppelzimmer: Warme Farben, massives Holz und edler Marmor treffen auf moderne Details \u2013 die perfekte Balance aus Tradition und Innovation.\n\nUnd das s\u00fc\u00dfe Extra? Eine Original Mozartkugel auf dem Bett \u2013 ein kleines St\u00fcck Salzburg, das einfach dazugeh\u00f6rt. \u269c\ufe0f",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/504170059_18464959918076693_2650003637165109399_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=103&ccb=1-7&_nc_sid=18de74&_nc_ohc=6y1jL1u8frkQ7kNvwFRqfpD&_nc_oc=AdkwP1q2xOEEiv9bUhPSqzUi7iODIMyiyQc9wdFqGWPMdjZFhwZqVtH3t5g1qImFAcw&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfXU5VnWEPIwiFE6a3eSAmQrmE2PjQah6e8KiY_72EmYuw&oe=68A99882",
                  "image_urls": {
                    "size": "1170x1489",
                    "large": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/0.webp",
                    "medium": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/0m.webp",
                    "small": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/504340309_18464959927076693_3948131609274127885_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=103&ccb=1-7&_nc_sid=18de74&_nc_ohc=HeOIhE8po8cQ7kNvwFO9XR3&_nc_oc=AdmbZbGeze9gilOtCScJMznqLsAH1bYddSW0eC2jkiStDnFk_KRg0mvmitcMjkfBedA&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUb1bMsRRsjP4-U-AYSuf0-z9MlDdBHHS_tSXNo8lJMPw&oe=68A996EC",
                  "image_urls": {
                    "size": "1170x1481",
                    "large": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/1.webp",
                    "medium": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/1m.webp",
                    "small": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/504204553_18464959936076693_3674365482803886947_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=107&ccb=1-7&_nc_sid=18de74&_nc_ohc=vEbp9u-ELTMQ7kNvwGWREtP&_nc_oc=AdkD-YYLgZbdr3cC8_v54Cc9M7XtuAfjMV7IS8TpaldIZAqizDPHhWnI-GGeJ11cYSs&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVAYgfuBbMVVSSLaSvkWMZvcOsPmL2T2S3J14f096Dt9w&oe=68A98F0C",
                  "image_urls": {
                    "size": "1170x1481",
                    "large": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/2.webp",
                    "medium": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/2m.webp",
                    "small": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/2s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/504096868_18464959945076693_5747478884101229879_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=106&ccb=1-7&_nc_sid=18de74&_nc_ohc=9oRoHBgROo0Q7kNvwEGiNak&_nc_oc=AdnSt_1AgtG9eb6z60flwPbpS8b6CdjWyv0re2QP9iSMptQapv6N0SQqD1YJKRavVtQ&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfXkm-vkOsVQ-_1Q42qeigswEExa9xU64rIpqxtd_4oczg&oe=68A9A096",
                  "image_urls": {
                    "size": "1170x1489",
                    "large": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/3.webp",
                    "medium": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/3m.webp",
                    "small": "feed/Instagram/ad/eb/adeb97b07e4345383d4d00823f541c56b4282c67/3s.webp"
                  }
                }
              ],
              "created_at": "2025-06-05 06:54:02",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DKgoBUFNEw8/",
              "comment_count": 3,
              "comments": [
                {
                  "created_at": "2025-06-06 01:00:07",
                  "author_name": "renateg66",
                  "text": "Can\u2019t wait"
                },
                {
                  "created_at": "2025-06-05 14:48:35",
                  "author_name": "eleven_eleven_restaurant",
                  "text": "\ud83d\ude0d\ud83d\ude0d"
                },
                {
                  "created_at": "2025-06-05 07:02:10",
                  "author_name": "ramirez_digital_creation",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 44
            },
            {
              "id": "18058777090969008",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "KULTURTIPP \ud83e\udd29 Diese Woche unbedingt im Wochenplaner vormerken: ein Besuch im Museum der Moderne am M\u00f6nchsberg \ud83d\uddbc\ufe0f\u26f0\ufe0f \u2013 allein der Ausblick \u00fcber Salzburg ist ein Highlight!\n\nNeu im Programm: Opening \u201eEntropic Empire\u201c von Rob Voerman \u2013 eine faszinierende Installation aus Stahl, Glas & Karton \ud83e\udde9\u2728. Dazu kreative Angebote f\u00fcr Kinder \ud83d\udc67\ud83c\udfa8 und ein inspirierendes Museumswochenende!\n\nSee you at the museum!\n@museumdermodernesalzburg \n\n#stadtkrugsalzburg #kulturtipp #museumdermoderne #m\u00f6nchsberg #robvoerman #salzburgkultur #boutiquehotel #artlover #weekendvibes #cityview #salzburgliebe",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/499996803_18462299050076693_8632244634229800493_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=111&ccb=1-7&_nc_sid=18de74&_nc_ohc=3nTeA23eLnoQ7kNvwGoNzo3&_nc_oc=AdkA0nxSkl3Jj04eK7fN-tBEY0bS53D5UQFD6rO_SWdu8o_C-mTqxw5j62D9Ejr2dEY&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfX7eJR--SHMkqR-iqxH0CS1OTsNINVQvXLvLaKUYZ5WSQ&oe=68A97E9F",
                  "image_urls": {
                    "size": "969x947",
                    "large": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/0.webp",
                    "medium": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/0m.webp",
                    "small": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/500330762_18462299062076693_7186392647101733139_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=100&ccb=1-7&_nc_sid=18de74&_nc_ohc=d6OlZMq0x3gQ7kNvwF7bxvV&_nc_oc=Adm8-z0L2qWxDL9VA7C7Kd7PmU7lUzKQcLT24islNeDxh-lTOwza9JpT7lHc9i__ftg&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWSkDPefTslyXwdmqOPt7mdWWr59_gjyKGo2MJwU-e8fQ&oe=68A97F89",
                  "image_urls": {
                    "size": "1142x1114",
                    "large": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/1.webp",
                    "medium": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/1m.webp",
                    "small": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/499957736_18462299068076693_4908496642946594942_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=107&ccb=1-7&_nc_sid=18de74&_nc_ohc=ixiGgp6IlRsQ7kNvwEyrgjo&_nc_oc=AdmLmDfnePsAvzjFHGmRaXM7vbfV_iw_laEreInm7rV209Hvbh7ORzb9cFPx0eoCXIs&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfXFDqjqs8zyhkyZsUs1BbM7PGpBD2aB9jxqGWGjXY49uA&oe=68A98FDA",
                  "image_urls": {
                    "size": "529x518",
                    "large": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/2.webp",
                    "medium": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/2m.webp",
                    "small": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/2s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/500092332_18462299077076693_2270555204190885724_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=107&ccb=1-7&_nc_sid=18de74&_nc_ohc=debCHyYK27MQ7kNvwHzy0YP&_nc_oc=Adm1WgOJl-fkwlFsthWz-Xyh9bjwEPhgYD0T5eIBlG1VmcMiaexGzl0C4XAQ1QM9T7E&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVLAVTcsFXEciiN37Kdpqpz8MQRl3URpt74tfgDmFbcAA&oe=68A99273",
                  "image_urls": {
                    "size": "1145x1122",
                    "large": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/3.webp",
                    "medium": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/3m.webp",
                    "small": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/3s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/500125797_18462299086076693_2658359693014090051_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=110&ccb=1-7&_nc_sid=18de74&_nc_ohc=xv7YqQN15oAQ7kNvwHFsZQG&_nc_oc=AdlXqxyZlOH1BVhl88hPyl07kC7tm5JIpOzbc-vOEZ-4NBKE8H3SGdT2zhrGoWMjE_c&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVWen4OiCbXoGt7WbClsOdBbaqLrJbrDV2kQKuFEwXMeg&oe=68A98DD8",
                  "image_urls": {
                    "size": "1144x1120",
                    "large": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/4.webp",
                    "medium": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/4m.webp",
                    "small": "feed/Instagram/c7/3f/c73fe9d79037e49d8e1121ed109c248ef9a07938/4s.webp"
                  }
                }
              ],
              "created_at": "2025-05-21 07:14:58",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DJ6Cfc_NdGd/",
              "comment_count": 1,
              "comments": [
                {
                  "created_at": "2025-05-21 07:37:37",
                  "author_name": "dr_ilse_gradwohl",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 47
            },
            {
              "id": "18003015482770001",
              "source_id": "feed-plugin",
              "type": "image",
              "text": "MUM!!!! \ud83d\udc9dAm Muttertag sagen wir DANKE! All unsere Hotelg\u00e4ste, die Mamas sind, bekommen am 11. Mai ein Glas Prosecco oder Orangensaft an der Rezeption \u2013 als kleines Zeichen unserer Wertsch\u00e4tzung.\n\nSch\u00f6n, dass es euch gibt! \ud83d\udc95\ud83d\udc95\ud83d\udc95\n\n#Muttertag #DankeMama #BoutiquehotelStadtkrug #Salzburg #ProseccoMoments",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/495549596_18459771697076693_8369028992395201710_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=106&ccb=1-7&_nc_sid=18de74&_nc_ohc=0Q8bhudcbF4Q7kNvwEngCdy&_nc_oc=Adm6hQviOa3lq5QAsSP4Ufsua7IF_j9-X3Aj7dgzQf6o_gGoTvvw47Z3sWwPjw2a2XY&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfXPx7Zz7x56WZ4pMPMxGYBMSO2u_h2haGsIWeEwEmeQSw&oe=68A995F5",
                  "image_urls": {
                    "size": "920x1150",
                    "large": "feed/Instagram/c0/48/c048d34bf1e2f14661c80e2cd4d63509d52b3c84/0.webp",
                    "medium": "feed/Instagram/c0/48/c048d34bf1e2f14661c80e2cd4d63509d52b3c84/0m.webp",
                    "small": "feed/Instagram/c0/48/c048d34bf1e2f14661c80e2cd4d63509d52b3c84/0s.webp"
                  }
                }
              ],
              "created_at": "2025-05-05 16:30:22",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DJR1VW8t76g/",
              "comment_count": 3,
              "comments": [
                {
                  "created_at": "2025-05-06 10:35:17",
                  "author_name": "inspiriaeventservice",
                  "text": "\ud83d\udc9b\u2728\ud83e\udd42"
                },
                {
                  "created_at": "2025-05-06 06:25:44",
                  "author_name": "ramirez_digital_creation",
                  "text": "\u2764\ufe0f"
                },
                {
                  "created_at": "2025-05-05 16:32:58",
                  "author_name": "marktschatz",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 52
            },
            {
              "id": "17905704723138207",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "TAUSEND DANK f\u00fcr einen unvergesslichen Abend \ud83c\udf89Gestern durften wir beim Open Doors Event und der beeindruckenden Kunstausstellung \u201eFrom the Streets to Society\u201c von @cest.pour.toi21 / Erdal Tuncay viele wunderbare G\u00e4ste bei uns im Boutiquehotel Stadtkrug begr\u00fc\u00dfen.\n\nKunst, Musik by @pantelispascal , gute Gespr\u00e4che & ein ganz besonderer Vibe \u2013 wir sind dankbar f\u00fcr euer Kommen und das gro\u00dfartige Feedback!\n\nF\u00fcr alle, die nicht dabei sein konnten:\nUnsere T\u00fcren sind auch weiterhin offen \u2013 f\u00fcr Kunst, Stil und au\u00dfergew\u00f6hnliche Aufenthalte im Herzen von Salzburg.\n\nHappy friday, Jessy & Dominik \ud83c\udfe9\n\n#stadtkrugsalzburg #boutiquehotel #kunstausstellung #fromthestreets #erdaltuncay #openhouse #salzburgcity #artvibes #thankyou",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/491504560_18458131909076693_3482109757629634269_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=102&ccb=1-7&_nc_sid=18de74&_nc_ohc=s8FbJWcivSMQ7kNvwHLSx30&_nc_oc=AdnBco-ZwvIpDF6BX0VHghUawu4r9jaTFq7OyrwMwmkPnkTn_N0pbNaKbDcuI_5LFBQ&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUiJeDUqbahz57vVoVvRddUzda9tE2O4nP3jNRFy0sfAA&oe=68A984CC",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/0.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/0m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/491493267_18458131918076693_5335321024207598536_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=108&ccb=1-7&_nc_sid=18de74&_nc_ohc=PkDx1uY1TPUQ7kNvwEMS-k4&_nc_oc=Adnu7FnKxhfU9ZrWszYexLSw6gfF8dXcKJDI1NJppn9p3oPMWAnqibZzTBbjV-_qMkU&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVftIo1YZI5GZfKWG-M9ubNfw8phnuS-_SEOOhrPQ3pUQ&oe=68A9969A",
                  "image_urls": {
                    "size": "1440x1799",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/1.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/1m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/491446609_18458131927076693_5531725595431259079_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=103&ccb=1-7&_nc_sid=18de74&_nc_ohc=vf8fIuVxaeIQ7kNvwGxrgTz&_nc_oc=Adklpa_4PhMrftXnqWMsvqBeSJeewFC0JvfuUeF7L5IotJamNMjcmxxaqmsBDYhiopc&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfW1lRWbZW8tH8GWB3Dayrm0-Rnr403TYy4XmmAHv50MoQ&oe=68A991A6",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/2.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/2m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/2s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/491442560_18458131939076693_1318530794243129556_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=111&ccb=1-7&_nc_sid=18de74&_nc_ohc=0uRQkU3DQKMQ7kNvwG7CYts&_nc_oc=Adl4DQlD5gBPEcSwvJTEGEK1dwn9br9tKhR6j8B4KJ23EY0zKhiQ4yMbDX2RjUevnp8&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfXaup7BG843_nFAOmnoeie-3kTHx3OShC_v6rRUEbw0PA&oe=68A99EC0",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/3.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/3m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/3s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/491442322_18458131948076693_992558908275960080_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=105&ccb=1-7&_nc_sid=18de74&_nc_ohc=Bq5KSyScMiEQ7kNvwE5Adhl&_nc_oc=Adn0niEVXXQlXAmBAc5gEcEymN4jMYpeGjm6PZUnA63QZ5iDT4jINIOy4I-0qDMmKT0&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWKBx6TuPFnVox_BzX7UBSHx3nXWqTNCV3hRfWKfN2rhw&oe=68A984F3",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/4.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/4m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/4s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/491699799_18458131957076693_2108618624424747571_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=111&ccb=1-7&_nc_sid=18de74&_nc_ohc=IPmfdfzqBfkQ7kNvwG3rRaG&_nc_oc=AdlJX_jb38yZVoObGaxKQIe35-xH9ZVrEWHGq8S4-7HH-9ZdQn0R6jbHURBSlMvlWR8&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfXQRjtIHPfrgDK1lBY7LkWzkBA-SW3_zUhx3IbwensPoA&oe=68A97F7A",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/5.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/5m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/5s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/492030635_18458131966076693_6100870319218149728_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=107&ccb=1-7&_nc_sid=18de74&_nc_ohc=vWx3C5UsjDoQ7kNvwHcvdEu&_nc_oc=AdlN3My3vgvip9w8XUL4x0Dg5mVhy9uTjBhy-UyCo_wV5R6x3tLyQsSLl438oN1HrYQ&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVrLopNyym-GkQxDRbAMwNbV8R_YgCxP2pEixnIzq7SHQ&oe=68A99759",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/6.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/6m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/6s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/491438170_18458131975076693_3985343717661706382_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=100&ccb=1-7&_nc_sid=18de74&_nc_ohc=Yqj4KR4yLt8Q7kNvwHfCxYt&_nc_oc=Adk5NaKOvkWcIWW_PflZ9at0LImUN0b0Ybhj3k5rLFHcE_SO2HyqSqSCv6s5dqXjsNw&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWlQ44E2tIxV_tabBuXu_5fZ_wqfEpiUsRi9MY5aCuHTw&oe=68A9A6BA",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/7.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/7m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/7s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/491442245_18458131984076693_224255051838354843_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=104&ccb=1-7&_nc_sid=18de74&_nc_ohc=2xxQqPbcJxYQ7kNvwGoLRQh&_nc_oc=AdlcQT2Y2zkt0DWnOrOzCLB_tcuLpOaSJCD9tnrFjdaWgthB5obwcD5NTRRN1pUlzG8&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVa1v-le-49pl00_Up11yQbYhP7ZrM8Uh3DvVLibe80ZA&oe=68A9A079",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/8.webp",
                    "medium": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/8m.webp",
                    "small": "feed/Instagram/d8/7e/d87e31ecdd889cbe75959fde56fa74a4a6619dbe/8s.webp"
                  }
                }
              ],
              "created_at": "2025-04-25 09:06:21",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DI3SkjUtYk-/",
              "comment_count": 3,
              "comments": [
                {
                  "created_at": "2025-05-09 19:07:17",
                  "author_name": "imrannsbd",
                  "text": "You're outstanding content creator \ud83d\udd25\ud83d\udd25"
                },
                {
                  "created_at": "2025-04-29 09:21:39",
                  "author_name": "sandy.benazet",
                  "text": "Bis auf recht bald und nochmal \u00ab bravo \ud83d\udc4f \u00bb\n\ud83d\udc95\ud83d\ude4b\u200d\u2640\ufe0f\u2764\ufe0f\ud83d\udd1c"
                },
                {
                  "created_at": "2025-04-25 21:30:44",
                  "author_name": "soulglow.herbal.wisdom",
                  "text": "Wirkt sehr gelungen! \ud83d\udc4f\ud83c\udffc"
                }
              ],
              "like_count": 186
            },
            {
              "id": "18069620764930679",
              "source_id": "feed-plugin",
              "type": "image",
              "text": "ART x OPEN DOORS am 24. April 2025 | 17:00\u201319:00 Uhr \ud83d\udda4 Das Boutiquehotel Stadtkrug \u00f6ffnet seine T\u00fcren \u2013 und du bist herzlich eingeladen!\n\nErlebe die Ausstellung \u201eFrom the Streets to Society\u201c\nmit Werken des Salzburger K\u00fcnstlers @cest.pour.toi21 / Erdal Tuncay \u2013 urban, roh, ausdrucksstark.\n\nOn top:\n\n- Free Welcome Drink\n- Live DJ @pantelispascal f\u00fcr entspannte Beats\n- Open House Feeling: Werf einen Blick in unsere stilvollen Zimmer & Apartments\n\nArt. Sound. Atmosph\u00e4re.\nWir freuen uns auf dich!\n\nLocation:\nBoutiquehotel Stadtkrug\nLinzergasse 20, 5020 Salzburg\n\n#stadtkrugsalzburg #kunstevent #opendoors #cestpourtoi21 #salzburgart #boutiquehotel #artmeetslifestyle",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/490742374_18457715749076693_5900185794567748437_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=109&ccb=1-7&_nc_sid=18de74&_nc_ohc=wWUaPROOVP0Q7kNvwHkSf6_&_nc_oc=AdlHL-jTwqXOxbz0Y7g6LvoYmmpdbDZ4uIH6sWE-A8wyGDNErtxoo8FHQWwh1mvB16g&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWFtsaBDZ8NkmTW9fOxRZ3QjM-K84IXxIbHZVTDZuzm3w&oe=68A97AEE",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/cb/4f/cb4fe826b2d730a44deff0edb0075c4b07706213/0.webp",
                    "medium": "feed/Instagram/cb/4f/cb4fe826b2d730a44deff0edb0075c4b07706213/0m.webp",
                    "small": "feed/Instagram/cb/4f/cb4fe826b2d730a44deff0edb0075c4b07706213/0s.webp"
                  }
                }
              ],
              "created_at": "2025-04-22 16:09:00",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DIwUjidtRGY/",
              "comment_count": 4,
              "comments": [
                {
                  "created_at": "2025-04-24 07:23:30",
                  "author_name": "andrada.misca",
                  "text": "Das Bild... \ud83d\udc4c\ud83d\udda4 Amazing!"
                },
                {
                  "created_at": "2025-04-22 16:13:46",
                  "author_name": "marktschatz",
                  "text": "\ud83d\udc4f\ud83d\udc4f\ud83d\udc4f"
                },
                {
                  "created_at": "2025-04-22 16:12:00",
                  "author_name": "dr_ilse_gradwohl",
                  "text": "Ich freu mich schon darauf \u263a\ufe0f"
                }
              ],
              "like_count": 137
            },
            {
              "id": "18092192212572225",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "FROHE OSTERN \ud83d\udc23\ud83c\udf37 Wir sind schon flei\u00dfig am Vorbereiten und Dekorieren \u2013 denn am 24. April 2025 von 17:00 bis 19:00 Uhr \u00f6ffnen wir unsere T\u00fcren f\u00fcr euch!\n\nFreut euch auf einen besonderen Abend im Boutiquehotel Stadtkrug: Entdeckt unsere stilvollen Zimmer & Apartments und lasst euch von der Kunstausstellung \u201eFrom the Streets to Society\u201c von @cest.pour.toi21 / Erdal Tuncay inspirieren.\n\nDazu gibt\u2019s:\nWelcome Drink, gute Musik und entspannte Atmosph\u00e4re \u2013 alles, was man f\u00fcr einen gelungenen Abend braucht.\n\nLinzergasse 20, 5020 Salzburg\nWir freuen uns auf euch!\n\n#stadtkrugsalzburg #kunstausstellung #fromthestreetsintosociety #cestpourtoi21 #salzburgkunst #openhouse #boutiquehotel #artmeetsdesign #salzburgcityvibes",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/490447119_18457068241076693_3355088365715350363_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=103&ccb=1-7&_nc_sid=18de74&_nc_ohc=kcU3w-CpO4sQ7kNvwG3CPif&_nc_oc=AdmolaZYogOavznj5q39GJGuQ9T0AsKwwuqc3Gn8jMnSmgiOMHsFacWRtX3OgislaSs&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVGUc6PTsgKNrzh0juHhtt1tYOWgFodduc2xOor8_5msw&oe=68A99C1B",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/ab/f9/abf9e9280181c793f734efe1a554f10e5e274889/0.webp",
                    "medium": "feed/Instagram/ab/f9/abf9e9280181c793f734efe1a554f10e5e274889/0m.webp",
                    "small": "feed/Instagram/ab/f9/abf9e9280181c793f734efe1a554f10e5e274889/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/491432931_18457068250076693_154141791762720757_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=101&ccb=1-7&_nc_sid=18de74&_nc_ohc=dd3_lJNO1xMQ7kNvwFecuSg&_nc_oc=AdlowOGARPL-W9F6PEodfdhRIt0Lrn5dugBq3cctZPbjdWY6wmgaxx1gZ3SFxokK5tE&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfW0I2srxTJgwicYcGQAF9jMUldQFjLE2E_BtYyQkKO1tQ&oe=68A97F59",
                  "image_urls": {
                    "size": "1181x1476",
                    "large": "feed/Instagram/ab/f9/abf9e9280181c793f734efe1a554f10e5e274889/1.webp",
                    "medium": "feed/Instagram/ab/f9/abf9e9280181c793f734efe1a554f10e5e274889/1m.webp",
                    "small": "feed/Instagram/ab/f9/abf9e9280181c793f734efe1a554f10e5e274889/1s.webp"
                  }
                }
              ],
              "created_at": "2025-04-18 08:36:14",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DIlNjxWtU0o/",
              "comment_count": 0,
              "comments": [],
              "like_count": 49
            },
            {
              "id": "18077116693742995",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "CITY STROLL \ud83e\udd29 Salzburg ist wie gemacht f\u00fcr einen gem\u00fctlichen Stadtbummel \u2013 charmante Gassen, historische Pl\u00e4tze, k\u00f6stliche Caf\u00e9s und nat\u00fcrlich die beeindruckende Festung Hohensalzburg im Blick.\n\nVom Hotel Stadtkrug aus startest du direkt ins Herz der Altstadt \u2013 zentral, stilvoll, unvergesslich.\n\nWir freuen uns auf dich!\n\n#hotelstadtkrug #salzburg #stadtbummel #festunghohensalzburg #cityvibes #altstadtsalzburg #kulinariksalzburg",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/490153229_18455968858076693_641139664275956054_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=103&ccb=1-7&_nc_sid=18de74&_nc_ohc=9R56o-Da1oIQ7kNvwHjEbC8&_nc_oc=Adnsj7omt0xIOCIbVgBwhCZ8DY2n_tVMCZTNvdHAr4KfRRdl5d8hPJ9xUpmou4whrFk&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUVFua5hEvyLyLEzHHgLtg4daOjcybOmsRBiccnM0Ohlg&oe=68A988BC",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/0.webp",
                    "medium": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/0m.webp",
                    "small": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/490068383_18455968867076693_98761501826060047_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=104&ccb=1-7&_nc_sid=18de74&_nc_ohc=38Yn7uX4Xc4Q7kNvwGWBBRM&_nc_oc=AdnG7xrIjIEdLtny4rK8tiRgnBFI_YKgcZsBegdDTFkBwFfVZYNwK2Fl5qpittEpoTY&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfV9tqPvw3V53GZCZSNgAkLKIXXRir4oEWhJOuLKXp7xUQ&oe=68A987D4",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/1.webp",
                    "medium": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/1m.webp",
                    "small": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/490050663_18455968876076693_8905021160938304122_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=106&ccb=1-7&_nc_sid=18de74&_nc_ohc=Tk7jby7Tq-8Q7kNvwGtLfns&_nc_oc=Adkh6qv3vhA_rK0JYeMc4-FQDlXAFerp65GQ1QbNV2GGdMIW6KTQLaayNyfSkkgj3bQ&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUmKI1LgNaK7b2dQvJ8GCJcTOh_2fmy5Ojpw3oGiepH2w&oe=68A98366",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/2.webp",
                    "medium": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/2m.webp",
                    "small": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/2s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/490091096_18455968888076693_269124992841983233_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=108&ccb=1-7&_nc_sid=18de74&_nc_ohc=ynrtZp5fa9wQ7kNvwGYN-QM&_nc_oc=AdlZTKD30C4KsBkdEl8-YTZuk9BsgxUMVI_2YE53E-rS-Hvz9qZgivuXyKqP1y86Jzc&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUy6gEQfwqHV_8djHDVmdnWv088hJpqKpguSRgiFbPQqw&oe=68A9ACC0",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/3.webp",
                    "medium": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/3m.webp",
                    "small": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/3s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/490165277_18455968897076693_7275667473407052814_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=104&ccb=1-7&_nc_sid=18de74&_nc_ohc=fWJCJCpmk7YQ7kNvwGSa5OA&_nc_oc=AdnpPJggFbsSxkJIR7LP-lGZiHEh_jhael865Ik0UTO4XNQxKHKGJguUEpk-3E6X_6Q&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUr-enxmz0lgUNMPYmdt7cHf5rMLrFE1Yw2WatUVuem2Q&oe=68A98D28",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/4.webp",
                    "medium": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/4m.webp",
                    "small": "feed/Instagram/a2/6e/a26eff161f5c66ff7fc0f1bb5cab44e943ff39b4/4s.webp"
                  }
                }
              ],
              "created_at": "2025-04-12 07:33:29",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DIVpnBrtb7K/",
              "comment_count": 1,
              "comments": [
                {
                  "created_at": "2025-04-12 08:25:30",
                  "author_name": "in.der.linse",
                  "text": "Inside looks great"
                }
              ],
              "like_count": 67
            },
            {
              "id": "18079555867735651",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "BALD SIND OSTERFERIEN! \ud83d\udc30\ud83e\udeba Die perfekte Zeit f\u00fcr einen Familien-City-Trip ins wundersch\u00f6ne Salzburg!\n\nErlebt die charmanten Osterm\u00e4rkte, lasst euch kulinarisch verw\u00f6hnen und entdeckt die historische Altstadt, die Festung Hohensalzburg und die umliegenden Berge.\n\nFamilienzeit deluxe \u2013 mitten im Herzen der Stadt, bei uns im Boutique Hotel Stadtkrug.\n\nJetzt buchen & Osterzauber erleben!\n#StadtkrugSalzburg #Osterferien #FamilyTrip #SalzburgErleben #BoutiqueHotel",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/489841811_18454857916076693_5517737197855572278_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=108&ccb=1-7&_nc_sid=18de74&_nc_ohc=cbTv8Q66rDEQ7kNvwF8lpzJ&_nc_oc=Adlg_0xxu-dgNq3c6gZ31-hygOQwuAb3nWGseOUIitp5ESLaUTm-Ep8rn0lXC8oYQEM&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWpnHiqnp7FOoEDTJICkUoe1kkZCq5HOYcjzCMrl2zzkg&oe=68A98453",
                  "image_urls": {
                    "size": "700x875",
                    "large": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/0.webp",
                    "medium": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/0m.webp",
                    "small": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/489367008_18454857925076693_1682270846588171552_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=102&ccb=1-7&_nc_sid=18de74&_nc_ohc=m2mC9TxCkOEQ7kNvwHG9gEg&_nc_oc=AdmZGMCuYWM67dIXAYZ4vIu0LCWUVkXgjTpVKoATK7iw8hat6M_h2YXd0shMkOSiQlk&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfV6A3i0xD7erzAtUwcKRVpbaRMmcYsxZPVOtWkCGP4LEg&oe=68A9A2EC",
                  "image_urls": {
                    "size": "700x875",
                    "large": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/1.webp",
                    "medium": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/1m.webp",
                    "small": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/489857318_18454857943076693_782286977626906049_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=106&ccb=1-7&_nc_sid=18de74&_nc_ohc=mSJUNsdgYTkQ7kNvwEoImnk&_nc_oc=AdnrALPMmWgdLGz4rqiinNU5nxujk_VgL37NjGy84Gh-Zc9crx6nipxTmUlZYVCKSa8&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVbtibqmwqdCFIeGSOWXXOUKcm58RA8mO8ecv9yTE-ELw&oe=68A984FB",
                  "image_urls": {
                    "size": "1080x1350",
                    "large": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/2.webp",
                    "medium": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/2m.webp",
                    "small": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/2s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/489345727_18454857934076693_6717339992764210313_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=111&ccb=1-7&_nc_sid=18de74&_nc_ohc=sHfhBHZ8LfcQ7kNvwHH43hI&_nc_oc=Adkc6ss_oXQFTzEZwjSOecNt0rY6HTVfXy8eVYccblyrY93HdKoZ2U7RrXcsk868xS4&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUyWnruTcHsv9aMRFUn-UKKk-eEMRAHvhp9Y8gjJofSqQ&oe=68A98A9D",
                  "image_urls": {
                    "size": "768x960",
                    "large": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/3.webp",
                    "medium": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/3m.webp",
                    "small": "feed/Instagram/98/45/984557e92adf05cdfa58ed62573a1e876a3dfc35/3s.webp"
                  }
                }
              ],
              "created_at": "2025-04-06 07:03:34",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DIGJapUtkKy/",
              "comment_count": 1,
              "comments": [
                {
                  "created_at": "2025-04-06 07:04:54",
                  "author_name": "dr_ilse_gradwohl",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 66
            },
            {
              "id": "18147991501329908",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "EINLADUNG zur Kunstausstellung & Open Doors Event\n\nAm 24. April 2025 von 17:00 bis 19:00 Uhr \u00f6ffnet das Boutiquehotel Stadtkrug seine T\u00fcren f\u00fcr dich!\n\nErlebe die beeindruckende Kunstausstellung \u201eFrom the Streets to Society\u201c des Salzburger K\u00fcnstlers @cest.pour.toi21 / Erdal Tuncay und tauche ein in die besondere Atmosph\u00e4re unseres Hauses.\n\nNutze die Gelegenheit, nicht nur die Kunstwerke zu bewundern, sondern auch unsere stilvollen Zimmer und Apartments zu besichtigen. Welcome Drink, good vibes and music inklusive \ud83e\udd29\n\nWir freuen uns auf deinen Besuch!\n\n\ud83d\udccd Boutiquehotel Stadtkrug\nLinzergasse 20, 5020 Salzburg",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/485213404_18451792243076693_1586555346607096640_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=100&ccb=1-7&_nc_sid=18de74&_nc_ohc=k8GDAP3D4QMQ7kNvwElDoHE&_nc_oc=Admb0xlO28SNUI09jS_js-4fJm01eTK7x3fvMCPRTszUCgDlKn3abahE9aZbaAAVfSw&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWQWMi58D7CYZxbb8GMVWsF7tRjLbgZnJnCbIRAdKOB4Q&oe=68A99845",
                  "image_urls": {
                    "size": "1440x1440",
                    "large": "feed/Instagram/be/18/be184cc3988422f44da7735a9b18bc8088f5c966/0.webp",
                    "medium": "feed/Instagram/be/18/be184cc3988422f44da7735a9b18bc8088f5c966/0m.webp",
                    "small": "feed/Instagram/be/18/be184cc3988422f44da7735a9b18bc8088f5c966/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/486051422_18451792252076693_305608422888758110_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=110&ccb=1-7&_nc_sid=18de74&_nc_ohc=JsDKVSzC9pMQ7kNvwFGvIbO&_nc_oc=AdmVr13ZYUcODsVpvgGv3TPpZ6L07wboVlvwBxmPD5GbT1AQPU-pqtxOQaSNUNsQiHE&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUkStXyS6W0OQHGtVuxNzwpzSKO2PejqlBUu1QLRlPNUA&oe=68A9A464",
                  "image_urls": {
                    "size": "1440x1440",
                    "large": "feed/Instagram/be/18/be184cc3988422f44da7735a9b18bc8088f5c966/1.webp",
                    "medium": "feed/Instagram/be/18/be184cc3988422f44da7735a9b18bc8088f5c966/1m.webp",
                    "small": "feed/Instagram/be/18/be184cc3988422f44da7735a9b18bc8088f5c966/1s.webp"
                  }
                }
              ],
              "created_at": "2025-03-21 10:04:54",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DHdRcrmNZoF/",
              "comment_count": 3,
              "comments": [
                {
                  "created_at": "2025-03-21 10:27:14",
                  "author_name": "nailsemotions",
                  "text": "\ud83d\udc4f\ud83d\udc4f\ud83d\udc4f Top"
                },
                {
                  "created_at": "2025-03-21 10:26:42",
                  "author_name": "dr_ilse_gradwohl",
                  "text": "Ich freue mich schon \u263a\ufe0f"
                },
                {
                  "created_at": "2025-03-21 10:09:14",
                  "author_name": "marktschatz",
                  "text": "Super Idee \ud83e\udd29"
                }
              ],
              "like_count": 80
            },
            {
              "id": "18027133733376505",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "UNPACK your belongings for spring! \ud83c\udf38 Am 20. M\u00e4rz 2025 ist Fr\u00fchlings-Tagundnachtgleiche \u2013 Tag und Nacht sind gleich lang, die Natur erwacht, und wir sp\u00fcren neue Energie! \ud83d\udd0b\n\nSerotonin und Dopamin sorgen f\u00fcr gute Laune und Tatendrang.\n\nGenie\u00dfe diesen Neuanfang im Boutiquehotel Stadtkrug \u2013 mit warmen Sonnenstrahlen, entspannter Atmosph\u00e4re und regionalen K\u00f6stlichkeiten.\n\nSp\u00fcrst du den Fr\u00fchling schon? \n\nWir freuen uns auf dich, dein Stadtkrug Team \ud83d\udc95\n\nDanke @bauer_alina",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/485181184_18451413949076693_4057766344415266244_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=108&ccb=1-7&_nc_sid=18de74&_nc_ohc=rv_a2uxPDKMQ7kNvwGzujhC&_nc_oc=AdneEObqOqFRsaPZQAIZb06SS55huabWP0e3U3XZMOshFHNGur42vLco-UhYgwnCYxw&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfXToJW5nw8NeEyFqn3e_1BXUGzx-efhX8gb1rHxSuHLMA&oe=68A9AEDE",
                  "image_urls": {
                    "size": "1170x1462",
                    "large": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/0.webp",
                    "medium": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/0m.webp",
                    "small": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/484957205_18451413958076693_8937312170311802920_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=105&ccb=1-7&_nc_sid=18de74&_nc_ohc=LzFJ0PlpA1kQ7kNvwGIBcIH&_nc_oc=AdknZho33axkvsaYqL_2qULzxlD_AtaEgw-kk3xghMwyUZlVKnZTNI26dqIBLE8GjCI&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfXaEbOHvqbfP1nMjnrL-aif1F5fEK6SMb9yRC5SuiPafA&oe=68A9854F",
                  "image_urls": {
                    "size": "1170x1462",
                    "large": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/1.webp",
                    "medium": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/1m.webp",
                    "small": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/485012972_18451413967076693_771874177798692869_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=106&ccb=1-7&_nc_sid=18de74&_nc_ohc=e0luIpUFTzAQ7kNvwHDF67I&_nc_oc=AdmKrkVvKB03OhNCwByYeKep3JEldkWqd9tJ2aVaka8PuEa7UIPEaSshWgwiAahmSZA&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWhrt-ayXPkEnmCnCjYe_xOhfauI0A2PPQ_itCggTJNVQ&oe=68A97B7F",
                  "image_urls": {
                    "size": "1000x1250",
                    "large": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/2.webp",
                    "medium": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/2m.webp",
                    "small": "feed/Instagram/d2/f6/d2f66d8726c09aadfd696b5fb829fa4e2bf95f78/2s.webp"
                  }
                }
              ],
              "created_at": "2025-03-19 10:26:36",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DHYKV5qtTb5/",
              "comment_count": 2,
              "comments": [
                {
                  "created_at": "2025-03-19 15:49:11",
                  "author_name": "annalenakez",
                  "text": "\ud83d\ude0d\ud83d\ude0d\ud83d\ude0d"
                },
                {
                  "created_at": "2025-03-19 10:28:36",
                  "author_name": "ramirezcouture",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 51
            },
            {
              "id": "18021605426465516",
              "source_id": "feed-plugin",
              "type": "image",
              "text": "WELCOME TO OUR RECEPTION \ud83c\udfe8 Unsere Rezeption ist t\u00e4glich von 7:00 bis 19:00 Uhr besetzt. Falls du sp\u00e4ter anreist, kontaktiere uns bitte im Voraus f\u00fcr deine Check-in-Anweisungen.\n\n\ud83d\ude97 Anreise mit dem Auto:\nBis 19:00 Uhr kannst du direkt vors Hotel fahren. Danach bitten wir dich, die \u00f6ffentliche Garage Glockengasse 4a zu nutzen und das letzte St\u00fcck zu Fu\u00df durch die Fu\u00dfg\u00e4ngerzone zum Hotel zu gehen.\n\nWir freuen uns auf deinen/euren Besuch! \ud83d\udc99 \n\n#BoutiqueHotelStadtkrug #Salzburg #HotelCheckIn",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/483621078_18449603539076693_1626314895150950644_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=111&ccb=1-7&_nc_sid=18de74&_nc_ohc=9AdltpX-Gi4Q7kNvwHHEFl2&_nc_oc=AdnnX34MZOF15w40wyvQqB1cMIbuqpXl7zBuVPUD_t49lBAYx7TdCAyNTF8y7PUCVRg&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfUV9KFtf66rrEqA7ohwtREWRnS5FSGnyNfVYKAaVmRrYg&oe=68A9ACC1",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/46/f6/46f6ebfc0ace473752f6128dd37c39ce3dd40518/0.webp",
                    "medium": "feed/Instagram/46/f6/46f6ebfc0ace473752f6128dd37c39ce3dd40518/0m.webp",
                    "small": "feed/Instagram/46/f6/46f6ebfc0ace473752f6128dd37c39ce3dd40518/0s.webp"
                  }
                }
              ],
              "created_at": "2025-03-10 13:50:57",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DHBWkugtKTx/",
              "comment_count": 1,
              "comments": [
                {
                  "created_at": "2025-03-10 14:00:21",
                  "author_name": "marktschatz",
                  "text": "Ihr habt so ein tolles Team, gratuliere \ud83e\udd29"
                }
              ],
              "like_count": 54
            },
            {
              "id": "18056091398045381",
              "source_id": "feed-plugin",
              "type": "image",
              "text": "GOOD MORNING IN STYLE \u2615\ufe0f Wusstest du, dass das Stadtkrug bereits seit 1353 G\u00e4ste willkommen hei\u00dft? \n\n\u00dcberall im Haus erz\u00e4hlen alte Holzdecken, beeindruckende Felsenelemente und jahrhundertealte Details von einer bewegten Vergangenheit. Unsere Mauern sind durchzogen von Geschichten und Geheimnissen vergangener Zeiten \u2013 und warten darauf, dich in ihren Bann zu ziehen.\n\nErlebe den einzigartigen Zauber unseres Boutiquehotels und werde Teil der Geschichte, die in jedem Winkel sp\u00fcrbar ist. Dein Aufenthalt ist mehr als nur eine \u00dcbernachtung \u2013 es ist eine Reise durch die Zeit. \u23f3\n\n\ud83d\udccd Mitten in der Salzburger Altstadt, nur wenige Schritte von den wichtigsten Sehensw\u00fcrdigkeiten entfernt.\n\nBestpreisgarantie bei Direktbuchung \ud83d\udcaf\n\n#BoutiqueHotel #StadtkrugSalzburg #HistoryMeetsLuxury #Salzburg #AltstadtFlair",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-2.cdninstagram.com/v/t51.75761-15/482941848_18448410589076693_7398988318394867000_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=103&ccb=1-7&_nc_sid=18de74&_nc_ohc=qrACQjGSLegQ7kNvwGpjxc5&_nc_oc=Adksue3_GxYed_sWE7hm2IyltHbf9d490abRPqXKp8md9jNLc4uamSlFH44PioQx8QA&_nc_zt=23&_nc_ht=scontent-iad3-2.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVpyxDAoatXupbTDxXslz__X4w3VrzLqlPgKHXKPp8anw&oe=68A9A874",
                  "image_urls": {
                    "size": "1125x1406",
                    "large": "feed/Instagram/b4/8a/b48a9e62b91d930308c52e22900a266bee197ceb/0.webp",
                    "medium": "feed/Instagram/b4/8a/b48a9e62b91d930308c52e22900a266bee197ceb/0m.webp",
                    "small": "feed/Instagram/b4/8a/b48a9e62b91d930308c52e22900a266bee197ceb/0s.webp"
                  }
                }
              ],
              "created_at": "2025-03-04 07:23:06",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DGxNa18tvCy/",
              "comment_count": 2,
              "comments": [
                {
                  "created_at": "2025-03-04 07:24:56",
                  "author_name": "nailsemotions",
                  "text": "So sch\u00f6n \ud83e\udd29"
                },
                {
                  "created_at": "2025-03-04 07:24:31",
                  "author_name": "ramirez_digital_creation",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 26
            },
            {
              "id": "18093441913529442",
              "source_id": "feed-plugin",
              "type": "album",
              "text": "FEELINGS OF SPRING in Salzburg! \ud83c\udf38 Wir k\u00f6nnen es kaum erwarten, dass im M\u00e4rz die Magnolienb\u00e4ume wieder in voller Bl\u00fcte stehen! Wie w\u00e4re es mit einem entspannten Wochenendtrip in die Salzburger Altstadt? Genie\u00dft die perfekte Kombination aus Natur, Kultur und Kulinarik \u2013 und lasst euch im Boutiquehotel Stadtkrug verw\u00f6hnen.\n\nJetzt den Fr\u00fchling sp\u00fcren & eure Auszeit sichern! Buche direkt bei uns zum Bestpreis! \u2600\ufe0f\ud83c\udf3f\n\n#StadtkrugSalzburg #Fr\u00fchlingserwachen #Magnolienbl\u00fcte #SalzburgEntdecken #BestpreisGarantie",
              "author_id": "Instagram|17841402300776677",
              "author_name": "stadtkrug_hotel",
              "media_content": [
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/482129453_18447539473076693_974679592519316398_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=110&ccb=1-7&_nc_sid=18de74&_nc_ohc=aIHwXHWC2BkQ7kNvwF02vXX&_nc_oc=Adkh0K4hOIm2oq0XC9jyamVYeBX0c02Jx3mbm0lMzteqgfS8TtngY19Qj32bMRh1TDQ&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfVcmbNh38m7Jwj9MOP8CLGTGVJYxJW4VT51bq0jLi5pog&oe=68A9A989",
                  "image_urls": {
                    "size": "1084x1355",
                    "large": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/0.webp",
                    "medium": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/0m.webp",
                    "small": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/0s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/482306244_18447539485076693_5877308585573829536_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=101&ccb=1-7&_nc_sid=18de74&_nc_ohc=jvWyrE5zJz4Q7kNvwFO04nI&_nc_oc=AdmBIcMCUBxHNfrhpJyLkQmXcjugZfMC2_YoxOtmGiIR39gRzY5-oWsPbBFTZiWUBio&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWhdIIjy9-50gcd_MGXuZ7l2TMDHfJuthYKd4Ea7FLdPw&oe=68A97E7E",
                  "image_urls": {
                    "size": "1072x1340",
                    "large": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/1.webp",
                    "medium": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/1m.webp",
                    "small": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/1s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/481981313_18447539497076693_4739898317933972046_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=101&ccb=1-7&_nc_sid=18de74&_nc_ohc=ifgA6rJ66S0Q7kNvwES9pgy&_nc_oc=AdmzTiXbFzb-DjPbd5s7m8BRW1Lndqpdi6Ef1nOJCU4lUwZimRwrBMaDoklqXsgCSZg&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWNb7J-tCcP5udw8ODNRJ5SCrQPHOI4nIYW0bBOI8YkOw&oe=68A97D9F",
                  "image_urls": {
                    "size": "1440x1799",
                    "large": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/2.webp",
                    "medium": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/2m.webp",
                    "small": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/2s.webp"
                  }
                },
                {
                  "media_type": "image",
                  "image_url": "https://scontent-iad3-1.cdninstagram.com/v/t51.75761-15/481795417_18447539509076693_2627385030937730180_n.jpg?stp=dst-jpg_e35_tt6&_nc_cat=107&ccb=1-7&_nc_sid=18de74&_nc_ohc=8jQHbCicJZEQ7kNvwH0XEsg&_nc_oc=AdmpiAolC79KSwcejj-uH2u4I21qwkMMjrPcmZ9cPhbDDZoMVx8RAFFRJdmM7ZyKg-4&_nc_zt=23&_nc_ht=scontent-iad3-1.cdninstagram.com&edm=AM6HXa8EAAAA&_nc_gid=C9Ut_l1Mezcc_nGpsKDTLw&oh=00_AfWNqIi5pd-V1hKUDJx5ro535lLRbokViEMPWHHyfSlEtQ&oe=68A995CB",
                  "image_urls": {
                    "size": "1440x1800",
                    "large": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/3.webp",
                    "medium": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/3m.webp",
                    "small": "feed/Instagram/71/81/71812b26c54d3f8a131704e7f9e2c107bef8a54a/3s.webp"
                  }
                }
              ],
              "created_at": "2025-02-27 07:31:35",
              "source_type": "Instagram",
              "url": "https://www.instagram.com/p/DGkWanLtQrQ/",
              "comment_count": 4,
              "comments": [
                {
                  "created_at": "2025-04-28 17:25:31",
                  "author_name": "studio.evi.schartner",
                  "text": "Traumhaft \ud83d\udc95"
                },
                {
                  "created_at": "2025-03-07 01:14:16",
                  "author_name": "renateg66",
                  "text": "Be staying there early August."
                },
                {
                  "created_at": "2025-02-27 10:27:51",
                  "author_name": "salzburg.beyond.mozart",
                  "text": "Me too \u263a\ufe0f\ud83e\ude77"
                },
                {
                  "created_at": "2025-02-27 07:33:34",
                  "author_name": "dr_ilse_gradwohl",
                  "text": "\ud83d\ude0d"
                }
              ],
              "like_count": 72
            }
          ],
          "source_types": "Instagram",
          "style": {
            "type": "custom-style",
            "layout": {
              "type": "grid",
              "cols_num_auto": "true",
              "target_col_width": "350",
              "cols_num": "3",
              "loadmore": "true",
              "rows_num": "3",
              "width": "lg",
              "infinity_loop": "false"
            },
            "header": {
              "enabled": "true",
              "type": "1",
              "show_profile_picture": "true",
              "show_posts_number": "true",
              "show_full_name": "false",
              "show_followers_number": "true",
              "show_username": "true",
              "show_follows_number": "false",
              "show_follow_button": "true",
              "switch": "true"
            },
            "arrow": { "type": "3" },
            "carousel_album_arrow": { "type": "1" },
            "card": {
              "type": "1",
              "show_profile_picture": "true",
              "show_full_name": "false",
              "show_username": "true",
              "show_like_num": "true",
              "show_comment_num": "true",
              "show_repost_num": "false",
              "show_date": "true",
              "show_media_icon": "false",
              "show_post_title": "false",
              "show_post_text": "true",
              "show_post_media": "true",
              "click_action": "lightbox",
              "media_layout": "single",
              "align": "top",
              "ratio": "square"
            },
            "lightbox": {
              "enabled": "true",
              "type": "carousel",
              "show_like_num": "true",
              "show_comments": "true",
              "show_date": "true",
              "show_post_text": "true",
              "show_full_name": "false",
              "show_username": "false",
              "show_profile_picture": "false"
            },
            "autoplay_widget": { "enabled": "false", "interval": "10" },
            "autoplay_widget_card": { "enabled": "false", "interval": "4" },
            "footer": { "enabled": "true" },
            "summary": { "author_name": "", "author_bio": "" },
            "settings": { "platform_style": "Instagram", "hidden_posts": [] },
            "locales": { "date-format": "d mmmm yyyy" },
            "custom_style": {
              "gap": "14px",
              "widget-margin-top": "0px",
              "widget-margin-bottom": "40px",
              "arrow_show": "false",
              "style": "'custom-style'",
              "widget-background-color": "transparent",
              "widget-padding-top": "0px",
              "widget-padding-bottom": "0px",
              "widget-padding-left": "0px",
              "widget-padding-right": "0px",
              "widget-border-weight": "0px",
              "widget-border-color": "#000000",
              "widget-border-radius": "0px",
              "widget-body-height": "false",
              "header-font-size": "15px",
              "header-font-color": "#000000",
              "header-padding-top": "10px",
              "header-padding-bottom": "10px",
              "header-padding-left": "0px",
              "header-padding-right": "0px",
              "header-profile-image-size": "60px",
              "header-muted-color": "#536471",
              "header-background-color": "rgba(0, 0, 0, 0)",
              "header-btn-color": "#ffffff",
              "header-btn-background-color": "#0095f6",
              "header-btn-border-radius": "8px",
              "arrow-background-color": "#ffffff",
              "arrow-color": "#000000",
              "dots-background-color": "#efefef",
              "loadmore-color": "#000000",
              "loadmore-background-color": "#efefef",
              "card-border-width": "1px",
              "card-border-color": "#dedede",
              "card-border-radius": "0px",
              "card-background-color": "#ffffff",
              "card-padding": "20px",
              "card-post-font-size": "14px",
              "card-header-font-size": "14px",
              "card-hover-background-color": "#000000",
              "card-text-color": "#000000",
              "card-muted-color": "#555555",
              "card-post-text-link-color": "#000000",
              "card-media-border-radius": "0px",
              "card-shadow-x": "0px",
              "card-shadow-y": "0px",
              "card-shadow-blur": "0px",
              "card-shadow-color": "rgba(0, 0, 0, 0.1)",
              "card-profile-image-size": "36px",
              "plaform-icon-original-color": "false",
              "plaform-icon-color": "#000000",
              "page-background-color": "#ffffff",
              "page-text-color": "#000000",
              "layout": "grid",
              "header": "true",
              "header-numbers": "true",
              "header-btn": "true",
              "header-secondary-btn": "true",
              "card": "true",
              "post_lines": "4",
              "post_overflow_type": "readmore",
              "footer": "true",
              "carousel_album_arrow_show": "false",
              "dots": "false",
              "loadmore": "true",
              "lightbox": "true",
              "widgettype": "'social'"
            }
          },
          "language": "de",
          "translate": {
            "loading": "Laden",
            "Follow": "Folgen",
            "Load more": "Mehr laden",
            "Unfortunately, the 7-day trial period has expired.": "Leider ist der 7-t\u00e4gige Testzeitraum abgelaufen.",
            "Check our subscription plans!": "Schau dir unsere Abonnementpl\u00e4ne an!",
            "Failed to load data!": "Fehler beim Laden der Daten!",
            "This browser does not support video playback!": "Dieser Browser unterst\u00fctzt die Videowiedergabe nicht!",
            "View": "Ansehen",
            "%number% likes": "%number% Likes",
            "%author% Retweeted": "%author% Retweetet",
            "Read more": "Mehr lesen",
            "Hide": "Verbergen",
            "%d %s ago|today|day|days|week|weeks|month|months|year|years": "vor %d %s|heute|tag|tagen|woche|wochen|monat|monaten|jahr|jahren",
            "%number% video": "%number% Video",
            "%number% posts": "%number% Beitr\u00e4ge",
            "%number% followers": "%number% Follower",
            "%number% following": "%number% Abonniert",
            "My channel": "Mein Kanal"
          },
          "sprite": {
            "image_url": "https://cdn.trustindex.io/wp-feeds/f8/f8a53951f409f/sprite.webp",
            "header_height": 75,
            "card_height": 36,
            "list": [
              "75-https://scontent-iad3-1.xx.fbcdn.net/v/t51.2885-15/481865518_957768416498369_3060240472500945872_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=7d201b&_nc_ohc=9YvEjPCVMlgQ7kNvwFN1FJt&_nc_oc=AdnhUMt8WgAP753Lsn6jdzdLlwX8z4WEtHKiCt9ZSdvQXCTvqOB6Xz7NsKzoWxgbVKg&_nc_zt=23&_nc_ht=scontent-iad3-1.xx&edm=AL-3X8kEAAAA&oh=00_AfWHDT0zp63Mj_g6Gstl2KD6B4qM3nOBJv0Obbgp6VHuVg&oe=68A9D408",
              "36-https://scontent-iad3-1.xx.fbcdn.net/v/t51.2885-15/481865518_957768416498369_3060240472500945872_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=7d201b&_nc_ohc=9YvEjPCVMlgQ7kNvwFN1FJt&_nc_oc=AdnhUMt8WgAP753Lsn6jdzdLlwX8z4WEtHKiCt9ZSdvQXCTvqOB6Xz7NsKzoWxgbVKg&_nc_zt=23&_nc_ht=scontent-iad3-1.xx&edm=AL-3X8kEAAAA&oh=00_AfWHDT0zp63Mj_g6Gstl2KD6B4qM3nOBJv0Obbgp6VHuVg&oe=68A9D408"
            ]
          },
          "token_expires": "2025-03-16 12:59:07",
          "order": "newer_sooner",
          "widget-key": "feed-instagram"
        },
        "cssUrl": "https://stadtkrug.at/wp-content/uploads/trustindex-feed-instagram-widget.css?1736946052",
        "pluginVersion": "1.6.7"
      }
    </script>
    <script
      type="text/javascript"
      defer=""
      async=""
      src="./HOME_files/loader-feed.js"
      id="trustindex-feed-loader-js-js"
    ></script>
    <script></script>

    <deepl-input-controller translate="no"
      ><template shadowrootmode="open"
        ><link
          rel="stylesheet"
          href="chrome-extension://cofdbpoegempjloogbagkncekinflcnj/build/content.css" />
        <div dir="ltr" style="visibility: initial !important">
          <div class="dl-input-translation-container svelte-95aucy">
            <div></div>
          </div></div></template
    ></deepl-input-controller>
  </body>
</html>

