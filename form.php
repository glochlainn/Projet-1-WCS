<section class=form id="form">
    <div class=head>
        <h2>CONTACTEZ MOI</h2>
    </div>
    <form action="index.php" method="POST" novalidate>
        <?php if (!empty($errors)) : ?>
            <ul class="error">
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="log">
            <label for="firstname">Prenom</label>
            <input type="text" name="firstname" value="<?= $data['firstname'] ?? '' ?>" required>

            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname" value="<?= $data['lastname'] ?? '' ?>" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
        </div>
        <div class="message">
            <label for="message">Message</label>
            <input type="textarea" id="message" name="message" value="<?= $data['message'] ?? '' ?>" required>
        </div>

        <button>ENVOYER</button>
    </form>
</section>