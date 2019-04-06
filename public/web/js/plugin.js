//Contact with admins
$('#contact_form_landing').on('submit', function (e) {
  e.preventDefault();
  var form = $(this),
      data = form.serialize();
       url = form.attr('action'),
       type = form.attr('method');
  $.ajax({
    url: url,
    type: type,
    dataType: 'json',
    data: data,
    error : function (results) {
      var results = results.responseJSON;
      $('#failedModal').modal();
      setTimeout(function () {
        $('.modal').modal('hide');
      }, 5000);
      $('body').find('#failed_contact_name').html(results.errors.name);
      $('body').find('#failed_contact_email').html(results.errors.email);
      $('body').find('#failed_contact_details').html(results.errors.details);
    },
    success: function (results) {
      if (results.errors == -1) {
        $('#successModal').modal();
        $('#contact_form_landing').trigger("reset");
        $('body').find('.help-block').html('');
        setTimeout(function () {
          $('.modal').modal('hide');
        }, 5000);
      }
    }
  });
  return false;
});


//Contact with admins
$('#contact_form_contact').on('submit', function (e) {
  e.preventDefault();
  var form = $(this),
      data = form.serialize();
       url = form.attr('action'),
       type = form.attr('method');
  $.ajax({
    url: url,
    type: type,
    dataType: 'json',
    data: data,
    error : function (results) {
      var results = results.responseJSON;
      $('#failedModal').modal();
      setTimeout(function () {
        $('.modal').modal('hide');
      }, 5000);
      $('body').find('#failed_contact_page_name').html(results.errors.name);
      $('body').find('#failed_contact_page_email').html(results.errors.email);
      $('body').find('#failed_contact_page_details').html(results.errors.details);
    },
    success: function (results) {
      if (results.errors == -1) {
        $('#successModal').modal();
        $('#contact_form_contact').trigger("reset");
        $('body').find('.help-block').html('');
        setTimeout(function () {
          $('.modal').modal('hide');
        }, 5000);
      }
    }
  });
  return false;
});

//Contact with admins
$('#job_apply_form').on('submit', function (e) {
  e.preventDefault();
  var form = $(this),
      data = new FormData($(this)[0]);
      url = form.attr('action'),
      type = form.attr('method');
  $.ajax({
    url: url,
    type: type,
    dataType: 'json',
    data: data,
    processData: false,
    contentType: false,
    error : function (results) {
      var results = results.responseJSON;
      $('#failedModal').modal();
      setTimeout(function () {
        $('.modal').modal('hide');
      }, 5000);
      $('body').find('#failed_job_name').html(results.errors.name);
      $('body').find('#failed_job_email').html(results.errors.email);
      $('body').find('#failed_job_details').html(results.errors.details);
      $('body').find('#failed_job_cv').html(results.errors.cv);
    },
    success: function (results) {
      if (results.errors == -1) {
        $('#successModal').modal();
        $('#job_apply_form').trigger("reset");
        $('body').find('.help-block').html('');
        setTimeout(function () {
          $('.modal').modal('hide');
        }, 5000);
      }
    },
    complete: function() {
        form.data('requestRunning', false);
    }
  });
  return false;
});
