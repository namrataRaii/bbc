<!-- JAVASCRIPT -->
<script src="<?= base_url('assets') ?>/libs/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/metismenu/metisMenu.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url('assets') ?>/libs/node-waves/waves.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"
    integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
    integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= base_url('assets') ?>/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function appendsidebar() {
        $("body").addClass('sidebar-enable vertical-collpsed');
        // $("body").removeClass('sidebar-enable vertical-collpsed');
    }
    //Login
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: 'POST',
            url: $('#loginForm').attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#loginBtn").attr("disabled", true);
                $('#loginSpin').show();
            },
            success: function (response) {
                console.log(response);

                var response = JSON.parse(response);
                $("#loginBtn").removeAttr("disabled");
                $('#loginSpin').hide();
                if (response[0].res == 'success') {
                    $('.notifyjs-wrapper').remove();
                    $('.toast').remove();
                    // $.notify("" + response[0].msg + "", "success");
                    Command: toastr["success"](response[0].msg)
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": true,
                        "preventOpenDuplicates": true,
                        "onclick": null,
                        "showDuration": 300,
                        "hideDuration": 1000,
                        "timeOut": 5000,
                        "extendedTimeOut": 1000,
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
                    if (response[0].redirect) {
                        window.setTimeout(function () {
                            window.location.href = response[0].redirect;
                        }, 800);
                    }

                }
                else if (response[0].res == 'error') {
                    $('.toast').remove();
                    Command: toastr["error"](response[0].msg)
                    // $.notify("" + response[0].msg + "", "error");
                }
            },
            error: function () {
                window.location.reload();
            }
        });
    });
</script>
</body>

</html>