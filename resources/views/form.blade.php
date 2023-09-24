<div class="row">
    <div class="col-12">
        @include('header', ['step' => '1', 'description' => 'Information'])
        <form method="POST" action="{{route('getFormData')}}" id="assecoForm" class="p-3">
            @csrf
            <div class="row mb-3">
                <div class="col-12 col-sm-5">
                    <label for="originAccount" class="form-label">Origin Account</label>
                    <select class="form-select" id="originAccount" aria-label="Default select example" required>
                        <option selected value="My Account - 999403020030">My Account - 999403020030</option>
                        <option value="My 2nd Account - 999403020031">My 2nd Account - 999403020031</option>
                        <option value="My 3rd Account - 999403020032">My 3rd Account - 999403020032</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-5">
                    <div class="mb-3">
                        <label for="destinationIban" class="form-label">Destination IBAN</label>
                        <input type="text" class="form-control" id="destinationIban" placeholder="PT500..." required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4">
                    <div class="mb-3">
                        <label for="transferDescription" class="form-label">Transfer Description</label>
                        <textarea class="form-control" id="transferDescription" rows="3" placeholder="This is an example transaction description that spans more than one line" required></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-3">
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <div class="d-flex">
                            <input type="number" min="0" class="form-control" id="amount" placeholder="€€€" required>
                            <span class="ms-3 my-auto">EUR</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-column min-vh-30">
                <div class="col-12 mt-sm-auto">
                    <button id="nextStepBtn" type="submit" class="btns next-step-btn">Next Step</button>
                </div>
            </div>
        </form>
    </div>
</div>
