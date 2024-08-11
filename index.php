<?php get_header(); ?>

    <section class="inicio">
      <div class="box-text">
        <h1>O toque da experiência para seu bem-estar</h1>
        <p>Transforme seu bem-estar com as massagens personalizadas de Mara. Com mais de uma década de experiência, proporcionamos um ambiente acolhedor para um relaxamento profundo e renovador.</p>
        <button class="botao-agendar">Agende Sua Sessão</button>
      </div>
      <div>
        <img src="<?php bloginfo('template_url'); ?>/img/avatar-inicio.png" class="img-avatar" alt="Imagem da silmara na inicio do site mara massagens" />
      </div>
      <div class="btnLow">
        <p>Clique para Descer</p>
        <img src="<?php bloginfo('template_url'); ?>/img/botao.png" alt="Botao para descer do inicio mara massagens">
      </div>
      <img src="<?php bloginfo('template_url'); ?>/img/separador.png" class="separador" alt="Separador inicio mara massagens">
    </section>
    <section class="sobre">
      <h2>Sobre</h2>
      <div>
        <img class="" src="<?php bloginfo('template_url'); ?>/img/imagem-sobre.png" alt="Mulher de brucos recebendo massagem na sessao sobre" />
        <p>Com anos de experiência no setor de massagens, minha missão é proporcionar um atendimento de qualidade que promova relaxamento e bem-estar. Localizada em São Carlos, ofereço um serviço personalizado e adaptado às necessidades individuais de cada cliente.
          <br /><br />
          Utilizo uma abordagem que combina técnicas de massagem para aliviar o estresse, a tensão muscular e promover um sentimento geral de revitalização. Cada sessão é pensada para oferecer uma experiência relaxante e revigorante.
          <br /><br />
          Meu compromisso é garantir que você se sinta confortável e valorizado durante cada visita. Trabalho para criar um ambiente acolhedor, onde cada detalhe é pensado para o seu máximo conforto e satisfação.
          <br /><br />
          Se você está em busca de um momento de relaxamento e cuidado, estou aqui para ajudar. Entre em contato para agendar sua sessão e experimentar os benefícios de uma massagem profissional em São Carlos! </p>
      </div>
    </section>
    <section class="servicos">
      <h2>Serviços</h2>
      <div class="cards">
        <div class="card">
          <h3>Massagem tântrica</h3>
          <img src="<?php bloginfo('template_url'); ?>/img/img-massagem-tantrica.png" alt="" />
          <p>Revitalize seu corpo e mente com nossa massagem relaxante. Sinta o alívio do estresse e a serenidade em cada toque. Agende seu momento de tranquilidade hoje mesmo!</p>
        </div>
        <div class="card">
          <h3>Massagem relaxante energética</h3>
          <img src="<?php bloginfo('template_url'); ?>/img/img-massagem-relaxante.png" alt="" />
          <p>Revitalize seu corpo e mente com nossa massagem relaxante. Sinta o alívio do estresse e a serenidade em cada toque. Agende seu momento de tranquilidade hoje mesmo!</p>
        </div>
        <div class="card">
          <h3>Reike</h3>
          <img src="<?php bloginfo('template_url'); ?>/img/img-reike.png" alt="" />
          <p>Revitalize seu corpo e mente com nossa massagem relaxante. Sinta o alívio do estresse e a serenidade em cada toque. Agende seu momento de tranquilidade hoje mesmo!</p>
        </div>
        <div class="card">
          <h3>Tise</h3>
          <img src="<?php bloginfo('template_url'); ?>/img/img-tise.png" alt="" />
          <p>Revitalize seu corpo e mente com nossa massagem relaxante. Sinta o alívio do estresse e a serenidade em cada toque. Agende seu momento de tranquilidade hoje mesmo!</p>
        </div>
      </div>
    </section>
    <section class="testemunhas">
      <h2>Testemunhas</h2>
      <?php
        dynamic_sidebar('Barra lateral1');
      ?>
    </section>
    <section class="contato">
      <h2>Contato</h2>
      <div class="box-contato">
        <div class="box-contato-text">
          <h3>
            Quer saber mais sobre nossos serviços ou agendar uma sessão de massagem? É só nos enviar uma mensagem direta aqui no Instagram ou usar os canais abaixo:
          </h3>
          <div class="sociais">  
            <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 16 16" id="Facebook"><path fill="#000" fill-rule="evenodd" d="M12 5.5H9v-2a1 1 0 0 1 1-1h1V0H9a3 3 0 0 0-3 3v2.5H4V8h2v8h3V8h2l1-2.5z" clip-rule="evenodd" class="color1976d2 svgShape"></path></svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 16 16" id="Instagram"><path d="M11 0H5a5 5 0 0 0-5 5v6a5 5 0 0 0 5 5h6a5 5 0 0 0 5-5V5a5 5 0 0 0-5-5zm3.5 11c0 1.93-1.57 3.5-3.5 3.5H5c-1.93 0-3.5-1.57-3.5-3.5V5c0-1.93 1.57-3.5 3.5-3.5h6c1.93 0 3.5 1.57 3.5 3.5v6z" fill="#000" class="color000000 svgShape"></path><path d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm0 6.5A2.503 2.503 0 0 1 5.5 8c0-1.379 1.122-2.5 2.5-2.5s2.5 1.121 2.5 2.5c0 1.378-1.122 2.5-2.5 2.5z" fill="#000" class="color000000 svgShape"></path><circle cx="12.3" cy="3.7" r=".533" fill="#000" class="color000000 svgShape"></circle></svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="20px" viewBox="0 0 48 48" id="Whatsapp"><path fill="#000" fill-rule="evenodd" d="M23.993 0C10.763 0 0 10.765 0 24a23.824 23.824 0 0 0 4.57 14.067l-2.99 8.917 9.224-2.948A23.81 23.81 0 0 0 24.007 48C37.237 48 48 37.234 48 24S37.238 0 24.007 0h-.014zm-6.7 12.19c-.466-1.114-.818-1.156-1.523-1.185a13.55 13.55 0 0 0-.804-.027c-.918 0-1.877.268-2.455.86-.705.72-2.454 2.398-2.454 5.841s2.51 6.773 2.849 7.239c.353.465 4.895 7.632 11.947 10.553 5.515 2.286 7.152 2.074 8.407 1.806 1.834-.395 4.133-1.75 4.711-3.386.579-1.637.579-3.034.41-3.33-.17-.296-.636-.465-1.34-.818-.706-.353-4.134-2.046-4.783-2.272-.634-.24-1.24-.155-1.72.522-.677.946-1.34 1.905-1.876 2.483-.423.452-1.115.509-1.693.268-.776-.324-2.948-1.086-5.628-3.47-2.074-1.849-3.484-4.148-3.893-4.84-.41-.705-.042-1.114.282-1.495.353-.438.691-.748 1.044-1.157.352-.41.55-.621.776-1.1.24-.466.07-.946-.1-1.3-.168-.352-1.579-3.795-2.157-5.191z" class="color67c15e svgShape"></path></svg>
          </div>
        </div>
        <div class="maps">
          <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d755.496434166354!2d-47.90874246224305!3d-22.008539664627627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94b870b3a111a423%3A0x4cf98d0e3e173af1!2sR.%20Flauzino%20Marques%2C%20215%20-%20Jardim%20Alvorada%2C%20S%C3%A3o%20Carlos%20-%20SP%2C%2013562-002!3m2!1d-22.0084847!2d-47.9085289!5e0!3m2!1spt-BR!2sbr!4v1681418132903!5m2!1spt-BR!2sbr"  width="500" height="500" frameborder="0" allowfullscreen zoom="true"></iframe>
        </div>
      </div>
    </section>
    
<?php get_footer(); ?>