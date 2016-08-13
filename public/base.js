document.onscroll = function () {
    if(document.body.scrollTop === 0) {
        if(window.jQuery) {
            $(document.querySelector('#navbar')).fadeOut();
        }
        else {
            document.querySelector('#navbar').style.display = 'none';
        }
    }
    else {
      if(window.jQuery) {
            $(document.querySelector('#navbar')).fadeIn();
      }
      else {
          document.querySelector('#navbar').style.display = 'block';
      }
    }
};
