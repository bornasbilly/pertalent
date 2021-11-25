        <div class="footer bg-gradient">
            <p>pertalent by katiga.tv © <?= date('Y')?></p>
        </div>
        <div id="thxPopup" class="thanks-modal">
            <div class="vote-modal-content">
                <h1>Thank you For<br>The Vote!</h1>
                <p class="mb-2 mt-2"><i class="fas fa-info-circle"></i> Sisa poin my pertamina anda <span class="highlight">336 poin</span></p>
                <a id="btnBack" class="vote-btn" href="<?= $site_url; ?>">Back</a>
            </div>
        </div>
    </div>
    <script> togglePass(); mobileMenu(); voteModal(); loadMore();</script>
</body>
</html>