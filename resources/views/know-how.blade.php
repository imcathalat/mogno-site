<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know How</title>
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
    <link rel="shortcut icon" href="{{asset('img/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
</head>

<body>
    <a href="https://wa.me/553387147718?text=Bom%20dia!%20Quero%20de%20agendar%20uma%20consulta." class="float" target="_blank"> 
      <button id="whatsapp01" class="bi bi-whatsapp wpp-button"></button>
   </a>
   <x-nav-bar-know-how />
   <!--
    <section class="know-how">
   <div class="container barra-3" data-aos="fade-up">
        <div>
            <h2 class="title-how">Know How</h2>
            <h4>O corpo técnico da empresa, inclusive o diretor executivo e o presidente, possui know how em obras industriais com ênfase nas áreas de gerenciamento e produção como também em obras de equipamentos públicos, comerciais e residenciais.
            </h4>
            <h4>Ente as maiores obras apresentamos alguns destaques.</h4>
        </div>

        <div>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/2-csm/ph-1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        <strong>Cliente:</strong> Companhia Siderurgica Belgo Mineira
                    </p>
                    <p class="card-text">
                        <b>Empresa:</b> Christianni e Nielsen Engenheiros Construtores S/A
                    <p>
                    <p class="card-text">
                        <strong>Ano:</strong> 72 a 73
                    </p>
                </div>
            </div>
        </div>
   </div>
   </section>
   -->
   <div class="container-xxl py-5 barra-3">
        <div class="container">
            <div class=" mx-auto mb-5 wow" style="max-width: 600px;">
                <h1 class=" text-center">Know How</h1>
            </div>
            <h5>O corpo técnico da empresa, inclusive o diretor executivo e o presidente, possui know how em obras industriais com ênfase nas áreas de gerenciamento e produção como também em obras de equipamentos públicos, comerciais e residenciais.</h5>
            <h5 class="mb-4">Entre as maiores obras apresentamos alguns destaques:</h5>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/2-csm.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3"> Companhia Siderurgica Belgo Mineira</h4>
                            <p>Empresa: Christianni e Nielsen Engenheiros Construtores S/A</p>
                            <P>Ano: 72 a 73</P>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/3-white.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3">White Martins</h4>
                            <p>Cliente: Grubima S/A Projetos e Construções</p>
                            <p>Ano: 73 a 75</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/4-samarco.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3">Samarco Mineração S/A Projetos e Construções</h4>
                            <p>Empresa: Mascarenhas Barbosa Roscoe S/A.</p>
                            <p>Ano: 75 a 77</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/5-alcominas.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3">Alcominas - CIA Mineira de Alumínio</h4>
                            <p>Empresa: Mascarenhas Barbosa Roscoe S/A.</p>
                            <p>Ano: 77 a 78</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/6-cst.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3">Companhia Siderurgica de Tubarão</h4>
                            <p>Empresa: Companhia Siderurgica de Tubarão</p>
                            <p>Ano: 79 a 86</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/7-yamana.jpeg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3">Yamana Gold Inc.</h4>
                            <p>Empresa: M.Roscoe</p>
                            <p>Ano: 2011</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/8-kinross.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3">Kinross Brasil Mineração S/A.</h4>
                            <p>Empresa: M.Roscoe LTDA</p>
                            <p>Ano: 2011</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/9-taquaril.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3">Urbel - Belo Horizonte</h4>
                            <p>Empresa: Consominas</p>
                            <p>Ano: 2012</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/know-how/10-sre.jpeg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <h4 class="mb-3 mt-3">Superindência de Ensino de Almenara</h4>
                            <p>Empresa: Minas Gerais Serviços S/A.</p>
                            <p>Ano: 2012 a 2014</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>