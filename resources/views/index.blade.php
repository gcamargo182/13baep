@extends('layouts.layout')

@section('title', '13º BAEP — Batalhão de Ações Especiais de Polícia')

@section('content')

@php use Illuminate\Support\Facades\Storage; @endphp

    {{-- BANNER --}}
    <section class="banner-section position-relative d-flex align-items-end min-vh-100">
        <img src="{{ asset('images/hero-bg.png') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Hero">
        <div class="container">
            <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <p class="mb-0 text-white fs-5 text-opacity-70">
                                "A <span class="text-primary">VITÓRIA</span> SE CONQUISTA."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                </div>
            </div>
        </div>
    </section>
    {{-- HISTÓRICO --}}
    <section class="stats-facts py-5 py-lg-11 py-xl-12 position-relative overflow-hidden" id="historico">
        <div class="container">
            <div class="row gap-7 gap-xl-0">                
                <div class="col-xl-4">
                    <div class="d-flex flex-column gap-7">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                            <hr class="border-line">
                        </div>

                        {{-- Cronologia Visual --}}
                        <div class="position-relative d-inline-block w-100" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" style="padding: 0 0 20px 20px;">
                            {{-- Borda decorativa atrás --}}
                            <div class="position-absolute bottom-0 start-0"
                                style="width:92%; height:97%; border-radius:20px; background-color:rgba(233, 191, 23, 0.8); z-index:0;">
                            </div>
                            {{-- Imagem --}}
                            <div class="position-relative overflow-hidden" style="border-radius:16px; z-index:1; box-shadow: 0 8px 32px rgba(0,0,0,0.18);">
                                <img src="{{ asset('images/hero-bg-historico.jpg') }}" alt="Histórico BAEP" style="width: 100%; height: 1500px; object-fit: cover; display:block;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="d-flex flex-column gap-9">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0">Histórico</h2>
                                    <!-- <p class="fs-5 mb-0">O 13º Batalhão de Ações Especiais de Polícia nasceu da necessidade de resposta qualificada ao crime organizado. Desde sua criação, forjou sua identidade pela excelência operacional, pelo rigor no treinamento e pelo compromisso inabalável com a segurança da população.</p> -->
                                </div>
                            </div>
                        </div>
                        {{-- TIMELINE --}}
                        <div class="position-relative" style="padding-left: 2rem;">
                            {{-- Linha vertical --}}
                            <div style="position: absolute; left: 6px; top: 0; bottom: 0; width: 2px; background: rgba(0,0,0,0.1);">
                            </div>
                            {{-- Item 1 --}}
                            <div class="d-flex gap-4 mb-8 position-relative" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                <div style="position: absolute; left: -2rem; top: 4px; width: 14px; height: 14px; border-radius: 50%; background: #E9BF17; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 0 0 2px #E9BF17;">
                                </div>
                                <div>
                                    <p class="mb-1 text-muted" style="font-size: 13px; font-weight: 600;">2014</p>
                                    <h5 class="mb-1">Histórico da criação dos Batalhões de Ações Especiais de Polícia no Estado de São Paulo</h5>
                                    <p class="mb-0 text-muted" style="font-size: 14px;">Diante do aumento dos crimes “ultraviolentos”, sobretudo ataques a instituições bancárias, em sua maioria planejada por organizações criminosas fortemente armadas e executados em locais e horários nos quais geralmente não havia condições operacionais ideais para que a Polícia Militar pudesse enfrentá-los. Em 06 de janeiro de 2014, o Decreto Estadual nº 60.034 determinou a criação dos Batalhões de Ações Especiais de Polícia (BAEP), cuja primeira unidade foi instalada na cidade de Campinas (1º BAEP), subordinada ao Comando de Policiamento do Interior – 2 (CPI-2).</p>
                                </div>
                            </div>
                            {{-- Item 2 --}}
                            <div class="d-flex gap-4 mb-8 position-relative" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                <div style="position: absolute; left: -2rem; top: 4px; width: 14px; height: 14px; border-radius: 50%; background: #E9BF17; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 0 0 2px #E9BF17;">
                                </div>
                                <div>
                                    <p class="mb-1 text-muted" style="font-size: 13px; font-weight: 600;">2020</p>
                                    <h5 class="mb-1">Criação do 13º Batalhão de Ações Especiais de Polícia</h5>
                                    <p class="mb-0 text-muted" style="font-size: 14px;">Em janeiro de 2020, o então Comandante-Geral da Polícia Militar do Estado de São Paulo, Coronel PM Salles, confiou ao Comandante do Comando de Policiamento do Interior Quatro (CPI-4), Coronel PM Robson Douglas, a honrosa e estratégica missão de estruturar um Batalhão de Ações Especiais de Polícia na região de Bauru. Ciente da nobreza e da complexidade da tarefa, o Cel PM Robson Douglas designou o Tenente-Coronel PM Ézio para liderar esta nova Unidade Operacional, nomeando o Major PM Valentim como Subcomandante. Unidos por um propósito comum, ambos conduziram, com firmeza e discernimento, a seleção dos oficiais pioneiros do novo Batalhão, além de instituírem comissões de estudo responsáveis pela definição de aspectos logísticos, operacionais e doutrinários da futura unidade.<br>
                                    O processo contou com a valiosa colaboração de oficiais do CPI-4 e dos Batalhões a ele subordinados. Naquele mesmo período, a desocupação do imóvel pertencente à Companhia de Desenvolvimento Agrícola de São Paulo (CODASP) — órgão vinculado à Secretaria de Agricultura e Abastecimento — abriu a oportunidade para que a sede do futuro Batalhão se concretizasse. Em junho de 2020, mesmo diante do cenário desafiador imposto pela pandemia de COVID-19, o efetivo selecionado — proveniente de diversas regiões do Estado — apresentou-se com abnegação e espírito de missão para os intensos treinamentos de nivelamento. Esses preparos culminaram no Estágio de Especialização de Ações Especiais de Polícia, coordenado pelo Comando de Policiamento de Choque (CPChq), com instruções ministradas pelo 1º BPChq (ROTA), 3º BPChq e 4º BPChq (GATE e COE).<br>                                    
                                    </p>
                                </div>
                            </div>
                            {{-- Item 3 --}}
                            <div class="d-flex gap-4 mb-8 position-relative" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                                <div style="position: absolute; left: -2rem; top: 4px; width: 14px; height: 14px; border-radius: 50%; background: #E9BF17; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 0 0 2px #E9BF17;">
                                </div>
                                <div>
                                    <p class="mb-1 text-muted" style="font-size: 13px; font-weight: 600;">De Junho a 13 de Julho</p>
                                    <h5 class="mb-1">Estágio de Especialização Profissional em Ações Especiais de Polícia</h5>
                                    <p class="mb-0 text-muted" style="font-size: 14px;">Em 1º de junho de 2020, foi publicada, no Boletim Geral nº 98, a transferência do efetivo de Cabos e Soldados, previamente movimentados para o CPI-4 e que aguardavam a promulgação do decreto de criação do 13º BAEP.<br>
                                    A partir do dia 15 do mesmo mês, foram recepcionados na sede do CPI-4, onde iniciaram as primeiras instruções. Os treinamentos visavam ao nivelamento técnico operacional, incluindo a habilitação dos policiais militares no manuseio de armas portáteis, como o fuzil IMBEL, modelo IA2, calibre 5,56x45mm NATO e o FAL, modelo M964 A1, calibre 7,62x51mm NATO.<br>
                                    Em 1º de julho do mesmo ano, foi publicada no Boletim Geral nº 118 a movimentação dos Subtenentes e Sargentos, que se apresentaram na sede do CPI-4 a partir do dia 3 de julho, complementando o quadro de efetivo do Batalhão.<br>
                                    Em 13 de julho, na sede do CPI-4, iniciou-se o Estágio de Especialização Profissional em Ações Especiais de Polícia, coordenado pelo Comando de Policiamento de Choque (CPChq), com apoio do 1º BPChq (ROTA), 3º BPChq e 4º BPChq (GATE e COE).</p>
                                </div>
                            </div>
                            {{-- Item 4 --}}
                            <div class="d-flex gap-4 mb-8 position-relative" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <div style="position: absolute; left: -2rem; top: 4px; width: 14px; height: 14px; border-radius: 50%; background: #E9BF17; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 0 0 2px #E9BF17;">
                                </div>
                                <div>
                                    <p class="mb-1 text-muted" style="font-size: 13px; font-weight: 600;">28 de Julho</p>
                                    <h5 class="mb-1">Oficialmente implementado</h5>
                                    <p class="mb-0 text-muted" style="font-size: 14px;">O Decreto Estadual nº 65.096, de 28 de julho de 2020, oficializou a criação do Décimo Terceiro Batalhão de Ações Especiais de Polícia, que, com elevado espírito cívico e absoluto comprometimento com a segurança da população, iniciou suas atividades operacionais em 3 de agosto de 2020.<br>
                                    Recebendo a missão de manter a ordem pública e combater o crime organizado nas macrorregiões de Bauru, Marília, Lins, Jaú e Ourinhos.<br>
                                    </p>
                                </div>
                            </div>
                            {{-- Item 5 --}}
                            <div class="d-flex gap-4 mb-8 position-relative" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                                <div style="position: absolute; left: -2rem; top: 4px; width: 14px; height: 14px; border-radius: 50%; background: #E9BF17; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 0 0 2px #E9BF17;">
                                </div>
                                <div>
                                    <p class="mb-1 text-muted" style="font-size: 13px; font-weight: 600;">05 de Agosto</p>
                                    <h5 class="mb-1">1º Patrulhamento Tático de Ações Especiais de Polícia</h5>
                                    <p class="mb-0 text-muted" style="font-size: 14px;">Em 05 de agosto, o Décimo Terceiro Batalhão de Ações Especiais de Polícia iniciou suas atividades operacionais na nova sede, localizada na Av. Rodrigues Alves, 38-118 e dando inicio ao 1º Patrulhamento Tático de Ações Especiais de Polícia pela área do Comando de Policiamento do Interior Quatro.</p>
                                </div>
                            </div>
                            {{-- Item 6 --}}
                            <div class="d-flex gap-4 mb-8 position-relative" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                                <div style="position: absolute; left: -2rem; top: 4px; width: 14px; height: 14px; border-radius: 50%; background: #E9BF17; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 0 0 2px #E9BF17;">
                                </div>
                                <div>
                                    <p class="mb-1 text-muted" style="font-size: 13px; font-weight: 600;">2020 a 2025</p>
                                    <h5 class="mb-1">Homenagem aos 5 anos do 13º Batalhão de Ações Especiais de Polícia</h5>
                                    <p class="mb-0 text-muted" style="font-size: 14px;">No marco de seu quinto ano de existência, o Décimo Terceiro Batalhão de Ações Especiais de Polícia consolida-se como uma força essencial na promoção de respostas eficientes às demandas de segurança pública, por meio do combate ao crime organizado e às graves ameaças à ordem pública na área do Comando de Policiamento do Interior Quatro.<br>
                                    A pronta resposta, viabilizada por mecanismos específicos de capacitação, treinamento, organização, armamento e equipamentos modernos, tem possibilitado apoio efetivo às Unidades Territoriais, resultando em expressivos indicadores operacionais, como prisões, apreensões de drogas e armas de fogo, além da recuperação de veículos e bens.Destacam-se as participações em missões relevantes, como a Campanha Humanitária no Rio Grande do Sul, as Operações Escudo e Eleições, ambas realizadas na Baixada Santista, bem como as ações no enfrentamento de crimes ultraviolentos no interior do Estado.<br>
                                    Além do legado operacional, o 13º BAEP firmou-se como centro de excelência em treinamento, sediando o Curso de Especialização Profissional – Força Tática e promovendo capacitações específicas voltadas aos policiais militares.Esta é uma justa homenagem aos Operadores de Patrulhamento Tático e Ações Especiais de Polícia do 13º BAEP, que, em 2025, seguem honrando o legado iniciado com a criação do Batalhão, em 2020.<br>
                                    </p>
                                </div>
                            </div>
                            {{-- Item 7 --}}
                            <div class="d-flex gap-4 mb-8 position-relative" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                                <div style="position: absolute; left: -2rem; top: 4px; width: 14px; height: 14px; border-radius: 50%; background: #E9BF17; flex-shrink: 0; border: 2px solid #fff; box-shadow: 0 0 0 2px #E9BF17;">
                                </div>
                                <div>
                                    <p class="mb-1 text-muted" style="font-size: 13px; font-weight: 600;">Hoje</p>
                                    <h5 class="mb-1">13º BAEP — Excelência Contínua</h5>
                                    <p class="mb-0 text-muted" style="font-size: 14px;">O Décimo Terceiro Batalhão de Ações Especiais de Polícia mantém sua tradição de excelência, servindo à população com profissionalismo, dedicação e os mais altos padrões operacionais.</p>
                                </div>
                            </div>
                        </div>
                        {{-- FIM TIMELINE --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- INSTITUCIONAL --}}
    <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray" id="institucional">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="container">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4">
                        <div class="d-flex gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                            <hr class="border-line">
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0">Missão, Visão e Valores</h2>
                                    <p class="fs-5 mb-0">Os princípios que norteiam cada ação e decisão do 13º Batalhão de Ações Especiais de Polícia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-8">
                    <div class="col-md-4 mb-6 mb-md-0">
                        <div class="d-flex flex-column gap-3 p-6 border rounded h-100" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <!-- <iconify-icon icon="lucide:shield" class="fs-4 text-primary"></iconify-icon> -->
                            <h4 class="text-primary mb-0">Missão</h4>
                            <p class="mb-0">Proteger e defender a integridade territorial e a soberania da região de Bauru, Marília, Lins, Jaú e Ourinhos, por meio de respostas ágeis e eficientes no combate ao crime organizado e aos crimes ultraviolentos, enfrentando ameaças graves à ordem pública. Reforçar as atividades de polícia ostensiva e a preservação da ordem, garantindo a segurança da população de bem e promovendo a paz social com excelência operacional, determinação e compromisso inabalável com a sociedade.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6 mb-md-0">
                        <div class="d-flex flex-column gap-3 p-6 border rounded h-100" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <!-- <iconify-icon icon="lucide:eye" class="fs-4 text-primary"></iconify-icon> -->
                            <h4 class="text-primary mb-0">Visão de Futuro</h4>
                            <p class="mb-0">Ser reconhecida como uma Unidade de Ações Especiais de Polícia de referência no Estado de São Paulo, destacando-se pela excelência no combate ao crime organizado, pela formação de operadores altamente capacitados e pela atuação estratégica na promoção da segurança e do bem-estar da população.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6 mb-md-0">
                        <div class="d-flex flex-column gap-3 p-6 border rounded h-100" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <!-- <iconify-icon icon="lucide:star" class="fs-4 text-primary"></iconify-icon> -->
                            <h4 class="text-primary mb-0">Valores</h4>
                            <p class="mb-0">Patriotismo, civismo, hierarquia, disciplina, profissionalismo, lealdade, constância, compromisso com a verdade, honra, dignidade humana, honestidade, coragem, empatia, gratidão, fé na missão e espírito de corpo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TRINÔMIO OPERACIONAL --}}
    <section class="py-5 py-lg-11 py-xl-12" id="trinomio">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-11">
                {{-- Cabeçalho --}}
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4">
                        <div class="d-flex gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
                            <hr class="border-line">
                            <!-- <span class="badge text-bg-dark">Trinômio Operacional</span> -->
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <h2 class="mb-0">Trinômio Operacional</h2>
                            <h3 class="mb-0">Homem · Treinamento · Equipamento</h3>
                            <p class="fs-5 mb-0">Os pilares fundamentais para a excelência operacional do 13º BAEP.</p>
                            <p class="mb-0">O aprimoramento individual é obrigatório ao policial de Ações Especiais, visto que o treinamento compõe o trinômio operacional. É dever do policial do 13º BAEP buscar constante conhecimento e especialização, estando apto a ministrar instruções. Tal obrigação estende-se a todos os postos e graduações, da praça mais moderna ao oficial mais antigo.</p>
                            <p class="mb-0">O trinômio operacional também se fortalece por meio de treinamentos conjuntos com policiais militares de outras unidades, promovendo a integração, o intercâmbio de experiências e o aprimoramento contínuo das táticas e procedimentos operacionais.</p>
                        </div>
                    </div>
                </div>

                {{-- HOMEM --}}
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4">
                        <div class="d-flex gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                        <span class="badge text-bg-dark">Homem</span>    
                        <hr class="border-line">
                        <!-- <span class="badge text-bg-dark">Homem</span> -->
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row g-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div class="col-md-6 col-lg-3">
                                <div class="d-flex flex-column bg-primary gap-3 p-6 border rounded h-100">
                                    <iconify-icon icon="lucide:shield-check" class="fs-4 text-dark"></iconify-icon>
                                    <h5 class="mb-0">Conduta Ética</h5>
                                    <p class="mb-0" style="font-size:14px;">Doutrina e ética são fatores essenciais e inerentes ao perfil do policial do 13º BAEP, abrangendo postura dentro e fora do serviço.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="d-flex flex-column bg-dark gap-3 p-6 border rounded h-100">
                                    <iconify-icon icon="lucide:dumbbell" class="fs-4 text-primary"></iconify-icon>
                                    <h5 class="text-white mb-0">Condicionamento Físico</h5>
                                    <p class="mb-0" style="color:white; font-size:14px;">Exigência de conceito "muito bom" no TAF e "ótimo" no TAT, renovados anualmente como pressuposto para permanência no 13º BAEP.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="d-flex flex-column gap-3 p-6 border rounded h-100">
                                    <iconify-icon icon="lucide:users" class="fs-4 text-primary"></iconify-icon>
                                    <h5 class="mb-0">Espírito de Corpo</h5>
                                    <p class="mb-0" style="font-size:14px;">Companheirismo e irmandade entre superiores, pares e subordinados, com auxílio mútuo em questões profissionais e pessoais.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="d-flex flex-column bg-primary gap-3 p-6 border rounded h-100">
                                    <iconify-icon icon="lucide:heart-handshake" class="fs-4 text-dark"></iconify-icon>
                                    <h5 class="mb-0">Comprometimento</h5>
                                    <p class="mb-0" style="font-size:14px;">Doutrina, ética e profissionalismo são responsabilidade de todos que ostentam o braçal do 13º BAEP, independentemente de posto ou graduação.</p>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>

            {{-- EQUIPAMENTO --}}
            <div class="row gap-7 gap-xl-0 mt-5 mt-xl-8">
                <div class="col-xl-4">
                    <div class="d-flex gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <span class="badge text-bg-dark">Equipamento</span>    
                    <hr class="border-line">
                        <!-- <span class="badge text-bg-dark">Equipamento</span> -->
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row g-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="col-md-4">
                            <div class="card bg-primary h-100 border">
                                <div class="card-body d-flex flex-column gap-4 p-6">
                                    <iconify-icon icon="lucide:crosshair" class="fs-4 text-dark"></iconify-icon>
                                    <h5 class="mb-0">Armamentos</h5>
                                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-dark fs-6"></iconify-icon><span style="font-size:14px;">Fuzil calibre 7,62mm</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-dark fs-6"></iconify-icon><span style="font-size:14px;">Fuzil calibre 5,56mm</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-dark fs-6"></iconify-icon><span style="font-size:14px;">Espingarda 12 gauge</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-dark fs-6"></iconify-icon><span style="font-size:14px;">Lançador de granadas 40mm</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-dark fs-6"></iconify-icon><span style="font-size:14px;">Arma de incapacitação neuromuscular</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-dark fs-6"></iconify-icon><span style="font-size:14px;">Espargidor de gás pimenta</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-dark h-100 border">
                                <div class="card-body d-flex flex-column gap-4 p-6">
                                    <iconify-icon icon="lucide:shield" class="fs-4 text-primary"></iconify-icon>
                                    <h5 class="text-white mb-0">Proteção Individual</h5>
                                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-primary fs-6"></iconify-icon><span style="color:white; font-size:14px;">Colete modular balístico</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-primary fs-6"></iconify-icon><span style="color:white; font-size:14px;">Patches e insígnias padronizados</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-primary fs-6"></iconify-icon><span style="color:white; font-size:14px;">Tarjeta de identificação de posto</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-primary fs-6"></iconify-icon><span style="color:white; font-size:14px;">Brasão PMESP em preto e cinza</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:chevron-right" class="text-primary fs-6"></iconify-icon><span style="color:white; font-size:14px;">Patch BAEP nas costas fundo cinza</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 border ">
                                <div class="card-body d-flex flex-column gap-4 p-6">
                                    <iconify-icon icon="lucide:settings" class="fs-4 text-primary"></iconify-icon>
                                    <h5 class="mb-0">Equipamentos Adicionais</h5>
                                    <p class="mb-0 text-opacity-70" style="font-size:14px;">Cada policial poderá portar equipamentos adicionais que facilitem o serviço, aumentem a segurança e melhorem a autonomia operacional, conforme a missão designada.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TREINAMENTO --}}
            <div class="row gap-7 gap-xl-0 mt-5 mt-xl-8">
                <div class="col-xl-4">
                    <div class="d-flex gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <span class="badge text-bg-dark">Treinamento</span>    
                    <hr class="border-line">
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row g-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="col-lg-4 d-flex align-items-stretch">
                            <div class="card bg-primary w-100">
                                <div class="card-body d-flex flex-column gap-5 p-6">
                                    <iconify-icon icon="lucide:zap" class="fs-4 text-dark"></iconify-icon>
                                    <h4 class="mb-0">Capacitação Tática</h4>
                                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:check-circle" class="fs-6 text-dark flex-shrink-0"></iconify-icon><span style="font-size:14px;">Chefia, liderança e trabalho em equipe</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:check-circle" class="fs-6 text-dark flex-shrink-0"></iconify-icon><span style="font-size:14px;">Gestão de crises e conduta em incidentes críticos</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:check-circle" class="fs-6 text-dark flex-shrink-0"></iconify-icon><span style="font-size:14px;">Técnicas de CQB e busca em ambientes confinados</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:check-circle" class="fs-6 text-dark flex-shrink-0"></iconify-icon><span style="font-size:14px;">Emprego do Método Giraldi® e tiro sob estresse</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:check-circle" class="fs-6 text-dark flex-shrink-0"></iconify-icon><span style="font-size:14px;">APH-Tático e resgate em ambiente hostil</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:check-circle" class="fs-6 text-dark flex-shrink-0"></iconify-icon><span style="font-size:14px;">Operações em áreas urbanas, rurais e ribeirinhas</span></li>
                                        <li class="hstack gap-2"><iconify-icon icon="lucide:check-circle" class="fs-6 text-dark flex-shrink-0"></iconify-icon><span style="font-size:14px;">Doutrina AEP e aplicação do Sistema C4IVR</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch">
                            <div class="card bg-dark w-100">
                                <div class="card-body d-flex flex-column gap-5 p-6">
                                    <iconify-icon icon="lucide:activity" class="fs-4 text-primary"></iconify-icon>
                                    <h4 class="mb-0 text-white">Condicionamento Físico</h4>
                                    <p class="mb-0 text-white text-opacity-70" style="font-size:14px;">Uma tropa de Ações Especiais exerce vasta gama de atividades operacionais e táticas, tornando o condicionamento físico quesito de extrema importância para o cumprimento das missões.</p>
                                    <p class="mb-0 text-white text-opacity-70" style="font-size:14px;">O preparo físico transmite confiança ao cidadão e poder de persuasão ao infrator, sendo fator primordial para o êxito de qualquer ação.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-stretch">
                            <div class="card border w-100">
                                <div class="card-body d-flex flex-column gap-5 p-6">
                                    <iconify-icon icon="lucide:book-open" class="fs-4 text-primary"></iconify-icon>
                                    <h4 class="mb-0">Formação de Estagiários</h4>
                                    <p class="mb-0" style="font-size:14px;">A formação é marcada por cobranças e instruções, mas nenhuma exigência ocorre sem que tenha sido previamente ensinada.</p>
                                    <p class="mb-0" style="font-size:14px;">O tratamento é enérgico, visando ao aperfeiçoamento profissional e à aferição do comportamento sob pressão.</p>
                                    <p class="mb-0 text-primary" style="font-size:13px; font-style:italic;">"O tratamento deve ser digno, respeitando o homem por trás da farda."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- POLICIAL DO MÊS --}}
    <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray" id="policialmes">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="container">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4">
                        <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                            <hr class="border-line">
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0">Policial do Mês</h2>
                                    <p class="fs-5 mb-0">Destaque para o policial que se destacou em suas funções e contribuiu significativamente para a segurança e bem-estar da comunidade.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-8">
                    @php
                        $policiais = \App\Models\PolicialMes::orderBy('created_at', 'desc')->get();
                        $totalPoliciais = $policiais->count();
                        $silhueta = asset('images/policialmes/silhueta3x4.jpg');
                    @endphp
                    {{-- Carrossel --}}
                    <div class="owl-carousel owl-theme policial-carousel position-relative" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        @forelse($policiais as $policial)
                            <a href="{{ route('policial.mes.show', ['mes' => $policial->mes, 'ano' => $policial->ano]) }}" style="text-decoration:none;">
                                <div class="policialdomes-card position-relative overflow-hidden" style="border-radius:8px;">
                                    <img src="{{ $policial->foto ? Storage::url($policial->foto) : $silhueta }}" alt="{{ $policial->nome }}" class="img-fluid w-100" style="height:450px; object-fit:contain; background-color:#F4F8FA;">
                                    <div class="policialdomes-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.2) 60%, transparent 100%); opacity:0; transition: opacity 0.4s ease;">
                                        <p class="text-primary fw-bold mb-1" style="font-size:12px; text-transform:uppercase; letter-spacing:2px;">{{ $policial->mes }} / {{ $policial->ano }}</p>
                                        <h5 class="text-white mb-1">{{ $policial->nome }}</h5>
                                        <p class="text-white text-opacity-70 mb-0" style="font-size:13px;">{{ $policial->graduacao }}</p>
                                    </div>
                                </div>
                            </a>
                            @empty
                            <div class="policialdomes-card position-relative overflow-hidden" style="border-radius:8px;">
                                <img src="{{ $silhueta }}" alt="Policial do Mês" class="img-fluid w-100" style="height:450px; object-fit:contain; background-color:#F4F8FA;">
                                <div class="policialdomes-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.2) 60%, transparent 100%); opacity:0; transition: opacity 0.4s ease;">
                                    <p class="text-primary fw-bold mb-1" style="font-size:12px; text-transform:uppercase; letter-spacing:2px;">Em breve</p>
                                    <h5 class="text-white mb-1">A definir</h5>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- OCORRENCIAS DE DESTAQUE --}}
    <section class="featured-projects py-5 py-lg-11 py-xl-12" id="ocorrenciasdestaque">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="container">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4">
                        <div class="d-flex gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">05</span>
                            <hr class="border-line">
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xxl-8">
                                <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                    <h2 class="mb-0">Ocorrências de Destaque</h2>
                                    <p class="fs-5 mb-0">Destaque para as ocorrências que se destacaram em suas funções e contribuíram significativamente para a segurança e bem-estar da comunidade.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-8">
                    @php
                        $ocorrenciasDestaque = \App\Models\OcorrenciaDestaque::orderBy('created_at', 'desc')->get();
                        $totalocorrenciasDestaque = $ocorrenciasDestaque->count();
                        $silhueta = asset('images/policialmes/silhueta3x4.jpg');
                    @endphp                   
                    {{-- Carrossel --}}
                    <div class="owl-carousel owl-theme ocorrencia-carousel position-relative" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        @forelse($ocorrenciasDestaque as $ocorrencia)
                            <a href="{{ route('ocorrencia.destaque.show', ['mes' => $ocorrencia->mes, 'ano' => $ocorrencia->ano]) }}" style="text-decoration:none;">
                                <div class="ocorrenciadestaque-card position-relative overflow-hidden" style="border-radius:8px;">
                                    <img src="{{ $ocorrencia->foto ? Storage::url($ocorrencia->foto) : $silhueta }}" alt="{{ $ocorrencia->titulo }}" class="img-fluid w-100" style="height:450px; object-fit:contain; background-color:#F4F8FA;">
                                    <div class="ocorrenciadestaque-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.2) 60%, transparent 100%); opacity:0; transition: opacity 0.4s ease;">
                                        <p class="text-primary fw-bold mb-1" style="font-size:12px; text-transform:uppercase; letter-spacing:2px;">{{ $ocorrencia->mes }} / {{ $ocorrencia->ano }}</p>
                                        <h5 class="text-white mb-1">{{ $ocorrencia->titulo }}</h5>
                                    </div>
                                </div>
                            </a>
                            @empty
                            <div class="ocorrenciadestaque-card position-relative overflow-hidden" style="border-radius:8px;">
                                <img src="{{ $silhueta }}" alt="Ocorrência de Destaque" class="img-fluid w-100" style="height:450px; object-fit:contain; background-color:#F4F8FA;">
                                <div class="ocorrenciadestaque-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-end p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.2) 60%, transparent 100%); opacity:0; transition: opacity 0.4s ease;">
                                    <p class="text-primary fw-bold mb-1" style="font-size:12px; text-transform:uppercase; letter-spacing:2px;">Em breve</p>
                                    <h5 class="text-white mb-1">A definir</h5>
                                </div>
                            </div>
                        @endforelse
                    </div>                
                </div>
            </div>
        </div>
    </section>

    {{-- INTERESSADO EM SERVIR --}}
    <section class="get-in-touch py-5 py-lg-11 py-xl-12 bg-light-gray" id="interessado-em-servir" style="scroll-margin-top: 80px;">
        <div class="container">
            <div class="d-flex flex-column gap-5 gap-xl-10">
                <div class="row gap-7 gap-xl-0">
                    <div class="col-xl-4">
                        <div class="d-flex gap-7 py-2" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
                            <hr class="border-line">
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <h2 class="mb-0 text-center">Interessados em servir no 13º BAEP</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between gap-7 gap-xl-0" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="col-xl-3">
                        <p class="mb-0 fs-5">
                            O efetivo do 13º BAEP é formado por policiais militares especializados, preparados para atuar em missões de alta complexidade em toda a região do CPI-4.<br>
                            A unidade possui diferentes frentes de atuação operacional e administrativa, permitindo que o policial militar desempenhe funções conforme sua especialização, perfil técnico e necessidade institucional.<br>
                            Preencha nosso formulário de interesse e entraremos em contato com mais informações.
                        </p>
                    </div>
                    <div class="col-xl-8">
                        <div class="d-flex align-items-center flex-column gap-7">
                            <div class="row g-6">
                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-3 p-6 border rounded">
                                        <iconify-icon icon="lucide:shield" class="fs-4 text-primary"></iconify-icon>
                                        <h5 class="mb-0">Requisitos</h5>
                                        <p class="mb-0 text-opacity-70">Para integrar a estrutura AEP, o policial militar deve atender a requisitos mínimos:</p>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Preferencialmente 3 anos de atividade operacional (Ordem Complementar Nº PM3-003/02/24).
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Não responder a processo regular.
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Não possuir sanções disciplinares graves (contra instituições, Estado, direitos humanos ou de natureza desonrosa).
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Estar plenamente apto ao serviço policial-militar.
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Ter TAF regularizado, com conceito mínimo “muito bom”.
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Ter TAT regularizado, com conceito mínimo “ótimo”.
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-3 p-6 border rounded">
                                        <iconify-icon icon="lucide:clipboard-list" class="fs-4 text-primary"></iconify-icon>
                                        <h5 class="mb-0">Processo</h5>
                                        <p class="mb-0 text-opacity-70">Entenda como funciona o processo seletivo interno.</p>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Inscrição por meio do formulário eletrônico;
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Análise funcional;
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Análise dos requisitos;
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Entrevista e análise de perfil;
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Nivelamento técnico e estágio operacional;
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Avaliação final e classificação.
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex flex-column gap-3 p-6 border rounded">
                                        <iconify-icon icon="lucide:users" class="fs-4 text-primary"></iconify-icon>
                                        <h5 class="mb-0">Equipe</h5>
                                        <p class="mb-0 text-opacity-70">Entre as áreas de atuação disponíveis no batalhão, destacam-se:
                                        </p>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Patrulhamento Tático de Ações Especiais;
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Policiamento Montado (Cavalaria);
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Policiamento com Cães (K-9);
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Operações de Controle de Distúrbios Civis; 
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Cumprimento de Mandados de Alto Risco;
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Apoio especializado em operações policiais;
                                        </a>
                                        <a class="header-link hstack gap-2 text-dark" style="font-size:14px;">
                                            <img src="{{ asset('images/alvo.png') }}" alt="" width="20" height="20">Setores administrativos e de gestão operacional.
                                        </a>
                                        <h2 class="mb-0 text-dark" style="font-size:13px;">O treinamento constante, a busca pela excelência operacional e o espírito de corpo fazem parte da rotina do batalhão.</h2>
                                    </div>
                                </div>
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfsJkvXJbYVQMZax3gQXiYH2g1QGcyKW1gkUjxFPhEA7p8V_w/viewform" target="_blank" class="btn justify-content-center">
                                <span class="btn-text">Acessar Formulário</span>
                                <iconify-icon icon="lucide:external-link" class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            $('.policial-carousel').owlCarousel({
    loop: true,
    margin: -30,
    nav: true,
    dots: false,
    center: true,
    startPosition: 0,
    navText: [
        '<iconify-icon icon="lucide:chevron-left"></iconify-icon>',
        '<iconify-icon icon="lucide:chevron-right"></iconify-icon>'
    ],
    responsive: {
        0: { items: 1 },
        768: { items: 3 },
        1200: { items: 3 }
    }
});
        </script>

        <script>
    $('.ocorrencia-carousel').owlCarousel({
    loop: true,
    margin: -30,
    nav: true,
    dots: false,
    center: true,
    startPosition: 0,
    navText: [
        '<iconify-icon icon="lucide:chevron-left"></iconify-icon>',
        '<iconify-icon icon="lucide:chevron-right"></iconify-icon>'
    ],
    responsive: {
        0: { items: 1 },
        768: { items: 3 },
        1200: { items: 3 }
    }
});
</script>  
    @endpush

@endsection