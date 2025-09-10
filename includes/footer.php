<footer class="bg-dark text-white py-4">
  <div class="container text-center">
    <p class="mb-1 fw-bold">Clínica Seralis</p>

    <p class="mb-1">
      <i class="fab fa-whatsapp me-2 text-success"></i> +598 98 100 583 <br>
      <i class="fab fa-whatsapp me-2 text-success"></i> +598 98 608 505
    </p>

    <p class="mb-1">
      <i class="fab fa-instagram me-2 text-warning"></i><a href="https://instagram.com/seralismontevideo" target="_blank" class="text-white text-decoration-none">@seralismontevideo</a>
    </p>

    <p class="small mb-0">Montevideo, Uruguay | © 2025 Seralis</p>
  </div>
</footer>



<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Scripts personalizados -->
<?php
// Cargar script según la página
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage === "dashboard.php") {
    echo '<script src="/FotoBioModulacion/js/dashboard.js"></script>';
}
?>
</body>
</html>
