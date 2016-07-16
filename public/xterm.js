var TextFlick = function (text, selector) {
    this.text = text + '                    ';
    this.selector = selector;
    this.counter = 0;
    this.times = 0;
    this.addText = function () {
        if(this.counter === this.text.length) {
            if(this.times === 2) return;
            else {
                document.querySelector(this.selector).innerHTML = '&nbsp;';
                this.counter = 0;
                this.times = this.times + 1;
            }
        }
        else {
            document.querySelector(this.selector).innerHTML = document.querySelector(this.selector).innerHTML + this.text.charAt(this.counter);
            this.counter = this.counter + 1;
        }
    }
    document.querySelector(this.selector).innerHTML = '&nbsp;';
};
var texy = new TextFlick('Photo Gallery', '#xterm');
setInterval(function () {
    texy.addText();
}, 150);