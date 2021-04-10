<?php foreach($karts as $karta): ?> 
<div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?= $karta['title'] ?></h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div><iframe width="560" height="315" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <div class="modal-body">
                <p>Содержимое модального окна...</p>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>