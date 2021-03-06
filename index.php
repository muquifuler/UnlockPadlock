<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/styles-index.css">
    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sha256-js-tools@1.0.2/lib/sha256.min.js"></script>
    <script src="./js/app.js"></script>
</head>
<body>
    
    <header>
        <div style="display: flex; margin-top: 2vh; margin-bottom: 2vh;">
            <div style="margin-left: auto;">
                <img onclick="redirect('whitepaper')" class="ico" src="https://img.icons8.com/fluency-systems-regular/50/000000/news.png"/>
                <img onclick="alert('tutorial')" class="ico" src="https://img.icons8.com/fluency-systems-regular/50/000000/idea.png"/>
            </div>
            <span class="title" onclick="inicio()">Unlock Padlock</span>
            <div style="margin-right: auto;">
                <img onclick="alert('comprar una pista, proximamente')" class="ico" src="https://img.icons8.com/fluency-systems-regular/50/000000/key.png"/>
                <img onclick="alert('idioma')" class="ico" src="./img/icons8-gran-bretaña-48.png" style="-webkit-filter: invert(0%); filter: invert(0%);"/>
            </div>
        </div>
        <hr style="margin-bottom: 2vh;">
        <span id="resumen" class="tutorial">Multiply your investment when opening the lock, if you hit the letter it is marked yellow and if you hit<br> the letter and position in green, mark all in green to win. Good luck!</span>
    </header>

    <main id="main1" style="display: none;">
        <table class="table1">
            <tr>
                <td class="td1" id="try11"></td><td class="td1" id="try21"></td><td class="td1" id="try31"></td><td class="td1" id="try41"></td><td class="td1" id="try51"></td>
                <td class="x">x100</td>
            </tr>
            <tr>
                <td class="td1" id="try12"></td><td class="td1" id="try22"></td><td class="td1" id="try32"></td><td class="td1" id="try42"></td><td class="td1" id="try52"></td>
                <td class="x">x50</td>
            </tr>
            <tr>
                <td class="td1" id="try13"></td><td class="td1" id="try23"></td><td class="td1" id="try33"></td><td class="td1" id="try43"></td><td class="td1" id="try53"></td>
                <td class="x">x20</td>
            </tr>
            <tr>
                <td class="td1" id="try14"></td><td class="td1" id="try24"></td><td class="td1" id="try34"></td><td class="td1" id="try44"></td><td class="td1" id="try54"></td>
                <td class="x">x10</td>
            </tr>
            <tr>
                <td class="td1" id="try15"></td><td class="td1" id="try25"></td><td class="td1" id="try35"></td><td class="td1" id="try45"></td><td class="td1" id="try55"></td>
                <td class="x">x4</td>
            </tr>
            <tr>
                <td class="td1" id="try16"></td><td class="td1" id="try26"></td><td class="td1" id="try36"></td><td class="td1" id="try46"></td><td class="td1" id="try56"></td>
                <td class="x">x2</td>
            </tr>
            <tr>
                <td class="td1" id="try17"></td><td class="td1" id="try27"></td><td class="td1" id="try37"></td><td class="td1" id="try47"></td><td class="td1" id="try57"></td>
                <td class="x">x1</td>
            </tr>
            <tr>
                <td class="td1" id="try18"></td><td class="td1" id="try28"></td><td class="td1" id="try38"></td><td class="td1" id="try48"></td><td class="td1" id="try58"></td>
                <td class="x">x0.5</td>
            </tr>
        </table>
    </main>

<!-- Inicio -->

    <main id="main4">
        <table class="table1">
            <tr>
                <td class="td1" id="_try11">U</td><td class="td1" id="_try21">N</td><td class="td1" id="_try31">L</td><td class="td1" id="_try41">O</td><td class="td1" id="_try51">C</td>
            </tr>
            <tr>
                <td class="td1" id="_try12">K</td><td class="td1" id="_try22">P</td><td class="td1" id="_try32">A</td><td class="td1" id="_try42">D</td><td class="td1" id="_try52">L</td>
            </tr>
            <tr>
                <td class="td1" id="_try13">O</td><td class="td1" id="_try23">C</td><td class="td1 _try33" id="_try33" rowspan="4" onclick="play_()"><span class="sp_play">P</span><span class="sp_play la">L</span><span class="sp_play la">A</span><span class="sp_play">Y</span></td><td class="td1" id="_try43">U</td><td class="td1" id="_try53">N</td>   
            </tr>
            <tr>
                <td class="td1" id="_try14">L</td><td class="td1" id="_try24">O</td><td class="td1" id="_try44">K</td><td class="td1" id="_try54">P</td>                
            </tr>
            <tr>
                <td class="td1" id="_try15">A</td><td class="td1" id="_try25">D</td><td class="td1" id="_try45">O</td><td class="td1" id="_try55">C</td>               
            </tr>
            <tr>
                <td class="td1" id="_try16">K</td><td class="td1" id="_try26">U</td><td class="td1" id="_try46">L</td><td class="td1" id="_try56">O</td>               
            </tr>
            <tr>
                <td class="td1" id="_try17">C</td><td class="td1" id="_try27">K</td><td class="td1" id="_try37">P</td><td class="td1" id="_try47">A</td><td class="td1" id="_try57">D</td>               
            </tr>
            <tr>
                <td class="td1" id="_try18">L</td><td class="td1" id="_try28">O</td><td class="td1" id="_try38">C</td><td class="td1" id="_try48">K</td><td class="td1" id="_try58">U</td>               
            </tr>
        </table>
    </main>
    
<!-- Play -->

    <main id="main2" style="display: flex; display: none;">
        <div style="padding-left: 15%; width: 35%; text-align: center; padding-top: 1vh;">
            <ul>
                <li><button id="connect" onclick="Connect()" class="c_wallet">Connect Wallet</button></li>
                <li id="walllet">da</li><!--<span id="connected" style="display:none;">Connect Wallet</span>-->
                <li id="buy" style="display:none;">Amount of BNB between 0.010 to 0.15</li>
                <li style="padding:40px;">
                    <input id="buy1" style="display:none;" class="claim" type="text" placeholder="Min 0.010 BNB | Max 0.15 BNB" style="margin-bottom: 5vh; padding: 10px;" value="">
                    <button id="buy2" style="display:none;" class="pay" onclick="bet()">Go</button>
                </li>
                <div id="bet_text">
                    <li>Multiply your investment by opening the lock!</li>
                    <li>Mark all the boxes in green as soon as possible to get the most benefit.</li>
                    <li><span class="green">Green:</span> the letter is, and the position is correct.</li>
                    <li><span class="yellow">Yellow:</span> the letter is, but not in the correct position.</li>
                    <li>Good luck!</li>
                </div>
                <div id="bet_loading" style="display:none;">
                    <li class="loader" id="loader">Multiply your investment by opening the lock!</li>
                </div>
            </ul>
        </div>
        <div style="padding-right: 15%; width: 35%; ">
            <img src="./img/up.png" alt="">
        </div>
    </main>

<!-- Finish -->

    <main id="main3" style="text-align: center; display: none;">
        <ul style="margin-left: auto; margin-right: auto; width: 35%; text-align: center; padding:0; padding-top: 1vh;">
            <li id="exito" class="li-reward" style="font-size: 55px;">Congratulations!</li>
            <li class="li-reward">Claim your reward</li>
            <li class="li-reward">
                <span class="bnb" id="bnb_claim">0 BNB</span>
                <button class="pay" onclick="pago()">Claim</button>
            </li>
            <li class="li-reward">Another try?</li>
            <li class="li-reward"><button class="pay" onclick="play_()">Go</button></li>
            <li class="li-reward">Share your game on social networks.</li>
            <li class="li-reward">
                <img src="https://img.icons8.com/fluency/48/000000/facebook.png"/>
                <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/>
                <img src="https://img.icons8.com/fluency/48/000000/twitter.png"/>
                <img src="https://img.icons8.com/fluency/50/000000/whatsapp.png"/>
                <img src="https://img.icons8.com/fluency/50/000000/reddit.png"/>
            </li>
        </ul>
    </main>

    <footer id="footer1" style="display: none;">
        <div class="buttons">
            <div class="teclado">
                <button onclick="write_('Q')" >Q</button>
                <button onclick="write_('W')" >W</button>
                <button onclick="write_('E')" >E</button>
                <button onclick="write_('R')" >R</button>
                <button onclick="write_('T')" >T</button>
                <button onclick="write_('Y')" >Y</button>
                <button onclick="write_('U')" >U</button>
                <button onclick="write_('I')" >I</button>
                <button onclick="write_('O')" >O</button>
                <button onclick="write_('P')" >P</button>
            </div>
            <div class="teclado">
                <button onclick="write_('A')">A</button>
                <button onclick="write_('S')">S</button>
                <button onclick="write_('D')">D</button>
                <button onclick="write_('F')">F</button>
                <button onclick="write_('G')">G</button>
                <button onclick="write_('H')">H</button>
                <button onclick="write_('J')">J</button>
                <button onclick="write_('K')">K</button>
                <button onclick="write_('L')">L</button>
                <button onclick="write_('-')">-</button>
            </div>
            <div class="teclado">
                <button style="width: 15%;" onclick="comprobarLinea()">SEND</button>
                <button onclick="write_('Z')">Z</button>
                <button onclick="write_('X')">X</button>
                <button onclick="write_('C')">C</button>
                <button onclick="write_('V')">V</button>
                <button onclick="write_('B')">B</button>
                <button onclick="write_('N')">N</button>
                <button onclick="write_('M')">M</button>
                <button style="width: 15%;" onclick="borrar()"><</button>
            </div>
        </div>
    </footer>
</body>
</html>
