/* modal-rv2.js — Abridor genérico con scroll móvil y cierre robusto (v4.1) */
(function(){
  if (window.rv2OpenPanel) return;

  function qs(s,r){return (r||document).querySelector(s);}
  function injectCSS(css,id){
    if(!css) return;
    var tagId=id||"rv2-inline-style", st=document.getElementById(tagId);
    if(!st){ st=document.createElement("style"); st.id=tagId; document.head.appendChild(st); }
    st.textContent=css;
  }
  function getHost(){
    var c=qs("canvas");
    return (c&&c.parentElement)?c.parentElement:document.body;
  }
  function lockScroll(){ document.documentElement.style.overflow="hidden"; }
  function unlockScroll(){ document.documentElement.style.overflow=""; }

  // API: { html, css, scopeId, defaultWA, onOpen, onClose }
  window.rv2OpenPanel=function(opts){
    try{
      var host=getHost();
      if(getComputedStyle(host).position==="static") host.style.position="relative";

      var scope=(opts&&opts.scopeId)||"rv2-panel";
      var old=qs("#"+scope,host); if(old) old.remove();

      var wa=(opts&&opts.defaultWA)||"https://wa.me/584143357226"; // WA por defecto
      var html=(opts&&opts.html?String(opts.html):"").replace(/%WA%/g,wa);

      // Inyecta CSS (scoped por id raíz)
      injectCSS(opts&&opts.css?String(opts.css):"","style-"+scope);

      // Overlay
      var wrap=document.createElement("div");
      wrap.id=scope; wrap.setAttribute("role","dialog"); wrap.setAttribute("aria-modal","true");
      wrap.style.cssText="position:absolute;inset:0;z-index:2147483647;";

      wrap.innerHTML='\
        <div class="rv2-bk" style="position:absolute;inset:0;background:rgba(0,0,0,.6);backdrop-filter:blur(2px)"></div>\
        <button type="button" class="rv2-x" aria-label="Cerrar" style="position:absolute;top:12px;right:12px;z-index:1000">×</button>\
        <div class="rv2-card" role="document" tabindex="-1">'+html+'</div>';

      var bk=wrap.querySelector(".rv2-bk"),
          x =wrap.querySelector(".rv2-x"),
          card=wrap.querySelector(".rv2-card");

      function close(){
        try{ wrap.remove(); }catch(e){}
        unlockScroll();
        if(opts&&typeof opts.onClose==="function") opts.onClose();
      }

      // Cierre robusto (click + touchend) y evitar que el visor intercepte eventos
      x.addEventListener("click", function(e){ e.stopPropagation(); close(); });
      x.addEventListener("pointerdown", function(e){ e.stopPropagation(); });
      x.addEventListener("touchend", function(e){ e.preventDefault(); e.stopPropagation(); close(); }, {passive:false});
      bk.addEventListener("click", close);

      // Evita que gestos dentro del modal pasen al visor
      ["touchstart","touchmove","wheel","pointerdown"].forEach(function(ev){
        card.addEventListener(ev,function(e){ e.stopPropagation(); }, {passive:false});
      });
      card.style.touchAction="pan-y";

      // Si existe .cnt, habilita scroll táctil suave
      var cnt=wrap.querySelector(".cnt");
      if(cnt){
        cnt.style.webkitOverflowScrolling="touch";
        cnt.style.touchAction="pan-y";
        ["touchstart","touchmove","wheel","pointerdown"].forEach(function(ev){
          cnt.addEventListener(ev,function(e){ e.stopPropagation(); }, {passive:false});
        });
      }

      host.appendChild(wrap);
      lockScroll();
      if(opts&&typeof opts.onOpen==="function") opts.onOpen(wrap);
    }catch(e){
      console.error("[rv2OpenPanel] Error:",e);
      alert("No se pudo abrir el panel.");
    }
  };
})();
