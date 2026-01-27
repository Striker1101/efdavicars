@extends('layouts.app')

@section('title', 'Home')

@section('head')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel="profile" href="//gmpg.org/xfn/11">
        <title>Greeny &#8211; Electric Car Dealership WordPress Theme</title>
        <style>
            body {
                --booked_button_color: #121c45;
            }
        </style>
        <meta name='robots' content='noindex, nofollow' />
        <style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
        <link rel='dns-prefetch' href='//fonts.googleapis.com' />
        <link rel='dns-prefetch' href='//use.fontawesome.com' />
        <link rel="alternate" type="application/rss+xml" title="Greeny &raquo; Feed"
            href="https://greeny.axiomthemes.com/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Greeny &raquo; Comments Feed"
            href="https://greeny.axiomthemes.com/comments/feed/" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Greeny" />
        <meta property="og:description" content="Electric Car Dealership WordPress Theme" />
        <meta property="og:image" content="https://greeny.axiomthemes.com/wp-content/uploads/2022/02/logo.png" />
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/72x72\/",
                "ext": ".png",
                "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/16.0.1\/svg\/",
                "svgExt": ".svg",
                "source": {
                    "concatemoji": "https:\/\/greeny.axiomthemes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.3"
                }
            };
            /*! This file is auto-generated */
            ! function(s, n) {
                var o, i, e;

                function c(e) {
                    try {
                        var t = {
                            supportTests: e,
                            timestamp: (new Date).valueOf()
                        };
                        sessionStorage.setItem(o, JSON.stringify(t))
                    } catch (e) {}
                }

                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                        a = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                            .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function(e, t) {
                        return e === a[t]
                    })
                }

                function u(e, t) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    for (var n = e.getImageData(16, 16, 1, 1), a = 0; a < n.data.length; a++)
                        if (0 !== n.data[a]) return !1;
                    return !0
                }

                function f(e, t, n, a) {
                    switch (t) {
                        case "flag":
                            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                                n(e, "\ud83c\udde8\ud83c\uddf6", "\ud83c\udde8\u200b\ud83c\uddf6") && !n(e,
                                    "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                    "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                        case "emoji":
                            return !a(e, "\ud83e\udedf")
                    }
                    return !1
                }

                function g(e, t, n, a) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                            300, 150) : s.createElement("canvas"),
                        o = r.getContext("2d", {
                            willReadFrequently: !0
                        }),
                        i = (o.textBaseline = "top", o.font = "600 32px Arial", {});
                    return e.forEach(function(e) {
                        i[e] = t(o, e, n, a)
                    }), i
                }

                function t(e) {
                    var t = s.createElement("script");
                    t.src = e, t.defer = !0, s.head.appendChild(t)
                }
                "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", i = ["flag", "emoji"], n.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, e = new Promise(function(e) {
                    s.addEventListener("DOMContentLoaded", e, {
                        once: !0
                    })
                }), new Promise(function(t) {
                    var n = function() {
                        try {
                            var e = JSON.parse(sessionStorage.getItem(o));
                            if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                                e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                        } catch (e) {}
                        return null
                    }();
                    if (!n) {
                        if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                            typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                            var e = "postMessage(" + g.toString() + "(" + [JSON.stringify(i), f.toString(), p
                                    .toString(), u.toString()
                                ].join(",") + "));",
                                a = new Blob([e], {
                                    type: "text/javascript"
                                }),
                                r = new Worker(URL.createObjectURL(a), {
                                    name: "wpTestEmojiSupports"
                                });
                            return void(r.onmessage = function(e) {
                                c(n = e.data), r.terminate(), t(n)
                            })
                        } catch (e) {}
                        c(n = g(i, f, p, u))
                    }
                    t(n)
                }).then(function(e) {
                    for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                        .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                            .everythingExceptFlag && n.supports[t]);
                    n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                        .DOMReady = !1, n.readyCallback = function() {
                            n.DOMReady = !0
                        }
                }).then(function() {
                    return e
                }).then(function() {
                    var e;
                    n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                        .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
                }))
            }((window, document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <link property="stylesheet" rel='stylesheet' id='trx_addons-icons-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/css/font-icons/css/trx_addons_icons.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_demo_icons-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/css/font-icons/css/trx_demo_icons.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_demo_icons_animation-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/css/font-icons/css/animation.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='qw_extensions-icons-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/addons/qw-extension/css/font-icons/css/qw_extension_icons.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='greeny-font-google_fonts-css'
            href='https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&#038;family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&#038;subset=latin,latin-ext&#038;display=swap'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='greeny-fontello-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/css/font-icons/css/fontello.css'
            type='text/css' media='all' />
        <style id='wp-emoji-styles-inline-css' type='text/css'>
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
        <style id='global-styles-inline-css' type='text/css'>
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
                --wp--preset--color--bg-color: #E7F0F7;
                --wp--preset--color--bd-color: #D6E4F1;
                --wp--preset--color--text-dark: #141541;
                --wp--preset--color--text-light: #859AAD;
                --wp--preset--color--text-link: #A8C62E;
                --wp--preset--color--text-hover: #8EA726;
                --wp--preset--color--text-link-2: #1ED0F1;
                --wp--preset--color--text-hover-2: #19B0CC;
                --wp--preset--color--text-link-3: #1D2297;
                --wp--preset--color--text-hover-3: #141641;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--gradient--vertical-link-to-hover: linear-gradient(to bottom, var(--theme-color-text_link) 0%, var(--theme-color-text_hover) 100%);
                --wp--preset--gradient--diagonal-link-to-hover: linear-gradient(to bottom right, var(--theme-color-text_link) 0%, var(--theme-color-text_hover) 100%);
                --wp--preset--font-size--small: 13px;
                --wp--preset--font-size--medium: clamp(14px, 0.875rem + ((1vw - 3.2px) * 0.619), 20px);
                --wp--preset--font-size--large: clamp(22.041px, 1.378rem + ((1vw - 3.2px) * 1.439), 36px);
                --wp--preset--font-size--x-large: clamp(25.014px, 1.563rem + ((1vw - 3.2px) * 1.751), 42px);
                --wp--preset--font-family--p-font: "Kumbh Sans", sans-serif;
                --wp--preset--font-family--post-font: inherit;
                --wp--preset--font-family--h-1-font: "Work Sans", sans-serif;
                --wp--preset--font-family--inter: "Inter", sans-serif;
                --wp--preset--font-family--cardo: Cardo;
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
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
                --wp--custom--spacing--tiny: var(--sc-space-tiny, 1rem);
                --wp--custom--spacing--small: var(--sc-space-small, 2rem);
                --wp--custom--spacing--medium: var(--sc-space-medium, 3.3333rem);
                --wp--custom--spacing--large: var(--sc-space-large, 6.6667rem);
                --wp--custom--spacing--huge: var(--sc-space-huge, 8.6667rem);
            }

            :root {
                --wp--style--global--content-size: 840px;
                --wp--style--global--wide-size: 1290px;
            }

            :where(body) {
                margin: 0;
            }

            .wp-site-blocks>.alignleft {
                float: left;
                margin-right: 2em;
            }

            .wp-site-blocks>.alignright {
                float: right;
                margin-left: 2em;
            }

            .wp-site-blocks>.aligncenter {
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
            }

            :where(.is-layout-flex) {
                gap: 0.5em;
            }

            :where(.is-layout-grid) {
                gap: 0.5em;
            }

            .is-layout-flow>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }

            .is-layout-flow>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }

            .is-layout-flow>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .is-layout-constrained>.alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }

            .is-layout-constrained>.alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }

            .is-layout-constrained>.aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .is-layout-constrained>.alignwide {
                max-width: var(--wp--style--global--wide-size);
            }

            body .is-layout-flex {
                display: flex;
            }

            .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }

            .is-layout-flex> :is(*, div) {
                margin: 0;
            }

            body .is-layout-grid {
                display: grid;
            }

            .is-layout-grid> :is(*, div) {
                margin: 0;
            }

            body {
                padding-top: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
            }

            a:where(:not(.wp-element-button)) {
                text-decoration: underline;
            }

            :root :where(.wp-element-button, .wp-block-button__link) {
                background-color: #32373c;
                border-width: 0;
                color: #fff;
                font-family: inherit;
                font-size: inherit;
                line-height: inherit;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                text-decoration: none;
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

            .has-bg-color-color {
                color: var(--wp--preset--color--bg-color) !important;
            }

            .has-bd-color-color {
                color: var(--wp--preset--color--bd-color) !important;
            }

            .has-text-dark-color {
                color: var(--wp--preset--color--text-dark) !important;
            }

            .has-text-light-color {
                color: var(--wp--preset--color--text-light) !important;
            }

            .has-text-link-color {
                color: var(--wp--preset--color--text-link) !important;
            }

            .has-text-hover-color {
                color: var(--wp--preset--color--text-hover) !important;
            }

            .has-text-link-2-color {
                color: var(--wp--preset--color--text-link-2) !important;
            }

            .has-text-hover-2-color {
                color: var(--wp--preset--color--text-hover-2) !important;
            }

            .has-text-link-3-color {
                color: var(--wp--preset--color--text-link-3) !important;
            }

            .has-text-hover-3-color {
                color: var(--wp--preset--color--text-hover-3) !important;
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
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
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

            .has-bg-color-background-color {
                background-color: var(--wp--preset--color--bg-color) !important;
            }

            .has-bd-color-background-color {
                background-color: var(--wp--preset--color--bd-color) !important;
            }

            .has-text-dark-background-color {
                background-color: var(--wp--preset--color--text-dark) !important;
            }

            .has-text-light-background-color {
                background-color: var(--wp--preset--color--text-light) !important;
            }

            .has-text-link-background-color {
                background-color: var(--wp--preset--color--text-link) !important;
            }

            .has-text-hover-background-color {
                background-color: var(--wp--preset--color--text-hover) !important;
            }

            .has-text-link-2-background-color {
                background-color: var(--wp--preset--color--text-link-2) !important;
            }

            .has-text-hover-2-background-color {
                background-color: var(--wp--preset--color--text-hover-2) !important;
            }

            .has-text-link-3-background-color {
                background-color: var(--wp--preset--color--text-link-3) !important;
            }

            .has-text-hover-3-background-color {
                background-color: var(--wp--preset--color--text-hover-3) !important;
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
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
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

            .has-bg-color-border-color {
                border-color: var(--wp--preset--color--bg-color) !important;
            }

            .has-bd-color-border-color {
                border-color: var(--wp--preset--color--bd-color) !important;
            }

            .has-text-dark-border-color {
                border-color: var(--wp--preset--color--text-dark) !important;
            }

            .has-text-light-border-color {
                border-color: var(--wp--preset--color--text-light) !important;
            }

            .has-text-link-border-color {
                border-color: var(--wp--preset--color--text-link) !important;
            }

            .has-text-hover-border-color {
                border-color: var(--wp--preset--color--text-hover) !important;
            }

            .has-text-link-2-border-color {
                border-color: var(--wp--preset--color--text-link-2) !important;
            }

            .has-text-hover-2-border-color {
                border-color: var(--wp--preset--color--text-hover-2) !important;
            }

            .has-text-link-3-border-color {
                border-color: var(--wp--preset--color--text-link-3) !important;
            }

            .has-text-hover-3-border-color {
                border-color: var(--wp--preset--color--text-hover-3) !important;
            }

            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }

            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }

            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }

            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }

            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }

            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
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

            .has-vertical-link-to-hover-gradient-background {
                background: var(--wp--preset--gradient--vertical-link-to-hover) !important;
            }

            .has-diagonal-link-to-hover-gradient-background {
                background: var(--wp--preset--gradient--diagonal-link-to-hover) !important;
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

            .has-p-font-font-family {
                font-family: var(--wp--preset--font-family--p-font) !important;
            }

            .has-post-font-font-family {
                font-family: var(--wp--preset--font-family--post-font) !important;
            }

            .has-h-1-font-font-family {
                font-family: var(--wp--preset--font-family--h-1-font) !important;
            }

            .has-inter-font-family {
                font-family: var(--wp--preset--font-family--inter) !important;
            }

            .has-cardo-font-family {
                font-family: var(--wp--preset--font-family--cardo) !important;
            }

            :root :where(.wp-block-button .wp-block-button__link) {
                background-color: var(--theme-color-text_link);
                border-radius: 0;
                color: var(--theme-color-inverse_link);
                font-family: var(--theme-font-button_font-family);
                font-size: var(--theme-font-button_font-size);
                font-weight: var(--theme-font-button_font-weight);
                line-height: var(--theme-font-button_line-height);
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
                border-width: 1px 0;
                font-size: clamp(0.984em, 0.984rem + ((1vw - 0.2em) * 0.851), 1.5em);
                line-height: 1.6;
            }

            :root :where(.wp-block-post-comments) {
                padding-top: var(--wp--custom--spacing--small);
            }

            :root :where(.wp-block-quote) {
                border-width: 1px;
            }
        </style>
        <link property="stylesheet" rel='stylesheet' id='advanced-popups-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/advanced-popups/public/css/advanced-popups-public.css?ver=1.2.1'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='contact-form-7-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.6'
            type='text/css' media='all' />




        <style id='booked-css-inline-css' type='text/css'>
            #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,
            #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,
            body #booked-profile-page input[type=submit].button-primary:hover,
            body .booked-list-view button.button:hover,
            body .booked-list-view input[type=submit].button-primary:hover,
            body div.booked-calendar input[type=submit].button-primary:hover,
            body .booked-modal input[type=submit].button-primary:hover,
            body div.booked-calendar .bc-head,
            body div.booked-calendar .bc-head .bc-col,
            body div.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
            body #booked-profile-page .booked-profile-header,
            body #booked-profile-page .booked-tabs li.active a,
            body #booked-profile-page .booked-tabs li.active a:hover,
            body #booked-profile-page .appt-block .google-cal-button>a:hover,
            #ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header {
                background: #0997ba !important;
            }

            body #booked-profile-page input[type=submit].button-primary:hover,
            body div.booked-calendar input[type=submit].button-primary:hover,
            body .booked-list-view button.button:hover,
            body .booked-list-view input[type=submit].button-primary:hover,
            body .booked-modal input[type=submit].button-primary:hover,
            body div.booked-calendar .bc-head .bc-col,
            body div.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
            body #booked-profile-page .booked-profile-header,
            body #booked-profile-page .appt-block .google-cal-button>a:hover {
                border-color: #0997ba !important;
            }

            body div.booked-calendar .bc-row.days,
            body div.booked-calendar .bc-row.days .bc-col,
            body .booked-calendarSwitcher.calendar,
            body #booked-profile-page .booked-tabs,
            #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,
            #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th {
                background: #f0f0f0 !important;
            }

            body div.booked-calendar .bc-row.days .bc-col,
            body #booked-profile-page .booked-tabs {
                border-color: #f0f0f0 !important;
            }

            #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,
            #ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,
            body #booked-profile-page input[type=submit].button-primary,
            body div.booked-calendar input[type=submit].button-primary,
            body .booked-list-view button.button,
            body .booked-list-view input[type=submit].button-primary,
            body .booked-list-view button.button,
            body .booked-list-view input[type=submit].button-primary,
            body .booked-modal input[type=submit].button-primary,
            body div.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
            body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,
            body #booked-profile-page .appt-block .google-cal-button>a,
            body .booked-modal p.booked-title-bar,
            body div.booked-calendar .bc-col:hover .date span,
            body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
            body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,
            .booked-ms-modal .booked-book-appt,
            body #booked-profile-page .booked-tabs li a .counter {
                background: #121c45;
            }

            body #booked-profile-page input[type=submit].button-primary,
            body div.booked-calendar input[type=submit].button-primary,
            body .booked-list-view button.button,
            body .booked-list-view input[type=submit].button-primary,
            body .booked-list-view button.button,
            body .booked-list-view input[type=submit].button-primary,
            body .booked-modal input[type=submit].button-primary,
            body #booked-profile-page .appt-block .google-cal-button>a,
            body div.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
            body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
            body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover {
                border-color: #121c45;
            }

            body .booked-modal .bm-window p i.fa,
            body .booked-modal .bm-window a,
            body .booked-appt-list .booked-public-appointment-title,
            body .booked-modal .bm-window p.appointment-title,
            .booked-ms-modal.visible:hover .booked-book-appt {
                color: #121c45;
            }

            .booked-appt-list .timeslot.has-title .booked-public-appointment-title {
                color: inherit;
            }
        </style>
        <link property="stylesheet" rel='stylesheet' id='magnific-popup-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/js/magnific/magnific-popup.min.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_demo_panels-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/css/trx_demo_panels.css' type='text/css'
            media='all' />
        <link property="stylesheet" rel='stylesheet' id='woocommerce-layout-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=9.3.5'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='woocommerce-smallscreen-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=9.3.5'
            type='text/css' media='only screen and (max-width: 768px)' />
        <link property="stylesheet" rel='stylesheet' id='woocommerce-general-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=9.3.5'
            type='text/css' media='all' />
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link property="stylesheet" rel='preload' as='font' type='font/woff2' crossorigin='anonymous'
            id='tinvwl-webfont-font-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/ti-woocommerce-wishlist/assets/fonts/tinvwl-webfont.woff2?ver=xu2uyi'
            media='all' />
        <link property="stylesheet" rel='stylesheet' id='tinvwl-webfont-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/ti-woocommerce-wishlist/assets/css/webfont.min.css?ver=2.9.2'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='tinvwl-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/ti-woocommerce-wishlist/assets/css/public.min.css?ver=2.9.2'
            type='text/css' media='all' />

        <link property="stylesheet" rel='stylesheet' id='font-awesome-official-css'
            href='https://use.fontawesome.com/releases/v6.5.1/css/all.css' type='text/css' media='all'
            integrity="sha384-t1nt8BQoYMLFN5p42tRAtuAAFQaCQODekUVeKKZrEnEyp4H2R0RHFz0KWpmj7i8g" crossorigin="anonymous" />

        <link property="stylesheet" rel='stylesheet' id='elementor-icons-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.36.0'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='elementor-frontend-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.28.4'
            type='text/css' media='all' />
        <style id='elementor-frontend-inline-css' type='text/css'>
            .elementor-kit-15 {
                --e-global-color-primary: #6EC1E4;
                --e-global-color-secondary: #54595F;
                --e-global-color-text: #7A7A7A;
                --e-global-color-accent: #61CE70;
                --e-global-color-61c01e98: #4054B2;
                --e-global-color-69bf31ed: #23A455;
                --e-global-color-7a1ccbe5: #000;
                --e-global-color-13ed1179: #FFF;
                --e-global-typography-primary-font-family: "Roboto";
                --e-global-typography-primary-font-weight: 600;
                --e-global-typography-secondary-font-family: "Roboto Slab";
                --e-global-typography-secondary-font-weight: 400;
                --e-global-typography-text-font-family: "Roboto";
                --e-global-typography-text-font-weight: 400;
                --e-global-typography-accent-font-family: "Roboto";
                --e-global-typography-accent-font-weight: 500;
            }

            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1290px;
            }

            .e-con {
                --container-max-width: 1290px;
            }

            .elementor-widget:not(:last-child) {
                margin-block-end: 0px;
            }

            .elementor-element {
                --widgets-spacing: 0px 0px;
                --widgets-spacing-row: 0px;
                --widgets-spacing-column: 0px;
            }

                {}

            .sc_layouts_title_caption {
                display: var(--page-title-display);
            }

            @media(max-width:1024px) {
                .elementor-section.elementor-section-boxed>.elementor-container {
                    max-width: 1024px;
                }

                .e-con {
                    --container-max-width: 1024px;
                }
            }

            @media(max-width:767px) {
                .elementor-section.elementor-section-boxed>.elementor-container {
                    max-width: 767px;
                }

                .e-con {
                    --container-max-width: 767px;
                }
            }

            .elementor-18822 .elementor-element.elementor-element-934c4da .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-934c4da .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-934c4da .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-75b5dba1:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-75b5dba1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-75b5dba1 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-75b5dba1 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-75b5dba1 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-75b5dba1 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-75b5dba1>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-258bde37 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-36e1a12 {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-4d29496 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-4d29496 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-a9e1e52 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-65cc05e2 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-65cc05e2 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-67a25db7 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-2f66796 {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-1707a571>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-18822 .elementor-element.elementor-element-1707a571:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-1707a571>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-background.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .elementor-18822 .elementor-element.elementor-element-1707a571>.elementor-background-overlay {
                background-color: #1D2297;
                opacity: 0.8;
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-1707a571 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-1707a571 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-1707a571 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-1707a571 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-43f1fcc4 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-28640217 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-28640217 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-5bb3b368 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-4f5a7f2 {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-3a63976 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-746ffbf2 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-5e1a97ad {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-3bab673 {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-6434fb5:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-6434fb5>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-6434fb5 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-6434fb5 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-6434fb5 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-6434fb5 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-6434fb5>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-7c8f057 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-529298a {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-1e9aff6 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-1e9aff6 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-b91af6d {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-1a10e567 .elementor-tab-title,
            .elementor-18822 .elementor-element.elementor-element-1a10e567 .elementor-tab-title:before,
            .elementor-18822 .elementor-element.elementor-element-1a10e567 .elementor-tab-title:after,
            .elementor-18822 .elementor-element.elementor-element-1a10e567 .elementor-tab-content,
            .elementor-18822 .elementor-element.elementor-element-1a10e567 .elementor-tabs-content-wrapper {
                border-width: 1px;
            }

            .elementor-18822 .elementor-element.elementor-element-df72482:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-df72482>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-df72482 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-df72482 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-df72482 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-df72482 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-df72482>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-22a1591 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-897dbee {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-5a65e667 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-5a65e667 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-5a65e667 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-317cb54a {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-566e565 {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-6d64a96f .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-6d64a96f .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-6d64a96f .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-71c7a0f9>.elementor-widget-container {
                margin: 0px 0px -30px 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-71c7a0f9 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-71c7a0f9 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-3ad76396 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-5d7bc97 {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-6b206938:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-6b206938>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-background2.jpg");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .elementor-18822 .elementor-element.elementor-element-6b206938>.elementor-background-overlay {
                background-color: #000000;
                opacity: 0.65;
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-6b206938 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-6b206938 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-6b206938 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-6b206938 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-782f46fc {
                --spacer-size: 35px;
            }

            .elementor-18822 .elementor-element.elementor-element-471367b {
                --spacer-size: 30px;
            }

            .elementor-18822 .elementor-element.elementor-element-1ae0bc1b {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-59f98ca1>.elementor-widget-container {
                padding: 0% 15% 0% 0%;
            }

            .elementor-18822 .elementor-element.elementor-element-59f98ca1 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-59f98ca1 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-307e16cd {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-46b3b3c {
                --spacer-size: 30px;
            }

            .elementor-18822 .elementor-element.elementor-element-efb98d0 {
                --spacer-size: 35px;
            }

            .elementor-bc-flex-widget .elementor-18822 .elementor-element.elementor-element-1bfbb154.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-18822 .elementor-element.elementor-element-1bfbb154.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-18822 .elementor-element.elementor-element-3732c1de {
                --spacer-size: 100px;
            }

            .elementor-18822 .elementor-element.elementor-element-fa448d3 {
                --spacer-size: 150px;
            }

            .elementor-18822 .elementor-element.elementor-element-45db03de .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-45db03de .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-2c4e699f {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-5251d603>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-18822 .elementor-element.elementor-element-5251d603:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-5251d603>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #1D2297;
            }

            .elementor-18822 .elementor-element.elementor-element-5251d603 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-5251d603 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-5251d603 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-5251d603 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-5251d603>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-26f4d351.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-18822 .elementor-element.elementor-element-26f4d351>.elementor-element-populated.elementor-column-wrap {
                padding: 0% 15% 0% 15%;
            }

            .elementor-18822 .elementor-element.elementor-element-26f4d351>.elementor-element-populated.elementor-widget-wrap {
                padding: 0% 15% 0% 15%;
            }

            .elementor-18822 .elementor-element.elementor-element-b0a6c4e {
                --spacer-size: 290px;
            }

            .elementor-18822 .elementor-element.elementor-element-1061c7f3 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-1061c7f3 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-355cff18 {
                --spacer-size: 200px;
            }

            .elementor-18822 .elementor-element.elementor-element-64870a4b {
                --spacer-size: 77px;
            }

            .elementor-18822 .elementor-element.elementor-element-7051b66b:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-18822 .elementor-element.elementor-element-7051b66b>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-image1.jpg");
                background-position: center center;
                background-size: cover;
            }

            .elementor-18822 .elementor-element.elementor-element-7051b66b>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-7051b66b>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-7652df0f {
                --spacer-size: 300px;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59 {
                width: auto;
                max-width: auto;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59>.elementor-widget-container {
                border-radius: 50px 50px 50px 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59 .elementor-icon-wrapper {
                text-align: center;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-stacked .elementor-icon {
                background-color: #FFFFFF;
                color: #141541;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-framed .elementor-icon,
            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-default .elementor-icon {
                color: #FFFFFF;
                border-color: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-framed .elementor-icon,
            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-default .elementor-icon svg {
                fill: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-framed .elementor-icon {
                background-color: #141541;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-stacked .elementor-icon svg {
                fill: #141541;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-framed .elementor-icon:hover {
                background-color: #A8C62E;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-stacked .elementor-icon:hover {
                color: #A8C62E;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59.elementor-view-stacked .elementor-icon:hover svg {
                fill: #A8C62E;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59 .elementor-icon {
                font-size: 22px;
                padding: 31px;
            }

            .elementor-18822 .elementor-element.elementor-element-241dcc59 .elementor-icon svg {
                height: 22px;
            }

            .elementor-18822 .elementor-element.elementor-element-4b3c8325 {
                --spacer-size: 300px;
            }

            .elementor-18822 .elementor-element.elementor-element-53de6d9 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-53de6d9 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-53de6d9 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-e54a095 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-ba648cd {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-a305ddf .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-a305ddf .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-ae08919 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-0d36245 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-0d36245 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-de7f9be {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-7305679 {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-faad54c:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-faad54c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-faad54c .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-faad54c .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-faad54c .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-faad54c {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-faad54c>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-cb6be9c {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-4fed8ea {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-f835e90:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-f835e90>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-f835e90 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-f835e90 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-f835e90 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-f835e90 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-f835e90>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-a999221 {
                --spacer-size: 105px;
            }

            .elementor-18822 .elementor-element.elementor-element-ca08287>.elementor-widget-container {
                padding: 0% 12% 0% 0%;
            }

            .elementor-18822 .elementor-element.elementor-element-ca08287 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-ca08287 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-e4f273e {
                --spacer-size: 35px;
            }

            body:not(.rtl) .elementor-18822 .elementor-element.elementor-element-b61b40f {
                right: 7%;
            }

            body.rtl .elementor-18822 .elementor-element.elementor-element-b61b40f {
                left: 7%;
            }

            .elementor-18822 .elementor-element.elementor-element-b61b40f {
                bottom: 10%;
                z-index: 0;
                --trx-addons-parallax-x-anchor: center;
                --trx-addons-parallax-y-anchor: center;
            }

            .elementor-18822 .elementor-element.elementor-element-b61b40f img {
                width: 100%;
                height: 427px;
            }

            .elementor-18822 .elementor-element.elementor-element-c4d8f44 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-c4d8f44 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-c4d8f44 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-c4d8f44 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-c4d8f44>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-01a3638>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-01a3638>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-092d461 {
                z-index: 1;
                text-align: center;
            }

            .elementor-18822 .elementor-element.elementor-element-25c72e5 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-25c72e5 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-25c72e5 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-25c72e5 {
                margin-top: -218px;
                margin-bottom: 0px;
                padding: 0% 10% 0% 0%;
                z-index: 3;
            }

            .elementor-18822 .elementor-element.elementor-element-d8078be:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #1ED0F1;
            }

            .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin: 0px 10px 0px 0px;
                --e-column-margin-right: 10px;
                --e-column-margin-left: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-element-populated.elementor-column-wrap {
                padding: 30px 37px 30px 37px;
            }

            .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-element-populated.elementor-widget-wrap {
                padding: 30px 37px 30px 37px;
            }

            .elementor-18822 .elementor-element.elementor-element-7ffe490 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-7ffe490 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-baf5fc3 {
                --spacer-size: 12px;
            }

            .elementor-18822 .elementor-element.elementor-element-c0b2720 {
                font-size: 17px;
                line-height: 1.3em;
                letter-spacing: -0.2px;
                color: #FFFFFFC9;
            }

            .elementor-18822 .elementor-element.elementor-element-cd08fd6:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #1D2297;
            }

            .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin: 0px 0px 0px 10px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 10px;
            }

            .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-element-populated.elementor-column-wrap {
                padding: 30px 37px 30px 37px;
            }

            .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-element-populated.elementor-widget-wrap {
                padding: 30px 37px 30px 37px;
            }

            .elementor-18822 .elementor-element.elementor-element-8ae35f0 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-8ae35f0 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-e2a1df4 {
                --spacer-size: 12px;
            }

            .elementor-18822 .elementor-element.elementor-element-34e4d0b {
                font-size: 17px;
                line-height: 1.3em;
                letter-spacing: -0.2px;
                color: #FFFFFFC9;
            }

            .elementor-18822 .elementor-element.elementor-element-9776834:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-9776834>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-9776834 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-9776834 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-9776834 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-9776834 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-9776834>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-1ecb3e0 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-6503efd {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-73ec93d>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-18822 .elementor-element.elementor-element-73ec93d .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-73ec93d .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-73ec93d .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-fd4521b .sc_googlemap {
                width: 100%;
                height: 840px;
            }

            .elementor-18822 .elementor-element.elementor-element-fd4521b .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-fd4521b .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-98fa7c6:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #1D2297;
            }

            .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-element-populated.elementor-column-wrap {
                padding: 0% 12% 0% 15%;
            }

            .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-element-populated.elementor-widget-wrap {
                padding: 0% 12% 0% 15%;
            }

            .elementor-18822 .elementor-element.elementor-element-a7dcc38 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-5fcbcec {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-89d75ce .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-89d75ce .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-af64cf3 {
                --spacer-size: 35px;
            }

            .elementor-18822 .elementor-element.elementor-element-512ab4d {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-06ff178 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-3b884f9d .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-3b884f9d .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-3b884f9d .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-3b884f9d {
                margin-top: 0px;
                margin-bottom: -230px;
            }

            .elementor-18822 .elementor-element.elementor-element-69ab1bcf {
                z-index: 2;
            }

            .elementor-18822 .elementor-element.elementor-element-6d970a19 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-f90df3e {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-960a6ab .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-960a6ab .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-68ab7668 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-1fe1e665 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-1fe1e665 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-763f97ce {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-35254f1:not(.elementor-motion-effects-element-type-background),
            .elementor-18822 .elementor-element.elementor-element-35254f1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-18822 .elementor-element.elementor-element-35254f1 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-35254f1 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-35254f1 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-35254f1 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-35254f1>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-75b983c {
                --spacer-size: 230px;
            }

            .elementor-18822 .elementor-element.elementor-element-01cd136 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-e605aa5 {
                --spacer-size: 20px;
            }

            .elementor-18822 .elementor-element.elementor-element-5eceab7f .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-18822 .elementor-element.elementor-element-5eceab7f .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-5eceab7f .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-33d650c:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-18822 .elementor-element.elementor-element-33d650c>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/02/bg-newsletter.png");
                background-position: 50% 40%;
                background-repeat: no-repeat;
                background-size: contain;
            }

            .elementor-18822 .elementor-element.elementor-element-33d650c>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-33d650c>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-18822 .elementor-element.elementor-element-33d650c>.elementor-element-populated.elementor-column-wrap {
                padding: 0% 6% 0% 6%;
            }

            .elementor-18822 .elementor-element.elementor-element-33d650c>.elementor-element-populated.elementor-widget-wrap {
                padding: 0% 6% 0% 6%;
            }

            .elementor-18822 .elementor-element.elementor-element-dfaefbe {
                --spacer-size: 40px;
            }

            .elementor-18822 .elementor-element.elementor-element-50975c9a {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-78ff56ad>.elementor-widget-container {
                margin: 0px 0px -3px 0px;
            }

            .elementor-18822 .elementor-element.elementor-element-41a74cd2 {
                --spacer-size: 50px;
            }

            .elementor-18822 .elementor-element.elementor-element-27f99e7a {
                --spacer-size: 40px;
            }

            @media(max-width:1024px) {
                .elementor-18822 .elementor-element.elementor-element-65cc05e2>.elementor-widget-container {
                    margin: 0px 0px -30px 0px;
                }

                .elementor-18822 .elementor-element.elementor-element-59f98ca1>.elementor-widget-container {
                    padding: 0% 0% 0% 0%;
                }

                .elementor-18822 .elementor-element.elementor-element-26f4d351>.elementor-element-populated.elementor-column-wrap {
                    padding: 0% 10% 0% 10%;
                }

                .elementor-18822 .elementor-element.elementor-element-26f4d351>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0% 10% 0% 10%;
                }

                .elementor-18822 .elementor-element.elementor-element-b0a6c4e {
                    --spacer-size: 180px;
                }

                .elementor-18822 .elementor-element.elementor-element-355cff18 {
                    --spacer-size: 120px;
                }

                .elementor-18822 .elementor-element.elementor-element-64870a4b {
                    --spacer-size: 80px;
                }

                .elementor-18822 .elementor-element.elementor-element-a999221 {
                    --spacer-size: 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-ca08287>.elementor-widget-container {
                    padding: 0% 0% 0% 0%;
                }

                .elementor-18822 .elementor-element.elementor-element-e4f273e {
                    --spacer-size: 30px;
                }

                body:not(.rtl) .elementor-18822 .elementor-element.elementor-element-b61b40f {
                    right: 4%;
                }

                body.rtl .elementor-18822 .elementor-element.elementor-element-b61b40f {
                    left: 4%;
                }

                .elementor-18822 .elementor-element.elementor-element-b61b40f {
                    bottom: 30%;
                }

                .elementor-18822 .elementor-element.elementor-element-b61b40f img {
                    height: 230px;
                }

                .elementor-18822 .elementor-element.elementor-element-25c72e5 {
                    margin-top: -160px;
                    margin-bottom: 0px;
                }

                .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-element-populated.elementor-column-wrap {
                    padding: 20px 20px 20px 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-element-populated.elementor-widget-wrap {
                    padding: 20px 20px 20px 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-c0b2720 {
                    font-size: 16px;
                }

                .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-element-populated.elementor-column-wrap {
                    padding: 20px 20px 20px 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-element-populated.elementor-widget-wrap {
                    padding: 20px 20px 20px 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-34e4d0b {
                    font-size: 16px;
                }

                .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-element-populated.elementor-column-wrap {
                    padding: 0% 10% 0% 10%;
                }

                .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0% 10% 0% 10%;
                }

                .elementor-18822 .elementor-element.elementor-element-763f97ce {
                    --spacer-size: 30px;
                }
            }

            @media(max-width:767px) {
                .elementor-18822 .elementor-element.elementor-element-65cc05e2>.elementor-widget-container {
                    margin: 0px 0px -20px 0px;
                }

                .elementor-18822 .elementor-element.elementor-element-746ffbf2 {
                    --spacer-size: 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-59f98ca1>.elementor-widget-container {
                    padding: 0% 23% 0% 0%;
                }

                .elementor-18822 .elementor-element.elementor-element-3732c1de {
                    --spacer-size: 30px;
                }

                .elementor-18822 .elementor-element.elementor-element-26f4d351>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 20px 0px 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-26f4d351>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 20px 0px 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-b0a6c4e {
                    --spacer-size: 60px;
                }

                .elementor-18822 .elementor-element.elementor-element-355cff18 {
                    --spacer-size: 40px;
                }

                .elementor-18822 .elementor-element.elementor-element-64870a4b {
                    --spacer-size: 60px;
                }

                .elementor-18822 .elementor-element.elementor-element-241dcc59 .elementor-icon-wrapper {
                    text-align: left;
                }

                .elementor-18822 .elementor-element.elementor-element-0d36245>.elementor-widget-container {
                    margin: 0px 0px -10px 0px;
                }

                .elementor-18822 .elementor-element.elementor-element-e4f273e {
                    --spacer-size: 20px;
                }

                .elementor-18822 .elementor-element.elementor-element-b161415>.elementor-element-populated {
                    margin: 20px 0px 0px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                }

                .elementor-18822 .elementor-element.elementor-element-b61b40f img {
                    height: 250px;
                }

                .elementor-18822 .elementor-element.elementor-element-25c72e5 {
                    margin-top: -140px;
                    margin-bottom: 0px;
                    padding: 0px 0px 0px 0px;
                }

                .elementor-18822 .elementor-element.elementor-element-d8078be {
                    width: 50%;
                }

                .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-element-populated.elementor-column-wrap {
                    padding: 18px 18px 18px 18px;
                }

                .elementor-18822 .elementor-element.elementor-element-d8078be>.elementor-element-populated.elementor-widget-wrap {
                    padding: 18px 18px 18px 18px;
                }

                .elementor-18822 .elementor-element.elementor-element-baf5fc3 {
                    --spacer-size: 10px;
                }

                .elementor-18822 .elementor-element.elementor-element-c0b2720 {
                    font-size: 15px;
                }

                .elementor-18822 .elementor-element.elementor-element-cd08fd6 {
                    width: 50%;
                }

                .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-element-populated.elementor-column-wrap {
                    padding: 18px 18px 18px 18px;
                }

                .elementor-18822 .elementor-element.elementor-element-cd08fd6>.elementor-element-populated.elementor-widget-wrap {
                    padding: 18px 18px 18px 18px;
                }

                .elementor-18822 .elementor-element.elementor-element-e2a1df4 {
                    --spacer-size: 10px;
                }

                .elementor-18822 .elementor-element.elementor-element-34e4d0b {
                    font-size: 15px;
                }

                .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 25px 0px 25px;
                }

                .elementor-18822 .elementor-element.elementor-element-98fa7c6>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 25px 0px 25px;
                }

                .elementor-18822 .elementor-element.elementor-element-af64cf3 {
                    --spacer-size: 25px;
                }

                .elementor-18822 .elementor-element.elementor-element-33d650c:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
                .elementor-18822 .elementor-element.elementor-element-33d650c>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                    background-position: 0% 0%;
                }

                .elementor-18822 .elementor-element.elementor-element-33d650c>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 10px 0px 10px;
                }

                .elementor-18822 .elementor-element.elementor-element-33d650c>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 10px 0px 10px;
                }
            }

            @media(min-width:768px) {
                .elementor-18822 .elementor-element.elementor-element-42c25f14 {
                    width: 70%;
                }

                .elementor-18822 .elementor-element.elementor-element-132202d0 {
                    width: 29.962%;
                }

                .elementor-18822 .elementor-element.elementor-element-5a293ff {
                    width: 45%;
                }

                .elementor-18822 .elementor-element.elementor-element-b161415 {
                    width: 55%;
                }

                .elementor-18822 .elementor-element.elementor-element-0799f72 {
                    width: 25.409%;
                }

                .elementor-18822 .elementor-element.elementor-element-01a3638 {
                    width: 74.591%;
                }

                .elementor-18822 .elementor-element.elementor-element-70a8a478 {
                    width: 10%;
                }

                .elementor-18822 .elementor-element.elementor-element-33d650c {
                    width: 78.665%;
                }

                .elementor-18822 .elementor-element.elementor-element-5028191d {
                    width: 10%;
                }
            }

            @media(max-width:1024px) and (min-width:768px) {
                .elementor-18822 .elementor-element.elementor-element-0799f72 {
                    width: 20%;
                }

                .elementor-18822 .elementor-element.elementor-element-01a3638 {
                    width: 80%;
                }

                .elementor-18822 .elementor-element.elementor-element-545ec44 {
                    width: 100%;
                }

                .elementor-18822 .elementor-element.elementor-element-98fa7c6 {
                    width: 100%;
                }
            }
        </style>
        <link property="stylesheet" rel='stylesheet' id='widget-spacer-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/css/widget-spacer.min.css?ver=3.28.4'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='widget-tabs-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/css/widget-tabs.min.css?ver=3.28.4'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='widget-image-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.28.4'
            type='text/css' media='all' />
        <style id="elementor-post-16981">
            .elementor-16981 .elementor-element.elementor-element-dda2204>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-16981 .elementor-element.elementor-element-dda2204 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-16981 .elementor-element.elementor-element-dda2204 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-16981 .elementor-element.elementor-element-dda2204 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-16981 .elementor-element.elementor-element-dda2204 {
                padding: 20px 55px 20px 55px;
            }

            .elementor-16981 .elementor-element.elementor-element-13620b>.elementor-widget-container {
                margin: 4px 55px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-13620b .logo_image {
                max-height: 50px;
            }

            .elementor-16981 .elementor-element.elementor-element-cfb610f>.elementor-widget-container {
                margin: 0px 7px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-5117b5cc>.elementor-widget-container {
                margin: -2px 0px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-98552ab>.elementor-widget-container {
                margin: 0px 20px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-0b5c6fe>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-16981 .elementor-element.elementor-element-0b5c6fe>.elementor-container {
                min-height: 80px;
            }

            .elementor-16981 .elementor-element.elementor-element-0b5c6fe .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-16981 .elementor-element.elementor-element-0b5c6fe .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-16981 .elementor-element.elementor-element-0b5c6fe .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-16981 .elementor-element.elementor-element-0b5c6fe {
                padding: 0px 55px 0px 55px;
            }

            .elementor-16981 .elementor-element.elementor-element-f617bce>.elementor-widget-container {
                margin: 4px 0px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-f617bce .logo_image {
                max-height: 45px;
            }

            .elementor-16981 .elementor-element.elementor-element-ebadef2>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-8734d73>.elementor-widget-container {
                margin: -2px 0px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-d466509>.elementor-widget-container {
                margin: 0px 10px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-9b47173>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-16981 .elementor-element.elementor-element-9b47173:not(.elementor-motion-effects-element-type-background),
            .elementor-16981 .elementor-element.elementor-element-9b47173>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-16981 .elementor-element.elementor-element-9b47173 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-16981 .elementor-element.elementor-element-9b47173 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-16981 .elementor-element.elementor-element-9b47173 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-16981 .elementor-element.elementor-element-9b47173 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 5px 0px 5px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-9b47173>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-16981 .elementor-element.elementor-element-595adcb>.elementor-widget-container {
                margin: 2px 0px 0px 0px;
            }

            .elementor-16981 .elementor-element.elementor-element-595adcb .logo_image {
                max-height: 40px;
            }

            .trx-addons-layout--edit-mode .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            .trx-addons-layout--single-preview .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            @media(max-width:1024px) {
                .elementor-16981 .elementor-element.elementor-element-dda2204 {
                    padding: 10px 20px 10px 20px;
                }

                .elementor-16981 .elementor-element.elementor-element-0b5c6fe {
                    padding: 10px 20px 10px 20px;
                }
            }

            @media(max-width:767px) {
                .elementor-16981 .elementor-element.elementor-element-47bf8dc {
                    width: 50%;
                }

                .elementor-16981 .elementor-element.elementor-element-154c173 {
                    width: 50%;
                }
            }

            @media(min-width:768px) {
                .elementor-16981 .elementor-element.elementor-element-5b70e8c4 {
                    width: 66.019%;
                }

                .elementor-16981 .elementor-element.elementor-element-3742cd7a {
                    width: 33.943%;
                }

                .elementor-16981 .elementor-element.elementor-element-8d8a505 {
                    width: 66%;
                }

                .elementor-16981 .elementor-element.elementor-element-1b9d7ee {
                    width: 33.962%;
                }

                .elementor-16981 .elementor-element.elementor-element-47bf8dc {
                    width: 24.999%;
                }

                .elementor-16981 .elementor-element.elementor-element-154c173 {
                    width: 75.001%;
                }
            }
        </style>
        <style id="elementor-post-19055">
            .elementor-19055 .elementor-element.elementor-element-21123dff:not(.elementor-motion-effects-element-type-background),
            .elementor-19055 .elementor-element.elementor-element-21123dff>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-19055 .elementor-element.elementor-element-21123dff .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19055 .elementor-element.elementor-element-21123dff .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19055 .elementor-element.elementor-element-21123dff .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19055 .elementor-element.elementor-element-21123dff {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 0px 0px 0px 0px;
            }

            .elementor-19055 .elementor-element.elementor-element-21123dff>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-bc-flex-widget .elementor-19055 .elementor-element.elementor-element-44fd758.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-19055 .elementor-element.elementor-element-44fd758.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-19055 .elementor-element.elementor-element-44fd758>.elementor-element-populated.elementor-column-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19055 .elementor-element.elementor-element-44fd758>.elementor-element-populated.elementor-widget-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19055 .elementor-element.elementor-element-715e63b1 {
                --spacer-size: 50px;
            }

            .elementor-19055 .elementor-element.elementor-element-9603a50 {
                --spacer-size: 50px;
            }

            .elementor-19055 .elementor-element.elementor-element-4f14a067 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19055 .elementor-element.elementor-element-4f14a067 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19055 .elementor-element.elementor-element-231feb1b {
                --spacer-size: 35px;
            }

            .elementor-19055 .elementor-element.elementor-element-5c9e0201 {
                --spacer-size: 50px;
            }

            .elementor-19055 .elementor-element.elementor-element-549151a8:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-19055 .elementor-element.elementor-element-549151a8>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/02/home1-image3.jpg");
                background-position: center center;
                background-size: cover;
            }

            .elementor-19055 .elementor-element.elementor-element-549151a8>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-19055 .elementor-element.elementor-element-549151a8>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19055 .elementor-element.elementor-element-23476dc8 {
                --spacer-size: 250px;
            }

            .trx-addons-layout--edit-mode .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            .trx-addons-layout--single-preview .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            @media(min-width:768px) {
                .elementor-19055 .elementor-element.elementor-element-44fd758 {
                    width: 50%;
                }

                .elementor-19055 .elementor-element.elementor-element-549151a8 {
                    width: 49.961%;
                }
            }

            @media(max-width:1024px) {
                .elementor-19055 .elementor-element.elementor-element-44fd758>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 50px 0px 0px;
                }

                .elementor-19055 .elementor-element.elementor-element-44fd758>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 50px 0px 0px;
                }
            }

            @media(max-width:767px) {
                .elementor-19055 .elementor-element.elementor-element-44fd758>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19055 .elementor-element.elementor-element-44fd758>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19055 .elementor-element.elementor-element-231feb1b {
                    --spacer-size: 20px;
                }
            }
        </style>
        <style id="elementor-post-19056">
            .elementor-19056 .elementor-element.elementor-element-7c7638c:not(.elementor-motion-effects-element-type-background),
            .elementor-19056 .elementor-element.elementor-element-7c7638c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-19056 .elementor-element.elementor-element-7c7638c .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19056 .elementor-element.elementor-element-7c7638c .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19056 .elementor-element.elementor-element-7c7638c .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19056 .elementor-element.elementor-element-7c7638c {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 0px 0px 0px 0px;
            }

            .elementor-19056 .elementor-element.elementor-element-7c7638c>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-bc-flex-widget .elementor-19056 .elementor-element.elementor-element-1f7ef07.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-19056 .elementor-element.elementor-element-1f7ef07.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-19056 .elementor-element.elementor-element-1f7ef07>.elementor-element-populated.elementor-column-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19056 .elementor-element.elementor-element-1f7ef07>.elementor-element-populated.elementor-widget-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19056 .elementor-element.elementor-element-a935ad9 {
                --spacer-size: 50px;
            }

            .elementor-19056 .elementor-element.elementor-element-d10714c {
                --spacer-size: 50px;
            }

            .elementor-19056 .elementor-element.elementor-element-35887c9 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19056 .elementor-element.elementor-element-35887c9 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19056 .elementor-element.elementor-element-2002f98 {
                --spacer-size: 35px;
            }

            .elementor-19056 .elementor-element.elementor-element-5e80cd8 {
                --spacer-size: 50px;
            }

            .elementor-19056 .elementor-element.elementor-element-6285110:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-19056 .elementor-element.elementor-element-6285110>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/02/home1-image4.jpg");
                background-position: center center;
                background-size: cover;
            }

            .elementor-19056 .elementor-element.elementor-element-6285110>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-19056 .elementor-element.elementor-element-6285110>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19056 .elementor-element.elementor-element-74e9109 {
                --spacer-size: 250px;
            }

            .trx-addons-layout--edit-mode .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            .trx-addons-layout--single-preview .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            @media(min-width:768px) {
                .elementor-19056 .elementor-element.elementor-element-1f7ef07 {
                    width: 50%;
                }

                .elementor-19056 .elementor-element.elementor-element-6285110 {
                    width: 49.961%;
                }
            }

            @media(max-width:1024px) {
                .elementor-19056 .elementor-element.elementor-element-1f7ef07>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 50px 0px 0px;
                }

                .elementor-19056 .elementor-element.elementor-element-1f7ef07>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 50px 0px 0px;
                }
            }

            @media(max-width:767px) {
                .elementor-19056 .elementor-element.elementor-element-1f7ef07>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19056 .elementor-element.elementor-element-1f7ef07>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19056 .elementor-element.elementor-element-2002f98 {
                    --spacer-size: 20px;
                }
            }
        </style>
        <style id="elementor-post-19057">
            .elementor-19057 .elementor-element.elementor-element-8063ca9:not(.elementor-motion-effects-element-type-background),
            .elementor-19057 .elementor-element.elementor-element-8063ca9>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-19057 .elementor-element.elementor-element-8063ca9 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19057 .elementor-element.elementor-element-8063ca9 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19057 .elementor-element.elementor-element-8063ca9 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19057 .elementor-element.elementor-element-8063ca9 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 0px 0px 0px 0px;
            }

            .elementor-19057 .elementor-element.elementor-element-8063ca9>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-bc-flex-widget .elementor-19057 .elementor-element.elementor-element-b7760f0.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-19057 .elementor-element.elementor-element-b7760f0.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-19057 .elementor-element.elementor-element-b7760f0>.elementor-element-populated.elementor-column-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19057 .elementor-element.elementor-element-b7760f0>.elementor-element-populated.elementor-widget-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19057 .elementor-element.elementor-element-1aa1ee5 {
                --spacer-size: 50px;
            }

            .elementor-19057 .elementor-element.elementor-element-e6d88e9 {
                --spacer-size: 50px;
            }

            .elementor-19057 .elementor-element.elementor-element-d94db44 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19057 .elementor-element.elementor-element-d94db44 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19057 .elementor-element.elementor-element-2ebec82 {
                --spacer-size: 35px;
            }

            .elementor-19057 .elementor-element.elementor-element-beb6595 {
                --spacer-size: 50px;
            }

            .elementor-19057 .elementor-element.elementor-element-539f41a:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-19057 .elementor-element.elementor-element-539f41a>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/02/home1-image5.jpg");
                background-position: bottom center;
                background-size: cover;
            }

            .elementor-19057 .elementor-element.elementor-element-539f41a>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-19057 .elementor-element.elementor-element-539f41a>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19057 .elementor-element.elementor-element-5ce8996 {
                --spacer-size: 250px;
            }

            .trx-addons-layout--edit-mode .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            .trx-addons-layout--single-preview .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            @media(min-width:768px) {
                .elementor-19057 .elementor-element.elementor-element-b7760f0 {
                    width: 50%;
                }

                .elementor-19057 .elementor-element.elementor-element-539f41a {
                    width: 49.961%;
                }
            }

            @media(max-width:1024px) {
                .elementor-19057 .elementor-element.elementor-element-b7760f0>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 50px 0px 0px;
                }

                .elementor-19057 .elementor-element.elementor-element-b7760f0>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 50px 0px 0px;
                }
            }

            @media(max-width:767px) {
                .elementor-19057 .elementor-element.elementor-element-b7760f0>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19057 .elementor-element.elementor-element-b7760f0>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19057 .elementor-element.elementor-element-2ebec82 {
                    --spacer-size: 20px;
                }
            }
        </style>
        <style id="elementor-post-19058">
            .elementor-19058 .elementor-element.elementor-element-a3e4536:not(.elementor-motion-effects-element-type-background),
            .elementor-19058 .elementor-element.elementor-element-a3e4536>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-19058 .elementor-element.elementor-element-a3e4536 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19058 .elementor-element.elementor-element-a3e4536 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19058 .elementor-element.elementor-element-a3e4536 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19058 .elementor-element.elementor-element-a3e4536 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 0px 0px 0px 0px;
            }

            .elementor-19058 .elementor-element.elementor-element-a3e4536>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-bc-flex-widget .elementor-19058 .elementor-element.elementor-element-14b1d8b.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-19058 .elementor-element.elementor-element-14b1d8b.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-19058 .elementor-element.elementor-element-14b1d8b>.elementor-element-populated.elementor-column-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19058 .elementor-element.elementor-element-14b1d8b>.elementor-element-populated.elementor-widget-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19058 .elementor-element.elementor-element-3e1eb31 {
                --spacer-size: 50px;
            }

            .elementor-19058 .elementor-element.elementor-element-9c4dfb6 {
                --spacer-size: 50px;
            }

            .elementor-19058 .elementor-element.elementor-element-ec745c9 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19058 .elementor-element.elementor-element-ec745c9 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19058 .elementor-element.elementor-element-a771a1a {
                --spacer-size: 35px;
            }

            .elementor-19058 .elementor-element.elementor-element-24f2f0d {
                --spacer-size: 50px;
            }

            .elementor-19058 .elementor-element.elementor-element-6c33634:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-19058 .elementor-element.elementor-element-6c33634>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/02/home1-image6.jpg");
                background-position: center center;
                background-size: cover;
            }

            .elementor-19058 .elementor-element.elementor-element-6c33634>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-19058 .elementor-element.elementor-element-6c33634>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19058 .elementor-element.elementor-element-ac8223c {
                --spacer-size: 250px;
            }

            .trx-addons-layout--edit-mode .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            .trx-addons-layout--single-preview .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            @media(min-width:768px) {
                .elementor-19058 .elementor-element.elementor-element-14b1d8b {
                    width: 50%;
                }

                .elementor-19058 .elementor-element.elementor-element-6c33634 {
                    width: 49.961%;
                }
            }

            @media(max-width:1024px) {
                .elementor-19058 .elementor-element.elementor-element-14b1d8b>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 50px 0px 0px;
                }

                .elementor-19058 .elementor-element.elementor-element-14b1d8b>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 50px 0px 0px;
                }
            }

            @media(max-width:767px) {
                .elementor-19058 .elementor-element.elementor-element-14b1d8b>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19058 .elementor-element.elementor-element-14b1d8b>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19058 .elementor-element.elementor-element-a771a1a {
                    --spacer-size: 20px;
                }
            }
        </style>
        <style id="elementor-post-19059">
            .elementor-19059 .elementor-element.elementor-element-eb55e39:not(.elementor-motion-effects-element-type-background),
            .elementor-19059 .elementor-element.elementor-element-eb55e39>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #FFFFFF;
            }

            .elementor-19059 .elementor-element.elementor-element-eb55e39 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19059 .elementor-element.elementor-element-eb55e39 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19059 .elementor-element.elementor-element-eb55e39 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19059 .elementor-element.elementor-element-eb55e39 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 0px 0px 0px 0px;
            }

            .elementor-19059 .elementor-element.elementor-element-eb55e39>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-bc-flex-widget .elementor-19059 .elementor-element.elementor-element-cf65b97.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-19059 .elementor-element.elementor-element-cf65b97.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-19059 .elementor-element.elementor-element-cf65b97>.elementor-element-populated.elementor-column-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19059 .elementor-element.elementor-element-cf65b97>.elementor-element-populated.elementor-widget-wrap {
                padding: 0% 20% 0% 0%;
            }

            .elementor-19059 .elementor-element.elementor-element-c6b769c {
                --spacer-size: 50px;
            }

            .elementor-19059 .elementor-element.elementor-element-1912582 {
                --spacer-size: 50px;
            }

            .elementor-19059 .elementor-element.elementor-element-ecdc746 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19059 .elementor-element.elementor-element-ecdc746 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19059 .elementor-element.elementor-element-9d3458d {
                --spacer-size: 35px;
            }

            .elementor-19059 .elementor-element.elementor-element-4308e92 {
                --spacer-size: 50px;
            }

            .elementor-19059 .elementor-element.elementor-element-dd34b1a:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-19059 .elementor-element.elementor-element-dd34b1a>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/02/home1-image7.jpg");
                background-position: bottom center;
                background-size: cover;
            }

            .elementor-19059 .elementor-element.elementor-element-dd34b1a>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-19059 .elementor-element.elementor-element-dd34b1a>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19059 .elementor-element.elementor-element-48caada {
                --spacer-size: 250px;
            }

            .trx-addons-layout--edit-mode .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            .trx-addons-layout--single-preview .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            @media(min-width:768px) {
                .elementor-19059 .elementor-element.elementor-element-cf65b97 {
                    width: 50%;
                }

                .elementor-19059 .elementor-element.elementor-element-dd34b1a {
                    width: 49.961%;
                }
            }

            @media(max-width:1024px) {
                .elementor-19059 .elementor-element.elementor-element-cf65b97>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 50px 0px 0px;
                }

                .elementor-19059 .elementor-element.elementor-element-cf65b97>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 50px 0px 0px;
                }
            }

            @media(max-width:767px) {
                .elementor-19059 .elementor-element.elementor-element-cf65b97>.elementor-element-populated.elementor-column-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19059 .elementor-element.elementor-element-cf65b97>.elementor-element-populated.elementor-widget-wrap {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19059 .elementor-element.elementor-element-9d3458d {
                    --spacer-size: 20px;
                }
            }
        </style>
        <style id="elementor-post-19240">
            .elementor-19240 .elementor-element.elementor-element-4a242fd:not(.elementor-motion-effects-element-type-background),
            .elementor-19240 .elementor-element.elementor-element-4a242fd>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #10123C;
            }

            .elementor-19240 .elementor-element.elementor-element-4a242fd .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19240 .elementor-element.elementor-element-4a242fd .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-4a242fd .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-4a242fd {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-19240 .elementor-element.elementor-element-4a242fd>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19240 .elementor-element.elementor-element-5995454 {
                --spacer-size: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-aa8fcc8 {
                --spacer-size: 10px;
            }

            .elementor-19240 .elementor-element.elementor-element-3e3fe74:not(.elementor-motion-effects-element-type-background),
            .elementor-19240 .elementor-element.elementor-element-3e3fe74>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #10123C;
            }

            .elementor-19240 .elementor-element.elementor-element-3e3fe74 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19240 .elementor-element.elementor-element-3e3fe74 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-3e3fe74 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-3e3fe74 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 0px 0px 0px 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-3e3fe74>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19240 .elementor-element.elementor-element-ba7bf8d .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-ba7bf8d .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-c6b8c08 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-c6b8c08 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-16bcc7d {
                --spacer-size: 6px;
            }

            .elementor-19240 .elementor-element.elementor-element-7b9e520 {
                --spacer-size: 10px;
            }

            .elementor-19240 .elementor-element.elementor-element-ceda11b .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-ceda11b .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-ca70b6d .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-ca70b6d .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-b68f402 {
                --spacer-size: 6px;
            }

            .elementor-19240 .elementor-element.elementor-element-aab8a73 {
                --spacer-size: 4px;
            }

            .elementor-19240 .elementor-element.elementor-element-dbfdd12:not(.elementor-motion-effects-element-type-background),
            .elementor-19240 .elementor-element.elementor-element-dbfdd12>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #10123C;
            }

            .elementor-19240 .elementor-element.elementor-element-dbfdd12 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19240 .elementor-element.elementor-element-dbfdd12 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-dbfdd12 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-dbfdd12 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 0px 0px 0px 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-dbfdd12>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19240 .elementor-element.elementor-element-4031e5b {
                --spacer-size: 5px;
            }

            .elementor-19240 .elementor-element.elementor-element-8e7bc71 {
                --spacer-size: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-36808df {
                --divider-border-style: solid;
                --divider-color: #33356B;
                --divider-border-width: 1px;
            }

            .elementor-19240 .elementor-element.elementor-element-36808df .elementor-divider-separator {
                width: 100%;
            }

            .elementor-19240 .elementor-element.elementor-element-36808df .elementor-divider {
                padding-block-start: 10px;
                padding-block-end: 10px;
            }

            .elementor-19240 .elementor-element.elementor-element-73f3115>.elementor-container>.elementor-column>.elementor-widget-wrap {
                align-content: center;
                align-items: center;
            }

            .elementor-19240 .elementor-element.elementor-element-73f3115:not(.elementor-motion-effects-element-type-background),
            .elementor-19240 .elementor-element.elementor-element-73f3115>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-color: #10123C;
            }

            .elementor-19240 .elementor-element.elementor-element-73f3115 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-19240 .elementor-element.elementor-element-73f3115 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-73f3115 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-19240 .elementor-element.elementor-element-73f3115 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 0px 0px 10px 0px;
            }

            .elementor-19240 .elementor-element.elementor-element-73f3115>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-19240 .elementor-element.elementor-element-026f36b {
                font-size: 15px;
                color: #D4D5F0;
            }

            .trx-addons-layout--edit-mode .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            .trx-addons-layout--single-preview .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            @media(max-width:767px) {
                .elementor-19240 .elementor-element.elementor-element-3eea76d>.elementor-element-populated {
                    margin: 20px 0px 0px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                }

                .elementor-19240 .elementor-element.elementor-element-7b9e520 {
                    --spacer-size: 5px;
                }

                .elementor-19240 .elementor-element.elementor-element-6faf73b>.elementor-element-populated {
                    margin: 20px 0px 0px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                }

                .elementor-19240 .elementor-element.elementor-element-73f3115 {
                    padding: 0px 0px 0px 0px;
                }

                .elementor-19240 .elementor-element.elementor-element-810521d>.elementor-element-populated {
                    margin: -2px 0px 21px 0px;
                    --e-column-margin-right: 0px;
                    --e-column-margin-left: 0px;
                }
            }

            @media(min-width:768px) {
                .elementor-19240 .elementor-element.elementor-element-eb132f3 {
                    width: 52.424%;
                }

                .elementor-19240 .elementor-element.elementor-element-3eea76d {
                    width: 24.242%;
                }

                .elementor-19240 .elementor-element.elementor-element-6faf73b {
                    width: 22.974%;
                }

                .elementor-19240 .elementor-element.elementor-element-b282872 {
                    width: 61.97%;
                }

                .elementor-19240 .elementor-element.elementor-element-810521d {
                    width: 37.992%;
                }
            }

            @media(max-width:1024px) and (min-width:768px) {
                .elementor-19240 .elementor-element.elementor-element-eb132f3 {
                    width: 34%;
                }

                .elementor-19240 .elementor-element.elementor-element-3eea76d {
                    width: 33%;
                }

                .elementor-19240 .elementor-element.elementor-element-6faf73b {
                    width: 33%;
                }
            }
        </style>
        <style id="elementor-post-7074">
            .elementor-7074 .elementor-element.elementor-element-d394f72 .trx_addons_bg_text {
                z-index: 0;
            }

            .elementor-7074 .elementor-element.elementor-element-d394f72 .trx_addons_bg_text.trx_addons_marquee_wrap:not(.trx_addons_marquee_reverse) .trx_addons_marquee_element {
                padding-right: 50px;
            }

            .elementor-7074 .elementor-element.elementor-element-d394f72 .trx_addons_bg_text.trx_addons_marquee_wrap.trx_addons_marquee_reverse .trx_addons_marquee_element {
                padding-left: 50px;
            }

            .elementor-7074 .elementor-element.elementor-element-91a3141:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
            .elementor-7074 .elementor-element.elementor-element-91a3141>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-image: url("https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home2-image3.jpg");
                background-position: bottom center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .elementor-7074 .elementor-element.elementor-element-91a3141>.elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            }

            .elementor-7074 .elementor-element.elementor-element-91a3141>.elementor-element-populated>.elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }

            .elementor-7074 .elementor-element.elementor-element-637990e {
                --spacer-size: 580px;
            }

            .elementor-bc-flex-widget .elementor-7074 .elementor-element.elementor-element-48d3da0.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-7074 .elementor-element.elementor-element-48d3da0.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-7074 .elementor-element.elementor-element-48d3da0>.elementor-element-populated.elementor-column-wrap {
                padding: 40px 62px 40px 62px;
            }

            .elementor-7074 .elementor-element.elementor-element-48d3da0>.elementor-element-populated.elementor-widget-wrap {
                padding: 40px 62px 40px 62px;
            }

            .elementor-7074 .elementor-element.elementor-element-9efa3b4>.elementor-widget-container {
                margin: -10px 0px 0px 0px;
            }

            .elementor-7074 .elementor-element.elementor-element-9efa3b4 .sc_item_title_text {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-7074 .elementor-element.elementor-element-9efa3b4 .sc_item_title_text2 {
                -webkit-text-stroke-width: 0px;
            }

            .elementor-7074 .elementor-element.elementor-element-0f09534 {
                --spacer-size: 28px;
            }

            .trx-addons-layout--edit-mode .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            .trx-addons-layout--single-preview .trx-addons-layout__inner {
                background-color: var(--theme-color-bg_color);
            }

            @media(max-width:1024px) {
                .elementor-7074 .elementor-element.elementor-element-637990e {
                    --spacer-size: 250px;
                }

                .elementor-7074 .elementor-element.elementor-element-48d3da0>.elementor-element-populated.elementor-column-wrap {
                    padding: 35px 30px 35px 30px;
                }

                .elementor-7074 .elementor-element.elementor-element-48d3da0>.elementor-element-populated.elementor-widget-wrap {
                    padding: 35px 30px 35px 30px;
                }

                .elementor-7074 .elementor-element.elementor-element-9efa3b4>.elementor-widget-container {
                    margin: -5px 0px 0px 0px;
                }

                .elementor-7074 .elementor-element.elementor-element-0f09534 {
                    --spacer-size: 14px;
                }
            }

            @media(max-width:767px) {
                .elementor-7074 .elementor-element.elementor-element-637990e {
                    --spacer-size: 200px;
                }

                .elementor-7074 .elementor-element.elementor-element-48d3da0>.elementor-element-populated.elementor-column-wrap {
                    padding: 25px 25px 25px 25px;
                }

                .elementor-7074 .elementor-element.elementor-element-48d3da0>.elementor-element-populated.elementor-widget-wrap {
                    padding: 25px 25px 25px 25px;
                }

                .elementor-7074 .elementor-element.elementor-element-9efa3b4>.elementor-widget-container {
                    margin: 0px 0px 0px 0px;
                }

                .elementor-7074 .elementor-element.elementor-element-0f09534 {
                    --spacer-size: 6px;
                }
            }
        </style>
        <link property="stylesheet" rel='stylesheet' id='swiper-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='widget-divider-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.28.4'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/css/__styles.css' type='text/css'
            media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_googlemap-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/googlemap/googlemap.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_googlemap-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/googlemap/googlemap.responsive.css'
            type='text/css' media='(max-width:1023px)' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_content-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/content/content.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_content-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/content/content.responsive.css'
            type='text/css' media='(max-width:1439px)' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-animations-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/css/trx_addons.animations.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-cf7-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/api/contact-form-7/contact-form-7.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-woocommerce-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/api/woocommerce/woocommerce.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-cpt_services-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/cpt/services/services.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-cpt_testimonials-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/cpt/testimonials/testimonials.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_blogger-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/blogger/blogger.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_icons-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/icons/icons.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_skills-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/skills/skills.css'
            type='text/css' media='all' />















        <link href="//fonts.googleapis.com/css?family=Roboto:400%7CWork+Sans:500%2C400%2C700&display=swap"
            rel="stylesheet" property="stylesheet" media="all" type="text/css">
        <link property="stylesheet" rel='stylesheet' id='wc-blocks-style-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-9.3.5'
            type='text/css' media='all' />


        <style id='core-block-supports-inline-css' type='text/css'>
            .wp-block-gallery.wp-block-gallery-1 {
                --wp--style--unstable-gallery-gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
                gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
            }

            .wp-block-gallery.wp-block-gallery-2 {
                --wp--style--unstable-gallery-gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
                gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
            }

            .wp-block-gallery.wp-block-gallery-3 {
                --wp--style--unstable-gallery-gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
                gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
            }

            .wp-block-gallery.wp-block-gallery-4 {
                --wp--style--unstable-gallery-gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
                gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
            }
        </style>
        <link property="stylesheet" rel='stylesheet' id='rs-plugin-settings-css'
            href='//greeny.axiomthemes.com/wp-content/plugins/revslider/sr6/assets/css/rs6.css?ver=6.7.32' type='text/css'
            media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
            @media (max-width:1440px) and (min-width:1439px) {
                .slider-row-wrap {
                    padding-left: 75px !important
                }
            }

            @media (max-width:1439px) and (min-width:1280px) {
                .slider-row-wrap {
                    padding-left: 11vw !important;
                    padding-left: calc((102vw - var(--theme-var-page) - var(--theme-var-elm_gap_extended)) / 2) !important
                }
            }

            @media (max-width:1279px) and (min-width:769px) {
                .slider-row-wrap {
                    padding-left: 50px !important
                }
            }

            @media (max-width:899px) and (min-width:769px) {
                .slider-row-wrap {
                    padding-left: 30px !important
                }
            }

            @media (max-width:1023px) and (min-width:769px) {
                .sldr-title {
                    font-size: 46px !important;
                    line-height: 40px !important
                }
            }

            @media (max-width:1136px) and (min-width:778px) {
                .sldr-hide {
                    display: none !important
                }
            }

            @media (max-width:1136px) {
                .tp-bullets.bullets_lines {
                    transform: translate(-81px, -77px) !important
                }
            }

            @media (max-width:1440px) {
                .tp-bullets.bullets_dots_fill {
                    width: auto !important;
                    transform: translate(-50%, -50px) !important;
                    display: flex
                }

                .tp-bullets.bullets_dots_fill rs-bullet {
                    display: flex !important;
                    margin-right: 20px;
                    position: relative !important;
                    left: 0 !important
                }

                .tp-bullets.bullets_dots_fill rs-bullet:last-child {
                    margin-right: 0px
                }
            }

            @media (max-width:1023px) {
                .tp-bullets.bullets_dots_fill {
                    transform: translate(-50%, -30px) !important
                }
            }

            #rev_slider_4_1_wrapper .arrow-bordered.tparrows {
                cursor: pointer;
                background: transparent;
                width: 50px;
                height: 50px;
                position: absolute;
                display: block;
                z-index: 1000;
                border: 3px solid #a8c62e;
                transition: .3s ease
            }

            #rev_slider_4_1_wrapper .arrow-bordered.tparrows.rs-touchhover {
                border-color: #ffffff
            }

            #rev_slider_4_1_wrapper .arrow-bordered.tparrows:before {
                font-family: 'fontello';
                font-size: 12px;
                color: #a8c62e;
                display: block;
                line-height: calc(50px - 4px);
                text-align: center;
                transition: .3s ease
            }

            #rev_slider_4_1_wrapper .arrow-bordered.tparrows.rs-touchhover:before {
                color: #fff
            }

            #rev_slider_4_1_wrapper .arrow-bordered.tparrows.tp-leftarrow:before {
                content: '\EA1B'
            }

            #rev_slider_4_1_wrapper .arrow-bordered.tparrows.tp-rightarrow:before {
                content: '\EA1A'
            }

            #rev_slider_4_1_wrapper .bullets_lines .tp-bullet {
                width: 44px;
                height: 30px;
                background-color: transparent;
                border-bottom: 3px rgba(255, 255, 255, 0.9) solid;
                position: absolute;
                cursor: pointer;
                box-sizing: content-box;
                transition: .3s ease
            }

            #rev_slider_4_1_wrapper .bullets_lines .tp-bullet.rs-touchhover,
            #rev_slider_4_1_wrapper .bullets_lines .tp-bullet.selected {
                border-bottom: 3px #1ed0f1 solid
            }
        </style>
        <style type="text/css">
            .trx_demo_inline_1523971218 {
                color: #ffffff !important;
                border-color: #1d2297 !important;
                background-color: #1d2297 !important;
            }

            .trx_demo_inline_1775695438:hover {
                color: #ffffff !important;
                border-color: #141641 !important;
                background-color: #141641 !important;
            }

            .trx_demo_panels.open .trx_demo_panel_active .trx_demo_panel_footer .trx_demo_panel_button {
                justify-content: center;
            }

            .trx_demo_tabs_style_icons .trx_demo_tabs a>i {
                color: #fff;
            }
        </style>
        <link property="stylesheet" rel='stylesheet' id='greeny-style-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/style.css' type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='mediaelement-css'
            href='https://greeny.axiomthemes.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='wp-mediaelement-css'
            href='https://greeny.axiomthemes.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.8.3'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='greeny-skin-default-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/css/style.css' type='text/css'
            media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons_qw_extension-services-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/addons/qw-extension/css/qw_extension_services.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons_qw_extension-icons-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/addons/qw-extension/css/qw_extension_icons.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons_qw_extension-testimonials-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/addons/qw-extension/css/qw_extension_testimonials.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='greeny-plugins-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/css/__plugins.css' type='text/css'
            media='all' />
        <link property="stylesheet" rel='stylesheet' id='greeny-woocommerce-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/plugins/woocommerce/woocommerce.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='greeny-mailchimp-for-wp-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/plugins/mailchimp-for-wp/mailchimp-for-wp.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='greeny-contact-form-7-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/plugins/contact-form-7/contact-form-7.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='greeny-custom-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/css/__custom.css' type='text/css'
            media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/css/__responsive.css' type='text/css'
            media='(max-width:1439px)' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-woocommerce-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/api/woocommerce/woocommerce.responsive.css'
            type='text/css' media='(max-width:1279px)' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons_qw_extension-services-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/addons/qw-extension/css/qw_extension_services.responsive.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons_qw_extension-icons-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/addons/qw-extension/css/qw_extension_icons.responsive.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons_qw_extension-testimonials-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/addons/qw-extension/css/qw_extension_testimonials.responsive.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-cpt_services-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/cpt/services/services.responsive.css'
            type='text/css' media='(max-width:1439px)' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_blogger-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/blogger/blogger.responsive.css'
            type='text/css' media='(max-width:1279px)' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_icons-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/icons/icons.responsive.css'
            type='text/css' media='(max-width:1279px)' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-sc_skills-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/skills/skills.responsive.css'
            type='text/css' media='(max-width:1023px)' />
        <link property="stylesheet" rel='stylesheet' id='greeny-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/css/__responsive.css'
            type='text/css' media='(max-width:1679px)' />
        <link property="stylesheet" rel='stylesheet' id='greeny-woocommerce-responsive-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/plugins/woocommerce/woocommerce-responsive.css'
            type='text/css' media='(max-width:1679px)' />
        <link property="stylesheet" rel='stylesheet' id='greeny-skin-upgrade-styledefault-css'
            href='https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/skin-upgrade-style.css'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='font-awesome-official-v4shim-css'
            href='https://use.fontawesome.com/releases/v6.5.1/css/v4-shims.css' type='text/css' media='all'
            integrity="sha384-5Jfdy0XO8+vjCRofsSnGmxGSYjLfsjjTOABKxVr8BkfvlaAm14bIJc7Jcjfq/xQI" crossorigin="anonymous" />
        <link property="stylesheet" rel='stylesheet' id='elementor-gf-local-roboto-css'
            href='https://greeny.axiomthemes.com/wp-content/uploads/elementor/google-fonts/css/roboto.css?ver=1745932546'
            type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='elementor-gf-local-robotoslab-css'
            href='https://greeny.axiomthemes.com/wp-content/uploads/elementor/google-fonts/css/robotoslab.css?ver=1745932549'
            type='text/css' media='all' />
        <script type="text/javascript" src="https://greeny.axiomthemes.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1"
            id="jquery-core-js"></script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js">
        </script>
        <link rel="https://api.w.org/" href="https://greeny.axiomthemes.com/wp-json/" />
        <link rel="alternate" title="JSON" type="application/json"
            href="https://greeny.axiomthemes.com/wp-json/wp/v2/pages/18822" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD"
            href="https://greeny.axiomthemes.com/xmlrpc.php?rsd" />
        <meta name="generator" content="WordPress 6.8.3" />
        <meta name="generator" content="WooCommerce 9.3.5" />
        <link rel="canonical" href="https://greeny.axiomthemes.com/" />
        <link rel='shortlink' href='https://greeny.axiomthemes.com/' />
        <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
            href="https://greeny.axiomthemes.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgreeny.axiomthemes.com%2F" />
        <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
            href="https://greeny.axiomthemes.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgreeny.axiomthemes.com%2F&#038;format=xml" />
        <link rel="preload"
            href="https://greeny.axiomthemes.com/wp-content/plugins/advanced-popups/fonts/advanced-popups-icons.woff"
            as="font" type="font/woff" crossorigin>
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <meta name="generator"
            content="Elementor 3.28.4; features: additional_custom_breakpoints, e_local_google_fonts; settings: css_print_method-internal, google_font-enabled, font_display-auto">
        <style>
            .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }

            @media screen and (max-height: 1024px) {

                .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }

            @media screen and (max-height: 640px) {

                .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
                .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                    background-image: none !important;
                }
            }
        </style>
        <meta name="generator"
            content="Powered by Slider Revolution 6.7.32 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <style class='wp-fonts-local' type='text/css'>
            @font-face {
                font-family: Inter;
                font-style: normal;
                font-weight: 300 900;
                font-display: fallback;
                src: url('https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/fonts/Inter-VariableFont_slnt,wght.woff2') format('woff2');
                font-stretch: normal;
            }

            @font-face {
                font-family: Cardo;
                font-style: normal;
                font-weight: 400;
                font-display: fallback;
                src: url('https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/fonts/cardo_normal_400.woff2') format('woff2');
            }
        </style>
        <link rel="icon" href="https://greeny.axiomthemes.com/wp-content/uploads/2022/02/cropped-favicon-32x32.png"
            sizes="32x32" />
        <link rel="icon" href="https://greeny.axiomthemes.com/wp-content/uploads/2022/02/cropped-favicon-192x192.png"
            sizes="192x192" />
        <link rel="apple-touch-icon"
            href="https://greeny.axiomthemes.com/wp-content/uploads/2022/02/cropped-favicon-180x180.png" />
        <meta name="msapplication-TileImage"
            content="https://greeny.axiomthemes.com/wp-content/uploads/2022/02/cropped-favicon-270x270.png" />
        <script>
            function setREVStartSize(e) {
                //window.requestAnimationFrame(function() {
                window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
                window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
                try {
                    var pw = document.getElementById(e.c).parentNode.offsetWidth,
                        newh;
                    pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                    e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                    e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                    e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                    e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                    e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                    e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                    e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                    if (e.layout === "fullscreen" || e.l === "fullscreen")
                        newh = Math.max(e.mh, window.RSIH);
                    else {
                        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                        for (var i in e.rl)
                            if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                        e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                        for (var i in e.rl)
                            if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                        var nl = new Array(e.rl.length),
                            ix = 0,
                            sl;
                        e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                        e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                        e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                        e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                        for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                        sl = nl[0];
                        for (var i in nl)
                            if (sl > nl[i] && nl[i] > 0) {
                                sl = nl[i];
                                ix = i;
                            }
                        var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                        newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                    }
                    var el = document.getElementById(e.c);
                    if (el !== null && el) el.style.height = newh + "px";
                    el = document.getElementById(e.c + "_wrapper");
                    if (el !== null && el) {
                        el.style.height = newh + "px";
                        el.style.display = "block";
                    }
                } catch (e) {
                    console.log("Failure at Presize of Slider:" + e)
                }
                //});
            };
        </script>

        <style type="text/css" id="trx_addons-inline-styles-inline-css">
            .trx_addons_inline_620922289 img.logo_image {
                max-height: 50px;
            }

            .trx_addons_inline_90185351 img.logo_image {
                max-height: 45px;
            }

            .trx_addons_inline_1018656148 img.logo_image {
                max-height: 40px;
            }

            .trx_addons_inline_1196043760 {
                width: 100%;
                height: 840px;
            }
        </style>
    </head>
@endsection


@section('content')

    <body
        class="home wp-singular page-template-default page page-id-18822 wp-custom-logo wp-embed-responsive wp-theme-greeny theme-greeny hide_fixed_rows_enabled frontpage woocommerce-no-js tinvwl-theme-style skin_default scheme_default blog_mode_front body_style_fullscreen  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-16981 header_position_default menu_side_none no_layout fixed_blocks_sticky elementor-default elementor-kit-15 elementor-page elementor-page-18822">


        <div class="body_wrap">


            <div class="page_wrap">


                <a class="greeny_skip_link skip_to_content_link" href="#content_skip_link_anchor" tabindex="0">Skip to
                    content</a>
                <a class="greeny_skip_link skip_to_footer_link" href="#footer_skip_link_anchor" tabindex="0">Skip to
                    footer</a>

                <header
                    class="top_panel top_panel_custom top_panel_custom_16981 top_panel_custom_header-main-greeny				 without_bg_image">
                    <div data-elementor-type="cpt_layouts" data-elementor-id="16981" class="elementor elementor-16981">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-dda2204 elementor-section-full_width elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile scheme_light elementor-section-height-default elementor-section-height-default sc_fly_static"
                            data-id="dda2204" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5b70e8c4 sc_layouts_column_align_left sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="5b70e8c4" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-13620b logo_margin sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                                            data-id="13620b" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_logo.default">
                                            <div class="elementor-widget-container">
                                                <a href="#"
                                                    class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_620922289"><img
                                                        loading="lazy" class="logo_image"
                                                        src="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo.png"
                                                        srcset="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo2x.png 2x"
                                                        alt="Greeny" width="173" height="46"></a>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-cfb610f sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                                            data-id="cfb610f" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_menu.default">
                                            <div class="elementor-widget-container">
                                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_zoom_line"
                                                    data-animation-in="fadeIn" data-animation-out="fadeOut">
                                                    <ul id="sc_layouts_menu_295822849" class="sc_layouts_menu_nav">
                                                        <li id="menu-item-18827"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-18827">
                                                            <a href="#"><span>Home</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-18826"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18822 current_page_item menu-item-18826">
                                                                    <a href="https://greeny.axiomthemes.com/"
                                                                        aria-current="page"><span>Main</span></a>
                                                                </li>
                                                                <li id="menu-item-18829"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18829">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/electric-cars/"><span>Electric
                                                                            Cars</span></a>
                                                                </li>
                                                                <li id="menu-item-18832"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18832">
                                                                    <a href="https://greeny.axiomthemes.com/ev-servicing/"><span>EV
                                                                            Servicing</span></a>
                                                                </li>
                                                                <li id="menu-item-18835"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18835">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/charging-station/"><span>Charging
                                                                            Station</span></a>
                                                                </li>
                                                                <li id="menu-item-18839"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18839">
                                                                    <a href="https://greeny.axiomthemes.com/ev-charging/"><span>EV
                                                                            Charging</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-19324"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19324">
                                                            <a href="#"><span>Services</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-18842"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18842">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/charging-solutions/"><span>Charging
                                                                            Solutions</span></a>
                                                                </li>
                                                                <li id="menu-item-18844"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18844">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/servicing-repair/"><span>Servicing
                                                                            &#038; Repair</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-18847"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18847">
                                                            <a href="https://greeny.axiomthemes.com/about-us/"><span>About
                                                                    Us</span></a>
                                                        </li>
                                                        <li id="menu-item-18848"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18848">
                                                            <a href="#"><span>Pages</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-18849"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18849">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/typography/"><span>Typography</span></a>
                                                                </li>
                                                                <li id="menu-item-18850"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18850">
                                                                    <a href="https://greeny.axiomthemes.com/404"><span>404
                                                                            Page</span></a>
                                                                </li>
                                                                <li id="menu-item-19150"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19150">
                                                                    <a href="https://greeny.axiomthemes.com/service-plus/"><span>Service
                                                                            Plus</span></a>
                                                                </li>
                                                                <li id="menu-item-19941"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19941">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/newsletter-popups/"><span>Newsletter
                                                                            Popups</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-18851"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18851">
                                                            <a href="#"><span>Shop</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-19288"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19288">
                                                                    <a href="https://greeny.axiomthemes.com/shop/"><span>Product
                                                                            List</span></a>
                                                                </li>
                                                                <li id="menu-item-19284"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19284">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/product/leather-backpack/"><span>Product
                                                                            Single</span></a>
                                                                </li>
                                                                <li id="menu-item-19286"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19286">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/cart/"><span>Cart</span></a>
                                                                </li>
                                                                <li id="menu-item-19287"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19287">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/checkout/"><span>Checkout</span></a>
                                                                </li>
                                                                <li id="menu-item-19290"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19290">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/wishlist-page/"><span>Wishlist</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-19946"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19946">
                                                            <a
                                                                href="https://greeny.axiomthemes.com/blog/"><span>Blog</span></a>
                                                        </li>
                                                        <li id="menu-item-18853"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18853">
                                                            <a
                                                                href="https://greeny.axiomthemes.com/contact/"><span>Contact</span></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-5117b5cc sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search"
                                            data-id="5117b5cc" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_search.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_layouts_search">
                                                    <div class="search_modern">
                                                        <span class="search_submit"></span>
                                                        <div class="search_wrap scheme_dark">
                                                            <div class="search_header_wrap"><img loading="lazy"
                                                                    class="logo_image"
                                                                    src="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo_inverse.png"
                                                                    srcset="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo_inverse2x.png 2x"
                                                                    alt="Greeny" width="173" height="46"> <a
                                                                    class="search_close"></a>
                                                            </div>
                                                            <div class="search_form_wrap">
                                                                <form role="search" method="get" class="search_form"
                                                                    action="https://greeny.axiomthemes.com/">
                                                                    <input type="hidden" value=""
                                                                        name="post_types">
                                                                    <input type="text" class="search_field"
                                                                        placeholder="Type words and hit enter"
                                                                        value="" name="s">
                                                                    <button type="submit" class="search_submit"></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="search_overlay scheme_dark"></div>
                                                    </div>


                                                </div><!-- /.sc_layouts_search -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3742cd7a sc_layouts_column_align_right sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="3742cd7a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-98552ab phone_margin sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_iconed_text"
                                            data-id="98552ab" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_iconed_text.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_layouts_iconed_text">
                                                    <a href="tel:18004585697" class="flex items-center gap-2">
                                                        <i class="fa-solid fa-phone-volume"></i>
                                                        <span>1 800 458 56 97</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-5451514e sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                            data-id="5451514e" data-element_type="widget"
                                            data-widget_type="trx_sc_button.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_item_button sc_button_wrap"><a
                                                        href="https://greeny.axiomthemes.com/contact/"
                                                        class="sc_button sc_button_default sc_button_size_small sc_button_icon_left color_style_link3"><span
                                                            class="sc_button_text"><span class="sc_button_title">Let's
                                                                Talk</span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section data-fixed-row-delay="0.75"
                            class="elementor-section elementor-top-section elementor-element elementor-element-0b5c6fe elementor-section-full_width elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile elementor-section-height-min-height sc_layouts_row_fixed sc_layouts_row_fixed_always sc_layouts_row_delay_fixed sc_layouts_row_hide_unfixed elementor-section-height-default elementor-section-items-middle sc_fly_static sc_layouts_row_fixed_ater_scroll"
                            data-id="0b5c6fe" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8d8a505 sc_layouts_column_align_left sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="8d8a505" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-f617bce logo_margin sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                                            data-id="f617bce" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_logo.default">
                                            <div class="elementor-widget-container">
                                                <a href="#"
                                                    class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_90185351"><img
                                                        loading="lazy" class="logo_image"
                                                        src="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo.png"
                                                        srcset="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo2x.png 2x"
                                                        alt="Greeny" width="173" height="46"></a>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-ebadef2 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                                            data-id="ebadef2" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_menu.default">
                                            <div class="elementor-widget-container">
                                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_zoom_line"
                                                    data-animation-in="fadeIn" data-animation-out="fadeOut">
                                                    <ul id="sc_layouts_menu_803337901" class="sc_layouts_menu_nav">
                                                        <li id="menu-item-19293"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-19293">
                                                            <a href="#"><span>Home</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-19296"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18822 current_page_item menu-item-19296">
                                                                    <a href="https://greeny.axiomthemes.com/"
                                                                        aria-current="page"><span>Main</span></a>
                                                                </li>
                                                                <li id="menu-item-19304"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19304">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/electric-cars/"><span>Electric
                                                                            Cars</span></a>
                                                                </li>
                                                                <li id="menu-item-19306"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19306">
                                                                    <a href="https://greeny.axiomthemes.com/ev-servicing/"><span>EV
                                                                            Servicing</span></a>
                                                                </li>
                                                                <li id="menu-item-19301"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19301">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/charging-station/"><span>Charging
                                                                            Station</span></a>
                                                                </li>
                                                                <li id="menu-item-19305"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19305">
                                                                    <a href="https://greeny.axiomthemes.com/ev-charging/"><span>EV
                                                                            Charging</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-19329"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19329">
                                                            <a href="#"><span>Services</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-19300"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19300">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/charging-solutions/"><span>Charging
                                                                            Solutions</span></a>
                                                                </li>
                                                                <li id="menu-item-19309"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19309">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/servicing-repair/"><span>Servicing
                                                                            &#038; Repair</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-19298"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19298">
                                                            <a href="https://greeny.axiomthemes.com/about-us/"><span>About
                                                                    Us</span></a>
                                                        </li>
                                                        <li id="menu-item-19294"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19294">
                                                            <a href="#"><span>Pages</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-19311"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19311">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/typography/"><span>Typography</span></a>
                                                                </li>
                                                                <li id="menu-item-19314"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19314">
                                                                    <a href="https://greeny.axiomthemes.com/404"><span>404
                                                                            Page</span></a>
                                                                </li>
                                                                <li id="menu-item-19308"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19308">
                                                                    <a href="https://greeny.axiomthemes.com/service-plus/"><span>Service
                                                                            Plus</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-19295"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19295">
                                                            <a href="#"><span>Shop</span></a>
                                                            <ul class="sub-menu">
                                                                <li id="menu-item-19310"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19310">
                                                                    <a href="https://greeny.axiomthemes.com/shop/"><span>Product
                                                                            List</span></a>
                                                                </li>
                                                                <li id="menu-item-19313"
                                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19313">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/product/leather-backpack/"><span>Product
                                                                            Single</span></a>
                                                                </li>
                                                                <li id="menu-item-19299"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19299">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/cart/"><span>Cart</span></a>
                                                                </li>
                                                                <li id="menu-item-19302"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19302">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/checkout/"><span>Checkout</span></a>
                                                                </li>
                                                                <li id="menu-item-19312"
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19312">
                                                                    <a
                                                                        href="https://greeny.axiomthemes.com/wishlist-page/"><span>Wishlist</span></a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-item-19947"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19947">
                                                            <a
                                                                href="https://greeny.axiomthemes.com/blog/"><span>Blog</span></a>
                                                        </li>
                                                        <li id="menu-item-19303"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19303">
                                                            <a
                                                                href="https://greeny.axiomthemes.com/contact/"><span>Contact</span></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-8734d73 sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search"
                                            data-id="8734d73" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_search.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="sc_layouts_search hide_on_notebook hide_on_tablet hide_on_mobile">
                                                    <div class="search_modern">
                                                        <span class="search_submit"></span>
                                                        <div class="search_wrap scheme_dark">
                                                            <div class="search_header_wrap"><img loading="lazy"
                                                                    class="logo_image"
                                                                    src="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo_inverse.png"
                                                                    srcset="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo_inverse2x.png 2x"
                                                                    alt="Greeny" width="173" height="46"> <a
                                                                    class="search_close"></a>
                                                            </div>
                                                            <div class="search_form_wrap">
                                                                <form role="search" method="get" class="search_form"
                                                                    action="https://greeny.axiomthemes.com/">
                                                                    <input type="hidden" value=""
                                                                        name="post_types">
                                                                    <input type="text" class="search_field"
                                                                        placeholder="Type words and hit enter"
                                                                        value="" name="s">
                                                                    <button type="submit" class="search_submit"></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="search_overlay scheme_dark"></div>
                                                    </div>


                                                </div><!-- /.sc_layouts_search -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1b9d7ee sc_layouts_column_align_right sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="1b9d7ee" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-d466509 phone_margin sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_iconed_text"
                                            data-id="d466509" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_iconed_text.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_layouts_iconed_text"><a href="tel:18004585697"
                                                        class="sc_layouts_item_link sc_layouts_iconed_text_link"><span
                                                            class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-phone-call sc_icon_type_icons"></span><span
                                                            class="sc_layouts_item_details sc_layouts_iconed_text_details"><span
                                                                class="sc_layouts_item_details_line2 sc_layouts_iconed_text_line2">1
                                                                800 458 56 97</span></span></a></div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-3f7f29e sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                            data-id="3f7f29e" data-element_type="widget"
                                            data-widget_type="trx_sc_button.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_item_button sc_button_wrap"><a
                                                        href="https://greeny.axiomthemes.com/contact/"
                                                        class="sc_button sc_button_default sc_button_size_small sc_button_icon_left color_style_link3"><span
                                                            class="sc_button_text"><span class="sc_button_title">Let's
                                                                Talk</span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-9b47173 elementor-section-content-middle sc_layouts_row sc_layouts_row_type_compact sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_row_fixed sc_layouts_row_fixed_always elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static sc_layouts_row_fixed_ater_scroll"
                            data-id="9b47173" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-47bf8dc sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="47bf8dc" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-595adcb sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_logo"
                                            data-id="595adcb" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_logo.default">
                                            <div class="elementor-widget-container">
                                                <a href="#"
                                                    class="sc_layouts_logo sc_layouts_logo_default trx_addons_inline_1018656148"><img
                                                        loading="lazy" class="logo_image"
                                                        src="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo.png"
                                                        srcset="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo2x.png 2x"
                                                        alt="Greeny" width="173" height="46"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-154c173 sc_layouts_column_align_right sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="154c173" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-5e80f53 scheme_light sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                                            data-id="5e80f53" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_menu.default">
                                            <div class="elementor-widget-container">
                                                <div
                                                    class="sc_layouts_iconed_text sc_layouts_menu_mobile_button_burger sc_layouts_menu_mobile_button without_menu">
                                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link"
                                                        href="#" role="button">
                                                        <span
                                                            class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-59ec0af sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_search"
                                            data-id="59ec0af" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_search.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_layouts_search">
                                                    <div class="search_modern">
                                                        <span class="search_submit"></span>
                                                        <div class="search_wrap scheme_dark">
                                                            <div class="search_header_wrap"><img loading="lazy"
                                                                    class="logo_image"
                                                                    src="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo_inverse.png"
                                                                    srcset="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo_inverse2x.png 2x"
                                                                    alt="Greeny" width="173" height="46"> <a
                                                                    class="search_close"></a>
                                                            </div>
                                                            <div class="search_form_wrap">
                                                                <form role="search" method="get" class="search_form"
                                                                    action="https://greeny.axiomthemes.com/">
                                                                    <input type="hidden" value=""
                                                                        name="post_types">
                                                                    <input type="text" class="search_field"
                                                                        placeholder="Type words and hit enter"
                                                                        value="" name="s">
                                                                    <button type="submit" class="search_submit"></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="search_overlay scheme_dark"></div>
                                                    </div>


                                                </div><!-- /.sc_layouts_search -->
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-20b28908 sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_iconed_text"
                                            data-id="20b28908" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_iconed_text.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_layouts_iconed_text hide_on_mobile"><a
                                                        href="tel:18004585697"
                                                        class="sc_layouts_item_link sc_layouts_iconed_text_link"><span
                                                            class="sc_layouts_item_icon sc_layouts_iconed_text_icon icon-phone-call sc_icon_type_icons"></span><span
                                                            class="sc_layouts_item_details sc_layouts_iconed_text_details"><span
                                                                class="sc_layouts_item_details_line2 sc_layouts_iconed_text_line2">1
                                                                800 458 56 97</span></span></a></div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-ad25c72 sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                            data-id="ad25c72" data-element_type="widget"
                                            data-widget_type="trx_sc_button.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_item_button sc_button_wrap"><a
                                                        href="https://greeny.axiomthemes.com/contact/"
                                                        class="sc_button hide_on_mobile sc_button_default sc_button_size_small sc_button_icon_left color_style_link3"><span
                                                            class="sc_button_text"><span class="sc_button_title">Let's
                                                                Talk</span></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </header>

                <div class="menu_mobile_overlay scheme_dark"></div>
                <div class="menu_mobile menu_mobile_fullscreen scheme_dark">
                    <div class="menu_mobile_inner with_widgets">
                        <div class="menu_mobile_header_wrap">
                            <a class="sc_layouts_logo" href="https://greeny.axiomthemes.com/">
                                <img loading="lazy"
                                    src="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo_inverse.png"
                                    srcset="//greeny.axiomthemes.com/wp-content/uploads/2022/02/logo_inverse2x.png 2x"
                                    alt="Greeny" width="173" height="46"> </a>

                            <span class="menu_mobile_close menu_button_close" tabindex="0"><span
                                    class="menu_button_close_text">Close</span><span
                                    class="menu_button_close_icon"></span></span>
                        </div>
                        <div class="menu_mobile_content_wrap content_wrap">
                            <div class="menu_mobile_content_wrap_inner">
                                <nav class="menu_mobile_nav_area">
                                    <ul id="mobile-menu_mobile_549799309">
                                        <li id="mobile-menu-item-18827"
                                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-18827">
                                            <a href="#"><span>Home</span></a>
                                            <ul class="sub-menu">
                                                <li id="mobile-menu-item-18826"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18822 current_page_item menu-item-18826">
                                                    <a href="https://greeny.axiomthemes.com/"
                                                        aria-current="page"><span>Main</span></a>
                                                </li>
                                                <li id="mobile-menu-item-18829"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18829">
                                                    <a href="https://greeny.axiomthemes.com/electric-cars/"><span>Electric
                                                            Cars</span></a>
                                                </li>
                                                <li id="mobile-menu-item-18832"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18832">
                                                    <a href="https://greeny.axiomthemes.com/ev-servicing/"><span>EV
                                                            Servicing</span></a>
                                                </li>
                                                <li id="mobile-menu-item-18835"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18835">
                                                    <a href="https://greeny.axiomthemes.com/charging-station/"><span>Charging
                                                            Station</span></a>
                                                </li>
                                                <li id="mobile-menu-item-18839"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18839">
                                                    <a href="https://greeny.axiomthemes.com/ev-charging/"><span>EV
                                                            Charging</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="mobile-menu-item-19324"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-19324">
                                            <a href="#"><span>Services</span></a>
                                            <ul class="sub-menu">
                                                <li id="mobile-menu-item-18842"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18842">
                                                    <a href="https://greeny.axiomthemes.com/charging-solutions/"><span>Charging
                                                            Solutions</span></a>
                                                </li>
                                                <li id="mobile-menu-item-18844"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18844">
                                                    <a href="https://greeny.axiomthemes.com/servicing-repair/"><span>Servicing
                                                            &#038; Repair</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="mobile-menu-item-18847"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18847">
                                            <a href="https://greeny.axiomthemes.com/about-us/"><span>About Us</span></a>
                                        </li>
                                        <li id="mobile-menu-item-18848"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18848">
                                            <a href="#"><span>Pages</span></a>
                                            <ul class="sub-menu">
                                                <li id="mobile-menu-item-18849"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18849">
                                                    <a
                                                        href="https://greeny.axiomthemes.com/typography/"><span>Typography</span></a>
                                                </li>
                                                <li id="mobile-menu-item-18850"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18850">
                                                    <a href="https://greeny.axiomthemes.com/404"><span>404 Page</span></a>
                                                </li>
                                                <li id="mobile-menu-item-19150"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19150">
                                                    <a href="https://greeny.axiomthemes.com/service-plus/"><span>Service
                                                            Plus</span></a>
                                                </li>
                                                <li id="mobile-menu-item-19941"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19941">
                                                    <a href="https://greeny.axiomthemes.com/newsletter-popups/"><span>Newsletter
                                                            Popups</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="mobile-menu-item-18851"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-18851">
                                            <a href="#"><span>Shop</span></a>
                                            <ul class="sub-menu">
                                                <li id="mobile-menu-item-19288"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19288">
                                                    <a href="https://greeny.axiomthemes.com/shop/"><span>Product
                                                            List</span></a>
                                                </li>
                                                <li id="mobile-menu-item-19284"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19284">
                                                    <a href="https://greeny.axiomthemes.com/product/leather-backpack/"><span>Product
                                                            Single</span></a>
                                                </li>
                                                <li id="mobile-menu-item-19286"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19286">
                                                    <a href="https://greeny.axiomthemes.com/cart/"><span>Cart</span></a>
                                                </li>
                                                <li id="mobile-menu-item-19287"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19287">
                                                    <a
                                                        href="https://greeny.axiomthemes.com/checkout/"><span>Checkout</span></a>
                                                </li>
                                                <li id="mobile-menu-item-19290"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19290">
                                                    <a
                                                        href="https://greeny.axiomthemes.com/wishlist-page/"><span>Wishlist</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li id="mobile-menu-item-19946"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19946">
                                            <a href="https://greeny.axiomthemes.com/blog/"><span>Blog</span></a>
                                        </li>
                                        <li id="mobile-menu-item-18853"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18853">
                                            <a href="https://greeny.axiomthemes.com/contact/"><span>Contact</span></a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="socials_mobile"><a target="_blank" rel="nofollow"
                                        href="https://www.facebook.com/AxiomThemes-505060569826537/"
                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                            class="social_icon social_icon_facebook-1" style=""><span
                                                class="screen-reader-text">facebook-1</span><span
                                                class="icon-facebook-1"></span></span></a><a target="_blank"
                                        rel="nofollow" href="https://twitter.com/ThemesAxiom"
                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                            class="social_icon social_icon_twitter-new" style=""><span
                                                class="screen-reader-text">twitter-new</span><span
                                                class="icon-twitter-new"></span></span></a><a target="_blank"
                                        rel="nofollow" href="https://dribbble.com/AxiomThemes"
                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                            class="social_icon social_icon_dribble-new" style=""><span
                                                class="screen-reader-text">dribble-new</span><span
                                                class="icon-dribble-new"></span></span></a><a target="_blank"
                                        rel="nofollow" href="https://www.instagram.com/axiom_themes/"
                                        class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                            class="social_icon social_icon_instagram" style=""><span
                                                class="screen-reader-text">instagram</span><span
                                                class="icon-instagram"></span></span></a></div>
                            </div>
                        </div>
                        <div class="menu_mobile_widgets_area">
                            <div
                                class="widgets_additional_menu_mobile_fullscreen widgets_additional_menu_mobile_fullscreen_wrap widget_area">
                                <div
                                    class="widgets_additional_menu_mobile_fullscreen_inner widgets_additional_menu_mobile_fullscreen_inner widget_area_inner">
                                    <aside class="widget_text widget widget_custom_html">
                                        <div class="textwidget custom-html-widget">
                                            <div class="extra_item">
                                                <h6>Have a Project?</h6>
                                                <a href="/cdn-cgi/l/email-protection#f59c9b939ab5829097869c8190db969a98"><span
                                                        class="__cf_email__"
                                                        data-cfemail="523b3c343d12253730213b26377c313d3f">[email&#160;protected]</span></a>
                                            </div>

                                            <div class="extra_item">
                                                <h6>Want to Work With Us?</h6>
                                                <a href="https://greeny.axiomthemes.com/contact/">Send Brief</a>
                                            </div>

                                            <div class="extra_item">
                                                <h6>Want to Buy Vehicles?</h6>
                                                <a href="https://greeny.axiomthemes.com/shop/">Go to Shop</a>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="page_content_wrap">
                    <div class="content_wrap_fullscreen">


                        <div class="content">
                            <span id="content_skip_link_anchor" class="greeny_skip_link_anchor"></span>

                            <article id="post-18822"
                                class="post_item_single post_type_page post-18822 page type-page status-publish hentry">


                                <div class="post_content entry-content">
                                    <div data-elementor-type="wp-page" data-elementor-id="18822"
                                        class="elementor elementor-18822">
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-934c4da elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="934c4da" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-218eea4 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="218eea4" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-c0b0aae sc_fly_static elementor-widget elementor-widget-trx_widget_slider"
                                                            data-id="c0b0aae" data-element_type="widget"
                                                            data-widget_type="trx_widget_slider.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="widget_area sc_widget_slider">
                                                                    <aside class="widget widget_slider">
                                                                        <div
                                                                            class="slider_wrap slider_engine_revo slider_alias_slider-1">
                                                                            <div class="wp-block-themepunch-revslider 0">
                                                                                <!-- START Slider 1 REVOLUTION SLIDER 6.7.32 -->
                                                                                <p class="rs-p-wp-fix"></p>
                                                                                <rs-module-wrap
                                                                                    id="rev_slider_4_1_wrapper"
                                                                                    data-source="gallery"
                                                                                    style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                                                                    <rs-module id="rev_slider_4_1"
                                                                                        style=""
                                                                                        data-version="6.7.32">
                                                                                        <rs-slides
                                                                                            style="overflow: hidden; position: absolute;">
                                                                                            <rs-slide
                                                                                                style="position: absolute;"
                                                                                                data-key="rs-6"
                                                                                                data-title="Slide"
                                                                                                data-thumb="//greeny.axiomthemes.com/wp-content/uploads/revslider/slider-1/47_1-1-min-146x102.jpg"
                                                                                                data-anim="adpr:false;ms:1000ms;"
                                                                                                data-in="o:0;"
                                                                                                data-out="a:false;">
                                                                                                <img fetchpriority="high"
                                                                                                    decoding="async"
                                                                                                    src="//greeny.axiomthemes.com/wp-content/plugins/revslider/sr6/assets/assets/dummy.png"
                                                                                                    alt=""
                                                                                                    title="47_1-1-min.jpg"
                                                                                                    width="2560"
                                                                                                    height="1006"
                                                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                                                    data-lazyload="//greeny.axiomthemes.com/wp-content/uploads/revslider/slider-1/47_1-1-min.jpg"
                                                                                                    data-parallax="off"
                                                                                                    data-panzoom="d:10000;ss:100;se:110%;"
                                                                                                    data-no-retina>
                                                                                                <!--						--><rs-zone
                                                                                                    id="rrzm_6"
                                                                                                    class="rev_row_zone_middle"
                                                                                                    style="z-index: 20;"><!--

            --><rs-row id="slider-4-slide-6-layer-13" data-type="row" data-xy="xo:50px;yo:50px;" data-cbreak="nobreak"
                                                                                                        data-basealign="slide"
                                                                                                        data-rsp_bd="off"
                                                                                                        data-frame_0="o:1;"
                                                                                                        data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                                        style="z-index:1;"><!--
             --><rs-column id="slider-4-slide-6-layer-14" data-type="column" data-xy="xo:50px;yo:50px;"
                                                                                                            data-text="l:26,24,24,24;a:center;"
                                                                                                            data-rsp_bd="off"
                                                                                                            data-column="w:100%;"
                                                                                                            data-frame_0="o:1;"
                                                                                                            data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                                            style="z-index:2;width:100%;"><!--
              --><rs-layer id="slider-4-slide-6-layer-1" data-type="text" data-color="#ffc265" data-xy=""
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:18,17,14,14;l:32,30,22,22;fw:500,500,500,400;a:center;"
                                                                                                                data-vbility="t,t,t,f"
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-frame_0="x:30px,30px,30px,20px;"
                                                                                                                data-frame_1="st:1520;sp:1000;sR:1520;"
                                                                                                                data-frame_999="o:0;st:w;sR:6480;"
                                                                                                                style="z-index:3;font-family:'Work Sans';display:inline-block;">Electric
                                                                                                                Vehicles Can
                                                                                                                Save Your
                                                                                                                Money
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-6-layer-0" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;c:both;"
                                                                                                                data-flcr="c:both;"
                                                                                                                data-dim="w:100%;h:12px,14px,8px,0px;"
                                                                                                                data-frame_999="o:0;st:w;sR:8700;"
                                                                                                                style="z-index:4;">
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-6-layer-24" class="sldr-title" data-type="text" data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:80,54,46,34;l:84,54,46,34;ls:-1px,-1px,-1px,0px;fw:700;a:center;"
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-frame_0="x:40px,40px,40px,20px;"
                                                                                                                data-frame_1="st:510;sp:1000;sR:510;"
                                                                                                                data-frame_999="o:0;st:w;sR:7490;"
                                                                                                                style="z-index:5;font-family:'Work Sans';display:inline-block;">Curious
                                                                                                                About<br />
                                                                                                                Electric
                                                                                                                Vehicles?
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-6-layer-19" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;c:both;"
                                                                                                                data-flcr="c:both;"
                                                                                                                data-dim="w:100%;h:36px,26px,18px,16px;"
                                                                                                                data-frame_999="o:0;st:w;sR:8700;"
                                                                                                                style="z-index:6;">
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-6-layer-21" class="rev-btn" data-type="button" data-xy="xo:0,36px,36px,36px;yo:0,493px,493px,493px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:16,15,14,14;l:58,58,46,46;fw:500;a:center;"
                                                                                                                data-dim="minh:0px,none,none,none;"
                                                                                                                data-actions='o:click;a:scrollbelow;sp:1000ms;e:power1.inOut;'
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-padding="r:50,40,30,30;l:50,40,30,30;"
                                                                                                                data-frame_0="x:30px,30px,30px,20px;"
                                                                                                                data-frame_1="st:1010;sp:1000;sR:1010;"
                                                                                                                data-frame_999="o:0;st:w;sR:6990;"
                                                                                                                data-frame_hover="rX:0deg;rY:0deg;c:#fff;bgc:#8ea726;boc:#1f242e;bor:0px,0px,0px,0px;bos:solid;bow:0px,0px,0px,0px;e:power1.inOut;"
                                                                                                                style="z-index:7;background-color:#a8c62e;font-family:'Work Sans';display:inline-block;will-change:transform;">Learn
                                                                                                                More
                                                                                                            </rs-layer><!--
             --></rs-column><!--
            --></rs-row><!--
           --></rs-zone><!--
    --> </rs-slide>
                                                                                            <rs-slide
                                                                                                style="position: absolute;"
                                                                                                data-key="rs-7"
                                                                                                data-title="Slide"
                                                                                                data-thumb="//greeny.axiomthemes.com/wp-content/uploads/revslider/slider-1/47_1-2-min-146x102.jpg"
                                                                                                data-anim="adpr:false;ms:1000ms;"
                                                                                                data-in="o:0;"
                                                                                                data-out="a:false;">
                                                                                                <img decoding="async"
                                                                                                    src="//greeny.axiomthemes.com/wp-content/plugins/revslider/sr6/assets/assets/dummy.png"
                                                                                                    alt=""
                                                                                                    title="47_1-2-min.jpg"
                                                                                                    width="2560"
                                                                                                    height="1006"
                                                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                                                    data-lazyload="//greeny.axiomthemes.com/wp-content/uploads/revslider/slider-1/47_1-2-min.jpg"
                                                                                                    data-parallax="off"
                                                                                                    data-panzoom="d:10000;ss:100;se:110%;"
                                                                                                    data-no-retina>
                                                                                                <!--						--><rs-zone
                                                                                                    id="rrzm_7"
                                                                                                    class="rev_row_zone_middle"
                                                                                                    style="z-index: 20;"><!--

            --><rs-row id="slider-4-slide-7-layer-15" data-type="row" data-xy="xo:50px;yo:50px;" data-cbreak="nobreak"
                                                                                                        data-basealign="slide"
                                                                                                        data-rsp_bd="off"
                                                                                                        data-margin="r:640,460,0,0;"
                                                                                                        data-frame_0="o:1;"
                                                                                                        data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                                        style="z-index:1;"><!--
             --><rs-column id="slider-4-slide-7-layer-16" data-type="column" data-xy="xo:50px;yo:50px;"
                                                                                                            data-text="l:30,25,25,25;a:center;"
                                                                                                            data-rsp_bd="off"
                                                                                                            data-column="w:100%;"
                                                                                                            data-frame_0="o:1;"
                                                                                                            data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                                            style="z-index:2;width:100%;"><!--
              --><rs-layer id="slider-4-slide-7-layer-1" data-type="text" data-color="#a8c62e" data-xy=""
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:18,17,14,14;l:32,30,22,22;fw:500,500,500,400;a:center;"
                                                                                                                data-vbility="t,t,t,f"
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-frame_0="x:30px,30px,30px,20px;"
                                                                                                                data-frame_1="st:1520;sp:1000;sR:1520;"
                                                                                                                data-frame_999="o:0;st:w;sR:6480;"
                                                                                                                style="z-index:3;font-family:'Work Sans';display:inline-block;">Electric
                                                                                                                Vehicles Can
                                                                                                                Save Your
                                                                                                                Money
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-7-layer-0" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;c:both;"
                                                                                                                data-flcr="c:both;"
                                                                                                                data-dim="w:100%;h:12px,14px,8px,0px;"
                                                                                                                data-frame_999="o:0;st:w;sR:8700;"
                                                                                                                style="z-index:4;">
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-7-layer-24" class="sldr-title" data-type="text" data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:80,54,46,34;l:84,54,46,34;ls:-1px,-1px,-1px,0px;fw:700;a:center;"
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-frame_0="x:40px,40px,40px,20px;"
                                                                                                                data-frame_1="st:510;sp:1000;sR:510;"
                                                                                                                data-frame_999="o:0;st:w;sR:7490;"
                                                                                                                style="z-index:5;font-family:'Work Sans';display:inline-block;">New
                                                                                                                Electric
                                                                                                                Cars<br />
                                                                                                                Are Coming
                                                                                                                Soon
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-7-layer-19" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;c:both;"
                                                                                                                data-flcr="c:both;"
                                                                                                                data-dim="w:100%;h:36px,26px,18px,16px;"
                                                                                                                data-frame_999="o:0;st:w;sR:8700;"
                                                                                                                style="z-index:6;">
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-7-layer-21" class="rev-btn" data-type="button" data-xy="xo:0,36px,36px,36px;yo:0,493px,493px,493px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:16,15,14,14;l:58,58,46,46;fw:500;a:center;"
                                                                                                                data-dim="minh:0px,none,none,none;"
                                                                                                                data-actions='o:click;a:scrollbelow;sp:1000ms;e:power1.inOut;'
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-padding="r:50,40,30,30;l:50,40,30,30;"
                                                                                                                data-frame_0="x:30px,30px,30px,20px;"
                                                                                                                data-frame_1="st:1010;sp:1000;sR:1010;"
                                                                                                                data-frame_999="o:0;st:w;sR:6990;"
                                                                                                                data-frame_hover="rX:0deg;rY:0deg;c:#fff;bgc:#19b0cc;boc:#1f242e;bor:0px,0px,0px,0px;bos:solid;bow:0px,0px,0px,0px;e:power1.inOut;"
                                                                                                                style="z-index:7;background-color:#1ed0f1;font-family:'Work Sans';display:inline-block;will-change:transform;">Learn
                                                                                                                More
                                                                                                            </rs-layer><!--
             --></rs-column><!--
            --></rs-row><!--
           --></rs-zone><!--
    --> </rs-slide>
                                                                                            <rs-slide
                                                                                                style="position: absolute;"
                                                                                                data-key="rs-8"
                                                                                                data-title="Slide"
                                                                                                data-thumb="//greeny.axiomthemes.com/wp-content/uploads/revslider/slider-1/47_1-3-min-146x102.jpg"
                                                                                                data-anim="adpr:false;ms:1000ms;"
                                                                                                data-in="o:0;"
                                                                                                data-out="a:false;">
                                                                                                <img decoding="async"
                                                                                                    src="//greeny.axiomthemes.com/wp-content/plugins/revslider/sr6/assets/assets/dummy.png"
                                                                                                    alt=""
                                                                                                    title="47_1-3-min.jpg"
                                                                                                    width="2560"
                                                                                                    height="1006"
                                                                                                    class="rev-slidebg tp-rs-img rs-lazyload"
                                                                                                    data-lazyload="//greeny.axiomthemes.com/wp-content/uploads/revslider/slider-1/47_1-3-min.jpg"
                                                                                                    data-parallax="off"
                                                                                                    data-panzoom="d:10000;ss:100;se:110%;"
                                                                                                    data-no-retina>
                                                                                                <!--						--><rs-zone
                                                                                                    id="rrzm_8"
                                                                                                    class="rev_row_zone_middle"
                                                                                                    style="z-index: 20;"><!--

            --><rs-row id="slider-4-slide-8-layer-13" data-type="row" data-xy="xo:50px;yo:50px;" data-cbreak="nobreak"
                                                                                                        data-basealign="slide"
                                                                                                        data-rsp_bd="off"
                                                                                                        data-frame_0="o:1;"
                                                                                                        data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                                        style="z-index:1;"><!--
             --><rs-column id="slider-4-slide-8-layer-14" data-type="column" data-xy="xo:50px;yo:50px;"
                                                                                                            data-text="l:26,24,24,24;a:center;"
                                                                                                            data-rsp_bd="off"
                                                                                                            data-column="w:100%;"
                                                                                                            data-frame_0="o:1;"
                                                                                                            data-frame_999="o:0;st:w;sR:8700;sA:9000;"
                                                                                                            style="z-index:2;width:100%;"><!--
              --><rs-layer id="slider-4-slide-8-layer-1" data-type="text" data-color="#1ed0f1" data-xy=""
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:18,17,14,14;l:32,30,22,22;fw:500,500,500,400;a:center;"
                                                                                                                data-vbility="t,t,t,f"
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-frame_0="x:30px,30px,30px,20px;"
                                                                                                                data-frame_1="st:1520;sp:1000;sR:1520;"
                                                                                                                data-frame_999="o:0;st:w;sR:6480;"
                                                                                                                style="z-index:3;font-family:'Work Sans';display:inline-block;">Electric
                                                                                                                Vehicles Can
                                                                                                                Save Your
                                                                                                                Money
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-8-layer-0" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;c:both;"
                                                                                                                data-flcr="c:both;"
                                                                                                                data-dim="w:100%;h:12px,14px,8px,0px;"
                                                                                                                data-frame_999="o:0;st:w;sR:8700;"
                                                                                                                style="z-index:4;">
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-8-layer-24" class="sldr-title" data-type="text" data-xy="xo:0,35px,35px,35px;yo:0,281px,281px,281px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:80,54,46,34;l:84,54,46,34;ls:-1px,-1px,-1px,0px;fw:700;a:center;"
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-frame_0="x:40px,40px,40px,20px;"
                                                                                                                data-frame_1="st:510;sp:1000;sR:510;"
                                                                                                                data-frame_999="o:0;st:w;sR:7490;"
                                                                                                                style="z-index:5;font-family:'Work Sans';display:inline-block;">How
                                                                                                                to
                                                                                                                Choose<br />
                                                                                                                the Right
                                                                                                                Charger
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-8-layer-19" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,37px,19px,11px;yo:160px,120px,64px,39px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;c:both;"
                                                                                                                data-flcr="c:both;"
                                                                                                                data-dim="w:100%;h:36px,26px,18px,16px;"
                                                                                                                data-frame_999="o:0;st:w;sR:8700;"
                                                                                                                style="z-index:6;">
                                                                                                            </rs-layer><!--

              --><rs-layer id="slider-4-slide-8-layer-21" class="rev-btn" data-type="button" data-xy="xo:0,36px,36px,36px;yo:0,493px,493px,493px;"
                                                                                                                data-pos="r"
                                                                                                                data-text="w:normal;s:16,15,14,14;l:58,58,46,46;fw:500;a:center;"
                                                                                                                data-dim="minh:0px,none,none,none;"
                                                                                                                data-actions='o:click;a:scrollbelow;sp:1000ms;e:power1.inOut;'
                                                                                                                data-rsp_o="off"
                                                                                                                data-rsp_bd="off"
                                                                                                                data-disp="inline-block"
                                                                                                                data-padding="r:50,40,30,30;l:50,40,30,30;"
                                                                                                                data-frame_0="x:30px,30px,30px,20px;"
                                                                                                                data-frame_1="st:1010;sp:1000;sR:1010;"
                                                                                                                data-frame_999="o:0;st:w;sR:6990;"
                                                                                                                data-frame_hover="rX:0deg;rY:0deg;c:#fff;bgc:#ffb541;boc:#1f242e;bor:0px,0px,0px,0px;bos:solid;bow:0px,0px,0px,0px;e:power1.inOut;"
                                                                                                                style="z-index:7;background-color:#ffc265;font-family:'Work Sans';display:inline-block;will-change:transform;">Learn
                                                                                                                More
                                                                                                            </rs-layer><!--
             --></rs-column><!--
            --></rs-row><!--
           --></rs-zone><!--
    --> </rs-slide>
                                                                                        </rs-slides>
                                                                                        <rs-static-layers><!--
         --></rs-static-layers>
                                                                                    </rs-module>

                                                                                    <script>
                                                                                        setREVStartSize({
                                                                                            c: 'rev_slider_4_1',
                                                                                            rl: [1240, 1460, 785, 500],
                                                                                            el: [755, 700, 480, 480],
                                                                                            gw: [1920, 1440, 778, 480],
                                                                                            gh: [755, 700, 480, 480],
                                                                                            type: 'standard',
                                                                                            justify: '',
                                                                                            layout: 'fullwidth',
                                                                                            mh: "0"
                                                                                        });
                                                                                        if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules[
                                                                                                "revslider41"] !== undefined) {
                                                                                            window.RS_MODULES.modules["revslider41"].once = false;
                                                                                            window.revapi4 = undefined;
                                                                                            if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                                                                                        }
                                                                                    </script>
                                                                                </rs-module-wrap>
                                                                                <!-- END REVOLUTION SLIDER -->
                                                                            </div>
                                                                        </div>
                                                                    </aside>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-75b5dba1 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="75b5dba1" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f04cb9 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="1f04cb9" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-258bde37 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="258bde37" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-36e1a12 sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="36e1a12" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4d29496 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="4d29496" data-element_type="widget"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default"><span
                                                                        class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Electric
                                                                        Cars for everyone</span>
                                                                    <h1
                                                                        class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
                                                                        <span class="sc_item_title_text">Choosing It,
                                                                            Insuring It, Driving It</span>
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-a9e1e52 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="a9e1e52" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-animation-type="sequental" data-animation-stagger=""
                                                            class="elementor-element elementor-element-65cc05e2 animation_type_sequental sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_services"
                                                            data-id="65cc05e2" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;greeny-fadeinup&quot;,&quot;_animation_delay&quot;:100}"
                                                            data-widget_type="trx_sc_services.default">
                                                            <div class="elementor-widget-container">
                                                                <div
                                                                    class="sc_services color_style_link2 sc_services_fashion sc_services_featured_top">
                                                                    <div
                                                                        class="sc_services_columns_wrap sc_item_columns sc_item_posts_container sc_item_columns_4 trx_addons_columns_wrap columns_padding_bottom columns_in_single_row">
                                                                        <div
                                                                            class="trx_addons_column-1_4 trx_addons_column-1_2-tablet ">
                                                                            <div data-post-id="951"
                                                                                class="sc_services_item sc_item_container post_container without_content with_subtitle with_image with_number post-951 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-advantages">
                                                                                <div class="sc_services_item_content "
                                                                                    style="background-image: url(https://greeny.axiomthemes.com/wp-content/uploads/2020/04/services-image4-840x1260.jpg);">
                                                                                    <div
                                                                                        class="sc_services_item_content_inner">
                                                                                        <div
                                                                                            class="sc_services_item_content_inner_top">
                                                                                            <span
                                                                                                class="sc_services_item_number">01.</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_services_item_content_inner_bottom">
                                                                                            <h6
                                                                                                class="sc_services_item_title">
                                                                                                <a
                                                                                                    href="https://greeny.axiomthemes.com/services/stylish-design/">Stylish
                                                                                                    Design</a>
                                                                                            </h6>
                                                                                            <div
                                                                                                class="sc_services_item_subtitle">
                                                                                                <a href="https://greeny.axiomthemes.com/services_group/advantages/"
                                                                                                    title="View all posts in Advantages">Advantages</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a class="sc_services_item_link"
                                                                                        href="https://greeny.axiomthemes.com/services/stylish-design/"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="trx_addons_column-1_4 trx_addons_column-1_2-tablet ">
                                                                            <div data-post-id="950"
                                                                                class="sc_services_item sc_item_container post_container without_content with_subtitle with_image with_number post-950 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-advantages">
                                                                                <div class="sc_services_item_content "
                                                                                    style="background-image: url(https://greeny.axiomthemes.com/wp-content/uploads/2020/04/services-image2-840x1260.jpg);">
                                                                                    <div
                                                                                        class="sc_services_item_content_inner">
                                                                                        <div
                                                                                            class="sc_services_item_content_inner_top">
                                                                                            <span
                                                                                                class="sc_services_item_number">02.</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_services_item_content_inner_bottom">
                                                                                            <h6
                                                                                                class="sc_services_item_title">
                                                                                                <a
                                                                                                    href="https://greeny.axiomthemes.com/services/fast-charging/">Fast
                                                                                                    Charging</a>
                                                                                            </h6>
                                                                                            <div
                                                                                                class="sc_services_item_subtitle">
                                                                                                <a href="https://greeny.axiomthemes.com/services_group/advantages/"
                                                                                                    title="View all posts in Advantages">Advantages</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a class="sc_services_item_link"
                                                                                        href="https://greeny.axiomthemes.com/services/fast-charging/"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="trx_addons_column-1_4 trx_addons_column-1_2-tablet ">
                                                                            <div data-post-id="949"
                                                                                class="sc_services_item sc_item_container post_container without_content with_subtitle with_image with_number post-949 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-advantages">
                                                                                <div class="sc_services_item_content "
                                                                                    style="background-image: url(https://greeny.axiomthemes.com/wp-content/uploads/2020/04/services-image3-840x1260.jpg);">
                                                                                    <div
                                                                                        class="sc_services_item_content_inner">
                                                                                        <div
                                                                                            class="sc_services_item_content_inner_top">
                                                                                            <span
                                                                                                class="sc_services_item_number">03.</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_services_item_content_inner_bottom">
                                                                                            <h6
                                                                                                class="sc_services_item_title">
                                                                                                <a
                                                                                                    href="https://greeny.axiomthemes.com/services/affordable-price/">Affordable
                                                                                                    Price</a>
                                                                                            </h6>
                                                                                            <div
                                                                                                class="sc_services_item_subtitle">
                                                                                                <a href="https://greeny.axiomthemes.com/services_group/advantages/"
                                                                                                    title="View all posts in Advantages">Advantages</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a class="sc_services_item_link"
                                                                                        href="https://greeny.axiomthemes.com/services/affordable-price/"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="trx_addons_column-1_4 trx_addons_column-1_2-tablet ">
                                                                            <div data-post-id="948"
                                                                                class="sc_services_item sc_item_container post_container without_content with_subtitle with_image with_number post-948 cpt_services type-cpt_services status-publish has-post-thumbnail hentry cpt_services_group-advantages">
                                                                                <div class="sc_services_item_content "
                                                                                    style="background-image: url(https://greeny.axiomthemes.com/wp-content/uploads/2020/04/services-image5-840x1260.jpg);">
                                                                                    <div
                                                                                        class="sc_services_item_content_inner">
                                                                                        <div
                                                                                            class="sc_services_item_content_inner_top">
                                                                                            <span
                                                                                                class="sc_services_item_number">04.</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_services_item_content_inner_bottom">
                                                                                            <h6
                                                                                                class="sc_services_item_title">
                                                                                                <a
                                                                                                    href="https://greeny.axiomthemes.com/services/nature-friendly/">Nature
                                                                                                    Friendly</a>
                                                                                            </h6>
                                                                                            <div
                                                                                                class="sc_services_item_subtitle">
                                                                                                <a href="https://greeny.axiomthemes.com/services_group/advantages/"
                                                                                                    title="View all posts in Advantages">Advantages</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div><a class="sc_services_item_link"
                                                                                        href="https://greeny.axiomthemes.com/services/nature-friendly/"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-67a25db7 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="67a25db7" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2f66796 sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="2f66796" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-1707a571 elementor-section-content-middle scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="1707a571" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-42c25f14 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="42c25f14" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-43f1fcc4 sc_height_medium sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="43f1fcc4" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-28640217 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="28640217" data-element_type="widget"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default">
                                                                    <h3
                                                                        class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                        <span class="sc_item_title_text">We make effective
                                                                            solutions for modern drivers.</span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5bb3b368 sc_height_medium sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="5bb3b368" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-132202d0 sc_layouts_column_align_right sc_layouts_column sc-mobile_layouts_column_align_left sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="132202d0" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-4f5a7f2 sc_layouts_hide_on_mobile sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="4f5a7f2" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3a63976 sc_height_medium sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="3a63976" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-746ffbf2 sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="746ffbf2" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-573545ac sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                            data-id="573545ac" data-element_type="widget"
                                                            data-widget_type="trx_sc_button.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_item_button sc_button_wrap"><a
                                                                        href="https://greeny.axiomthemes.com/about-us/"
                                                                        class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left color_style_link2"><span
                                                                            class="sc_button_text"><span
                                                                                class="sc_button_title">About
                                                                                Us</span></span></a></div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5e1a97ad sc_height_medium sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="5e1a97ad" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-3bab673 sc_layouts_hide_on_mobile sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="3bab673" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-6434fb5 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="6434fb5" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-67a89f45 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="67a89f45" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-7c8f057 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="7c8f057" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-529298a sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="529298a" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1e9aff6 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="1e9aff6" data-element_type="widget"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default"><span
                                                                        class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Best
                                                                        Choice</span>
                                                                    <h1
                                                                        class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
                                                                        <span class="sc_item_title_text">Benefits of
                                                                            Driving <br>an Electric Car</span>
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-b91af6d sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="b91af6d" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1a10e567 tabs_style_2 scheme_light elementor-tabs-view-horizontal sc_tabs_icon_position_left sc_fly_static elementor-widget elementor-widget-tabs"
                                                            data-id="1a10e567" data-element_type="widget"
                                                            data-widget_type="tabs.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-tabs">
                                                                    <div class="elementor-tabs-wrapper" role="tablist">
                                                                        <div id="elementor-tab-title-4371"
                                                                            class="elementor-tab-title elementor-tab-desktop-title"
                                                                            aria-selected="true" data-tab="1"
                                                                            role="tab" tabindex="0"
                                                                            aria-controls="elementor-tab-content-4371"
                                                                            aria-expanded="false">Green Energy</div>
                                                                        <div id="elementor-tab-title-4372"
                                                                            class="elementor-tab-title elementor-tab-desktop-title"
                                                                            aria-selected="false" data-tab="2"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="elementor-tab-content-4372"
                                                                            aria-expanded="false">Saving Money</div>
                                                                        <div id="elementor-tab-title-4373"
                                                                            class="elementor-tab-title elementor-tab-desktop-title"
                                                                            aria-selected="false" data-tab="3"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="elementor-tab-content-4373"
                                                                            aria-expanded="false">Lower Emissions</div>
                                                                        <div id="elementor-tab-title-4374"
                                                                            class="elementor-tab-title elementor-tab-desktop-title"
                                                                            aria-selected="false" data-tab="4"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="elementor-tab-content-4374"
                                                                            aria-expanded="false">Less Maintenance</div>
                                                                        <div id="elementor-tab-title-4375"
                                                                            class="elementor-tab-title elementor-tab-desktop-title"
                                                                            aria-selected="false" data-tab="5"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="elementor-tab-content-4375"
                                                                            aria-expanded="false">Better Performance</div>
                                                                    </div>
                                                                    <div class="elementor-tabs-content-wrapper"
                                                                        role="tablist" aria-orientation="vertical">
                                                                        <div class="elementor-tab-title elementor-tab-mobile-title"
                                                                            aria-selected="true" data-tab="1"
                                                                            role="tab" tabindex="0"
                                                                            aria-controls="elementor-tab-content-4371"
                                                                            aria-expanded="false">Green Energy</div>
                                                                        <div id="elementor-tab-content-4371"
                                                                            class="elementor-tab-content elementor-clearfix"
                                                                            data-tab="1" role="tabpanel"
                                                                            aria-labelledby="elementor-tab-title-4371"
                                                                            tabindex="0" hidden="false">
                                                                            <div data-elementor-type="cpt_layouts"
                                                                                data-elementor-id="19055"
                                                                                class="elementor elementor-19055">
                                                                                <section
                                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-21123dff elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                                    data-id="21123dff"
                                                                                    data-element_type="section"
                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-44fd758 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="44fd758"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-715e63b1 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="715e63b1"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-9603a50 sc_height_small sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="9603a50"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-4f14a067 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                                                    data-id="4f14a067"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_title.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_title sc_title_default">
                                                                                                            <h1
                                                                                                                class="sc_item_title sc_title_title sc_align_left sc_item_title_style_default sc_item_title_tag">
                                                                                                                <span
                                                                                                                    class="sc_item_title_text">How
                                                                                                                    Do All
                                                                                                                    Electric
                                                                                                                    Cars
                                                                                                                    Work?</span>
                                                                                                            </h1>
                                                                                                            <div
                                                                                                                class="sc_item_descr sc_title_descr sc_align_left">
                                                                                                                <p>Dicta
                                                                                                                    sunt
                                                                                                                    explicabo.
                                                                                                                    Nemo
                                                                                                                    enim
                                                                                                                    ipsam
                                                                                                                    voluptatem
                                                                                                                    quia
                                                                                                                    voluptas
                                                                                                                    sit
                                                                                                                    aspernatur
                                                                                                                    aut odit
                                                                                                                    aut
                                                                                                                    fugit
                                                                                                                    sed
                                                                                                                    quia.
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-231feb1b sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="231feb1b"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-4e116cf4 sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                                                                    data-id="4e116cf4"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_item_button sc_button_wrap sc_align_left">
                                                                                                            <a href="https://greeny.axiomthemes.com/charging-solutions/"
                                                                                                                class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left color_style_link2"><span
                                                                                                                    class="sc_button_text"><span
                                                                                                                        class="sc_button_title">Learn
                                                                                                                        More</span></span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-5c9e0201 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="5c9e0201"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-549151a8 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="549151a8"
                                                                                            data-element_type="column"
                                                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-23476dc8 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="23476dc8"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-tab-title elementor-tab-mobile-title"
                                                                            aria-selected="false" data-tab="2"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="elementor-tab-content-4372"
                                                                            aria-expanded="false">Saving Money</div>
                                                                        <div id="elementor-tab-content-4372"
                                                                            class="elementor-tab-content elementor-clearfix"
                                                                            data-tab="2" role="tabpanel"
                                                                            aria-labelledby="elementor-tab-title-4372"
                                                                            tabindex="0" hidden="hidden">
                                                                            <div data-elementor-type="cpt_layouts"
                                                                                data-elementor-id="19056"
                                                                                class="elementor elementor-19056">
                                                                                <section
                                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-7c7638c elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                                    data-id="7c7638c"
                                                                                    data-element_type="section"
                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1f7ef07 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="1f7ef07"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-a935ad9 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="a935ad9"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-d10714c sc_height_small sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="d10714c"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-35887c9 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                                                    data-id="35887c9"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_title.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_title sc_title_default">
                                                                                                            <h1
                                                                                                                class="sc_item_title sc_title_title sc_align_left sc_item_title_style_default sc_item_title_tag">
                                                                                                                <span
                                                                                                                    class="sc_item_title_text">Saving
                                                                                                                    Money</span>
                                                                                                            </h1>
                                                                                                            <div
                                                                                                                class="sc_item_descr sc_title_descr sc_align_left">
                                                                                                                <p>Dicta
                                                                                                                    sunt
                                                                                                                    explicabo.
                                                                                                                    Nemo
                                                                                                                    enim
                                                                                                                    ipsam
                                                                                                                    voluptatem
                                                                                                                    quia
                                                                                                                    voluptas
                                                                                                                    sit
                                                                                                                    aspernatur
                                                                                                                    aut odit
                                                                                                                    aut
                                                                                                                    fugit
                                                                                                                    sed
                                                                                                                    quia.
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-2002f98 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="2002f98"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-bae5bd5 sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                                                                    data-id="bae5bd5"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_item_button sc_button_wrap sc_align_left">
                                                                                                            <a href="https://greeny.axiomthemes.com/charging-solutions/"
                                                                                                                class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left color_style_link2"><span
                                                                                                                    class="sc_button_text"><span
                                                                                                                        class="sc_button_title">Learn
                                                                                                                        More</span></span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-5e80cd8 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="5e80cd8"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6285110 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="6285110"
                                                                                            data-element_type="column"
                                                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-74e9109 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="74e9109"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-tab-title elementor-tab-mobile-title"
                                                                            aria-selected="false" data-tab="3"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="elementor-tab-content-4373"
                                                                            aria-expanded="false">Lower Emissions</div>
                                                                        <div id="elementor-tab-content-4373"
                                                                            class="elementor-tab-content elementor-clearfix"
                                                                            data-tab="3" role="tabpanel"
                                                                            aria-labelledby="elementor-tab-title-4373"
                                                                            tabindex="0" hidden="hidden">
                                                                            <div data-elementor-type="cpt_layouts"
                                                                                data-elementor-id="19057"
                                                                                class="elementor elementor-19057">
                                                                                <section
                                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-8063ca9 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                                    data-id="8063ca9"
                                                                                    data-element_type="section"
                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b7760f0 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="b7760f0"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-1aa1ee5 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="1aa1ee5"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-e6d88e9 sc_height_small sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="e6d88e9"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-d94db44 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                                                    data-id="d94db44"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_title.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_title sc_title_default">
                                                                                                            <h1
                                                                                                                class="sc_item_title sc_title_title sc_align_left sc_item_title_style_default sc_item_title_tag">
                                                                                                                <span
                                                                                                                    class="sc_item_title_text">Lower
                                                                                                                    Emissions</span>
                                                                                                            </h1>
                                                                                                            <div
                                                                                                                class="sc_item_descr sc_title_descr sc_align_left">
                                                                                                                <p>Dicta
                                                                                                                    sunt
                                                                                                                    explicabo.
                                                                                                                    Nemo
                                                                                                                    enim
                                                                                                                    ipsam
                                                                                                                    voluptatem
                                                                                                                    quia
                                                                                                                    voluptas
                                                                                                                    sit
                                                                                                                    aspernatur
                                                                                                                    aut odit
                                                                                                                    aut
                                                                                                                    fugit
                                                                                                                    sed
                                                                                                                    quia.
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-2ebec82 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="2ebec82"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-3ae2bf9 sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                                                                    data-id="3ae2bf9"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_item_button sc_button_wrap sc_align_left">
                                                                                                            <a href="https://greeny.axiomthemes.com/charging-solutions/"
                                                                                                                class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left color_style_link2"><span
                                                                                                                    class="sc_button_text"><span
                                                                                                                        class="sc_button_title">Learn
                                                                                                                        More</span></span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-beb6595 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="beb6595"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-539f41a sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="539f41a"
                                                                                            data-element_type="column"
                                                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-5ce8996 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="5ce8996"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-tab-title elementor-tab-mobile-title"
                                                                            aria-selected="false" data-tab="4"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="elementor-tab-content-4374"
                                                                            aria-expanded="false">Less Maintenance</div>
                                                                        <div id="elementor-tab-content-4374"
                                                                            class="elementor-tab-content elementor-clearfix"
                                                                            data-tab="4" role="tabpanel"
                                                                            aria-labelledby="elementor-tab-title-4374"
                                                                            tabindex="0" hidden="hidden">
                                                                            <div data-elementor-type="cpt_layouts"
                                                                                data-elementor-id="19058"
                                                                                class="elementor elementor-19058">
                                                                                <section
                                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-a3e4536 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                                    data-id="a3e4536"
                                                                                    data-element_type="section"
                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-14b1d8b sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="14b1d8b"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-3e1eb31 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="3e1eb31"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-9c4dfb6 sc_height_small sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="9c4dfb6"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-ec745c9 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                                                    data-id="ec745c9"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_title.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_title sc_title_default">
                                                                                                            <h1
                                                                                                                class="sc_item_title sc_title_title sc_align_left sc_item_title_style_default sc_item_title_tag">
                                                                                                                <span
                                                                                                                    class="sc_item_title_text">Less
                                                                                                                    Maintenance</span>
                                                                                                            </h1>
                                                                                                            <div
                                                                                                                class="sc_item_descr sc_title_descr sc_align_left">
                                                                                                                <p>Dicta
                                                                                                                    sunt
                                                                                                                    explicabo.
                                                                                                                    Nemo
                                                                                                                    enim
                                                                                                                    ipsam
                                                                                                                    voluptatem
                                                                                                                    quia
                                                                                                                    voluptas
                                                                                                                    sit
                                                                                                                    aspernatur
                                                                                                                    aut odit
                                                                                                                    aut
                                                                                                                    fugit
                                                                                                                    sed
                                                                                                                    quia.
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-a771a1a sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="a771a1a"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-ea64314 sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                                                                    data-id="ea64314"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_item_button sc_button_wrap sc_align_left">
                                                                                                            <a href="https://greeny.axiomthemes.com/charging-solutions/"
                                                                                                                class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left color_style_link2"><span
                                                                                                                    class="sc_button_text"><span
                                                                                                                        class="sc_button_title">Learn
                                                                                                                        More</span></span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-24f2f0d sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="24f2f0d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c33634 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="6c33634"
                                                                                            data-element_type="column"
                                                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-ac8223c sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="ac8223c"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-tab-title elementor-tab-mobile-title"
                                                                            aria-selected="false" data-tab="5"
                                                                            role="tab" tabindex="-1"
                                                                            aria-controls="elementor-tab-content-4375"
                                                                            aria-expanded="false">Better Performance</div>
                                                                        <div id="elementor-tab-content-4375"
                                                                            class="elementor-tab-content elementor-clearfix"
                                                                            data-tab="5" role="tabpanel"
                                                                            aria-labelledby="elementor-tab-title-4375"
                                                                            tabindex="0" hidden="hidden">
                                                                            <div data-elementor-type="cpt_layouts"
                                                                                data-elementor-id="19059"
                                                                                class="elementor elementor-19059">
                                                                                <section
                                                                                    class="elementor-section elementor-top-section elementor-element elementor-element-eb55e39 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                                                    data-id="eb55e39"
                                                                                    data-element_type="section"
                                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                    <div
                                                                                        class="elementor-container elementor-column-gap-no">
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-cf65b97 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="cf65b97"
                                                                                            data-element_type="column">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-c6b769c sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="c6b769c"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-1912582 sc_height_small sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="1912582"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-ecdc746 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                                                                    data-id="ecdc746"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_title.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_title sc_title_default">
                                                                                                            <h1
                                                                                                                class="sc_item_title sc_title_title sc_align_left sc_item_title_style_default sc_item_title_tag">
                                                                                                                <span
                                                                                                                    class="sc_item_title_text">Better
                                                                                                                    Performance</span>
                                                                                                            </h1>
                                                                                                            <div
                                                                                                                class="sc_item_descr sc_title_descr sc_align_left">
                                                                                                                <p>Dicta
                                                                                                                    sunt
                                                                                                                    explicabo.
                                                                                                                    Nemo
                                                                                                                    enim
                                                                                                                    ipsam
                                                                                                                    voluptatem
                                                                                                                    quia
                                                                                                                    voluptas
                                                                                                                    sit
                                                                                                                    aspernatur
                                                                                                                    aut odit
                                                                                                                    aut
                                                                                                                    fugit
                                                                                                                    sed
                                                                                                                    quia.
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-9d3458d sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="9d3458d"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-48fca27 sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                                                                    data-id="48fca27"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="trx_sc_button.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="sc_item_button sc_button_wrap sc_align_left">
                                                                                                            <a href="https://greeny.axiomthemes.com/charging-solutions/"
                                                                                                                class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left color_style_link2"><span
                                                                                                                    class="sc_button_text"><span
                                                                                                                        class="sc_button_title">Learn
                                                                                                                        More</span></span></a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-4308e92 sc_height_large sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="4308e92"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dd34b1a sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                                            data-id="dd34b1a"
                                                                                            data-element_type="column"
                                                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                                            <div
                                                                                                class="elementor-widget-wrap elementor-element-populated">
                                                                                                <div class="sc_layouts_item elementor-element elementor-element-48caada sc_fly_static elementor-widget elementor-widget-spacer"
                                                                                                    data-id="48caada"
                                                                                                    data-element_type="widget"
                                                                                                    data-widget_type="spacer.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">
                                                                                                        <div
                                                                                                            class="elementor-spacer">
                                                                                                            <div
                                                                                                                class="elementor-spacer-inner">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-df72482 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="df72482" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-570fa21 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="570fa21" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-22a1591 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="22a1591" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-897dbee sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="897dbee" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-5a65e667 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="5a65e667" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f4090a8 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="6f4090a8" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-317cb54a sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="317cb54a" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-566e565 sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="566e565" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <section
                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-6d64a96f elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                            data-id="6d64a96f" data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-206a22b2 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                    data-id="206a22b2" data-element_type="column">
                                                                    <div
                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                        <div data-animation-type="sequental"
                                                                            data-animation-stagger=""
                                                                            class="elementor-element elementor-element-71c7a0f9 animation_type_sequental sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_icons"
                                                                            data-id="71c7a0f9"
                                                                            data-element_type="widget"
                                                                            data-settings="{&quot;_animation&quot;:&quot;greeny-fadeinup&quot;,&quot;_animation_delay&quot;:100}"
                                                                            data-widget_type="trx_sc_icons.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="sc_icons color_style_link2 sc_icons_hover2 sc_icons_size_medium sc_align_none">
                                                                                    <div
                                                                                        class="sc_icons_columns_wrap sc_item_columns trx_addons_columns_wrap columns_padding_bottom">
                                                                                        <div
                                                                                            class="trx_addons_column-1_2">
                                                                                            <div
                                                                                                class="sc_icons_item sc_icons_item_linked">
                                                                                                <div
                                                                                                    class="sc_icons_icon sc_icon_type_ icon-gr_eco-fuel_1">
                                                                                                    <span
                                                                                                        class="sc_icon_type_ icon-gr_eco-fuel_1"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="sc_icons_item_details">
                                                                                                    <h4
                                                                                                        class="sc_icons_item_title">
                                                                                                        <a
                                                                                                            href="https://greeny.axiomthemes.com/about-us/">
                                                                                                            No Gas Required
                                                                                                        </a>
                                                                                                    </h4>
                                                                                                    <div
                                                                                                        class="sc_icons_item_description">
                                                                                                        <span>Natus error
                                                                                                            sit voluptatem
                                                                                                            accusantium
                                                                                                            doloremque
                                                                                                            laudantium,
                                                                                                            totam rem
                                                                                                            aperiam.</span>
                                                                                                    </div><a
                                                                                                        href="https://greeny.axiomthemes.com/about-us/"
                                                                                                        class="sc_icons_item_link">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="trx_addons_column-1_2">
                                                                                            <div
                                                                                                class="sc_icons_item sc_icons_item_linked">
                                                                                                <div
                                                                                                    class="sc_icons_icon sc_icon_type_ icon-gr_green-earth">
                                                                                                    <span
                                                                                                        class="sc_icon_type_ icon-gr_green-earth"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="sc_icons_item_details">
                                                                                                    <h4
                                                                                                        class="sc_icons_item_title">
                                                                                                        <a
                                                                                                            href="https://greeny.axiomthemes.com/about-us/">
                                                                                                            Zero Emissions
                                                                                                        </a>
                                                                                                    </h4>
                                                                                                    <div
                                                                                                        class="sc_icons_item_description">
                                                                                                        <span>Natus error
                                                                                                            sit voluptatem
                                                                                                            accusantium
                                                                                                            doloremque
                                                                                                            laudantium,
                                                                                                            totam rem
                                                                                                            aperiam.</span>
                                                                                                    </div><a
                                                                                                        href="https://greeny.axiomthemes.com/about-us/"
                                                                                                        class="sc_icons_item_link">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="trx_addons_column-1_2">
                                                                                            <div
                                                                                                class="sc_icons_item sc_icons_item_linked">
                                                                                                <div
                                                                                                    class="sc_icons_icon sc_icon_type_ icon-gr_electric-car_1">
                                                                                                    <span
                                                                                                        class="sc_icon_type_ icon-gr_electric-car_1"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="sc_icons_item_details">
                                                                                                    <h4
                                                                                                        class="sc_icons_item_title">
                                                                                                        <a
                                                                                                            href="https://greeny.axiomthemes.com/about-us/">
                                                                                                            Easy to Recharge
                                                                                                        </a>
                                                                                                    </h4>
                                                                                                    <div
                                                                                                        class="sc_icons_item_description">
                                                                                                        <span>Natus error
                                                                                                            sit voluptatem
                                                                                                            accusantium
                                                                                                            doloremque
                                                                                                            laudantium,
                                                                                                            totam rem
                                                                                                            aperiam.</span>
                                                                                                    </div><a
                                                                                                        href="https://greeny.axiomthemes.com/about-us/"
                                                                                                        class="sc_icons_item_link">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="trx_addons_column-1_2">
                                                                                            <div
                                                                                                class="sc_icons_item sc_icons_item_linked">
                                                                                                <div
                                                                                                    class="sc_icons_icon sc_icon_type_ icon-gr_green-energy-1">
                                                                                                    <span
                                                                                                        class="sc_icon_type_ icon-gr_green-energy-1"></span>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="sc_icons_item_details">
                                                                                                    <h4
                                                                                                        class="sc_icons_item_title">
                                                                                                        <a
                                                                                                            href="https://greeny.axiomthemes.com/about-us/">
                                                                                                            Cost-Effective
                                                                                                        </a>
                                                                                                    </h4>
                                                                                                    <div
                                                                                                        class="sc_icons_item_description">
                                                                                                        <span>Natus error
                                                                                                            sit voluptatem
                                                                                                            accusantium
                                                                                                            doloremque
                                                                                                            laudantium,
                                                                                                            totam rem
                                                                                                            aperiam.</span>
                                                                                                    </div><a
                                                                                                        href="https://greeny.axiomthemes.com/about-us/"
                                                                                                        class="sc_icons_item_link">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- /.sc_icons -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <div class="elementor-element elementor-element-3ad76396 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="3ad76396" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5d7bc97 sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="5d7bc97" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-6b206938 scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="6b206938" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-32442855 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="32442855" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-782f46fc sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="782f46fc" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-471367b sc_height_huge sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="471367b" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1ae0bc1b sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="1ae0bc1b" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-animation-type="block"
                                                            class="elementor-element elementor-element-59f98ca1 animation_type_block sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="59f98ca1" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;greeny-fadeinright&quot;}"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default"><span
                                                                        class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">open
                                                                        horizons</span>
                                                                    <h1
                                                                        class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                        <span class="sc_item_title_text">Cars for those
                                                                            who appreciate driving in style.</span>
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-307e16cd sc_height_huge sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="307e16cd" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-46b3b3c sc_height_huge sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="46b3b3c" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-efb98d0 sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="efb98d0" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1bfbb154 sc_layouts_column_align_right sc_layouts_column sc-mobile_layouts_column_align_left sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="1bfbb154" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-3732c1de sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="3732c1de" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-fa448d3 sc_layouts_hide_on_mobile sc_height_large sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="fa448d3" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-animation-type="block"
                                                            class="elementor-element elementor-element-45db03de animation_type_block sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="45db03de" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;greeny-fadeinright&quot;,&quot;_animation_delay&quot;:100}"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title color_style_link2 sc_title_default">
                                                                    <div
                                                                        class="sc_item_descr sc_title_descr sc_align_left">
                                                                        <p>Adipiscing elit, sed do eiusmod tempor incididunt
                                                                            ut labore et dolore magna aliqua. Ut enim ad
                                                                            minim veniam, quis nostrud exercitation ullamco.
                                                                            Adipiscing elit, sed do eiusmod tempor
                                                                            incididunt ut labore.</p>
                                                                    </div>
                                                                    <div
                                                                        class="sc_item_button sc_button_wrap sc_align_left sc_item_button sc_item_button_default sc_item_button_size_normal sc_title_button">
                                                                        <a href="https://greeny.axiomthemes.com/shop/"
                                                                            class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left"><span
                                                                                class="sc_button_text"><span
                                                                                    class="sc_button_title">View
                                                                                    Cars</span></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2c4e699f sc_height_large sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="2c4e699f" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-5251d603 elementor-section-full_width elementor-section-content-middle scheme_dark elementor-reverse-mobile elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="5251d603" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-26f4d351 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="26f4d351" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-b0a6c4e sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="b0a6c4e" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1061c7f3 sc_fly_static elementor-widget elementor-widget-trx_sc_testimonials"
                                                            data-id="1061c7f3" data-element_type="widget"
                                                            id="testimonials-2"
                                                            data-widget_type="trx_sc_testimonials.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="testimonials-2_sc"
                                                                    class="sc_testimonials sc_testimonials_common">
                                                                    <div id="testimonials-2_sc_outer"
                                                                        class="sc_testimonials_slider sc_item_slider slider_swiper_outer slider_outer slider_outer_nocontrols slider_outer_nopagination slider_outer_nocentered slider_outer_overflow_hidden slider_outer_one">
                                                                        <div id="testimonials-2_sc_swiper"
                                                                            data-slides-per-view-breakpoints="{&quot;999999&quot;:1}"
                                                                            data-slides-space-breakpoints="{&quot;999999&quot;:30}"
                                                                            class="slider_container swiper-slider-container slider_swiper slider_noresize slider_nocontrols slider_nopagination slider_nocentered slider_overflow_hidden slider_one"
                                                                            data-slides-space="30" data-effect="slide"
                                                                            data-slides-min-width="290"
                                                                            data-pagination="bullets"
                                                                            data-direction="horizontal"
                                                                            data-mouse-wheel="0" data-autoplay="1"
                                                                            data-loop="1" data-free-mode="0"
                                                                            data-slides-centered="0"
                                                                            data-slides-overflow="0">
                                                                            <div
                                                                                class="slides slider-wrapper swiper-wrapper sc_item_columns_1">
                                                                                <div class="slider-slide swiper-slide">
                                                                                    <div data-post-id="515"
                                                                                        class="sc_testimonials_item sc_item_container post_container">
                                                                                        <div
                                                                                            class="sc_testimonials_item_content">
                                                                                            <p>Beatae vitae dicta sunt
                                                                                                explicabo. Nemo enim ipsam
                                                                                                voluptatem quia voluptas sit
                                                                                                aspernatur aut odit aut
                                                                                                fugit, sed eatae vitae
                                                                                                dicta.enim ipsam voluptatem
                                                                                                quia voluptas.</p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_testimonials_item_author">
                                                                                            <div
                                                                                                class="sc_testimonials_item_author_data">
                                                                                                <h4
                                                                                                    class="sc_testimonials_item_author_title">
                                                                                                    Brian Woods</h4>
                                                                                                <div
                                                                                                    class="sc_testimonials_item_author_subtitle">
                                                                                                    Business Coach</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="slider-slide swiper-slide">
                                                                                    <div data-post-id="517"
                                                                                        class="sc_testimonials_item sc_item_container post_container">
                                                                                        <div
                                                                                            class="sc_testimonials_item_content">
                                                                                            <p>Beatae vitae dicta sunt
                                                                                                explicabo. Nemo enim ipsam
                                                                                                voluptatem quia voluptas sit
                                                                                                aspernatur aut odit aut
                                                                                                fugit, sed eatae vitae
                                                                                                dicta.enim ipsam voluptatem
                                                                                                quia voluptas.</p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_testimonials_item_author">
                                                                                            <div
                                                                                                class="sc_testimonials_item_author_data">
                                                                                                <h4
                                                                                                    class="sc_testimonials_item_author_title">
                                                                                                    Natalie Jones</h4>
                                                                                                <div
                                                                                                    class="sc_testimonials_item_author_subtitle">
                                                                                                    Journalist</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="slider-slide swiper-slide">
                                                                                    <div data-post-id="520"
                                                                                        class="sc_testimonials_item sc_item_container post_container">
                                                                                        <div
                                                                                            class="sc_testimonials_item_content">
                                                                                            <p>Beatae vitae dicta sunt
                                                                                                explicabo. Nemo enim ipsam
                                                                                                voluptatem quia voluptas sit
                                                                                                aspernatur aut odit aut
                                                                                                fugit, sed eatae vitae
                                                                                                dicta.enim ipsam voluptatem
                                                                                                quia voluptas.</p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_testimonials_item_author">
                                                                                            <div
                                                                                                class="sc_testimonials_item_author_data">
                                                                                                <h4
                                                                                                    class="sc_testimonials_item_author_title">
                                                                                                    Andrew Morris</h4>
                                                                                                <div
                                                                                                    class="sc_testimonials_item_author_subtitle">
                                                                                                    PR Manager</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.sc_testimonials -->
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-355cff18 sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="355cff18" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-1067e0b1 sc_fly_static elementor-widget elementor-widget-trx_sc_slider_controls"
                                                            data-id="1067e0b1" data-element_type="widget"
                                                            data-widget_type="trx_sc_slider_controls.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_slider_controls sc_slider_controls_default slider_pagination_style_bullets sc_align_center"
                                                                    data-slider-id="testimonials-2" data-style="default"
                                                                    data-pagination-style="bullets"
                                                                    data-pagination-html-tag="span">
                                                                    <div class="slider_controls_wrap">
                                                                        <div class="slider_pagination_wrap"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-64870a4b sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="64870a4b" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7051b66b sc_layouts_column_align_center sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="7051b66b" data-element_type="column"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-7652df0f sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="7652df0f" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-241dcc59 elementor-view-stacked elementor-widget__width-auto play_center elementor-shape-circle sc_fly_static elementor-widget elementor-widget-icon"
                                                            data-id="241dcc59" data-element_type="widget"
                                                            data-widget_type="icon.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-icon-wrapper">
                                                                    <a class="elementor-icon" href="#go-video6">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="12.24" height="16.583"
                                                                            viewBox="0 0 12.24 16.583">
                                                                            <path
                                                                                d="M17.57,7.966,6.119.07A.395.395,0,0,0,5.5.394V16.188a.395.395,0,0,0,.619.325l11.451-7.9a.395.395,0,0,0,0-.65Z"
                                                                                transform="translate(-5.5 0)"></path>
                                                                        </svg> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4b3c8325 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="4b3c8325" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-53de6d9 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="53de6d9" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-89fa887 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="89fa887" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-e54a095 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="e54a095" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ba648cd sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="ba648cd" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-a305ddf sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="a305ddf" data-element_type="widget"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default"><span
                                                                        class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">Best
                                                                        electric cars</span>
                                                                    <h1
                                                                        class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
                                                                        <span class="sc_item_title_text">Which Electric
                                                                            Car is <br> Right for You?</span>
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ae08919 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="ae08919" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-animation-type="sequental" data-animation-stagger=""
                                                            class="elementor-element elementor-element-0d36245 animation_type_sequental sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_extended_products"
                                                            data-id="0d36245" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;greeny-fadeinup&quot;,&quot;_animation_delay&quot;:100}"
                                                            data-widget_type="trx_sc_extended_products.default">
                                                            <div class="elementor-widget-container">
                                                                <div
                                                                    class="sc_extended_products sc_extended_products_info">
                                                                    <div
                                                                        class="sc_extended_products_content sc_item_content">
                                                                        <div class="woocommerce columns-3 ">
                                                                            <ul
                                                                                class="products products_style_info columns-3">
                                                                                <li
                                                                                    class="product type-product post-2382 status-publish first instock product_cat-batteries product_tag-cable product_tag-ev product_tag-portable has-post-thumbnail shipping-taxable purchasable product-type-simple product_style_info">
                                                                                    <div
                                                                                        class="post_item post_layout_thumbs">
                                                                                        <div
                                                                                            class="post_featured hover_shop">
                                                                                            <a
                                                                                                href="https://greeny.axiomthemes.com/product/car-model-a/">
                                                                                                <img loading="lazy"
                                                                                                    decoding="async"
                                                                                                    width="630"
                                                                                                    height="630"
                                                                                                    src="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-630x630.jpg"
                                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                                    alt=""
                                                                                                    srcset="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-630x630.jpg 630w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-300x300.jpg 300w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-1024x1024.jpg 1024w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-150x150.jpg 150w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-768x768.jpg 768w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-370x370.jpg 370w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-120x120.jpg 120w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-840x840.jpg 840w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-410x410.jpg 410w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3-600x600.jpg 600w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car3.jpg 1200w"
                                                                                                    sizes="(max-width: 630px) 100vw, 630px" />
                                                                                            </a>
                                                                                            <div class="mask"></div>
                                                                                            <div class="icons">
                                                                                                <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart tinvwl-loop-button-wrapper tinvwl-woocommerce_before_shop_loop_item_title"
                                                                                                    data-tinvwl_product_id="2382">
                                                                                                    <div
                                                                                                        class="tinv-wishlist-clear">
                                                                                                    </div><a
                                                                                                        role="button"
                                                                                                        tabindex="0"
                                                                                                        name="add-to-wishlist"
                                                                                                        aria-label="Add to Wishlist"
                                                                                                        class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-shortcode tinvwl-loop"
                                                                                                        data-tinv-wl-list="[]"
                                                                                                        data-tinv-wl-product="2382"
                                                                                                        data-tinv-wl-productvariation="0"
                                                                                                        data-tinv-wl-productvariations="[]"
                                                                                                        data-tinv-wl-producttype="simple"
                                                                                                        data-tinv-wl-action="add"><span
                                                                                                            class="tinvwl_add_to_wishlist-text">Add
                                                                                                            to
                                                                                                            Wishlist</span><span
                                                                                                            class="tinvwl_remove_from_wishlist-text">Remove
                                                                                                            from
                                                                                                            Wishlist</span></a>
                                                                                                    <div
                                                                                                        class="tinv-wishlist-clear">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tinvwl-tooltip">
                                                                                                        Add to Wishlist
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a rel="nofollow"
                                                                                                    href="?add-to-cart=2382"
                                                                                                    aria-hidden="true"
                                                                                                    data-quantity="1"
                                                                                                    data-product_id="2382"
                                                                                                    data-product_sku=""
                                                                                                    class="shop_cart icon-shopping-cart button add_to_cart_button product_type_simple product_in_stock ajax_add_to_cart"><span
                                                                                                        class="icon-anim"></span></a>
                                                                                                <a href="https://greeny.axiomthemes.com/product/car-model-a/"
                                                                                                    aria-hidden="true"
                                                                                                    class="shop_link">
                                                                                                    <span
                                                                                                        class="icon-anim"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="post_data">
                                                                                            <div class="post_data_inner">
                                                                                                <div
                                                                                                    class="post_header entry-header">
                                                                                                    <div
                                                                                                        class="post_tags product_tags">
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/cable/"
                                                                                                            rel="tag">Cable</a>,
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/ev/"
                                                                                                            rel="tag">EV</a>,
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/portable/"
                                                                                                            rel="tag">Portable</a>
                                                                                                    </div>
                                                                                                    <h2
                                                                                                        class="woocommerce-loop-product__title">
                                                                                                        <a
                                                                                                            href="https://greeny.axiomthemes.com/product/car-model-a/">Car
                                                                                                            Model A</a>
                                                                                                    </h2>
                                                                                                </div>

                                                                                                <span class="price"><span
                                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>40,000.00</bdi></span></span>
                                                                                                <div class="star-rating"
                                                                                                    role="img"
                                                                                                    aria-label="Rated 5.00 out of 5">
                                                                                                    <span
                                                                                                        style="width:100%">Rated
                                                                                                        <strong
                                                                                                            class="rating">5.00</strong>
                                                                                                        out of 5</span>
                                                                                                </div><a
                                                                                                    href="?add-to-cart=2382"
                                                                                                    aria-describedby="woocommerce_loop_add_to_cart_link_describedby_2382"
                                                                                                    data-quantity="1"
                                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                    data-product_id="2382"
                                                                                                    data-product_sku=""
                                                                                                    aria-label="Add to cart: &ldquo;Car Model A&rdquo;"
                                                                                                    rel="nofollow"
                                                                                                    data-success_message="&ldquo;Car Model A&rdquo; has been added to your cart">Buy
                                                                                                    now</a> <span
                                                                                                    id="woocommerce_loop_add_to_cart_link_describedby_2382"
                                                                                                    class="screen-reader-text">
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="product type-product post-2381 status-publish instock product_cat-charging-stations product_tag-charger product_tag-ev product_tag-sale has-post-thumbnail sale shipping-taxable purchasable product-type-simple product_style_info">
                                                                                    <div
                                                                                        class="post_item post_layout_thumbs">
                                                                                        <div
                                                                                            class="post_featured hover_shop">
                                                                                            <a
                                                                                                href="https://greeny.axiomthemes.com/product/car-model-b/">

                                                                                                <span
                                                                                                    class="onsale">-4%</span>
                                                                                                <img loading="lazy"
                                                                                                    decoding="async"
                                                                                                    width="630"
                                                                                                    height="630"
                                                                                                    src="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-630x630.jpg"
                                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                                    alt=""
                                                                                                    srcset="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-630x630.jpg 630w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-300x300.jpg 300w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-1024x1024.jpg 1024w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-150x150.jpg 150w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-768x768.jpg 768w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-370x370.jpg 370w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-120x120.jpg 120w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-840x840.jpg 840w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-410x410.jpg 410w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1-600x600.jpg 600w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car1.jpg 1200w"
                                                                                                    sizes="(max-width: 630px) 100vw, 630px" />
                                                                                            </a>
                                                                                            <div class="mask"></div>
                                                                                            <div class="icons">
                                                                                                <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart tinvwl-loop-button-wrapper tinvwl-woocommerce_before_shop_loop_item_title"
                                                                                                    data-tinvwl_product_id="2381">
                                                                                                    <div
                                                                                                        class="tinv-wishlist-clear">
                                                                                                    </div><a
                                                                                                        role="button"
                                                                                                        tabindex="0"
                                                                                                        name="add-to-wishlist"
                                                                                                        aria-label="Add to Wishlist"
                                                                                                        class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-shortcode tinvwl-loop"
                                                                                                        data-tinv-wl-list="[]"
                                                                                                        data-tinv-wl-product="2381"
                                                                                                        data-tinv-wl-productvariation="0"
                                                                                                        data-tinv-wl-productvariations="[]"
                                                                                                        data-tinv-wl-producttype="simple"
                                                                                                        data-tinv-wl-action="add"><span
                                                                                                            class="tinvwl_add_to_wishlist-text">Add
                                                                                                            to
                                                                                                            Wishlist</span><span
                                                                                                            class="tinvwl_remove_from_wishlist-text">Remove
                                                                                                            from
                                                                                                            Wishlist</span></a>
                                                                                                    <div
                                                                                                        class="tinv-wishlist-clear">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tinvwl-tooltip">
                                                                                                        Add to Wishlist
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a rel="nofollow"
                                                                                                    href="?add-to-cart=2381"
                                                                                                    aria-hidden="true"
                                                                                                    data-quantity="1"
                                                                                                    data-product_id="2381"
                                                                                                    data-product_sku=""
                                                                                                    class="shop_cart icon-shopping-cart button add_to_cart_button product_type_simple product_in_stock ajax_add_to_cart"><span
                                                                                                        class="icon-anim"></span></a>
                                                                                                <a href="https://greeny.axiomthemes.com/product/car-model-b/"
                                                                                                    aria-hidden="true"
                                                                                                    class="shop_link">
                                                                                                    <span
                                                                                                        class="icon-anim"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="post_data">
                                                                                            <div class="post_data_inner">
                                                                                                <div
                                                                                                    class="post_header entry-header">
                                                                                                    <div
                                                                                                        class="post_tags product_tags">
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/charger/"
                                                                                                            rel="tag">Charger</a>,
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/ev/"
                                                                                                            rel="tag">EV</a>,
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/sale/"
                                                                                                            rel="tag">Sale</a>
                                                                                                    </div>
                                                                                                    <h2
                                                                                                        class="woocommerce-loop-product__title">
                                                                                                        <a
                                                                                                            href="https://greeny.axiomthemes.com/product/car-model-b/">Car
                                                                                                            Model B</a>
                                                                                                    </h2>
                                                                                                </div>

                                                                                                <span class="price"><del
                                                                                                        aria-hidden="true"><span
                                                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>45,000.00</bdi></span></del>
                                                                                                    <span
                                                                                                        class="screen-reader-text">Original
                                                                                                        price was:
                                                                                                        &#036;45,000.00.</span><ins
                                                                                                        aria-hidden="true"><span
                                                                                                            class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>43,000.00</bdi></span></ins><span
                                                                                                        class="screen-reader-text">Current
                                                                                                        price is:
                                                                                                        &#036;43,000.00.</span></span>
                                                                                                <div class="star-rating"
                                                                                                    role="img"
                                                                                                    aria-label="Rated 4.00 out of 5">
                                                                                                    <span
                                                                                                        style="width:80%">Rated
                                                                                                        <strong
                                                                                                            class="rating">4.00</strong>
                                                                                                        out of 5</span>
                                                                                                </div><a
                                                                                                    href="?add-to-cart=2381"
                                                                                                    aria-describedby="woocommerce_loop_add_to_cart_link_describedby_2381"
                                                                                                    data-quantity="1"
                                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                    data-product_id="2381"
                                                                                                    data-product_sku=""
                                                                                                    aria-label="Add to cart: &ldquo;Car Model B&rdquo;"
                                                                                                    rel="nofollow"
                                                                                                    data-success_message="&ldquo;Car Model B&rdquo; has been added to your cart">Buy
                                                                                                    now</a> <span
                                                                                                    id="woocommerce_loop_add_to_cart_link_describedby_2381"
                                                                                                    class="screen-reader-text">
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li
                                                                                    class="product type-product post-2377 status-publish last instock product_cat-accessories product_tag-battery product_tag-ev product_tag-portable has-post-thumbnail shipping-taxable purchasable product-type-simple product_style_info">
                                                                                    <div
                                                                                        class="post_item post_layout_thumbs">
                                                                                        <div
                                                                                            class="post_featured hover_shop">
                                                                                            <a
                                                                                                href="https://greeny.axiomthemes.com/product/car-model-c/">
                                                                                                <img loading="lazy"
                                                                                                    decoding="async"
                                                                                                    width="630"
                                                                                                    height="630"
                                                                                                    src="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-630x630.jpg"
                                                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                                                    alt=""
                                                                                                    srcset="https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-630x630.jpg 630w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-300x300.jpg 300w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-1024x1024.jpg 1024w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-150x150.jpg 150w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-768x768.jpg 768w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-370x370.jpg 370w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-120x120.jpg 120w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-840x840.jpg 840w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-410x410.jpg 410w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2-600x600.jpg 600w, https://greeny.axiomthemes.com/wp-content/uploads/2020/05/product-car2.jpg 1200w"
                                                                                                    sizes="(max-width: 630px) 100vw, 630px" />
                                                                                            </a>
                                                                                            <div class="mask"></div>
                                                                                            <div class="icons">
                                                                                                <div class="tinv-wraper woocommerce tinv-wishlist tinvwl-shortcode-add-to-cart tinvwl-loop-button-wrapper tinvwl-woocommerce_before_shop_loop_item_title"
                                                                                                    data-tinvwl_product_id="2377">
                                                                                                    <div
                                                                                                        class="tinv-wishlist-clear">
                                                                                                    </div><a
                                                                                                        role="button"
                                                                                                        tabindex="0"
                                                                                                        name="add-to-wishlist"
                                                                                                        aria-label="Add to Wishlist"
                                                                                                        class="tinvwl_add_to_wishlist_button tinvwl-icon-heart  tinvwl-position-shortcode tinvwl-loop"
                                                                                                        data-tinv-wl-list="[]"
                                                                                                        data-tinv-wl-product="2377"
                                                                                                        data-tinv-wl-productvariation="0"
                                                                                                        data-tinv-wl-productvariations="[]"
                                                                                                        data-tinv-wl-producttype="simple"
                                                                                                        data-tinv-wl-action="add"><span
                                                                                                            class="tinvwl_add_to_wishlist-text">Add
                                                                                                            to
                                                                                                            Wishlist</span><span
                                                                                                            class="tinvwl_remove_from_wishlist-text">Remove
                                                                                                            from
                                                                                                            Wishlist</span></a>
                                                                                                    <div
                                                                                                        class="tinv-wishlist-clear">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="tinvwl-tooltip">
                                                                                                        Add to Wishlist
                                                                                                    </div>
                                                                                                </div>
                                                                                                <a rel="nofollow"
                                                                                                    href="?add-to-cart=2377"
                                                                                                    aria-hidden="true"
                                                                                                    data-quantity="1"
                                                                                                    data-product_id="2377"
                                                                                                    data-product_sku=""
                                                                                                    class="shop_cart icon-shopping-cart button add_to_cart_button product_type_simple product_in_stock ajax_add_to_cart"><span
                                                                                                        class="icon-anim"></span></a>
                                                                                                <a href="https://greeny.axiomthemes.com/product/car-model-c/"
                                                                                                    aria-hidden="true"
                                                                                                    class="shop_link">
                                                                                                    <span
                                                                                                        class="icon-anim"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="post_data">
                                                                                            <div class="post_data_inner">
                                                                                                <div
                                                                                                    class="post_header entry-header">
                                                                                                    <div
                                                                                                        class="post_tags product_tags">
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/battery/"
                                                                                                            rel="tag">Battery</a>,
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/ev/"
                                                                                                            rel="tag">EV</a>,
                                                                                                        <a href="https://greeny.axiomthemes.com/product-tag/portable/"
                                                                                                            rel="tag">Portable</a>
                                                                                                    </div>
                                                                                                    <h2
                                                                                                        class="woocommerce-loop-product__title">
                                                                                                        <a
                                                                                                            href="https://greeny.axiomthemes.com/product/car-model-c/">Car
                                                                                                            Model C</a>
                                                                                                    </h2>
                                                                                                </div>

                                                                                                <span class="price"><span
                                                                                                        class="woocommerce-Price-amount amount"><bdi><span
                                                                                                                class="woocommerce-Price-currencySymbol">&#36;</span>51,000.00</bdi></span></span>
                                                                                                <div class="star-rating"
                                                                                                    role="img"
                                                                                                    aria-label="Rated 5.00 out of 5">
                                                                                                    <span
                                                                                                        style="width:100%">Rated
                                                                                                        <strong
                                                                                                            class="rating">5.00</strong>
                                                                                                        out of 5</span>
                                                                                                </div><a
                                                                                                    href="?add-to-cart=2377"
                                                                                                    aria-describedby="woocommerce_loop_add_to_cart_link_describedby_2377"
                                                                                                    data-quantity="1"
                                                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                                    data-product_id="2377"
                                                                                                    data-product_sku=""
                                                                                                    aria-label="Add to cart: &ldquo;Car Model C&rdquo;"
                                                                                                    rel="nofollow"
                                                                                                    data-success_message="&ldquo;Car Model C&rdquo; has been added to your cart">Buy
                                                                                                    now</a> <span
                                                                                                    id="woocommerce_loop_add_to_cart_link_describedby_2377"
                                                                                                    class="screen-reader-text">
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-de7f9be sc_height_medium sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="de7f9be" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7305679 sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="7305679" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-faad54c elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="faad54c" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d550467 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="d550467" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-cb6be9c sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="cb6be9c" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-4fed8ea sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="4fed8ea" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-f835e90 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="f835e90" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5a293ff sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="5a293ff" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-a999221 sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="a999221" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-ca08287 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="ca08287" data-element_type="widget"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default"><span
                                                                        class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">You
                                                                        Can Trust Us</span>
                                                                    <h1
                                                                        class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                        <span class="sc_item_title_text">We Care About
                                                                            Your Safety</span>
                                                                    </h1>
                                                                    <div class="sc_item_descr sc_title_descr">
                                                                        <p>Dicta sunt explicabo. Nemo enim ipsam voluptatem
                                                                            quia voluptas sit aspernatur aut odit aut fugit
                                                                            sed quia.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e4f273e sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="e4f273e" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f957c84 sc_fly_static elementor-widget elementor-widget-text-editor"
                                                            data-id="f957c84" data-element_type="widget"
                                                            data-widget_type="text-editor.default">
                                                            <div class="elementor-widget-container">
                                                                <ul class="trx_addons_list_success">
                                                                    <li>Adipiscing eli sed eiusmod</li>
                                                                    <li>Tempor incididunt</li>
                                                                    <li>Labore et dolore magna</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b161415 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="b161415" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div data-parallax-params="{&quot;parallax&quot;:1,&quot;flow&quot;:&quot;entrance&quot;,&quot;crop&quot;:&quot;none&quot;,&quot;ease&quot;:&quot;power2&quot;,&quot;transition&quot;:1,&quot;duration&quot;:1,&quot;delay&quot;:0,&quot;squeeze&quot;:1,&quot;text&quot;:&quot;block&quot;,&quot;text_separate&quot;:0,&quot;text_wrap&quot;:0,&quot;mouse&quot;:0,&quot;mouse_type&quot;:&quot;transform3d&quot;,&quot;mouse_tilt_amount&quot;:70,&quot;mouse_speed&quot;:10,&quot;mouse_z&quot;:&quot;&quot;,&quot;mouse_handler&quot;:&quot;row&quot;,&quot;range_start&quot;:0,&quot;range_end&quot;:40,&quot;sticky_offset&quot;:0,&quot;lag&quot;:0,&quot;x_start&quot;:0,&quot;x_start_unit&quot;:&quot;px&quot;,&quot;x_end&quot;:0,&quot;x_end_unit&quot;:&quot;px&quot;,&quot;y_start&quot;:0,&quot;y_start_unit&quot;:&quot;px&quot;,&quot;y_end&quot;:0,&quot;y_end_unit&quot;:&quot;px&quot;,&quot;scale_start&quot;:130,&quot;scale_end&quot;:100,&quot;rotate_start&quot;:20,&quot;rotate_end&quot;:0,&quot;opacity_start&quot;:1,&quot;opacity_end&quot;:1,&quot;crop_start&quot;:0,&quot;crop_end&quot;:100,&quot;blur_start&quot;:0,&quot;blur_end&quot;:0,&quot;backdrop_blur_start&quot;:0,&quot;backdrop_blur_end&quot;:0}"
                                                            class="elementor-element elementor-element-b61b40f elementor-absolute sc_parallax sc_layouts_hide_on_mobile sc_parallax_entrance sc_fly_static elementor-widget elementor-widget-image"
                                                            data-id="b61b40f" data-element_type="widget"
                                                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                                                            data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <img loading="lazy" decoding="async" width="740"
                                                                    height="348"
                                                                    src="https://greeny.axiomthemes.com/wp-content/uploads/2022/02/Map_2.png"
                                                                    class="attachment-full size-full wp-image-19370"
                                                                    alt=""
                                                                    srcset="https://greeny.axiomthemes.com/wp-content/uploads/2022/02/Map_2.png 740w, https://greeny.axiomthemes.com/wp-content/uploads/2022/02/Map_2-300x141.png 300w, https://greeny.axiomthemes.com/wp-content/uploads/2022/02/Map_2-370x174.png 370w, https://greeny.axiomthemes.com/wp-content/uploads/2022/02/Map_2-410x193.png 410w, https://greeny.axiomthemes.com/wp-content/uploads/2022/02/Map_2-600x282.png 600w"
                                                                    sizes="(max-width: 740px) 100vw, 740px" />
                                                            </div>
                                                        </div>
                                                        <section
                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-c4d8f44 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                            data-id="c4d8f44" data-element_type="section"
                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0799f72 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                    data-id="0799f72" data-element_type="column">
                                                                    <div class="elementor-widget-wrap">
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-01a3638 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                    data-id="01a3638" data-element_type="column"
                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div
                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                        <div data-animation-type="block"
                                                                            class="elementor-element elementor-element-092d461 sc_fly_static elementor-widget elementor-widget-image"
                                                                            data-id="092d461" data-element_type="widget"
                                                                            data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_tablet&quot;:&quot;none&quot;}"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <img loading="lazy" decoding="async"
                                                                                    width="780" height="900"
                                                                                    src="https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-image2.jpg"
                                                                                    class="attachment-full size-full wp-image-19970"
                                                                                    alt=""
                                                                                    srcset="https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-image2.jpg 780w, https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-image2-260x300.jpg 260w, https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-image2-768x886.jpg 768w, https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-image2-370x427.jpg 370w, https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-image2-410x473.jpg 410w, https://greeny.axiomthemes.com/wp-content/uploads/2022/03/home1-image2-600x692.jpg 600w"
                                                                                    sizes="(max-width: 780px) 100vw, 780px" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                        <section data-animation-type="block"
                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-25c72e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                                            data-id="25c72e5" data-element_type="section"
                                                            data-settings="{&quot;animation&quot;:&quot;none&quot;,&quot;animation_tablet&quot;:&quot;none&quot;}">
                                                            <div class="elementor-container elementor-column-gap-no">
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d8078be scheme_dark sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                    data-id="d8078be" data-element_type="column"
                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div
                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-7ffe490 sc_fly_static elementor-widget elementor-widget-trx_sc_skills"
                                                                            data-id="7ffe490" data-element_type="widget"
                                                                            data-widget_type="trx_sc_skills.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="sc_skills sc_skills_counter_extra sc_skills_counter_style_odometer sc_align_left"
                                                                                    data-type="counter">
                                                                                    <div
                                                                                        class="sc_skills_column trx_addons_column-1_1">
                                                                                        <div
                                                                                            class="sc_skills_item_wrap sc_skills_item_icon_position_top">
                                                                                            <div
                                                                                                class="sc_skills_item_title">
                                                                                                Local Offices</div>
                                                                                            <div class="sc_skills_item">
                                                                                                <div class="sc_skills_total"
                                                                                                    data-start="0"
                                                                                                    data-stop="100"
                                                                                                    data-step="1"
                                                                                                    data-max="100"
                                                                                                    data-speed="15"
                                                                                                    data-duration="1500"
                                                                                                    data-ed="+"
                                                                                                    data-style="odometer">
                                                                                                    <span
                                                                                                        class="sc_skills_digits"><span
                                                                                                            class="sc_skills_digit"><span
                                                                                                                class="sc_skills_digit_placeholder">8</span><span
                                                                                                                class="sc_skills_digit_wrap"><span
                                                                                                                    class="sc_skills_digit_ribbon"><span
                                                                                                                        class="sc_skills_digit_value">0</span></span></span></span><span
                                                                                                            class="sc_skills_digit"><span
                                                                                                                class="sc_skills_digit_placeholder">8</span><span
                                                                                                                class="sc_skills_digit_wrap"><span
                                                                                                                    class="sc_skills_digit_ribbon"><span
                                                                                                                        class="sc_skills_digit_value">0</span></span></span></span><span
                                                                                                            class="sc_skills_digit"><span
                                                                                                                class="sc_skills_digit_placeholder">8</span><span
                                                                                                                class="sc_skills_digit_wrap"><span
                                                                                                                    class="sc_skills_digit_ribbon"><span
                                                                                                                        class="sc_skills_digit_value">0</span></span></span></span><span
                                                                                                            class="sc_skills_unit">+</span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-baf5fc3 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                            data-id="baf5fc3" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-c0b2720 sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                            data-id="c0b2720" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p>Involved in the process.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-cd08fd6 scheme_dark sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                                    data-id="cd08fd6" data-element_type="column"
                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div
                                                                        class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-8ae35f0 sc_fly_static elementor-widget elementor-widget-trx_sc_skills"
                                                                            data-id="8ae35f0" data-element_type="widget"
                                                                            data-widget_type="trx_sc_skills.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="sc_skills sc_skills_counter_extra sc_skills_counter_style_odometer sc_align_left"
                                                                                    data-type="counter">
                                                                                    <div
                                                                                        class="sc_skills_column trx_addons_column-1_1">
                                                                                        <div
                                                                                            class="sc_skills_item_wrap sc_skills_item_icon_position_top">
                                                                                            <div
                                                                                                class="sc_skills_item_title">
                                                                                                Main Offices</div>
                                                                                            <div class="sc_skills_item">
                                                                                                <div class="sc_skills_total"
                                                                                                    data-start="0"
                                                                                                    data-stop="16"
                                                                                                    data-step="0.16"
                                                                                                    data-max="16"
                                                                                                    data-speed="15"
                                                                                                    data-duration="1500"
                                                                                                    data-ed=""
                                                                                                    data-style="odometer">
                                                                                                    <span
                                                                                                        class="sc_skills_digits"><span
                                                                                                            class="sc_skills_digit"><span
                                                                                                                class="sc_skills_digit_placeholder">8</span><span
                                                                                                                class="sc_skills_digit_wrap"><span
                                                                                                                    class="sc_skills_digit_ribbon"><span
                                                                                                                        class="sc_skills_digit_value">0</span></span></span></span><span
                                                                                                            class="sc_skills_digit"><span
                                                                                                                class="sc_skills_digit_placeholder">8</span><span
                                                                                                                class="sc_skills_digit_wrap"><span
                                                                                                                    class="sc_skills_digit_ribbon"><span
                                                                                                                        class="sc_skills_digit_value">0</span></span></span></span></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-e2a1df4 sc_fly_static elementor-widget elementor-widget-spacer"
                                                                            data-id="e2a1df4" data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-spacer">
                                                                                    <div class="elementor-spacer-inner">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-34e4d0b sc_fly_static elementor-widget elementor-widget-text-editor"
                                                                            data-id="34e4d0b" data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p>You can find us worldwide.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-9776834 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="9776834" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0407ce8 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="0407ce8" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-1ecb3e0 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="1ecb3e0" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-6503efd sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="6503efd" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-73ec93d elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="73ec93d" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-545ec44 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="545ec44" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-fd4521b sc_fly_static elementor-widget elementor-widget-trx_sc_googlemap"
                                                            data-id="fd4521b" data-element_type="widget"
                                                            data-widget_type="trx_sc_googlemap.default">
                                                            <div class="elementor-widget-container">
                                                                <div id="sc_googlemap_1565335286_wrap"
                                                                    class="sc_googlemap_wrap">
                                                                    <div id="sc_googlemap_1565335286"
                                                                        class="sc_item_content sc_map sc_googlemap sc_googlemap_default trx_addons_inline_1196043760"
                                                                        data-zoom="12" data-center=""
                                                                        data-style="extra" data-map-id=""
                                                                        data-cluster-icon=""><iframe
                                                                            src="https://maps.google.com/maps?t=m&output=embed&iwloc=near&z=12&q=51.50343%2C-0.12048"
                                                                            aria-label="One"></iframe></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-98fa7c6 scheme_dark sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="98fa7c6" data-element_type="column"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-a7dcc38 sc_height_small sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="a7dcc38" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5fcbcec sc_height_huge sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="5fcbcec" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-89d75ce sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="89d75ce" data-element_type="widget"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default"><span
                                                                        class="sc_item_subtitle sc_title_subtitle sc_item_subtitle_above sc_item_title_style_default">Contact
                                                                        Us</span>
                                                                    <h1
                                                                        class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                                        <span class="sc_item_title_text">Have Questions?
                                                                            <br> Get in Touch!</span>
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-af64cf3 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="af64cf3" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-95d3934 sc_fly_static elementor-widget elementor-widget-trx_sc_contact_form_7"
                                                            data-id="95d3934" data-element_type="widget"
                                                            data-widget_type="trx_sc_contact_form_7.default">
                                                            <div class="elementor-widget-container">

                                                                <div class="wpcf7 no-js" id="wpcf7-f1266-p18822-o1"
                                                                    lang="en-US" dir="ltr"
                                                                    data-wpcf7-id="1266">
                                                                    <div class="screen-reader-response">
                                                                        <p role="status" aria-live="polite"
                                                                            aria-atomic="true"></p>
                                                                        <ul></ul>
                                                                    </div>
                                                                    <form action="/#wpcf7-f1266-p18822-o1"
                                                                        method="post" class="wpcf7-form init"
                                                                        aria-label="Contact form"
                                                                        novalidate="novalidate" data-status="init">
                                                                        <div style="display: none;">
                                                                            <input type="hidden" name="_wpcf7"
                                                                                value="1266" />
                                                                            <input type="hidden" name="_wpcf7_version"
                                                                                value="6.0.6" />
                                                                            <input type="hidden" name="_wpcf7_locale"
                                                                                value="en_US" />
                                                                            <input type="hidden" name="_wpcf7_unit_tag"
                                                                                value="wpcf7-f1266-p18822-o1" />
                                                                            <input type="hidden"
                                                                                name="_wpcf7_container_post"
                                                                                value="18822" />
                                                                            <input type="hidden"
                                                                                name="_wpcf7_posted_data_hash"
                                                                                value="" />
                                                                        </div>
                                                                        <div class="form-style-2">
                                                                            <div class="columns_wrap">
                                                                                <div class="column-1_2">
                                                                                    <p><span class="style-line"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="your-name"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Name"
                                                                                                    value=""
                                                                                                    type="text"
                                                                                                    name="your-name" /></span></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="column-1_2">
                                                                                    <p><span class="style-line"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="your-last-name"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Last Name"
                                                                                                    value=""
                                                                                                    type="text"
                                                                                                    name="your-last-name" /></span></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="columns_wrap">
                                                                                <div class="column-1_2">
                                                                                    <p><span class="style-line"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="your-email"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Email"
                                                                                                    value=""
                                                                                                    type="email"
                                                                                                    name="your-email" /></span></span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="column-1_2">
                                                                                    <p><span class="style-line"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="phone"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Phone"
                                                                                                    value=""
                                                                                                    type="tel"
                                                                                                    name="phone" /></span></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="columns_wrap margin-bottom">
                                                                                <div class="column-1_1">
                                                                                    <p><span class="style-line"><span
                                                                                                class="wpcf7-form-control-wrap"
                                                                                                data-name="your-message">
                                                                                                <textarea cols="40" rows="10" maxlength="2000"
                                                                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true"
                                                                                                    aria-invalid="false" placeholder="Message" name="your-message"></textarea>
                                                                                            </span></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <p><input
                                                                                    class="wpcf7-form-control wpcf7-submit has-spinner"
                                                                                    type="submit"
                                                                                    value="Get In Touch" />
                                                                            </p>
                                                                        </div>
                                                                        <div class="wpcf7-response-output"
                                                                            aria-hidden="true"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-512ab4d sc_height_small sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="512ab4d" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-06ff178 sc_height_huge sc_layouts_hide_on_wide sc_layouts_hide_on_desktop sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="06ff178" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-3b884f9d elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="3b884f9d" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-69ab1bcf sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="69ab1bcf" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-6d970a19 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="6d970a19" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-f90df3e sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="f90df3e" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-960a6ab sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="960a6ab" data-element_type="widget"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default"><span
                                                                        class="sc_item_subtitle sc_title_subtitle sc_align_center sc_item_subtitle_above sc_item_title_style_default">from
                                                                        our blog</span>
                                                                    <h1
                                                                        class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default sc_item_title_tag">
                                                                        <span class="sc_item_title_text">News &
                                                                            Articles</span>
                                                                    </h1>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-68ab7668 sc_height_small sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="68ab7668" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-animation-type="sequental" data-animation-stagger=""
                                                            class="elementor-element elementor-element-1fe1e665 animation_type_sequental sc_style_default sc_fly_static elementor-invisible elementor-widget elementor-widget-trx_sc_blogger"
                                                            data-id="1fe1e665" data-element_type="widget"
                                                            data-settings="{&quot;_animation&quot;:&quot;greeny-fadeinup&quot;,&quot;_animation_delay&quot;:100}"
                                                            data-widget_type="trx_sc_blogger.default">
                                                            <div class="elementor-widget-container">
                                                                <div
                                                                    class="sc_blogger sc_blogger_default sc_blogger_default_classic_simple sc_item_filters_tabs_none alignnone">
                                                                    <div
                                                                        class="sc_blogger_columns_wrap sc_item_columns sc_item_posts_container trx_addons_columns_wrap columns_padding_bottom columns_in_single_row">
                                                                        <div class="trx_addons_column-1_3">
                                                                            <div data-post-id="298" data-item-number="1"
                                                                                class="sc_blogger_item sc_item_container post_container sc_blogger_item_default sc_blogger_item_default_classic_simple sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_with_image sc_blogger_item_with_excerpt sc_blogger_item_on_plate sc_blogger_item_image_position_top post-298 post type-post status-publish format-standard has-post-thumbnail hentry category-repair tag-article tag-chargers tag-ecology">
                                                                                <div class="sc_blogger_item_body">
                                                                                    <div
                                                                                        class="post_featured with_thumb hover_link sc_item_featured sc_blogger_item_featured">
                                                                                        <img loading="lazy"
                                                                                            decoding="async"
                                                                                            width="890"
                                                                                            height="664"
                                                                                            src="https://greeny.axiomthemes.com/wp-content/uploads/2020/04/post-image4-890x664.jpg"
                                                                                            class="attachment-greeny-thumb-square size-greeny-thumb-square wp-post-image"
                                                                                            alt="" />
                                                                                        <div class="mask"></div>
                                                                                        <a href="https://greeny.axiomthemes.com/electric-vehicles-with-a-removable-battery/"
                                                                                            aria-hidden="true"
                                                                                            class="link"></a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="sc_blogger_item_content entry-content">
                                                                                        <div
                                                                                            class="post_meta sc_blogger_item_meta post_meta">
                                                                                            <span
                                                                                                class="post_meta_item post_categories cat_sep"><a
                                                                                                    href="https://greeny.axiomthemes.com/category/repair/"
                                                                                                    rel="category tag">Repair</a></span><span
                                                                                                class="post_meta_item post_date"><a
                                                                                                    href="https://greeny.axiomthemes.com/electric-vehicles-with-a-removable-battery/">Apr
                                                                                                    21, 2020</a></span>
                                                                                        </div>
                                                                                        <h5 class="sc_blogger_item_title entry-title"
                                                                                            data-item-number="1"><a
                                                                                                href="https://greeny.axiomthemes.com/electric-vehicles-with-a-removable-battery/"
                                                                                                rel="bookmark">Electric
                                                                                                vehicles with a removable
                                                                                                battery</a></h5>
                                                                                        <div
                                                                                            class="sc_blogger_item_excerpt">
                                                                                            Qproin faucibus nec mauris a
                                                                                            sodales, sed elementum mi
                                                                                            tincidunt. Sed eget&hellip;
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_blogger_item_button sc_item_button">
                                                                                            <a href="https://greeny.axiomthemes.com/electric-vehicles-with-a-removable-battery/"
                                                                                                class="item_more_link"><span
                                                                                                    class="link_text">more
                                                                                                    text</span><span
                                                                                                    class="link_icon"></span></a>
                                                                                        </div>
                                                                                    </div><!-- .entry-content -->
                                                                                </div><!-- .sc_blogger_item_body -->
                                                                            </div><!-- .sc_blogger_item -->
                                                                        </div>
                                                                        <div class="trx_addons_column-1_3">
                                                                            <div data-post-id="296" data-item-number="2"
                                                                                class="sc_blogger_item sc_item_container post_container sc_blogger_item_default sc_blogger_item_default_classic_simple sc_blogger_item_even sc_blogger_item_align_none post_format_standard sc_blogger_item_with_image sc_blogger_item_with_excerpt sc_blogger_item_on_plate sc_blogger_item_image_position_top post-296 post type-post status-publish format-standard has-post-thumbnail hentry category-repair tag-batteries tag-ecology tag-with-sidebar">
                                                                                <div class="sc_blogger_item_body">
                                                                                    <div
                                                                                        class="post_featured with_thumb hover_link sc_item_featured sc_blogger_item_featured">
                                                                                        <img loading="lazy"
                                                                                            decoding="async"
                                                                                            width="890"
                                                                                            height="664"
                                                                                            src="https://greeny.axiomthemes.com/wp-content/uploads/2020/04/post-image5-890x664.jpg"
                                                                                            class="attachment-greeny-thumb-square size-greeny-thumb-square wp-post-image"
                                                                                            alt="" />
                                                                                        <div class="mask"></div>
                                                                                        <a href="https://greeny.axiomthemes.com/what-about-electric-car-batteries/"
                                                                                            aria-hidden="true"
                                                                                            class="link"></a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="sc_blogger_item_content entry-content">
                                                                                        <div
                                                                                            class="post_meta sc_blogger_item_meta post_meta">
                                                                                            <span
                                                                                                class="post_meta_item post_categories cat_sep"><a
                                                                                                    href="https://greeny.axiomthemes.com/category/repair/"
                                                                                                    rel="category tag">Repair</a></span><span
                                                                                                class="post_meta_item post_date"><a
                                                                                                    href="https://greeny.axiomthemes.com/what-about-electric-car-batteries/">Apr
                                                                                                    21, 2020</a></span>
                                                                                        </div>
                                                                                        <h5 class="sc_blogger_item_title entry-title"
                                                                                            data-item-number="2"><a
                                                                                                href="https://greeny.axiomthemes.com/what-about-electric-car-batteries/"
                                                                                                rel="bookmark">What about
                                                                                                electric car batteries?</a>
                                                                                        </h5>
                                                                                        <div
                                                                                            class="sc_blogger_item_excerpt">
                                                                                            Qproin faucibus nec mauris a
                                                                                            sodales, sed elementum mi
                                                                                            tincidunt. Sed eget&hellip;
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_blogger_item_button sc_item_button">
                                                                                            <a href="https://greeny.axiomthemes.com/what-about-electric-car-batteries/"
                                                                                                class="item_more_link"><span
                                                                                                    class="link_text">more
                                                                                                    text</span><span
                                                                                                    class="link_icon"></span></a>
                                                                                        </div>
                                                                                    </div><!-- .entry-content -->
                                                                                </div><!-- .sc_blogger_item_body -->
                                                                            </div><!-- .sc_blogger_item -->
                                                                        </div>
                                                                        <div class="trx_addons_column-1_3">
                                                                            <div data-post-id="294" data-item-number="3"
                                                                                class="sc_blogger_item sc_item_container post_container sc_blogger_item_default sc_blogger_item_default_classic_simple sc_blogger_item_odd sc_blogger_item_align_none post_format_standard sc_blogger_item_with_image sc_blogger_item_with_excerpt sc_blogger_item_on_plate sc_blogger_item_image_position_top post-294 post type-post status-publish format-standard has-post-thumbnail hentry category-repair tag-guide tag-service">
                                                                                <div class="sc_blogger_item_body">
                                                                                    <div
                                                                                        class="post_featured with_thumb hover_link sc_item_featured sc_blogger_item_featured">
                                                                                        <img loading="lazy"
                                                                                            decoding="async"
                                                                                            width="890"
                                                                                            height="664"
                                                                                            src="https://greeny.axiomthemes.com/wp-content/uploads/2020/04/post-image7-890x664.jpg"
                                                                                            class="attachment-greeny-thumb-square size-greeny-thumb-square wp-post-image"
                                                                                            alt="" />
                                                                                        <div class="mask"></div>
                                                                                        <a href="https://greeny.axiomthemes.com/electric-vehicles-of-a-new-generation/"
                                                                                            aria-hidden="true"
                                                                                            class="link"></a>
                                                                                    </div>
                                                                                    <div
                                                                                        class="sc_blogger_item_content entry-content">
                                                                                        <div
                                                                                            class="post_meta sc_blogger_item_meta post_meta">
                                                                                            <span
                                                                                                class="post_meta_item post_categories cat_sep"><a
                                                                                                    href="https://greeny.axiomthemes.com/category/repair/"
                                                                                                    rel="category tag">Repair</a></span><span
                                                                                                class="post_meta_item post_date"><a
                                                                                                    href="https://greeny.axiomthemes.com/electric-vehicles-of-a-new-generation/">Apr
                                                                                                    21, 2020</a></span>
                                                                                        </div>
                                                                                        <h5 class="sc_blogger_item_title entry-title"
                                                                                            data-item-number="3"><a
                                                                                                href="https://greeny.axiomthemes.com/electric-vehicles-of-a-new-generation/"
                                                                                                rel="bookmark">Electric
                                                                                                vehicles of a new
                                                                                                generation</a></h5>
                                                                                        <div
                                                                                            class="sc_blogger_item_excerpt">
                                                                                            Qproin faucibus nec mauris a
                                                                                            sodales, sed elementum mi
                                                                                            tincidunt. Sed eget&hellip;
                                                                                        </div>
                                                                                        <div
                                                                                            class="sc_blogger_item_button sc_item_button">
                                                                                            <a href="https://greeny.axiomthemes.com/electric-vehicles-of-a-new-generation/"
                                                                                                class="item_more_link"><span
                                                                                                    class="link_text">more
                                                                                                    text</span><span
                                                                                                    class="link_icon"></span></a>
                                                                                        </div>
                                                                                    </div><!-- .entry-content -->
                                                                                </div><!-- .sc_blogger_item_body -->
                                                                            </div><!-- .sc_blogger_item -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-763f97ce sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="763f97ce" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-2db2892f sc_fly_static elementor-widget elementor-widget-trx_sc_button"
                                                            data-id="2db2892f" data-element_type="widget"
                                                            data-widget_type="trx_sc_button.default">
                                                            <div class="elementor-widget-container">
                                                                <div
                                                                    class="sc_item_button sc_button_wrap sc_align_center">
                                                                    <a href="https://greeny.axiomthemes.com/blog/"
                                                                        class="sc_button sc_button_default sc_button_size_normal sc_button_icon_left color_style_link2"><span
                                                                            class="sc_button_text"><span
                                                                                class="sc_button_title">Read
                                                                                More</span></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-35254f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="35254f1" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1ba0eaa sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="1ba0eaa" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-75b983c sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="75b983c" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-01cd136 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="01cd136" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-e605aa5 sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="e605aa5" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-5eceab7f elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="5eceab7f" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-70a8a478 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="70a8a478" data-element_type="column">
                                                    <div class="elementor-widget-wrap">
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-33d650c hide_bg_image_on_mobile sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="33d650c" data-element_type="column"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-dfaefbe sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="dfaefbe" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-50975c9a sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="50975c9a" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-78ff56ad sc_fly_static elementor-widget elementor-widget-shortcode"
                                                            data-id="78ff56ad" data-element_type="widget"
                                                            data-widget_type="shortcode.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-shortcode">
                                                                    <script>
                                                                        (function() {
                                                                            window.mc4wp = window.mc4wp || {
                                                                                listeners: [],
                                                                                forms: {
                                                                                    on: function(evt, cb) {
                                                                                        window.mc4wp.listeners.push({
                                                                                            event: evt,
                                                                                            callback: cb
                                                                                        });
                                                                                    }
                                                                                }
                                                                            }
                                                                        })();
                                                                    </script>
                                                                    <!-- Mailchimp for WordPress v4.10.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                                    <form id="style-2"
                                                                        class="mc4wp-form mc4wp-form-461" method="post"
                                                                        data-id="461" data-name="Subscribe">
                                                                        <div class="mc4wp-form-fields"><input
                                                                                type="email" name="EMAIL"
                                                                                placeholder="Enter Your Email Address" />
                                                                            <button>Subscribe</button>
                                                                            <input name="i_agree_privacy_policy"
                                                                                value="1" required=""
                                                                                type="checkbox"><label>I agree to the <a
                                                                                    href="/privacy-policy/"
                                                                                    target="_blank">Privacy
                                                                                    Policy</a>.</label>
                                                                        </div><label
                                                                            style="display: none !important;">Leave this
                                                                            field empty if you're human: <input
                                                                                type="text" name="_mc4wp_honeypot"
                                                                                value="" tabindex="-1"
                                                                                autocomplete="off" /></label><input
                                                                            type="hidden" name="_mc4wp_timestamp"
                                                                            value="1769301905" /><input type="hidden"
                                                                            name="_mc4wp_form_id"
                                                                            value="461" /><input type="hidden"
                                                                            name="_mc4wp_form_element_id"
                                                                            value="style-2" />
                                                                        <div class="mc4wp-response"></div>
                                                                    </form><!-- / Mailchimp for WordPress Plugin -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-41a74cd2 sc_height_huge sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="41a74cd2" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-27f99e7a sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="27f99e7a" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-16 elementor-top-column elementor-element elementor-element-5028191d sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="5028191d" data-element_type="column">
                                                    <div class="elementor-widget-wrap">
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div><!-- .entry-content -->


                            </article>
                        </div>
                    </div>
                </div>
                <span id="footer_skip_link_anchor" class="greeny_skip_link_anchor"></span>
                <footer
                    class="footer_wrap footer_custom footer_custom_19240 footer_custom_footer-style-1-greeny												">
                    <div data-elementor-type="cpt_layouts" data-elementor-id="19240"
                        class="elementor elementor-19240">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-4a242fd elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                            data-id="4a242fd" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b0a3cf2 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="b0a3cf2" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-5995454 sc_height_large sc_fly_static elementor-widget elementor-widget-spacer"
                                            data-id="5995454" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-aa8fcc8 sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                            data-id="aa8fcc8" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-3e3fe74 sc_layouts_row sc_layouts_row_type_compact scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                            data-id="3e3fe74" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-eb132f3 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="eb132f3" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-ba7bf8d sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                            data-id="ba7bf8d" data-element_type="widget"
                                            data-widget_type="trx_sc_title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_title sc_title_default">
                                                    <h2 class="sc_item_title sc_title_title sc_item_title_style_default">
                                                        <span class="sc_item_title_text">We Develop & Create <br>a Better
                                                            Future</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3eea76d sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="3eea76d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-c6b8c08 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                            data-id="c6b8c08" data-element_type="widget"
                                            data-widget_type="trx_sc_title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_title sc_title_default">
                                                    <h6
                                                        class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                        <span class="sc_item_title_text">Address</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-16bcc7d sc_fly_static elementor-widget elementor-widget-spacer"
                                            data-id="16bcc7d" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-6e73e17 sc_fly_static elementor-widget elementor-widget-text-editor"
                                            data-id="6e73e17" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Germany —<br />785 15h Street, Office 478<br />Berlin, De 81566</p>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-7b9e520 sc_fly_static elementor-widget elementor-widget-spacer"
                                            data-id="7b9e520" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-ceda11b sc_fly_static elementor-widget elementor-widget-trx_sc_socials"
                                            data-id="ceda11b" data-element_type="widget"
                                            data-widget_type="trx_sc_socials.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_socials sc_socials_default sc_align_none">
                                                    <div class="socials_wrap sc_item_content"><a target="_blank"
                                                            rel="nofollow"
                                                            href="https://www.facebook.com/AxiomThemes-505060569826537/"
                                                            class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                                class="social_icon social_icon_facebook-1"
                                                                style=""><span
                                                                    class="screen-reader-text">facebook-1</span><span
                                                                    class="icon-facebook-1"></span></span></a><a
                                                            target="_blank" rel="nofollow"
                                                            href="https://twitter.com/ThemesAxiom"
                                                            class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                                class="social_icon social_icon_twitter-new"
                                                                style=""><span
                                                                    class="screen-reader-text">twitter-new</span><span
                                                                    class="icon-twitter-new"></span></span></a><a
                                                            target="_blank" rel="nofollow"
                                                            href="https://dribbble.com/AxiomThemes"
                                                            class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                                class="social_icon social_icon_dribble-new"
                                                                style=""><span
                                                                    class="screen-reader-text">dribble-new</span><span
                                                                    class="icon-dribble-new"></span></span></a><a
                                                            target="_blank" rel="nofollow"
                                                            href="https://www.instagram.com/axiom_themes/"
                                                            class="social_item social_item_style_icons sc_icon_type_icons social_item_type_icons"><span
                                                                class="social_icon social_icon_instagram"
                                                                style=""><span
                                                                    class="screen-reader-text">instagram</span><span
                                                                    class="icon-instagram"></span></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6faf73b sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="6faf73b" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-ca70b6d sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                            data-id="ca70b6d" data-element_type="widget"
                                            data-widget_type="trx_sc_title.default">
                                            <div class="elementor-widget-container">
                                                <div class="sc_title sc_title_default">
                                                    <h6
                                                        class="sc_item_title sc_title_title sc_item_title_style_default sc_item_title_tag">
                                                        <span class="sc_item_title_text">Say Hello</span>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-b68f402 sc_fly_static elementor-widget elementor-widget-spacer"
                                            data-id="b68f402" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-84325bf sc_fly_static elementor-widget elementor-widget-text-editor"
                                            data-id="84325bf" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p><a class="underline_anim"
                                                        href="/cdn-cgi/l/email-protection#533a3d353c13363e323a3f7d303c3e"><span
                                                            class="__cf_email__"
                                                            data-cfemail="1b72757d745b7e767a727735787476">[email&#160;protected]</span></a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-aab8a73 sc_fly_static elementor-widget elementor-widget-spacer"
                                            data-id="aab8a73" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-2638e21 sc_fly_static elementor-widget elementor-widget-text-editor"
                                            data-id="2638e21" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <span class="trx_addons_alter_text"><a href="tel:+18408412569">+1 840
                                                        841 25 69</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-dbfdd12 sc_layouts_row sc_layouts_row_type_compact scheme_dark elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                            data-id="dbfdd12" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-44f8274 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="44f8274" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-4031e5b sc_layouts_hide_on_notebook sc_layouts_hide_on_tablet sc_layouts_hide_on_mobile sc_fly_static elementor-widget elementor-widget-spacer"
                                            data-id="4031e5b" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-8e7bc71 sc_height_medium sc_fly_static elementor-widget elementor-widget-spacer"
                                            data-id="8e7bc71" data-element_type="widget"
                                            data-widget_type="spacer.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-spacer">
                                                    <div class="elementor-spacer-inner"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sc_layouts_item elementor-element elementor-element-36808df elementor-widget-divider--view-line sc_fly_static elementor-widget elementor-widget-divider"
                                            data-id="36808df" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-73f3115 sc_layouts_row sc_layouts_row_type_narrow scheme_dark elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default sc_fly_static"
                            data-id="73f3115" data-element_type="section"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-extended">
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b282872 sc_layouts_column_align_left sc_layouts_column sc-mobile_layouts_column_align_center sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="b282872" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-dcfb343 sc_fly_static elementor-widget elementor-widget-trx_sc_layouts_menu"
                                            data-id="dcfb343" data-element_type="widget"
                                            data-widget_type="trx_sc_layouts_menu.default">
                                            <div class="elementor-widget-container">
                                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_fade"
                                                    data-animation-in="fadeIn" data-animation-out="fadeOut">
                                                    <ul id="sc_layouts_menu_1372566449" class="sc_layouts_menu_nav">
                                                        <li id="menu-item-19250"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-18822 current_page_item menu-item-19250">
                                                            <a href="https://greeny.axiomthemes.com/"
                                                                aria-current="page"><span>Home</span></a>
                                                        </li>
                                                        <li id="menu-item-19258"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19258">
                                                            <a href="https://greeny.axiomthemes.com/about-us/"><span>About
                                                                    Us</span></a>
                                                        </li>
                                                        <li id="menu-item-19255"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19255">
                                                            <a
                                                                href="https://greeny.axiomthemes.com/shop/"><span>Shop</span></a>
                                                        </li>
                                                        <li id="menu-item-19948"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19948">
                                                            <a
                                                                href="https://greeny.axiomthemes.com/blog/"><span>Blog</span></a>
                                                        </li>
                                                        <li id="menu-item-19257"
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19257">
                                                            <a
                                                                href="https://greeny.axiomthemes.com/contact/"><span>Contact</span></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-810521d sc_layouts_column_align_right sc_layouts_column sc-mobile_layouts_column_align_center sc_layouts_column sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                    data-id="810521d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="sc_layouts_item elementor-element elementor-element-026f36b sc_fly_static elementor-widget elementor-widget-text-editor"
                                            data-id="026f36b" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <a href="https://themeforest.net/user/axiomthemes/portfolio"
                                                    target="_blank" rel="noopener">AxiomThemes</a> © 2026. All Rights
                                                Reserved.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </footer><!-- /.footer_wrap -->


            </div>


        </div>



        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            window.RS_MODULES = window.RS_MODULES || {};
            window.RS_MODULES.modules = window.RS_MODULES.modules || {};
            window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
            window.RS_MODULES.defered = false;
            window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
            window.RS_MODULES.type = 'compiled';
        </script>
        <div id="go-video6" class="sc_layouts sc_layouts_popup" data-delay="0">
            <p><iframe title="The New EQS: World Premiere | Trailer" width="1290" height="726"
                    data-src="https://www.youtube.com/embed/KitQQHm0Eoc?feature=oembed&autoplay=1" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe></p>
        </div><a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up scroll_to_top_style_default"
            title="Scroll to top"></a>
        <script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/greeny\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
        <div class="adp-popup adp-popup-type-content adp-popup-location-center adp-preview-image-left adp-preview-image-no"
            data-limit-display="1" data-limit-lifetime="1" data-open-trigger="delay" data-open-delay-number="25"
            data-open-scroll-position="10" data-open-scroll-type="%" data-open-manual-selector=""
            data-close-trigger="none" data-close-delay-number="30" data-close-scroll-position="10"
            data-close-scroll-type="%" data-open-animation="popupOpenFade" data-exit-animation="popupExitFade"
            data-light-close="false" data-overlay="true" data-mobile-disable="false"
            data-body-scroll-disable="false" data-overlay-close="false" data-esc-close="true" data-f4-close="false"
            data-id="9110" style="width:1050px;">

            <div class="adp-popup-wrap">

                <div class="adp-popup-container">

                    <!-- Content -->
                    <div class="adp-popup-outer" style="max-width:100%;">

                        <div class="adp-popup-content">
                            <div class="adp-popup-inner">
                                <div class="sc_layouts sc_layouts_default sc_layouts_7074" data-delay="0">
                                    <div data-elementor-type="cpt_layouts" data-elementor-id="7074"
                                        class="elementor elementor-7074">
                                        <section
                                            class="elementor-section elementor-top-section elementor-element elementor-element-d394f72 elementor-section-full_width elementor-section-height-default elementor-section-height-default sc_fly_static"
                                            data-id="d394f72" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-extended">
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-91a3141 sc_layouts_hide_on_mobile sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="91a3141" data-element_type="column"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-637990e sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="637990e" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-48d3da0 sc_content_align_inherit sc_layouts_column_icons_position_left sc_fly_static"
                                                    data-id="48d3da0" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-9efa3b4 sc_fly_static elementor-widget elementor-widget-trx_sc_title"
                                                            data-id="9efa3b4" data-element_type="widget"
                                                            data-widget_type="trx_sc_title.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="sc_title sc_title_default">
                                                                    <h2
                                                                        class="sc_item_title sc_title_title sc_item_title_style_default">
                                                                        <span class="sc_item_title_text">Subscribe for the
                                                                            updates!</span>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-0f09534 sc_fly_static elementor-widget elementor-widget-spacer"
                                                            data-id="0f09534" data-element_type="widget"
                                                            data-widget_type="spacer.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-spacer">
                                                                    <div class="elementor-spacer-inner"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-5c0af5f sc_fly_static elementor-widget elementor-widget-shortcode"
                                                            data-id="5c0af5f" data-element_type="widget"
                                                            data-widget_type="shortcode.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-shortcode">
                                                                    <script>
                                                                        (function() {
                                                                            window.mc4wp = window.mc4wp || {
                                                                                listeners: [],
                                                                                forms: {
                                                                                    on: function(evt, cb) {
                                                                                        window.mc4wp.listeners.push({
                                                                                            event: evt,
                                                                                            callback: cb
                                                                                        });
                                                                                    }
                                                                                }
                                                                            }
                                                                        })();
                                                                    </script>
                                                                    <!-- Mailchimp for WordPress v4.10.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                                                    <form id="style-11"
                                                                        class="mc4wp-form mc4wp-form-461" method="post"
                                                                        data-id="461" data-name="Subscribe">
                                                                        <div class="mc4wp-form-fields"><input
                                                                                type="email" name="EMAIL"
                                                                                placeholder="Enter Your Email Address" />
                                                                            <button>Subscribe</button>
                                                                            <input name="i_agree_privacy_policy"
                                                                                value="1" required=""
                                                                                type="checkbox"><label>I agree to the <a
                                                                                    href="/privacy-policy/"
                                                                                    target="_blank">Privacy
                                                                                    Policy</a>.</label>
                                                                        </div><label
                                                                            style="display: none !important;">Leave this
                                                                            field empty if you're human: <input
                                                                                type="text" name="_mc4wp_honeypot"
                                                                                value="" tabindex="-1"
                                                                                autocomplete="off" /></label><input
                                                                            type="hidden" name="_mc4wp_timestamp"
                                                                            value="1769301905" /><input type="hidden"
                                                                            name="_mc4wp_form_id"
                                                                            value="461" /><input type="hidden"
                                                                            name="_mc4wp_form_element_id"
                                                                            value="style-11" />
                                                                        <div class="mc4wp-response"></div>
                                                                    </form><!-- / Mailchimp for WordPress Plugin -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>

                            <button type="button" class="adp-popup-close"></button>
                        </div>
                    </div>

                    <!-- Info -->
                </div>
            </div>
        </div>

        <div class="adp-popup-overlay"></div>

        <script>
            (function() {
                function maybePrefixUrlField() {
                    const value = this.value.trim()
                    if (value !== '' && value.indexOf('http') !== 0) {
                        this.value = 'http://' + value
                    }
                }

                const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
                for (let j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField)
                }
            })();
        </script>
        <script>
            const lazyloadRunObserver = () => {
                const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
                const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            let lazyloadBackground = entry.target;
                            if (lazyloadBackground) {
                                lazyloadBackground.classList.add('e-lazyloaded');
                            }
                            lazyloadBackgroundObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    rootMargin: '200px 0px 200px 0px'
                });
                lazyloadBackgrounds.forEach((lazyloadBackground) => {
                    lazyloadBackgroundObserver.observe(lazyloadBackground);
                });
            };
            const events = [
                'DOMContentLoaded',
                'elementor/lazyload/observe',
            ];
            events.forEach((event) => {
                document.addEventListener(event, lazyloadRunObserver);
            });
        </script>


        <script type='text/javascript'>
            (function() {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                document.body.className = c;
            })();
        </script>
        <script>
            if (typeof revslider_showDoubleJqueryError === "undefined") {
                function revslider_showDoubleJqueryError(sliderID) {
                    console.log(
                        "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                    );
                    console.log("To fix this, you can:");
                    console.log(
                        "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                    );
                    console.log("2. Find the double jQuery.js inclusion and remove it");
                    return "Double Included jQuery Library";
                }
            }
        </script>










        <script type="text/javascript" src="https://greeny.axiomthemes.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3"
            id="jquery-ui-core-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.3"
            id="jquery-ui-datepicker-js"></script>
        <script type="text/javascript" id="jquery-ui-datepicker-js-after">
            /* <![CDATA[ */
            jQuery(function(jQuery) {
                jQuery.datepicker.setDefaults({
                    "closeText": "Close",
                    "currentText": "Today",
                    "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                        "September", "October", "November", "December"
                    ],
                    "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                        "Nov", "Dec"
                    ],
                    "nextText": "Next",
                    "prevText": "Previous",
                    "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                    "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                    "dateFormat": "M d, yy",
                    "firstDay": 1,
                    "isRTL": false
                });
            });
            /* ]]> */
        </script>



        <script type="text/javascript" id="booked-functions-js-extra">
            /* <![CDATA[ */
            var booked_js_vars = {
                "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "profilePage": "",
                "publicAppointments": "",
                "i18n_confirm_appt_edit": "Are you sure you want to change the appointment date? By doing so, the appointment date will need to be approved again.",
                "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
                "i18n_please_wait": "Please wait ...",
                "i18n_wrong_username_pass": "Wrong username\/password combination.",
                "i18n_fill_out_required_fields": "Please fill out all required fields.",
                "i18n_guest_appt_required_fields": "Please enter your name to book an appointment.",
                "i18n_appt_required_fields": "Please enter your name, your email address and choose a password to book an appointment.",
                "i18n_appt_required_fields_guest": "Please fill in all \"Information\" fields.",
                "i18n_password_reset": "Please check your email for instructions on resetting your password.",
                "i18n_password_reset_error": "That username or email is not recognized.",
                "nonce": "5413f53363"
            };
            /* ]]> */
        </script>

        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/advanced-popups/public/js/advanced-popups-public.js?ver=1.2.1"
            id="advanced-popups-js"></script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js">
        </script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js">
        </script>
        <script type="text/javascript" id="wp-i18n-js-after">
            /* <![CDATA[ */
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.6"
            id="swv-js"></script>
        <script type="text/javascript" id="contact-form-7-js-before">
            /* <![CDATA[ */
            var wpcf7 = {
                "api": {
                    "root": "https:\/\/greeny.axiomthemes.com\/wp-json\/",
                    "namespace": "contact-form-7\/v1"
                },
                "cached": 1
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=6.0.6"
            id="contact-form-7-js"></script>
        <script type="text/javascript" defer="defer"
            src="//greeny.axiomthemes.com/wp-content/plugins/revslider/sr6/assets/js/rbtools.min.js?ver=6.7.29" async
            id="tp-tools-js"></script>
        <script type="text/javascript" defer="defer"
            src="//greeny.axiomthemes.com/wp-content/plugins/revslider/sr6/assets/js/rs6.min.js?ver=6.7.32" async
            id="revmin-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js"
            id="magnific-popup-js"></script>
        <script type="text/javascript" id="trx_demo_panels-js-extra">
            /* <![CDATA[ */
            var TRX_DEMO_STORAGE = {
                "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "ajax_nonce": "a03d37b452",
                "site_url": "https:\/\/greeny.axiomthemes.com",
                "user_logged_in": "0",
                "msg_ajax_error": "Invalid server response! Try again later.",
                "tabs_delay": "3000"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/js/trx_demo_panels.js" id="trx_demo_panels-js">
        </script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.9.3.5"
            id="jquery-blockui-js" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="wc-add-to-cart-js-extra">
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
                "i18n_view_cart": "View cart",
                "cart_url": "https:\/\/greeny.axiomthemes.com\/cart\/",
                "is_cart": "",
                "cart_redirect_after_add": "no"
            };
            /* ]]> */
        </script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=9.3.5"
            id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.9.3.5"
            id="js-cookie-js" data-wp-strategy=""></script>
        <script type="text/javascript" id="woocommerce-js-extra">
            /* <![CDATA[ */
            var woocommerce_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
            };
            /* ]]> */
        </script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=9.3.5"
            id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="booked-fea-js-js-extra">
            /* <![CDATA[ */
            var booked_fea_vars = {
                "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "i18n_confirm_appt_delete": "Are you sure you want to cancel this appointment?",
                "i18n_confirm_appt_approve": "Are you sure you want to approve this appointment?"
            };
            /* ]]> */
        </script>

        <script type="text/javascript" id="wc-cart-fragments-js-extra">
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                "ajax_url": "\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
                "cart_hash_key": "wc_cart_hash_f408d0888c290ef52e2a0748d01f55a8",
                "fragment_name": "wc_fragments_f408d0888c290ef52e2a0748d01f55a8",
                "request_timeout": "5000"
            };
            /* ]]> */
        </script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=9.3.5"
            id="wc-cart-fragments-js" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="tinvwl-js-extra">
            /* <![CDATA[ */
            var tinvwl_add_to_wishlist = {
                "text_create": "Create New",
                "text_already_in": "\"{product_name}\" already in Wishlist",
                "simple_flow": "1",
                "hide_zero_counter": "",
                "i18n_make_a_selection_text": "Please select some product options before adding this product to your wishlist.",
                "tinvwl_break_submit": "No items or actions are selected.",
                "tinvwl_clipboard": "Copied!",
                "allow_parent_variable": "",
                "block_ajax_wishlists_data": "",
                "update_wishlists_data": "",
                "hash_key": "ti_wishlist_data_f408d0888c290ef52e2a0748d01f55a8",
                "nonce": "bcc8172a50",
                "rest_root": "https:\/\/greeny.axiomthemes.com\/wp-json\/",
                "plugin_url": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/ti-woocommerce-wishlist\/",
                "wc_ajax_url": "\/?wc-ajax=tinvwl",
                "stats": "",
                "popup_timer": "6000"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/ti-woocommerce-wishlist/assets/js/public.min.js?ver=2.9.2"
            id="tinvwl-js"></script>
        <script type="text/javascript" id="booked-wc-fe-functions-js-extra">
            /* <![CDATA[ */
            var booked_wc_variables = {
                "prefix": "booked_wc_",
                "ajaxurl": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "i18n_pay": "Are you sure you want to add the appointment to cart and go to checkout?",
                "i18n_mark_paid": "Are you sure you want to mark this appointment as \"Paid\"?",
                "i18n_paid": "Paid",
                "i18n_awaiting_payment": "Awaiting Payment",
                "checkout_page": "https:\/\/greeny.axiomthemes.com\/checkout\/",
                "nonce": "55e15f12fe"
            };
            /* ]]> */
        </script>

        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=9.3.5"
            id="sourcebuster-js-js"></script>
        <script type="text/javascript" id="wc-order-attribution-js-extra">
            /* <![CDATA[ */
            var wc_order_attribution = {
                "params": {
                    "lifetime": 1.0e-5,
                    "session": 30,
                    "base64": false,
                    "ajaxurl": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                    "prefix": "wc_order_attribution_",
                    "allowTracking": true
                },
                "fields": {
                    "source_type": "current.typ",
                    "referrer": "current_add.rf",
                    "utm_campaign": "current.cmp",
                    "utm_source": "current.src",
                    "utm_medium": "current.mdm",
                    "utm_content": "current.cnt",
                    "utm_id": "current.id",
                    "utm_term": "current.trm",
                    "utm_source_platform": "current.plt",
                    "utm_creative_format": "current.fmt",
                    "utm_marketing_tactic": "current.tct",
                    "session_entry": "current_add.ep",
                    "session_start_time": "current_add.fd",
                    "session_pages": "session.pgs",
                    "session_count": "udata.vst",
                    "user_agent": "udata.uag"
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=9.3.5"
            id="wc-order-attribution-js"></script>
        <script type="text/javascript" id="trx_addons-js-extra">
            /* <![CDATA[ */
            var TRX_ADDONS_STORAGE = {
                "admin_mode": "",
                "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "ajax_nonce": "a03d37b452",
                "rest_url": "https:\/\/greeny.axiomthemes.com\/wp-json\/",
                "site_url": "https:\/\/greeny.axiomthemes.com",
                "plugin_url": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/trx_addons\/",
                "post_id": "18822",
                "vc_edit_mode": "",
                "is_preview": "",
                "is_preview_gb": "",
                "is_preview_elm": "",
                "no_image": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/trx_addons\/css\/images\/no-image.jpg",
                "popup_engine": "magnific",
                "scroll_progress": "hide",
                "hide_fixed_rows": "1",
                "smooth_scroll": "",
                "animate_inner_links": "1",
                "disable_animation_on_mobile": "",
                "add_target_blank": "0",
                "menu_collapse": "1",
                "menu_collapse_icon": "trx_addons_icon-ellipsis-vert",
                "menu_stretch": "1",
                "resize_tag_video": "",
                "resize_tag_iframe": "1",
                "allow_cookie_is_retina": "",
                "mediaplayer_icons_selector_allowed": "1",
                "user_logged_in": "",
                "theme_slug": "greeny",
                "theme_bg_color": "#E7F0F7",
                "theme_accent_color": "#A8C62E",
                "page_wrap_class": ".page_wrap",
                "header_wrap_class": ".top_panel",
                "footer_wrap_class": ".footer_wrap",
                "sidebar_wrap_class": ".sidebar",
                "columns_wrap_class": "trx_addons_columns_wrap",
                "columns_in_single_row_class": "columns_in_single_row",
                "column_class_template": "trx_addons_column-$1_$2",
                "loading_layout": "<div class=\"trx_addons_loading trx_addons_loading_style_default\"><\/div>",
                "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-zA-Z0-9_\\-]+(\\.[a-zA-Z0-9_\\-]+)*\\.[a-zA-Z0-9]{2,12}$",
                "mobile_breakpoint_fixedrows_off": "768",
                "mobile_breakpoint_fixedcolumns_off": "768",
                "mobile_breakpoint_stacksections_off": "768",
                "mobile_breakpoint_scroll_lag_off": "0",
                "mobile_breakpoint_fullheight_off": "1025",
                "mobile_breakpoint_mousehelper_off": "1025",
                "msg_caption_yes": "Yes",
                "msg_caption_no": "No",
                "msg_caption_ok": "OK",
                "msg_caption_accept": "Accept",
                "msg_caption_apply": "Apply",
                "msg_caption_cancel": "Cancel",
                "msg_caption_attention": "Attention!",
                "msg_caption_warning": "Warning!",
                "msg_ajax_error": "Invalid server answer!",
                "msg_magnific_loading": "Loading image",
                "msg_magnific_error": "Error loading image",
                "msg_magnific_close": "Close (Esc)",
                "msg_error_like": "Error saving your like! Please, try again later.",
                "msg_field_name_empty": "The name can't be empty",
                "msg_field_email_empty": "Too short (or empty) email address",
                "msg_field_email_not_valid": "Invalid email address",
                "msg_field_text_empty": "The message text can't be empty",
                "msg_search_error": "Search error! Try again later.",
                "msg_send_complete": "Send message complete!",
                "msg_send_error": "Transmit failed!",
                "msg_validation_error": "Error data validation!",
                "msg_name_empty": "The name can't be empty",
                "msg_name_long": "Too long name",
                "msg_email_empty": "Too short (or empty) email address",
                "msg_email_long": "E-mail address is too long",
                "msg_email_not_valid": "E-mail address is invalid",
                "msg_text_empty": "The message text can't be empty",
                "msg_copied": "Copied!",
                "ajax_views": "",
                "menu_cache": [".menu_mobile_inner nav > ul"],
                "login_via_ajax": "1",
                "double_opt_in_registration": "1",
                "msg_login_empty": "The Login field can't be empty",
                "msg_login_long": "The Login field is too long",
                "msg_password_empty": "The password can't be empty and shorter then 4 characters",
                "msg_password_long": "The password is too long",
                "msg_login_success": "Login success! The page should be reloaded in 3 sec.",
                "msg_login_error": "Login failed!",
                "msg_not_agree": "Please, read and check 'Terms and Conditions'",
                "msg_password_not_equal": "The passwords in both fields are not equal",
                "msg_registration_success": "Thank you for registering. Please confirm registration by clicking on the link in the letter sent to the specified email.",
                "msg_registration_error": "Registration failed!",
                "shapes_url": "https:\/\/greeny.axiomthemes.com\/wp-content\/themes\/greeny\/skins\/default\/trx_addons\/css\/shapes\/",
                "mouse_helper_in_swiper_slider": "1",
                "add_to_links_url": [{
                    "slug": "elementor",
                    "mask": "elementor.com\/",
                    "link": "https:\/\/be.elementor.com\/visit\/?bta=2496&nci=5383&brand=elementor&utm_campaign=theme",
                    "args": {
                        "afp": "trx25",
                        "landingPage": "@href"
                    }
                }],
                "elementor_stretched_section_container": ".page_wrap",
                "pagebuilder_preview_mode": "",
                "elementor_animate_items": ".elementor-heading-title,.sc_item_subtitle,.sc_item_title,.sc_item_descr,.sc_item_posts_container + .sc_item_button,.sc_item_button.sc_title_button,nav > ul > li",
                "elementor_animate_as_text": {
                    "elementor-heading-title": "line,word,char",
                    "sc_item_title": "line,word,char"
                },
                "elementor_breakpoints": {
                    "desktop": 999999,
                    "tablet": 1024,
                    "mobile": 767
                },
                "elementor_placeholder_image": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/elementor\/assets\/images\/placeholder.png",
                "animate_to_mc4wp_form_submitted": "1",
                "msg_no_products_found": "No products found! Please, change query parameters and try again.",
                "ai_helper_sc_igenerator_openai_sizes": [],
                "msg_ai_helper_igenerator_download": "Download",
                "msg_ai_helper_igenerator_download_error": "Error",
                "msg_ai_helper_igenerator_download_expired": "The generated image cache timed out. The download link is no longer valid.<br>But you can still download the image by right-clicking on it and selecting \"Save Image As...\"",
                "msg_ai_helper_igenerator_disabled": "Image generation is not available in edit mode!",
                "msg_ai_helper_igenerator_wait_available": "Wait for the image to become available on the rendering server",
                "msg_ai_helper_sc_chat_clear": "Clear",
                "msg_ai_helper_mgenerator_download": "Download",
                "msg_ai_helper_mgenerator_download_error": "Error",
                "msg_ai_helper_mgenerator_download_expired": "The generated music cache timed out. The download link is no longer valid.<br>But you can still download the music by right-clicking on it and selecting \"Save Media As...\"",
                "msg_ai_helper_mgenerator_disabled": "Music generation is not available in edit mode!",
                "msg_ai_helper_mgenerator_fetch_error": "Error updating the tag audio on this page - object is not found!",
                "msg_ai_helper_agenerator_download": "Download",
                "msg_ai_helper_agenerator_download_error": "Error",
                "msg_ai_helper_agenerator_download_expired": "The generated audio cache timed out. The download link is no longer valid.<br>But you can still download the file by right-clicking on it and selecting \"Save Media As...\"",
                "msg_ai_helper_agenerator_disabled": "Audio generation is not available in edit mode!",
                "msg_ai_helper_agenerator_fetch_error": "Error updating the tag audio on this page - object is not found!",
                "msg_ai_helper_vgenerator_download": "Download",
                "msg_ai_helper_vgenerator_download_error": "Error",
                "msg_ai_helper_vgenerator_download_expired": "The generated video cache timed out. The download link is no longer valid.<br>But you can still download the video by right-clicking on it and selecting \"Save Video As...\"",
                "msg_ai_helper_vgenerator_disabled": "Video generation is not available in edit mode!",
                "msg_ai_helper_vgenerator_wait_available": "Wait for the video to become available on the rendering server",
                "audio_effects_allowed": "0",
                "bg_colors_selector": "body:not(.body_style_boxed) .page_content_wrap,body.body_style_boxed .page_wrap",
                "mouse_helper": "0",
                "mouse_helper_delay": "10",
                "mouse_helper_centered": "0",
                "msg_mouse_helper_anchor": "",
                "portfolio_use_gallery": "",
                "scroll_to_anchor": "0",
                "update_location_from_anchor": "0",
                "msg_sc_googlemap_not_avail": "Googlemap service is not available",
                "msg_sc_googlemap_geocoder_error": "Error while geocode address",
                "sc_icons_animation_speed": "50",
                "msg_sc_osmap_not_avail": "OpenStreetMap service is not available",
                "msg_sc_osmap_geocoder_error": "Error while geocoding address",
                "osmap_tiler": "vector",
                "osmap_tiler_styles": [],
                "osmap_attribution": "Map data \u00a9 <a href=\"https:\/\/www.openstreetmap.org\/\">OpenStreetMap<\/a> contributors",
                "slider_round_lengths": "1"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/js/__scripts.js" id="trx_addons-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/api/contact-form-7/contact-form-7.js"
            id="trx_addons-cf7-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/api/mailchimp-for-wp/mailchimp-for-wp.js"
            id="trx_addons-mailchimp-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/api/woocommerce/woocommerce.js"
            id="trx_addons-woocommerce-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/skills/chart-legacy.min.js"
            id="chart-legacy-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/shortcodes/skills/skills.js"
            id="trx_addons-sc_skills-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.min.js"
            id="superfish-js"></script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/trx_addons/js/tweenmax/GSAP/3.12.2/gsap.min.js"
            id="tweenmax-js"></script>
        <script type="text/javascript" id="greeny-init-js-extra">
            /* <![CDATA[ */
            var GREENY_STORAGE = {
                "ajax_url": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                "ajax_nonce": "a03d37b452",
                "home_url": "https:\/\/greeny.axiomthemes.com",
                "theme_url": "https:\/\/greeny.axiomthemes.com\/wp-content\/themes\/greeny\/",
                "site_scheme": "scheme_default",
                "user_logged_in": "",
                "mobile_layout_width": "768",
                "mobile_device": "",
                "mobile_breakpoint_underpanels_off": "768",
                "mobile_breakpoint_fullheight_off": "1025",
                "menu_side_stretch": "",
                "menu_side_icons": "1",
                "background_video": "",
                "use_mediaelements": "1",
                "resize_tag_video": "",
                "resize_tag_iframe": "1",
                "open_full_post": "",
                "which_block_load": "article",
                "admin_mode": "",
                "msg_ajax_error": "Invalid server answer!",
                "msg_i_agree_error": "Please accept the terms of our Privacy Policy.",
                "toggle_title": "Filter by ",
                "msg_copied": "Copied!",
                "alter_link_color": "#A8C62E",
                "mc4wp_msg_email_min": "Email address is too short (or empty)",
                "mc4wp_msg_email_max": "Too long email address",
                "button_hover": "default"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/themes/greeny/js/__scripts.js" id="greeny-init-js"></script>
        <script type="text/javascript" id="mediaelement-core-js-before">
            /* <![CDATA[ */
            var mejsL10n = {
                "language": "en",
                "strings": {
                    "mejs.download-file": "Download File",
                    "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
                    "mejs.fullscreen": "Fullscreen",
                    "mejs.play": "Play",
                    "mejs.pause": "Pause",
                    "mejs.time-slider": "Time Slider",
                    "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
                    "mejs.live-broadcast": "Live Broadcast",
                    "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
                    "mejs.unmute": "Unmute",
                    "mejs.mute": "Mute",
                    "mejs.volume-slider": "Volume Slider",
                    "mejs.video-player": "Video Player",
                    "mejs.audio-player": "Audio Player",
                    "mejs.captions-subtitles": "Captions\/Subtitles",
                    "mejs.captions-chapters": "Chapters",
                    "mejs.none": "None",
                    "mejs.afrikaans": "Afrikaans",
                    "mejs.albanian": "Albanian",
                    "mejs.arabic": "Arabic",
                    "mejs.belarusian": "Belarusian",
                    "mejs.bulgarian": "Bulgarian",
                    "mejs.catalan": "Catalan",
                    "mejs.chinese": "Chinese",
                    "mejs.chinese-simplified": "Chinese (Simplified)",
                    "mejs.chinese-traditional": "Chinese (Traditional)",
                    "mejs.croatian": "Croatian",
                    "mejs.czech": "Czech",
                    "mejs.danish": "Danish",
                    "mejs.dutch": "Dutch",
                    "mejs.english": "English",
                    "mejs.estonian": "Estonian",
                    "mejs.filipino": "Filipino",
                    "mejs.finnish": "Finnish",
                    "mejs.french": "French",
                    "mejs.galician": "Galician",
                    "mejs.german": "German",
                    "mejs.greek": "Greek",
                    "mejs.haitian-creole": "Haitian Creole",
                    "mejs.hebrew": "Hebrew",
                    "mejs.hindi": "Hindi",
                    "mejs.hungarian": "Hungarian",
                    "mejs.icelandic": "Icelandic",
                    "mejs.indonesian": "Indonesian",
                    "mejs.irish": "Irish",
                    "mejs.italian": "Italian",
                    "mejs.japanese": "Japanese",
                    "mejs.korean": "Korean",
                    "mejs.latvian": "Latvian",
                    "mejs.lithuanian": "Lithuanian",
                    "mejs.macedonian": "Macedonian",
                    "mejs.malay": "Malay",
                    "mejs.maltese": "Maltese",
                    "mejs.norwegian": "Norwegian",
                    "mejs.persian": "Persian",
                    "mejs.polish": "Polish",
                    "mejs.portuguese": "Portuguese",
                    "mejs.romanian": "Romanian",
                    "mejs.russian": "Russian",
                    "mejs.serbian": "Serbian",
                    "mejs.slovak": "Slovak",
                    "mejs.slovenian": "Slovenian",
                    "mejs.spanish": "Spanish",
                    "mejs.swahili": "Swahili",
                    "mejs.swedish": "Swedish",
                    "mejs.tagalog": "Tagalog",
                    "mejs.thai": "Thai",
                    "mejs.turkish": "Turkish",
                    "mejs.ukrainian": "Ukrainian",
                    "mejs.vietnamese": "Vietnamese",
                    "mejs.welsh": "Welsh",
                    "mejs.yiddish": "Yiddish"
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-includes/js/mediaelement/mediaelement-and-player.min.js?ver=4.2.17"
            id="mediaelement-core-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-includes/js/mediaelement/mediaelement-migrate.min.js?ver=6.8.3"
            id="mediaelement-migrate-js"></script>
        <script type="text/javascript" id="mediaelement-js-extra">
            /* <![CDATA[ */
            var _wpmejsSettings = {
                "pluginPath": "\/wp-includes\/js\/mediaelement\/",
                "classPrefix": "mejs-",
                "stretching": "responsive",
                "audioShortcodeLibrary": "mediaelement",
                "videoShortcodeLibrary": "mediaelement"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=6.8.3"
            id="wp-mediaelement-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/themes/greeny/skins/default/skin.js" id="greeny-skin-default-js">
        </script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/themes/greeny/plugins/woocommerce/woocommerce.js"
            id="greeny-woocommerce-js"></script>
        <script type="text/javascript" defer="defer"
            src="https://greeny.axiomthemes.com/wp-content/themes/greeny/plugins/contact-form-7/contact-form-7.js"
            id="greeny-contact-form-7-js"></script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5"
            id="swiper-js"></script>
        <script type="text/javascript" defer
            src="https://greeny.axiomthemes.com/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js?ver=4.10.3"
            id="mc4wp-forms-api-js"></script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.28.4"
            id="elementor-webpack-runtime-js"></script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.28.4"
            id="elementor-frontend-modules-js"></script>
        <script type="text/javascript" id="elementor-frontend-js-before">
            /* <![CDATA[ */
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close",
                    "a11yCarouselPrevSlideMessage": "Previous slide",
                    "a11yCarouselNextSlideMessage": "Next slide",
                    "a11yCarouselFirstSlideMessage": "This is the first slide",
                    "a11yCarouselLastSlideMessage": "This is the last slide",
                    "a11yCarouselPaginationBulletMessage": "Go to slide"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 1025,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile Portrait",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Mobile Landscape",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tablet Portrait",
                            "value": 1024,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tablet Landscape",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "Laptop",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "widescreen": {
                            "label": "Widescreen",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    },
                    "hasCustomBreakpoints": false
                },
                "version": "3.28.4",
                "is_static": false,
                "experimentalFeatures": {
                    "additional_custom_breakpoints": true,
                    "e_local_google_fonts": true,
                    "editor_v2": true,
                    "home_screen": true
                },
                "urls": {
                    "assets": "https:\/\/greeny.axiomthemes.com\/wp-content\/plugins\/elementor\/assets\/",
                    "ajaxurl": "https:\/\/greeny.axiomthemes.com\/wp-admin\/admin-ajax.php",
                    "uploadUrl": "https:\/\/greeny.axiomthemes.com\/wp-content\/uploads"
                },
                "nonces": {
                    "floatingButtonsClickTracking": "408f1f3c1f"
                },
                "swiperClass": "swiper",
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "stretched_section_container": ".page_wrap",
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 18822,
                    "title": "Greeny%20%E2%80%93%20Electric%20Car%20Dealership%20WordPress%20Theme",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript"
            src="https://greeny.axiomthemes.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.28.4"
            id="elementor-frontend-js"></script>
        <script id="rs-initialisation-scripts">
            var tpj = jQuery;

            var revapi4;

            if (window.RS_MODULES === undefined) window.RS_MODULES = {};
            if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
            RS_MODULES.modules["revslider41"] = {
                once: RS_MODULES.modules["revslider41"] !== undefined ? RS_MODULES.modules["revslider41"].once : undefined,
                init: function() {
                    window.revapi4 = window.revapi4 === undefined || window.revapi4 === null || window.revapi4
                        .length === 0 ? document.getElementById("rev_slider_4_1") : window.revapi4;
                    if (window.revapi4 === null || window.revapi4 === undefined || window.revapi4.length == 0) {
                        window.revapi4initTry = window.revapi4initTry === undefined ? 0 : window.revapi4initTry + 1;
                        if (window.revapi4initTry < 20) requestAnimationFrame(function() {
                            RS_MODULES.modules["revslider41"].init()
                        });
                        return;
                    }
                    window.revapi4 = jQuery(window.revapi4);
                    if (window.revapi4.revolution == undefined) {
                        revslider_showDoubleJqueryError("rev_slider_4_1");
                        return;
                    }
                    revapi4.revolutionInit({
                        revapi: "revapi4",
                        DPR: "dpr",
                        sliderLayout: "fullwidth",
                        visibilityLevels: "1240,1460,785,500",
                        gridwidth: "1920,1440,778,480",
                        gridheight: "755,700,480,480",
                        lazyType: "smart",
                        perspective: 600,
                        perspectiveType: "global",
                        editorheight: "755,700,480,480",
                        responsiveLevels: "1240,1460,785,500",
                        progressBar: {
                            disableProgressBar: true
                        },
                        navigation: {
                            wheelCallDelay: 1000,
                            onHoverStop: false,
                            touch: {
                                touchenabled: true,
                                touchOnDesktop: true
                            },
                            arrows: {
                                enable: true,
                                style: "arrow-bordered",
                                hide_onmobile: true,
                                hide_under: "1280px",
                                animSpeed: "500ms",
                                animDelay: "500ms",
                                left: {
                                    anim: "left",
                                    h_offset: 60
                                },
                                right: {
                                    anim: "right",
                                    h_offset: 60
                                }
                            },
                            bullets: {
                                enable: true,
                                tmp: "",
                                style: "bullets_lines",
                                hide_onmobile: true,
                                hide_under: 778,
                                v_offset: 60,
                                space: 16
                            }
                        },
                        parallax: {
                            levels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 15, 17, 20, 25, 30],
                            type: "mouse",
                            origo: "slidercenter",
                            speed: 0
                        },
                        viewPort: {
                            global: true,
                            globalDist: "-200px",
                            enable: false,
                            visible_area: ""
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid: true
                        },
                    });

                }
            } // End of RevInitScript

            if (window.RS_MODULES.checkMinimal !== undefined) {
                window.RS_MODULES.checkMinimal();
            };
        </script>
        <script>
            TRX_DEMO_STORAGE['tabs_layout'] =
                "		<div class=\"trx_demo_panels trx_demo_tabs_position_rc trx_demo_tabs_style_icons\" style=\"width:320px;\">  			<div class=\"trx_demo_tabs\"> 				<a class=\"hint_left hint_big hint_slide\" href=\"https://1.envato.market/AoMk5a\" 						 target=\"_blank\"						aria-label=\"Buy theme\" 						data-type=\"link\" 						style=\"color:#ffffff;background-color:#a8c62e;\" 					><i class=\"trx_demo_icon-shopping-cart\"></i></a><a class=\"hint_left hint_big hint_slide\" href=\"#panel_related-themes\" 												aria-label=\"Our Bestsellers\" 						data-type=\"products\" 						style=\"color:#141541;background-color:#a8c62e;\" 					><i class=\"trx_demo_icon-gallery\"></i></a><a class=\"hint_left hint_big hint_slide\" href=\"https://greeny.axiomthemes.com?notabs=1\" 												aria-label=\"Hide panel\" 						data-type=\"link\" 						style=\"color:#141541;background-color:#a8c62e;\" 					><i class=\"trx_demo_icon-browser\"></i></a>			</div>  			<div class=\"trx_demo_panels_wrap\"> 				<div id=\"panel_related-themes\" 							class=\"trx_demo_panel 									trx_demo_panel_products									trx_demo_panel_thumbs_animation_off									trx_demo_panel_layout_1col									trx_demo_panel_style_plain\" 							style=\"\" 					><div class=\"trx_demo_panel_header\"><h5 class=\"trx_demo_panel_title\" style=\"\">Our Bestsellers</h5></div><div class=\"trx_demo_panel_content\"><div class=\"trx_demo_panel_list\"><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,business\" data-search-value=\"elementra\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2025/08/59-elementra.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=elementra\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=elementra\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;69</del>&nbsp;&#036;59</span>Elementra<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,business,news-editorial\" data-search-value=\"qwery\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Qwery-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=qwery\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=qwery\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;75</del>&nbsp;&#036;59</span>Qwery<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,technology\" data-search-value=\"ann\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Ann-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=ann\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=ann\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;79</span>ANN<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Technology</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,buddypress,wordpress-themes\" data-search-value=\"anesta\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Anesta-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=anesta\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=anesta\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;79</del>&nbsp;&#036;69</span>Anesta<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">BuddyPress</span><span class=\"trx_demo_panel_list_item_term\">WordPress Themes</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,blog-magazine,news-editorial\" data-search-value=\"kicker\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Kicker-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=kicker\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=kicker\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;75</del>&nbsp;&#036;59</span>Kicker<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Blog / Magazine</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,health-beauty,news-editorial\" data-search-value=\"jacqueline\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/Jacqueline-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=jacqueline\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=jacqueline\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;79</span>Jacqueline<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Health &amp; Beauty</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"bestsellers,entertainment,news-editorial\" data-search-value=\"fc united\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/03/FC-United-Preview.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=fc-united\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=fc-united\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;79</span>FC United<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Entertainment</span><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"portfolio\" data-search-value=\"helion\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Helion-home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=helion\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=helion\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Helion<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Portfolio</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"news-editorial\" data-search-value=\"blabber\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2020/01/Blabber_home-min.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=blabber\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=blabber\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Blabber<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">News / Editorial</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item trx_demo_featured\" data-filter-value=\"directory-listings\" data-search-value=\"alliance\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2024/02/Screenshot_1.png);\"> 															<a href=\"http://demo.themerex.net/?theme=alliance\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=alliance\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\">&#036;69</span>Alliance<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Directory &amp; Listings</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item\" data-filter-value=\"bestsellers,business,corporate\" data-search-value=\"business\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2025/12/Business-Admin.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=business\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=business\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;69</del>&nbsp;&#036;19</span>Business<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span><span class=\"trx_demo_panel_list_item_term\">Corporate</span></span></a> 												</h6> 																							</div> 										</div><div class=\"trx_demo_panel_list_item\" data-filter-value=\"bestsellers,business,corporate\" data-search-value=\"flexify\"> 											<div class=\"trx_demo_panel_list_item_image_wrap\"> 																									<div class=\"trx_demo_panel_list_item_image trx_demo_panel_list_item_image_ratio_16_9\" 														style=\"background-image: url(https://greeny.axiomthemes.com/wp-content/plugins/trx_demo/images/no-thumb.gif);background-position:center;background-repeat:no-repeat;background-size:cover;\" 														data-style=\"background-image: url(//themerex.net/wp-content/uploads/edd/2025/07/Flexify-Primary-Preview-10.51.47.jpg);\"> 															<a href=\"http://demo.themerex.net/?theme=flexify\" target=\"_blank\"></a> 													</div> 													<h6 class=\"trx_demo_panel_list_item_title\"> 													<a href=\"http://demo.themerex.net/?theme=flexify\" target=\"_blank\"><span class=\"trx_demo_panel_list_item_price\"><del>&#036;69</del>&nbsp;&#036;19</span>Flexify<span class=\"trx_demo_panel_list_item_terms\"><span class=\"trx_demo_panel_list_item_term\">Bestsellers</span><span class=\"trx_demo_panel_list_item_term\">Business</span><span class=\"trx_demo_panel_list_item_term\">Corporate</span></span></a> 												</h6> 																							</div> 										</div></div></div><div class=\"trx_demo_panel_footer\"><a class=\"trx_demo_panel_button sc_button theme_button trx_demo_inline_1523971218 trx_demo_inline_1775695438\" href=\"https://themeforest.net/item/elementra-100-elementor-wordpress-theme/57242915\" target=\"_blank\">Sale</a></div></div></div> 			<span class=\"trx_demo_button_close\"><span class=\"trx_demo_button_close_icon\"></span></span>  		</div>  		<div class=\"trx_demo_panels_mask\"></div> 		";
        </script>
        <script src="https://code.tidio.co/ctybgkiqd4jhsgdvzlgahqx3pjybdwlg.js" async></script>
    </body>
@endsection
