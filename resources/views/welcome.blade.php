<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Mogno Engenharia & Consultoria</title>
    <!--Botstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Bootstrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!--Script Popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!--CSS do projeto-->
    <link href="{{asset('css/global.css')}}" rel="stylesheet" type="text/css" />
    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

  <style>
    #navbar-items {
          background-color: #334020 !important;
        }
    @media (max-width: 700px) {
       .logo {
        display: none;
       }
        .tit-2 {
          font-size: 3.5em;
        }

        .header {
          padding-top: 6.5em;
        }
      }

      
  </style>
  
  

</head>
<body>
  <!--
  <a href="https://wa.me/559987147718?text=Bom%20dia!%20Quero%20de%20agendar%20uma%20consulta." class="float" target="_blank">
  <div class="text-center">
    <i class="bi bi-whatsapp my-float"></i>
  </div>
</a>
  -->
  <a href="https://wa.me/553387147718?text=Bom%20dia!%20Quero%20de%20agendar%20uma%20consulta." class="float" target="_blank"> 
      <button id="whatsapp01" class="bi bi-whatsapp wpp-button"></button>
   </a>
    <x-nav-bar-component />
    <div class="header" style="margin-top: 3%;" id="home">
            <div class="row">
                <div class="col-md-6">
                    <h1 class='tit-2'>Engenharia & Consultoria</h1>
                    <p class="text-justify"> A Mogno Engenharia & Consultoria foi fundada em 1985, com o nome de CVJ - Construtora do Vale do Jequitinhonha Ltda, com objetivo de construtora, porém no seu decorrer passou a empresa de consultoria e prestação de serviços nas áreas de projetos e avaliações de engenharia. Em 2014 a CVJ, torna-se Mogno, e seu objetivo firma na área de prestação de serviços de engenharia, e energia solar se torna carro chefe para empresa. Sempre com foco em qualidade e viabilidade econômica.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-info-def">
                                Telefone Comercial
                            </h6>
                            <h6 class="info">
                                <i class="fas fa-phone-alt"></i> <font class="tel">(33) 98714-7718</font>
                            </h6>
                        </div>
                    </div>
                    <br />
                    <h6 class="text-info-def">
                        Endereço
                    </h6>
                    <h6 class="info">
                        <i class="fas fa-map-marker"></i> R. Aleixo Paraguassu, 454, Centro - Almenara/MG
                    </h6>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/logo-mogno-100-png.png') }}" style="width: 80%" class="logo">
                </div>
            </div>
        </div>
        <!--Cards Nossos Serviços-->
        <!--
        <div class="barra" id="servicos">
          <div class="mb-3">
          <h2 class="servicos" >Nossos Serviços</h2>
          </div>
          <div class="container">
            <div class="teste">
            <div class="row g-3">
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{asset('img/img-1.png')}}" alt="">
                    <div class="card-body">
                      <h3>Energia Solar</h3>
                      <ul>
                        <li>Consultoria</li>
                        <li>Orçamento</li>
                        <li>Planejamento</li>
                        <li>Financiamento</li>
                        <li>Execução</li>
                        <li>Monitoramento</li>
                        <br>
                        <br>
                      </ul>

                    </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{asset('img/img-2.png')}}" alt="">
                    <div class="card-body">
                      <h3>Consultoria & Engenharia</h3>
                      <ul>
                        <li>Laudos</li>
                        <li>Avaliações</li>
                        <li>Consultoria</li>
                        <li>Acompanhamento de obras</li>
                        <li>Projetos</li>
                        <li>Orçamentos</li>
                        <li>Planejamentos</li>
                        <li>Vistorias</li>
                      </ul>

                    </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="{{asset('img/img-3.png')}}" alt="">
                    <div class="card-body">
                      <h3>Comércio de Imóveis</h3>
                      <ul>
                        <li>Consultoria</li>
                        <li>Avaliação</li>
                        <li>Análise de Documentação</li>
                        <li>Vendas</li>
                        <br>
                        <br>
                        <br>
                        <br>
                      </ul>

                    </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div> 
-->
        <!--Serviços-2-->
        <div class="barra" id="services">
        <section class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nossos Serviços</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-mortarboard-fill"></i></div>
              <h4>Projetos Civis</h4>
              <p>A atividade de projetos refere-se ao gerenciamento e execução de projetos arquitetônicos, fundações, estruturais e complementares. Sempre com excelência nesta etapa decisiva.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-android2"></i> </div>
              <h4>Administração de Obras</h4>
              <p>A consultoria da área de administração de obras inclui produção de memorial descritivo, orçamento, planejamento e acompanhamento de obras privadas, visando tranqüilizar o cliente e proporcioná-lo um serviço concreto e com qualidade.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bag-heart"></i></div>
              <h4>Avaliação de Imóveis</h4>
              <p>A avaliação imobiliária é uma atividade regulamentada pelo CREA e ABNT, sendo uma área ampla com estratégias precisas para a busca de valores de mercado. São várias as finalidades de uma avaliação imobiliária e incluiu valor de venda, compra, partilha de bens, regularização, hipoteca, valor de locação, e etc. Realizamos analise minuciosa do mercado afim de obter resultados precisos.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bank2"></i></div>
              <h4>Consultoria Pública</h4>
              <p>A consultoria pública é a área visa contribuir com o crescimento ordenado dos municípios do norte de Minas, e inicia com diagnóstico das cidades e formulação de soluções de curto, médio e longo prazo nas diversas áreas da engenharia. Gerenciamento e execução de planos diretores, projetos de saneamento básico, pavimentação e equipamentos públicos estão englobadas nesta atividade.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bandaid-fill"></i></div>
              <h4>Energia Solar</h4>
              <p>Dedicada a reduzir as pegadas de carbono e a promover um futuro mais verde, a nossa equipe de especialistas utiliza tecnologia de ponta para fornecer soluções energéticas limpas, confiáveis e rentáveis para casas, empresas e instalações rurais.</p>
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-bank2"></i></div>
              <h4>Consultoria Pública</h4>
              <p>A consultoria pública é a área visa contribuir com o crescimento ordenado dos municípios do norte de Minas, e inicia com diagnóstico das cidades e formulação de soluções de curto, médio e longo prazo nas diversas áreas da engenharia. Gerenciamento e execução de planos diretores, projetos de saneamento básico, pavimentação e equipamentos públicos estão englobadas nesta atividade.</p>
            </div>
          </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-binoculars-fill"></i></div>
              <h4>Divera don</h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    </div>

    <!--Porque nos escolher?-->

    <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5" id="por-que-nos-escolher">
        <div class="container  pb-lg-0">
            <div class="mx-auto text-center mb-3 pb-2" style="max-width: 600px;">
                <h1 class="display-5 text-dark">Por que nos escolher?</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="text-dark mb-5">
                        <div class="bg-light rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-award-fill i-choose"></i>
                        </div>
                        <h4 class="text-dark">Atendimento Personalizado</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                    <div class="text-dark">
                        <div class="bg-light rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-calendar-check-fill i-choose"></i>
                        </div>
                        <h4 class="text-dark">Orçamento Prévio</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                        <p>At et justo elitr amet sea at. Magna et sit vero at ipsum sit et dolores rebum. Magna sea eos sit dolor, ipsum amet no tempor ipsum eirmod lorem eirmod diam tempor dolor eos diam et et diam dolor ea. Clita est rebum amet dolore sit. Dolor stet dolor duo clita, vero dolor ipsum amet dolore magna lorem erat stet sed vero dolor</p>
                        <img class="img-fluid img-choose" src="{{asset('img/img-1.png')}}">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="text-dark mb-5">
                        <div class="bg-light rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-car-front-fill i-choose"></i>
                        </div>
                        <h4 class="text-dark">Visita a obras</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                    <div class="text-dark">
                        <div class="bg-light rounded-pill d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="bi bi-chat-right-dots-fill i-choose"></i>
                        </div>
                        <h4 class="text-dark">Tira-dúvidas 24/7</h4>
                        <p class="mb-0">Labore justo vero ipsum sit clita erat lorem magna clita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Time de pessoas-->

    <div class="container-fluid pt-5 barra-2" id="time">
      <div class="container">
        <div class="text-center pb-2">
          <h1 class="mb-4 text-white">Responsáveis Técnicos</h1>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="{{asset('img/resp-2.png')}}" alt="" />
            </div>
            <h4 class="text-white">Aderbal Almeida</h4>
            <h5 class="text-white">Engenheiro Civil</h5>
            <h5 class="text-white">CREA 6.609/D-MG</h5>
          </div>
          <div class="col-md-6 col-lg-3 text-center team mb-5 ml-4">
            <div
              class="position-relative overflow-auto mb-4"
              style="border-radius: 100%"
            >
              <img class="img-fluid w-100" src="{{asset('img/guilherme.png')}}" alt="" />
            </div>
            <h4 class="text-white">Guilherme Sales</h4>
            <h5 class="text-white">Engenheiro Civil</h5>
            <h5 class="text-white">CREA 131.702/D-MG</h5>
          </div>
        </div>
      </div>
    </div>

    <!--FAQ-->
    <section id="duvidas" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="title-fac">
          <h3>Perguntas Frequentes</h3>
          <p>Aqui você pode tirar suas dúvidas a respeito da nossa instalação de enrgia de solar.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">É possível monitorar a produção de energia solar? <i class="bi bi-chevron-down icon-show" id="icones-chevron" ></i><i class="bi bi-chevron-up icon-close" id="icones-chevron"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Sim, por meio de um inversor fotovoltaico que possa ser conectado à internet. Dessa forma, é possível acompanhar a produção em tempo real, inclusive por meio de dispositivos móveis como smartphones e tablets.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">O sistema fotovoltaico, uma vez instalado, dura para sempre?<i class="bi bi-chevron-down icon-show" id="icones-chevron"></i><i class="bi bi-chevron-up icon-close" id="icones-chevron"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Se os equipamentos forem de qualidade e bem cuidados, podem durar 25 anos ou até mais, chegando a 50 anos. Após esse período, o sistema continua funcionando, mas reduzindo a eficiência com o tempo. Em geral, perde-se 20% de eficiência em 25 anos.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Como é feita a manuntenção do sistema fotovoltaico? <i class="bi bi-chevron-down icon-show" id="icones-chevron"></i><i class="bi bi-chevron-up icon-close" id="icones-chevron"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Basta limpar os panéis solares quando necessário com água e um pano, geralmente uma vez ao ano, ou sempre que a placa ficar muito suja por conta de longos períodos de chuva.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">O sistema fotovoltaico produz energia durante a noite? <i class="bi bi-chevron-down icon-show" id="icones-chevron"></i><i class="bi bi-chevron-up icon-close" id="icones-chevron"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Não, pois precisa de irradiação solar para a energia ser produzida. A produção, portante, é feita durante o dia, mesmo quando estiver nublado.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--Contato-->
    <div
      class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5" id="contato"
    >
      <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
          <a
            href=""
            class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
            style="font-size: 40px; line-height: 40px"
          >
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-white">Mogno</span>
          </a>
          <p>
            Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea
            dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr
            stet diam duo eos rebum ipsum diam ipsum elitr.
          </p>
          <div class="d-flex justify-content-start mt-4">
            <a
              class="btn btn-outline rounded-circle text-center mr-2 px-0 redes"
              style="width: 38px; height: 38px"
              href="https://www.facebook.com/guilhermesaleseng/" target="blank"
              ><i class="bi bi-facebook"></i></a>
            <a
              class="btn btn-outline rounded-circle text-center mr-2 px-0 redes"
              style="width: 38px; height: 38px"
              href="https://www.linkedin.com/in/mogno-engenharia-e-consultoria-ltda-gerenciamento-de-projetos-4171b5230" target="blank"
              ><i class="bi bi-linkedin"></i></a>
            <a
              class="btn btn-outline rounded-circle text-center mr-2 px-0 redes"
              style="width: 38px; height: 38px"
              href="https://www.instagram.com/mogno_engenhariacivil/" target="blank"
              ><i class="bi bi-instagram"></i></a>
              <a
              class="btn btn-outline rounded-circle text-center mr-2 px-0 redes"
              style="width: 38px; height: 38px"
              href="https://wa.link/7k0lbn" target="blank"
              ><i class="bi bi-whatsapp"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h3 class="text-primary mb-4 text-white">Informações</h3>
          <div class="d-flex">
            <h4 class="fa fa-map-marker-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Endereço</h5>
              <p>Aleixo Paraguassu, 454 - Centro</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-envelope text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Email</h5>
              <p>mognoec@gmail.com</p>
            </div>
          </div>
          <div class="d-flex">
            <h4 class="fa fa-phone-alt text-primary"></h4>
            <div class="pl-3">
              <h5 class="text-white">Telefone</h5>
              <p>(33) 9 8714-7718</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 mb-5 text-center">
          <h3 class="text-primary mb-4 text-white ">Localização</h3>
          <iframe class="localizacao" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3831.8043355230616!2d-40.69825868522131!3d-16.179037536842895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x74979980d2a15db%3A0x8d6c2b7dfc347aeb!2sR.%20Aleixo%20Paraguass%C3%BA%2C%20454%20-%20centro%2C%20Almenara%20-%20MG%2C%2039900-000!5e0!3m2!1spt-BR!2sbr!4v1678475609576!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div
        class="container-fluid pt-5"
        style="border-top: 1px solid #334020;"
      >
        <p class="m-0 text-center text-white">
          &copy;
          Mogno Consultoria & Engenharia.
          Todos os direitos reservados.
        </p>
      </div>
    </div>

    <!--Back to Top-->
    

</body>
</html>