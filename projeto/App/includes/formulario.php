<main>

    <section>
        <a href="index.php">

            <button class="btn btn-success">volta</button>

        </a>
    </section>

    <h2 class="mt-3">cadastrar vaga</h2>

    <form method="post">

       <div class="form-groupo">
           <label>projeto pessoal</label>
           <input type="text" class="form-control" name="projeto pessoal">
        </div>

        <div class="form-group">
            <label>Descricao</label>
           <textarea class="form-control" name="descricao" rows="5"></textarea> 
        </div>

        <div class="form-group">
            <label>Status</label>

            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked>ATIVO
                    </label>
                </div>
            
                 <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n">INATIVO
                    </label>
                </div>
                    
            </div>

        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-success">ENVIAR</button>

        </div>
    
</form>

</main>    