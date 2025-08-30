<?php include(VIEWS.'inc'.DS.'header.php'); ?>

<div class="container-fluid bg-gradient-primary">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h1 class="display-4 fw-bold mb-4">LEARN PHP MVC</h1>
                <p class="lead mb-4">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <div class="divider bg-white mx-auto mb-4"></div>
                <p class="mb-4">It uses utility classes for typography and spacing to space content out within the
                    larger container.</p>
                <a class="btn btn-light btn-lg rounded-pill px-4 py-2 fw-bold shadow" href="<?php url('products') ?>"
                    role="button">
                    SHOW PRODUCTS <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>


<?php include(VIEWS.'inc'.DS.'footer.php'); ?>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #86b7fe 0%, #f6aba1ff 100%);
}

.divider {
    width: 80px;
    height: 3px;
    opacity: 0.7;
}

.feature-icon {
    transition: transform 0.3s;
}

.card:hover .feature-icon {
    transform: scale(1.1);
}

.btn {
    transition: all 0.3s;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15) !important;
}
</style>