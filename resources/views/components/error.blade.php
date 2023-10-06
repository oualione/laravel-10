<div class="row my-3">
    <div class="col-md-12">
        @if ($errors->any())
            <div {{ $attributes->merge(['class' => 'alert alert-danger']) }}>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>