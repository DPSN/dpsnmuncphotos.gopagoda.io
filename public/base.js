document.onscroll = function () {
    if(document.body.scrollTop === 0) {
        document.querySelector('#navbar').style.display = 'none';
    }
    else {
        document.querySelector('#navbar').style.display = 'block';
    }
};