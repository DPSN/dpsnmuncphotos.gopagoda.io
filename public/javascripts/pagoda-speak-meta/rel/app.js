window.pxspeak = {};

pxspeak.SpeakMeta = (function() {
  function SpeakMeta(params) {
    if (params == null) {
      params = {};
    }
    this.build(params);
  }

  SpeakMeta.prototype.build = function(params) {
    var node;
    this.params = this.scrubParams(params);
    node = Speak.handlebars.speakMeta({
      gitCloneUrl: params.gitCloneUrl,
      what: params.what
    });
    this.isOpen = false;
    this.$node = $(node);
    this.$content = $('.meta-content', this.$node);
    $('body').prepend(this.$node);
    $('.shard').on('click', (function(_this) {
      return function() {
        return _this.shardClick();
      };
    })(this));
    $('.shard').on('mouseover', (function(_this) {
      return function() {
        return _this.shardMouseOver();
      };
    })(this));
    $('.shard').on('mouseout', (function(_this) {
      return function() {
        return _this.shardMouseOut();
      };
    })(this));
    this.height = this.$content.height() + 80;
    return this.close(0);
  };

  SpeakMeta.prototype.open = function() {
    this.$content.animate({
      height: this.height,
      "padding-top": 40,
      opacity: 1
    }, {
      duration: 500,
      easing: "easeInOutQuint"
    });
    return this.$node.addClass('active');
  };

  SpeakMeta.prototype.close = function(duration) {
    if (duration == null) {
      duration = 300;
    }
    this.$content.animate({
      height: 0,
      "padding-top": 0,
      opacity: 0
    }, {
      duration: duration,
      easing: "easeInOutQuint"
    });
    return this.$node.removeClass('active');
  };

  SpeakMeta.prototype.shardClick = function() {
    if (this.isOpen) {
      this.close();
      return this.isOpen = false;
    } else {
      this.open();
      return this.isOpen = true;
    }
  };

  SpeakMeta.prototype.shardMouseOver = function() {
    return this.$node.addClass('hover');
  };

  SpeakMeta.prototype.shardMouseOut = function() {
    return this.$node.removeClass('hover');
  };

  SpeakMeta.prototype.scrubParams = function(params) {
    if (params.gitCloneUrl == null) {
      params.gitCloneUrl = "no/clone/url";
    }
    switch (params.language) {
      case "php":
        params.what = "This is a demo app running on Pagoda Box using a PHP / MySQL / Network Storage stack. Everything was provisioned and configured on deploy based on settings in the Boxfile, a simple yaml file used to configure apps on Pagoda Box.";
    }
    return params;
  };

  return SpeakMeta;

})();

jQuery.extend(jQuery.easing, {
  easeInOutQuint: function(x, t, b, c, d) {
    if ((t /= d / 2) < 1) {
      return c / 2 * t * t * t * t * t + b;
    }
    return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
  }
});

this["Speak"] = this["Speak"] || {};
this["Speak"]["handlebars"] = this["Speak"]["handlebars"] || {};
this["Speak"]["handlebars"]["shard"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
  this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Handlebars.helpers); data = data || {};
  var buffer = "";


  return buffer;
  });;
this["Speak"] = this["Speak"] || {};
this["Speak"]["handlebars"] = this["Speak"]["handlebars"] || {};
this["Speak"]["handlebars"]["speakMeta"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
  this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Handlebars.helpers); data = data || {};
  var buffer = "", stack1, helper, functionType="function", escapeExpression=this.escapeExpression;


  buffer += "<div class=\"meta-wrapper\"><div class=\"meta-speak\"><div class=\"meta-content\"><div class=\"wrapper\"><div class=\"left-col\"><h1>What is This?</h1><p>";
  if (helper = helpers.what) { stack1 = helper.call(depth0, {hash:{},data:data}); }
  else { helper = (depth0 && depth0.what); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
  buffer += escapeExpression(stack1)
    + "</p></div><div class=\"right-col\"><h1>Getting Started with Pagoda Box</h1><ul><li><a href=\"http://pagodabox.io/docs/understanding_the_environment\">Understanding Pagoda Box</a></li></ul><div class=\"github\"><p>View this app on github</p><a href=\"";
  if (helper = helpers.gitCloneUrl) { stack1 = helper.call(depth0, {hash:{},data:data}); }
  else { helper = (depth0 && depth0.gitCloneUrl); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
  buffer += escapeExpression(stack1)
    + "\">";
  if (helper = helpers.gitCloneUrl) { stack1 = helper.call(depth0, {hash:{},data:data}); }
  else { helper = (depth0 && depth0.gitCloneUrl); stack1 = typeof helper === functionType ? helper.call(depth0, {hash:{},data:data}) : helper; }
  buffer += escapeExpression(stack1)
    + "</a></div></div></div></div></div><div class=\"shard\"></div><div class=\"shadow-wrapper\"><div class=\"shard-shadow\"></div></div></div>";
  return buffer;
  });;