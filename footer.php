    <footer class="footer">
        <div class="footer-wrapper">
            <div class="footer-link-wrapper"><a href="" class="footer-link">-トップページ</a></div>
            <div class="footer-link-wrapper"><a href="" class="footer-link">-出版本</a></div>
            <div class="footer-link-wrapper"><a href="" class="footer-link">-占い</a></div>
            <div class="footer-link-wrapper"><a href="" class="footer-link">-記事一覧</a></div>
            <div class="footer-link-wrapper"><a href="" class="footer-link">-お問い合わせ</a></div>
        </div>
        <p class="copy-right">Copyright (c) 2021 Jun Home Page All Rights Reserved.</p>
    </footer>

    <!-- fvのアニメーション -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/89/three.min.js"></script>

      <script id="vertexShader" type="x-shader/x-vertex">
          void main() {
              gl_Position = vec4( position, 1.0 );
          }
      </script>
    
      <!--  参考 http://glslsandbox.com/e#58290.6 -->
            <script id="fragmentShader" type="x-shader/x-fragment">
      // global remix - Del 30/10/2019
      #ifdef GL_ES
      precision highp float;
      #endif

      #extension GL_OES_standard_derivatives : enable

      uniform float time;
      uniform vec2 mouse;
      uniform vec2 resolution;

      float snow(vec2 uv,float scale)
      {
        float _t = time*0.3;
        uv.x+=_t/scale; 
        uv*=scale;
        vec2 s=floor(uv);
        vec2 f=fract(uv);
        vec2 p;
        float k=40.;
        float d;
        p=sin(11.*fract(sin((s+p+scale)*mat2(7,3,6,5))*5.))-f;
        d=length(p);
        k=min(d,k);
        k=smoothstep(0.,k,sin(f.x+f.y)*0.003); // particleの大きさ
        return k;
      }

      void main(void){
        vec2 uv=(gl_FragCoord.xy*2.-resolution.xy)/min(resolution.x,resolution.y); 
        // uv.x += sin(time*0.001);
        //uv.y += sin(uv.x*1.4)*0.2;
        // uv.x *= 0.005;
        float c=0.0;
        c+=snow(uv,5.);
        c+=snow(uv,10.);
        c+=snow(uv,20.);
        c+=snow(uv,30.);
        c+=snow(uv,40.);
        vec3 finalColor=(vec3(0.9,0.8,0.99))*c*30.0;
        gl_FragColor = vec4(finalColor,1);
      }
      </script>
      
    <?php wp_footer(); ?>
</body>
</html>