<?php header("Access-Control-Allow-Origin: *"); ?>
<div class="main">
    <div class="title">
        İHTİYAÇ MİKTARI
    </div>
    <div class="body">
        <button class="btn btn-primary" id="btn-calculate">
            <i class="fas fa-calculator"></i> Alan Hesapla
        </button>
        <span>Veya</span>
        <div class="input-group">
            <input type="number" id="quantity">
            <label for="quantity">m<sup>2</sup></label>
        </div>
        <span>Miktar Giriniz</span>
    </div>
    <div class="footer">
        Ürün satışlarımız kutu adeti üzerinden yapılmaktadır. Alan hesaplaması üzerinden miktar belirlerken çıkan alan metrajı kutu adetine dönüştürülmektedir.
    </div>
</div>