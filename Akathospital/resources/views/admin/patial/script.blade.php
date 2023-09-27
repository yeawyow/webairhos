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
                h.parentNode.insertBefore(i, h);
            };
            ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
</script>

{{-- <script src="{{ url('newAdminDashboard/js/jquery.min.js') }}"></script> --}}
<script src="{{ url('newAdminDashboard/js/popper.js') }}"></script>
<script src="{{ url('newAdminDashboard/js/bootstrap.min.js') }}"></script>
<script src="{{ url('newAdminDashboard/js/main.js') }}"></script>
<script defer="" referrerpolicy="origin" src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyU2lkZWJhciUyMDA1JTIyJTJDJTIyeCUyMiUzQTAuNTM0NTQzMDI2NDIxMDQ5MyUyQyUyMnclMjIlM0ExNjAwJTJDJTIyaCUyMiUzQTkwMCUyQyUyMmolMjIlM0EzMDIlMkMlMjJlJTIyJTNBMTYwMCUyQyUyMmwlMjIlM0ElMjJodHRwcyUzQSUyRiUyRmNvbG9ybGliLmNvbSUyRmV0YyUyRmJvb3RzdHJhcC1zaWRlYmFyJTJGc2lkZWJhci0wNSUyRiUyMiUyQyUyMnIlMjIlM0ElMjIlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTQyMCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q="></script>

{{-- Jquery --}}
<script src='https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js'></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

<script>
    $(function(){
        fetchAllEmployees();

        function fetchAllEmployees() {
            $.ajax({
                url: '{{ route('fetchAllSliderJssorDashboard') }}',
                method: 'get',
                success: function(response) {
                    $("#show_all_sliderJssor").html(response);
                    // $("table").DataTable({
                    //     order: [0, 'desc']
                    // });
                }
            });
        }

        $("#add_sliderJssor_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_sliderJssor_btn").text('Adding...');
            $.ajax({
                url: '{{ route('storeSliderJssorDashboard') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        swal.fire(
                            'Add Success Fully!',
                            'Offsite Activities Added Successfully!',
                            'success'
                        );
                        // $('#myTable')[0].reset();
                        fetchAllSliderJssor();
                    } 
                    $("#add_sliderJssor_btn").text('Add Employee');
                    $("#add_sliderJssor_form")[0].reset();
                    $("#addSliderJssorModal").modal('hide');
                }
            });
        });
    }); 
</script>