<?php
    include_once("templates/header.php")
?>
    <div id="main-container">
        <!-- Informações de endereço -->
        <div id="address-container">
            <div class="fade"></div>
            <div id="address-content">
                <h2><ion-icon name="navigate-outline"></ion-icon> Endereço</h2>
                <p>Rua das Flores, 133</p>
                <h2><ion-icon name="call-outline"></ion-icon> Telefone</h2>
                <p>(48) 9999-9999</p>
                <h2><ion-icon name="mail-outline"></ion-icon> E-mail</h2>
                <p>meuemail@email.com</p>
            </div>
        </div>
        <!-- Formulário para contato -->
        <div id="form-container">
            <h2>Nos mande uma mensagem!</h2>
            <form id="contact-form">
                <label for="name">Nome:</label>
                <input type="text" name="name" placeholder="Digite seu nome">
                <label for="email">E-mail:</label>
                <input type="email" name="email" placeholder="Digite seu e-mail">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" placeholder="Digite seu telefone">
                <label for="msg">Sua mensagem:</label>
                <textarea name="msg" placeholder="Como podemos te ajudar?"></textarea>
                <input type="submit" value="Enviar Mensagem">
            </form>
        </div>
    </div>
    
<?php
    include_once("templates/footer.php")
?>
