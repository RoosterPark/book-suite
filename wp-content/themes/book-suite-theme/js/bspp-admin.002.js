"use strict";

var BSPPAdmin = function(ph) {
   this.ph = ph;
   this.w = ph.offsetWidth;
   this.init();
};

BSPPAdmin.prototype = {
   init: function() {
      var o = this;
      var e = document.getElementById("acf-bspp_countries"); // div
      var p = e.getElementsByTagName("p");
      if (p.length < 1) return;
      var s = document.createElement("span");
      s.style.padding = "0 8px";
      s.style.color = "#1e8cbe";
      s.style.cursor = "pointer";
      s.innerHTML = "Country selector";
      s.onclick = function() {
         o.litebox();
      };
      p[0].appendChild(s);
   },
   litebox: function() {
      var o = this;
      var e = document.createElement("div");
      e.id = "bspp-cstm-slctr";
      e.style.position = "fixed";
      e.style.zIndex = 999999;
      e.style.top = e.style.left = 0;
      e.style.width = e.style.height = "100%";
      e.style.background = "rgba(0, 0, 0, .7)";
      e.innerHTML = [
         "<div style='position:absolute;top:15%;left:50%;margin-left:-", Math.round(o.w / 2), "px;width:", o.w, "px;height:70%;background:#fff;'>",
            "<div style='height:80%;overflow:auto;margin-left:26px;'>",
               o.options(),
            "</div>",
            "<div style='margin:5% auto 0;text-align:center;'>",
               "<button onclick='jQuery(\"#bspp-cstm-slctr\").remove()'>Cancel</button>\u00A0\u00A0\u00A0\u00A0<button id='bspp-cstm-slctr-go'>Update</button>",
            "</div>",
         "</div>"
      ].join("");
      document.body.appendChild(e);
      jQuery("#bspp-cstm-slctr-go").click(function() {
         o.update();
      });
   },
   options: function() {
      var i, j, b, k, v, c;
      var e = document.getElementById("acf-field-bspp_countries"); // selectbox
      var q = e.options.length;
      var w = this.w - 50;
      var t = Math.floor(w / 300);
      var m = Math.floor(q / t);
      var s = [
         "<style type='text/css'>",
            "ul.bspp-cstm-slctr {display:inline-block;width:", Math.floor(w / t), "px;vertical-align:top;}",
            "ul.bspp-cstm-slctr > li {margin:0 8px;padding:0 8px;}",
            "ul.bspp-cstm-slctr > li > input {float:left;margin:4px;}",
            "ul.bspp-cstm-slctr > li > input + label {display:block;padding:3px 0;}",
            "ul.bspp-cstm-slctr > li > input:checked + label {background:#e1f2fa;}",
         "</style>"
      ].join("");
      var a = [];
      for (i = 0; i < t; i++) {
         a.push(["<ul class='bspp-cstm-slctr'>"]);
      }
      for (i = 0, j = 0, b = 0; i < q; i++, b++) {
         if (b > m) {
            j++;
            b = 0;
         }
         k = e.options[i];
         v = k.value; // NL, DE, etc
         c = k.selected ? " checked" : "";
         a[j].push("<li><input type='checkbox' id='bspp_", v, "' value='", v, "'", c, "><label for='bspp_", v, "'>", k.innerHTML, "</label></li>");
      }
      for (i = 0; i < t; i++) {
         a[i].push("</ul>");
         a[i] = a[i].join("");
      }
      return s + a.join("");
   },
   update: function() {
      var i, q;
      var e = document.getElementById("bspp-cstm-slctr").getElementsByTagName("input");
      var a = [];
      for (i = 0, q = e.length; i < q; i++) {
         if (e[i].checked) a.push(e[i].value);
      }
      e = document.getElementById("acf-field-bspp_countries"); // selectbox
      for (i = 0, q = e.options.length; i < q; i++) {
         e.options[i].selected = !(a.indexOf(e.options[i].value) < 0);
      }
      jQuery("#bspp-cstm-slctr").remove();
      e.focus();
   }
};

jQuery(function() {
   jQuery.each(jQuery("#acf-bspp_countries"), function() {
      new BSPPAdmin(this);
   });
});