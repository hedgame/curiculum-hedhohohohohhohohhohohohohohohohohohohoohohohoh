<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('imgs/sistema/pk_siga.png') }}" rel="shortcut icon" /></link>
    <title>{{ config('app.name', 'PKCia.Siga') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Isso garante que o rodapé fique no fundo da folha no PDF */
        @media print {
            @page {
                margin: 1.5cm 1.5cm 2.5cm 1.5cm; /* Superior, Direita, Inferior, Esquerda */
                margin-bottom: 2.5cm; 
            } 
                      
            .footer-repetir {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                text-align: center;
                border-top: 1px solid #ddd;
                font-size: 10px;
                padding: 10px 0;
            }
        }

        /* Isso garante que ele fique no fundo da tela no navegador */
        .footer-tela {
            position: fixed;
            bottom: 0;
            width: 100%;
            background: white;
            text-align: center;
            font-size: 9px;
            z-index: 999;
        }

        /* Para visualização no navegador também fixar no final */
        .footer-fixo {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: white;
            padding: 10px 0;
        }
        section {
            width: 100% !important; /* Mude de 75% para 100% no PDF */
        }
    </style>

    <body> 
    <div class="footer-repetir footer-tela">
        Dona Zalina Rolim
    </div>

    <center>
    <nav class="bg-gray-800 py-4">
        <div class="container mx-auto flex justify-between items-center">
            
            <!-- Logo ou título -->
            <a href="" class="text-white font14">
            <center><img width='100px;' src="{{ asset('imgs/sistema/programadores.png') }}">
                {{ config('app.pkcia') }}
            </center>
            <b class="text-white font8"></b>
            </a>

            <div>
                <!-- Links do menu -->
                <ul class="flex space-x-4">
                    <li><a href="{{ asset('gerapdf/eddie') }}" class="text-white font8" style="padding-right:30px;">
                            Folha <b class="font40 text-white"><strong>PDF</strong> 
                        </b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <a href="javascript:history.back()">
        <p class="retorna bg-green hover:bg-red-500 text-white font-bold py-2 px-4 rounded" >&times;</p>
    </a>
    <section style='width:70%; overflow-y: auto;'>
        
        <div>
            <nav class="flex justify-center my-4" style="width:80%; padding:10px 10px 10px 0; background-color:transparent; border-radius: 0 0 25px 0;">
                <div class="container-fluid w-full">
                    <!-- Adicionado: flex items-center justify-between no container pai -->
                    <div class="row texto-esquerda flex items-center justify-between gap-4" style="width:80%; margin-left:15%; position:relative;">
                        
                        <!-- Lado Esquerdo: Nome e OAB -->
                        <div class="flex">
                            <div id="pessoal1" class="text-center md:text-left z-10 cor1">
                                <p class="f-siga1 cor1 font-bold">Herlan</p>
                                <p class="phont2 cor1">Daner Palma ondori</p>
                                <p class="phont2 cor1" style="font-size:12px;">OAB 237 666 / SP </p>
                            </div>
                        </div>

                        <!-- Centro: Imagem -->
                        <div id="image1" class="z-10 shrink-0">
                            <img class="w-24 md:w-28 lg:w-32" src="{{ asset('/imgs/sistema/ej/hed.png') }}" style="border-radius:50%;"/><br>
                        </div>

                        <!-- Lado Direito: Dados de Contato -->
                        <div id="pessoal2" class="texto-esquerda cor1 text-[12px] z-10">
                            <div class="texto-esquerda cor1" style="z-index: 1;">
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/location-place.png') }}"/> Rua Julio Colaço, 444</p>
                                <p class="phont2" style="font-size:12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chakra california</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/phone-symbol.png') }}"/> Fone : 5511 951761417 / 5511 3804-1647</p>
                                <p class="phont2 flex items-center gap-1" style="font-size:12px;"><img class="icon" width='14px;' src="{{ asset('/imgs/icones/mail-email.png') }}"/> e-mail: hedgame21@gmail.comm</p>
                            </div>
                        </div>    
                        
                    </div>
                    <hr class="mt-4">
                </div>
            </nav>
            
        </div>
        
        <div style="display: inline-block; width:75%; padding-left:20px; padding-right:100px;" class="div-alinhada-direita">
                    <div class="texto-esquerda justify-center" style="text-align:justify;" ><br>
                        <p class="f-cabeca1"><a href="" class="text-blue text-md font-bold f-siga1">
                            Objetivo(s) :</a>
                        </p>
                        <p class="grid justify-items-auto grid-cols-0 text-align: justify;">
                            Profissional com sólida experiência em Análise de jogos, Programação em desainers e jogos de pokemon ,
                            com foco em recuperação de saves, jogos digitais. Atuação em projetos que envolvem automação
                            de emuladores, revisão de tributos, segurança da informação e gestão de riscos pequenos. Capacidade comprovada de unir
                            pokémon de outras gerações , revisão de passivos
                            e originalidade da geração do jogo.
                        </p><br>

                        <p class="f-cabeca1 f-siga1 cor1 font-bold">Formações </p>

                            <p class="grid justify-items-auto" style="padding-bottom:5px;">
                                <p class="f-entidade">
                                    <p class="f-negrito">Entidade Educacional POKEMON</p>
                                    <p class="f-menor1">PÓS Graduação Perícia Judicial em Informática</p>
                                    <p class="f-menor1"></p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Escola Microlins</p>
                                    <p class="f-menor1">Curso de igles basico </p>
                                    <p class="f-menor1"></p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">UNIESP  – 	Universidade São Paulo</p>
                                    <p class="f-menor1">Curso de artes</p>
                                    <p class="f-menor1"></p>
                                </p>

                                <p class="f-cabeca1 f-siga1 cor1 font-bold">Cursos e Treinamentos</p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Temotologia de mine</p>
                                    <p class="f-menor1">Certificação - de faixa de jiu-jitso faixa branca ate cinza preta</p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Ttekken</p>
                                    <p class="f-menor1">jogador mvp de king,poul e Kazuia</p>
                                    <p class="f-menor1">Programaçãos de python e vizualg</p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">São Paulo</p>
                                    <p class="f-menor1">faz parte do Brasil</p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Line Brasil ScriptCase Partner Gold</p>
                                    <p class="f-menor1">nenhuma experiencia em trabalho pesado .</p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Protec mov de proteção </p>
                                    <p class="f-menor1">Certificação da comclução da pokedex.</p>
                                </p>
                                <p class="f-entidade">
                                    <p class="f-negrito">Udemy<br>
                                    <p class="f-menor1">certificado de sinno</p>
                                    <p class="f-menor1">Certificação comclçução da pokedex de galar/p>
                                    <p class="f-menor1">Certificação de ti-Tecnico de Imformtica</p>
                                    <p class="f-menor1">PYTHON com deficiencia</p>
                                </p>
                            </p>
                            <br>
                            <p class="f-cabeca1 f-siga1 cor1 font-bold">Experiências </p>

                            <p class="f-entidade"><lb class="f-menor1">Empresa :</lb><b class=" f-negrito">Nintendo Company </b></p>
                                
                            <p><lb class="f-menor1 text-align: justify;">Atuação : Em sinaol de limguas de mão .</p>

                            <p class="f-entidade"><lb class="f-menor1"></lb>Empresa :</lb><b class=" f-negrito">Pokemon company.</b></p>
                            <p><lb class="f-menor1">Cargo   :</lb> Lider de ginacio
                            <p><lb class="f-menor1 text-align: justify;">Atuação : em comprovar se os oponetes que irão 
                                nos desafiar são bons o suficiente para ganhar e insignia de que compreove sua destreza.</p>


                            <p class="f-entidade"><lb class="f-menor1">Empresa :</lb><b class=" f-negrito"> Microsfot</b></p>
                            <p><lb class="f-menor1">Cargo   :</lb> roterista de jogos
                            <p><lb class="f-menor1">Atuação : designer grafico

                            <p class="f-cabeca1 f-negrito f-siga1 cor1 font-bold">Experiências e Conhecimentos gerais</p>
                            <br>
                            <p><b class=" f-negrito">Projetos Relevantes</b>
                                <p>
                                •Minecraft
                                °The last of us
                                °The evil whitin
                            </p>
                            <br>
                            <p><b class=" f-negrito">Habilidades Técnicas</b>
                                <p>
                                °Criação de codigo 
                                °Conhecimento completo do programa Scrat 
                                °Criação de logica em jogos
                                </p>
                            </p>
                            <br>
                            <p><b class=" f-negrito">Roteiros de Jogos Criados</b>
                                <p>
                                • The Last Of us
                                ° The Evil Within
                                °Recident Evil 2 ,Resident Evil 4
                                °Pokémon Scarlet and Violet .
                                </p>
                            </p>
                            <p><br><br><br></p>
                        </div>

                        
        </div>

    </section>
    </center>
    </body>
</html>
