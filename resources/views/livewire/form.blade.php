<div class="row">
    <div class="col-12">
        @livewire('header')
        <form method="POST" id="assecoForm" class="py-3">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-5">
                    <label for="originAccount" class="form-label">Origin Account</label>
                    <select class="form-select" id="originAccount" aria-label="Default select example">
                        <option selected value="999403020030">My Account - 999403020030</option>
                        <option value="999403020031">My 2nd Account - 999403020031</option>
                        <option value="999403020032">My 3rd Account - 999403020032</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-5">
                    <div class="mb-3">
                        <label for="destinationIban" class="form-label">Destination IBAN</label>
                        <input type="email" class="form-control" id="destinationIban" placeholder="PT500...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="mb-3">
                        <label for="transferDescription" class="form-label">Transfer Description</label>
                        <textarea class="form-control" id="transferDescription" rows="3" placeholder="This is an example transaction description that spans more than one line"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-2">
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="email" class="form-control" id="amount" placeholder="€€€">
                    </div>
                </div>
            </div>
            <div class="row flex-column min-vh-30">
                <div class="col-12 col-sm-3 mt-auto">
                    <button id="nextStepBtn" type="submit" class="btn btn-primary">Next Step</button>
                </div>
            </div>
        </form>
    </div>
</div>
