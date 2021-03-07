<div class="py-5">
    <div class="row">
        <div class="container-wrapper">
            <div class="form-container address-container">
                <form action="">
                    <h2><?= $subtitle;?></h2>
                    <div class="social-container">
                        <a href="https://www.facebook.com/" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" class="social"><i class="fab fa-instagram-square"></i></a>
                        <a href="https://www.linkedin.com" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <?php if (isset($address)) : ?>
                    <label for=""><i class="fas fa-home"></i> : <?=$address['street'];?></label>
                    <label for=""><i class="fas fa-envelope-square"></i> : <?=$address['email'];?></label>
                    <label for=""><i class="fas fa-phone-square-alt"></i> : <?=$address['mobile'];?></label>
                    <label for=""><i class="fas fa-map-marker-alt"></i> : <?=$address['city'];?></label>
                    <label for=""><i class="fas fa-university"></i> : <?=$address['country'];?></label>
                    <?php endif; ?>                    
                </form>
            </div>
            <div class="form-container contact-container">
                <form action="" method="POST">
                    <h2><?= $title;?></h2>
                    <span>Напишите нам</span>
                    <input type="text" name="username" placeholder="Ваше имя" required>
                    <input type="email" name="email" placeholder="Ваш Email" required>
                    <small class="form-text text-muted">Мы никогда никому не передадим Ваш адрес электронной почты!</small>
                    <textarea name="message" id="" cols="60" rows="6" required></textarea>

                    <button type="submit">Отправьте Ваше сообщение</button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white"><i class="fas fa-envelope"></i> Комментарии</div>
                        <div class="card-body bg-primary text-white">
                        <?php
                        if(isset($messages)):                 
                            foreach ($messages as $key => $value) { 
                                echo "<p>  ".$value['username']. " : ". $value['message']. " at: "
                                .$value['created_at']."</p>";                        
                            }
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>             
    </div>  
</div>