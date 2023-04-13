  <div class="second-footer ad mt-3">
    <div class="container">
      <p>2023 © Copyright - All Rights Reserved.</p>
      <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By WEBIONS</p>
    </div>
  </div>
  <!-- START PRELOADER -->
  <div id="preloader">
    <div id="status">
      <div class="status-mes"></div>
    </div>
  </div>
  <!-- END PRELOADER -->

  <!-- ARCHIVES JS -->
  <script src="../js/jquery-3.5.1.min.js"></script>

  <script>
    ref = document.referrer
    form = $('#form')
    $('#form').on('submit', function(e) {
      e.preventDefault()
      var formData = new FormData(this);
      // console.log(formData)
      $.ajax({
        url: 'submit.php',
        data: formData,
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
          if (response === "Success") {
            swal({
              title: 'Success',
              text: 'Data successfully added!',
              type: 'success',
            }).then(function() {
              window.location.href = ref;
            })
          } else {
            swal({
              title: 'Error',
              text: response,
              type: 'error',
            })
          }
        }
      })
    })

    $('#update').on('submit', function(e) {
      e.preventDefault()
      var formData = new FormData(this);
      // console.log(formData)
      $.ajax({
        url: 'update_submit.php',
        data: formData,
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
          if (response === "Success") {
            swal({
              title: 'Success',
              text: 'Data successfully added!',
              type: 'success',
            }).then(function() {
              window.location.href = ref;
            })
          } else {
            swal({
              title: 'Error',
              text: response,
              type: 'error',
            })
          }
        }
      })
    })
  </script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/tether.min.js"></script>
  <script src="../js/moment.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/mmenu.min.js"></script>
  <script src="../js/mmenu.js"></script>
  <script src="../js/swiper.min.js"></script>
  <script src="../js/swiper.js"></script>
  <script src="../js/slick.min.js"></script>
  <script src="../js/slick2.js"></script>
  <script src="../js/fitvids.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.counterup.min.js"></script>
  <script src="../js/imagesloaded.pkgd.min.js"></script>
  <script src="../js/isotope.pkgd.min.js"></script>
  <script src="../js/smooth-scroll.min.js"></script>
  <script src="../js/lightcase.js"></script>
  <script src="../js/search.js"></script>
  <script src="../js/owl.carousel.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/ajaxchimp.min.js"></script>
  <script src="../js/newsletter.js"></script>
  <script src="../js/jquery.form.js"></script>
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/searched.js"></script>
  <script src="../js/dashbord-mobile-menu.js"></script>
  <script src="../js/forms-2.js"></script>
  <script src="../js/color-switcher.js"></script>
  <script src="https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/jszip-2.5.0/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.20.1/ckeditor.js" integrity="sha512-zFNDGGU5T3I464vTJn5SupfBJEoxFa7oa5BRkQjm409ORBe1U4f7cpbylDdV21yrmjmYKo3Y0sPTxR9kBgSkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

  <!-- custom -->
  <script>
    $(document).ready(function() {
      $('#datatable').dataTable({
        paging: true,
        fixedHeader: {
          header: true
        },
        dom: 'Bfrtip',
        buttons: [{
            extend: 'excel',
            text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
          },

          'copy',
        ],

      });

      $('#claimer').change(function() {
        var claimer = $(this).val();
        var form_id = $('input[name="form_id"]').val();

        $.ajax({
          url: './update_submit.php',
          data: {
            claimer: claimer,
            form_id: form_id
          },
          type: 'POST',
          success: function(response) {
            console.log(response)
            if (response === "Success") {
              swal({
                title: 'Success',
                text: 'Claim successfully updated!',
                type: 'success',
              })
            } else {
              swal({
                title: 'Error',
                text: response,
                type: 'error',
              })
            }
          }
        })
      });
    });

    $('.featured').on('click', function() {
      id = $(this).attr('name')
      $.ajax({
        url: './update_submit.php',
        data: {
          p_id: id
        },
        type: 'POST',
        success: function(response) {
          if (response === "Success") {
            swal({
              title: 'Success',
              text: 'Data successfully added!',
              type: 'success',
            }).then(function() {
              location.reload()
            })
          } else {
            swal({
              title: 'Error',
              text: response,
              type: 'error',
            })
            console.log(response)
          }
        }
      })
    })

    var $ckfield = CKEDITOR.replace('description', {
      on: {
        instanceReady: function(ev) {
          // Output paragraphs as <p>Text</p>.
          this.dataProcessor.writer.setRules('p', {
            indent: false,
            breakBeforeOpen: false,
            breakAfterOpen: false,
            breakBeforeClose: false,
            breakAfterClose: false
          });
        }
      }
    })

    CKEDITOR.instances.description.insertHtml("<?php echo !empty($row['description']) ? $row['description'] : ''; ?>");


    $ckfield.on('change', function() {
      $ckfield.updateElement();
    });

    $(".header-user-name").on("click", function() {
      $(".header-user-menu ul").toggleClass("hu-menu-vis");
      $(this).toggleClass("hu-menu-visdec");
    });
  </script>
  <!-- MAIN JS -->
  <script src="../js/script.js"></script>

  </div>
  <!-- Wrapper / End -->
  </body>



  </html>