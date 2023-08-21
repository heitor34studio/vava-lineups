<?php
	session_start();
//FUNÇÃO COM CONTEÚDO VIP!!
function mostrarVips(){
    if(!isset($_SESSION['vip'])){
        die();
    }
    if(!addslashes($_SESSION['vip']) == 'aprovado'){
        die();
    }
    $mapa = addslashes($_POST['mapa']);
    echo "<script>$('head title', window.parent.document).text('".$mapa."- VavaLineups');</script>";
    if($mapa == 'Split'){	
    echo '
    <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-4">
        <div class="u-layout">
            <div class="u-layout-col">
            <div class="u-size-30">
                <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-8" src="">
                    <div class="u-absolute-hcenter u-background-video" >
                    
                    </div>
                    <div class="u-container-layout u-container-layout-14">
                    <div class="embed-responsive">
                        <video src="https://vava-lineups.vercel.app/files/SPLIT-ATK-BOMB-B-CT-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                        </video>
                    </div>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-15">
                    <div class="u-container-layout u-container-layout-15 u-container-foda">
                    <h2 class="u-align-center u-text u-text-14">Ultimate-&nbsp;<br> Bomb A</h2>
                    <p class="u-align-center u-text u-text-15">Ult utilizada no fundo do Bomb A, deixando uma brecha na parte da frente do Bomb perto da entrada CT, boa para spike com plante ABERTO.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="u-size-30">
                <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-21">
                    <div class="u-container-layout u-container-layout-21 u-container-foda">
                    <h2 class="u-align-center u-text u-text-20">Ultimate-&nbsp;<br> Bomb B Céu</h2>
                    <p class="u-align-center u-text u-text-21">Ult utlizada no Bomb B em cima da Caixa perto do Céu, dando a volta em toda o caminho do CT até o Céu de novo.</p>
                    </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-12" src="">
                    <div class="u-container-layout u-container-layout-22 ">
                    <div class="embed-responsive">
                        <video src="https://vava-lineups.vercel.app/files/SPLIT-BOMB-B-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                        </video>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
        <div class="u-layout">
            <div class="u-layout-col">
            <div class="u-size-30">
                <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                    <div class="u-container-layout u-container-layout-23">
                    <div class="embed-responsive">
                        <video src="https://vava-lineups.vercel.app/files/SPLIT-DEF-BOMB-B-MAIN-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                        </video>
                    </div>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                    <div class="u-container-layout u-container-layout-24 u-container-foda">
                    <h2 class="u-align-center u-text u-text-22">One-Way-&nbsp;<br> Bomb B</h2>
                    <p class="u-align-center u-text u-text-23">Smoke One-Way utilizada no Main do Bomb B.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="u-size-30">
                <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-25">
                    <div class="u-container-layout u-container-layout-25 u-container-foda">
                    <h2 class="u-align-center u-text u-text-24">One-Way-&nbsp;<br> Mid</h2>
                    <p class="u-align-center u-text u-text-25">Smoke One-Way utilizada na entrada do meio em direção ao Céu do Bomb B.</p>
                    </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-14" src="">
                    <div class="u-absolute-hcenter u-background-video" >
                    
                    </div>
                    <div class="u-container-layout u-container-layout-26">
                    <div class="embed-responsive">
                        <video src="https://vava-lineups.vercel.app/files/SPLIT-DEF-MID-ESCADA-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                        </video>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-7">
        <div class="u-layout">
            <div class="u-layout-col">
            <div class="u-size-60">
                <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-15" src="">
                    <div class="u-absolute-hcenter u-background-video" >
                    </div>
                    <div class="u-container-layout u-container-layout-27">
                    <div class="embed-responsive">
                        <video src="https://vava-lineups.vercel.app/files/SPLIT-ATK-BOMB-A-RAMPA-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                        </video>
                    </div>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-28">
                    <div class="u-container-layout u-container-layout-28 u-container-foda">
                    <h2 class="u-align-center u-text u-text-26">One-Way-&nbsp;<br> Bomb A Rampa</h2>
                    <p class="u-align-center u-text u-text-27">Smoke One-Way utilizada da área TR na Rampa/Escada do Bomb A.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>';
    }elseif($mapa == 'Icebox'){
        echo '<div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                  <div class="u-container-layout u-container-layout-23">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ICEBOX-ATK-BOMB-B-ABERTO-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                  <div class="u-container-layout u-container-layout-24 u-container-foda">
                    <h2 class="u-align-center u-text u-text-22"> Ultimate-&nbsp;<br> Bomb A KNG</h2>
                    <p class="u-align-center u-text u-text-23"> Ult utilizada em cima da caixa com as letras KNG em direção ao plante fechado, os inimigos não conseguem te ver daquela altura mas você consegue ver eles.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-25">
                  <div class="u-container-layout u-container-layout-25 u-container-foda">
                    <h2 class="u-align-center u-text u-text-24">Ultimate-&nbsp;<br> Bomb A Fundo do Bomb</h2>
                    <p class="u-align-center u-text u-text-25">Ult utlizada no fundo do Bomb A, deixando uma brecha nas caixas usadas para subir no camarote.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-14" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                    
                  </div>
                  <div class="u-container-layout u-container-layout-26">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ICEBOX-ATK-BOMB-A-HELL-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-7">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-60">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-15" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                  </div>
                  <div class="u-container-layout u-container-layout-27">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ICEBOX-ATK-BOMB-B-CEU-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-28">
                  <div class="u-container-layout u-container-layout-28 u-container-foda">
                    <h2 class="u-align-center u-text u-text-26">Ultimate-&nbsp;<br> Bomb B Aberto</h2>
                    <p class="u-align-center u-text u-text-27">Ultimate utilizado bem na frente do plante Aberto do Bomb B, deixando uma brecha no céu do Bomb.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                  <div class="u-container-layout u-container-layout-24 u-container-foda">
                    <h2 class="u-align-center u-text u-text-22">Ultimate-&nbsp;<br> Bomb B Céu</h2>
                    <p class="u-align-center u-text u-text-23">Ultimate utilizado no céu do Bomb B, contornando o Bomb até a cozinha, e pode ser utilizado para fazer diversas plays.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                  <div class="u-container-layout u-container-layout-23">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ICEBOX-ATK-BOMB-B-CEU-ULT-.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>';
    }elseif($mapa == 'Pearl'){
        echo '
            <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-3">
            <div class="u-layout">
              <div class="u-layout-col">
                <div class="u-size-30">
                  <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-7">
                      <div class="u-container-layout u-container-layout-7 u-container-foda">
                        <h2 class="u-align-center u-text u-text-10">One-Way-&nbsp;<br> Double Doors</h2>
                        <p class="u-align-center u-text u-text-9">Smoke One-Way para colocar na área do DD.</p>
                      </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-4" src="">
                      <div class="u-container-layout u-container-layout-8">
                        <div class="embed-responsive">
                          <video src="https://vava-lineups.vercel.app/files/PEARL-DEF-DD-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                            <p>Your browser does not support HTML5 video.</p>
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-4">
            <div class="u-layout">
              <div class="u-layout-col">
                <div class="u-size-30">
                  <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-8" src="">
                      <div class="u-container-layout u-container-layout-14">
                        <div class="embed-responsive">
                          <video src="https://vava-lineups.vercel.app/files/PEARL-DEF-MID-GRAFITE-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                            <p>Your browser does not support HTML5 video.</p>
                          </video>
                        </div>
                      </div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-15">
                      <div class="u-container-layout u-container-layout-15 u-container-foda">
                        <h2 class="u-align-center u-text u-text-14">One-Way-&nbsp;<br> Grafite/Meio</h2>
                        <p class="u-align-center u-text u-text-15">Smoke One-Way para colocar no Grafite tirando visão do Meio.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-size-30">
                  <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-21">
                      <div class="u-container-layout u-container-layout-21 u-container-foda">
                        <h2 class="u-align-center u-text u-text-20"> Ultimate-&nbsp;<br> Bomb A</h2>
                        <p class="u-align-center u-text u-text-21">Ult utlizada no Bomb A, deixando uma brecha na caixa atrás do Grafite.</p>
                      </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-12" src="">
                      <div class="u-container-layout u-container-layout-22 ">
                        <div class="embed-responsive">
                          <video src="https://vava-lineups.vercel.app/files/PEARL-ATK-BOMB-A-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                            <p>Your browser does not support HTML5 video.</p>
                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
            <div class="u-layout">
              <div class="u-layout-col">
                <div class="u-size-30">
                  <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                      <div class="u-container-layout u-container-layout-23">
                        <div class="embed-responsive">
                          <video src="https://vava-lineups.vercel.app/files/PEARL-ATK-BOMB-B-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                            <p>Your browser does not support HTML5 video.</p>
                          </video>
                        </div>
                      </div>
                    </div>
                    <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                      <div class="u-container-layout u-container-layout-24 u-container-foda">
                        <h2 class="u-align-center u-text u-text-22"> Ultimate-&nbsp;<br> Bomb B</h2>
                        <p class="u-align-center u-text u-text-23"> Ult utilizada na entrada do Bomb B do lado CT deixando uma brecha no céu para se esconder.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ';
    }elseif($mapa == 'Fracture'){
        echo '
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                  <div class="u-container-layout u-container-layout-23">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/FRACTURE-ATK-BOMB-A-DIREITA-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                  <div class="u-container-layout u-container-layout-24 u-container-foda">
                    <h2 class="u-align-center u-text u-text-22">Ultimate-&nbsp;<br> Bomb A Fundo do Bomb</h2>
                    <p class="u-align-center u-text u-text-23">Ult utilizada no fundo do Bomb subindo a escada. Plantando na quina da escada você tem o espaço de cima do bomb inteiro pra você e ainda pode sair da ult voltando pro CT para baixar a ult.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-25">
                  <div class="u-container-layout u-container-layout-25 u-container-foda">
                    <h2 class="u-align-center u-text u-text-24">Ultimate-&nbsp;<br> Bomb B Default</h2>
                    <p class="u-align-center u-text u-text-25">Ult utlizada dentro do Bomb B deixando uma brecha atrás da Caixa Verde.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-14" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                    
                  </div>
                  <div class="u-container-layout u-container-layout-26">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/FRACTURE-ATK-BOMB-B-FECHADO-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-7">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-60">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-15" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                  </div>
                  <div class="u-container-layout u-container-layout-27">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/FRACTURE-DEF-BOMB-A-SMOKE-MAIN.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-28">
                  <div class="u-container-layout u-container-layout-28 u-container-foda">
                    <h2 class="u-align-center u-text u-text-26">One-Way-&nbsp;<br> Bomb A</h2>
                    <p class="u-align-center u-text u-text-27">Smoke utilizada na entrada do Bomb A vindo da Garagem.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        ';
    }elseif($mapa == 'Ascent'){
        echo '
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-5">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-11" src="">
                  <div class="u-container-layout u-container-layout-19">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ASCENT-ATK-BOMB-A-CT-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-20">
                  <div class="u-container-layout u-container-layout-20 u-container-foda">
                    <h2 class="u-align-center u-text u-text-18"> Ultimate - Bomb A Céu</h2>
                    <p class="u-align-center u-text u-text-19"> Ult utilizada no céu e que deixa uma pequena parte em cima para você se esconder. Também tem pixel para plant default</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-21">
                  <div class="u-container-layout u-container-layout-21 u-container-foda">
                    <h2 class="u-align-center u-text u-text-20"> Ultimate - Bomb A Jardim</h2>
                    <p class="u-align-center u-text u-text-21">Ult utlizada no jardim em direção á porta com pixel de molly para default.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-12" src="">
                  <div class="u-container-layout u-container-layout-22 ">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ASCENT-ATK-BOMB-A-JARDIM-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                  <div class="u-container-layout u-container-layout-23">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ASCENT-ATK-BOMB-A-VINHO-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                  <div class="u-container-layout u-container-layout-24 u-container-foda">
                    <h2 class="u-align-center u-text u-text-22"> Ultimate - Bomb A Vinho</h2>
                    <p class="u-align-center u-text u-text-23"> Ult utilizada na caixa marrom da direita no bomb a, e dá acessoa ao vinho, com pixel para molly com plant no mesmo lugar.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-25">
                  <div class="u-container-layout u-container-layout-25 u-container-foda">
                    <h2 class="u-align-center u-text u-text-24"> Ultimate - Bomb B Degrauzinho</h2>
                    <p class="u-align-center u-text u-text-25">Ult utlizada no&nbsp; degrau do Bomb B, com acesso até o barco. A parede entre o barco e o bomb é varável!</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-14" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                    
                  </div>
                  <div class="u-container-layout u-container-layout-26">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ASCENT-ATK-BOMB-B-BARCO-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-7">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-60">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-15" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                  </div>
                  <div class="u-container-layout u-container-layout-27">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ASCENT-ATK-BOMB-B-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-28">
                  <div class="u-container-layout u-container-layout-28 u-container-foda">
                    <h2 class="u-align-center u-text u-text-26"> Ultimate - Bomb B Fundo do Bomb</h2>
                    <p class="u-align-center u-text u-text-27"> Ult utilizada no canto do lado TR do fundo do Bomb B com brecha na caixa verde. Acompanha Pixel para molly atras da caixa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-8">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-60">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video-contain u-layout-cell-29" src="">
                  <div class="u-container-layout u-container-layout-29 u-container-foda">
                    <h2 class="u-align-center u-text u-text-28">One-Way - Bomb B Main</h2>
                    <p class="u-align-center u-text u-text-29">Smoke na lanterna da porta de entrada do Bomb B, e que funciona de one-way para ver os pés dos adversários para quem ficar no mercado.<br>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-16">
                  <div class="u-absolute-hcenter u-background-video" >
                  </div>
                  <div class="u-container-layout u-container-layout-30">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/ASCENT-DEF-BOMB-B-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        ';
    }elseif($mapa == 'Breeze'){
        echo '
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-4">
    <div class="u-layout">
      <div class="u-layout-col">
  <div class="u-size-30">
    <div class="u-layout-row">
      <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-21">
        <div class="u-container-layout u-container-layout-21 u-container-foda">
          <h2 class="u-align-center u-text u-text-20"> Ultimate-&nbsp;<br> Bomb A Piscina</h2>
          <p class="u-align-center u-text u-text-21">Ult utlizada na água do Bomb A, que deixa uma parte para se esconder atrás do triângulo esquerdo.</p>
        </div>
      </div>
      <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-12" src="">
        <div class="u-container-layout u-container-layout-22 ">
          <div class="embed-responsive">
            <video src="https://vava-lineups.vercel.app/files/BREEZE-ATK-BOMB-A-AGUA-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
              <p>Your browser does not support HTML5 video.</p>
            </video>
          </div>
        </div>
      </div>
    </div>
  </div></div></div></div>
  <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
    <div class="u-layout">
      <div class="u-layout-col">
        <div class="u-size-30">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
              <div class="u-container-layout u-container-layout-23">
                <div class="embed-responsive">
                  <video src="https://vava-lineups.vercel.app/files/BREEZE-ATK-BOMB-A-ATRAS-DA-CAIXA-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                    <p>Your browser does not support HTML5 video.</p>
                  </video>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
              <div class="u-container-layout u-container-layout-24 u-container-foda">
                <h2 class="u-align-center u-text u-text-22"> Ultimate-&nbsp;<br> Bomb A Atrás da Caixa</h2>
                <p class="u-align-center u-text u-text-23"> Ult utilizada atrás da caixa da esquerda na boca do Bomb A, e deixando uma pequena brecha na caixa em direção DD, conta com pixel e a caixa é varável.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="u-size-30">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-25">
              <div class="u-container-layout u-container-layout-25 u-container-foda">
                <h2 class="u-align-center u-text u-text-24">Ultimate-&nbsp;<br> Bomb B Parede CT</h2>
                <p class="u-align-center u-text u-text-25">Ult utlizada na caixa em direção CT dentro do Bomb, deixando uma brecha atrás da Parede.</p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-14" src="">
              <div class="u-absolute-hcenter u-background-video" >
                
              </div>
              <div class="u-container-layout u-container-layout-26">
                <div class="embed-responsive">
                  <video src="https://vava-lineups.vercel.app/files/BREEZE-ATK-BOMB-B-MURO-CT-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                    <p>Your browser does not support HTML5 video.</p>
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-7">
    <div class="u-layout">
      <div class="u-layout-col">
        <div class="u-size-60">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-15" src="">
              <div class="u-absolute-hcenter u-background-video" >
              </div>
              <div class="u-container-layout u-container-layout-27">
                <div class="embed-responsive">
                  <video src="https://vava-lineups.vercel.app/files/BREEZE-ATK-BOMB-B-CEMITÉRIO-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                    <p>Your browser does not support HTML5 video.</p>
                  </video>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-28">
              <div class="u-container-layout u-container-layout-28 u-container-foda">
                <h2 class="u-align-center u-text u-text-26">Ultimate-&nbsp;<br> Bomb B Parede CT</h2>
                <p class="u-align-center u-text u-text-27">Ultimate utilizada no cemitério e deixando uma brecha na frente da caixa.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
    <div class="u-layout">
      <div class="u-layout-col">
        <div class="u-size-30">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
              <div class="u-container-layout u-container-layout-24 u-container-foda">
                <h2 class="u-align-center u-text u-text-22">Defesa-&nbsp;<br> Bomb A One-Way</h2>
                <p class="u-align-center u-text u-text-23">One Way utilizado no Bomb A para evitar rush via DD.</p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
              <div class="u-container-layout u-container-layout-23">
                <div class="embed-responsive">
                  <video src="https://vava-lineups.vercel.app/files/BREEZE-DEF-BOMB-A-MID-DD-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                    <p>Your browser does not support HTML5 video.</p>
                  </video>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        ';
    }elseif($mapa == 'Bind'){
        echo '
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-4">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-8" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                    
                  </div>
                  <div class="u-container-layout u-container-layout-14">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/BIND-ATK-BOMB-A-ALADIM-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-15">
                  <div class="u-container-layout u-container-layout-15 u-container-foda">
                    <h2 class="u-align-center u-text u-text-14">Ultimate-&nbsp;<br> Bomb A Aladim</h2>
                    <p class="u-align-center u-text u-text-15"> Ultimate utilizada no Aladim com Smoke em cima do Metal Nrg, e pixel para plante DEFAULT.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-21">
                  <div class="u-container-layout u-container-layout-21 u-container-foda">
                    <h2 class="u-align-center u-text u-text-20"> Ultimate-&nbsp;<br> Bomb A Caixa Verde</h2>
                    <p class="u-align-center u-text u-text-21">Ult utlizada do lado da Caixa Verde, e usa a smoke para chegar no canto de frente pro céu.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-12" src="">
                  <div class="u-container-layout u-container-layout-22 ">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/BIND-ATK-BOMB-A-CAIXA-VERDE-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                  <div class="u-container-layout u-container-layout-23">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/BIND-ATK-BOMB-B-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                  <div class="u-container-layout u-container-layout-24 u-container-foda">
                    <h2 class="u-align-center u-text u-text-22"> Ultimate-&nbsp;<br> Bomb B Default</h2>
                    <p class="u-align-center u-text u-text-23"> Ult utilizada posição do plante default olhando para a parde, deixando uma brecha na caixa de trás para se esconder. Com pixel para molly.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-25">
                  <div class="u-container-layout u-container-layout-25 u-container-foda">
                    <h2 class="u-align-center u-text u-text-24"> Ultimate-&nbsp;<br> Bomb B Newba</h2>
                    <p class="u-align-center u-text u-text-25">Ult utlizada no newba, olhando para dentro do metal, deixando a área do plante default escondida, e os inimigos sem conseguir te ver.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-14" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                    
                  </div>
                  <div class="u-container-layout u-container-layout-26">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/BIND-ATK-BOMB-B-NEWBA-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-7">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-60">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-15" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                  </div>
                  <div class="u-container-layout u-container-layout-27">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/BIND-DEF-BOMB-A-SMOKE-MID.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-28">
                  <div class="u-container-layout u-container-layout-28 u-container-foda">
                    <h2 class="u-align-center u-text u-text-26">Defesa-&nbsp;<br> Bomb A One-Way Mid</h2>
                    <p class="u-align-center u-text u-text-27"> One-Way utilizado na caixa do meio do Bomb A. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        ';
    }elseif($mapa == 'Haven'){
        echo '
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-3">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-7">
                  <div class="u-container-layout u-container-layout-7 u-container-foda">
                    <h2 class="u-align-center u-text u-text-10">Ultimate-&nbsp;<br> Bomb A Default</h2>
                    <p class="u-align-center u-text u-text-9">Ultimate utilizado na frente da Caixa Verde no plante Default, e deixando um brecha para se esconder atrás da caixa. Se for fazer o lineup utilizado no vídeo cuidado para não pingar errado!</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-4" src="">
                  <div class="u-container-layout u-container-layout-8">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/HAVEN-ATK-BOMB-A-DEFAULT-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-4">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-8" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                    
                  </div>
                  <div class="u-container-layout u-container-layout-14">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/HAVEN-ATK-BOMB-B-DEFAULT-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-15">
                  <div class="u-container-layout u-container-layout-15 u-container-foda">
                    <h2 class="u-align-center u-text u-text-14">Ultimate-&nbsp;<br> Bomb B</h2>
                    <p class="u-align-center u-text u-text-15">Ultimate utilizada no Bomb B, é necessario uma smoke para chegar com segurança na brecha que fica na direção do DD.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-21">
                  <div class="u-container-layout u-container-layout-21 u-container-foda">
                    <h2 class="u-align-center u-text u-text-20"> Ultimate-&nbsp;<br> Bomb B</h2>
                    <p class="u-align-center u-text u-text-21">Ultimate utlizada no Bomb B perto da entrada do lado do DD, deixando uma brecha no outro lado do Plante DEFAULT.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-12" src="">
                  <div class="u-container-layout u-container-layout-22 ">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/HAVEN-ATK-BOMB-B-DD-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                  <div class="u-container-layout u-container-layout-23">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/HAVEN-ATK-BOMB-C-FECHADO-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                  <div class="u-container-layout u-container-layout-24 u-container-foda">
                    <h2 class="u-align-center u-text u-text-22"> Ultimate-&nbsp;<br> Bomb C Fechado</h2>
                    <p class="u-align-center u-text u-text-23"> Ultimate utilizada no Bomb C, no Plante FECHADO, deixando uma brecha atrás da Caixa Gorde.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-25">
                  <div class="u-container-layout u-container-layout-25 u-container-foda">
                    <h2 class="u-align-center u-text u-text-24">Ultimate-&nbsp;<br> Bomb C Madeira</h2>
                    <p class="u-align-center u-text u-text-25">Ultimate utilizada no Bomb C, pode ser com o Plante FECHADO, e você pula deixando a mira em cima da madeira.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-video u-video-14" src="">
                  <div class="u-container-layout u-container-layout-26">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/HAVEN-ATK-BOMB-C-FODA-ULT.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-7">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-60">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-15" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                  </div>
                  <div class="u-container-layout u-container-layout-27">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/HAVEN-DEF-BOMB-A-CEU-PRO-LONG-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-28">
                  <div class="u-container-layout u-container-layout-28 u-container-foda">
                    <h2 class="u-align-center u-text u-text-26">One-Way-&nbsp;<br> Bomb A</h2>
                    <p class="u-align-center u-text u-text-27">Smoke do céu para o long na entrada do Bomb A.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-6">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-24">
                  <div class="u-container-layout u-container-layout-24 u-container-foda">
                    <h2 class="u-align-center u-text u-text-22">One-Way-&nbsp;<br> Double Doors</h2>
                    <p class="u-align-center u-text u-text-23">One Way utilizado na DD, em geral pelos Defenders.</p>
                  </div>
                </div>
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-13" src="">
                  <div class="u-container-layout u-container-layout-23">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/HAVEN-DEF-DD-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-7">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-60">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-video u-video-contain u-video-15" src="">
                  <div class="u-absolute-hcenter u-background-video" >
                  </div>
                  <div class="u-container-layout u-container-layout-27">
                    <div class="embed-responsive">
                      <video src="https://vava-lineups.vercel.app/files/HAVEN-DEF-BOMB-C-SMOKE.mp4" type="video/mp4" class="embed-responsive-item" loop="" muted controls>
                        <p>Your browser does not support HTML5 video.</p>
                      </video>
                    </div>
                  </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-28">
                  <div class="u-container-layout u-container-layout-28 u-container-foda">
                    <h2 class="u-align-center u-text u-text-26">One-Way-&nbsp;<br> Bomb C</h2>
                    <p class="u-align-center u-text u-text-27">One-Way na entrada Bomb C pelo Long.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        ';
    }

}








$mapas = ['Split','Lotus','Haven','Icebox','Bind','Breeze','Ascent','Fracture','Pearl'];
if(sizeof($_POST) == 1 && in_array(addslashes($_POST['mapa']),$mapas)){
    mostrarVips();
}
?>