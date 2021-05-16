<div>
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-4 mx-auto my-auto">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        Ridxery Playground
                    </h2>
                </div>
                <div class="card-body">
                    @if(!empty($loginError))
                        <p class="my-3">
                            <i class="fa fa-exclamation-triangle text-danger"></i> {{$loginError}}
                        </p>
                    @endif
                    <form wire:submit.prevent="login">
                        <div class="form-group">
                            <label>
                                E-Mail:
                            </label>
                            <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email') <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label>
                                Password:
                            </label>
                            <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password') <div class="invalid-feedback">{{$message}}</div> @enderror
                        </div>
                        <button class="btn btn-success mt-3 mx-auto">
                            <i class="fa fa-sign-in-alt"></i> Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
