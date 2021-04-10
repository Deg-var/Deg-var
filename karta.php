<?php foreach($karts as $karta): ?> 
    
    <div class="karta">
    <div class="nazvanie" data-id="<?= $karta['ssil'] ?>">
        <?= $karta['title'] ?>
    </div>
    <img class="vidos1" src="<?= $karta['img_kart'] ?>">
    <div class="podpis">
        <div class="podpis_text"><?= $karta['opis'] ?>
        </div>
        <p class="smotri"><a href="#openModal">СМОТРЕТЬ</a></p>
    </div>
</div>

<?php endforeach; ?>