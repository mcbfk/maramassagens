<?php get_header(); ?>

    <section class="inicio" id="inicio">
      <div class="box-text">
        <h1>O toque da experiência para seu bem-estar</h1>
        <p>Transforme seu bem-estar com as massagens personalizadas de Mara. Com mais de uma década de experiência, proporcionamos um ambiente acolhedor para um relaxamento profundo e renovador.</p>
        <a href="https://wa.me/5516997945011" target="_blank" class="botao-agendar">Agende Sua Sessão</a>
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
    <section class="sobre" id="sobre">
      <h2>Sobre</h2>
      <div>
        <img class="" src="<?php bloginfo('template_url'); ?>/img/imagem-sobre.png" alt="Mulher de brucos recebendo massagem na sessao sobre" />
        <p>
          Com anos de experiência no setor de massagens, minha missão é proporcionar um atendimento de qualidade que promova relaxamento e bem-estar. Localizada em São Carlos, ofereço um serviço personalizado e adaptado às necessidades individuais de cada cliente.<br><br>
          Utilizo uma abordagem que combina técnicas de massagem para aliviar o estresse, a tensão muscular e promover um sentimento geral de revitalização. Cada sessão é pensada para oferecer uma experiência relaxante e revigorante.<br><br>
          Para aprimorar a sua experiência, trabalho com uma variedade de produtos de alta qualidade, incluindo óleos essenciais, óleo de coco e cremes específicos. Esses produtos são escolhidos para potencializar os efeitos da massagem, proporcionando um cuidado ainda mais completo e eficaz.<br><br>
          Meu compromisso é garantir que você se sinta confortável e valorizado durante cada visita. Trabalho para criar um ambiente acolhedor, onde cada detalhe é pensado para o seu máximo conforto e satisfação.<br><br>
          Se você está em busca de um momento de relaxamento e cuidado, estou aqui para ajudar. Entre em contato para agendar sua sessão e experimentar os benefícios de uma massagem profissional em São Carlos!
        </p>
      </div>
    </section>
    <section class="servicos" id="servicos">
      <h2>Serviços</h2>
      <div class="cards">
        <div class="card" data-bs-target="#tantrica" data-bs-toggle="modal">
          <h3>Massagem tântrica</h3>
          <img src="<?php bloginfo('template_url'); ?>/img/img-massagem-tantrica.png" alt="" />
          <p>Revitalize seu corpo e mente com nossa massagem relaxante. Sinta o alívio do estresse e a serenidade em cada toque. Agende seu momento de tranquilidade hoje mesmo!</p>
          <button>Clique para ver mais</button>
        </div>
        <div class="card" data-bs-target="#relaxante" data-bs-toggle="modal">
          <h3>Massagem relaxante energética</h3>
          <img src="<?php bloginfo('template_url'); ?>/img/img-massagem-relaxante.png" alt="" />
          <p>Revitalize seu corpo e mente com nossa massagem relaxante. Sinta o alívio do estresse e a serenidade em cada toque. Agende seu momento de tranquilidade hoje mesmo!</p>
          <button>Clique para ver mais</button>
        </div>
        <div class="card" data-bs-target="#reike" data-bs-toggle="modal">
          <h3>Reike</h3>
          <img src="<?php bloginfo('template_url'); ?>/img/img-reike.png" alt="" />
          <p>Revitalize seu corpo e mente com nossa massagem relaxante. Sinta o alívio do estresse e a serenidade em cada toque. Agende seu momento de tranquilidade hoje mesmo!</p>
          <button>Clique para ver mais</button>
        </div>
        <div class="card" data-bs-target="#tise" data-bs-toggle="modal">
          <h3>Tise</h3>
          <img src="<?php bloginfo('template_url'); ?>/img/img-tise.png" alt="" />
          <p>Revitalize seu corpo e mente com nossa massagem relaxante. Sinta o alívio do estresse e a serenidade em cada toque. Agende seu momento de tranquilidade hoje mesmo!</p>
          <button>Clique para ver mais</button>
        </div>
      </div>
    </section>
    <section class="testemunhas" id="testemunhas">
      <h2>Testemunhas</h2>
      <?php
        dynamic_sidebar('Barra lateral1');
      ?>
    </section>
  <section class="contato" id="contato">
    <img src="<?php bloginfo("template_url")?>/img/background-contato.png" alt="" class="background" />
    <div class="contato-content">
        <h2>Contato</h2>
        <div class="box-contato">
            <div class="box-contato-text">
                <h3>
                    Quer saber mais sobre nossos serviços ou agendar uma sessão de massagem? É só nos enviar uma mensagem direta aqui no Instagram ou usar os canais abaixo:
                </h3>
                <div class="sociais">  
                    <!-- SVGs -->
                </div>
            </div>
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d755.496434166354!2d-47.90874246224305!3d-22.008539664627627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94b870b3a111a423%3A0x4cf98d0e3e173af1!2sR.%20Flauzino%20Marques%2C%20215%20-%20Jardim%20Alvorada%2C%20S%C3%A3o%20Carlos%20-%20SP%2C%2013562-002!3m2!1d-22.0084847!2d-47.9085289!5e0!3m2!1spt-BR!2sbr!4v1681418132903!5m2!1spt-BR!2sbr" width="500" height="500" frameborder="0" allowfullscreen zoom="true"></iframe>
            </div>
        </div>
    </div>
</section>

    
<?php get_footer(); ?>