@if($films->isEmpty())
    <p>К сожалению, этот раздел пуст...</p>
@else

    <div class="list__films">
        @foreach($films as $film)
            @if ($film->image_path == null)
                <?php
                $url = asset('images/no_image.png')
                ?>
            @else
                <?php
                $url = Storage::url($film->image_path)
                ?>
            @endif

            <a href="{{ route('films.show', $film) }}">
                <div class="card__film"
                     style="background: url( {{ $url }}); background-repeat: no-repeat; background-size: 100% 100%">
                    <div class="header">
                        <h2>{{ $film->title }}</h2>
                        <h3>Оценка: {{ $film->rating }}/10</h3>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endif
