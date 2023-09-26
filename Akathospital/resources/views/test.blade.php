<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- DataTables Start -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
    <!-- DataTables End -->

    <!-- Bootstrap 5 Start -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <!-- Bootstrap 5 End -->

    <!-- CSS Start -->
    <link rel="stylesheet" href="{{ url('newAdminDashboard/app.css') }}">
    <!-- CSS End -->

    <title>Document</title>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="" style="position: fixed; height: 100vh; z-index: 999;">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="index.html" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#"><span class="fa fa-home"></span> Home</a>
                    </li>
                    <li class="{{ 'test' == request()->path() ? 'active' : '' }}">
                        <a href="{{ url('test') }}"><span class="fa fa-user"></span> About</a>
                    </li>
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#"><span class="fa fa-briefcase"></span> Works</a>
                    </li>
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
                    </li>
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#"><span class="fa fa-suitcase"></span> Gallery</a>
                    </li>
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#"><span class="fa fa-cogs"></span> Services</a>
                    </li>
                    <li class="{{ '' == request()->path() ? 'active' : '' }}">
                        <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
                    </li>
                </ul>
                <div class="mb-5">
                    <h3 class="h6 mb-3">Subscribe for newsletter</h3>
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <div class="icon"><span class="icon-paper-plane"></span></div>
                            <input type="text" class="form-control" placeholder="Enter Email Address">
                        </div>
                    </form>
                </div>
                <div class="footer">
                    <p>
                        Copyright ©<script>
                            document.write(new Date().getFullYear());
                        </script>2023 All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                    </p>
                </div>
            </div>
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5" style="margin-left: 15rem;">
            <h2 class="mb-4 ms-4">Sidebar #05</h2>
            <div class="card p-3 rounded rounded-5">
                <div class="container">
                    <table id="myTable" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Edit & Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sdjs as $sd)
                            <tr>
                                <td>{{ $sd->sdjs_id }}</td>
                                <td>{{ $sd->sdjs_name }}</td>
                                <td><img src="storage/images/sliderJssor/{{ $sd->sdjs_image }}" alt="" width="50" class="img-thumbnail rounded"></td>
                                <td>
                                    <a href="#" id="' . $sj->sdjs_id . '" class="btn btn-outline-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#sliderJssorModal"><i class="bi-pencil-square h4">Edit</i></a>
                                    <a href="#" id="' . $sj->sdjs_id . '" class="btn btn-outline-danger mx-1 deleteIcon"><i class="bi-trash h4">Delete</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#myTable").DataTable();
        });
    </script>

    <script>
        fetchAllSliderJssor();

        function fetchAllSliderJssor() {
            $.ajax({
                url: '{{ route('fetchAllSliderJssorDashboard') }}',
                method: 'get',
                success: function(response) {
                    $("#show_all_sliderJssorDashboard").html(response);
                }
            });
        }
    </script>
    <script nonce="a9983298-2ad5-4008-95ed-fbd9f515bd41">
        (function(w, d) {
            ! function(a, b, c, d) {
                a[c] = a[c] || {};
                a[c].executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return async function() {
                        var f = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: f
                        })
                    }
                };
                for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
                a.zaraz.init = () => {
                    var h = b.getElementsByTagName(d)[0],
                        i = b.createElement(d),
                        j = b.getElementsByTagName("title")[0];
                    j && (a[c].t = b.getElementsByTagName("title")[0].text);
                    a[c].x = Math.random();
                    a[c].w = a.screen.width;
                    a[c].h = a.screen.height;
                    a[c].j = a.innerHeight;
                    a[c].e = a.innerWidth;
                    a[c].l = a.location.href;
                    a[c].r = b.referrer;
                    a[c].k = a.screen.colorDepth;
                    a[c].n = b.characterSet;
                    a[c].o = (new Date).getTimezoneOffset();
                    if (a.dataLayer)
                        for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                                ...o[1],
                                ...p[1]
                            })), {}))) zaraz.set(n[0], n[1], {
                            scope: "page"
                        });
                    a[c].q = [];
                    for (; a.zaraz.q.length;) {
                        const q = a.zaraz.q.shift();
                        a[c].q.push(q)
                    }
                    i.defer = !0;
                    for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith("_zaraz_"))).forEach((s => {
                        try {
                            a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                        } catch {
                            a[c]["z_" + s.slice(7)] = r.getItem(s)
                        }
                    }));
                    i.referrerPolicy = "origin";
                    i.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                    h.parentNode.insertBefore(i, h)
                };
                ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
    <script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyU2lkZWJhciUyMDA1JTIyJTJDJTIyeCUyMiUzQTAuNTM0NTQzMDI2NDIxMDQ5MyUyQyUyMnclMjIlM0ExNjAwJTJDJTIyaCUyMiUzQTkwMCUyQyUyMmolMjIlM0EzMDIlMkMlMjJlJTIyJTNBMTYwMCUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmNvbG9ybGliLmNvbSUyRmV0YyUyRmJvb3RzdHJhcC1zaWRlYmFyJTJGc2lkZWJhci0wNSUyRiUyMiUyQyUyMnIlMjIlM0ElMjIlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTQyMCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q="></script>
</body>

</html>