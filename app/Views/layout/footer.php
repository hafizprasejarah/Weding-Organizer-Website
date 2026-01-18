<footer class="text-center py-6 text-sm text-gray-600 bg-[#f9cfd3]">
    © <span id="year"></span> <strong>Hafiz Pratama</strong>. All rights reserved.
</footer>

<script src="<?= base_url('script/script.js') ?>"></script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const yearEl = document.getElementById('year');
        if (yearEl) {
            yearEl.textContent = new Date().getFullYear();
        }
    });
</script>