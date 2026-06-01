@php
    $schema = $schema ?? null;
    $faq = $faq ?? null;
    $faqItems = [];
    if (!empty($faq) && is_string($faq)) {
        $faqData = json_decode($faq, true);
        if (json_last_error() === JSON_ERROR_NONE && is_array($faqData)) {
            $questions = data_get($faqData, 'questions', []);
            $answers = data_get($faqData, 'answers', []);
            if (is_array($questions) && is_array($answers)) {
                foreach ($questions as $index => $question) {
                    $answer = $answers[$index] ?? '';
                    if (trim((string) $question) !== '') {
                        $faqItems[] = [
                            'question' => trim($question),
                            'answer' => trim((string) $answer),
                        ];
                    }
                }
            }
        }
    }
@endphp

@if(count($faqItems))
<section class="faq-section pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Questions fréquentes</h2>
            <p>Retrouvez les réponses aux questions les plus courantes.</p>
        </div>

        <div class="faq-items">
            @foreach($faqItems as $index => $item)
                <details class="faq-item" @if($index === 0) open @endif>
                    <summary>{{ $item['question'] }}</summary>
                    <div class="faq-answer">
                        {!! nl2br(e($item['answer'])) !!}
                    </div>
                </details>
            @endforeach
        </div>
    </div>

    <style>
        .faq-section {
            background: #f8f9fb;
            border-radius: 20px;
            padding: 40px 20px;
            margin-top: 50px;
        }
        .faq-section .section-title h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }
        .faq-section .faq-items {
            margin-top: 30px;
            display: grid;
            gap: 16px;
        }
        .faq-section .faq-item {
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 14px;
            background: #ffffff;
            padding: 18px 22px;
            transition: box-shadow 0.25s ease;
        }
        .faq-section .faq-item[open] {
            box-shadow: 0 12px 30px rgba(33, 33, 33, 0.08);
        }
        .faq-section summary {
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            list-style: none;
            outline: none;
        }
        .faq-section summary::-webkit-details-marker {
            display: none;
        }
        .faq-section summary::before {
            content: '\2795';
            display: inline-block;
            margin-right: 10px;
            font-size: 1.1rem;
        }
        .faq-section details[open] summary::before {
            content: '\2796';
        }
        .faq-section .faq-answer {
            margin-top: 16px;
            color: #4d4d4d;
            line-height: 1.8;
            font-size: 0.97rem;
        }
        @media (max-width: 767px) {
            .faq-section {
                padding: 24px 16px;
            }
        }
    </style>
</section>
@endif
