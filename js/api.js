(function ($) {

  $('#get-new-quote').on('click', function (event) {
    event.preventDefault();
    $.ajax({
      method: 'post',
      url: red_vars.rest_url + 'wp/v2/posts/' + red_vars.post_id
    }

    ).done(function (response) {
      alert('Success! Comments are closed for this post.');
    });
  });
  console.log('api_vars'.api_vars);

})(jQuery);
