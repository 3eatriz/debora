<style>
    .modal-whats {
        position: fixed;
        bottom: 100px;
        right: 20px;
        z-index: 998;
        color: #fff;
        width: 100%;
        max-width: 300px;
        transform: translateX(350px);
        transition: all 0.3s ease-in-out
    }

    .modal-whats.active {
        transform: translateX(0)
    }

    .modal-whats-top {
        display: flex;
        gap: 24px;
        align-items: center;
        background-color: #0a6055;
        padding: 16px 16px;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px
    }

    .modal-whats-top img {
        width: 100px;
        height: auto
    }

    .modal-whats-middle {
        background-image: url("https://renovedigital.com.br/btnwpp/bg-whats.png");
        padding: 32px 16px;
        position: relative;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        opacity: 0;
        transform: translateX(-20px);
        transition: opacity 0.5s, transform 0.5s
    }

    .modal-whats.active .modal-whats-middle {
        opacity: 1;
        transform: translateX(0);
        max-height: 400px;
        overflow-y: auto;
    }

    .modal-whats-middle .order_text_whats {
        opacity: 0;
        transform: translateX(-20px);
        transition: opacity 0.5s, transform 0.5s
    }

    .modal-whats.active .modal-whats-middle .order_text_whats {
        opacity: 1;
        transform: translateX(0);
        transition-delay: .3s
    }

    .modal-whats.active .modal-whats-middle .wpcf7-form-control-wrap input,
    .modal-whats.active .modal-whats-middle .wpcf7-form-control-wrap textarea,
    .modal-whats.active .modal-whats-middle .wpcf7-form-control-wrap button {
        opacity: 1;
        transform: translateX(0)
    }

    .modal-whats-bottom {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #fff;
        justify-content: center;
        padding: 16px 8px;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px
    }

    .modal-whats-bottom .icon-whats {
        position: absolute;
        left: 15%;
        top: 28px
    }

    #wppp input[type="submit"] {
        width: 100%;
        margin: 0 auto;
        background-color: var(--blue) !important;
        color: #fff !important;
        cursor: pointer;
        border-radius: 8px
    }

    .label-form {
        position: relative
    }

    .label-form-whats {
        position: absolute;
        color: #919191;
        top: 13px;
        left: 8px
    }

    .modal-whats-middle input:focus {
        border: 1px solid #07af69
    }

    .wpcf7-spinner {
        position: absolute
    }

    .btn-floating {
        position: fixed;
        bottom: 0;
        right: 0;
        margin: 0 30px 20px 0;
        z-index: 999;
        cursor: pointer;
        animation: pulse 3s infinite;
        background: #12c655;
        padding: 12px;
        border-radius: 50%;
        transition: all 0.3s ease-in-out
    }

    .btn-floating.active {
        background: #fff
    }

    .btn-floating.active .whats-float {
        display: none
    }

    .btn-floating .x-float {
        display: none
    }

    .btn-floating.active .x-float {
        display: block
    }

    .modal-whats-middle .wpcf7-form select::placeholder,
    .modal-whats-middle .wpcf7-form input::placeholder {
        color: #6e7191
    }

    .modal-whats-middle .wpcf7-form input {
        height: 50px !important;
        border-radius: 8px;
        background-color: #FFF !important;
        width: 100%;
        padding: 0 16px;
        border: 1px solid #d6d8e7;
        font-size: 16px;
        font-family: "Inter";
        font-style: normal;
        font-weight: 400;
        margin-bottom: 12px
    }

    .modal-whats-middle .wpcf7-form input[type="submit"] {
        width: 100% !important;
        gap: 8px;
        background-color: #0a6055 !important;
        box-shadow: 0px 3px 5px rgba(112, 112, 112, 0.15);
        border-radius: 4px;
        height: 45px;
        color: #fff !important;
        padding: 0px;
        margin: 0px;
        transition-delay: 1.5s;
        cursor: pointer
    }

    .modal-whats-top {
        display: flex;
        gap: 8px
    }

    .nome_empresa {
        color: #FFF;
        font-size: 16px
    }

    .online {
        color: white;
        font-size: 12px
    }

    .modal-whats-top-rigth img {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        margin-left: 8px
    }

    .box_whats {
        position: absolute;
        top: 1px;
        left: -7px;
        z-index: 1 !important
    }

    .order_text_whats {
        display: flex;
        position: relative;
        margin-bottom: 12px
    }

    .text_whats {
        color: #14142b;
        background: #fff;
        border: 1px solid #d6d8e7;
        padding: 12px 16px 30px 16px;
        border-radius: 0px 8px 8px 8px;
        width: 100%;
        min-width: 268px;
        z-index: 0 !important
    }

    #adjustedTime {
        color: #14142b;
        font-size: 12px;
        opacity: .8;
        position: absolute;
        right: 8px;
        bottom: 6px
    }

    @keyframes pulse {
        0% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(51, 217, 178, 0.7)
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(51, 217, 178, 0)
        }

        100% {
            transform: scale(0.95);
            box-shadow: 0 0 0 0 rgba(51, 217, 178, 0)
        }
    }

    @media (max-width:1200px) {

        .container_contact,
        .wpcf7-form {
            margin: 0 auto
        }
    }
</style>

<div class="modal-whats">
    <div class="modal-whats-top">
        <div class="modal-whats-top-rigth">
            <!-- Trocar a URL da logo pela URL da logo do cliente logo dentro do src, exemplo: src="URL AQUI" -->
            <img src="https://renovedigital.com.br/btnwpp/logo.png" alt="">
        </div>
        <div class="modal-whats-top-left">
            <!-- Trocar nome da empresa pelo nome da empresa do cliente -->
            <h3 class="nome_empresa">WAE</h3>
            <p id="onlineStatus" class="online"></p>
        </div>
    </div>

    <div class="modal-whats-middle">
        <div class="order_text_whats">
            <svg viewBox="0 0 8 13" height="13" width="8" preserveAspectRatio="xMidYMid meet" class="box_whats"
                version="1.1" x="0px" y="0px" enable-background="new 0 0 8 13">
                <title>tail-in</title>
                <path opacity="0.13" fill="#f7f7fc" d="M1.533,3.568L8,12.193V1H2.812 C1.042,1,0.474,2.156,1.533,3.568z">
                </path>
                <path fill="currentColor" d="M1.533,2.568L8,11.193V0L2.812,0C1.042,0,0.474,1.156,1.533,2.568z"></path>
            </svg>
            <div>
                <p class="text_whats"><span id="typingText">Preencha os dados abaixo e inicie uma conversa imediatamente
                        via WhatsApp.</span></p>
                <p class="text_hora">
                <p id="adjustedTime"></p>
                </p>
            </div>
        </div>
        <!-- Trocar shortcode pelo shortcode gerado no contact form 7 -->
        <?= do_shortcode('[contact-form-7 id="634e21d" title="wpp"]') ?>
    </div>
</div>

<!--whats-flutuante-->
<div class="btn-floating" id="btnFloating">
    <img class="whats-float" src="https://renovedigital.com.br/btnwpp/whats-flutuante2.png" alt="abrir formulário">
    <img class="x-float" src="https://renovedigital.com.br/btnwpp/vector-x.png" alt="fechar formulário">
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var adjustedTime = document.getElementById("adjustedTime");

        // Ajustando o horário
        var dataHora = new Date();
        var horaAjustada = dataHora.toTimeString().substring(0, 5);

        // Inserindo o horário ajustado no elemento HTML
        adjustedTime.textContent = horaAjustada;
    });
    document.addEventListener("DOMContentLoaded", function () {
        var onlineStatus = document.getElementById("onlineStatus");

        // Verificando horário comercial
        var dataHora = new Date();
        var horaAtual = dataHora.getHours();
        var foraHorarioComercial = (horaAtual < 9 || horaAtual >= 18);

        // Adicionando classe "active" ao parágrafo se dentro do horário comercial
        if (!foraHorarioComercial) {
            onlineStatus.textContent = "Online";
            onlineStatus.classList.add("active");
        }
    });
    document.addEventListener("DOMContentLoaded", function () {
        var btnFloating = document.getElementById("btnFloating");
        var modal = document.querySelector(".modal-whats");

        // Verifica se o modal já foi exibido anteriormente
        var modalShown = localStorage.getItem("modalShown");

        // Se o modal ainda não foi exibido, configura um timer para exibi-lo após 10 segundos
        if (!modalShown) {
            setTimeout(function () {
                toggleModal();
                // Armazena no localStorage que o modal foi exibido
                localStorage.setItem("modalShown", "true");
            }, 10000); // 10000 milissegundos = 10 segundos
        }

        // Adiciona o evento de clique ao botão flutuante
        btnFloating.addEventListener("click", function () {
            toggleModal();
        });

        // Função para alternar a visibilidade do modal
        function toggleModal() {
            modal.classList.toggle("active");
            btnFloating.classList.toggle("active");
            if (modal.classList.contains("active")) {
                startTypingEffect();
            }
        }

        // Adiciona a máscara para o campo de telefone
        document.querySelector(".wpcf7-tel").addEventListener("input", function (e) {
            var x = e.target.value.replace(/\D/g, "").match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
        });

        function startTypingEffect() {
            const textElement = document.getElementById("typingText");
            const text = textElement.textContent;
            textElement.textContent = '';
            let index = 0;

            function type() {
                if (index < text.length) {
                    textElement.textContent += text.charAt(index);
                    index++;
                    setTimeout(type, 40); // Velocidade de digitação (50 ms por caractere)
                }
            }

            type();
        }
    });
</script>