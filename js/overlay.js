(function($){
  var _COLOR = ["red", "black", "white", "orange", "blue", "green", "violet", "brown"];
  
  //ultilities
  String.prototype.width = function(font) {
      var f = font || '12px arial',
        o = $('<div>' + this + '</div>')
             .css({'position': 'absolute', 'float': 'left', 'white-space': 'nowrap', 'visibility': 'hidden', 'font': f})
             .appendTo($('body'));
        w = o.width();
      o.remove();
      return w; 
  }
    
  function gencolor() {
    len = _COLOR.length;
    rand = Math.floor(Math.random()*len);  
    return _COLOR[rand];
  }
  
  //set up draw world
  window.drawList = [];
  window.drawOverlay = function() {
    drawList = window.drawList;
    for (index in drawList) {
      overlay = drawList[index];
      draw(overlay.ctx, overlay.strarr, overlay.bgimg, overlay.settings);  
    }  
  } 
  
  setInterval(function(){
      window.drawOverlay();
  }, 1000/20);

  draw = function(ctx, strarr, bgimg, settings) {
    settings = settings || {'font':'40pt arial', 'color':'dynamic'};
  
    h = ctx.height;
    w = ctx.width;
    ctxdom = ctx;  
    ctx = ctx.getContext('2d') 
    ctx.clearRect(0, 0, 500, 500);
    ctx.drawImage(bgimg, 0, 0);
    
    for (index in strarr) {
      len = strarr[index].content.width(settings.font);
      pos = new Object();
      pos.left = 0 - index * len;
      pos.top = Math.floor(Math.random() * h);
      if (ctxdom.txtqueue.length < strarr.length)
        ctxdom.txtqueue.push({"context":strarr[index], "position":pos, "velocity":10});
    }  
     
    //increment position of each text
    for (index in ctxdom.txtqueue) {
      ctx.font = settings.font;
      curitem = ctxdom.txtqueue[index];
      curitem.position.left += curitem.velocity;
      if (settings.color === 'dynamic') 
        ctx.fillStyle = gencolor();
      else
        ctx.fillStyle = settings.color;
      ctx.fillText( curitem.context.content,
                    curitem.position.left, 
                    curitem.position.top);
    }   
  }



  //jquery extend  
  $.fn.Overlay = function(textarr, settings) {
    container = this;
          
    w = this.width(); 
    h = this.height();
    pos = this.position();

    imgsrc = this.attr('src');
    id = this.attr('id');
    canvashtml = '<canvas id="'+id+'"></canvas>';
    this.replaceWith(canvashtml);
    selector = '#'+id;
    ctx = $(selector)[0];
    ctx.width = w;
    ctx.height = h;

    ctx['txtqueue'] = [];
    imageObj = new Image();
    imageObj.src = imgsrc; 

    drawObj = new Object();
    drawObj.ctx = ctx;
    drawObj.strarr = textarr;
    drawObj.bgimg = imageObj;
    drawObj.settings = settings
    window.drawList.push(drawObj);
  }
})(jQuery)
