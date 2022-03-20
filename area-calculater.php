<?php header("Access-Control-Allow-Origin: *"); ?>
<div class="calculater">
    <div class="title">
        <div class="row head">
            ALAN HESAPLAMA
            <i class="fas fa-times"></i>
        </div>
        <div class="row info">
            Alan ölçülerinizi metre cinsinden girip, alanınızın m<sup>2</sup> boyutunuzu öğrenebilirsiniz.            
        </div>
    </div>
    <div class="body">
        <div class="input-group">
            <input type="number" id="firstValue">
            <span>Uzunluk</span>
        </div>
        <span>X</span>
        <div class="input-group">
            <input type="number" id="secondValue">
            <span>Genişlik</span>
        </div>
        <span>=</span>
        <input type="text" placeholder="0 m²" id="resultValue" disabled readonly>
    </div>
    <div class="footer">
        <button class="btn btn-primary disabled">
            (Kdv Dahil) Toplam Tutar
            <span data-selector='total-amount'>0,00 TL</span>
        </button>
        <button class="btn btn-primary" data-selector="use-this-value">Bu Miktarı Kullan</button>
    </div>
</div>