
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="assets/css/Cad-Pj1.css">
        <link rel="stylesheet" href="assets/css/Cad-Pj2.css">
        
        
        
    </head>
    <body>

        <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

/* Fim Cad-Pj1 */
/* Inicio do corpo do site */
body{
    background-color: #22223b;
    color: #fff;
    max-width: 1500px;
    margin: 0 auto;
    padding: 15px;
}

header{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}

#title{
    flex-direction: column;
    line-height: 10px;
}

li{
    display: inline-block;
    margin: 20px;
}

h1{
    font-weight: 300;
}

main{
    display: flex;
    flex-direction: row;
    margin-top: 210px;
}

h2{
    font-size: 56px;
    line-height: 75px;
    
}

span{
    color: #ff6700;
}

p{
    line-height: 30px;
    max-width: 500px;

}

img{
    width: 580px;
    margin-left: 350px;
}

a{
    color: #fff;
    text-decoration: none;
}

a:hover{
    color: #ff6700;
    transition: 0.3s all;
}

#inscreva-se-button{
    border: 2px solid #ff6700;
    padding: 10px;
    border-radius: 15px;
}

#inscreva-se-button:hover{
    background-color: #ff6700;
    color: #fff;
}

form{
    display: flex;
    flex-direction: column;
    width: 70%;
}

.cadastrar{
    height: 50px;
    width: 40%;
    background-color: #ff6700;
    color: #fff;
    font-weight: bold;
    border-radius: 20px;
    margin-top: 20px;
    border: none;
}

.cadastrar a{
    color: #FFF;
}

input{
    width: 500px;
    margin-top: 20px;
    height: 50px;
    padding: 15px;
    border-radius: 20px;
    border: none;
    font-size: 15px;
}

span{
    color: #FF6700
}

span.sobre{
    display: flex;
    margin-left: 550px;
    margin-top: 50px;
    font-size: 45px;
    line-height: 10px;
    transition: 1s;
    transition: 0.5s;
}
/* Fim do corpo do site */

.container header::before{
    content: "";
   
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container form{
    
    padding-right: 200px;
    margin-top: 460px;
}
.container form .form{
    position: absolute;
    background-color: transparent;
    transition: 0.3s ease;
    margin-right: 200px;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: flex;
    margin-bottom: 8px;
    justify-content: center;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #fff;
  
    padding: 20px;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #fff;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .editar_dados{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #000000;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #e6bc63;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .editar_dados{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #f2e48b;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .editar_dados i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .editar_dados{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }

}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
    

}

.container span .title{

    display: flex;
} /* Fim Cad-Pj1 */

/* Inicio Cad-Pj2 */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    min-height: 100vh;
    background-color: var(--primary-color);
    background-color: #22223b; /* Cor de fundo do site */
}
body.dark{
    --primary-color: #3A3B3C;
    --panel-color: #242526;
    --text-color: #CCC;
    --black-light-color: #CCC;
    --border-color: #4D4C4C;
    --toggle-color: #FFF;
    --box1-color: #3A3B3C;
    --box2-color: #3A3B3C;
    --box3-color: #3A3B3C;
    --title-icon-color: #CCC;
}
/* === Custom Scroll Bar CSS === */
::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 12px;
    transition: all 0.3s ease;
}



body.dark::-webkit-scrollbar-thumb:hover,
body.dark .activity-data::-webkit-scrollbar-thumb:hover{
    background: #3A3B3C;
}

nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background-color: var(--panel-color);
    border-right: 1px solid var(--border-color);
    transition: var(--tran-05);
}
nav.close{
    width: 73px;
}
nav .logo-name{
    display: flex;
    align-items: center;
}
nav .logo-image{
    display: flex;
    justify-content: center;
    min-width: 45px;
}
nav .logo-image img{
    width: 40px;
    object-fit: cover;
    border-radius: 50%;
}

nav .logo-name .logo_name{
    font-size: 22px;
    font-weight: 600;
    color: var(--text-color);
    margin-left: 14px;
    transition: var(--tran-05);
}
nav.close .logo_name{
    opacity: 0;
    pointer-events: none;
}
nav .menu-items{
    margin-top: 40px;
    height: calc(100% - 90px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.menu-items li{
    list-style: none;
}
.menu-items li a{
    display: flex;
    align-items: center;
    height: 50px;
    text-decoration: none;
    position: relative;
}
.nav-links li a:hover:before{
    content: "";
    position: absolute;
    left: -7px;
    height: 5px;
    width: 5px;
    border-radius: 50%;
    background-color: var(--primary-color);
}
body.dark li a:hover:before{
    background-color: var(--text-color);
}
.menu-items li a i{
    font-size: 24px;
    min-width: 45px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--black-light-color);
}
.menu-items li a .link-name{
    font-size: 18px;
    font-weight: 400;
    color: var(--black-light-color);    
    transition: var(--tran-05);
}
nav.close li a .link-name{
    opacity: 0;
    pointer-events: none;
}
.nav-links li a:hover i,
.nav-links li a:hover .link-name{
    color: var(--primary-color);
}
body.dark .nav-links li a:hover i,
body.dark .nav-links li a:hover .link-name{
    color: var(--text-color);
}
.menu-items .logout-mode{
    padding-top: 10px;
    border-top: 1px solid var(--border-color);
}
.menu-items .mode{
    display: flex;
    align-items: center;
    white-space: nowrap;
}
.menu-items .mode-toggle{
    position: absolute;
    right: 14px;
    height: 50px;
    min-width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}
.mode-toggle .switch{
    position: relative;
    display: inline-block;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
}
.switch:before{
    content: "";
    position: absolute;
    left: 5px;
    top: 50%;
    transform: translateY(-50%);
    height: 15px;
    width: 15px;
    background-color: var(--panel-color);
    border-radius: 50%;
    transition: var(--tran-03);
}
body.dark .switch:before{
    left: 20px;
}

.dashboard{
    position: relative;
    left: 250px;
    background-color: var(--panel-color);
    min-height: 100vh;
    width: calc(100% - 250px);
    padding: 10px 14px;
    transition: var(--tran-05);
}
nav.close ~ .dashboard{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top{
    position: fixed;
    top: 0;
    left: 250px;
    display: flex;
    width: calc(100% - 250px);
    justify-content: space-between;
    align-items: center;
    padding: 10px 14px;
    background-color: var(--panel-color);
    transition: var(--tran-05);
    z-index: 10;
}
nav.close ~ .dashboard .top{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top .sidebar-toggle{
    font-size: 26px;
    color: var(--text-color);
    cursor: pointer;
}
.dashboard .top .search-box{
    position: relative;
    height: 45px;
    max-width: 600px;
    width: 100%;
    margin: 0 30px;
}
.top .search-box input{
    position: absolute;
    border: 1px solid var(--border-color);
    background-color: var(--panel-color);
    padding: 0 25px 0 50px;
    border-radius: 5px;
    height: 100%;
    width: 100%;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 400;
    outline: none;
}
.top .search-box i{
    position: absolute;
    left: 15px;
    font-size: 22px;
    z-index: 10;
    top: 50%;
    transform: translateY(-50%);
    color: var(--black-light-color);
}
.top img{
    width: 40px;
    border-radius: 50%;
}
.dashboard .dash-content{
    padding-top: 50px;
}
.dash-content .title{
    display: flex;
    align-items: center;
    margin: 60px 0 30px 0;
}


.dash-content .boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.dash-content .boxes .box{
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 12px;
    width: calc(100% / 3 - 15px);
    padding: 15px 20px;
    background-color: var(--box1-color);
    transition: var(--tran-05);
}
/* Fim Cad-Pj2 */
        </style>

        <header> <!-- Inicio Cabeçalho -->
            <div id="title">
                <h1>MobilyTech</h1>
             </div>

            <ul>
                <li><a href="Tecnicos.php">Tecnicos</a></li>
                <li><a href="#">Chamados</a></li>
                <li><a href="#">Contatos</a></li>
                <li><a href="#h2sobre">Sobre</a></li>
            </ul>
        </header> <!-- Fim Cabeçalho --> 


            <div class="container">
                <form action="cadastrarEmpresa.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title"><h3>Informações de cadastro</h3></span>
        
                            <div class="fields">
                                <div class="input-field">
                                    <label>Nome Completo</label>
                                    <input type="text" placeholder="Informe o nome completo" name="nome" >
                                </div>
        
                                <div class="input-field">
                                    <label>Data de Nascimento</label>
                                    <input type="date" placeholder="Insira a data de nascimento" name="data_de_nascimento">
                                </div>
        
                                <div class="input-field">
                                    <label>Email</label>
                                    <input type="email" placeholder="Informe seu e-mail" name="email" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Número de telefone</label>
                                    <input type="tel" placeholder="Informe seu telefone" name="telefone">
                                </div>
        
                                <div class="input-field">
                                    <label>Sexo</label>
                                    <select name="sexo">
                                        <option>Selecione o seu sexo</option>
                                        <option>Masculino</option>
                                        <option>Feminino</option>
                                    </select>
                                </div>
        
                                <div class="input-field">
                                    <label>Nº do CPF</label>
                                    <input type="text" placeholder="Informe o seu CPF" name="cpf">
                                </div>
                            </div>
                        </div>
                        <div class="details ID">

                            <span class="title"><h3>Informações de endereço</h3></span>
                            
        
                            <div class="fields">
                                <div class="input-field">
                                    <label> Endereco</label>
                                    <input type="text" placeholder="Insira o seu endereço"  name="endereco">
                                </div>
        
                                <div class="input-field">
                                    <label>N° de Endereço</label>
                                    <input type="text" placeholder=" Número do seu endereço" name="n_endereco">
                                </div>
        
                                <div class="input-field">
                                    <label>CEP</label>
                                    <input type="text" placeholder=" CEP do seu endereço"  name="cep">
                                </div>
        
                                <div class="input-field">
                                    <label>Bairro</label>
                                    <input type="text" placeholder="Bairro onde recide" name="bairro">
                                </div>
        
                                <div class="input-field">
                                    <label>Cidade</label>
                                    <input type="text" placeholder="Informe a cidade onde mora" name = "cidade">
                                </div>
        
                                <div class="input-field">
                                    <label>Estado</label>
                                    <input type="text" placeholder="Informe o estado de onde mora" name="estado">
                                </div>

                               

                                

                               
                             
                                
                                
                            </div>
                        </div>

                        <div class="details ID">

                            <span class="title"><h3>Informações de Login</h3></span>
                            
        
                            <div class="fields">
                                <div class="input-field">
                                    <label> Senha</label>
                                    <input type="text" placeholder="crie a senha do seu usuário"  name="senha">
                                </div>

                                <div class="input-field">
                                    <label> Confirmar senha</label>
                                    <input type="text" placeholder="Confirme a sua senha"  name="c_senha">
                                </div>

                            </div>
                        </div>
                                <div class="fields">
                                    <input class="editar_dados" type="submit" value="editar" name="editar">
                                </div>
                            </div>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>

                </body>
                </html>                               

                                

                               
                             
                                
                                
                          

                        
 
