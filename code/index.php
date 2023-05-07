
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>La Mole Convention</title>
    <meta id='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/main.css'>
    <link rel='stylesheet' href='css/grid.css'>

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <meta id="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

    <div class="parent">
        <div class="barra">
                    <div class="is-nowrap is-layout-flex wp-container-1 wp-block-group">
                        <div class= "menu">
                            <h1>
                                    Menú
                            </h1>
                        </div>
                        <div class="wp-block-site-logo">
                            <a href="#" class="custom-logo-link" rel="home" aria-current="page">
                                <img loading="lazy" width="80" height="200" src="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-LaMole.png?fit=600%2C1355&amp;ssl=1"/>
                            </a>
                        </div>
                        <figure class="wp-block-image size-thumbnail">
                            <a href="#aniversario">
                                <img decoding="async" loading="lazy" width="200" height="153" src="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-LaMole_25th.png?fit=96%2C96&amp;ssl=1" alt="" class="wp-image-5249" srcset="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-LaMole_25th.png?w=600&amp;ssl=1 600w, https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-LaMole_25th.png?resize=300%2C237&amp;ssl=1 300w" sizes="(max-width: 600px) 100vw, 600px"/>
                            </a>
                        </figure>
                        <figure class="wp-block-image size-full is-resized">
                            <a href="#horror">
                                <img decoding="async" loading="lazy" src="https://lamole.com.mx/wp-content/uploads/2022/05/Logotopo-LaMoleHorrorEdition.png" alt="" class="wp-image-9047" width="120" height="100"/>
                            </a>
                        </figure>
                        <figure class="wp-block-image size-full is-resized">
                            <a href="#cosplay">
                                <img decoding="async" src="https://lamole.com.mx/wp-content/uploads/2023/02/Logo-FCCC_2023_Transparente.png" alt="" class="wp-image-16566" width="120" height="100"/>
                            </a>
                        </figure>
                    </div>
                    <div class="btnEntradas">
                        <div class="wrapper">
                            <a class="button" href="https://lamole-2023.boletia.com/">BOLETOS</a>
                        </div>
                        <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <defs>
                                <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                                </filter>
                            </defs>
                        </svg>

                    </div>
                    <div class="btnFAQS">
                        <div class="wrapper">
                            <a class="button" href="#faqs">FAQS</a>
                        </div>
                        <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <defs>
                                <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                                </filter>
                            </defs>
                        </svg>
                        <a href="#footer">
                            <img decoding="async" loading="lazy" width="100" height="50" src="https://lamole.com.mx/wp-content/uploads/2022/11/Logotipo_Blanco.png" alt="" class="wp-image-13823"/>
                        </a>
    
                        <a href="https://www.wtcmexico.mx/" target="_blank" rel="noopener">
                            <img decoding="async" loading="lazy" width="100" height="50" src="https://lamole.com.mx/wp-content/uploads/2022/01/Logotipo-WTC-300x103.png" alt="" class="wp-image-5252" srcset="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-WTC.png?resize=300%2C103&amp;ssl=1 300w, https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/01/Logotipo-WTC.png?w=600&amp;ssl=1 600w" sizes="(max-width: 300px) 100vw, 300px"/>
                        </a>
    
                        <img decoding="async" loading="lazy" width="100" height="50" src="https://lamole.com.mx/wp-content/uploads/2022/11/Fechas_2023_JimLee.png" alt="" class="wp-image-13822"/>
                    </div>
        </div>

        <header class="header" data-aos="fade-in">
                <p class= "visitas">
                <?php
                    require 'conexion.php';
                ?>
                </p>
        </header>

        <body> 
            <div class = "container">
                
                <center>
                    <div class="titulo_pagina" data-aos="fade-in">
                        <h2>
                            <strong>
                                ¿DÓNDE Y CUÁNDO?
                            </strong>
                        </h2>
                    </div>
    
                    <div class="imagenHorario">
                        <img class="grande" src="img/fecha.png">
                    </div>
                    
                    <div class ="video">
                        <iframe width="800" height="500" src="https://www.youtube.com/embed/O7w4-OhiFWs?start=2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    <div class="horarios">
                        <strong>
                            <p class="titmov">Viernes de 11:00 a 21:00 horas</p> 
                            <p class="titmov">Sábado de 10:00 a 21:00 horas</p>
                            <p class="titmov">Domingo de 10:00 a 20:00 horas</p>
                        </strong>
                    </div>
                </center>

                
                    <div class = "aniversario" id="aniversario" data-aos="flip-up">
                        <center>
                            <div class="titulo_pagina">
                                <h2>
                                    <strong>
                                        ANIVERSARIO
                                    </strong>
                                </h2>
                            </div>
                            
                            <div class="gallery">
                                <a href="#">
                                  <img class="titmov" src="https://i2.wp.com/lamole.com.mx/wp-content/uploads/2022/08/Foto-Galeria_AsiSeVivio25thAnniversary_9.jpg?ssl=1" >
                                </a>
                                <a href="#">
                                  <img class="titmov" src="https://i2.wp.com/lamole.com.mx/wp-content/uploads/2022/08/Foto-Galeria_AsiSeVivio25thAnniversary_3.jpg?ssl=1" >
                                </a>
                                <a href="#">
                                  <img class="titmov" src="https://i2.wp.com/lamole.com.mx/wp-content/uploads/2022/08/Foto-Galeria_AsiSeVivio25thAnniversary_1.jpg?ssl=1" >
                                </a>
                            </div>

                            <div class="parrafo">
                                <p>¡ASI SE VIVIÓ LA MOLE® CONVENTION 2022!</p>
                            </div>

                        </center>
                    </div>

                    <div class = "horror" id="horror" data-aos="flip-up">
                        <center>
                            <div class="titulo_pagina">
                                <h2>
                                    <strong>
                                        HORROR
                                    </strong>
                                </h2>
                            </div>

                            <div class="invitados_horror">

                                <a>
                                    <img class="titmov" width="400" height="500" src="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/10/Expositor-KaneHodder.png?fit=1200%2C1500&amp;ssl=1">
                                </a>
                                <a>
                                    <img class="titmov" width="400" height="500" src="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/10/Expositor-DannyTrejo.png?fit=1200%2C1500&amp;ssl=1">
                                </a>
                                <a>
                                    <img class="titmov" width="400" height="500" src="https://i0.wp.com/lamole.com.mx/wp-content/uploads/2022/10/Expositor-MarkPatton.png?fit=1200%2C1500&amp;ssl=1">
                                </a>
                            </div>

                            <div class="parrafo">
                                <p>¡Este año asistirán diferentes personalidades de TERROR!</p>
                            </div>

                        </center>
                    </div>

                    <div class = "cosplay" id = "cosplay" data-aos="flip-up">
                        <center>
                            <div class="titulo_pagina">
                                <h2>
                                    <strong>
                                        COSPLAY
                                    </strong>
                                </h2>
                            </div>

                            <div class="invitados_cosplay">
                                
                                <a>
                                    <img class="titmov" width="1000" height="400" src="img/cabezal.webp" >
                                </a>
                            </div>
                            <div class="parrafo">
                                <p>¡NO TE PUEDES PERDER LA MEJOR COMPETENCIA DE COSPLAY DE MÉXICO!</p>
                            </div>
                        </center>
                    </div>

                    <div class = "faqs" id="faqs" data-aos="fade-in">
                        <center>
                            <div class="titulo_pagina">
                                <h2 data-aos="flip-up">
                                    <strong <i class="fa fa-align-center" aria-hidden="true"></i>
                                        FAQS
                                    </strong>
                                </h2>
                            </div>

                            <div class="preguntas">
                                <h3 data-aos="flip-down"><hr>¿QUÉ ES LA MOLE ®?</h3>
                                <p data-aos="fade-in">LA MOLE es la convención de comics, fantasía y cultura pop más grande de Latinoamérica.</p>

                                <h3 data-aos="flip-down"><hr>¿CUÁNDO ES LA MOLE ®?</h3>
                                <p data-aos="fade-in">La próxima edición de La Mole se llevará a cabo los días 17, 18 y 19 de marzo de 2023.</p>

                                <h3 data-aos="flip-down"><hr>¿CUÁL ES EL HORARIO DE LA MOLE ®?</h3>
                                <p data-aos="fade-in">
                                    La Mole se llevará a cabo en los siguientes horarios.

                                    Viernes de 11:00 a 21:00 horas

                                    Sábado de 10:00 a 21:00 horas

                                    Domingo de 10:00 a 20:00 horas
                                </p>

                                <h3 data-aos="flip-down"><hr>¿DÓNDE SE REALIZA LA MOLE ®?</h3>
                                <p data-aos="fade-in">En el World Trade Center de la Ciudad de México, ubicado en Filadelfia 40, Colonia Nápoles, Alcaldía Benito Juárez, C.P. 03810, Ciudad de México.</p>

                                <h3 data-aos="flip-down"><hr>¿QUÉ HAGO PARA SER EXPOSITOR DE LA MOLE ®?</h3>
                                <p data-aos="fade-in">Escribe al correo electrónico ventas@lamole.com.mx para recibir informes sobre precios y disponibilidad de espacios.</p>

                                <h3 data-aos="flip-down"><hr>¿CUÁNTO CUESTA LA ENTRADA?</h3>
                                <p data-aos="fade-in">Próximamente se darán a conocer los precios.</p>

                                <h3 data-aos="flip-down"><hr>¿QUIÉNES NECESITAN COMPRAR BOLETO?</h3>
                                <p data-aos="fade-in"> Todo el público asistente debe adquirir su entrada, excepto los niños menores de un metro de estatura, quienes entrarán gratis siempre y cuando sean acompañados por un adulto.</p>
  
                                <h3 data-aos="flip-down"><hr>¿QUÉ HACER SI ENCUENTRO O PIERDO ALGO?</h3>
                                <p data-aos="fade-in"> Acude al módulo de registro, ubicado cerca de nuestras taquillas. LA MOLE® no se hace responsable de los objetos extraviados.</p>
 
                                <h3 data-aos="flip-down"><hr>¿QUÉ HACER SI ME SIENTO MAL/ ME HE LASTIMADO?</h3>
                                <p data-aos="fade-in"> Durante la convención contaremos con servicio médico por parte del World Trade Center.</p>
 
                                <h3 data-aos="flip-down"><hr>¿QUÉ HACER SI SOY ACOSADO?</h3>
                                <p data-aos="fade-in">
                                    LA MOLE® tiene una política de cero tolerancia con respecto a cualquier tipo de violencia, esto incluye: 
                                </p>
                                    <li data-aos="fade-in">Acoso</li> 
                                    <li data-aos="fade-in">Intimidación</li>
                                    <li data-aos="fade-in">Toma de fotos o video sin consentimiento</li>
                                    <li data-aos="fade-in">Discriminación racial y de género</li> 
                                    <li data-aos="fade-in">Agresión física</li>
                                <p data-aos="fade-in">
                                    En caso de sufrir alguno de estos incidentes, recurre al crew de LA MOLE®. Esta política se aplica a todos los asistentes al evento: expositores, fans, moderadores, artistas invitados, artistas independientes, prensa, staff y seguridad. Consulta la política a detalle en este link.
                                </p>

                                <h3 data-aos="flip-down"><hr>¿PUEDO REPARTIR PUBLICIDAD DE MI EVENTO/SITIO WEB/PROYECTO,ETC. DENTRO DE LA MOLE®?</h3>
                                <p data-aos="fade-in">Solamente los expositores pueden repartir publicidad de su marca dentro del espacio contratado. Cualquier expositor o persona que reparta publicidad sin permiso podrá ser expulsada de la convención, sin derecho a reembolso.</p>

                                <h3 data-aos="flip-down"><hr>¿PUEDO TOMAR FOTOS? </h3>
                                <p data-aos="fade-in">Claro, mientras no violen nuestra política de cero acoso.</p>

                                <h3 data-aos="flip-down"><hr>¿PUEDO LLEVAR MI CÁMARA? </h3>
                                <p data-aos="fade-in">Sin problema alguno.</p>

                                <h3 data-aos="flip-down"><hr>¿QUÉ DÍAS SE PRESENTAN INVITADOS?</h3>
                                <p data-aos="fade-in">La mayoría de nuestros invitados participan todos los días de la convención, a menos que se anuncie lo contrario.</p>

                                <h3 data-aos="flip-down"><hr>¿LOS ARTISTAS DAN AUTÓGRAFOS? </h3>
                                <p data-aos="fade-in">Todos nuestros invitados dan autógrafos, pero recuerda que los actores invitados establecen un costo por sus firmas y fotos. Los cosplayers invitados suelen brindar su firma o foto de manera gratuita, aunque en ocasiones pueden condicionarla a la compra de algún artículo de su mesa.</p>

                                <h3 data-aos="flip-down"><hr>¿CÓMO FUNCIONA EL SISTEMA DE PULSERAS PARA FIRMAS?</h3>
                                <p data-aos="fade-in">
                                    El reparto de pulseras limitadas para firma de invitados importantes es una práctica común en las convenciones de coleccionables más importantes del mundo. Esto permite un mayor control del número de fans participantes, así como que los admiradores del artista disfruten de las actividades de la convención, en vez de permanecer formados por muchas horas en un mismo lugar. Las pulseras son canjeables por el autógrafo del artista.

                                    Usualmente estas pulseras se reparten en los primeros minutos de cada día, directamente en la mesa de los invitados señalados para esta dinámica. Tras la primera repartición, solemos entregar más pulseras en las siguientes horas, pero esto depende mucho de la velocidad con que el artista atienda a cada uno de sus fans. En promedio, la dinámica de pulseras permite que un invitado atienda a 300 fans diarios. Estas pulseras no se encuentran a la venta y no son transferibles.
                                </p>

                                <h3 data-aos="flip-down"><hr>¿CÓMO OBTENGO LAS EXCLUSIVAS DEL EVENTO? </h3>
                                <p data-aos="fade-in">Cada marca definirá su dinámica, que será anunciada en nuestras redes sociales, recuerda respetarlas y tener mucha paciencia para poder obtener todo lo que quieras y necesites, miles de personas quieren los mismos coleccionables que tu y es probable que no siempre te toque la suerte de obtenerlos, aun así diviértete y ten una grata experiencia.</p>

                            </div>

                        </center>
                    </div>

                    <div class = "entradas" id="entradas" data-aos="fade-in">
                        <div class="wrapper">
                            <a class="button" href="https://lamole-2023.boletia.com/">ENTRADAS</a>
                        </div>
                        <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <defs>
                                <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                    <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                                </filter>
                            </defs>
                        </svg>
                    </div>
            </div>
        </body>

          
            <footer class="footer" id="footer" data-aos="zoom-in-up">
                <div class = "findepagina">
                    <h1 class ="titmov"><br></h1>
                    <h1 class ="titmov" href="#">LA MOLE &copy</h1>
                    <h1 class ="titmov"><br></h1>

                    <a href="https://twitter.com/lamolemx" target="_blank"><i class="bi bi-twitter icono_redes"></i></a>
                    <a href="https://github.com/AndresEdu" target="_blank"><i class="bi bi-github icono_redes"></i></a>
                    <a href="https://www.instagram.com/andres_arciniega/" target="_blank"><i class="bi bi-instagram icono_redes"></i></a>
                    <h1 class ="titmov"><br></h1>

                    <h1 class ="titmov">Andrés Eduardo Arciniega Arellano</h1>
                </div>
                
            </footer>

            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>

</html>