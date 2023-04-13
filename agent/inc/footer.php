    </div>
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="text-center w-100">
                    <p>All right reserved</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- DataTable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
        $('.claim_btn').click(function() {
            var id = $(this).parent().parent().find('input[name="id"]').val();
            var claimer = $(this).parent().parent().find('input[name="claimer_id"]').val();
            var data = {
                id: id,
                claimer: claimer
            };
            console.log(data);
            $.ajax({
                type: 'POST',
                url: 'server/claim.php',
                data: data,
                timeout: 600000,
                success: function(res) {
                    console.log(res);
                    if (res == 'success') {
                        swal({
                            title: 'Success!',
                            text: 'Successfully Claimed Lead!',
                            type: 'success',
                        });
                        $('#claim_btn').addClass('disabled');
                    } else {
                        swal({
                            title: 'Warning!',
                            text: 'Lead already claimed by someone else!',
                            type: 'danger',
                        });
                    }
                },
            });
        });
        $('.de_claim_btn').click(function() {
            var id = $(this).parent().parent().find('input[name="id"]').val();
            var claimer = $(this).parent().parent().find('input[name="claimer_id"]').val();
            var data = {
                id: id,
                de_claimer: claimer
            };
            console.log(data);
            $.ajax({
                type: 'POST',
                url: 'server/claim.php',
                data: data,
                timeout: 600000,
                success: function(res) {
                    console.log(res);
                    if (res == 'success') {
                        swal({
                            title: 'Success!',
                            text: 'Successfully de-Claimed Lead!',
                            type: 'success',
                        });
                        $('#de_claim_btn').addClass('disabled');
                    } else {
                        swal({
                            title: 'Warning!',
                            text: 'Lead already de-claimed!',
                            type: 'danger',
                        });
                    }
                },
            });
        });
    </script>

    </body>

    </html>