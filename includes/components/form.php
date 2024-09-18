<?php function renderForm()
{ ?>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Suporte</h3>
        </div>
        <form method="POST" action="contact_submit.php">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Digite seu nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Title</label>
                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Digite o assunto" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="4" placeholder="Escreva sua mensagem" required></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit Message</button>
            </div>
        </form>
    </div>
<?php } ?>