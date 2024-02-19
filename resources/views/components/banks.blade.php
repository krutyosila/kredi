<div>
    <div class="row">
        @foreach($banks as $bank)

            <div class="col-4 col-md-3 p-3 text-center">
                @if($bank->getMedia('*')->count() > 0)
                    <div class="pb-3">
                        <img src="{{$bank->getMedia('*')[0]->getFullUrl()}}"
                             class="rounded bg-white" alt="" style="width: 60px; height: 60px;">
                    </div>
                @else
                    <div class="pb-3">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                            class="rounded bg-white" alt="" style="width: 60px; height: 60px;">
                    </div>
                @endif
                {{ $bank->name }}
            </div>
        @endforeach
    </div>
</div>
