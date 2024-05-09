@extends('site.profile')
@section('profileContent')
    <section class="content" style="width: 100%; padding: 15px">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            @foreach($faqs as $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{ '#flush-collapse-' . $faq->id }}" aria-expanded="false" aria-controls="{{ 'flush-collapse-' . $faq->id }}">
                            {{ $faq->title }}
                        </button>
                    </h2>
                    <div id="{{ 'flush-collapse-' . $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><p><?php echo $faq->content; ?></p></div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
