<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('save') }}" method="POST">
            <div class="modal-content p-4">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hızlı Başvuru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="mb-2">Ad Soyad <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" placeholder="Adınız Soyadınız" required
                               class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="mb-2">Telefon <span class="text-danger">*</span></label>
                        <input type="text" name="phone" id="phone" required placeholder="05** *** ****"
                               class="form-control form-control-lg">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="mb-2">Eposta</label>
                        <input type="email" name="email" id="email"
                               class="form-control form-control-lg">
                    </div>
                    <div>
                        Müşteri temsilcilerimiz en yakın zamanda verdiğiniz bilgiler doğrultusunda
                        sizinle iletişime geçecektir.
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center text-center border-top-0">
                    <button type="submit" class="btn btn-lg btn-success w-100" data-bs-dismiss="modal">
                        Başvurunu Tamamla
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://unpkg.com/imask"></script>
<script>
    const element = document.getElementById('phone');
    const maskOptions = {
        mask: '0000 000 0000'
    };
    const mask = IMask(element, maskOptions);
</script>
