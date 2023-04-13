$(document).ready(function () {
  $('#product_table').DataTable({
    aaSorting: [],
    responsive: true,

    columnDefs: [
      {
        responsivePriority: 1,
        targets: 0,
      },
      {
        responsivePriority: 2,
        targets: -1,
      },
      {
        responsivePriority: 3,
        targets: -1,
      },
    ],
  });

  $('#summernote').summernote({
    tabsize: 2,
    height: 400,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['help']],
    ],
  });

  $('#publish_blog').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/add_blog.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        // console.log(res);
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'success') {
          swal(
            {
              title: 'Published!',
              text: 'Blog has been published!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                window.location.href = `leads.php`;
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in uploading, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                window.location.href = `blog.php`;
              }
            }
          );
        }
      },
    });
  });
  $('#update_blog').submit(function (e) {
    e.preventDefault();
    let form = $(this)[0];
    let data = new FormData(form);
    let content = $('.note-editable').html();

    data.append('content', content);

    $.ajax({
      type: 'POST',
      enctype: 'multipart/form-data',
      url: 'server/update_blog.php',
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      timeout: 600000,
      success: function (res) {
        if (res == 'title_missing') {
          return $('.error_msg').html('Title is missing');
        } else if (res == 'content_missing') {
          return $('.error_msg').html('Content is missing');
        } else if (res == 'updated') {
          swal(
            {
              title: 'Updated!',
              text: 'Blog has been updated!',
              type: 'success',
              confirmButtonColor: '#65DFDE',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                window.location.href = `leads.php`;
              }
            }
          );
        } else {
          swal(
            {
              title: 'Warning!',
              text: 'Some error occur in updating, try again',
              type: 'danger',
              confirmButtonColor: '#cf0a20',
              confirmButtonText: 'OK!',
            },
            function (isConfirm) {
              if (isConfirm) {
                window.location.href = `blog.php`;
              }
            }
          );
        }
      },
    });
  });

  $('#datatable').dataTable({
    paging: true,
    fixedHeader: {
      header: true,
    },
    dom: 'Bfrtip',
    buttons: [
      {
        extend: 'excel',
        text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>',
      },
      {
        extend: 'pdf',
        text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>',
      },

      'copy',
      'pdf',
      'colvis',
    ],
  });

});
