<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('back/dist/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('back/dist/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('back/dist/css/adminlte.min.css')}}">
    <script nonce="ac4dd62c-6634-409b-af83-b8f35a1b5c33">(function (w, d) {
            !function (cM, cN, cO, cP) {
                cM.zarazData = cM.zarazData || {};
                cM.zarazData.executed = [];
                cM.zaraz = {deferred: [], listeners: []};
                cM.zaraz.q = [];
                cM.zaraz._f = function (cQ) {
                    return function () {
                        var cR = Array.prototype.slice.call(arguments);
                        cM.zaraz.q.push({m: cQ, a: cR})
                    }
                };
                for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS);
                cM.zaraz.init = () => {
                    var cT = cN.getElementsByTagName(cP)[0], cU = cN.createElement(cP),
                        cV = cN.getElementsByTagName("title")[0];
                    cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text);
                    cM.zarazData.x = Math.random();
                    cM.zarazData.w = cM.screen.width;
                    cM.zarazData.h = cM.screen.height;
                    cM.zarazData.j = cM.innerHeight;
                    cM.zarazData.e = cM.innerWidth;
                    cM.zarazData.l = cM.location.href;
                    cM.zarazData.r = cN.referrer;
                    cM.zarazData.k = cM.screen.colorDepth;
                    cM.zarazData.n = cN.characterSet;
                    cM.zarazData.o = (new Date).getTimezoneOffset();
                    if (cM.dataLayer) for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({...c_[1], ...da[1]}))))) zaraz.set(cZ[0], cZ[1], {scope: "page"});
                    cM.zarazData.q = [];
                    for (; cM.zaraz.q.length;) {
                        const db = cM.zaraz.q.shift();
                        cM.zarazData.q.push(db)
                    }
                    cU.defer = !0;
                    for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de.startsWith("_zaraz_"))).forEach((dd => {
                        try {
                            cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd))
                        } catch {
                            cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd)
                        }
                    }));
                    cU.referrerPolicy = "origin";
                    cU.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));
                    cT.parentNode.insertBefore(cU, cT)
                };
                ["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);</script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{Route('admin.login.post')}}" method="post">
                @method('post')
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>

                </div>
            </form>
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>

            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>
        </div>

    </div>
</div>


<script src="{{asset('back/dist/jquery.min.js')}}"></script>

<script src="{{asset('back/dist/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('back/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
