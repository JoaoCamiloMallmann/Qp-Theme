<?php get_header();
$assets_directory = get_assets();
?>

<main class="home">

  <div class="homeDados">

    <img src="<?= $assets_directory . '/img/QP/logoSimples.png' ?>" alt="LogoQP">

    <h1 data-aos="fade-left">quebrando padrões</h1>

    <p data-aos="fade-left" data-aos-duration="1200">Potencialize sua presença online conosco</p>

    <div class="homeBotoes">

      <a href="#Sites">
        <button data-aos="fade-up" data-aos-duration="1200">Criação de sites</button>
      </a>
      <a href="#Gestão-De-Media-Social">
        <button data-aos="fade-up" data-aos-duration="2000">Gestão de mídias sociais</button>
      </a>
      <a href="#Diferencial">
        <button data-aos="fade-up" data-aos-duration="1800">Diferencial</button>
      </a>

    </div>

  </div>


</main>

<section class="sectionSites" id="Sites">

  <div>
    <h2>Sites</h2>
    <p>
      Oferecemos design e desenvolvimento de sites. Nossa equipe altamente qualificada está pronta para fazer as modificações necessárias para melhor atender às suas necessidades e objetivos. Além disso, analisamos sites de empresas e enviamos feedbacks...
    </p>
  </div>

  <div>
    <img src="<?= $assets_directory . '/img/Sites/siteImoveis.png' ?>" alt="ImgSite1">

    <img src="<?= $assets_directory . '/img/Sites/siteTeste.png' ?>" alt="ImgSite2">
  </div>

</section>

<section class="gestaoDeMidia" id="Gestão-De-Media-Social">

  <h2>Gestão de mídias sociais </h2>

  <div>
    <img src="<?= $assets_directory . '/img/GestaoMidia/profile/InstaLegadoAntes.png' ?>" alt="Instagram1" data-instagram-img="1" data-open-instagram='1'>

    <!-- <img src="<?= $assets_directory . '/img/GestaoMidia/profile/InstaPizzaAntes.png' ?>" alt="Instagram2" data-instagram-img="2"> -->


    <p>
      Aqui vamos além de simplesmente realizar postagens nas redes sociais. Nós cuidamos de todos os aspectos para impulsionar o engajamento e atrair mais pessoas para o seu perfil no Instagram.
      <br />
      Além de criar conteúdo relevante e envolvente, também aprimoramos a estética do seu perfil. Isso inclui otimizar a bio para transmitir a mensagem certa e criar destaques atrativos para destacar os melhores aspectos do seu negócio.

      <button class="toqueQP" data-toque-QP-gestao>
        Toque Da QP
      </button>
    </p>


  </div>

</section>

<section class="gestaoDeMidiaPart2">

  <div>
    <img data-instagram-post="1" src="<?= $assets_directory . '/img/GestaoMidia/cards/ft1.jpg' ?>" alt="card1">

    <img data-instagram-post="2" src="<?= $assets_directory . '/img/GestaoMidia/cards/ft2.jpg' ?>" alt="card2">

    <img data-instagram-post="3" src="<?= $assets_directory . '/img/GestaoMidia/cards/ft3.jpg' ?>" alt="card3">

  </div>

  <button class="toqueQP" data-toque-QP-midia>
    Toque Da QP
  </button>

  <div>
    <img data-instagram-post="4" src="<?= $assets_directory . '/img/GestaoMidia/cards/ft4.jpg' ?>" alt="card4">

    <img data-instagram-post="5" src="<?= $assets_directory . '/img/GestaoMidia/cards/ft5.jpg' ?>" alt="card5">

    <img data-instagram-post="6" src="<?= $assets_directory . '/img/GestaoMidia/cards/ft6.jpg' ?>" alt="card6">

  </div>

</section>

<section class="diferencial" id="Diferencial">

  <div>

    <h2>Diferencial </h2>

    <p>
      O <span> atendimento personalizado </span> é uma prioridade absoluta. Valorizamos a relação com nossos clientes e buscamos sempre deixá-los <span> à vontade </span> e completamente satisfeitos. Nossos canais de comunicação, seja via <span> WhatsApp ou Direct,</span> são espaços onde não apenas atendemos suas demandas, mas também cultivamos uma<span> relação de amizade e parceria</span>.
    </p>

  </div>

</section>

<section class="contato">

  <h2> Entre em Contato </h2>

  <span>
    <h3> Repasse essas informações na mensagem: </h3>
    <ul>
      <li><i class="bi bi-person-square"></i> Seu nome</li>
      <li><i class="bi bi-pen"></i> Tipo do serviço</li>
      <li><i class="bi bi-briefcase"></i> Seu ramo de atuação</li>
    </ul>
  </span>

  <div>
    <p>
      Chame por aqui:
    </p>

    <a href="https://api.whatsapp.com/send?phone=555198736490&text=Seu nome, tipo do serviço e seu ramo de atuação" title="(51) 9 9873-6490">
      <i class="bi bi-whatsapp"></i>
      <span>(51) 9 9873-6490</span>
    </a>

    <a href="https://www.instagram.com/qp_servicosweb/" title="@qp_servicosweb">
      <i class="bi bi-instagram"></i>
      <span>@qp_servicosweb</span>
    </a>
    <a href="mailto:atendimento@qpservicos.com" title="atendimento@qpservicos.com">
      <i class="bi bi-envelope"></i>
      <span>atendimento<br>@qpservicos.com</span>
    </a>

  </div>


</section>

<?php get_footer(); ?>

<script>
  AOS.init({
    once: true,
  });


  function handleToqueGestaoClick() {
    const elements = document.querySelectorAll('[data-toque-QP-gestao]');
    elements.forEach(element => {
      element.addEventListener('click', function() {
        this.classList.toggle('active');
        if (this.classList.contains('active')) {
          document.querySelector("[data-instagram-img='1']").src = "<?= $assets_directory ?>/img/GestaoMidia/profile/InstaLegadoDepois.png";
          document.querySelector("[data-instagram-img='2']").src = "<?= $assets_directory ?>/img/GestaoMidia/profile/InstaPizzaDepois.png";
        } else {
          document.querySelector("[data-instagram-img='1']").src = "<?= $assets_directory ?>/img/GestaoMidia/profile/InstaLegadoAntes.png";
          document.querySelector("[data-instagram-img='2']").src = "<?= $assets_directory ?>/img/GestaoMidia/profile/InstaPizzaAntes.png";
        }
      });
    });
  }

  document.querySelectorAll("[data-toque-QP-midia]").forEach(function(element) {
    element.addEventListener("click", function() {

      this.classList.toggle("active");
      document.querySelectorAll("*[data-instagram-post]").forEach(function(postElement) {
        postElement.classList.toggle("active");
      });

      if (this.classList.contains("active")) {
        for (let i = 1; i <= 6; i++) {
          document.querySelector(`[data-instagram-post='${i}']`).setAttribute("src", "<?= $assets_directory ?>/img/GestaoMidia/cards/newft" + i + ".png");
          document.querySelector(`[data-instagram-post='${i}']`).style.display = "block";
        }
      } else {
        for (let i = 1; i <= 6; i++) {
          document.querySelector(`[data-instagram-post='${i}']`).setAttribute("src", "<?= $assets_directory ?>/img/GestaoMidia/cards/ft" + i + ".jpg");
        }
      }
    });
  });




  document.addEventListener('DOMContentLoaded', function() {
    const whatsappIcon = document.querySelector('.whatsapp-icon');
    const instagramIcon = document.querySelector('.instagram-icon');
    const emailIcon = document.querySelector('.email-icon');

    if (whatsappIcon) {
      whatsappIcon.addEventListener('mouseover', function() {});
    }

    if (instagramIcon) {
      instagramIcon.addEventListener('mouseover', function() {});
    }

    if (emailIcon) {
      emailIcon.addEventListener('mouseover', function() {});
    }

    handleToqueGestaoClick();
    handleToqueMidiaClick();
  });
</script>