@php
    $resource = $resource ?? null;
    $pageType = $pageType ?? null;
    $faqRaw = $faq ?? null;
    $faqItems = [];

    if (!empty($faqRaw) && is_string($faqRaw)) {
        $faqData = json_decode($faqRaw, true);
        if (json_last_error() === JSON_ERROR_NONE && is_array($faqData)) {
            $questions = data_get($faqData, 'questions', []);
            $answers = data_get($faqData, 'answers', []);
            if (is_array($questions) && is_array($answers)) {
                foreach ($questions as $index => $question) {
                    $answer = $answers[$index] ?? '';
                    if (trim((string) $question) !== '') {
                        $faqItems[] = [
                            'question' => trim((string) $question),
                            'answer' => trim((string) $answer),
                        ];
                    }
                }
            }
        }
    }

    $pageSchema = null;
    $currentUrl = url()->current();
    $publishedDate = optional($resource->created_at)->toIso8601String();
    $modifiedDate = optional($resource->updated_at)->toIso8601String() ?: $publishedDate;
    $imageUrl = null;

    if ($resource && $pageType) {
        switch ($pageType) {
            case 'tour':
                $imageUrl = !empty($resource->image)
                    ? asset('uploads/tour/image/' . $resource->image)
                    : (!empty($resource->banner) ? asset('uploads/tour/banner/' . $resource->banner) : null);
                $price = null;
                if (!empty($resource->price)) {
                    $numbers = preg_replace('/[^0-9.]/', '', $resource->price);
                    if (is_numeric($numbers)) {
                        $price = $numbers;
                    }
                }
                $pageSchema = [
                    '@type' => 'TouristTrip',
                    'name' => $resource->title ?? ($resource->heading ?? null),
                    'description' => $resource->meta_description ?? strip_tags($resource->content ?? ''),
                    'url' => $currentUrl,
                    'image' => $imageUrl,
                    'touristType' => $resource->region->region ?? null,
                ];
                if ($price !== null) {
                    $pageSchema['offers'] = [
                        '@type' => 'Offer',
                        'price' => $price,
                        'priceCurrency' => 'EUR',
                        'availability' => 'https://schema.org/InStock',
                    ];
                }
                break;
            case 'blog':
                $imageUrl = !empty($resource->image) ? asset('uploads/blog/' . $resource->image) : null;
                $pageSchema = [
                    '@type' => 'BlogPosting',
                    'headline' => $resource->title ?? null,
                    'description' => $resource->meta_description ?? strip_tags($resource->content ?? ''),
                    'url' => $currentUrl,
                    'image' => $imageUrl,
                    'author' => [
                        '@type' => !empty($resource->posted_by) ? 'Person' : 'Organization',
                        'name' => $resource->posted_by ?? 'Poonam Voyage Inde',
                    ],
                    'publisher' => [
                        '@type' => 'Organization',
                        'name' => 'Poonam Voyage Inde',
                    ],
                    'datePublished' => $publishedDate,
                    'dateModified' => $modifiedDate,
                ];
                break;
            case 'region':
                $imageUrl = !empty($resource->image)
                    ? asset('uploads/regions/' . $resource->image)
                    : (!empty($resource->banner) ? asset('uploads/regions/' . $resource->banner) : null);
                $pageSchema = [
                    '@type' => 'Place',
                    'name' => $resource->region ?? $resource->title ?? null,
                    'description' => $resource->meta_description ?? strip_tags($resource->content ?? ''),
                    'url' => $currentUrl,
                    'image' => $imageUrl,
                ];
                break;
            case 'testimonial':
                $pageSchema = [
                    '@type' => 'Review',
                    'author' => [
                        '@type' => 'Person',
                        'name' => $resource->name ?? 'Client',
                    ],
                    'reviewBody' => strip_tags($resource->comment_content ?? $resource->comment_head ?? ''),
                    'name' => $resource->comment_head ?? null,
                    'datePublished' => $publishedDate,
                    'itemReviewed' => [
                        '@type' => 'TravelAgency',
                        'name' => 'Poonam Voyage Inde',
                        'url' => url('/')
                    ],
                ];
                break;
        }
    }

    $graph = [];
    if (!empty($pageSchema)) {
        $graph[] = $pageSchema;
    }
    if (count($faqItems)) {
        $faqSchema = [
            '@type' => 'FAQPage',
            'mainEntity' => array_map(function ($item) {
                return [
                    '@type' => 'Question',
                    'name' => $item['question'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $item['answer'],
                    ],
                ];
            }, $faqItems),
        ];
        $graph[] = $faqSchema;
    }

    $schemaOutput = null;
    if (count($graph)) {
        $schemaOutput = [
            '@context' => 'https://schema.org',
            '@graph' => $graph,
        ];
    }
@endphp

@if($schemaOutput)
<script type="application/ld+json">
{!! json_encode($schemaOutput, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
@endif
