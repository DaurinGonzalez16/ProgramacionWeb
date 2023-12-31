<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Es una pagina web donde esta el portafolios de Daurin">
    <meta name="author" content="Daurin Gonzalez">
    <meta name="keywords" content="DaurinPortafolios,Daurin Portafolios, Daurin_Portafolios">
    <title>DAURIN_PORTAFOLIOS</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Incluye la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;700&display=swap" rel="stylesheet">
    <!-- MIS CCS -->
    <link rel="stylesheet" href="styles/Maquetacion_Celulares.css">
    <link rel="stylesheet" href="styles/Maquetacion_Table_Computadoras.css">
    <link rel="stylesheet" href="styles/efectos.css">
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark navbar_padre">

            <div class="container-fluid">
                <span class="navbar-brand logo">DG</span>

                <!-- BOTON DESPLEGABLE -->
                <button class="navbar-toggler text-light bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MIS LINKS -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3 ">

                        <li class="nav-item gap-2">
                            <a class="nav-link" aria-current="page" href="#INICIO">
                                <span class="material-symbols-outlined navbar_icon">cottage</span>
                                <span class=" navbar_Texto">INICIO</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#SOBREMI">
                                <span class="material-symbols-outlined navbar_icon">school</span>
                                <span class="navbar_Texto">SOBRE MI</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#MISPROYECTOS">
                                <span class="material-symbols-outlined navbar_icon">folder_shared</span>
                                <span class="navbar_Texto">MIS PROYECTOS</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#CONTACTO">
                                <span class="material-symbols-outlined navbar_icon">contact_mail</span>
                                <span class="navbar_Texto"> CONTACTO</span>
                            </a>
                        </li>
                    </ul>

                    <!-- CIERRE DE MIS LINKS -->

                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid ">

        <section class="row row_1">
            <div class="col-md-6 col_1_main1" id="#INICIO">

                <div class="sv_class">
                    <span class="material-symbols-outlined">emoji_people</span>
                    <span class="span_bienvenido">Bienvenidos!</span>
                </div>

                <div>
                    <h1 class="h1_programador">PROGRAMADOR</h1>
                    <h2 class="h2_fullstack">FULLSTACK</h2>
                </div>

                <div class="d-flex con_c_d">
                    <div class="contratame">
                        <a class="a_items" href="#CONTACTO"> CONTRATAME</a>
                        <span class="material-symbols-outlined icon_contratame"> contact_phone </span>
                    </div>

                    <div class="descargarcv">
                        <a class="a_items a_items_d" href="doc/Daurin Gabriel Gonzalez de los Santos - Curriculum.pdf" download="CV-DG">DESCARGA
                            CV</a>
                        <span class="material-symbols-outlined icon_descargar">download</span>
                    </div>
                </div>
            </div>

        </section>

        <hr class="divisor">

        <!-- SIGUIENTE SECTION - SECCION SOBRE MI-->
        <section class="row row_2" id="#SOBREMI">

            <article class="col-md-6 col-xl-6 col-lg-6 arcticle1">

                <div class="div_svg_sobremi">
                    <svg class="svg_sobremi" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#fff
                        ">
                            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                            <path d="M3 14s-1 0-1-1s1-4 6-4s6 3 6 4s-1 1-1 1H3zm8-9a3 3 0 1 1-6 0a3 3 0 0 1 6 0z" />
                        </g>
                    </svg>
                    <h2 id="SOBREMI">SOBRE <span class="h2_ME">MI</span> </h2>
                </div>

                <div class="parrafo_1">
                    <p>Soy <strong>Daurin Gonzalez</strong>, un apasionado estudiante de <strong>Desarrollo de
                            Software</strong>. Mi
                        pasión por la
                        programación me ha llevado a dominar una variedad de lenguajes y herramientas, incluyendo:</p>
                </div>

                <div class=" row d-flex row_1_lenguajes">

                    <div class="col-md-6 col_1 ">
                        <svg class="svg_row1" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#fff" d="M7 5.5a2.5 2.5 0 1 0 1.81 4.225a.75.75 0 0 1 1.086 1.035a4 4 0 1 1-.01-5.53a.75.75 0 0 1-1.082 1.04A2.49 2.49 0 0 0 7 5.5Z" />
                            <path fill="#fff" d="M6.586.102a.75.75 0 0 1 .756 0l4.715 2.75a.75.75 0 0 1-.756 1.296l-4.337-2.53L1.5 4.806v6.388l5.464 3.188l4.337-2.53a.75.75 0 1 1 .755 1.296l-4.714 2.75a.75.75 0 0 1-.756 0L.372 12.273A.75.75 0 0 1 0 11.625v-7.25a.75.75 0 0 1 .372-.648L6.586.102Z" />
                            <path fill="#fff" d="M12.18 5.25a.5.5 0 0 1 .5.5v4.5a.5.5 0 0 1-1 0v-4.5a.5.5 0 0 1 .5-.5Zm2.14 0a.5.5 0 0 1 .5.5v4.5a.5.5 0 0 1-1 0v-4.5a.5.5 0 0 1 .5-.5Z" />
                            <path fill="#fff" d="M10.5 6.93a.5.5 0 0 1 .5-.5h4.5a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.5-.5Zm0 2.14a.5.5 0 0 1 .5-.5h4.5a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.5-.5Z" />
                        </svg>
                        <h3 class="h3_main2">C#</h3>
                    </div>

                    <div class="col-md-6 col_1">
                        <svg class="svg_row1" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#fff" d="M11.803 24.745s-1.224.713.869.952c2.536.292 3.833.251 6.625-.281c0 0 .733.464 1.76.865c-6.265 2.683-14.177-.161-9.255-1.536zm-.767-3.5s-1.375 1.015.719 1.228c2.715.281 4.849.308 8.552-.405c0 0 .511.516 1.319.801c-7.573 2.213-16.011.172-10.589-1.624zm6.453-5.942c1.541 1.776-.407 3.375-.407 3.375s3.917-2.027 2.12-4.557c-1.681-2.365-2.973-3.536 4.005-7.584c0 0-10.953 2.735-5.719 8.767zm8.282 12.036s.907.744-.995 1.323c-3.615 1.093-15.047 1.421-18.224.041c-1.14-.495 1-1.187 1.672-1.328c.703-.156 1.104-.124 1.104-.124c-1.271-.896-8.208 1.755-3.525 2.515c12.776 2.073 23.285-.932 19.968-2.427zm-13.38-9.724s-5.817 1.38-2.063 1.88c1.589.213 4.751.167 7.699-.083c2.405-.204 4.823-.636 4.823-.636s-.849.364-1.464.787c-5.907 1.552-17.317.828-14.031-.76c2.776-1.339 5.036-1.188 5.036-1.188zm10.432 5.833c6-3.125 3.224-6.12 1.292-5.713c-.475.093-.688.183-.688.183s.172-.277.511-.396c3.833-1.349 6.781 3.973-1.235 6.083c0-.005.095-.083.12-.156zM19.203 0s3.324 3.323-3.156 8.437c-5.192 4.104-1.183 6.443 0 9.115c-3.031-2.735-5.255-5.14-3.765-7.38C14.474 6.875 20.542 5.281 19.203 0zm-6.224 31.901c5.761.364 14.609-.208 14.824-2.932c0 0-.407 1.031-4.767 1.853c-4.916.927-10.984.817-14.583.224c0 0 .74.609 4.525.855z" />
                        </svg>
                        <h3 class="h3_main2">JAVA</h3>
                    </div>

                    <div class="col-md-6 col_1">
                        <svg class="svg_row1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#fff" d="M7.502 0h2.578v1.078h-1.5v1.078h1.5v1.078H7.502V0Zm3.093 0h2.579v.938h-1.5v.187h1.5v2.156h-2.579v-.984h1.5v-.188h-1.5V0Zm3.095 0h2.577v.938h-1.5v.187h1.5v2.156H13.69v-.984h1.5v-.188h-1.5V0Z" />
                            <path fill="#fff" fill-rule="evenodd" d="m11.991 24l-6.944-1.928L3 4.717h18L18.954 22.07L11.991 24ZM7.047 12.573l.191 2.128h7.377l-.247 2.76l-2.374.642h-.002l-2.37-.64l-.152-1.697H7.333l.298 3.342l4.36 1.21l4.367-1.21l.532-5.964l.052-.571l.384-4.309H6.664l.194 2.129h8.136l-.194 2.18H7.047Z" clip-rule="evenodd" />
                        </svg>
                        <h3 class="h3_main2">CSS</h3>
                    </div>
                    <div class="col-md-6 col_1">
                        <svg class="svg_row1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none">
                                <g fill="#fff" clip-path="url(#akarIconsHtmlFill0)">
                                    <path d="M5.08 0h1.082v1.069h.99V0h1.082v3.236H7.152V2.153h-.99v1.083H5.081V0Zm4.576 1.073h-.952V0h2.987v1.073h-.953v2.163H9.656V1.073ZM12.165 0h1.128l.694 1.137L14.68 0h1.128v3.236h-1.077V1.632l-.744 1.151h-.019l-.745-1.15v1.603h-1.058V0Zm4.181 0h1.083v2.167h1.52v1.07h-2.603V0Z" />
                                    <path fill-rule="evenodd" d="M5.046 22.072L3 4.717h18L18.953 22.07L11.99 24l-6.944-1.928Zm4.137-9.5l-.194-2.18h8.145l.19-2.128H6.664l.574 6.437h7.377l-.247 2.76l-2.374.642h-.002l-2.37-.64l-.152-1.697H7.332l.298 3.342l4.36 1.21l4.367-1.21l.532-5.964l.052-.571H9.183Z" clip-rule="evenodd" />
                                </g>
                                <defs>
                                    <clipPath id="akarIconsHtmlFill0">
                                        <path fill="#fff" d="M0 0h24v24H0z" />
                                    </clipPath>
                                </defs>
                            </g>
                        </svg>
                        <h3 class="h3_main2">HTML</h3>
                    </div>

                    <div class="col-md-6 col_1">
                        <svg class="svg_row1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M120.89 28.445v69.262l-28.445 23.324l-44.09-16.07v15.93L23.395 88.25l72.746 5.688V31.574ZM96.64 31.93L55.82 7.11v16.285L18.348 34.418L7.109 48.852v32.785l16.075 7.11V46.718Zm0 0" />
                        </svg>
                        <h3 class="h3_main2">AZURE</h3>

                    </div>

                    <div class="col-md-6 col_1">
                        <svg class="svg_row1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M256 19.11c-48.03 0-91.515 6.572-122.235 16.82c-15.36 5.123-27.503 11.218-35.225 17.308C90.82 59.328 88 64.702 88 69.278c0 4.574 2.82 9.948 10.54 16.038c7.722 6.09 19.865 12.184 35.225 17.308c30.72 10.247 74.204 16.82 122.235 16.82c48.03 0 91.515-6.573 122.235-16.82c15.36-5.124 27.503-11.22 35.225-17.308c7.72-6.09 10.54-11.464 10.54-16.04c0-4.574-2.82-9.948-10.54-16.038c-7.722-6.09-19.865-12.185-35.225-17.308C347.515 25.682 304.03 19.11 256 19.11zM88 99.434v92.63c0 5.84 5.338 13.804 19.285 21.862c13.947 8.058 35.283 15.424 61.976 20.564c53.387 10.283 120.093 10.283 173.48 0c26.692-5.14 48.028-12.505 61.975-20.563C418.662 205.87 424 197.905 424 192.067V99.434c-10.135 7.894-23.752 14.42-40.19 19.903c-33.272 11.098-78.19 17.727-127.81 17.727c-49.62 0-94.538-6.63-127.81-17.727c-16.438-5.483-30.055-12.01-40.19-19.903zm0 122.75v95.32c0 5.84 5.338 13.803 19.285 21.86c13.947 8.06 35.283 15.425 61.976 20.566c53.387 10.282 120.093 10.282 173.48 0c26.692-5.14 48.028-12.506 61.975-20.564c13.947-8.058 19.285-16.022 19.285-21.86v-95.322c-3.18 2.475-6.685 4.812-10.47 7c-16.58 9.578-39.446 17.215-67.46 22.61c-56.023 10.79-124.117 10.79-180.14 0c-28.014-5.395-50.88-13.032-67.46-22.61c-3.785-2.188-7.29-4.525-10.47-7zm0 125.44v98.035h.386c.994 3.89 4.026 8.27 10.154 13.102c7.722 6.09 19.865 12.185 35.225 17.308c30.72 10.248 74.204 16.82 122.235 16.82c48.03 0 91.515-6.572 122.235-16.82c15.36-5.123 27.503-11.218 35.225-17.308c6.128-4.833 9.16-9.213 10.154-13.102H424v-98.036c-3.18 2.475-6.685 4.813-10.47 7c-16.58 9.58-39.446 17.215-67.46 22.61c-56.023 10.79-124.117 10.79-180.14 0c-28.014-5.395-50.88-13.03-67.46-22.61c-3.785-2.187-7.29-4.525-10.47-7z" />
                        </svg>
                        <h3 class="h3_main2">SQL</h3>
                    </div>

                    <div class="col-md-6 col_1">
                        <svg class="svg_row1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none">
                                <g clip-path="url(#akarIconsGithubFill0)">
                                    <path fill="#ffffff" fill-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385c.6.105.825-.255.825-.57c0-.285-.015-1.23-.015-2.235c-3.015.555-3.795-.735-4.035-1.41c-.135-.345-.72-1.41-1.23-1.695c-.42-.225-1.02-.78-.015-.795c.945-.015 1.62.87 1.845 1.23c1.08 1.815 2.805 1.305 3.495.99c.105-.78.42-1.305.765-1.605c-2.67-.3-5.46-1.335-5.46-5.925c0-1.305.465-2.385 1.23-3.225c-.12-.3-.54-1.53.12-3.18c0 0 1.005-.315 3.3 1.23c.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23c.66 1.65.24 2.88.12 3.18c.765.84 1.23 1.905 1.23 3.225c0 4.605-2.805 5.625-5.475 5.925c.435.375.81 1.095.81 2.22c0 1.605-.015 2.895-.015 3.3c0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12Z" clip-rule="evenodd" />
                                </g>
                                <defs>
                                    <clipPath id="akarIconsGithubFill0">
                                        <path fill="#fff" d="M0 0h24v24H0z" />
                                    </clipPath>
                                </defs>
                            </g>
                        </svg>
                        <h3 class="h3_main2">GITHUB</h3>
                    </div>

                    <div class="col-md-6 col_1">
                        <svg class="svg_row1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" fill-rule="evenodd" d="M8.667 9.417a2.583 2.583 0 1 0 0 5.166h2.583v-2.531a4.511 4.511 0 0 1 0-.104V9.417H8.667Zm2.583-1.5H8.667a2.583 2.583 0 0 1 0-5.167h2.583v5.167Zm1.5-5.167v5.167h2.583a2.584 2.584 0 0 0 0-5.167H12.75Zm2.583 6.666a2.583 2.583 0 0 0-2.583 2.542v.083a2.583 2.583 0 1 0 2.583-2.625Zm-6.666 6.667a2.584 2.584 0 1 0 2.583 2.584v-2.584H8.667Z" clip-rule="evenodd" />
                        </svg>
                        <h3 class="h3_main2">FIGMA</h3>
                    </div>

                </div>

                <!-- COLUMNA 2 P -->
                <div class="row">
                    <p class="parrafo_1 parrafo_2">Además de mi carrera académica, soy el fundador de
                        <strong>SolucionesDigitales_16</strong>,
                        donde aplico mis
                        habilidades para brindar soluciones digitales de calidad. Mi enfoque en cada proyecto se
                        caracteriza por mi <strong>responsabilidad</strong>, <strong>determinación </strong>y
                        <strong>respeto</strong>,
                        cualidades que
                        considero
                        esenciales
                        para el éxito en el mundo del desarrollo de software.
                    </p>
                </div>

            </article>

            <article class="col-md-6">
                <img class="img-fluid img_main2" src="img/Main3/imagen_main2.png" alt="">
            </article>

        </section>

        <hr class="divisor">

        <!-- SIGUIENTE SECTION - MIS PROYECTOS-->
        <section class="row-cols-auto section_padre_main3" id="#MISPROYECTOS">

            <article class="col-md-6 ">

                <h3 id="MISPROYECTOS">MIS PROYECTOS <span class="recientes_main3"> RECIENTES</span></h3>
                <div class="div_enlaces_main3">
                    <a class="a_main1" href="#">TODOS</a>
                    <a class="a_main2" href="#">C#</a>
                    <a class="a_main3" href="#">JAVA</a>
                    <a class="a_main4" href="#">DISEÑO WEB</a>
                </div>

            </article>

            <article class="col-md-12 arcticle1_main3">

                <div class="div_nombre_proyecto">
                    <img class="img_java1 img-fluid" src="img/Main3/JavaScript frameworks-amico.png" alt="">
                    <h3 class="h3_np">NOMBRE DEL PROYECTO</h3>

                    <div class="div_dentrode_div_nombre_proyecto">
                        <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z" />
                        </svg>
                        <a class="link_P" href="https://github.com/DaurinGonzalez16/ProgramacionWeb" target="_blank">IR
                            A MI GITHUB</a>
                    </div>
                </div>

                <div class="div_nombre_proyecto">
                    <img class="img_java1 img-fluid" src="img/Main3/JavaScript frameworks-bro.png" alt="">
                    <h3 class="h3_np">NOMBRE DEL PROYECTO</h3>

                    <div class="div_dentrode_div_nombre_proyecto">
                        <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z" />
                        </svg>
                        <a class="link_P" href="https://github.com/DaurinGonzalez16/ProgramacionWeb" target="_blank">IR
                            A MI GITHUB</a>
                    </div>
                </div>

                <div class="div_nombre_proyecto">
                    <img class="img_java1 img-fluid" src="img/Main3/JavaScript frameworks-rafiki.png" alt="">
                    <h3 class="h3_np">NOMBRE DEL PROYECTO</h3>

                    <div class=" div_dentrode_div_nombre_proyecto">
                        <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#ffffff" d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z" />
                        </svg>
                        <a class="link_P" href="https://github.com/DaurinGonzalez16/ProgramacionWeb" target="_blank">IR
                            A MI GITHUB</a>
                    </div>
                </div>





            </article>

        </section>

        <!-- SIGUIENTE SECTION - FORMULARIO - CONTACTO -->
        <section class="row-cols-auto p-5" id="#CONTACTO">

            <h2 id="CONTACTO">CONTÁCTA<span class="h2_ME">ME</span></h2>

            <div class="row-cols-2 row_cont_form">

                <article class="col-md-6 contenedor_imagen_main_3">

                    <div class="contendor_img">
                        <img class="img-fluid img_form" src="img/ImagenForm/IMG-20220923-WA0124.jpg" alt="">
                    </div>

                </article>

                <article class="col-md-6">

                    <form method="post">

                        <div class="contenedor_input">
                            <div class="sub_c_i">
                                <h3 class="input_name">SU NOMBRE</h3>
                                <input type="text" placeholder="Nombre Completo" name="nombre" required>
                            </div>

                            <div>
                                <h3 class="input_email">SU EMAIL</h3>
                                <input type="email" placeholder="Email" name="gmail" required>
                            </div>
                        </div>


                        <div class="sub_c_i">
                            <h3 class="input_mensaje">SU MENSAJE</h3>
                            <textarea name="mensaje" cols="30" rows="10" placeholder="Detalle su inquietud" required></textarea>
                        </div>

                        <div class="sub_c_i sub_c_b">
                            <button name="register" type="submit" id="enviarformulario">ENVIAR MENSAJE
                                <svg class="svg_boton" width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="#ffffff">
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855a.75.75 0 0 0-.124 1.329l4.995 3.178l1.531 2.406a.5.5 0 0 0 .844-.536L6.637 10.07l7.494-7.494l-1.895 4.738a.5.5 0 1 0 .928.372l2.8-7Zm-2.54 1.183L5.93 9.363L1.591 6.602l11.833-4.733Z" />
                                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0a3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95l-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                                    </g>
                                </svg>
                            </button>
                            <?php
                            include("RegistroBasedeDatos/registro.php");
                            ?>
                        </div>
                    </form>
                </article>
            </div>
            </div>
        </section>
    </main>

    <footer class="row p-3 bg-dark text-center">

        <div class="col-sm-12 ">
            <span class="span_social">REDES SOCIALES</span>
        </div>
        <div class="section_padreFooter">
            <div class="col-sm-12 p-2 ">
                <a class="link" href="https://api.whatsapp.com/send?phone=18299686540&text=%F0%9F%A7%91%E2%80%8D%F0%9F%92%BB" target="_blank">
                    <svg class="svg_Footer" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z" />
                    </svg>
                </a>

                <a class="link" href="https://www.linkedin.com/in/daurin-gonzalez-a74775293/" target="_blank">
                    <svg class="svg_Footer" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77Z" />
                    </svg>
                </a>

                <a class="link" href="https://www.instagram.com/dauringonzalez16/" target="_blank">
                    <svg class="svg_Footer" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z" />
                    </svg>
                </a>

                <a class="link" href="https://www.facebook.com/dauringonzalez16" target="_blank">
                    <svg class="svg_Footer" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z" />
                    </svg>
                </a>

                <a class="link" href="https://t.me/DaurinG16" target="_blank">
                    <svg class="svg_Footer" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#ffffff" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19c-.14.75-.42 1-.68 1.03c-.58.05-1.02-.38-1.58-.75c-.88-.58-1.38-.94-2.23-1.5c-.99-.65-.35-1.01.22-1.59c.15-.15 2.71-2.48 2.76-2.69a.2.2 0 0 0-.05-.18c-.06-.05-.14-.03-.21-.02c-.09.02-1.49.95-4.22 2.79c-.4.27-.76.41-1.08.4c-.36-.01-1.04-.2-1.55-.37c-.63-.2-1.12-.31-1.08-.66c.02-.18.27-.36.74-.55c2.92-1.27 4.86-2.11 5.83-2.51c2.78-1.16 3.35-1.36 3.73-1.36c.08 0 .27.02.39.12c.1.08.13.19.14.27c-.01.06.01.24 0 .38z" />
                    </svg>
                </a>
            </div>
        </div>

    </footer>


    <!-- Incluye el script de Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>