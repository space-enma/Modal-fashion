


<section class="contato">
    <div class="contato1">
        <div class="contato2">
            <div class="contato-area">
                <div class="contato-area1">
                        <img src="/img/imagens/telefone.png" alt="">
                </div>   
                <div class="contato-text-area">
                    <div class="contato-text-area1">
                        <h1>Telefone</h1>
                        <p>(31) 996822917</p>
                        <p><a target="_blank" href="https://wa.me/31996822917">whatsapp</a></p>
                        
                    </div>                      
                </div>                            
            </div>
            <hr>            
            <div class="contato-area">
                <div class="contato-area1">
                       <img src="/img/imagens/cxmensagen.png" alt=""> 
                </div>   
                <div class="contato-text-area">
                    <div class="contato-text-area2">
                        <h1>Email</h1>
                        <p>spaceenma@spaceenma<br>.com.br</p> 
                    </div>                    
                </div>                     
            </div>
        </div>
        <div class="contato-form">  
            <div class="contato-text">
                <h1>Contate-Nos</h1> 
                <p>Entre em contato com a nossa equipe caso tenha alguma dúvida ou tenha interesse em ter um site online. </p>
            </div>
                      
            <form class="form-form" method="POST" action="/contatos">
                @csrf
                <label >
                    <input class="place-buttom" type="text" name="name"
                    placeholder="Nome" required>
                </label>
                <label >
                    <input class="place-buttom" type="email" name="email"
                    placeholder="Email" required>
                </label><br><br>
                <label >
                    <input class="place-buttom-tel" type="number" name="telefone"
                    placeholder="Telefone" required>
                </label><br><br>
                <label >
                    <input class="place-buttom-text" type="text" name="text"
                    placeholder="Por favor descreva o que você precisa." required>
                </label><br><br>

                <input id="buttom" type="submit" value="Enviar"/>
            </form>
        </div>
    </div>
</section>

