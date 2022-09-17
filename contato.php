<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Anubis Tattoo Studio</title>
</head>
<body>
    <div>
        <!-- Logo e menu -->
        <?php
            include("header.php");
        ?>
    </div>

    <div id="area">
        <!-- Formulario de contato -->
        <h1>Fale Conosco</h1>
        <form id="form" autocomplete="off" action="form.php" method="POST">
            <fieldset>
                <legend>Formulário</legend>
                <label for="name">Nome Completo: </label>
                <input type="text" id="name" name="name" placeholder="John Smith">
                <br>
                <label for="phone">Telefone: </label>
                <input type="tel" id="phone" name="phone" placeholder="(11) 555-6666">
                <br>
                <label for="email">E-mail: </label>
                <input type="email" id="email" name="email" placeholder="anubis_tattoo@gmail.com">
                <br>
                <label for="subject">Assunto: </label>
                <select id="subject" name="subject">
                    <option value="informacoes">Informações</option>
                    <option value="sugestoes">Sugestões</option>
                    <option value="reclamacoes">Reclamações</option>
                </select>
                <br>
                <label for="message">Mensagem: </label>
                <textarea id="message" name="message" maxlength="200" placeholder="Escreva sua mensagem (max. 200 caracteres)"></textarea>
                <br>
                <button id="button" name="send" type="submit" value="Submit">Enviar</button>
                <button name="erase" type="reset" value="Reset">Limpar</button>
            </fieldset>
        </form>

        
    </div>
    <br>
    <div>
        <div class="mapa">
            <h3>Venha nos visitar: </h3>
            <!-- Mapa -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6937053370702!2d-46.640729785451974!3d-23.54351646681776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58519cff9bc3%3A0x6aa55e7150be1971!2sGaleria%20do%20Rock!5e0!3m2!1spt-BR!2sbr!4v1652642498288!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div>
            <!-- Horário de funcionamento e contato -->
            <div class="contato">
                <span id="span1">
                    <br>
                    <h3>Horário de funcionamento: </h3>
                    <p>Seg.: 8:00 - 19:00 <br>
                    Ter.: 8:00 - 19:00 <br>
                    Qua.: 8:00 - 19:00 <br>
                    Qui.: 8:00 - 19:00 <br>
                    Sex.: 8:00 - 19:00 <br>
                    Sabádos: 8:00 - 18:00 <br>
                    Domingos: Fechado</p>
                </span>
                <br>
                <h3>Contato: </h3>
                <p>Telefone: (11) 555-6666 <br>
                E-mail: anubis_tattoo@gmail.com</p>
            </div>
        </div>
    </div>
    <footer>
        <br> <br>
    </footer>
</body>
</html>