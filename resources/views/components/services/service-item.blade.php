@props([
    'title',
    'description',
    'points' => [],
    'image',
    'imagePosition' => 'right',
    'ctaLabel' => 'Prendre rendez-vous',
    'ctaRoute' => 'appointment',
])


<x-services.service-card
    :title="$title"
    :description="$description"
    :points="$points"
    :image="$image"
    :imagePosition="$imagePosition"
    :ctaLabel="$ctaLabel"
    :ctaRoute="$ctaRoute"
/>